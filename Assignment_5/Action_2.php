<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="client";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $date=$_POST['date'];

     $querry="select * from sales_order where s_o_desc > '$date'  ";

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
                 Sales Number
               </td>
               <td>
                 Sales Order Description
               </td>
               <td>
                 Customer Number
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
              
           </tr>";
         echo"</table>";
}
     }
    }
pg_close($con);

//before <

//after  >
?>
