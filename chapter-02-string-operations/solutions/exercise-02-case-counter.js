// Count uppercase and lowercase letters in a string
// Input: "Hello World" → Output: [Uppercase: 2, Lowercase: 8]

function caseCounter(str) {
  let lowercased = str.toLowerCase();
  let lowercounter = 0;
  let uppercounter = 0;

  for (let i = 0; i < str.length; i++) {
    if (str[i] === " ") {
      continue;
    }

    if (str[i] === lowercased[i]) {
      lowercounter++;
    } else {
      uppercounter++;
    }
  }

  return {
    "Uppercase": uppercounter,
    "Lowercase": lowercounter
  }
}

console.log(JSON.stringify(caseCounter("Hello World")));
