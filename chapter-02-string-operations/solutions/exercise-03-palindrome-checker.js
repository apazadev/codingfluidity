// Check if string is palindrome (ignoring spaces and case)
// Input: "A man a plan a canal Panama" → Output: true

function palindromeChecker(str) {
  // remove spaces and casing to generate a palindrome candidate
  let paliCandidate = str.replace(/ /g, "");
  paliCandidate = paliCandidate.toLowerCase();

  // reverse string and compare with palindrome candidate
  let reversed = "";
  for (let i = str.length - 1; i >= 0; i--) {
    reversed += str[i];
  }
  reversed = reversed.replace(/ /g, "");
  reversed = reversed.toLowerCase();

  return reversed === paliCandidate;
}

console.log(palindromeChecker("A man a plan a canal Panama")); // true
console.log(palindromeChecker("A man a plan a canal Panamas")); // false

function palindromeChecker2(str) {
  let reversed = str.split("").reverse().join("").replace(/ /g, "").toLowerCase();

  return reversed === str.replace(/ /g, "").toLowerCase();
}

console.log(palindromeChecker2("A man a plan a canal Panama")); // true
console.log(palindromeChecker2("A man a plan a canal Panamas")); // false
