<html>
<head><title>Personality</title></head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
Select your personality attributes:<br />
<br><br>
 <select name="attributes[]" multiple><!--we make attributes an array -->
<option value="perky">Perky</option>
<option value="morose">Morose</option>
<option value="thinking">Thinking</option>
<option value="feeling">Feeling</option>
<option value="thrifty">Spend-thrift</option>
<option value="prodigal">Shopper</option>
</select>
<br>
<br><br>
<input type="submit" name="send" value="Record my personality!" />
</form>


</form>
<?php
if (array_key_exists('send', $_GET))
 {
    $description = join (" ", $_GET['attributes']);
    echo "You have a $description personality.";
}
?>
</body>
</html>