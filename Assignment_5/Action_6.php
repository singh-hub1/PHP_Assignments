<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="hospital";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $exp=$_POST['exp'];

    $querry= "update doctor set d_city='mumbai' where d_exp > '$exp'  ";

   pg_query($con,$querry);

   $querry="select * from doctor ";
     
   $result = pg_query($con, $querry);


        if(!$result=pg_query($con,$querry))
        {
            echo "Data Not Found!!!";
        }

      else
       {
         
            while($row=pg_fetch_row($result))
            {
                echo "<br>";
                echo "****************************************************************************************************************************************************************************************";
                echo "<br>";
                echo "<table align=center border=4 cellspacing=5 cellpadding=14>";
                  echo "<tr>
                      <td>
                        Doctor Number
                      </td>
                      <td>
                       Doctor Name
                      </td>
                      <td>
                      Doctor experience
                      </td>
                      <td>
                       Doctor City
                      </td>
                      <td>
                       Doctor Area
                      </td>
                  </tr>";
                  echo "<tr>
                      <td>
                        $row[0]
                      </td>
                      <td>
                        $row[1]
                      </td>
                      <td>
                        $row[2]
                      </td>
                      <td>
                        $row[3]
                      </td>
                      <td>
                        $row[4]
                      </td>
                  </tr>";
                echo"</table>";
            }
        }
}
pg_free_result($result);    

pg_close($con);

?>