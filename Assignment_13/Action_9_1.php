
<?php
// if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sent2']))
// {
//     setcookie('p_no',$_POST['policy_no']);

//     setcookie('p_name', $_POST['pname']);

//     setcookie('p_premium',$_POST['premium']);
// }
$policy_no = $_POST['policy_no'];
$pname = $_POST['pname'];
$premium = $_POST['premium'];


    echo "<h1>Employee Details</h1>";

    echo "Name : ".$_COOKIE['employee_name']."<br>";

    echo "Address : ".$_COOKIE['employee_address']."<br>";

    echo "Mobile Number : ".$_COOKIE['employee_mobno']."<br>";

   
    // echo "<h1>LIC Details</h1>";

    // echo "Policy Number : ".$_COOKIE['p_no']."<br>";

    // echo "Policy Name : ".$_COOKIE['p_name']."<br>";

    // echo "Premium : ".$_COOKIE['p_premium']."<br>";

    echo "<h1>LIC Details</h1>";
    echo "Policy Number : ".$_POST['policy_no']."<br>";
    echo "Policy Name : ".$_POST['pname']."<br>";
    echo "Premium : ".$_POST['premium']."<br>";

    
?>