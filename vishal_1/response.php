<?php
$data=$_GET['val'];

$a=array("pune","mumbai");
$b=array("patna","danapur");
$c=array("xyz","abc");

if($data=="MAHARASHTRA")
{
    foreach($a as $one )
    {
        echo "<option> $one </option>";
    }
}

 if($data=="GOA")
{
    foreach($c as $one )
    {
        echo "<option> $one </option>";
    }
}

 if($data=="BIHAR")
{
    foreach($b as $one )
    {
        echo "<option> $one </option>";
    }
}

?>