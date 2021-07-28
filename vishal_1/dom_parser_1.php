<?php
$x=new DOMDocument();
$x->load("dom_parser_1.xml");

$y=$x->documentElement;
// print_r($y);
foreach($y->childNodes as $item)
{
    print ($item->nodeName ."=".$item->nodeValue);
    echo "<br>";
}

// #text=
// record= vishal xyz
// #text=
// record= arya abc
// #text=
// record= jaus home
// #text=

?>