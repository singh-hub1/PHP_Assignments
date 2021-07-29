<?php
$dom=new DOMDocument("1.0","utf-8");
$dom->preserveWhiteSpace=false;
$dom->formatOutput=true;

$books=$dom->createElement("books");

$book=$dom->createElement("book");


$name_1=$dom->createElement("name","vishal singh");

$price_1=$dom->createElement("price","2098");

$id_1=$dom->createElement("id","101");


$attr_1=$dom->createAttribute("version");

$attr_1->value="1.0";


$id_1->appendChild($attr_1);

// $id_1->removeChild($attr_1);

$books->appendChild($book);

$book->appendChild($name_1);

$book->appendChild($price_1);

$book->appendChild($id_1);


$dom->appendChild($books);

header('Content-Type:text/xml');
print_r($dom->saveXML());





?>