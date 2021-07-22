<?php
define('pi',3.14);

class shape
{
   function area_rect($l1,$b2)
   {
      return($l1*$b2); 
   }

   function area_circle($r1)
   {
       return (pi*$r1*$r1);      
   }

}

class triangle extends shape
{
    function area_triangle($b1,$h1)
    {
    return($b1*$h1)/2;
    }
}

class square extends shape
{
    function area_square($a1)
    {
    return ($a1*$a1);  
    }
}

$ob=new shape();
$op=$_POST['op'];
switch($op)
 {
    case 1 :   $h1=$_POST['h1'];
                $b1=$_POST['b1'];
                $ob1=new triangle();
                $a=$ob1->area_triangle($h1,$b1);                              
                echo "Area of triangle is ::.$a";
                        break;

    case 2 :   $a1=$_POST['a1'];
                $ob2=new square();
                $a=$ob2->area_square($a1);
                echo "Area of square is ::.$a";
                        break;
                                            
    case 3 :   $l1=$_POST['l1'];
                $b2=$_POST['b2'];
                
                $a=$ob->area_rect($l1,$b2);
                echo "Area of rectangle is ::.$a.";   
               
                    break;   

    case 4 :   $r1=$_POST['r1'];
                $a=$ob->area_circle($r1);
                echo "Area of circle is ::.$a.";   
                    break;                  
 }
?>