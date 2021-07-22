<?php

$xml = new SimpleXMLElement('<Course/>');

    $Arts = $xml->addChild('Arts');

    $Arts->addChild('Level', "1");

    $Arts->addChild('IntakeCapacity', "500");




    $Science = $xml->addChild('Science');

    $Science->addChild('Level', "2");

    $Science->addChild('IntakeCapacity', "100");




    
    $Commerce = $xml->addChild('Commerce');

    $Commerce->addChild('Level', "3");

    $Commerce->addChild('IntakeCapacity', "600");

 

    $Management = $xml->addChild('Commerce');

    $Management->addChild('Level', "4");

    $Management->addChild('IntakeCapacity', "800");


    
    

$xml->asXML("course.xml");

header('Content-type: text/xml');

print($xml->asXML());

?>