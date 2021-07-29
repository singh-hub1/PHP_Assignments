<?php
$x=simplexml_load_file('modify.xml') or die("Unable to see");

$x->record[0]->name="arya singh";

$x->record[0]->position="aaa";

header('Content-Type:text/xml');

print_r($x->asXML());





?>