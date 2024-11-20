# String Operations Guide

## Theory

### String Basics
1. **Definition**: Sequence of characters
2. **Creation**:
```php
// PHP
$str1 = 'Single quotes';
$str2 = "Double quotes";
$str3 = <<<EOT
   Heredoc
   Multiple lines
EOT;

// Heredoc name origin
// "Here": Indicates that the document or string is defined directly in the place where it's used within the code.
// "Document": Refers to the block of text or data being embedded.
// it allows variable interpolation

// JavaScript
let str1 = 'Single quotes';
let str2 = "Double quotes";
let str3 = `Template
   literals`;
```

### Common Operations

#### 1. Length
```php
// PHP
strlen($str);
// JavaScript
str.length;
```

#### 2. Case Modification
```php
// PHP
strtoupper($str);    // To uppercase
strtolower($str);    // To lowercase
ucfirst($str);       // Capitalize first letter (UpperCase the FIRST letter)
ucwords($str);       // Capitalize words (UpperCase the WORDS)

// JavaScript
str.toUpperCase();
str.toLowerCase();
```

#### 3. Substring
```php
// PHP
substr($string, start, length); // substr string start length

    $string = "Hello, world!";
    $substring = substr($string, 7, 5); // "world"

    // starting from the end:
    $string = "This is a long string";
    $last_five = substr($string, -5); // "tring"

// JavaScript
str.substr(start, length); // str substr start length
    let string = "Hello, world!";
    let substring = string.substr(7, 5); // "world"
    
    // starting from the end:
    let string = "This is a long string";
    let last_five = string.substr(-5); // "tring"

str.substring(start, end); // str substring start end
    let string = "Hello, world!";
    let substring = string.substring(7, 12); // "world"    
```

#### 4. Search
```php
// PHP
strpos($string, search);    // First occurrence: from left to right
strrpos($string, search);   // Last occurrence: from right to left
    returns false if not found

    $haystack = "Hello, world! Hello, PHP!";
    $needle = "Hello";
    
    $position = strpos($haystack, $needle);
    echo $position; // Output: 0

    // the r version starts from the right:
    $haystack = "Hello, world! Hello, PHP!";
    $needle = "Hello";
    
    $position = strrpos($haystack, $needle);
    echo $position; // Output: 13

// JavaScript
str.indexOf(search);
str.lastIndexOf(search);
    returns -1 if not found

    let haystack = "Hello, world! Hello, JavaScript!";
    let needle = "Hello";
    
    let position = haystack.indexOf(needle);
    console.log(position); // Output: 0

    // the "last" version starts from the right:
    let haystack = "Hello, world! Hello, JavaScript!";
    let needle = "Hello";
    
    let position = haystack.lastIndexOf(needle);
    console.log(position); // Output: 13
```

#### 5. Replace
```php

// MNEMONICS: reverse to the substring syntax, the $string is at the end
// search for, replace with, in the string

// PHP
str_replace(search, replace, string); // replace: search replace string  

    $text = "Hello, world!";
    $newText = str_replace("world", "PHP", $text);
    echo $newText; // Output: Hello, PHP!

    // multiple replacements with arrays:
    $text = "The quick brown fox jumps over the lazy dog.";
    $search = array("quick", "brown", "fox");
    $replace = array("slow", "red", "cat");
    $newText = str_replace($search, $replace, $text);
    echo $newText;

// JavaScript
str.replace(search, replace); // str replace: search replace

    let text = "Hello, world!";
    let newText = text.replace("world", "JavaScript");
    console.log(newText); // Output: Hello, JavaScript!
    
str.replaceAll(search, replace); // str replaceAll: search replace

    let text = "The quick brown fox jumps over the lazy fox.";
    let newText = text.replaceAll("fox", "cat");
    console.log(newText); // Output: The quick brown cat jumps over the lazy cat.
    
    // older JS engines require regexes:
    let text = "The quick brown fox jumps over the lazy fox.";
    let newText = text.replace(/fox/g, "cat");
    console.log(newText); // Output: The quick brown cat jumps over the lazy cat.

```

