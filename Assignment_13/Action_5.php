<?php
    session_start();
    $_SESSION['custno'] = $_POST['custno'];

    $_SESSION['custname'] = $_POST['custname'];

    $_SESSION['custaddress'] = $_POST['custaddress'];

    $_SESSION['custmobno'] = $_POST['custmobilenumber'];

?>

<html>
    <body>
        <form action="5.php" method="POST" enctype="multipart/form-data">

            Product code:: <br>
             <input type="text" name="pcode"> <br><br>

            Product name:: <br>
             <input type="text" name="pname"> <br><br>

            Quantity :: <br>
             <input type="text" name="pqty"> <br><br>

            Rate:: <br>
             <input type="text" name="prate"> <br><br>

            <input type="submit" value="submit">
            <input type="reset" value="Reset">
        </form> 
    <body>
</html>