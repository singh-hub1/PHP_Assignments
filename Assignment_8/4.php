<html>
<head>
<script type="text/javascript">
function print()
{
	var xmlhttp=false;
	if(windows.XMLHttpRequest)
		xmlhttp=new XMLHttpRequest();
	else
		xmlhttp=new ActiveXObject("microsoft.XMLHTTP");
		xmlhttp.open("GET","Action_4.php?");
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		{
			if(xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("result").innerHTML=xmlhttp.responseText;
			}
		}
}
</script>
</head>
<body>
<center>
<h3>display the contents of abc.txt file</h3>
<br><input type="button" value=Print onclick="print()">
<span id="result"></span>
</center>
</body>
</html>	