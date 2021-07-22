
<?php
$fn=$ln="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    if(empty($_REQUEST['fname']) || empty($_REQUEST['lname']))
    {
        echo "error";
    }


}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

First Name : <input type="text" name="fname" value="<?php echo $fn; ?>" /><br><br>

Last Name : <input type="text" name="lname" value="<?php echo $ln; ?>" /><br><br>

<input type="submit" name="send" value="SUBMIT">

</form>
<?php
if(!empty($_REQUEST['fname']) || empty($_REQUEST['lname']))
{
    echo $fn." ".$ln;
}
?>
</body>
</html>