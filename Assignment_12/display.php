<html>
    <head>

<style>
    body{
        background-color: #1eae98;
    }
    .box1
    {
        padding: 14px;
        margin: 14px;
        /* border-radius:17px; */
      
    }
    .table
    {
        color: #000000;
        font-size: larger;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
       
    }
    .body
    {
        color:#323232;
        font-size: medium;
        font-weight: 200;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    a{
        background-color: #555555;;;
        color: white;
        padding: 1em 1.5em;
        text-decoration:solid;
        text-transform: uppercase;
        border-radius: 11px;
        
    }
    a:hover 
    {
       background-color: #eba83a;
       color: #000000;
    }
    
</style>
    </head>
    <body>
        <center>
            <h1> :: Your Form Data :: </h1>

            <hr>
        <div class="box1">

            <table cellpadding="34" cellspacing="24" bgcolor="">

                <thead  >
                    
                    <tr>

                        <th class="table table-dark table-hover">ID</th>

                        <th class="table table-dark table-hover">First Name</th>

                        <th class="table table-dark table-hover">Last Name</th>

                        <th class="table table-dark table-hover">Email</th>

                        <th class="table table-dark table-hover">City</th>

                        <th class="table table-dark table-hover">State</th>

                        <th class="table table-dark table-hover">Zip</th>

                        <th class="table table-dark table-hover">Pic</th>
                     
                    </tr>
                  

                </thead>
             
                <tbody>
                
<?php

                 include 'dbcon.php';

                 $s="select * from information";

                 $q=mysqli_query($con,$s);

                //  $r=mysqli_fetch_array($q);
                
                 while( $r=mysqli_fetch_array($q))
                   {
?>
                        <tr>
                                <td class="body">  <?php  echo $r['s_no'];    ?>  </td>

                                <td class="body">  <?php  echo $r['fname'];   ?>  </td>

                                <td class="body">  <?php  echo $r['lname'];   ?>  </td>

                                <td class="body">  <?php  echo $r['email'];   ?>  </td>

                                <td class="body">  <?php  echo $r['city'];    ?>  </td>

                                <td class="body">  <?php  echo $r['state'];   ?>  </td>

                                <td class="body">  <?php  echo $r['zip'];     ?>  </td>

                                <td class="body">  <img src=" <?php  echo $r['photo']; ?> " width="150" height="100"> </td>
                        </tr>
<?php
                 }
?>
                </tbody>
            </table>
        </div>
       
        <a href="2.php" class="btn btn-primary" >Okay</a>
    
    </center>

    
    </body>
</html> 

