<?php

/**
 * 前端控制器，入口文件，请求分发器
 */
require 'model/Db.php';
require 'model/Model.php';
require 'model/UserModel.php';

$controller = isset($_GET['c']) ? $_GET['c'] : 'User';

$controller .= 'Controller';

require 'controller/' . $controller . '.php';

$action = isset($_GET['a']) ? $_GET['a'] : 'listAll';

$obj = new $controller();

$obj->$action();

