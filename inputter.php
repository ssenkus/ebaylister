<?php
require_once 'login.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database) or die("Unable to select databases: " . mysql_error());

if (mysql_error()) { print "Database ERROR: " . mysql_error(); }

if (isset($_REQUEST['Submit'])) {
    
        # escape data and set variables
        $manufacturer 		= addslashes($_POST["manufacturer"]);
	$model        		= addslashes($_POST["model"]);
        $made_in      		= addslashes($_POST["made_in"]);
	$input_vac		= addslashes($_POST["in_volt"]);
	$input_hz		= addslashes($_POST["in_hz"]);
	$input_w		= addslashes($_POST["in_watts"]);
	$output_volts		= addslashes($_POST["out_volt"]);
	$output_volts_type	= addslashes($_POST["out_volts_type"]);
	$output_amps		= addslashes($_POST["out_amp"]);
	$output_amps_unit	= addslashes($_POST["out_amp_unit"]);
	$polarity		= addslashes($_POST["polarity"]);
	$add_info		= addslashes($_POST["add_info"]);



        # check for error
        if (mysql_error()) { print "Database ERROR: " . mysql_error(); }
}

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
				<label>Listing #
					<span class="small">Use to track after sale</span>
				</label>
				<input type="text" name="listing_num" maxlength="3" style="width:60px";/>
				<br />
				<br />
				<br />
				<br />
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
		
				<div style="height:40%;float:left; clear:right; width:30%;">
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

				<div style="height:40%;float:left; width:35%;">
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
				<br />
				<br />

				<div style="float:left; clear:right;width:30%">
					<label>Polarity&nbsp;
						<span class="small"></span>
					</label>
					<select  name="polarity">
	  					<option value="Center Positive">Center Positive</option>
						<option value="Center Negative">Center Negative</option>
						<option value="Interchangable">Interchangeable</option>
					</select>
					<br />
					<br />
					<label>Additional Info:</label>
						<span class="small"></span>
					</label>
					<textarea name="add_info" cols="40" rows="3" value="" onfocus="make_blank();">Enter anything noteworthy like plug type or any special warnings/positive aspects...
					</textarea>
				</div>
				<div style="float:right; width:20%">
					<button type="submit">Submit</button>
				</div>
			</form>
		</div>
	</body>
</html>


