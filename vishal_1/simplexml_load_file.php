
<?php
$xml=simplexml_load_file('simplexml_load_file.xml');
echo "<h2>Employee information</h2>";
$list=$xml->record;
for($i=0;$i<count($list);$i++)
{
    echo "Employee ID :: ".$list[$i]->attributes()->emp_id."<br>";
    // echo "Employee ID :: ".$list[$i]->emp_id."<br>";
    echo "Employee Name :: ".$list[$i]->name."<br>";
    echo "Employee Position :: ".$list[$i]->position."<br>";
    echo"<br>";
    echo"<br>";
}
?>