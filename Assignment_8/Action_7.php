
PHP file :

<?php
$con_string = "host=localhost dbname=vishal port=5432 user=postgres password=singh";

$con = pg_connect($con_string);

echo "</br>";
$q = "select * from teacher;";

$rs = pg_query($con,$q) or die("Cannot Execute query");

while($row = pg_fetch_row($rs))

echo "$row[0] $row[1] $row[2]\n</br>";

pg_close();
?>