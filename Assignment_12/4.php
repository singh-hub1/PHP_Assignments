<!DOCTYPE html>
<html>
    <head>
    <style>
      .errorcode{color:red;}
      </style>
    </head>
    <body>
        <?php
        $name=$date=$sex=$Occupation=$tried="";
        $name_error=$date_error=$Occupation_error=$tried="";
    if($_SERVER['REQUEST_METHOD']=='POST')
     {
            function test_input($data) 
              {
                $data = trim($data);   
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;

              }
            $name=test_input($_POST['name']);
            $date=$_POST['date'];
            $sex=$_POST['sex'];
            $Occupation=test_input($_POST['Occupation']);

            $tried=($_POST['tried']=='yes');
        
        
            if (empty($name)) 
            {  
                $name_error = "Name is required";  
            } 
           else 
           {   
             if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {  
                    $name_error= "Only alphabets and white space are allowed";
                }
           }

           if(empty($date))
           {
               $date_error="date is required";
           }

           if (empty($name)) 
            {  
                $name_error = "Name is required";  
            } 
           else 
            {   
               if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                 {  
                   $name_error= "Only alphabets and white space are allowed";
                 }
            }
    
}

?>
         <p class="para"><span class="errorcode">* Mandatory field</span></p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="POST">

            <label>Username :: </label>
            <span class="errorcode">*<?php echo $name_error;?></span><br><br>
            <input type="text" name="name" value="<?php echo $name;?>">

            <br><br>
            <br>


            <label >City ::</label><br>
            <select>
                <option value="pune">PUNE</option>
                <option value="chennai">CHENNAI</option>
                <option value="kolkata">KOLKATA</option>
                <option value="mumbai">MUMBAI</option>
        </select>


        <br><br>
        <br>

        <label>Birth date ::</label>
        <span class="errorcode">*<?php echo $date_error;?></span><br><br>
        <input type="date" name="date" value="<?php echo $date;?>" >

        <br><br>
        <br>


        <label>Occupation ::</label><br>
        <span class="errorcode">*<?php echo $Occupation_error;?></span><br><br>
        <input type="text" name="Occupation" value="<?php echo $Occupation;?>" >

        <br><br>
        <br>


        <label>Sex::</label><br>
        <input type="radio" name="sex" value="male" checked>Male <br>
        <input type="radio" name="sex" value="female">Female <br>
        <input type="radio" name="sex" value="others">Others <br>

        <br><br>
        <br>

        <input type="hidden" name="tried" value="yes">
        <input type="submit" name="submit" value="<?php echo $tried ? 'continue' :'create';?>">
        </form>
    </body>
</html>