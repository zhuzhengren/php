<?php 
echo "Hello World!"; 
setcookie("name","zhu",time()+300);
echo $_COOKIE["name"];
if (isset($_COOKIE["name"])){
    echo "cookie is".$_COOKIE["name"];
}else {
    echo "no cookie";
}
echo "end";
?> 