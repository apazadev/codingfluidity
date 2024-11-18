<?php
// Create two variables
// Make one reference another
// Modify one and check both
// Explain the outcome

// In PHP, the variables are passed by value but the operator & is supported and creates a reference to the same memory location

$var1 = "original value";
$var2 = &$var1; // by reference
$var3 = $var1;
$var1 = "new value";

echo $var1."<br>"; // "new value: modified by reference"
echo $var2."<br>"; // "new value: modified by reference"
echo $var3."<br>"; // "original value: assigned by value"
