<?php
   $arr = array('a' => 1, 'b' => 2, 'c' => [3,11,22,33], 'd' => 4, 'e' => 5);
   echo json_encode($arr,JSON_HEX_QUOT);
?>
<?php
    class Emp{
        public $name = "";
        public $hobbies = "";
        public $birthdate = "";
    }
    $e = new Emp();
    $e->name = "zhu";
    $e->hobbies = "sport";
    $e->birthdate = date('m/d/Y h:i:s a', "8/5/1974 12:20:03 p");
    $dec = json_encode($e,JSON_HEX_TAG);
    echo $dec;
    var_dump(json_decode($dec))

?>