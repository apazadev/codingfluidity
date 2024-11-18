<?php
// Create a function that:
// - Takes a name parameter
// - Has a local variable for greeting
// - Returns combined greeting with name

function greet($name) {
	$greeting = "Hello";
	return $greeting . ", " . $name;
}

echo greet("John");
