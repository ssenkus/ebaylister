<?php
require_once 'login.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!db_server) die("Unable to connect to MySQL: " . mysql_error());

mysql_select_db($db_database) or die("Unable to select databases: " . mysql_error());

if (mysql_error()) { print "Database ERROR: " . mysql_error(); }

if (isset($_REQUEST['Submit'])) {
    
        # escape data and set variables
	$listing_num		= addslashes($_POST["listing_num"]);
        $manufacturer 		= addslashes($_POST["manufacturer"]);
	$model        		= addslashes($_POST["model"]);
        $made_in      		= addslashes($_POST["made_in"]);
	$input_volts		= addslashes($_POST["input_volts"]);
	$input_hz		= addslashes($_POST["input_hz"]);
//	$input_watts		= addslashes($_POST["input_watts"]);  // Leave this until it is replaced by extra info
	$input_extra_info	= addslashes($_POST["input_extra_info"]);
	$input_extra_info_unit  = addslashes($_POST["input_extra_info_unit"]);
	$output_volts		= addslashes($_POST["output_volts"]);
	$output_volts_type	= addslashes($_POST["output_volts_type"]);
	$output_amps		= addslashes($_POST["output_amps"]);
	$output_amps_unit	= addslashes($_POST["output_amps_unit"]);
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
					<span class="small">Leave blank if not available. Check to include in title</span>
				</label>
				<input type="text" name="model" />
				<input type="checkbox" name="include_in_title_model" />
	
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
					<input type="text" name="input_volts" value="120" />
					<div class="spacer"></div>		
					<label>Hz
						<span class="small"></span>
					</label>
					<input type="text" name="input_hz" value="60"/>
					<div class="spacer"></div>
					<label>Extra Info
						<span class="small"></span>
					</label>
					<input type="text" name="input_extra_info" value=" "/>
					<select style="float:right;" name="input_extra_info_unit"> <!-- Fix this variable later, use output_extra_info and output_extra_info_unit as variables-->
						<option value="W">W</option>
						<option value="AC">mA</option>
						<option value="AC">VA</option>
						<option value="AC">A</option>
						<option value="N/A">N/A</option>
					</select>
	
					<div class="spacer"></div>
				</div>

				<div style="height:40%;float:left; width:35%;">
					<h1>Output</h1>

					<label>Volts
						<span class="small"></span>
					</label>
					<input type="text" name="output_volts" />
					<select name="output_volts_type">
						<option value="DC">DC</option>
						<option value="AC">AC</option>
					</select>
					<div class="spacer"></div>
					<label>Amps
						<span class="small"></span>
					</label>
					<input type="text" name="output_amps" />
					<select name="output_amps_unit">
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
						<option value="Interchangeable">Interchangeable</option>
						<option value="A/C">A/C</option>
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


