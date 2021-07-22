<html>
<body bgcolor="#f29191">
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
        $choice=$_POST['ch'];

        $arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6,'g'=>7,'h'=>8);

        $arr1=array('l'=>11,'m'=>22,'n'=>33,'o'=>44,'p'=>55,'q'=>66,'r'=>77,'s'=>88);

        $arr2=array('a'=>10,'b'=>20,'c'=>30,'d'=>40,'e'=>50,'f'=>60,'g'=>70,'h'=>80);

        switch($choice)
         {
                
                case 1:
                        echo"<pre>";
                        print_r(array_merge($arr,$arr1));
                        echo"</pre>";
                        break;
                case 2:
                        echo"<pre>";
                        print_r(array_intersect($arr,$arr1));
                        echo"</pre>";
                        break;
                case 3:
                        $union=array_merge($arr,$arr1);
                        echo"<pre>";
                        print_r(array_unique($union));
                        echo"</pre>";
                        break;
                case 4:
                         echo"<pre>";
                        print_r(array_diff($arr,$arr1));
                        echo"</pre>";
                        break;
        }
}
?>
