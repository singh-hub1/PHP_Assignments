<?php

$server="localhost";
$user="root";
$password="";
$db="upload";

$con=mysqli_connect($server,$user,$password,$db);
if($con)
{
    // echo "Connection was Established!!!";
}
else
{
    echo "Connection was not established!!";
}

?>