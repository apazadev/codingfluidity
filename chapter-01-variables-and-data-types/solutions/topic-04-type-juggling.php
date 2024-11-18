<?php
// What will be the output and type of:
$result1 = 5 + "10";
$result2 = "5" * "10";
$result3 = 1 + "hello";

echo $result1."<br>"; // 15: numeric operation > string concatenation
echo $result2."<br>"; // 50: casting to numbers
echo $result3."<br>"; // error, cannot concatenate a string to a number
