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
    $name=$_POST['dname'];

     $querry="select count(*) from employee where d_no in(select d_no from dept where d_name='$name')";



        if(!$result=pg_query($con,$querry))
        {
            echo "Data Not Found!!!";
        }

      else
       {
            while($row=pg_fetch_row($result))
            {
                echo "<table align=center border=4 cellspacing=5 cellpadding=14>";
                echo "<tr>
               <td>
                 Total Number
               </td>
             </tr>";
             echo "<tr>
               <td>
                 $row[0]
               </td>
               </tr>";
               echo"</table>";
            }
        }
}
pg_free_result($result);    

pg_close($con);

?>