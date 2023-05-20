# Java Numbers

In Java, numbers are an essential part of programming. They are used to perform calculations, store values, and represent various data types. Java provides different types of numbers, including integers, floating-point numbers, and more.

## Integer Numbers

Integer numbers, also known as whole numbers, are used to represent whole values without any fractional or decimal part. In Java, integer numbers can be either positive or negative. Here are the different types of integer numbers in Java:

- `byte`: Represents a signed 8-bit integer (-128 to 127).
- `short`: Represents a signed 16-bit integer (-32,768 to 32,767).
- `int`: Represents a signed 32-bit integer (-2,147,483,648 to 2,147,483,647).
- `long`: Represents a signed 64-bit integer (-9,223,372,036,854,775,808 to 9,223,372,036,854,775,807).

Here's an example that demonstrates the use of integer numbers:

```java
byte age = 25;
short quantity = 1000;
int population = 2000000;
long distance = 15000000000L; // Note the 'L' suffix to indicate it as a long value
```

In the above example, the variables `age`, `quantity`, `population`, and `distance` are used to store different integer values.

## Floating-Point Numbers

Floating-point numbers are used to represent numbers with a fractional or decimal part. In Java, floating-point numbers can be either single precision or double precision. Here are the different types of floating-point numbers in Java:

- `float`: Represents a single precision 32-bit floating-point number.
- `double`: Represents a double precision 64-bit floating-point number.

Here's an example that demonstrates the use of floating-point numbers:

```java
float pi = 3.14159f; // Note the 'f' suffix to indicate it as a float value
double distance = 1500.75;
```

In the above example, the variables `pi` and `distance` are used to store different floating-point values.

## Number Operations

Java provides a variety of operators and functions to perform operations on numbers. Here are some common operations you can perform with numbers in Java:

- Arithmetic Operations: Addition (+), Subtraction (-), Multiplication (*), Division (/), Modulus (%), and more.
- Increment and Decrement: `++` (increment by 1), `--` (decrement by 1).
- Comparison: `==` (equal to), `!=` (not equal to), `<` (less than), `>` (greater than), `<=` (less than or equal to), `>=` (greater than or equal to).
- Mathematical Functions: `Math.abs()`, `Math.sqrt()`, `Math.pow()`, `Math.max()`, `Math.min()`, and more.

Here's an example that demonstrates some number operations:

```java
int x = 10;
int y = 5;
int sum = x + y;
int difference = x - y;
int product = x * y;
double quotient = (double) x / y; // Casting to double for floating-point division
int modulus = x % y;
```

In the above example, the variables `sum`, `difference`, `product`, `quotient`, and `modulus` store the results of different number operations.


