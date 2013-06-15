<?php
 
$listing_ID = $_POST['listing_ID'];
$manufacturer = $_POST['manufacturer'];
 
mysql_connect ("localhost", "root", "123!@#qweQWE") or die ('error: ' . mysql_error());
mysql_select_db("power_supplies");
 
$sql = "INSERT INTO listings values ('101, '$manufacturer', 
'', '', '');";
 
mysql_query($sql) or die ('error: ' . mysql_error());
?>
