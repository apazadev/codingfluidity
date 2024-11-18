// Compress repeated characters
// Input: "AABBBCCCC" → Output: "A2B3C4"

function compress(str) {
  if (str.length === 0) return "";

  let currentChar = str[0];
  let currentIndex = 1;

  let repeatCount = 1;
  let result = "";

  while (currentIndex < str.length) {
    if (str[currentIndex] === currentChar) {
      repeatCount++;
    } else {
      result += currentChar + repeatCount;
      currentChar = str[currentIndex];
      repeatCount = 1;
    }
    currentIndex++;
  }

  // Add the last result if there are repeating characters
  result += currentChar + repeatCount;

  return result;
}

console.log(compress("AABBBCCCC")); // A2B3C4
console.log(compress("XXXXXXYYYYYYZTTTT")); // X6Y6Z1T4
console.log(compress("AAVVAAAX")); // A2V2A3X1
console.log(compress("")); // ""
console.log(compress("Y")); // Y1

// prevChar = null;
// A prevChar == currChar => count++
// A
// B
// B
// B
// C
// C
// C
// C

