<?php
    session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php 
    if(isset($_SESSION["view"])){
        $_SESSION["view"]+=1;
        if($_SESSION["view"]==5){
            session_destroy();
        }
    }
    else{
        $_SESSION["view"]=1;
    }
    echo "view = ".$_SESSION["view"];
?>
</body>
</html>