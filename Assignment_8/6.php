<?php
//Write a AJAX program to search Student name according to the character typed and
//display list using array
?>

<html>
<head>
<script type="text/javascript" >
function m1(str)
{
var ob=false;
ob=new XMLHttpRequest();
ob.open("GET","Action_6.php?q="+str);
ob.send();
ob.onreadystatechange=function()
{
if(ob.readyState==4 && ob.status==200)
document.getElementById("a").innerHTML=ob.responseText;
}
}

</script>
</head>
<body>
<form>
Enter Name Of Student :<input type=text name=search size="20"
onkeyup="m1(form.search.value)">

<input type=button value="submit" ><!--onclick="m1(form.search.value)"-->
<!-- onclick="matches(form.search.value)">-->
</form>

suggestions :<span id="a"></span><br>

</body>
</html>


