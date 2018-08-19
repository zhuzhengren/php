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
    echo $txt1.$txt2
?>