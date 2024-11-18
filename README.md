# CODING FLUIDITY
## Goal:
To improve the coding speed without having to look too much the docs or IA, there are code and features of the languages that any coder should be able to manage without seeking the syntax or parameters, this is going to speed up the performance in the interviews and coding in general

## Local site:
https://codingfluidity.test
https://codingfluidity.test/solutions.php (links to the solutions in PHP and node.js commands for execution)

## Mnemonic associations
- JavaScript, Animal: Chameleon (kemilien)
  - Represents its adaptability and ability to "fit" everywhere (browser, server, mobile).
- PHP, Animal: Elephant (elifant)
  - Based on the PHP mascot, the "elePHPant."

## 1. Variables & Data Types (Foundation)
- Variable declaration and initialization
- Basic data types (string, number, boolean)
- Type conversion
- Constants
- Scope (local vs global)

**Common Operations:**
```php
// PHP
$name = "John";
$age = 25;
$isActive = true;
$price = 19.99;
define("MAX_USERS", 100);

// JavaScript
let name = "John";
const age = 25;
let isActive = true;
let price = 19.99;
const MAX_USERS = 100;
```

## 2. String Operations (Basic)
### 2.1 Essential String Methods
- Length
- Case conversion
- Substring
- Replace
- Split/Join
- Trim
- Search/Index

**Common Operations:**
```php
// PHP
strlen($str);                    // Length
strtoupper($str);               // Uppercase
strtolower($str);               // Lowercase
substr($str, 0, 5);             // Substring
str_replace("old", "new", $str); // Replace
explode(" ", $str);             // Split
implode(" ", $array);           // Join
trim($str);                     // Trim
strpos($str, "search");         // Search

// JavaScript
str.length;                     // Length
str.toUpperCase();              // Uppercase
str.toLowerCase();              // Lowercase
str.substring(0, 5);            // Substring
str.replace("old", "new");      // Replace
str.split(" ");                 // Split
array.join(" ");                // Join
str.trim();                     // Trim
str.indexOf("search");          // Search
```

## 3. Array Operations (Basic)
### 3.1 Basic Array Methods
- Add/Remove elements
- Access elements
- Find length
- Check existence
- Basic iteration

**Common Operations:**
```php
// PHP
$arr = [1, 2, 3];
array_push($arr, 4);            // Add to end
array_pop($arr);                // Remove from end
array_unshift($arr, 0);         // Add to start
array_shift($arr);              // Remove from start
count($arr);                    // Length
in_array(2, $arr);             // Check existence
foreach ($arr as $value) {}     // Basic iteration

// JavaScript
const arr = [1, 2, 3];
arr.push(4);                    // Add to end
arr.pop();                      // Remove from end
arr.unshift(0);                 // Add to start
arr.shift();                    // Remove from start
arr.length;                     // Length
arr.includes(2);               // Check existence
arr.forEach(value => {});      // Basic iteration
```

## 4. Control Flow (Basic)
### 4.1 Conditionals
- if/else
- switch/case
- ternary operator

### 4.2 Loops
- for
- while
- do-while
- foreach/for-of

## 5. Functions (Intermediate)
### 5.1 Function Basics
- Declaration
- Parameters
- Return values
- Arrow functions
- Anonymous functions

### 5.2 Function Advanced
- Callbacks
- Closures
- Default parameters
- Rest parameters

## 6. Array Methods (Intermediate)
### 6.1 Transformation Methods
- map
- filter
- reduce
- sort
- reverse

**Common Operations:**
```php
// PHP
array_map(fn($x) => $x * 2, $arr);     // Map
array_filter($arr, fn($x) => $x > 2);   // Filter
array_reduce($arr, fn($acc, $x) => $acc + $x, 0); // Reduce
sort($arr);                            // Sort
rsort($arr);                           // Reverse sort

// JavaScript
arr.map(x => x * 2);                   // Map
arr.filter(x => x > 2);                // Filter
arr.reduce((acc, x) => acc + x, 0);    // Reduce
arr.sort();                            // Sort
arr.reverse();                         // Reverse
```

## 7. Objects/Associative Arrays (Intermediate)
### 7.1 Basic Operations
- Creation
- Access
- Modification
- Deletion
- Iteration

### 7.2 Advanced Operations
- Object methods
- Property descriptors
- Destructuring
- Spread operator

## 8. Error Handling (Intermediate)
- try/catch
- throw
- finally
- Custom errors

## 9. Regular Expressions (Intermediate)
- Basic patterns
- Common use cases
- Validation
- Search and replace

## 10. Advanced Topics (Advanced)
### 10.1 Asynchronous Programming
- Promises
- async/await
- Event handling

### 10.2 Data Structures
- Stack
- Queue
- Linked List
- Tree
- Graph

### 10.3 Algorithms
- Sorting
- Searching
- Recursion
- Dynamic Programming

## Practice Strategy
1. **Basic Level (Days 1-2)**
    - Focus on Variables, Strings, Basic Arrays
    - Practice 10-15 problems daily from each category
    - Master basic syntax and operations

2. **Intermediate Level (Days 3-4)**
    - Focus on Functions, Advanced Arrays, Objects
    - Combine multiple concepts in single problems
    - Practice 5-10 medium problems daily

3. **Advanced Level (Days 5-7)**
    - Focus on Advanced Topics
    - Practice 2-4 complex problem daily
    - Combine all previous concepts

## COMMON INTERVIEW TOPICS BY FREQUENCY

### Very Common (Master These First)
1. Array manipulation (map, filter, reduce)
2. String manipulation
3. Basic algorithms (sorting, searching)
4. Object manipulation

### Common
1. Tree traversal
2. Stack/Queue implementation
3. Basic graph problems
4. Dynamic programming basics

### Less Common but Important
1. Complex graph algorithms
2. Advanced dynamic programming
3. System design basics
4. Bit manipulation

## Learning Tips
1. Practice one category at a time
2. Build small projects combining multiple concepts
3. Review and repeat frequently used methods
4. Focus on understanding patterns rather than memorizing
5. Write code by hand to better remember syntax
6. Explain concepts to others to reinforce learning


