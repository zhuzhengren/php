<?php


/**
 * 框架的入口文件
 */

//导入框架基础类
require './framework/Base.php';

//实例化框架方法
$app = new Base();

//运行框架
$app->run();