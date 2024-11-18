<?php

// Create a function that reverses a string
// Input: "hello" → Output: "olleh"

function reverse_string($str){
	$reversed = "";
	for($i = strlen($str) - 1; $i >= 0; $i--){
		$reversed .= $str[$i];
	}
	return $reversed;
}

echo reverse_string("Hello Tom!");

