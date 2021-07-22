<?php
//THIS CODE IS A COMBINATION OF SET B(Q1,Q2,Q3)
?>

<!doctype html>
<head>
  <style>
      .errorcode{color:red;}
      .box
      {
          height: 1100px;
          width: 500px;
          border:2px solid black;
          background-color: #afb9c8;
          border-radius: 15px;
          box-sizing:border-box;
          padding:25px;
          color:#334443;
      }
      .btn
      {
         padding:7px;
         color:#1eae98;
         border-radius:14px;
      }
      body
      {
          background-color: #a5e1ad;
      }
      .box2
      {
          border-radius: 15px;
          margin-top: 100px;
          height: 500px;
          width: 500px;
          border:2px solid red;
          color:green;
          padding: 17px;
          background-color: #94d0cc;
      }
      .name1
      {
          padding: 11px;
      }
      .para
      {
          margin-left:330px;
      }
  </style>  
</head>

<body>

<?php
 $name_error=$addr_error=$pin_error=$country_error=$email_error=$pan_error=$class_error=$gen_error="";
 $name =$class =$addr  =$country=$email=$pin= $gender= $pan="";    

if(isset($_POST['submit']))
{
if($_SERVER['REQUEST_METHOD']=='POST')
{
    function test_input($data) 
    {
        $data = trim($data);   
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name  =  test_input($_POST['name']);
    $class =  test_input($_POST['class']);
    $addr  =  test_input($_POST['addr']);
    $country = $_POST['country'];
    $email  =  test_input($_POST['email']);
    $pin    =  test_input($_POST['pin']);
    $gender  = $_POST['gender'];
    $pan    =  test_input($_POST['pan']);

    
    if(!isset($gender))
    {
    //    die("error");
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

     if(empty($addr))
      {
         $addr_error="address is required";
      }
     else
     {
         if(!preg_match("/^[a-zA-Z0-9]*$/",$addr))
         {
             $addr_error="Only alphabet are allowed";
         }
     }

     if(empty($class))
     {
  
         $class_error="class is required";
     }
     else
     {
         if(!preg_match("/^[a-zA_Z]*$/",$class))
         {
             $class_error="Only alphabet are allowed";
         }
     }


     if(empty($email))
     {
  
         $email_error="email is required";

     }
     else
     {
        $regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
          // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        if(!preg_match($regex,$email))
         {
             $email_error="Email is invalid";
         }
     }


     if(empty($pin))
     {
  
         $pin_error="pin should not be empty";
     }
     else
     {
  
        $a=strlen($pin);
        if($a>6)
        {
            $pin_error="Pin should be only 6 digits not more tha that";
        }
     }


     if(empty($pan))
     {
  
         $pan_error="pan should not be empty";
     }
     else
     {
        $pattern = '/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/';
        if(!preg_match($pattern,$pan))
         {
             $pan_error="pan is invalid";
         }
        
     }
}
}

?>

      
    <center>
        <div class="box">
        <h1 style="color:black">Form Validation in PHP</h1>
        <p class="para"><span class="errorcode">* Mandatory field</span></p>
    
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

            <label >YOUR NAME :: </label>
            <span class="errorcode">*<?php echo $name_error;?></span><br><br>
            <input type="text" name="name" placeholder="Your name" 
            value="<?php echo $name;?>">
           
            <br><br>
            <br>

            <label >YOUR ADDRESS :: </label>
            <span class="errorcode">*<?php echo $addr_error;?></span><br><br>
            <input type="text" name="addr" placeholder="Your address"
            value="<?php echo $addr;?>">
           
             <br><br>
             <br>

           

            <label >YOUR PINCODE :: </label>
            <span class="errorcode">*<?php echo $pin_error;?></span><br><br>
            <input type="text" name="pin" placeholder="Your pin code"
            value="<?php echo $pin;?>">

            <br><br>
            <br>


            <label >YOUR CLASS :: </label>
            <span class="errorcode">*<?php echo $class_error;?></span><br><br>
            <input type="text" name="class" id="class"
            value="<?php echo $class;?>">

            <br><br>
            <br>

            <label >YOUR COUNTRY :: </label>
            <span class="errorcode">*<?php echo $country_error;?></span><br><br>
            <select name="country" placeholder="Your country">
               <option value="INDIA"    <?php if($country=="INDIA"){echo "checked";}  ?>  >INDIA</option>
               <option value="USA"      <?php if($country=="USA"){echo "checked";}  ?>  >USA</option>
               <option value="RUSSIA"   <?php if($country=="RUSSIA"){echo "checked";}  ?>  >RUSSIA</option>
               <option value="CHINA"    <?php if($country=="CHINA"){echo "checked";}  ?>  >CHINA</option>
               <option value="PAKISTAN" <?php if($country=="PAKISTAN"){echo "checked";}  ?>  >PAKISTAN</option>
            </select>
           
           <br><br>
           <br><br>
           <br>

            <label >YOUR EMAIL :: </label>
            <span class="errorcode">*<?php echo $email_error;?></span><br><br>
            <input type="email" name="email" placeholder="Your email"
            value="<?php echo $email;?>">
           
            <br><br>
            <br>

            <label >YOUR PAN NUMBER :: </label>
            <span class="errorcode">*<?php echo $pan_error;?></span><br><br>
            <input type="text" name="pan" placeholder="Your pan number"
            value="<?php echo $pan;?>">
            
            <br><br>
            <br>


            <label >YOUR GENDER :: </label>
            <span class="errorcode">*<?php echo $gen_error;?></span><br><br>

            <input type="radio" name="gender"  value="Male"   <?php if($gender=="Male"){echo "checked";} ?>    >Male<br><br>
            <input type="radio" name="gender"  value="Female" <?php if($gender=="Female"){echo "checked";} ?>  >Female<br><br>
            <input type="radio" name="gender"  value="Other"  <?php if($gender=="Other"){echo "checked";} ?>   >Other<br><br>

            <br><br>
            <br>
            


            <input class="btn" type="submit" value="Submit" name='submit'>

            <input class="btn" type="reset" value="Reset">
        
        </form>
<br><br><br>
</div>

<div class="box2">
<?php
echo"<h1> YOUR DATA </h1>";

echo "<div class='name1'> Your Name is ::" .ucwords($name) ."<br>"." </div>";
echo "<div class='name1'> Your Class is ::" .ucwords($class)."<br>"." </div>";
echo "<div class='name1'> Your Address is ::" .ucwords($addr)."<br>"." </div>";
echo "<div class='name1'> Your Country is ::" .ucwords($country)."<br>"." </div>";
echo "<div class='name1'> Your Pincode is ::" .$pin."<br>"." </div>";
echo "<div class='name1'> Your Gender is ::" .ucwords($gender)."<br>"." </div>";
echo "<div class='name1'> Your Email-id is ::" .ucwords($email)."<br>"." </div>";
echo "<div class='name1'> Your Pan Number is ::" .$pan."<br>"." </div>";
?>
</div>
</center>
    </body>
</head>
