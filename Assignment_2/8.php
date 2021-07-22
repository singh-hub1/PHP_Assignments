<?php
/*Write a PHP script for the following: Design a form to accept the details of 5 
different items, suop as item code, item name, units sold, rate. Display the bill in 
the tabular format. Use only 4 text boxes. (Hint : Use of explode function.)*/
?>

<html>
<head>
<style>
    body
    {
        background:#1eae98;
    }
</style>
</head>
<body>
<form method="POST" action="Action_8.php">
<center><h1>Enter Details Of 5 Items </h1>
<br>
<br>
<label >ITEM CODE:</label>
<br>
<input type="text" name="code" placeholder="You write with separator"/><br><br>

<label>ITEM NAME:</label><br>
<input type="text" name="name" placeholder="You write with separator" />
<br><br>

<label>UNIT SOLD:</label> <br>
<input type="text" name="sold" placeholder="You write with separator" />
<br><br>
<label>RATE:</label><br>
<input type="text" name="rate"  placeholder="You write with separator"/>
<br><br>
<input type="submit" value="Submit"/>
<input type="reset" value="Reset"/>
</center>
</form>
</body>
</html>