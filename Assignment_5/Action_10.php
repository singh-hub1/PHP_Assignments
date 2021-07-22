
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
   $ch=$_POST['types'];
   switch($ch)
   {
       case 1: $querry="select * from agent where a_no in(select a_no from policy where p_type = 'life') ";

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
               pg_free_result($result);  
               break;
       case 2: $querry="select * from agent where a_no in(select a_no from policy where p_type = 'vehicle') ";

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
               pg_free_result($result);  
               break;
       case 3: $querry="select * from agent where a_no in(select a_no from policy where p_type = 'accident') ";

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
               pg_free_result($result);  
}
       
}
  
pg_close($con);

?>