<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Db {

    private $dbConfig = [
        'db' => 'mysql',
        'host' => '123.207.140.186',
        'port' => '3306',
        'user' => 'zh',
        'pass' => 'zhpassword',
        'charset' => 'utf8',
        'dbname' => 'zh'
    ];
    
    public $insertId = null;
    
    public $num = 0;
    
    //单例模式
    private static $instance = null;
    //数据库的连接
    private $conn = null;

    private function __construct($param) {
        //初始化连接参数

        array_merge($this->dbConfig, $param);

        ////连接数据库
        $this->connect();
    }

    private function __clone() {
        
    }

    public function getInstance($param = []) {
        if (!self::$instance instanceof self) {
            self::$instance = new self($param);
        }
        return self::$instance;
    }

    private function connect() {
        try {
            $dsn = "{$this->dbConfig['db']}:host={$this->dbConfig['host']};"
                    . "port={$this->dbConfig['port']};dbname={$this->dbConfig['dbname']};"
                    . "charset={$this->dbConfig['charset']}";

            //创建pdo对象
            $this->conn = new PDO($dsn, $this->dbConfig['user'], $this->dbConfig['pass']);

            $this->conn->query("SET NAMES {$this->dbConfig['charset']}");
            
        } catch (Exception $ex) {
            die('数据库连接失败' . $ex->getMessage());
        }
    }

    public function exec($sql) {
        $num = $this->conn->exec($sql);
        if ($num > 0) {
            //如果新增操作，初始化新增逐渐ID属性
            if(null !== $this->conn->lastInsertId()){
                $this->insertId = $this->conn->lastInsertId();
            }
            $this->num = $num;
        }else{
            $error = $this->conn->errorInfo();
            print '操作失败'.$error[0].":".$error[1].":".$error[2];
        }
    }
    
    public function fetch($sql){
       return  $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    
    public function fetchAll($sql){
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    
    

}
