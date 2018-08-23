<?php 
echo "Hello World!"; 
setcookie("name",time(),time()+300);
print_r($_COOKIE);
if (isset($_COOKIE["name"])){
    echo "cookie is".$_COOKIE["name"];
}else {
    echo "no cookie";
}

setcookie("name","",time()-300);
print_r($_COOKIE);
echo "end";
?> 
