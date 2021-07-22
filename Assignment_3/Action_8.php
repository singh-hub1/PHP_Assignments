<html>
<body bgcolor="#ce97b0">

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
   function is_odd($var)
    {
        if($var%2==1)
       return $var;
    }
                                                                                                                             
$choice=$_POST['op'];

        $arr=array('0'=>11,'1'=>22,'2'=>38,'3'=>41,'4'=>50,'5'=>68,'6'=>7,'7'=>81);
        
        switch($choice)
        {
                case 1:
                        echo"<pre>";
                        echo"Original Array Be like :: ";
                        print_r($arr);
                        echo"</pre>";
                        sort($arr);
                        echo "Array in ascending order(changing the keys)::<br>";
                        echo"<pre>";
                        print_r($arr);
                        echo"</pre>";
                        rsort($arr);
                        echo"<br>";
                        echo"<br>";
                        echo "<br>Array in descending order(changing the keys)::<br>";
                        echo"<pre>";
                        print_r($arr);
                        echo"</pre>";
                        break;
                case 2:
                        echo"<pre>";
                        echo"Original Array Be like :: ";
                        print_r($arr);
                        echo"</pre>";
                        asort($arr);
                        echo "Array in ascending order(without changing the keys)::<br>";
                        echo"<pre>";
                        print_r($arr);
                        echo"</pre>";
                        echo"<br>";
                        echo"<br>";
                        arsort($arr);
                        echo "<br>Array in descending order(without changing the keys)::<br>";
                        echo"<pre>";
                        print_r($arr);
                        echo"</pre>";
                        break;

               case 3:  echo"<pre>";
                        echo"Original Array Be like :: ";
                        print_r($arr);
                        echo"</pre>";
                        echo"After Operation ::";
                        echo"<pre>";
                        print_r(array_filter($arr,'is_odd'));
                        echo"</pre>";
                        break;
              
        }

        echo"<br>";
        echo"<br>";
        echo"<center>";
        echo"Return back to your Main-Menu";
        echo"<br>";
        echo "<br><a href ='8.php'> (RETURN)</a>";
        echo"</center>";
    }
?>
</body>
</html>