<?php

require  'model/Db.php';

$db = Db::getInstance();

//$sql = 'UPDATE  edu_user SET name="wang" WHERE id=1';
////$db->exec($sql);
//
//$createtime = time();
//$createtime = time();
//
//$sql = "INSERT edu_user SET  name='wangyan',password='123456',"
//        . "email='wang@qq.com',role=1,create_time={$createtime},update_time={$createtime}   ";
//$db->exec($sql);
//echo "dd".$db->insertId;

$sql = "select * from edu_user where id>50";
$row = $db->fetchAll($sql);
print_r($row);
