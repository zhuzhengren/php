<?php
$xml = simplexml_load_file("links.xml");
$str = $_GET["q"];
$hint = "";
foreach($xml->link as $link){
    if(strpos($link->title,$str)){
        $hint=$hint."<a href=".$link->title." target = '_black'</a> <br>"
    }
}
if($hint==""){
    return "no suggestion";
}
else {
    return $hint;
}
?>