### 1. What is a Variable?
- A variable is a container for storing data values
- It's like a labeled box that holds information
- The label (variable name) can be used to access or modify the stored value

### 2. Variable Declaration & Initialization
```php
// PHP
$age = 25;        // Declaration and initialization in one line
$name;            // Declaration only
$name = "John";   // Initialization after declaration

// JavaScript
let age = 25;     // Declaration and initialization
let name;         // Declaration only
name = "John";    // Initialization after declaration
const PI = 3.14;  // Constant declaration (cannot be changed)
```

### 3. Data Types

#### 3.1 Primitive Types
1. **String**
    - Textual data
    - Enclosed in quotes (" " or ' ')
   ```php
   $name = "John";          // PHP
   let name = "John";       // JavaScript
   ```

2. **Number**
    - Integer (whole numbers)
    - Float/Double (decimal numbers)
   ```php
   $age = 25;              // Integer
   $price = 19.99;         // Float
   ```

3. **Boolean**
    - true or false values
   ```php
   $isActive = true;
   $isDeleted = false;
   ```

4. **Null**
    - Represents absence of value
   ```php
   $data = null;
   ```

5. **Undefined** (JavaScript only)
   ```javascript
   let variable;  // undefined
   ```

### 4. Type Checking
```php
// PHP
gettype($variable);    // Returns type as string
is_string($variable);  // Returns boolean
is_int($variable);
is_bool($variable);

// JavaScript
typeof variable;       // Returns type as string
```

### 5. Type Conversion

#### 5.1 Explicit Conversion
```php
// PHP
$str = "123";
$num = (int)$str;     // String to Integer
$float = (float)$num; // Integer to Float
$str2 = (string)$num; // Number to String

// JavaScript
let str = "123";
let num = Number(str);    // String to Number
let float = parseFloat(str); // String to Float
let str2 = String(num);   // Number to String
```

#### 5.2 Implicit Conversion (Type Coercion)
```php
$num = 5 + "10";     // PHP will convert "10" to integer
let num = 5 + "10";  // JavaScript will concatenate to "510"
```

### 6. Variable Scope

#### 6.1 Global Scope
```php
// PHP
$globalVar = "I'm global";
global $globalVar;    // Inside function to access global

// JavaScript
var globalVar = "I'm global";  // Function scope
let globalVar = "I'm global";  // Block scope
```

#### 6.2 Local Scope
```php
function test() {
    $localVar = "I'm local";  // Only accessible within function
}


// JavaScript
function test() {
    let localVar = "I'm local";
}
```

