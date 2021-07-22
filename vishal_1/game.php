<?php
$game=$_GET["t"];

$a=array("basketball","lawn-teenis","badmination","volleyball","cricket");

$hint="";

if($game!=="")
{
    $len=strlen($game);

    foreach($a as $name)
    {
        if(stristr($game,substr($name,0,$len)))
        {
            if($hint==="")
            
                $hint=$name;
            
            else
            
                $hint .= ",$name";
            
        }
    }

if($hint=="")
echo "No suggestions";
else
echo $hint;
}
?>