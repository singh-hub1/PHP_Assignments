<?php
  session_start();
  $expireAfter = 30;

  if(isset($_SESSION['start_time']))
  {
    $secondsInactive = time() - $_SESSION['start_time'];
    
    if($secondsInactive >= $expireAfter)
    {
      session_unset();
      session_destroy();
      echo " Sorry!!! session has benn expired";
    } 

    else
    {
      $_SESSION['uname'] = $_POST['uname'];
      $_SESSION['ucity'] = $_POST['ucity'];
      $_SESSION['upno'] = $_POST['upno'];
    
      echo" Name : ".$_SESSION['uname']."<br>";
      echo" City : ".$_SESSION['ucity']."<br>";
      echo" Phone Number : ".$_SESSION['upno'];
    }

  }
  else
  {
    header('Location: 4.php');
  }

?>