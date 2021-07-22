<!-- Write PHP script to demonstrate the concept of introspection for examining 
object.
 -->

 <?php
Class A
{

    private $x=10,$y;
    
   
    function __construct($a)
    {
        $this->y=$a;
        echo "<br>";
        echo "constructor A is called!!";
        echo "<br>";
    }
    function displayA()
    {
        echo "x=$this->x,y=$this->y";
    }
}

Class B extends A
{
   private  $p,$q;
   
   function __construct($l,$m,$n)
   {
       parent:: __construct($l);
       echo "<br>";
       $this->p=$m;
       $this->q=$n;
       echo "<br>";
       echo "constructor of class B is called!!!";
       echo "<br>";
   }
   function displayB()
   {
    echo "<br>";
       echo "p=$this->p,q=$this->q";
       echo "<br>";
   }
}

$a=50;
$b=40;
$c=70;
$obj=new B($a,$b,$c);
$obj->displayA();
$obj->displayB();
echo "<br>"."*******************************"."<br>";
echo "FUNCTION EXAMING CLASSES<br>";
echo "CLASS A EXISTS OR NOT :: ";
echo class_exists('A');
echo "<br>";
echo "CLASS C EXISTS OR NOT :: ";
echo class_exists('C');
echo "<br>"."*******************************"."<br>";
echo "GET EXISTING ALL CLASSES<br>";
$all=get_declared_classes();
echo "<br>"."*******************************"."<br>";
echo "GET METHODS OF CLASS A<br>";
print_r(get_class_methods('A'));
echo "<br>";
echo "GET METHODS OF CLASS B<br>";
print_r(get_class_methods('B'));
echo "<br>"."*******************************"."<br>";
echo "GET VARIABLES OF CLASS A<br>";
var_dump(get_class_vars('A'));
echo"<br>";
echo "GET VARIABLES OF CLASS B<br>";
var_dump(get_class_vars('B'));
echo "<br>"."*******************************"."<br>";
echo "Parent of class B<br>";
echo "<br>".get_parent_class($obj);
echo "<br>".get_parent_class('B');
echo "<br>"."*******************************"."<br>";
echo "Parent of class A<br>";
echo "<br>".get_parent_class('A');

echo "<br>"."*******************************"."<br>";
echo"<br>"."Function examin of OBJECT"."<br>";
echo"<br> obj is object or not";
echo is_object($obj);
echo "<br>";
echo "obj1 is object or not<br>";
echo is_object($obj1);//obj1 is not any object of any class 
echo "<br>";
echo "<br>"."*******************************"."<br>";
echo "<br> GET OBJECT CLASS NAME";
echo get_class($obj);
echo "<br>"."*******************************"."<br>";
echo "METHOD displayA() exists or not";
echo method_exists($obj,'displayA');
echo "<br>";
echo "METHOD displayC() exists or not";
echo method_exists($obj,'displayC');
echo "<br>"."*******************************"."<br>";
echo "GET VARIABLE BY USING OBJECT OF CLASS B";
print_r(get_object_vars($obj));
echo"<br>";

?>