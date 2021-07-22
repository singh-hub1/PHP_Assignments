<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sent']))
    {
        setcookie('student_name',$_POST['s_name']); //name and value

        setcookie('student_class',$_POST['s_class']);

        setcookie('student_address',$_POST['s_addr']);
    }
?>

<html>
    <body>
        <form action="Action_7.php" method="POST" enctype="multipart/form-data">

            <h1>Enter The  Marks of the following Subject ::</h1><br>

            Data Structure:: <br>
             <input type="text" name="ds"> <br><br>

            PHP :: <br>
             <input type="text" name="php"> <br><br>

            Software Engineering:: <br>
             <input type="text" name="se"> <br><br>

            Operating System :: <br>
             <input type="text" name="os"> <br><br>

            Laboratory 1:: <br>
             <input type="text" name="lab1"> <br><br>

             Laboratory 2 :: <br>
             <input type="text" name="lab2"> <br><br>

            <input type="submit" value="Submit" name="form2">

        </form>        
    <body>
</html>