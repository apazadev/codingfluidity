
## Solutions

### Basic Level Solutions

1. **String Reversal**
```php
// PHP
function reverseString($str) {
    return strrev($str);
}

// JavaScript
function reverseString(str) {
    return str.split('').reverse().join('');
}
```

2. **Case Counter**
```php
// PHP
function countCases($str) {
    $upper = 0;
    $lower = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (ctype_upper($str[$i])) $upper++;
        if (ctype_lower($str[$i])) $lower++;
    }
    return ["Uppercase" => $upper, "Lowercase" => $lower];
}

// JavaScript
function countCases(str) {
    const upper = str.match(/[A-Z]/g)?.length || 0;
    const lower = str.match(/[a-z]/g)?.length || 0;
    return {Uppercase: upper, Lowercase: lower};
}
```

### Intermediate Level Solutions

3. **Palindrome Checker**
```php
// PHP
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z]/', '', $str));
    return $str === strrev($str);
}

// JavaScript
function isPalindrome(str) {
    str = str.toLowerCase().replace(/[^a-z]/g, '');
    return str === str.split('').reverse().join('');
}
```

4. **Word Counter**
```php
// PHP
function countWords($str) {
    return count(preg_split('/\s+/', trim($str)));
}

// JavaScript
function countWords(str) {
    return str.trim().split(/\s+/).length;
}
```

### Advanced Level Solutions

5. **String Compression**
```php
// PHP
function compressString($str) {
    $compressed = '';
    $count = 1;
    for ($i = 1; $i <= strlen($str); $i++) {
        if ($i < strlen($str) && $str[$i] === $str[$i-1]) {
            $count++;
        } else {
            $compressed .= $str[$i-1] . $count;
            $count = 1;
        }
    }
    return strlen($compressed) < strlen($str) ? $compressed : $str;
}

// JavaScript
function compressString(str) {
    let compressed = '';
    let count = 1;
    for (let i = 0; i < str.length; i++) {
        if (str[i] === str[i+1]) {
            count++;
        } else {
            compressed += str[i] + count;
            count = 1;
        }
    }
    return compressed.length < str.length ? compressed : str;
}
```

6. **String Pattern Matching**
```php
// PHP
function findPattern($str, $pattern) {
    $positions = [];
    $pos = 0;
    while (($pos = strpos($str, $pattern, $pos)) !== false) {
        $positions[] = $pos;
        $pos++;
    }
    return $positions;
}

// JavaScript
function findPattern(str, pattern) {
    const positions = [];
    let pos = 0;
    while ((pos = str.indexOf(pattern, pos)) !== -1) {
        positions.push(pos);
        pos++;
    }
    return positions;
}
```
