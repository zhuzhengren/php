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

    class myException extends Exception
    {
        public function errorMessage(){
            $errorMsg = '错误信息'.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';;
            return $errorMsg;
        }
    }

    $email = "someone@example...com";
    
    try{
        if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
            throw new myException($email);
            echo "成功被捕或";
        }
        print_r("这里的代码没有执行，为什么呢？？？？");
        if(strpos($email,"example")!==FALSE){
            echo "抛出exception 异常";
            throw new Exception("$email 是example邮箱");
        }

    }
    catch(myException $e){
        echo $e->errorMessage();
        print_r("第一个异常已经结束");
    }
    
    catch(Excaption $e){
        echo "这是第二个错误";
        echo $e->getMessage();
    }


/*
    function checknum($num){
        if ($num>1){
            throw new exception("数字不能大于1");
        }
    }

    echo "jjjjj";
    try{
        checknum(2);
    }
    catch(Exception $e){
        echo "错误捕获成功 errstr = ".$e->getMessage();
    }
    */

?>