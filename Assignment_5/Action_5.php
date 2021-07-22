<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="empployee";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $dname=$_POST['dname'];

     $querry="select Max(e_sal),Min(e_sal),Sum(e_sal) from employee where d_no in(select d_no from dept where d_name='$dname')";



        if(!$result=pg_query($con,$querry))
        {
            echo "Data Not Found!!!";
        }

      else
       {
        echo "<table border=1><th>Maximum salary</th><th>Minimum salary</th><th>sum salary</th>";
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