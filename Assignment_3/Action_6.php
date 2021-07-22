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
                    array_unshift($arr,"11");
                    echo"After pushing element 11 in queue are :: ";
                    echo"<pre>";
                    print_r($arr);
                    echo"</pre>";
                    break;
            case 2:
                    $el=array_shift($arr);
                    echo "Deleted element from the Queue is :: $el";
                    break;
            case 3:
                    echo "Queue content are as follows :: ";
                    echo"<pre>";
                    print_r($arr);
                    echo"</pre>";
                    break;
                
        }
}
?>