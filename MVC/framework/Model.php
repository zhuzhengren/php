<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model
{
    protected $db = null;
    
    public function __construct() {
       $this->init() ;
    }
    
    private function init(){
        $dbConfig = [
            'user'=>'zh',
            'pass'=>'zhpassword',
            'dbname'=>'edu',
            
        ];
        
        $this->db = Db::getInstance($dbConfig);
        
    }
    
    public function getAll(){
        $sql = "SELECT * FROM edu_user";
        return $this->data = $this->db->fetchAll($sql);
        
    }
    
    public function get($id){
        $sql = "SELECT * FROM edu_user WHERE id ={$id}";
        return $this->data = $this->db->fetch($sql);
    }
    
}

