
<!doctype html>
<html>
  <head>
    <title>

    </title>
  </head>
  <body background='color=red'>
    <form action='' method='POST'>
    <label >Enter how many rows?</label><br>
    <input type='text' name='rows'><br><br>
    <input type='submit' value='submit'>
    <input type='reset' value='reset'><br>
  </form>


  </body>
</html>



<?php
/*
Write a PHP script to print following floyd’s triangle.
1
2 3
4 5 6
7 8 9 10
*/
if($_SERVER['REQUEST_METHOD']=='POST')
{

  $n=$_POST['rows'];
//echo 'n = ' . $n . '<br>';
echo '<h1>FLOYD TRIANGLE IN PHP</h1>';
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf('%4s', $count);
     $count++;
   } 
	echo '<br>';
   }
  }

?>