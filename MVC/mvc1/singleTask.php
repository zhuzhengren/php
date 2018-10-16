<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of singleTask
 *
 * @author zzr
 */
class Demo {
    //1.静态私有属性，保持当前类的实例
    private static $instance = NULL;
    
    //2.构造方法私有化，禁止从外部用new 来创建类实例
    private function __construct() {
    }
    
    //克隆方法私有化，禁止从外部克隆生成类的实例
    private function __clone() {
    }
    
    //4生成当前类的唯一实例
    public static function getInstance(){
        if(!(self::$instance instanceof self)){
            self::$instance =new self();
            var_dump(self::$instance);
        }
        return self::$instance;
    }
    
}

//$obj1 = new Demo;
//$obj2 = new Demo;
//$obj3 = new Demo;
//$obj4 = new Demo;
//$obj5 =  $obj4;
$obj1 =  Demo::getInstance();
$obj2 =  Demo::getInstance();
$obj3 =  Demo::getInstance();
$obj4 =  Demo::getInstance();
$obj5 =  Demo::getInstance();

var_dump($obj1,$obj2,$obj3,$obj4,$obj5);
var_dump($obj5);

