

<head><title>Personality</title></head>
<body>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
Select your personality attributes:<br />

Perky <input type="checkbox" name="attributes[]" value="perky" <?php
if(is_array($_GET['attributes']) && in_array('perky', $_GET['attributes'])) {echo "checked"; }?> />
<br>
<br>
<br>

Morose <input type="checkbox" name="attributes[]" value="morose" <?php
if(is_array($_GET['attributes']) && in_array('morose', $_GET['attributes'])) {echo "checked"; }?> />
<br>
<br>
<br>

Thinking <input type="checkbox" name="attributes[]" value="thinking" <?php
if(is_array($_GET['attributes']) && in_array('thinking', $_GET['attributes'])) {echo "checked"; }?> />
<br>
<br>
<br>

Feeling <input type="checkbox" name="attributes[]" value="feeling" <?php
if(is_array($_GET['attributes']) && in_array('feeling', $_GET['attributes'])) {echo "checked"; }?> />
<br>
<br>
<br>


Spend-thrift <input type="checkbox" name="attributes[]" value="thrifty" <?php
if(is_array($_GET['attributes']) && in_array('thrifty', $_GET['attributes'])) {echo "checked"; }?> />
<br>
<br>
<br>

Shopper <input type="checkbox" name="attributes[]" value="shopper" <?php
if(is_array($_GET['attributes']) && in_array('shopper', $_GET['attributes'])) {echo "checked"; }?>  />
<br>
<br>
<br>

<input type="submit" name="send" value="Record my personality!" />
</form>

<?php
if (array_key_exists('send', $_GET)) {
$description = join (" ", $_GET['attributes']);
echo "You have a $description personality.";
}
?>
</body>
</html>