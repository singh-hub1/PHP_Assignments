<?php
    session_start();
    $_SESSION['pcode'] = $_POST['pcode'];
    $_SESSION['pname'] = $_POST['pname'];
    $_SESSION['pqty'] = $_POST['pqty'];
    $_SESSION['prate'] = $_POST['prate'];

    echo "Customer Details :- <br>";
    echo "<br>";
    echo "Customer Number : ".$_SESSION['custno']."<br>";

    echo "Customer Name : ".$_SESSION['custname']."<br>";

    echo "Customer Address : ".$_SESSION['custaddress']."<br>";

    echo "Mobile Number : ".$_SESSION['custmobno']."<br><br><br>";


    echo "Product Details :- <br>";   
    echo "<br>"; 

    echo "Product Code : ".     $_SESSION['pcode']."<br>";

    echo "Product Name : ".     $_SESSION['pname']."<br>";

    echo "Product Quantity : ". $_SESSION['pqty']."<br>";

    echo "Product Rate : ".     $_SESSION['prate']."<br><br><br>";

    echo "Total price : ".        $_SESSION['prate']*  $_SESSION['pqty'];

?>