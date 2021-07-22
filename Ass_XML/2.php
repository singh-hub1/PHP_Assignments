<?php

$xml = new SimpleXMLElement('<abc_bookstore/>');

    $Arts = $xml->addChild('Arts');

    $Arts->addChild('publication_year', "2001");

    $Arts->addChild('book_title', "aaa");

    $Arts->addChild('book_author', "xxxx");


    $Science = $xml->addChild('Science');

    $Science->addChild('publication_year', "2005");

    $Science->addChild('book_title', "bbb");

    $Science->addChild('book_author', "zzzzz");


    
    $Commerce = $xml->addChild('Commerce');

    $Commerce->addChild('publication_year', "2011");

    $Commerce->addChild('book_title', "eeee");

    $Commerce->addChild('book_author', "jjjj");
    
    

$xml->asXML("book.xml");

header('Content-type: text/xml');

print($xml->asXML());

?>