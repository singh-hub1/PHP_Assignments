<?php
//Write a PHP script to display student information on web page.
?>

<!doctype html>
<html>
    <head>
        <style>
            .box
            {
                height: 500px;
                width: 500px;
                border: 2px solid black;
                margin-top: 100px;
                margin-left: 100px;
                background-color:aqua ;
                border-radius: 7px;
            }
            body
            {
                background-color: brown;
            }
            .box1
            {
                background-color:chartreuse ;
                border: 2px solid black;
                height: 300px;
                width: 300px;
                position: relative;
                margin-top: 50px;
                margin-left: 90px;
              
                padding: 15px;
                border-radius: 7px;

            }
            .b1,.b2
            {
                margin-left: 50px;
                padding: 10px;
                border-radius: 7px;
            }
 
        </style>
    </head>
    <body>
        <div class='box'> 

            <center><h1>Student Details</h1></center>
            <div class='box1'>
                <form action='' method='POST'>
                    <label >Student Name:</label>
                    <input type='text' name='name' id='name' placeholder='student name'><br><br>
                    <label >Student Class:</label>
                    <input type='text' name='class' id='class' placeholder='student class'><br><br>
                    <label >Student Roll:</label>
                    <input type='text' name='roll' id='roll'placeholder='student roll'><br><br>
                    <label >Student Addr:</label>
                    <input type='text' name='addr' id='addr' placeholder='student address'><br>
                    <br><br><br>
        
                    <input type='submit' value='submit' class='b1'>
                    <input type='reset' value='reset' class='b2'><br>
            </div>
            
        </form></div>
      
    </body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $class=$_POST['class'];
    $roll=$_POST['roll'];
    $addr=$_POST['addr'];

    echo '<h1>STUDENT DETAILS DISPLAY</h1>';

    echo 'Student name is:'.$name;    
    echo '<br>';
    echo '<br>';
    echo 'Student class is:'.$class;  
    echo '<br>';
    echo '<br>';
    echo 'Student roll is:'.$roll;
    echo '<br>';
    echo '<br>';
    echo 'Student address is:'.$addr;
    echo '<br>';
    echo '<br>';

}
/*
//ALTERNATIVE WAY 

 echo "NAME :VISHAL SINGH <br>";
 echo "CLASS : SYBCA(SCI)<br>";
 echo "ROLL NO. : 12939.<br>";
*/


?>