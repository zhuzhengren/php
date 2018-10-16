<?php

/**
 * Description of UserController
 *
 * @author zzr
 * 
 */
class UserController {

    //获取所有数据
    public function listAllAction() {
        //实例化模型类获取数据
        $user = new UserModel();
        $data = $user->getAll();
        
        require './application/home/view/user_list.php';
    }

    //获取单条数据
    public function listSingleAction($id = 1) {
        $id = isset($_GET['id']) ? $_GET['id'] : $id;
        //实例化模型类获取数据
        $user = new UserModel();
        $data = $user->get($id);
        require './application/home/view/user_single.php';
    }

}
