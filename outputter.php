<?php
require_once 'insert.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="styler.css" rel="stylesheet" type="text/css">
	<title>Output Page</title>

	<script type="text/javascript">
		function select_all0()	{
			var text_val=eval("document.form0.title");
			text_val.focus();
			text_val.select();
		}
		function select_all1() {
			var text_val=eval("document.form1.listing");
			text_val.focus();
			text_val.select();
		}
	</script>
</head>

<body>
<div id="stylized" class="myform" style="height:220px;">
		<h1>Power Supply Speed Lister</h1>
		<p>User inputs Power Supply info and a formatted listing is returned to be copypasta'ed into an eBay listing, saving time and reducing monotonous work.</p>

		<form name='form0' float="left">
			<label style="margin:0px 10px 5px 5px;">Title
				<span class="small">Click to select, Ctrl+C to copy</span>
			</label>
			<textarea style="border:solid 5px #ff0000;" name="title" cols="80" rows="1" onClick="select_all0();" ><?php if ($_POST["include_in_title"] == "on") echo $_POST["manufacturer"] . " ";  if ($_POST["include_in_title_model"] == "on") echo $_POST["model"] . " "; echo $_POST["output_volts"]; echo "V"; echo $_POST["output_volts_type"]; echo " "; echo $_POST["output_amps"]; echo $_POST["output_amps_unit"]; ?> AC Adapter</textarea>
		</form>
<br />
<br />

	<form name='form1' float="left" >
			<label style="margin:0px 10px 5px 5px;">Listing HTML Code
				<span class="small">Click to select, Ctrl+C to copy</span>
			</label>
			<textarea style="border:solid 5px #ff0000;" name="listing" cols="80" rows="1" onClick="select_all1();">
  &lt;div style="background-color:#5ac864;"&gt;
    &lt;div style="color:#ffffff; font-family: Helvetica; font-size:50px; text-align: center; font-weight: bold;"&gt;
	<?php if ($_POST["include_in_title"] == "on") echo $_POST["manufacturer"]; if ($_POST["include_in_title_model"] == "on") {echo " "; echo $_POST["model"]; echo "<br />";} echo $_POST["output_volts"]; echo "V"; echo $_POST["output_volts_type"]; echo " "; echo $_POST["output_amps"]; echo $_POST["output_amps_unit"];?>
    AC/<?php echo $_POST["output_volts_type"]; ?> Adapter&lt;br /&gt;
      Power Supply&lt;br /&gt;
    &lt;/div&gt;&lt;br /&gt;

    &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font size="5"&gt;&lt;span style=
    "font-weight: bold;"&gt;&lt;span style="color:#FFFFFF;"&gt;Missing your AC
    adapter?&amp;nbsp; Original power supply bit the dust?&lt;br /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;

    &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font size="5"&gt;&lt;span style=
    "font-weight: bold;"&gt;&lt;span style="color:#FFFFFF;"&gt;Power your electronics
    device for cheap!&lt;br /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;

    &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font size="4"&gt;&lt;span style=
    "font-weight: bold;"&gt;&lt;span style="color:#FFFFFF;"&gt;***&lt;/span&gt; AC Adapter
    has been tested and operates within specs printed on label&lt;/span&gt; &lt;span style=
    "color:#FFFFFF; font-weight: bold;"&gt;***&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;
	&lt;br /&gt;
    &lt;div style=
    "padding: 10px; margin: 0px auto; width: 50%; background-color: rgb(0, 0, 0); border: 2px solid rgb(0, 0, 255);"&gt;
    &lt;div style="text-align: center;"&gt;&lt;/div&gt;

      &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font style=
      "font-family: Trebuchet MS;" size="5"&gt;&lt;span style=
      "color:#002CFD; text-decoration: underline;"&gt;Product
      Info:&lt;/span&gt;&lt;/font&gt;&lt;br style="color:#FFFFFF;" /&gt;&lt;/p&gt;&lt;span style="font-family: Helvetica; color:#FFFFFF;"&gt;Manufacturer:
      <?php echo $_POST["manufacturer"];?>&lt;br /&gt;
      Model: <?php echo $_POST["model"];?>&lt;br /&gt;
      Input:<?php echo $_POST["input_volts"];?>V AC <?php echo $_POST["input_hz"];?> Hz
      <?php echo $_POST["input_extra_info"] . " " . $_POST["input_extra_info_unit"];?> &lt;/span&gt;&lt;br style=
      "font-family: Helvetica; color:#FFFFFF;" /&gt;
      &lt;span style=
      "font-family: Helvetica; color:#FFFFFF; "&gt;Output:<?php echo $_POST["output_volts"];?>V
      <?php echo $_POST["output_volts_type"]; echo " "; echo $_POST["output_amps"]; echo $_POST["output_amps_unit"];?>&lt;/span&gt;&lt;br style=
      "font-family: Helvetica; color:#FFFFFF; " /&gt;
      &lt;span style="font-family: Helvetica;"&gt;&lt;span style=
      "color:#FFFFFF;"&gt;Polarity:
      <?php echo $_POST["polarity"];?>&lt;/span&gt;&lt;br /&gt; 
      <?php if ($_POST["polarity"] == "Center Positive") {echo "&lt;img width=150px; height=75px; src=\"http://pconthego.files.wordpress.com/2010/07/read-ac-dc-adapter-1-3-800x800.jpg\"";} if ($_POST["polarity"] == "Center Negative") {echo "&lt;img height=100px; width=150px; src=\"http://i2.squidoocdn.com/resize/squidoo_images/250/draft_lens17588566module147917139photo_1296530542polarity-pic.JPG\"";} ?>&lt;br /&gt;
