<?php
$conn = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("asterisk") or die(mysql_error());
//$verify_code  = $_REQUEST['verify_code'];

//if(isset($_GET['verify_code'])) {
//$sql = "SELECT phototype,photo FROM cs_user WHERE checkno= $verify_code";
$sql = "SELECT phototype,photo FROM cs_user";
$result = mysql_query("$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
$row = mysql_fetch_array($result);
header("Content-type: " . $row["phototype"]);
echo $row["photo"];
//}

mysql_close($conn);
?>