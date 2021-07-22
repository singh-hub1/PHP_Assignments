<?php
session_start();
if(isset($_SESSION['name']))
{
    echo "Welcome ".$_SESSION['name'];
    echo "<br>";
    echo "<br>";
    // echo "Your Password is ".$_SESSION['password']; 
    echo "Your Password is ".'*****'; 
}
else
{
    header("refresh:5;url=login.php");
}
if(isset($_POST['logout']))
   {
        session_unset();
        session_destroy();
        echo "<h1>Back to...</h1>";
        header("refresh:5;url=login.php");
    }

?>
<html>
    <body>
        <form action="" method="POST">
<br><br>
            <input type="submit" name="logout" value="Logout">
            <br><br>
        </form>
    </body>
</html>