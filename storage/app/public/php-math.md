# PHP Math

In PHP, the math functions allow you to perform various mathematical operations and calculations. PHP provides a wide range of built-in math functions that can be used to manipulate numbers and perform complex calculations.

## Basic Math Functions

### Addition, Subtraction, Multiplication, and Division

PHP provides basic math functions for addition, subtraction, multiplication, and division. Here are some examples:

`````````
<?php>
$a = 10;
$b = 5;

$sum = $a + $b;         // Addition
$difference = $a - $b;  // Subtraction
$product = $a * $b;     // Multiplication
$quotient = $a / $b;    // Division
`````````

In this example, the value of `$sum` will be `15`, `$difference` will be `5`, `$product` will be `50`, and `$quotient` will be `2`.

### Exponentiation and Modulus

PHP also provides functions for exponentiation and modulus (remainder) operations. Here are some examples:

`````````
<?php>
$a = 2;
$b = 3;

$power = pow($a, $b);   // Exponentiation
$remainder = $a % $b;   // Modulus (Remainder)
`````````

In this example, the value of `$power` will be `8` (2 raised to the power of 3), and `$remainder` will be `2` (remainder of 2 divided by 3).

### Absolute Value and Square Root

PHP includes functions to calculate the absolute value and square root of a number. Here are some examples:

`````````
<?php>
$number = -4.5;

$absolute = abs($number);    // Absolute Value
$squareRoot = sqrt($number);  // Square Root
`````````

In this example, the value of `$absolute` will be `4.5` (absolute value of -4.5), and `$squareRoot` will be `NaN` (not a number) since the square root of a negative number is not defined.

## Advanced Math Functions

PHP also provides a variety of advanced math functions for more complex calculations. Some of the commonly used advanced math functions include:

- `round($number)`: Rounds a number to the nearest integer.
- `ceil($number)`: Rounds a number up to the nearest integer.
- `floor($number)`: Rounds a number down to the nearest integer.
- `min($number1, $number2, ...)`: Returns the minimum value among the given numbers.
- `max($number1, $number2, ...)`: Returns the maximum value among the given numbers.
- `rand($min, $max)`: Generates a random number within a specified range.

Here's an example that demonstrates the usage of these functions:

`````````
<?php>
$number = 4.75;

$rounded = round($number);     // Rounded to the nearest integer
$ceiling = ceil($number);      // Rounded up to the nearest integer
$floor = floor($number);       // Rounded down to the nearest integer
$minimum = min(5, 10, 3, 8);   // Minimum value among the given numbers
$maximum = max(5, 10, 3, 8);   // Maximum value among the given numbers
$random = rand(1, 100);        // Random number between 1 and 100
`````````
