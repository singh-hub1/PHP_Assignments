<?php
//Design a HTML form to accept a str. Write a php function to reverse a str.

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
            <label for="">Enter a str.</label><br><br>
            <input type="text" name="str"><br><br>
            <input type="submit" name="submit">
            <input type="reset" name="reset">
            <br><br>
        </form>

    </body>
</html>


<?php
if($_SERVER['REQUEST_METHOD'] =='POST')
  {
    $str=$_POST["str"];
  
    function Reverse($str)
    {
    return strrev($str);
    }
  
echo "the reverse str of $str is: ".Reverse($str);
  }
?>