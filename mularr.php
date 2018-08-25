<?php

$cars =array( 
                array("Volvo",100,99),
                array("BMW",200,300),
                array("Toyota",400,500)
            );
echo $cars[1][0];

$sites =array(
    "baidu"=>array("百度","www.baidu.com"),
    "sina"=>array("新浪","www.sina.com.cn"),
    "google"=>array("谷歌","url"=>"www.google.com")
);
echo $sites["google"]["url"];
print("<pre>");
print_r($sites);
print("</pre>");
?>