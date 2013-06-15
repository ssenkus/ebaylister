<?php




$listing_ID = $_POST['listing_ID'];
$manufacturer = $_POST['manufacturer'];
$model = $_POST['model'];
$made_in = $_POST['made_in'];
$in_volts = $_POST['in_volts'];
$in_hz = $_POST['in_hz'];
$in_watts = $_POST['in_watts'];
$out_volt = $_POST['out_volt'];
$out_volt_type = $_POST['out_volt_type'];
$output_amp = $_POST['output_amp'];
$output_amp_unit = $_POST['output_amp_unit'];
$polarity = $_POST['polarity'];
$add_info = $_POST['add_info'];

$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost
$db_user = "root"; // change to your database password
$db_password = "123!@#qweQWE"; // change to your database password
$database = "power_supplies"; // provide your database name
$db_table = "listings"; // leave this as is

mysql_connect($hostname, $db_user, $db_password);
mysql_select_db("power_supplies");

$query = "INSERT INTO $db_table(listing_ID, manufacturer, model, made_in, in_volts, in_hz, in_watts, out_volts, out_volts_type, output_amps, output_amps_unit, polarity, add_info) VALUES ( \'222\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\',\'\')";

mysql_query($query) or die ('Error updating database');

?>



