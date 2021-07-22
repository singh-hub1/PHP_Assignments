<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
        $str1=$_POST['str1'];
        $str2=$_POST['str2'];
        $pos=$_POST['pos'];
        $ch=$_POST['ch'];
        
        echo"First string  :: $str1.<br><br>";
                                                                                                                             
        echo "Second string :: $str2.<br><br>";
                                                                                                                             
        echo"Position for reverse :: $pos <br><br>";
                                                                                                                             
        echo"Choice is :: $ch.<br><br>";
                                                                                                                             
        switch($ch)
        {
            case 1:
                    if($str1==$str2)
                         echo"Both string are equal.<br>";
                    else
                        echo"Both string are not equal.<br>";
                    break;

            case 2:
                    $a=strcmp($str1,$str2);
                      if($a==0)
                        echo"Both strings are equal.<BR>";
                      else
                        echo"Both strings are not equal.<BR>";
                    break;

            case 3:
                    echo"After Appending two strings::";
                    echo "$str1"." "."$str2";
                    echo"<br>";
                    break;

            case 4: $len=strlen($str1)-$pos;
                    $s=substr($str1,$pos,$len);
                    $str4=strrev($s);
                    echo "After reverse of first string $str1 from position $pos :: $str4 <br>";
            break;
        }
}

?>