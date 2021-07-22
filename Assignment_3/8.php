<?php

// Write a menu driven program to perform the following operations on associative 
// arrays:
// a) Sort the array by values (changing the keys) in ascending, descending 
// order.
// b) Also sort the array by values without changing the keys.
// c) Filter the odd elements from an array.

?>

<html>

<body bgcolor="#1eae98">
<form action="Action_8.php" method="POST">
<center>
<h2>Enter choice :</h2>
<input type="radio" name="op" value=1> Sort array by values in ascending,descending order<br><br>
<input type="radio" name="op" value=2> Sort array by values without changing key values <br><br>
<input type="radio" name="op" value=3> Filter odd elements from array <br><br>

<br><br>
<input type="submit" value="SUBMIT">  <input type="reset" value="RESET">

<br><br>
<h3>YOUR ABOVE OPERATION IS DOING WITH THIS ARRAY!!</h3>
<?php
         print_r( $arr=array('0'=>11,'1'=>22,'2'=>38,'3'=>41,'4'=>50,'5'=>68,'6'=>7,'7'=>81));
         echo"<br>";
         echo"<br>";
       
?>
</center>
</body>

</html>
