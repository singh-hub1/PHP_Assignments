<?php
        $cookie_name='user_data';
        if(isset($_REQUEST['send']))
        {
            $cookie_value=$_REQUEST['name'];
            $cookie_time=time()+3600;
            setcookie($cookie_name,$cookie_value,$cookie_time);
        }

        ?>


<!DOCTYPE html>
<html>
    <head></head>
    <body>
       
        <form action="" method="POST">

            <label>Your name :: </label><br>
            <input type="text" name="name" >
            <br>

            <!-- <label>Your password ::</label><br>
            <input type="text" name="pwd" > -->

            <br><br><br>
            <input type="submit" name="submit" value="send">
            <input type="reset" name="reset" value="reset">
        </form>



        <?php
            if(isset($_COOKIE[$cookie_name]))
            {
                echo "cookie name is ".$cookie_name."and value is ".$_COOKIE[$cookie_name]."<br>";
            }
            else
            {
                echo "cookie is not set";
            }
        ?>
    </body>
</html>