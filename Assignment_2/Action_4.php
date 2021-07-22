<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $nos=$_POST['nos'];
    $rev=strrev($nos);
    $cnt=strlen($nos);
    echo"The word of ".$nos." is :: ";

    while($cnt)
    {
        $temp=intval($rev)%10;
        $rev= intval ($rev)/10;
        switch($temp)
        {
            case 1:echo " One ";
                    break;
            case 2:echo " Two ";
                    break;
            case 3:echo " Three ";
                    break;
            case 4:echo " Four ";
                    break;
            case 5:echo " Five ";
                    break;
            case 6:echo " Six ";
                    break;
            case 7:echo " Seven ";
                    break;
            case 8:echo " Eight ";
                    break;
            case 9:echo " Nine ";
                    break;
            case 0:echo " Zero ";
                    break;
            default:echo " Number is negative ";
                      break;
        }
   
        $cnt--;
    }
}

?>