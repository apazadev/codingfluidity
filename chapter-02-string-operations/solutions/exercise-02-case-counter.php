<?php

// Count uppercase and lowercase letters in a string
// Input: "Hello World" → Output: [Uppercase: 2, Lowercase: 8]

function count_case($str) {
	$uppercased = strtoupper($str);
	$uppercounter = 0;
	$lowercounter = 0;
	for ($i = 0; $i < strlen($str); $i++) {
		if ($str[$i] === " ") {
			continue;
		}

		if ($str[$i] === $uppercased[$i]) {
			$uppercounter++;
		} else {
			$lowercounter++;
		}
	}
	return [
		"Uppercase" => $uppercounter,
		"Lowercase" => $lowercounter
	];
}

echo json_encode(count_case("Hello World"));
