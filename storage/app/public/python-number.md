# Python Numbers

In Python, numbers are a fundamental data type used to represent numeric values. Python supports various types of numbers, including integers, floating-point numbers, and complex numbers. Let's explore each type:

## Integers

Integers, or `int`, are whole numbers without a fractional component. They can be positive or negative. Here's an example:

```python
x = 10
y = -5

## Floating-Point Numbers

Floating-point numbers, or `float`, are numbers with a fractional component. They can represent both whole and decimal numbers. Here's an example:

```python
a = 3.14
b = -2.5

Python uses the standard arithmetic operators for performing mathematical operations on numbers, such as addition (+), subtraction (-), multiplication (*), division (/), and exponentiation (**).

## Complex Numbers

Complex numbers, or `complex`, are numbers with a real part and an imaginary part. They are represented as `a + bj`, where `a` is the real part and `b` is the imaginary part. Here's an example:

```python
c = 2 + 3j
d = -1j

## Number Conversion and Operations

Python provides built-in functions for converting between different number types, such as `int()`, `float()`, and `complex()`. These functions allow you to convert a value of one type to another.

Example:

```python
x = 10
y = float(x)
z = complex(x)

Python also supports various mathematical functions and operations for working with numbers. Some commonly used functions include `abs()`, `round()`, `min()`, `max()`, and `sum()`. Additionally, the `math` module provides a wide range of mathematical functions for more advanced calculations.

## Number Systems

In addition to decimal numbers, Python supports other number systems like binary, octal, and hexadecimal. You can represent numbers in these systems using prefixes: `0b` for binary, `0o` for octal, and `0x` for hexadecimal.

Example:

```python
binary_num = 0b1010
octal_num = 0o17
hexadecimal_num = 0x2F
```

Python automatically converts numbers to decimal for computation and returns results in decimal format.

