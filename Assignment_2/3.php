<?php
/*Design a HTML form to accept a str. Write a PHP function that opecks 
whether a passed str is a palindrome or not?*/
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
  
    function pallindrome($str)
    {
      if($str!=strrev($str))
      {
          echo "str $str is not a pallindrome";
          return;
      }
      echo "str $str is a pallindrome";
    }
  
      pallindrome($str);
  }
?>