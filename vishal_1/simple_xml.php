<?php

$x="<?xml version='1.0'?><person></person>";

$y=simplexml_load_string($x);

$y->addAttribute('Age','20');
$y->addAttribute('Gender','Male');

$y->addChild('Name','Vishal singh');
$y->addChild('DOB','2/2/2001');

$address=$y->addChild('address');
$address->addChild('Street','danapur');
$address->addChild('City','patna');

$country=$address->addChild('Country','India');
$country->addAttribute('Code','+91');

header('Content-Type:text/xml');

print_r($y->asXML());





?>