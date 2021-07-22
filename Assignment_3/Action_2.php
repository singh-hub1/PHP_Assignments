<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$array=array('vishal'=>'sybca','jasu'=>'home','Roo'=>'pune','arya'=>'delhi','swati'=>'delhi','ginny'=>'pune');

        $ch=$_POST['op'];
        switch($ch)
        {
            case 1: echo "Array Reverse are :: "."<br>";
                    echo "<br>";
                    echo"<pre>";
                    print_r(array_flip($array));
                    echo "</pre>";
                    break;
            
             case 2: echo "The random traverse are :: ";
                    shuffle($array);
                    echo"<pre>";
                    print_r($array);
                    echo "</pre>";
                    break;
               
        
              
}
}
?>