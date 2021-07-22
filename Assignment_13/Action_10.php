<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sent']))
    {
        setcookie('empname',$_POST['empname']);

        setcookie('empaddress',$_POST['empaddress']);

        setcookie('empno',$_POST['empno']);
    }
?>

<html>
    <body>
        <form action="Action_10_1.php" method="POST" enctype="multipart/form-data">

            <h1>Salary Details</h1><br>
            
            Basic :: <br>
             <input type="text" name="basic"> <br><br>

            DA :: <br>
             <input type="text" name="da"> <br><br>

            HRA:: <br>
             <input type="text" name="hra"> <br><br>

            <input type="submit" value="Submit" name="send">
            <input type="reset" value="reset">

        </form>        
    <body>
</html>