<?php
    $xml = simplexml_load_file("xml.xml");
    print_r($xml);
    print_r($xml->to);
    echo $xml->getName();
    foreach($xml->children() as $child){
        echo $child->getName()." : ".$child."<br>";
    }
?>