<!DOCTYPE html>
<html>
    <head>
    </head>
    <?php
if(isset($_FILES['img']))
{
    //  echo"<pre>";
    //  print_r($_FILES);
    //  echo"</pre>";

    echo"<br>";
    echo"<br>";
    echo"<br>";
    echo"<br>";

    echo $file_name=$_FILES['img']['name'];   

    echo"<br>";
    echo"<br>";

    echo $file_type=$_FILES['img']['type'];

    echo"<br>";
    echo"<br>";

    echo $file_tmp=$_FILES['img']['tmp_name'];

    echo"<br>";
    echo"<br>";

    echo $file_error=$_FILES['img']['error'];

    echo"<br>";
    echo"<br>";
    
    echo $file_size=$_FILES['img']['size'];

    echo"<br>";
    echo"<br>";

    if(move_uploaded_file( $file_tmp,"images/".$file_name))
    {
        echo"Images successfully uploaded";
    }
    else
    {
        echo"Images could not uploaded";
    }
    
}
    ?>
    <body>

        <form action="" method="POST" enctype="multipart/form-data">
        <label>Your image :: </label><br><br>
        <input type="file" name="img" ><br><br>
        <input type="submit" name="submit" value="Sumit">
               
        </form>
    </body>
</html>