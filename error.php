
<?php
/*
if(!file_exists("welcome.txt"))
{
    die("文件不存在");
}
else
{
    $file=fopen("welcome.txt","r");
}
echo "end";
*/
 ?>


<?php
    //错误码处理函数
    function customError($errno, $errstr){
        echo "<b> Error:</b> [$errno] $errstr<br>";
        echo "错误已处理，脚本结束";
        die();
    }
    //设置错误码监听事件
    set_error_handler("customError",E_USER_WARNING);
    $test = 2;
    if($test > 1){
        //发送错误码
        trigger_error("变量值必须小于等于 1",E_USER_WARNING);
    }
?>