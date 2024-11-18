<?php

// Count words in a string
// Handle multiple spaces and punctuation
// Input: "Hello,   world!" → Output: 2

function word_counter($str) {
	$letters = "abcdefghijklmnopqrstuvwxyz";
	$lowercased = strtolower($str);

	$is_prev_letter = true;

	$word_count = 0;
	for ($i = 0; $i < strlen($str); $i++) {
		$is_curr_letter = strpos($letters, $lowercased[$i]) !== false;

		if ($is_prev_letter && !$is_curr_letter && $i > 0) {
			$word_count++;
		}

		// last check
		if ($i === strlen($str) - 1 && $is_curr_letter) {
			$word_count++;
		}

		// for the next iteration
		$is_prev_letter = $is_curr_letter;
	}
	return $word_count;
}

echo word_counter("Hello,   world!"). "<br>"; // 2
echo word_counter("Hi"). "<br>"; // 1
echo word_counter("4Hi"). "<br>"; // 1
echo word_counter("a"). "<br>"; // 1
echo word_counter("a2"). "<br>"; // 1
echo word_counter("This is   fucking awesome!, you did it"). "<br>"; // 7


// H, prevletter true, current true
// e, prevletter true, current true
// l, prevletter true, current true
// l, prevletter true, current true
// o, prevletter true, current true
// ,, prevletter true, current false => word++
//    prevletter false, current false
//    prevletter false, current false
//    prevletter false, current false
// w prevletter false, current true
// o prevletter true, current true
// r prevletter true, current true
// l prevletter true, current true
// d prevletter true, current true
// ! prevletter true, current false => word++

// H prevletter true, current true
// i prevletter true, current true (check in the last iteration => if current true word++)

// 4 prevletter true, current false
// H prevletter false, current true
// i prevletter true, current true (check in the last iteration => if current true word++)

// a prevletter true, current true (check in the last iteration => if current true word++)

// a prevletter true, current true
// 2 prevletter true, current false => word++ || if current true => word++



