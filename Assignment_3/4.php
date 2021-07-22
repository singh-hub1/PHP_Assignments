<?php

/* Declare a Multidimensional Array. Display specific element from a 
Multidimensional array. Also delete given element from the Multidimensional 
array.(After each operation display array content. */
?>

<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body bgcolor="#eec4c4">
        <?php
        $stud=array('0'=>array('Name'=> 'vishal' ,'Age'=>20,'Addr'=>'delhi'),
                    '1'=>array('Name'=> 'jasu','Age'=>21,'Addr'=>'patna'),
                    '2'=>array('Name'=> 'arya' ,'Age'=>4,'Addr'=>'delhi'),
                    '3'=>array('Name'=> 'ginny' , 'Age'=>25,'Addr'=>'pune'));
        echo"<pre>";
        print_r($stud);   
        echo"</pre>";
                                                                                                                       
echo "<br>";
echo "<br>Delete from Multi-Dim array is:";
echo "<br>stud[2]['name'] => ";
echo $stud[2]['Name'];
echo "<br><br>";
unset($stud[2]['name']);
echo"<pre>";
        print_r($stud);   
        echo"</pre>";
?>
    </body>
</html>