
 <?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
     
    $first = $_POST['first'];
    $second = $_POST['second'];
    $op = $_POST['op'];
    
    if(empty($first))
    {
        echo "The first number is empty so we add our default is $first=10";
        $first=10;
        echo "<br>";
        echo "<br>";
    }
    
    if(empty($second))
    {
        echo "The second number is empty so we add our default is $second=10";
        $second=20;
        echo "<br>";
        echo "<br>";
    }
     function operation($first,$second,$op)
     {
    
        if($op==1)
        {
            $c = $first + $second;
            echo"addition is: $c"; 
        }
        else if($op==2)
        {
            $c = $first - $second; 
            echo"subtraction is: $c";
        }
        else if($op==3)
        {
            $c = $first * $second; 
            echo"multiplication is: $c";
        }
        else if($op==4)
        {
            $c = $first / $second; 
            echo"Division is: $c";
        
        }
    }

    operation($first,$second,$op);
}
?>