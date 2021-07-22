<?php

include 'dbcon.php';

if(isset($_POST['send']))
{
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $zip=$_POST['zip'];
   $pic=$_FILES['pic'];

//    echo "<pre>";
//    print_r($pic);
//    echo "</pre>";

$filename= $pic['name'];
$filepath= $pic['tmp_name'];
$fileerror=$pic['error'];

if($fileerror==0)
{
    $destfile='upload/'.$filename;
    // echo $destfile;
    move_uploaded_file($filepath,$destfile);

    $insert="insert into information(fname,lname,email,city,state,zip,photo) values('$fname','$lname','$email','$city','$state','$zip','$destfile')";

    $q=mysqli_query($con,$insert);

    if($q)
    {
        echo " Your Data is inserted ";
    }
    else
    {
        echo " Your Data is not inserted!!!";
    }

    header('location:2.php');
}

}
else
{
    echo "No button is clicked yet!!";
}


?>