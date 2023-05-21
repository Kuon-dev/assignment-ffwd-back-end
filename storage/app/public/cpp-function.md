# C++ Functions

In C++, a function is a block of code that performs a specific task. Functions provide modularity and reusability in your programs. They help break down complex tasks into smaller, manageable pieces. Let's explore the basics of working with functions in C++.

## Function Declaration and Definition

To create a function in C++, you need to declare and define it. The function declaration tells the compiler about the function's name, return type, and parameters (if any). The function definition provides the actual implementation of the function.

Here's the syntax for declaring and defining a function:

```cpp
return_type function_name(parameter_list) {
    // code to be executed
}
```

Example:

```cpp
// Function declaration
int sum(int a, int b);

// Function definition
int sum(int a, int b) {
    return a + b;
}
```

In this example, we declare and define a function named `sum` that takes two `int` parameters and returns their sum.

## Function Invocation

To use a function, you need to invoke (or call) it within your program. Function invocation allows you to execute the code inside the function and obtain the result (if any).

Here's the syntax for invoking a function:

```cpp
return_type result = function_name(argument_list);
```

Example:

```cpp
int result = sum(5, 3);
```

In this example, we invoke the `sum` function with arguments `5` and `3` and store the returned value in the `result` variable.

## Function Parameters

Functions can have parameters, which are variables used to pass data into the function. Parameters allow you to provide inputs to the function for it to work with.

Here's an example of a function with parameters:

```cpp
int multiply(int a, int b) {
    return a * b;
}
```

In this example, the `multiply` function takes two `int` parameters `a` and `b` and returns their product.

## Function Return Type

Functions can have a return type, which specifies the type of value the function returns. If a function doesn't return any value, its return type is `void`.

Here's an example of a function with a return type:

```cpp
int square(int num) {
    return num * num;
}
```

In this example, the `square` function takes an `int` parameter `num` and returns the square of that number.

These are the basics of working with functions in C++. Functions allow you to organize your code, make it more modular, and enhance reusability. They play a vital role in building complex and efficient programs.
