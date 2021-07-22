<?php


$xml=new SimpleXMLElement('<CD_Store/>');

    $mov=$xml->addChild('Title');

    $mov->addChild('MovieName',"Mr. India");

    $mov->addChild('ReleaseYear',"1987");


    $mov=$xml->addChild('Title');

    $mov->addChild('MovieName',"Holiday");

    $mov->addChild('ReleaseYear',"2014");


    $mov=$xml->addChild('Title');

    $mov->addChild('MovieName',"LOC");

    $mov->addChild('ReleaseYear',"2003");


$xml->asXML("cdstore.xml");

header('Content-type: text/xml');

print($xml->asXML());



?>