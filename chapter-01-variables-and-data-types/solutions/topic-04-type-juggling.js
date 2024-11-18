// What will be the output and type of:
let result1 = 5 + "10";
let result2 = "5" * "10";
let result3 = 1 + "hello";

console.log(result1); // "510": string concatenation > numeric operation
console.log(result2); // 50: both can be converted to numbers
console.log(result3); // "1hello", cannot concatenate a string to a number
