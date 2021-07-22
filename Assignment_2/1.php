<?php
/*Write a PHP script to accept the number from user and Write a php function to 
calculate the factorial of a number (a non-negative integer). The function accepts 
the number as an argument*/
?>

<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <style>
       body 
       {
        background-color: linen;
       } 
       </style>
    </head>
    <body>
        <form action=""method="post">
            <label for="">Enter any number for finding factorial.</label><br><br>
            <input type="number" name="fact"><br><br>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
            <br><br>
        </form>

    </body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $fact=$_POST["fact"];
$factorial=1;
    for($i=$fact;$i>=1;$i-=1)
    {
      $factorial=$factorial*$i;
    }
    echo("The factorial $fact is:= ".$factorial);
}
?>