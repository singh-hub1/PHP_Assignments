<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="policy";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $nos=$_POST['nos'];

    $querry= "delete from policy where p_no= '$nos' ";

   pg_query($con,$querry);

   $querry="select * from policy ";
     
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
                        Policy Number
                      </td>
                      <td>
                       Agent Number
                      </td>
                      <td>
                         Policy Type
                      </td>
                      <td>
                        Policy Amount
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
                    
                  </tr>";
                echo"</table>";
            }
        }
}
pg_free_result($result);    

pg_close($con);

?>