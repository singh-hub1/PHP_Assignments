<?php

$x=simplexml_load_file('loopxml_extension.xml') or die('Unable to load this file');

foreach($x->Book as $y)
{
    echo $y->title."<br>";
    echo $y->year."<br>";
    echo $y->publisher->author."<br>";
    echo $y->publisher->date."<br>";
}

?>