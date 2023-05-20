# PHP Callback Functions

Callback functions, also known as higher-order functions, are functions that can be passed as arguments to other functions or called dynamically during runtime. PHP supports callback functions, which provide flexibility and extensibility to your code. Let's explore how to use callback functions in PHP.

## Defining a Callback Function

In PHP, a callback function can be defined using various methods. Here are two common ways to define a callback function:

1. Using a named function:
function myCallbackFunction($arg) {
    // Callback function logic
}

2. Using an anonymous function (also known as a closure):
$myCallbackFunction = function($arg) {
    // Callback function logic
};
