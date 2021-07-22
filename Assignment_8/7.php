<?php
// Write a AJAX program to print Teacher information from postgreSQL table Teacher.
//Teacher (Tno, Name, Subject, Research area).
//[Note: Examiner can change PostgreSQL table ]
?>


<html>
<script type="text/javascript">
function display()
{
ob = new XMLHttpRequest();
ob.open("GET","Action_7.php");
ob.send();
ob.onreadystatechange = function()
{
if(ob.readyState == 4 && ob.status == 200)
document.getElementById("i").innerHTML = ob.responseText;
}
}
</script>
<body>
<h2>DISPLAY INFORMATION OF TEACHER</h2>
<input type=submit value="DISPLAY INFORMATION" onclick=display()>
<span id=i></span>
</body>
</html>


