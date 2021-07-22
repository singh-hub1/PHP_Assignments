
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $num1=$_POST['num1'];

    $total=0;  
    $x=$num1;  

   while($x!=0)  
   {  
     $rem=$x%10;  
     $total=$total+pow($rem,3);  
     $x=$x/10;  
   }  

   if($num1==$total)   
      echo 'Yes it is an Armstrong number';  
    
   else    
      echo 'No..it is not an armstrong number';  
  
}
?>
