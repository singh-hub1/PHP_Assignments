<?php require_once('../../Connections/smartworld.php'); 
session_start(); 
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO daily_routine (studentid, Username, `Sleep`, `Wakeup`, `Breakfast`, `lunch`, `dinner`, `snacks`, `Schstart`, `Schend`, `Motivation`, `Technical`, `Spiritual`, `Languageskills`, `creativity`, `Vocal`, `Sports`, `Dance`, `Exercise`, `Reading`, `Explanation`, `EnglishExp`, `HindiExp`, `MarathiExp`, `WritingQandA`, `OralTest`, `Onlinetest`, createddate, goal) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['studentid'], "int"),
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['Sleep'], "text"),
                       GetSQLValueString($_POST['wakeup'], "text"),
                       GetSQLValueString($_POST['Breakfast'], "text"),
                       GetSQLValueString($_POST['Lunch'], "text"),
                       GetSQLValueString($_POST['Dinner'], "text"),
                       GetSQLValueString($_POST['Snacks'], "text"),
                       GetSQLValueString($_POST['Start'], "text"),
                       GetSQLValueString($_POST['End'], "text"),
                       GetSQLValueString($_POST['Motivation'], "text"),
                       GetSQLValueString($_POST['Technical'], "text"),
                       GetSQLValueString($_POST['Spiritual'], "text"),
                       GetSQLValueString($_POST['Languageskills'], "text"),
                       GetSQLValueString($_POST['creativity'], "text"),
                       GetSQLValueString($_POST['Vocal'], "text"),
                       GetSQLValueString($_POST['Sports'], "text"),
                       GetSQLValueString($_POST['Dance'], "text"),
                       GetSQLValueString($_POST['Exercise'], "text"),
                       GetSQLValueString($_POST['Reading'], "text"),
                       GetSQLValueString($_POST['Explanation'], "text"),
                       GetSQLValueString($_POST['Technical'], "text"),
                       GetSQLValueString($_POST['HindiExp'], "text"),
                       GetSQLValueString($_POST['MarathiExp'], "text"),
                       GetSQLValueString($_POST['WritingQandA'], "text"),
                       GetSQLValueString($_POST['OralTest'], "text"),
                       GetSQLValueString($_POST['Onlinetest'], "text"),
                       GetSQLValueString($_POST['createddate'], "date"),
                       GetSQLValueString($_POST['goal'], "text"));

  mysql_select_db($database_smartworld, $smartworld);
  $Result1 = mysql_query($insertSQL, $smartworld) or die(mysql_error());
echo '<script>alert("Submitted Successfully")</script>';
}

$colname_Recordset2 = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Recordset2 = $_SESSION['MM_Username'];
}
mysql_select_db($database_smartworld, $smartworld);
$query_Recordset2 = sprintf("SELECT * FROM lifedata WHERE user_name = %s", GetSQLValueString($colname_Recordset2, "text"));
$Recordset2 = mysql_query($query_Recordset2, $smartworld) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);

