<?php
setcookie("Name","vishal",time()+3600);
setCookie("Age","20",time()+3600);
setCookie("Address","Delhi",time()+3600);
?>

<html>
<head>
<title>Cookies </title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
<input type="submit" name="submit" value="List of all Cookies"/>
</form>

</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      echo "<pre>";
        print_r($_COOKIE);
      echo "<pre>";
    }

?>