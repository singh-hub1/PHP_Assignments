<!DOCTYPE html>
<html>
    <head><title>

    </title>
</head>


<body>
<?php
$name="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $name=$_POST['name'];
}
?>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
        <label>NAME::</label><br><br>
        <input type="text" name="name" value="<?php echo $name  ?>"> <br><br>
        <input type="submit" name="submit" value="submit"><br><br>
    </form>
</body>
<?php
echo"Your name is::".$name."<br>";  

?>
</html>
