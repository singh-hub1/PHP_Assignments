<?php
$r    =   $_POST['r'];
$h   =   $_POST['h'];


define('PI','3.14');


interface shape
{
    function area($r,$h);
    function vol($r,$h);
}


class cylinder implements shape
{
     function area($r,$h)
        {
           $area  =  2*PI*$r*($r+$h);
            echo "<h3>The area of cylinder is :$area</h3>";     
        }
    function vol($r,$h)
    {
        $vol  =  PI*$r*$r*$h;
        echo "<h3>The volume of cylinder is :$vol</h3>";  
    }
}
$c   =  new cylinder;
$c->area($r,$h);
$c->vol($r,$h);
?>
