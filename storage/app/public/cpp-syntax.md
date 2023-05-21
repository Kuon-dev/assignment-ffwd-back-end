# C++ Syntax

C++ is a powerful programming language that follows a specific syntax or set of rules for writing code. Understanding the syntax is essential for writing correct and readable C++ programs. In this tutorial, we'll cover some of the key syntax elements in C++.

## Comments

Comments are used to add explanatory notes within the code that are ignored by the compiler. They are useful for providing information about the code's functionality or making it more understandable. In C++, there are two types of comments:

- Single-line comments start with `//` and continue until the end of the line. For example:

````cpp
// This is a single-line comment
````

- Multi-line comments start with `/*` and end with `*/`. They can span multiple lines. For example:

````cpp
/*
This is a multi-line comment
It can span multiple lines
*/
````

## Variables and Data Types

Variables are used to store and manipulate data in C++. Before using a variable, you need to declare it with a specific data type. Here's the syntax for declaring variables:

````cpp
data_type variable_name;
````

For example, to declare an integer variable named `num`, you can write:

````cpp
int num;
````

C++ provides several built-in data types, including `int`, `float`, `double`, `char`, and `bool`, which we discussed in the previous tutorial on C++ data types.

## Statements and Expressions

In C++, statements are used to perform specific actions, while expressions evaluate to a value. Statements can include variable declarations, assignments, control flow structures, and function calls. Here are some examples of statements:

- Variable declaration and assignment:

````cpp
int num = 10;
````

- Control flow structures (if-else statement):

````cpp
if (num > 0) {
    cout << "Positive number" << endl;
} else {
    cout << "Non-positive number" << endl;
}
````

Expressions, on the other hand, consist of operators, operands, and function calls. They can perform calculations, comparisons, and other operations. For example:

````cpp
int sum = num1 + num2;
bool isEqual = (num1 == num2);
````

## Functions

Functions are reusable blocks of code that perform specific tasks. They can have parameters (inputs) and return values (outputs). Here's the syntax for defining a function:

````cpp
return_type function_name(parameter_list) {
    // Function body
    // Statements
    // Return statement (if applicable)
}
````

For example, here's a function named `add` that takes two integers as parameters and returns their sum:

````cpp
int add(int num1, int num2) {
    int sum = num1 + num2;
    return sum;
}
````

Functions can be called (invoked) from other parts of the program to execute their code and return results.

