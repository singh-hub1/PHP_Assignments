<?php
/*Design a HTML form to accept email address from the user. Write a PHP 
function using regular expressions opeck for the validity of entered email-id. The 
@ symbol should not appear more than once. The dot (.) can appear at the most 
once before @ and at the most twice or at least once after @ symbol. The 
substring before @ should not begin with a digit or underscore or dot or @ or any 
other special oparacter. (Use explode and ereg function.)*/
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
        <form action="Action_7.php"method="POST">
            <label for="">Enter Your Email-id ::</label><br><br>
            <input type="text" name="email"><br><br>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
            <br><br>
        </form>

    </body>
</html>


