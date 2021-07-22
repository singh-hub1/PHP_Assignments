<?php
//Write a PHP script to declare three variables and print maximum among them
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style>
       body 
       {
        background-color: linen;
       } 
       </style>
  </head>
  <body>
    <form method='post' action=''>
      <label for=''>Enter the first number:</label><br>
      <input type='number' name='num1'>
      <br>
      <label for=''>Enter the second number:</label><br>
      <input type='number' name='num2'><br>
      <label for=''>Enter the third number:</label><br>
      <input type='number' name='num3'>
      <br>
      <br>
      <input type='submit' name='submit'>
      <input type='reset' name='reset'>
    </form>
  </body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] =='POST')
{
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      $num3=$_POST['num3'];

     $result=function($num1,$num2,$num3)
     {
         return(max($num1,$num2,$num3));
     };
    echo '<br>'; echo('Hooray!!The maximum Among $num1,$num2,$num3 is=:'.$result($num1,$num2,$num3)); 
}
 ?>

