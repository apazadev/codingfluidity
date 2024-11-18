<?php

// Check if string is palindrome (ignoring spaces and case)
// Input: "A man a plan a canal Panama" → Output: true

function is_palindrome($str){
	$reversed = str_replace(" ", "", strtoupper(strrev($str)));
	$cleaned = str_replace(" ", "", strtoupper($str));
	return $reversed === $cleaned;
}

var_dump(is_palindrome("A man a plan a canal Panama"));
var_dump(is_palindrome("A man a plan a canal Panamas"));

