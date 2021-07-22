<?php
$dep=$_POST['dname'];

$db=pg_connect("host=192.168.100.10 user=tybcs7 dbname=tybcs7");
if(!$db)
{
	echo "An error occured";
	exit;
}
else
{

echo "successfully connected";

$q="select max(salary),min(salary),sum(salary) from Emp where dept_no in(select dept_no from Dept where d_name='".$dep."')";	
echo $q;
$result=pg_query($db,$q);

		
		if(!$result)
		{
		echo "An error occured";
		exit;
		}
		
		echo "<table border=1><th>Maximum salary</th><th>Minimum salary</th><th>sum salary</th>";
		while($row=pg_fetch_row($result))
		{
			echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
		}
		echo "</table>";
}
pg_close($db);
?>
		
	

