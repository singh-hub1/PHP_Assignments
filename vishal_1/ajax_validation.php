<?php

$u=$_REQUEST['t'];
 if($u==="")
   $str="Enter username please!";
 elseif(strlen($u)<3)
   $str="Username is too short";
   else
     $str="Valid username";

 echo $str;
// echo $u;


?>