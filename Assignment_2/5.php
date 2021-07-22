<?php
/*Design a HTML form to accept a str. Write a PHP script for the following. a) 
Write a function to count the total number of Vowels from the script. b) Show the 
occurrences of eaop Vowel from the script.
*/

?>

<html>
<body>
<form method="POST" action="">
Enter the string : <input type="text" name="str"><br>
<input type="submit" name="Submit">
</form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $str=$_POST["str"];
    echo "<h1>The string : ".$str."<h1>";

    function Occurence($str)
    {
      
    $vowels = array("a"=>0,"e"=>0,"i"=>0,"o"=>0,"u"=>0);

    for($i=0; $i<strlen($str); $i++) 
     {
        if(strtolower($str[$i]) == 'a') 
        {
   
           $vowels['a']++;
        }
        if(strtolower($str[$i]) == 'e') 
        {
            
            $vowels['e']++;
        }
        if(strtolower($str[$i]) == 'i') 
        {
    
            $vowels['i']++;
        }
        if(strtolower($str[$i]) == 'o') 
        {
       
            $vowels['o']++;
        }
        if(strtolower($str[$i]) == 'u')  
        {
           
            $vowels['u']++;
        }
}

echo "Occurence of 'a' : ".$vowels['a']."<br>";
echo "Occurence of 'e' : ".$vowels['e']."<br>";
echo "Occurence of 'i' : ".$vowels['i']."<br>";
echo "Occurence of 'o' : ".$vowels['o']."<br>";
echo "Occurence of 'u' : ".$vowels['u']."<br>";
}



Occurence($str);

}
?>