&lt;!-- 
http://m1.ikiwq.com/img/xl/2soNUNOeFqXO9P0ga7uQ9d.png

--&gt;
      &lt;span style="color:#FFFFFF;"&gt;Made in <?php echo $_POST["made_in"];?>&lt;br /&gt;
      Additional Info:&amp;nbsp;&amp;nbsp;&amp;nbsp; <?php echo $_POST["add_info"];?>&lt;/span&gt;&lt;br /&gt;
      &lt;br style="font-weight: bold;" /&gt;&lt;/span&gt;
    &lt;/div&gt;&lt;br /&gt;

    &lt;div style=
    "clear: both; background-color: rgb(0, 0, 0); border: 2px solid rgb(0, 0, 0); text-align: center; padding: 0px; width: 50%; margin: 0px auto;"&gt;
    &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font size="4"&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;

      &lt;p style="font-family: Courier; text-align: center; color:#FFFFFF;"&gt;
      &lt;font style="font-weight: bold; font-family: Helvetica;" size="5"&gt;Free shipping
      within the U.S.!&lt;/font&gt;&lt;/p&gt;

      &lt;p style="font-family: Courier; text-align: center; color:#FFFFFF;"&gt;
      &lt;/p&gt;

      &lt;p style="font-family: Helvetica; color:#FFFFFF;"&gt;Item is shipped within
      two business days.&amp;nbsp; Expedited shipping is available upon
      request.&lt;/p&gt;&lt;span style="color:#FFFFFF;"&gt;Sorry, no international
      shipping.&lt;/span&gt;

      &lt;p style="font-family: Helvetica; font-size:16px; text-align: center;"&gt;
    &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font size="4"&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;span style=
    "color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;&amp;#9733;&lt;/span&gt;&amp;#9733;&lt;span style=
    "color:#002CFD;"&gt;&amp;#9733;&lt;/span&gt;&lt;/span&gt;&lt;/font&gt;
	&lt;br /&gt;&lt;/p&gt;
    &lt;/div&gt;
    &lt;br /&gt;

    &lt;div style=
    "background-color:#FFFFFF; border: 2px solid rgb(0, 0, 0); text-align: center; width: 50%; margin: 0px auto; padding: 10px;"&gt;
    &lt;p style="font-family: Arial;"&gt;&amp;#9888; &lt;span style=
    "color:#FF0010;"&gt;Warning&lt;/span&gt;: Do not use an AC Adapter with your device
    if you are not sure of the device's power ratings; contact the manufacturer or visit
    their website for this information.&amp;nbsp; We are not responsible for any damage that
    may result from ignoring product specifications.&amp;nbsp; In general, you must match
    voltage and polarity while ensuring that your AC Adapter's amperage is equal to or above
    the device's rating.&amp;nbsp;&lt;br /&gt;&lt;/p&gt;
    &lt;/div&gt;&lt;br /&gt;

    &lt;p style="font-family: Helvetica; text-align: center;"&gt;&lt;font size="5"&gt;&lt;span style=
    "font-weight: bold; color:#FFFFFF;"&gt;&lt;span style=
    "color:#FF0010;"&gt;*&lt;/span&gt; If you have any questions, send us a message and
    we'll get back to you within the day (sooner during weekday business hours,
    PST).&lt;/span&gt; &lt;span style="color:#FF0010;"&gt;*&lt;/span&gt;&lt;/font&gt;&lt;br /&gt;&lt;/p&gt;

    &lt;p style=
    "font-family: Helvetica; text-align: center; font-weight: bold; color: rgb(255, 241, 37);"&gt;
    &lt;font size="6"&gt;Thanks for looking and happy bidding!!!&lt;/font&gt;&lt;/p&gt;

    &lt;p style=
    "font-family: Helvetica; text-align: center; font-weight: bold;"&gt;
    &lt;br /&gt;&lt;/p&gt;

    &lt;p style=
    "font-family: Helvetica; text-align: center; font-weight: bold; color:#5ac864;"&gt;<?php echo $_POST["listing_num"]; ?>
    &lt;br /&gt;&lt;/p&gt;

    &lt;p style=
    "font-family: Helvetica; text-align: center; font-weight: bold;"&gt;
    &lt;font size="6"&gt;&lt;br /&gt;&lt;/font&gt;&lt;/p&gt;
  &lt;/div&gt;


	</textarea>
