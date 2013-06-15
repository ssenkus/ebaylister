

<?php

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

/*
echo $manufacturer;
echo $model;
echo $made_in;
echo $input_vac;
echo $input_hz;
echo $input_w;
echo $output_volts;
echo $output_volts_type;
echo $output_amps;
echo $output_amps_unit;
echo $polarity;
echo $add_info;
*/
print_r($_POST);


?>



