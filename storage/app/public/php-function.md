# PHP Functions

Functions are a fundamental part of PHP programming. They allow you to encapsulate reusable blocks of code that can be executed whenever needed. Functions improve code readability, maintainability, and reusability. In PHP, you can define your own functions using the `function` keyword.

## Function Syntax

Here's the syntax for defining a function in PHP:

`````````
php
function functionName(parameters) {
    // Code to be executed
    // Return statement (optional)
}
`````````

- **functionName**: The name of the function.
- **parameters**: The input values that the function expects (optional).
- **Code to be executed**: The block of code that will be executed when the function is called.
- **Return statement**: The value or values that the function can return (optional).

## Function Example

Let's define a simple function called `greet()` that takes a name as a parameter and returns a greeting message:

`````````
php
function greet($name) {
    return "Hello, " . $name . "!";
}
`````````

To call this function and display the greeting message, you can do the following:

`````````
php
$person = "John";
echo greet($person);
`````````

Output: Hello, John!
