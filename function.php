<?php
namespace MyProject;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function writename(){
    echo "kai jim refernnn";
}
echo "my name is ";
writename();

function writename1($fname){
    echo $fname;
}
echo "my name is ";
writename1("Hege");

function add($add1,$add2){
    $total = $add1 + $add2;
    return $total;
}
echo "10 + 15 = ".add(10,15);
echo  "<br>";
echo "这是第 ".__LINE__."行";
echo "这是第".__FILE__."文件";
echo "这是在目录".__DIR__."中";
function myfunname(){
    echo "这是在函数".__FUNCTION__."中";
}
myfunname();

class test{
    function _print(){
        echo "函数名".__FUNCTION__;
        echo "类名".__CLASS__;
    }
}
$t = new test();
$t->_print();

echo "<br>";
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
 
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
 
class MyHelloWorld extends Base {
    use SayWorld;
}
 
$o = new MyHelloWorld();
$o->sayHello();

echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject";

function fff()
{
    echo "method 方法为".__METHOD__;
}
fff();
?>