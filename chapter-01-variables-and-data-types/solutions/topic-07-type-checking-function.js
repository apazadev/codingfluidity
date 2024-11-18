// Create a function that:
// - Takes any variable
// - Returns detailed type information
// - Handles all possible types
// - Includes length for strings/arrays

function getDetails(myVar) {
  let type = typeof myVar;
  console.log('Value: ' + JSON.stringify(myVar));
  console.log('Type: ' + type);

  if (type == 'string' || type == 'array') {
    console.log('Length: ' + myVar.length);
  }
  console.log("\n");
}

getDetails(1);
getDetails("a");
getDetails({"a": 1});
getDetails(1.2);
getDetails(true);
getDetails([1, 2]);
getDetails(null);

// in JS undefined can be used like myVar === undefined
let myVar = 2;
console.log(myVar === undefined);

console.log(typeof undefined); // "undefined"
