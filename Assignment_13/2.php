<?php
$name="";
if(isset($_POST['sent']))
{
    $name=$_POST['name'];
    echo "Your name is :: ".$name;
    echo "<br>";
    echo "<br>";
}
?>

<html>
<head>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label >Username</label><br>
    <input type="text" name="name" >

    <br>
    <br>

    <input type="submit" name="sent" value="SUBMIT" >

    </form>
</body>
</html>

<?php
    if(isset($_COOKIE['LastVisited']))
    {
        $lastvisit = $_COOKIE['LastVisited'];
        echo "Last visited on : ".$lastvisit;
    }
    
    else
    {  
        echo "No information of previous visit";    
    }

    $expirationdate = time() + 3600 * 24 * 365; 

    setcookie('LastVisited',date("G:i d/m/y"),$expirationdate);

?>