## Solutions

### Basic Level Solutions

1. **Variable Declaration**
```php
// PHP
$age = 25;
$name = "John Doe";
$isStudent = true;
$height = 1.75;

// JavaScript
let age = 25;
let name = "John Doe";
let isStudent = true;
let height = 1.75;
```

2. **Type Conversion**
```php
// PHP
$number = "42";
$converted = (int)$number * 2;
$final = (string)$converted . " is the answer";
// Result: "84 is the answer"

// JavaScript
let number = "42";
let converted = Number(number) * 2;
let final = String(converted) + " is the answer";
```

3. **Scope Understanding**
```php
// PHP
function createGreeting($name) {
    $greeting = "Hello, ";
    return $greeting . $name;
}
// Usage: echo createGreeting("John"); // "Hello, John"

// JavaScript
function createGreeting(name) {
    let greeting = "Hello, ";
    return greeting + name;
}
```

### Intermediate Level Solutions

4. **Type Juggling**
```php
// PHP
$result1 = 5 + "10";    // 15 (integer)
$result2 = "5" * "10";  // 50 (integer)
$result3 = 1 + "hello"; // Warning + 1

// JavaScript
let result1 = 5 + "10";    // "510" (string)
let result2 = "5" * "10";  // 50 (number)
let result3 = 1 + "hello"; // "1hello" (string)
```

5. **Variable References**
```php
// PHP
$original = "first value";
$reference = &$original;
$original = "new value";
echo $reference; // "new value"

// JavaScript (objects are passed by reference)
let original = {value: "first value"};
let reference = original;
original.value = "new value";
console.log(reference.value); // "new value"
```

### Advanced Level Solutions

6. **Constants vs Variables**
```php
// PHP
define("MONDAY", 1);
define("TUESDAY", 2);
// ... rest of days

function formatDate($day) {
    try {
        if ($day === MONDAY) {
            return "It's Monday!";
        }
        // ... rest of logic
    } catch (Error $e) {
        return "Invalid day constant";
    }
}

// JavaScript
const MONDAY = 1;
const TUESDAY = 2;
// ... rest of days

function formatDate(day) {
    try {
        if (day === MONDAY) {
            return "It's Monday!";
        }
        // ... rest of logic
    } catch (error) {
        return "Invalid day constant";
    }
}
```

7. **Type Checking Function**
```php
// PHP
function getDetailedType($variable) {
    $type = gettype($variable);
    $details = [
        'type' => $type,
        'isNull' => is_null($variable),
        'length' => null
    ];
    
    if (is_string($variable)) {
        $details['length'] = strlen($variable);
    } elseif (is_array($variable)) {
        $details['length'] = count($variable);
    }
    
    return $details;
}

// JavaScript
function getDetailedType(variable) {
    return {
        type: typeof variable,
        isNull: variable === null,
        length: variable?.length || null,
        isUndefined: variable === undefined
    };
}
```

## Testing Your Knowledge

After completing the exercises, you should be able to:
1. Declare and initialize variables correctly
2. Understand different data types and their behaviors
3. Convert between different types safely
4. Handle scope properly
5. Work with constants
6. Debug type-related issues
7. Understand type coercion rules

Would you like additional exercises or clarification on any of these concepts?
