<?php
// Create a function that:
// - Takes any variable
// - Returns detailed type information
// - Handles all possible types
// - Includes length for strings/arrays

function get_details($var) {
	$type = gettype($var);
	echo 'Value: ' . print_r($var, true) . "<br>";
	echo 'Type: ' . $type . "<br>";

	if ($type == 'string') {
		echo 'Length: ' . strlen($var) . "<br>";
	} else if ($type == 'array') {
		echo 'Length: ' . count($var) . "<br>";
	}
	echo "<br>";
}

get_details(1);
get_details("a");
get_details(new stdClass());
get_details(1.2);
get_details(true);
get_details([1, 2]);
get_details(null);

// in PHP there is no "undefined" type, anything that is not defined is considered undefined, but can't be used like $a === undefined
try{
	$my_var = 2;
	// echo ($my_var === undefined); // PHP will raise a Fatal error, it won't even rise the exception
}catch (Exception $e){
	echo $e->getMessage();
}
