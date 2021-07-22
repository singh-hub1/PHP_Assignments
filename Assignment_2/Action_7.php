<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
     $email=$_POST['email'];
     /*
     if(filter_var($email,FILTER_VALIDATE_EMAIL))
     {
         echo"Your email id is correct!";
     }
     else
     {
         echo"Your email id is not  correct!";
     }
     */

     
    $regex='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
        if(preg_match($regex,$email))
        {
            echo"EMAIL_ID is Valid";
        }
        else
        {
            echo"EMAIL-ID is Invaid";
        }
        

       

}

?>


<?php
/*
//DEPRECATED EREG FUNCTION

    $arr=explode("@",$email);
    print_r($arr);
    if(count($arr)!=2)
    {
        echo "invalid email";
    }
    else
    {
        $b=$arr[0];
        if(ereg('/^([a-zA-Z0-9\.]$/',$b))
        {
              $a=$arr[1];
               if(ereg('/[a-zA-z]+(\.)+[a-zA-Z]+(\.)+[a-zA-Z]{2,3} $/',$a))
                {
                   echo"proper valid";
                }
        
              else
                 echo"invalid email";
        }
        else
            echo"invalid";
   }
   */

   ?>