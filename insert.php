<?php
// receive input, store in database
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database, $db_server) or die ("Unable to select database: ". mysql_error());

$listing_num		= get_post('listing_num');
$manufacturer		= get_post('manufacturer');
$model			= get_post('model');
$made_in		= get_post('made_in');
$input_volts		= get_post('input_volts');
$input_hz		= get_post('input_hz');
$input_extra_info	= get_post('input_extra_info');
$input_extra_info_unit  = get_post('input_extra_info_unit');
// $input_watts		= get_post('input_watts');
$output_volts		= get_post('output_volts');
$output_volts_type	= get_post('output_volts_type');
$output_amps		= get_post('output_amps');
$output_amps_unit	= get_post('output_amps_unit');
$polarity		= get_post('polarity');
$add_info		= get_post('add_info');


$query = "INSERT INTO listings VALUES" . 
	"('$listing_num', '$manufacturer', '$model', '$made_in', '$input_volts', '$input_hz', '$input_extra_info', '$input_extra_info_unit', '$output_volts', '$output_volts_type', '$output_amps', '$output_amps_unit', '$polarity', '$add_info')";


if (!mysql_query($query, $db_server)) echo "INSERT failed: $query<br />" . mysql_error() . "<br /><br />";


mysql_close($db_server);

function get_post($var) 
{
	return mysql_real_escape_string($_POST[$var]);
}

?>
