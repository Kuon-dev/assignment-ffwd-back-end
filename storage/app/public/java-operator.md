# Java Operators

In Java, operators are symbols that perform operations on operands. They are used to manipulate data and perform calculations. Java provides a wide range of operators, including arithmetic, assignment, comparison, logical, bitwise, and more.

## Arithmetic Operators

Arithmetic operators are used to perform basic mathematical operations. Here are the commonly used arithmetic operators in Java:

- Addition: `+`
- Subtraction: `-`
- Multiplication: `*`
- Division: `/`
- Modulus (Remainder): `%`

Here's an example that demonstrates the use of arithmetic operators:

```java
int a = 10;
int b = 5;
int sum = a + b;
int difference = a - b;
int product = a * b;
```

The `+` operator is used to add the values of `a` and `b`, the `-` operator is used to subtract `b` from `a`, and the `*` operator is used to multiply `a` and `b`. The results are stored in the respective variables `sum`, `difference`, and `product`.

## Assignment Operators

Assignment operators are used to assign values to variables. The most common assignment operator is `=`. Here's an example:

```java
int x = 10;
int y = 5;
x += y; // Equivalent to: x = x + y;
```

In the above example, the value of `x` is updated by adding the value of `y` to it using the `+=` assignment operator.

## Comparison Operators

Comparison operators are used to compare two values. They return a boolean value (`true` or `false`) based on the comparison result. Here are the comparison operators in Java:

- Equal to: `==`
- Not equal to: `!=`
- Greater than: `>`
- Less than: `<`
- Greater than or equal to: `>=`
- Less than or equal to: `<=`

Here's an example:

```java
int p = 5;
int q = 3;
boolean isEqual = (p == q);
boolean isGreater = (p > q);
```

The `isEqual` variable will be `false` because `p` is not equal to `q`. The `isGreater` variable will be `true` because `p` is greater than `q`.

## Logical Operators

Logical operators are used to perform logical operations on boolean values. The logical operators in Java are:

- Logical AND: `&&`
- Logical OR: `||`
- Logical NOT: `!`

These operators are typically used to combine multiple boolean expressions. Here's an example:

```java
boolean condition1 = true;
boolean condition2 = false;
boolean result = (condition1 && !condition2);
```

The `result` variable will be `true` because `condition1` is `true` and the negation of `condition2` is `true`.

## Bitwise Operators

Bitwise operators are used to perform operations on individual bits of binary numbers. They are used in low-level programming and certain algorithms. The bitwise operators in Java are:

- Bitwise AND: `&`
- Bitwise OR: `|`
- Bitwise XOR: `^`
- Bitwise NOT: `~`
- Left shift: `<<`
- Right shift: `>>`
- Unsigned right shift: `>>>`

These operators are beyond the scope of this tutorial, but they can be useful in specific scenarios.

