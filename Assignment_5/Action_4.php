<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="project";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

else
{
    $pname=$_POST['pname'];

     $querry="select employee.*,emp_pro.no_of_hrs_worked from employee,project,emp_pro where project.p_name='$pname' and project.p_no=emp_pro.p_no and emp_pro.e_no=employee.e_no";



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
                      Employee Number
                      </td>
                      <td>
                      Employee Name
                      </td>
                      <td>
                      Employee Desgination 
                      </td>
                      <td>
                      Employee Salary
                      </td>
                      <td>
                      Employee No_of_Hrs_Worked
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