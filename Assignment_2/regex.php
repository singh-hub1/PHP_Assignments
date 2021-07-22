<?php
$string="vishal singh is good boy as well as bad good boy";

$exp=preg_match("/good/",$string);
echo $exp;//1
echo"<br>";

//======================================================================================================================================================================

$exp=preg_match("/GOOD/",$string);
echo $exp;//0 bcoz it is case sensitive
echo"<br>";

//======================================================================================================================================================================

$exp=preg_match("/good/i",$string);
echo $exp;
//it return 1 bcoz we use modifiers(i) after forward slash it ignored case sensitive
echo"<br>";
echo"<br>";
echo"<br>";

//======================================================================================================================================================================

$exp=preg_match_all("/good/",$string,$arr);
echo $exp;//good is present in 2 time in th estring
echo"<br>";

echo"<pre>";
print_r($arr);//it print 2 times good in th earray stored
echo"</pre>";


//======================================================================================================================================================================


$exp=preg_match_all("/good|bad|vishal|singh/",$string,$arr);
echo $exp;//good is present in 2 time in th estring
echo"<br>";

echo"<pre>";
print_r($arr);//it print 2 times good in th earray stored
echo"</pre>";


?>