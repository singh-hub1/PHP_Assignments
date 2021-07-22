<?php
/*Write a PHP script for the following: Design a form to accept two strings. 
Compare the two strings using both methods (= = operator & strcmp function). 
Append second string to the first string. Accept the position from the user; from 
where the oparacters from the first string are reversed. (Use radio buttons)*/
?>

<html>

<head></head>

<body bgcolor="#a6d6d6">
    <form action="Action_9.php" method="post">
         <label>Enter first string ::</label> <br>
            <input type="text" name="str1">
            <br><br>
            <label> Enter second string::</label><br>
            <input type="text" name="str2">
            <br><br>
            <label>Enter position::</label><br>
            <input type='text' name="pos">
<br>
<br>
            <input type="radio" name="ch" value=1>COMPARE

            <input type="radio" name="ch" value=2>WITH STRCMP()

            <input type="radio" name="ch" value=3>APPEND.

            <input type="radio" name="ch" value=4>POSITION FOR REVERSE
            <br><br>
            <input type="submit" value="Submit"> <input type="reset" value="Reset">
           
    </form>
</body>

</html>