<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $num1=$_POST['num1'];

function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}

$flag_val = check_prime($num1);
if ($flag_val == 1)
   echo 'It is a prime number';
else
   echo 'It is a non-prime number';
}

?>