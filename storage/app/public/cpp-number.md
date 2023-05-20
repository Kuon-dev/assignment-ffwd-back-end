# C++ Numbers

In C++, numbers are an essential part of programming. They allow you to perform mathematical operations and store numerical data. C++ provides various data types to represent different kinds of numbers. Let's explore some commonly used number types in C++.

## Integer Types

Integers are whole numbers without any fractional parts. C++ provides different integer types, varying in size and range. Here are some commonly used integer types:

- `int`: Represents signed integers typically using 4 bytes.
- `short`: Represents signed integers using 2 bytes.
- `long`: Represents signed integers typically using 4 or 8 bytes.
- `long long`: Represents signed integers typically using 8 bytes.

Example:

```cpp
int age = 25;
short distance = 1000;
long population = 1000000;
long long largeNumber = 123456789012345;
```

In this example, we declare variables of different integer types and assign them values.

## Floating-Point Types

Floating-point numbers represent numbers with fractional parts. C++ provides two main floating-point types:

- `float`: Represents single-precision floating-point numbers using 4 bytes.
- `double`: Represents double-precision floating-point numbers using 8 bytes.

Example:

```cpp
float pi = 3.14;
double gravity = 9.8;
```

In this example, we declare variables of type `float` and `double` to store floating-point values.

## Other Numeric Types

C++ also provides additional numeric types for specific purposes, such as:

- `char`: Represents single characters or small integers.
- `bool`: Represents boolean values (`true` or `false`).

Example:

```cpp
char grade = 'A';
bool isPassed = true;
```

In this example, we declare variables of type `char` and `bool` to store character and boolean values, respectively.

## Numeric Operations

Once you have numbers stored in variables, you can perform various operations on them, such as arithmetic operations (`+`, `-`, `*`, `/`), modulus (`%`), and more.

Example:

```cpp
int sum = 5 + 3;
double result = 10.5 * 2.0;
int remainder = 15 % 4;
```

In this example, we perform addition, multiplication, and modulus operations on numbers.

These are the basics of working with numbers in C++. Understanding different number types and their usage will help you manipulate numerical data effectively in your programs.
