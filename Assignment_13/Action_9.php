<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sent']))
    {
        setcookie('employee_name',$_POST['empname']);

        setcookie('employee_address',$_POST['empaddress']);

        setcookie('employee_mobno',$_POST['empmobno']);
    }
?>

<html>
    <body>
        <form action="Action_9_1.php" method="POST" enctype="multipart/form-data">

            <h1>LIC Information</h1><br>

            Policy Number:: <br>
             <input type="text" name="policy_no"> <br><br>

            Policy Name :: <br>
             <input type="text" name="pname"> <br><br>

            Premium:: <br>
             <input type="text" name="premium"> <br><br>

            <input type="submit" value="Submit" name="sent2">
            <input type="reset" value="Reset" >
        </form>        
    <body>
</html>
