// Create two variables
// Make one reference another
// Modify one and check both
// Explain the outcome

// In JS, the variables are passed by value, not by reference

let var1 = "original value";
let var2 = var1; // by value

var1 = "new value"; // modified by value

console.log(var1); // "new value": the value is modified but var2 was assigned by value
console.log(var2); // "original value": var2 was assigned by value and the modification of var1 was ignored

// To pass by reference in JS, you need to use objects

let person = {name: "John Wick"};
let customer = person;
customer.name = "Demetrius Johnson";

console.log(customer.name); // Demetrius Johnson: clearly is assigned in the last line
console.log(person.name); // Demetrius Johnson: objects are passed by reference, so the modification is reflected in the original object
