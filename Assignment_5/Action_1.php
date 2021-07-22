
<html>
    <head>
<style>
    body
    {
        background:#f9dfdc;
    }
</style>
    </head>
    <body>
        <center>
            <h1>
              *********  DATABASE **************
            </h1>
        </center>
      
    </body>
</html>

<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="singh";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $input=$_POST['oname'];

     $querry="select * from property where o_name in(select o_name from owner where o_name='$input')";

    //   $result=pg_query($con,$querry);
    //     echo $result;

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
                        Property Number
                      </td>
                      <td>
                        Property Description
                      </td>
                      <td>
                        Property Area
                      </td>
                      <td>
                        Order Name
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