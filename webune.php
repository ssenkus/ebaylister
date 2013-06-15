<?php
####################################################################
# THIS SCRIPT CREATED BY WWW.WEBUNE.COM
# PLEASE DONT ERASE THIS
###################################################################
####################################################################
################ DATABASE CONFIGURE ##############################
####################################################################
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost
$db_user = "root"; // change to your database password
$db_password = "123!@#qweQWE"; // change to your database password
$database = "power_supplies"; // provide your database name
$db_table = "listings"; // leave this as is


# STOP HERE
####################################################################
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE
$db = mysql_connect($hostname, $db_user, $db_password);
mysql_select_db($database,$db);
?>


<html>
<head>
	<title>Power Supply Speed Lister</title>
 	<link href="styler.css" rel="stylesheet" type="text/css">
	<script language="javascript" type="text/javascript">
	function make_blank()
	{
		document.form1.add_info.value ="";
	}
	</script>
</head>
<body>
	<div id="stylized" class="myform">
		<form id="form1" name="form1" method="post" action="outputter.php">
		<h1>Power Supply Speed Lister</h1>
		<p>User inputs Power Supply info and a formatted listing is returned to be copypasta'ed into an eBay listing, saving time and reducing monotonous work.</p>

		<label>Manufacturer
			<span class="small">Check to include in title</span>
		</label>
		<input type="text" name="manufacturer" />
		<input type="checkbox" name="include_in_title" />

		<label>Model
			<span class="small">Leave blank if not available</span>
		</label>
		<input type="text" name="model" />


		<label>Made In
			<span class="small">Leave blank if not available</span>
		</label>
		<input type="text" name="made_in" />

		<div class="spacer"></div>

		<br />

		<div style="height:40%;float:left; clear:right; width:400px;">
		<h1>Input</h1>

		<label>VAC
			<span class="small"></span>
		</label>
		<input type="text" name="in_volt" value="120" />
		<div class="spacer"></div>		
		<label>Hz
			<span class="small"></span>
		</label>
		<input type="text" name="in_hz" value="60"/>
		<div class="spacer"></div>
		<label>W
			<span class="small"></span>
		</label>
		<input type="text" name="in_watts" />

		<div class="spacer"></div>
		</div>
		<div style="height:40%;float:left; width:400px;">
		<h1>Output</h1>

		<label>Volts
			<span class="small"></span>
		</label>
		<input type="text" name="out_volt" />
		<select name="out_volt_type">
			<option value="DC">DC</option>
			<option value="AC">AC</option>
		</select>
		<div class="spacer"></div>
		<label>Amps
			<span class="small"></span>
		</label>
		<input type="text" name="out_amp" />
		<select name="out_amp_unit">
  			<option value="mA">mA</option>
			<option value="A">A</option>
		</select>
		
		</div>
		<div class="spacer"></div>

		<div style="float:left; clear:right;width:40%">
			<label>Polarity&nbsp;
				<span class="small"></span>
			</label>
			<select  name="polarity">
  				<option value="Center Positive">Center Positive</option>
				<option value="Center Negative">Center Negative</option>
				<option value="Interchangable">Interchangeable</option>
			</select>
		</div>
		<div style="float:left; clear:right; width:40%;">
			<label>Additional Info:</label>
				<span class="small"></span>
			</label>
			<textarea name="add_info" cols="40" rows="3" onfocus="make_blank();">Enter anything noteworthy like plug type or any special warnings/positive aspects... 
			</textarea>

		</div>
			<div style="float:left; width:20%">
				<button type="submit">Submit</button>
			</div>
	</form>

</body>
</html>


<?php
if (isset($_REQUEST['Submit'])) {
# THIS CODE TELL MYSQL TO INSERT THE DATA FROM THE FORM INTO YOUR MYSQL TABLE
$sql = "INSERT INTO $db_table(listing_ID, manufacturer, model, made_in, in_volts, in_hz, in_watts, out_volt, out_volts_type, output_amp, output_amp_unit, polarity, add_info) VALUES (
'".mysql_real_escape_string(stripslashes($_REQUEST['listing_ID']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['manufacturer']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['model']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['made_in']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['in_volts']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['in_hz']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['in_watts']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['out_volt']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['out_volt_type']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['output_amp']))."',
'".mysql_real_escape_string(stripslashes($_REQUEST['output_amp_unit']))."'
,'".mysql_real_escape_string(stripslashes($_REQUEST['polarity']))."'
,'".mysql_real_escape_string(stripslashes($_REQUEST['add_info']))."')";

if($result = mysql_query($sql ,$db)) {
echo '<h1>Thank you</h1>Your information has been entered into our database<br><br><img src="http://www.webune.com/images/headers/default_logo.jpg"';
} else {
echo "ERROR: ".mysql_error();
}
} else {
?> 










if($result = mysql_query($sql ,$db)) {
echo '<h1>Thank you</h1>Your information has been entered into our database<br><br><img src="http://www.webune.com/images/headers/default_logo.jpg"';
} else {
echo "ERROR: ".mysql_error();
}
} else {
?>
<h1>How To Insert Data Into MySQL db using form in php</h1>By <a href="http://www.webune.com">Webune.com</a><hr>
<form method="post" action="">
Name:<br>
<input type="text" name="user_name">
<br>
Email: <br>
<input type="text" name="user_email">
<br><br>
<input type="submit" name="Submit" value="Submit">
</form>
<?php
}
?>
</body>
</html>
