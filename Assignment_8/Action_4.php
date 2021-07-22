<?php
if($fp=fopen("abc.txt","r"))
{
	while($line=fgets($fp,80))!=false)
	{
		echo"<br>".$line;
	}
}
else
	echo"file does not exist";
?>