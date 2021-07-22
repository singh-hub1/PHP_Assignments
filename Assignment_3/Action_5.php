<html>
<body bgcolor="#f29191">
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$choice=$_POST['ch'];

        $arr=array(1,2,3,4,5,6,7,8,9,10);
        switch($choice)
        {
                case 1:
                        array_push($arr,11);
                        echo"After pushing element 11 in stack are :: ";
                        echo"<pre>";
                        print_r($arr);
                        echo"</pre>";
                        break;
                case 2:
                    
                        $el=array_pop($arr);
                        echo "Poped element from the array : $el";
                        break;
                case 3:
                        echo "Array content are as follows :: ";
                        echo"<pre>";
                        print_r($arr);
                        echo"</pre>";
                        break;
               
        }
    }
?>