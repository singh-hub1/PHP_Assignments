<?php
//HERE WE CREATE A COOKIE
setcookie("vishal","age",time()+3600);
echo"<br>";
// print_r($_COOKIE);
if(isset($_COOKIE))
{
    echo"cookie is set";
}
else
{
    echo "cookie is not set";
}

?>