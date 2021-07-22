
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

$db="policy";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $amt=$_POST['amt'];

     $querry="select count(*) from policy where p_amt= '$amt' ";



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