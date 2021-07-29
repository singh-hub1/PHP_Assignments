<?php

$x=simplexml_load_file('simplexml_extension.xml') or die('Unable to load this file');

echo $x->region->name ."<br>";
echo $x->region->country ."<br>";


?>