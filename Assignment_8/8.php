<?php
// Write a AJAX program to read contact. Dat file and print the contain of a file in a Tabular
//form when the user clicks on print button.
//Contact.dat file contain srno, name, residence number, mobile number, context/ relation.
//[ Enter at least 3 record in contact.dat file]
//[Note: Examinar may change the contact. dat, dept.dat and provide proper structure of the file]
?>

<html>
<head>
<style>
span
{
font-size: 25px;
}
table
{
color: blueviolet; ;
}
</style>
<script type="text/javascript" >
function print()
{
var ob=false;
ob=new XMLHttpRequest();
ob.open("GET","Action_8.php?");//emailid="+eid);
ob.send();
ob.onreadystatechange=function()
{
if(ob.readyState==4 && ob.status==200)
{
document.getElementById("i").innerHTML=ob.responseText;
}
}
}
</script>
</head>
<body>
<center>
<h3>Display the contents of a contact.dat file </h3>
<br><input type="button" value=Print onclick="print()" >
<span id="i"></span>
</center>
</body>
</html>

