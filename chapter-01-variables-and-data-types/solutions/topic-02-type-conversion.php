<?php
// Convert the following:
$number = "42";
// Convert to integer and multiply by 2
// Convert result back to string and concatenate with "is the answer"

$number = (integer)$number;
$number *= 2;
$number = (string)$number . " is the answer";
echo $number;
