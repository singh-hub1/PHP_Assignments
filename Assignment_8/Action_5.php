<?php
$con_string = "host=localhost dbname=vishal port=5432 user=postgres
password=singh";

$con = pg_connect($con_string);

$a = $_GET['a'];

echo $a;

echo "</br>";

$q = "select movie.mno,mname,r_yr from movie,actor where aname='$a' and

movie.mno = actor.mno;";

$rs = pg_query($con,$q) or die("Cannot Execute query");

while($row = pg_fetch_row($rs))

echo "$row[0] $row[1] $row[2]\n</br>";

pg_close();

?>