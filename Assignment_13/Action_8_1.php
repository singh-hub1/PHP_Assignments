<?php
$style=$_COOKIE['fstyle'];

$color=$_COOKIE['fcolor'];

$size=$_COOKIE['fsize'];

$b_color=$_COOKIE['bgcolor'];

$msg="Vishal Singh is a good boy!! ";

echo "<body bgcolor=$b_color>";

echo "<font color=$color size=$size style=$style>";
echo $msg;
 

echo "</font></body>";

?>