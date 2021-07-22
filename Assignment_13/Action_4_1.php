<?php

  session_start();

  $_SESSION['start_time'] = time();

  $_SESSION['id'] = $_POST['id'];

  $_SESSION['passwd'] = $_POST['passwd']; 

  

  if($_SESSION['id']=='1' && $_SESSION['passwd']=='vishal')
  {
    echo '
      <html>
      <body>
          Enter details : <br><br>

          <form action="Action_4.php" method=POST>

           <label >Name ::</label><br>
            <input type=textbox name=uname>   
            <br><br>

          <label >City ::</label><br>
             <input type=textbox name=ucity>    
            <br><br>

            <label >Phone No  ::</label><br>
              <input type=textbox name=upno>
               <br><br>

          <input type=submit value="Display">
          <input type=reset value="Reset">

          </form>

        </body>
        </html>';
  
  }
  else 
  {
    header('Location: 4.php'); 
  }

?>