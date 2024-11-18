<?php
// Create variables for:
// - Your age as a number
// - Your name as a string
// - Whether you're a student (boolean)
// - Your height in meters (float)

$age = 23;
$name = "John Wick";
$is_student = false;
$height = 1.72;

echo "$name is $age years old, $height meters tall, and is " . ($is_student === false ? "not" : "") . " a student";
