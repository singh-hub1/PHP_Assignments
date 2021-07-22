<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$array=array('vishal'=>'sybca','jasu'=>'home','Roo'=>'pune','arya'=>'delhi','swati'=>'delhi','ginny'=>'pune');

        $ch=$_POST['op'];
        switch($ch)
        {
        case 1: echo "Array traverse are :: "."<br>";
        echo "<br>";
              foreach($array as $key=>$value)
                {
                        echo " $key  => $value <br>";
                        echo"<br>";
                }
                break;
        case 2:echo "The size of associative array is: ".sizeof($array);
                break;
        
              
}
}
?>