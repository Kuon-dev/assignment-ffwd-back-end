# JavaScript Numbers

Numbers are a fundamental data type in JavaScript. They are used to represent numeric values and perform mathematical operations. In this tutorial, we'll explore various aspects of working with numbers in JavaScript.

## Number Data Type

JavaScript supports both integer and floating-point numbers. You can create a number by simply assigning a value to a variable:

```javascript
let num1 = 10;     // Integer
let num2 = 3.14;   // Floating-point number
```

## Arithmetic Operations

JavaScript provides several arithmetic operators to perform basic mathematical operations on numbers. Here are some commonly used operators:

- `+` : Addition
- `-` : Subtraction
- `*` : Multiplication
- `/` : Division
- `%` : Modulo (Remainder)
- `**` : Exponentiation

```javascript
let x = 10;
let y = 3;
let sum = x + y;         // Addition
let difference = x - y;  // Subtraction
let product = x * y;     // Multiplication
let quotient = x / y;    // Division
let remainder = x % y;   // Modulo
let power = x ** y;      // Exponentiation
```

## Number Methods

JavaScript provides built-in methods to perform operations and manipulate numbers. Here are some commonly used number methods:

- `toString()`: Converts a number to a string.
- `toFixed(digits)`: Formats a number to a specified number of decimal places.
- `parseInt(string)`: Parses a string and returns an integer.
- `parseFloat(string)`: Parses a string and returns a floating-point number.
- `isNaN(value)`: Checks if a value is NaN (Not-a-Number).
- `Math`: An object that provides additional mathematical functions and constants.

Here's an example that demonstrates the usage of some of these methods:

```javascript
let num = 3.14159;
let numString = num.toString();            // Convert number to string
let formattedNum = num.toFixed(2);         // Format number to 2 decimal places
let parsedInt = parseInt("42");            // Parse string to integer
let parsedFloat = parseFloat("3.14");       // Parse string to float
let isNotANumber = isNaN("Hello");          // Check if value is NaN
let maxNum = Math.max(10, 20, 30);          // Find the maximum number
```

## Summary

Numbers are an essential part of JavaScript programming. You can perform arithmetic operations, use built-in number methods, and leverage the Math object for more advanced mathematical calculations. Understanding number operations is crucial for various applications, such as calculations, data manipulation, and more.

Happy coding!
