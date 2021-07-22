<?php
$d=new DOMDocument();

$d->simplexml_load_file("6.xml");

$run=$d->getElementsByTagName('s_name');

$wic=$d->getElementsByTagName('wickets');

$name=$d->getElementsByTagName('s_code');

foreach($name as $n)
{
            if($run == '1000' && $wic >= '50' )

            {
                echo "<br>".$n->textContent;
            }

            else 
            {
                "Nothing will be found here !!!";
            }        
}
?>
