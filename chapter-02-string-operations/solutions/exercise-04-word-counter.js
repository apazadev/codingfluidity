// Count words in a string
// Handle multiple spaces and punctuation
// Input: "Hello,   world!" → Output: 2

function wordCounter(str){
	let letters = "abcdefghijklmnopqrstuvwxyz";
	let lowercased = str.toLowerCase();

	let isPrevLetter = true;
	let wordCount = 0;

	for (let i = 0; i < str.length; i++){
		let isCurrLetter = letters.indexOf(lowercased[i]) !== -1;
		if (i > 0 && isPrevLetter && !isCurrLetter){
			wordCount++;
		}

		if (i === str.length -1 && isCurrLetter){
			wordCount++;
		}

		isPrevLetter = isCurrLetter;
	}
	return wordCount
}

console.log(wordCounter("Hello,   world!")); // 2
console.log(wordCounter("Hi")); // 1
console.log(wordCounter("4Hi")); // 1
console.log(wordCounter("a")); // 1
console.log(wordCounter("a2")); // 1
console.log(wordCounter("This is   fucking awesome!, you did it")); // 7



// H, prevletter true, current true
// e, prevletter true, current true
// l, prevletter true, current true
// l, prevletter true, current true
// o, prevletter true, current true
// ,, prevletter true, current false => word++
//    prevletter false, current false
//    prevletter false, current false
//    prevletter false, current false
// w prevletter false, current true
// o prevletter true, current true
// r prevletter true, current true
// l prevletter true, current true
// d prevletter true, current true
// ! prevletter true, current false => word++

// H prevletter true, current true
// i prevletter true, current true (check in the last iteration => if current true word++)

// 4 prevletter true, current false
// H prevletter false, current true
// i prevletter true, current true (check in the last iteration => if current true word++)

// a prevletter true, current true (check in the last iteration => if current true word++)

// a prevletter true, current true
// 2 prevletter true, current false => word++ || if current true => word++



