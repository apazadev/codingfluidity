
// Create a program that:
// - Defines constants for days of week
// - Tries to modify them (handle error)
// - Uses them in a date formatting function

const DAYS_OF_WEEK = 7;
try {
    DAYS_OF_WEEK = 8;
} catch (err) {
    console.log("Error: " + err.message);
}
