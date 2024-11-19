// Find all occurrences of pattern
// Return array of positions
// Input: str="AABAACAADAA", pattern="AA" → Output: [0,3,6,9]

function findOcurrences(str, pattern){
  let positions = [];
  let patternLength = pattern.length;

  for(let i = 0; i < str.length - patternLength + 1; i++){
    if (str.substr(i, patternLength) === pattern){
      positions.push(i);
    }
  }

  return positions;
}

console.log(findOcurrences("AABAACAADAA", "AA")); // [0, 3, 6, 9]
