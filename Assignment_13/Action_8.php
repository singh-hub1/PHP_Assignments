<?php
echo "<br> Font Color is ".$_POST['fontcolor'].

"<br> Background Color is ".$_POST['bgcolor'].

"<br> Font Size is ".$_POST['fontsize'].

"<br> Font Style is ".$_POST['fontstyle'];

echo "<br>";

setcookie("fcolor",$_POST['fontcolor'],time()+3600);

setcookie("bgcolor",$_POST['bgcolor'],time()+3600);

setcookie("fsize",$_POST['fontsize'],time()+3600);

setcookie("fstyle",$_POST['fontstyle'],time()+3600);
?>
<br>
<a href="Action_8_1.php">CONTINUE</a>