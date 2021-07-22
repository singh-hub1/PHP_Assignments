<?php
//HERE WE UPDATE THE COOKIE NAME IN PHP
setcookie("vishal",'21',time()+3600);
if(isset($_COOKIE['vishal']))
{
    echo"cookie is set";
}
else
{
    echo"cookie is not set";
}

?>