<?php
$xml=new DOMDocument();
$xml->load("dom_parser.xml");
echo "<pre>";

print_r($xml->saveXML());
echo "</pre>";


?>