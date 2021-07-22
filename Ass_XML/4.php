<?php

$xml=new SimpleXMLElement('<CD_Store/>');

    $mov=$xml->addChild('Movie');

    $mov->addChild('Title',"Mr. India");

    $mov->addChild('ReleaseYear',"1987");


    $mov=$xml->addChild('Movie');

    $mov->addChild('Title',"Holiday");

    $mov->addChild('ReleaseYear',"2014");


    $mov=$xml->addChild('Movie');

    $mov->addChild('Title',"LOC");

    $mov->addChild('ReleaseYear',"2003");

$xml->asXML("cdstore.xml");

header('Content-type: text/xml');

print($xml->asXML());


?>
