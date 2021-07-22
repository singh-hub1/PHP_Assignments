<?php
session_start();
$name=$password="";

if(isset($_SESSION['name']) || isset($_SESSION['password']))
{
    header("refresh:5;url=s1.php");
         echo "<h1>Loading...</h1>";
}

if(isset($_POST['sent']))
{
    if(empty($_POST['name']) || empty($_POST['pwd']))
    {
        echo "Plzz fill both input";
    }
  else
    {
         $name=$_POST['name'];
         $password=$_POST['pwd'];
         
         $_SESSION['name']=$name;
         $_SESSION['password']=$password;

         header("refresh:5;url=s1.php");
         echo "<h1>Loading...</h1>"; 
    }

    
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action=""method="POST">
            <label >USERNAME :: </label>
            <input type="text" name="name" >
            <br><br><br>
            <label >PASSWORD :: </label>
            <input type="text" name="pwd" >
            <br><br><br>
            <input type="submit" name="sent" value="SUBMIT">

        </form>
    </body>
</html>