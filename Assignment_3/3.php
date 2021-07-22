<?php
/*Declare array. Reverse the order of elements, making the first element last and 
last element first and similarly rearranging other array elements.[Hint : 
array_reverse()] */
?>

<html>
<form action='' method='POST'>
  <h2>OPERATIONS on ARRAY</h2>                                                                                                                   
        <input type='radio' name='op' value='1'>Reverse.<br>
        <br>
      
        <br>
       <br>
        <input type='submit' value='Submit'>   
        <input type='reset' value='Reset'><br>

</form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$array=array(1,2,3,4,5);

        $ch=$_POST['op'];
        switch($ch)
        {
            case 1: echo "Array Reverse are :: "."<br>";
                    echo "<br>";
                    echo"<pre>";
                    print_r(array_reverse($array));
                    echo "</pre>";
                    break;
        }
      }

?>