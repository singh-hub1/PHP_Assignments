<html>
<body>
    <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        Id:: <br>
         <input type="text" name="id"> <br><br>
        Password ::  <br>
         <input type="password" name="passwd"> <br><br>

        <input type="submit" value="submit">
        <input type="reset" value="Reset">

    </form>    
</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $id = $_POST['id'];

        $passwd  = $_POST['passwd'];


        if($id =='1' && $passwd =='vishal')
        {
                header('Location: Action_6.php');
        }
        else
        {
            echo "Invalid credentials  <br><br> ";

            if(!isset($_COOKIE['attempt']))
            {
                $attempt_number = 1;
                setcookie("attempt",$attempt_number);
            }

            else if(isset($_COOKIE['attempt']))
            {
                $attempt_number = $_COOKIE['attempt'];

                $attempt_number++;

                setcookie("attempt",++$attempt_number);

                if($_COOKIE['attempt'] > 2)
                {
                    echo "Number of attempts exceded";
                }
            }
        }
        
    }
?>