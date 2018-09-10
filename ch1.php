<?php
    $t = date("H");
    if ($t<"20"){
        echo $t;
        echo "Have a good day!";
    }
    else{
        echo "Have a good night!";
    }
?>
<?php
$color = "red";
switch($color){
    case "resd":
        echo "the color is $color";
        break;
    case "blue":
        ECHO "the color is BULE";
        break;
    default:
        echo "the color is unknow";
}
?>
<?php
echo "\n";
$car = array("Volvo","BMW","Toyota");
echo "I like".$car[0].",".$car[1].$car[2];
$arrlen =  count($car);
for ($x = 0;$x<$arrlen;$x++){
    echo $car[$x];
    echo "\n";
}
?>

<?php
    $age = array("zhu"=>12,"wang"=>20,12345);
    echo "my age ".$age[0];
    foreach($age as $x=>$x_value){
        echo "Key = ".$x." Value = ".$x_value;
    }

?>
<?php
    $fname = array("zhu","wang","li");
    $age = array(12,34,56);
    $c = array_combine($fname,$age);
    krsort($c);
    print_r($c);
?>
