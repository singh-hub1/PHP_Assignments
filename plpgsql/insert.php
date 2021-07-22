<?php
$host="localhost";

$user="postgres";

$pass="vishal";

$db="mydata";

$con=pg_connect("host=$host dbname=$db user=$user password=$pass")
or die("could not connect to server\n");

if(!$con)
{
    echo "error";
}

 else
 {
     $name=$_POST['username'];

     $pass=$_POST['password'];

     $querry="Insert into vishal(name,password) values('$name','$pass')";

     $result=pg_query($con,$querry);
     
     header("location:index.html");
 }

pg_close($con);
?>