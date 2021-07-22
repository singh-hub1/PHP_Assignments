<html>
<body bgcolor="#ce97b0">
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $ch=$_POST['op'];
    $arr=array('Name'=>'vishal','class'=>'sybca','roll'=>12939,'addr'=>'pune','sub'=>'php');
    $arr1=array('s1'=>'bihar','s2'=>'pune','s3'=>'delhi','s4'=>'gurgaon','s5'=>'patna');;
    $arr2=array('A'=>10,'B'=>20,'C'=>30,'D'=>40,'E'=>50);
    switch($ch)
    {
        case 1:
            echo"Before operation :: ";
            echo"<br>";
            echo"<br>";
            print_r($arr);
            echo "<br>";
            echo "<br>";
            print_r($arr1);
            echo "<br>";
            echo "<br>";
            print_r($arr2);
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo"After operation :: ";
            array_multisort($arr1,SORT_ASC,$arr,SORT_DESC,$arr2,SORT_ASC);
            echo"<br>";
            echo"<br>";
            echo"<pre>";
            print_r($arr);
            echo"</pre>";
            echo"<br>";
            echo"<br>";
            echo"<pre>";
            print_r($arr1);
            echo"</pre>";
            echo"<br>";
            echo"<br>";
            echo"<pre>";
            print_r($arr2);
            echo"</pre>";

            break;


        default: echo"Invalid choice!";
                   break;
    }
    
    echo"<br>";
    echo"<br>";
    echo"<center>";
    echo"Return back to your Main-Menu";
    echo"<br>";
    echo "<br><a href ='9.php'> (RETURN)</a>";
    echo"</center>";
}

?>

</body>
</html>