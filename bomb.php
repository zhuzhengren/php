<?php
$str ="<xml>  <ToUserName>< ![CDATA[zhuzhengrenbook] ]></ToUserName>  <FromUserName>< ![CDATA[o1EwAwq-qmqpw_rdKU-jj_7gEVS4] ]></FromUserName>  <CreateTime> 1538728694 </CreateTime>  <MsgType>< ![CDATA[text] ]></MsgType>  <Content>< ![CDATA[this is a test] ]></Content>  <MsgId>1234567890123456</MsgId>  </xml>";
$t = simplexml_load_string($str);

$arr = array(5,3,6,2,8,10);
for($i = count($arr)-1;$i>=0;$i--){
    for($j = 0 ; $j < $i ; $j++){
        if($arr[$j+1] > $arr[$j] ){
            $aa = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $aa;
        }
    }
}
print_r($arr);
?>