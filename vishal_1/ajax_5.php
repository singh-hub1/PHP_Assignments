<?php

$host="localhost";
$user="postgres";
$pass="vishal";
$db="vishal";
$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server");
if(!$con)
echo "ERROR";

else
{
    $x=$_REQUEST['txt'];
    $q="select * from student where s_name='$x'";

    if(!$result=pg_query($con,$q))
        
            echo "Data Not Found!!!";
        

      else
       {
        echo "<table border=1>
        <th>Student number</th>
        <th>Student name</th>
        <th>Student address</th>";
		while($row=pg_fetch_row($result))
		{
			echo "<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            </tr>";
		}
		echo "</table>";
        }
}
pg_free_result($result);    

pg_close($con);


?>