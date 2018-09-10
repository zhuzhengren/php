<?php 
    $x = 5985;
    var_dump($x);
    $x= -345;
    var_dump($x);
    $x = 0x8C;
    var_dump($x);
    $x = 012;
    var_dump($x);
    $x = 12.345;
    var_dump($x);
    $x = 2.4e3;
    var_dump($x);
    $x = 8e-5;
    var_dump($x);
    $x = faLse;
    var_dump($x);
    $car = array('volvo','bmw',"bingli");
    var_dump($car);
    class car
    {
        var $color;
        function __construct($color="green"){
            $this->color = $color;
        }
        function what_color(){
            return $this->color();
        }
    }
    $herbie = new car("white");
    var_dump($herbie);
    $x = nuLl;
    var_dump($x);

    define("GREETING", "欢迎访问这个世界");
    echo Greeting;
    function myTest(){
        echo GREETING;
    }
    myTest();
    $txt1 = "Hello world!!!";
    $txt2 = "I am fine";
    echo $txt1.$txt2;

    echo strlen("Hello world!!!");
    echo strpos("Hello world", "wor");
    echo "\n";
    $str = bin2hex("Hello World!");
    $enc =  convert_uuencode("hello world");
    echo "enc is".$enc;
    $dec =  convert_uudecode($enc);
    echo "dec is ".$dec;
    echo "\n";
    $x = 10;
    $y = 6;
    echo ($x + $y);
    echo $x - $y;
    $x = 10;
    $y = "10.0";
    var_dump($x ===$y);



    $x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

$test = "hello";
$username = isset($test) ? $test:'nobody';
echo $username,PHP_EOL;
$username  = $_GET['user']   ?? 'nobody';
echo $username;
?>