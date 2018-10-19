<?php

/*
 * 签到服务类
 */

class Service_Checkin {

    private $dao_check; //数据库操作对象
    private $_redis;    //redis操作对象
    private $_cachekey; //
    public $day_num; //当天的日期例如20181019
    public $yes_num; //昨天日期例如20181018

    const SERIAL_MAX = 7;
    const KEY_PREFIX = 'user_checkin_'; //redis地段前缀

    public function __construct() {
        $this->dao_check = new Dao_Checkin();
        $this->day_num = date('Ymd');
        $this->yes_num = date('Ymd', strtotime('yesterday'));
    }

    /**
     * 连续签到天数
     * 计算已经连续签到的天数
     * 和今天是否已经签到
     */
    public function checkinDays($input) {
        $day = 0;
        $checkin = 0;
        $ret = $this->dao_check->getCheckinDays($input['user_id']);
        //如果昨天已经签到
        if ($ret && ($ret['day_num'] >= $this->yes_num)) {
            $days = $ret['serial_days'];
            //如果昨天已经签满最大连续签到数
            if ($ret['serial_days'] >= self::SERIAL_MAX && $ret['day_num'] == $this->yes_num) {
                $days = 0; //连签归零
            }
            //如果今天已经签到
            if ($ret['day_num'] == $this->day_num) {
                $checkin = 1;
            }
        }
        $ret['data']['days'] = $days;
        $ret['data']['days'] = $checkin;
    }

    /**
     * 用户签到V1
     */
    public function checkin($input) {
        //频率控制
        $this->freqControl($input);

        $user_id = $input['user_id'];
        $app = $input['app'];
        $curr = time();
        $dao_coin = new Dao_Coin(); //收益记录数据库操作对象
        $dao_wallet = new Dao_Wallet(); //个人钱包数据库操作对象
        $conf = Conf_User_Wallet::$checkin['awards'];
        $data = $this->checkinDays($input);
        $serial_days = $data['data']['data'] + 1;
        if ($serial_days > self::SERIAL_MAX) { //???这个判断永远不会被执行到吧？？？
            $serial_days = 1;
        }
        //计算奖励金额
        $total_coins = $conf[$serial_days][0] + $conf[$serial_days][1]; //当天奖励加上连签奖励
        //准备将受益记录写入数据库
        //当天奖励
        $records[] = [
            'user_id' => $user_id,
            'type' => 1,
            'coin_num' => $conf[$serial_days][0],
            'create_time' => $curr,
            'app' => $app
        ];
        //连签奖励
        if ($conf[$serial_days][1]) {
            $records[] = [
                'user_id' => $user_id,
                'type' => 2,
                'coin_num' => $conf[$serial_days][1],
                'create_time' => $curr,
                'app' => $app
            ];
        }
        //寫入收益記錄到數據庫
        //使用數據庫的事物操作
        try{
            $this->dao_check->startTransation();
            $this->dao_check->userCheckin($user_id,$serial_days);//写入簽到記錄數據庫
            $dao_coin->addUserCoin($records);//寫入收益記錄
            $dao_wallet->updateUserCoin($user_id, $total_coins); //更新個人錢包
            $expire = strtotime('tomorrow') - $curr;
            Common_Cache::setex($this->_cachekey, $expire, 1);
            $this->dao_check->commit();
        } catch (Exception $ex) {
            $this->dao_check->rollBack();
            throw new FsException(CHECKIN_FATAL, 'user checkin fatal');
        }
        return true;
    }
    
    /**
     * 用戶簽到V2
     * 增加返回最熱視頻
     */
    public function checkinV2($input){
        $ret = $this->checkin($input);
        $dao_video = new Dao_Video_Video();
        $list = $dao_video->getHostVideos(4);//獲取最熱的視頻4個，返回視頻的基本信息
        //獲取視頻詳情
        $data_video = new Data_Video();
        $res['data'] = $data_video->getListData($list);
        return $res;
    }

    /**
     * 頻率控制，判斷今天是否已經簽到
     */
    public function freqControl($input){
        $this->_cachekey = self::KEY_PREFIX . $input['user_id'];
        $cache = Common_Cache::get($this->_cachekey);
        if($cache){
            throw new FsException(CHECKIN_REPEAT,'user checkin repeat');
        }
    }

}
