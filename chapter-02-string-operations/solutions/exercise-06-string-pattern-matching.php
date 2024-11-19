<?php
// Find all occurrences of pattern
// Return array of positions
// Input: str="AABAACAADAA", pattern="AA" → Output: [0,3,6,9]

function find_ocurrences($str, $pattern){
	$positions = [];
	$pattern_length = strlen($pattern);

	for($i = 0; $i <= strlen($str) - $pattern_length; $i++){
		if (substr($str, $i, $pattern_length) === $pattern){
			$positions[] = $i;
		}
	}

	return $positions;
}

echo json_encode(find_ocurrences("AABAACAADAA", "AA")); // [0, 3, 6, 9]
