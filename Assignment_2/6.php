<?php
/*Write a PHP script for the following: a) Design a form to accept two numbers 
from the users. b) Give option to opoose an arithmetic operation (use Radio 
Button). c) Display the result on next form. d) Use concept of default parameter.*/
?>

<html>
        <body bgcolor=pink >
            <form action="Action_6.php" method= "POST" >
            Enter first number :  <br><input type=text name=first ><br>
            <br><br>
            Enter second number: <br> <input type=text name=second ><br>
        <br><br>           
        Operation::
        <br>
        <br>
                <input type=radio name=op value=1>Addition.<br>
                <input type=radio name=op value=2>Subtraction.<br>
                <input type=radio name=op value=3>Multiplication.<br>
                <input type=radio name=op value=4>Division.<br>
                <br><br>
        <input type=submit value=Submit>    
        <input type=reset value=Reset>
        </form>
        </body>

 </html>

