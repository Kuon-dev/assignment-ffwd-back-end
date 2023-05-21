# PHP Operators

Operators in PHP are used to perform operations on variables and values. PHP provides a wide range of operators for arithmetic, assignment, comparison, logical operations, and more. In this tutorial, we'll explore some of the most commonly used operators in PHP.

## Arithmetic Operators

Arithmetic operators are used to perform mathematical operations such as addition, subtraction, multiplication, division, and modulus. Here are some examples:

`````````
<?php>
$a = 10;
$b = 5;

$sum = $a + $b;       // Addition
$difference = $a - $b; // Subtraction
$product = $a * $b;    // Multiplication
$quotient = $a / $b;   // Division
$remainder = $a % $b;  // Modulus

echo $sum;        // Output: 15
echo $difference;  // Output: 5
echo $product;     // Output: 50
echo $quotient;    // Output: 2
echo $remainder;   // Output: 0
`````````

## Assignment Operators

Assignment operators are used to assign values to variables. They combine the assignment with an arithmetic operation. Here are some examples:

`````````
<?php>
$a = 10;
$b = 5;

$a += $b;  // Equivalent to: $a = $a + $b
$a -= $b;  // Equivalent to: $a = $a - $b
$a *= $b;  // Equivalent to: $a = $a * $b
$a /= $b;  // Equivalent to: $a = $a / $b
$a %= $b;  // Equivalent to: $a = $a % $b

echo $a;  // Output: 0
`````````

## Comparison Operators

Comparison operators are used to compare two values. They return a boolean value (true or false) based on the comparison result. Here are some examples:

`````````
<?php>
$a = 10;
$b = 5;

$result1 = $a > $b;   // Greater than
$result2 = $a < $b;   // Less than
$result3 = $a >= $b;  // Greater than or equal to
$result4 = $a <= $b;  // Less than or equal to
$result5 = $a == $b;  // Equal to
$result6 = $a != $b;  // Not equal to

var_dump($result1);  // Output: bool(true)
var_dump($result2);  // Output: bool(false)
var_dump($result3);  // Output: bool(true)
var_dump($result4);  // Output: bool(false)
var_dump($result5);  // Output: bool(false)
var_dump($result6);  // Output: bool(true)
`````````

## Logical Operators

Logical operators are used to combine conditional statements. They return a boolean value based on the logical operation performed. Here are some examples:

`````````
<?php>
$a = true;
$b = false;

$result1 = $a && $b;   // Logical AND
$result2 = $a || $b;   // Logical OR
$result3 = !$a;       // Logical NOT

var_dump($result1);  // Output: bool(false)
var_dump($result2);  // Output: bool(true)
var_dump($result3);  // Output: bool(false)
`````````
