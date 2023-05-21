# PHP Exceptions

Exceptions in PHP provide a way to handle errors and exceptional situations that may occur during the execution of your code. By using exceptions, you can gracefully handle errors and control the flow of your program. Let's explore how to work with exceptions in PHP.

## Throwing an Exception

To throw an exception in PHP, you can use the `throw` keyword followed by an instance of the `Exception` class or one of its subclasses. Here's an example:

``````php
throw new Exception("An error occurred");
``````

You can also create custom exception classes by extending the `Exception` class. This allows you to define specific types of exceptions for different scenarios in your code.

## Catching an Exception

To catch an exception and handle it gracefully, you can use the `try-catch` block. The `try` block contains the code that may throw an exception, and the `catch` block handles the exception. Here's an example:

``````php
try {
    // Code that may throw an exception
} catch (Exception $e) {
    // Exception handling code
}
``````
