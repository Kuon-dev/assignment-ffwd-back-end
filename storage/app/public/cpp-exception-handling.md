# C++ Exception Handling

Exception handling in C++ allows us to gracefully handle runtime errors and exceptional conditions that may occur during program execution. It provides a way to catch and handle these exceptions, preventing the program from crashing. In C++, we can use the `try`, `catch`, and `throw` keywords to implement exception handling. Let's explore how it works.

## Basic Exception Handling

The basic structure of exception handling in C++ involves the following:

1. Enclose the code that may throw an exception within a `try` block.
2. Catch the exception using one or more `catch` blocks.
3. Handle the exception or perform necessary actions.

Here's an example that demonstrates basic exception handling:

```cpp
#include <iostream>

int main() {
    try {
        // Code that may throw an exception
        int result = 10 / 0;
    }
    catch (const std::exception& e) {
        // Exception handling
        std::cout << "Exception occurred: " << e.what() << std::endl;
    }

    return 0;
}
```

In this example, we enclose the code `int result = 10 / 0;` within a `try` block. Since dividing by zero is an invalid operation, it will throw an exception of type `std::exception`. We catch the exception using a `catch` block and handle it by printing an error message.

## Catching Different Types of Exceptions

In addition to catching a general exception, we can catch specific types of exceptions using multiple `catch` blocks. This allows us to handle different exceptions differently. Here's an example:

```cpp
#include <iostream>

int main() {
    try {
        // Code that may throw exceptions
        int result = 10 / 0;
    }
    catch (const std::logic_error& e) {
        // Handle logic_error exception
        std::cout << "Logic error occurred: " << e.what() << std::endl;
    }
    catch (const std::runtime_error& e) {
        // Handle runtime_error exception
        std::cout << "Runtime error occurred: " << e.what() << std::endl;
    }
    catch (const std::exception& e) {
        // Handle general exception
        std::cout << "Exception occurred: " << e.what() << std::endl;
    }

    return 0;
}
```

In this example, we catch exceptions of type `std::logic_error` and `std::runtime_error` using separate `catch` blocks before catching the general `std::exception`. This allows us to handle different types of exceptions differently based on their specific needs.

## Throwing Exceptions

We can also throw our own exceptions using the `throw` keyword. This allows us to create custom exception types and propagate them through the call stack. Here's an example:

```cpp
#include <iostream>
#include <stdexcept>

void divideNumbers(int a, int b) {
    if (b == 0) {
        throw std::runtime_error("Divide by zero exception");
    }
    int result = a / b;
    std::cout << "Result: " << result << std::endl;
}

int main() {
    try {
        divideNumbers(10, 0);
    }
    catch (const std::exception& e) {
        std::cout << "Exception occurred: " << e.what() << std::endl;
    }

    return 0;
}
```


