
<?php
$a=array("vishal","snovya","komal","seema","savri","tanisha","ajay","sameer","rahul","vinay","virat");

$q=$_GET['q'];
$len=strlen($q);
if(strlen($q)>0)
{

        $match="";

        foreach($a as $x)
        {
             if(strtolower($q)==strtolower(substr($x,0,$len)))
             {
                 if($match=="")
                  
                     $match=$x;
                  
                else
                
                 $match=$match.",".$x;
                
            }
        }

        if($match=="")
        
            echo "No Suggestios";
        
        else
        
        echo $match;
        
}
?>
