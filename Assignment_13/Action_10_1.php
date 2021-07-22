<?php
    $basic = $_POST['basic'];

    $da = $_POST['da'];

    $hra = $_POST['hra'];

    $gross = $basic + $da + $hra;
        

    echo "<h1>Employee Details</h1>";

    echo "Employee Number : ".$_COOKIE['empno']."<br>";

    echo "Employee Name : ".$_COOKIE['empname']."<br>";

    echo "Employee Address : ".$_COOKIE['empaddress']."<br>";

    echo "Basic : ".$basic."<br>";

    echo "DA : ".$da."<br>";

    echo "HRA : ".$hra."<br>";
    
    echo "GROSS : ".$gross."<br>";
?>