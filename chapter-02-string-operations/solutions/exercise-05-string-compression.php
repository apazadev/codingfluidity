<?php
// Compress repeated characters
// Input: "AABBBCCCC" → Output: "A2B3C4"

function compress($word) {
	if (strlen($word) === 0) {
		return "";
	}

	$current_char = $word[0];
	$current_index = 1;
	$repeat_counter = 1;

	$result = "";

	while ($current_index < strlen($word)) {
		if ($word[$current_index] === $current_char) {
			$repeat_counter++;
		} else {
			$result .= $current_char . $repeat_counter;
			$current_char = $word[$current_index];

			$repeat_counter = 1;
		}
		$current_index++;
	}

	// Add the last result
	$result .= $current_char . $repeat_counter;

	return $result;
}

echo compress("AABBBCCCC"). "<br>"; // A2B3C4
echo compress("XXXXXXYYYYYYZTTTT"). "<br>"; // X6Y6Z1T4
echo compress("AAVVAAAX"). "<br>"; // A2V2A3X1
echo compress(""). "<br>"; // ""
echo compress("Y"). "<br>"; // Y1
echo compress("PPP"). "<br>"; // P3