$col_Recordset1 = "-1";
if (isset($_SESSION['MM_Username'])) {
  $col_Recordset1 = $_SESSION['MM_Username'];
}
mysql_select_db($database_smartworld, $smartworld);
$query_Recordset1 = sprintf("SELECT * FROM daily_routine WHERE username=%s ORDER BY createddate desc limit 1", GetSQLValueString($col_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $smartworld) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shrigadi Foundation</title>
</head>
  <link rel="stylesheet" href="../../css/style.css">
<body style="margin:0px; font-size: 15px;">
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
<table width="100%" align="center" cellpadding="1" cellspacing="2">
    <tr><input type="hidden" name="username" value="<?php echo $_SESSION['MM_Username'] ?>">
    <input type="hidden" name="createddate" value="<?php echo date("Y/m/d");?>" class="sign-up-input">
  <th colspan="4" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:20px;">Buffer Time</th>
  </tr>
  <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Sleep</td>
    <td width="" align="center" valign="middle"><label>
     <input type="time" name="Sleep" value="00:00" class="sign-up-input">
    </label></td>   
    <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Wakeup</td>
    <td width="" align="center" valign="middle">
    <input type="time" name="wakeup" value="00:00" class="sign-up-input">
    </td>
  </tr>
  <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Breakfast</td>
    <td width="" align="center" valign="middle"><label>
     <input type="time" name="Breakfast" value="00:00" class="sign-up-input"> 
    </label></td>
    <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Lunch</td>
    <td width="" align="center" valign="middle"><label>
    <input type="time" name="Lunch" value="00:00" class="sign-up-input">   
    </label></td>   
    
  </tr>
  <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Dinner</td>
    <td width="" align="center" valign="middle"><label>
      <input type="time" name="Dinner" value="00:00" class="sign-up-input"> 
    </label></td> 
    <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Snacks</td>
    <td width="" align="center" valign="middle">
    <label>
      <input type="time" name="Snacks" value="00:00" class="sign-up-input"> 
    </label>    
    </td>
        </tr>
    <tr>
  <th colspan="4" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:20px;">School Time</th>
  </tr>
  <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Start</td>
    <td width="" align="center" valign="middle"><label>
      <input type="time" name="Start" value="00:00" class="sign-up-input"> 
    </label></td>   
    <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">End</td>
    <td width="" align="center" valign="middle"><label>
      <input type="time" name="End" value="00:00" class="sign-up-input"> 
    </label>  
    </td>
  </tr>
  <tr>
  <th colspan="4" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:20px;">Plan your Work Routine</th>
  </tr>
  <tr>
    <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Motivation</td>
    <td width="" align="center" valign="middle"><label>
      <input type="time" name="Motivation" value="00:00" class="sign-up-input"> 
    </label></td>   
    <td width="80px" align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Technical</td>
    <td width="" align="center" valign="middle"><label>
      <input type="time" name="Technical" value="00:00" class="sign-up-input"> 
    </label>
        
    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Spiritual</td>
    <td align="center" valign="middle">
        <label>
      <input type="time" name="Spiritual" value="00:00" class="sign-up-input"> 
    </label>
        
      </td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Language skills</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Languageskills" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">creativity</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="creativity" value="00:00" class="sign-up-input"> 
    </label>
      </td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Vocal</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Vocal" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Sports</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Sports" value="00:00" class="sign-up-input"> 
    </label></td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF; font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Roll No</td>
    <td align="center" valign="middle"><input name="studentid" type="text" id="studentid" value="<?php echo $row_Recordset2['roll_no']; ?>" size="7" readonly="readonly" class="sign-up-input" /></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Dance</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Dance" value="00:00" class="sign-up-input"> 
    </label></td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Exercise</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Exercise" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Reading</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Reading" value="00:00" class="sign-up-input"> 
    </label></td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Explanation</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Explanation" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">English Exp</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Technical" value="00:00" class="sign-up-input"> 
    </label></td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Hindi Exp</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="HindiExp" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Marathi Exp</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="MarathiExp" value="00:00" class="sign-up-input"> 
    </label></td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Writing Q and A</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="WritingQandA" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  <tr>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Oral Test</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="OralTest" value="00:00" class="sign-up-input"> 
    </label></td>
    <td align="center" valign="middle" style="background-color:#69F; color:#FFF;  font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">Online test</td>
    <td align="center" valign="middle"><label>
      <input type="time" name="Onlinetest" value="00:00" class="sign-up-input"> 
    </label></td>
  </tr>
  
  <tr>
    <td colspan="4" align="center" valign="middle"><label>
      <input type="submit" name="submit" id="submit" class="sign-up-button" value="Submit" />
      <input type="hidden" name="MM_insert" value="form1" />
    </label></td>
  </tr>
</table>
</form>
</body>
</html>
<?php
mysql_free_result($Recordset2);
mysql_free_result($Recordset1);
?>