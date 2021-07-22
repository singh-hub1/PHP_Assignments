<?php

$xml = new SimpleXMLElement('<Mayanagari_CD_Store/>');

    $classical = $xml->addChild('Classical');

    $classical->addChild('MovieName', "The_Wizard_of_Oz");

    $classical->addChild('ReleaseYear', "1939");


    $action = $xml->addChild('Action');

    $action->addChild('MovieName', "Aeliens");

    $action->addChild('ReleaseYear', "1986");

    
    $horor = $xml->addChild('Horror');

    $horor->addChild('MovieName', "It");

    $horor->addChild('ReleaseYear', "2017");
    
    

$xml->asXML("movies.xml");

header('Content-type: text/xml');

print($xml->asXML());

?>