</form>


</div>
<br />
<br />
<br />
<br />
<br />
<!---------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------------------------------------------------------------->
  <p>Preview</p>

  <div style="background-color:#5ac864;">
    <div style="color:#ffffff; font-family: Helvetica; font-size:50px; text-align: center; font-weight: bold;">
	<?php if ($_POST["include_in_title"] == "on") echo $_POST["manufacturer"] . "<br /> "; echo $_POST["output_volts"]; echo "V"; echo $_POST["output_volts_type"]; echo " "; echo $_POST["output_amps"]; echo $_POST["output_amps_unit"];?>
    AC/<?php echo $_POST["output_volts_type"]; ?> Adapter<br />
      Power Supply<br />
    </div><br />

    <p style="font-family: Helvetica; text-align: center;"><font size="5"><span style=
    "font-weight: bold;"><span style="color:#FFFFFF;">Missing your AC
    adapter?&nbsp; Original power supply bit the dust?<br /></span></span></font></p>

    <p style="font-family: Helvetica; text-align: center;"><font size="5"><span style=
    "font-weight: bold;"><span style="color:#FFFFFF;">Power your electronics
    device for cheap!<br /></span></span></font></p>

   

    <p style="font-family: Helvetica; text-align: center;"><font size="4"><span style=
    "font-weight: bold;"><span style="color:#FFFFFF;">***</span> AC Adapter
    has been tested and operates within specs printed on label</span> <span style=
    "color:#FFFFFF; font-weight: bold;">***</span></font></p>
	<br />
    <div style=
    "padding: 10px; margin: 0px auto; width: 50%; background-color: rgb(0, 0, 0); border: 2px solid rgb(0, 0, 255);">
    <div style="text-align: center;"></div>

      <p style="font-family: Helvetica; text-align: center;"><font style=
      "font-family: Trebuchet MS;" size="5"><span style=
      "color:#002CFD; text-decoration: underline;">Product
      Info:</span></font><br style="color:#FFFFFF;" /></p><span style="font-family: Helvetica; color:#FFFFFF;">Manufacturer:
      <?php echo $_POST["manufacturer"];?><br />
      Model: <?php echo $_POST["model"];?><br />
      Input:<?php echo $_POST["input_volts"];?>V AC <?php echo $_POST["input_hz"];?> Hz
      <?php echo $_POST["input_extra_info"] . " " . $_POST["input_extra_info_unit"];?>
      <span style=
      "font-family: Helvetica; color:#FFFFFF; ">Output:<?php echo $_POST["output_volts"];?>V
      <?php echo $_POST["output_volts_type"]; echo " "; echo $_POST["output_amps"]; echo $_POST["output_amps_unit"];?></span><br style=
      "font-family: Helvetica; color:#FFFFFF; " />
      <span style="font-family: Helvetica;"><span style=
      "color:#FFFFFF;">Polarity:
      <?php echo $_POST["polarity"];?></span><br /> 
      <?php if ($_POST["polarity"] == "Center Positive") {echo "<img width=150px; height=75px; src=\"http://pconthego.files.wordpress.com/2010/07/read-ac-dc-adapter-1-3-800x800.jpg\"";} if ($_POST["polarity"] == "Center Negative") {echo "<img height=100px; width=150px; src=\"http://i2.squidoocdn.com/resize/squidoo_images/250/draft_lens17588566module147917139photo_1296530542polarity-pic.JPG\"";} ?><br />
