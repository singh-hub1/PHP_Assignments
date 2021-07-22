
<?php
if($_SERVER['REQUEST_METHOD'] =='POST')
{
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      $num3=$_POST['num3'];

     $result=function($num1,$num2,$num3)
     {
         $m=$num1>$num2?($num1>$num3?$num1:$num3):($num2>$num3?$num2:$num3);
         return $m;
     };
    echo '<br>'; echo('Hooray!!The maximum Among $num1,$num2,$num3 is=:'.$result($num1,$num2,$num3)); 
}
?>