<?php
//Sort the different arrays at a glance using single function.

?>


<html>

<body bgcolor="#1eae98">
<form action="Action_9.php" method="POST">
<center>
<h1>SELECT ONLY THIS OPTION BECAUSE YOU HAVE NO OPTION!</h1>
<br>
 <h3>Sort different array at glance using single function::</h3> <input type="radio" name="op" value=1>

<br>
<br>
<br>
<br>

<input type="submit" value="SUBMIT">  <input type="reset" value="RESET">

<br><br>
<h3>YOUR ABOVE OPERATION IS DOING WITH THIS ARRAY!!</h3>

<?php

        print_r($arr=array('Name'=>'vishal','class'=>'sybca','roll'=>12939,'addr'=>'pune'));
        echo"<br>";
        echo"<br>";
        print_r( $arr1=array('s1'=>'bihar','s2'=>'pune','s3'=>'delhi','s4'=>'gurgaon'));
        echo"<br>";
        echo"<br>";
        print_r( $arr2=array('A'=>10,'B'=>20,'C'=>30,'D'=>40,'E'=>50));

?>
</center>
</body>

</html>
