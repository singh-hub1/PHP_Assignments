 <?php
//  Write AJAX program to print movie by selecting an actor�s name. create table Movie and
// Actor with 1:M cardinality as follows:
// Movie ( mno, mname, release_year)
// Actor( ano, aname)
// [USE PostgreSQL]

?>

<html>
<script type="text/javascript">
function display()
{
ob = new XMLHttpRequest();
var a = document.getElementById("a").value;
ob.open("GET","Action_5.php?a="+a);
ob.send();
ob.onreadystatechange = function()
{
if(ob.readyState == 4 && ob.status == 200)
document.getElementById("i").innerHTML = ob.responseText;
}
}
</script>
<body>
Enter Actor Name :<input type=text name=a id=a><br>
<input type=submit value="DISPLAY MOVIE NAME" onclick=display()><br>
<span id=i></span>
</body>
</html>



