<?php
$xml = simplexml_load_file("links.xml");
$str = $_GET["q"];
$hint = "";
foreach($xml->link as $link){
    if(strpos($link->title,$str)){
        $hint=$hint.'<a href="'.$link->url.' "target = "_black" >'.$link->title.' </a> <br>';
    }
}
if($hint==""){
    echo "no suggestion";
}
else {
    echo $hint;
}
?>
