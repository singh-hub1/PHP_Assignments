<?php
$d=new DOMDocument();

$d->load("Action_3.xml");

$run=$d->getElementsByTagName('runs');

$wic=$d->getElementsByTagName('wickets');

$name=$d->getElementsByTagName('player');


foreach($name as $n)
{
            if($run == '1000' && $wic >= '50' )

            echo "<br>".$n->textContent;

            else "Nothing will be found here !!!";        
}
?>