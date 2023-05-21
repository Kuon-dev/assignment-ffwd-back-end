# PHP Callback Functions
Callback functions in PHP allow you to pass functions as arguments to other functions, making your code more flexible and modular. This concept is often used in event handling, sorting algorithms, and asynchronous programming. Let's explore how to use callback functions in PHP.

## Defining a Callback Function
To define a callback function, you can create a regular PHP function or use an anonymous function. Here's an example of a regular PHP function as a callback:

```<?php>
function greeting($name) {
echo "Hello, $name!";
}

function callCallback($callback, $name) {
$callback($name);
}

callCallback('greeting', 'John');
```

In the above example, we have a greeting function that accepts a name as a parameter and echoes a greeting message. The callCallback function takes a callback function and a name as arguments and calls the callback function, passing the name as an argument.

## Anonymous Functions as Callbacks
Anonymous functions, also known as closures, are a convenient way to define callback functions on the fly. Here's an example using an anonymous function:

```<?php>
$callback = function($name) {
echo "Hello, $name!";
};

function callCallback($callback, $name) {
$callback($name);
}

callCallback($callback, 'John');
```

In this example, we define an anonymous function and assign it to the $callback variable. The callCallback function then calls the callback function with the provided name.

## Using Callbacks in PHP Functions
Many built-in PHP functions accept callback functions as arguments. One such example is the array_map function, which applies a callback function to each element of an array. Here's an example:

```<?php>
function uppercase($str) {
return strtoupper($str);
}

$names = ['John', 'Jane', 'Mike'];
$uppercaseNames = array_map('uppercase', $names);

print_r($uppercaseNames);
```

In this example, we define a uppercase function that converts a string to uppercase using the strtoupper function. We then use the array_map function to apply the uppercase callback function to each element of the $names array, resulting in an array of uppercase names.