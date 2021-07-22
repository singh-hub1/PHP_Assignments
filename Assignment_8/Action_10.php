


<?php
$xml=simplexml_load_file("10.xml") or die("eror:cannot create object");
echo "<table border=1 align=center>";
echo "<tr><td>Employee no</td><td>Employee Name</td><td>Employee
Salary</td><td>Employee Employee Designation</td></tr>";
foreach($xml->children() as $emp)
{
$arr = $emp->attributes();
echo "<tr><td>".$arr["Empno"]."</td>";
echo "<td>".$arr["Empname"]."</td>";
echo "<td>".$emp->Sal."</td>";
echo "<td>".$emp->Desg."</td></tr>";
}
echo "<table>";
?>
