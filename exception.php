<?php
    function checkNum($number){
        if($number > 1){
            echo "before error";
            throw new Exception("value lager 1");
            echo "after error";
            }
    }
    try{
        echo "before use function";
        checkNum(2);
    }
    catch(Exception $e){
        echo "message: ".$e->getMessage();
    }
    echo "成功捕获异常并且能够继续运行";
?>