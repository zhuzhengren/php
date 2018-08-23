<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("xml.xml");
    print $xmlDoc->saveXML();
?>

<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("xml.xml");

    $x = $xmlDoc->documentElement;
    foreach($x->childNodes AS $item){
        print $item->nodeName . " = " . $item->nodeValue . "<br>";
    }
?>