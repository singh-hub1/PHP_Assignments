<?php
//HERE WE DELETE THE COOKIE FROM PHP(settings)
setcookie("vishal","del",time()-60);
if(isset($_COOKIE['vishal']))
{
    echo"cookie is set";
}
else
{
    echo"cookie is not set";
}

?>