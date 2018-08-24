<?php
$xml = simplexml_load_file("cd_catalog.xml");
$name = $_GET["q"];

foreach($xml->CD as $cd){
    if($cd->ARTIST == $name){
        echo "TITLE: ".$cd->TITLE."<br>";
        echo "ARTIST: ".$cd->ARTIST."<br>";
        echo "COUNTRY: ".$cd->COUNTRY."<br>";
        echo "COMPANY: ".$cd->COMPANY."<br>";
        echo "PRICE: ".$cd->PRICE."<br>";
        echo "YEAR: ".$cd->YEAR."<br>";
        
    }
}

?>
