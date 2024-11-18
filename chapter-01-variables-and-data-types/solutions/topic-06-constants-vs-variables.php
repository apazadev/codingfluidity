<?php
// Create a program that:
// - Defines constants for days of week
// - Tries to modify them (handle error)
// - Uses them in a date formatting function

const DAYS_OF_WEEK = 7;
try {
	// DAYS_OF_WEEK = 8; // PHP does not allow modifying constants, the exception won't even be thrown
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}