<!-- 
http://m1.ikiwq.com/img/xl/2soNUNOeFqXO9P0ga7uQ9d.png

-->
      <span style="color:#FFFFFF;">Made in <?php echo $_POST["made_in"];?><br />
      Additional Info:&nbsp;&nbsp;&nbsp; <?php echo $_POST["add_info"];?></span> __<br />
      A<br style="font-weight: bold;" /></span>
    </div><br />

    <div style=
    "clear: both; background-color: rgb(0, 0, 0); border: 2px solid rgb(0, 0, 0); text-align: center; padding: 0px; width: 50%; margin: 0px auto;">
    <p style="font-family: Helvetica; text-align: center;"><font size="4"><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span></font></p>

      <p style="font-family: Courier; text-align: center; color:#FFFFFF;">
      <font style="font-weight: bold; font-family: Helvetica;" size="5">Free shipping
      within the U.S.!</font></p>

      <p style="font-family: Courier; text-align: center; color:#FFFFFF;">
      </p>

      <p style="font-family: Helvetica; color:#FFFFFF;">Item is shipped within
      two business days.&nbsp; Expedited shipping is available upon
      request.</p><span style="color:#FFFFFF;">Sorry, no international
      shipping.</span>

      <p style="font-family: Helvetica; font-size:16px; text-align: center;">
    <p style="font-family: Helvetica; text-align: center;"><font size="4"><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span><span style=
    "color:#FFFFFF;"><span style=
    "color:#FF0010;">&#9733;</span>&#9733;<span style=
    "color:#002CFD;">&#9733;</span></span></font>
	<br /></p>
    </div>
    <br />

    <div style=
    "background-color:#FFFFFF; border: 2px solid rgb(0, 0, 0); text-align: center; width: 50%; margin: 0px auto; padding: 10px;">
    <p style="font-family: Arial;">&#9888; <span style=
    "color:#FF0010;">Warning</span>: Do not use an AC Adapter with your device
    if you are not sure of the device's power ratings; contact the manufacturer or visit
    their website for this information.&nbsp; We are not responsible for any damage that
    may result from ignoring product specifications.&nbsp; In general, you must match
    voltage and polarity while ensuring that your AC Adapter's amperage is equal to or above
    the device's rating.&nbsp;<br /></p>
    </div><br />

    <p style="font-family: Helvetica; text-align: center;"><font size="5"><span style=
    "font-weight: bold; color:#FFFFFF;"><span style=
    "color:#FF0010;">*</span> If you have any questions, send us a message and
    we'll get back to you within the day (sooner during weekday business hours,
    PST).</span> <span style="color:#FF0010;">*</span></font><br /></p>

    <p style=
    "font-family: Helvetica; text-align: center; font-weight: bold; color: rgb(255, 241, 37);">
    <font size="6">Thanks for looking and happy bidding!!!</font></p>

    <p style=
    "font-family: Helvetica; text-align: center; font-weight: bold;">
    <br /></p>

    <p style=
    "font-family: Helvetica; text-align: center; font-weight: bold; color:#5ac864;"><?php echo $_POST["listing_num"]; ?>
    <br /></p>

    <p style=
    "font-family: Helvetica; text-align: center; font-weight: bold;">
    <font size="6"><br /></font></p>
  </div>
</body>
</html>

