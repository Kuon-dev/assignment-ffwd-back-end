# Java Loop Control

In Java, loop control structures allow you to repeat a block of code multiple times. They are used to automate repetitive tasks and iterate over collections or arrays. Java provides several loop control structures, including `for`, `while`, and `do-while` loops.

## Java for Loop

The `for` loop is commonly used when the number of iterations is known beforehand. It consists of three parts: initialization, condition, and update. Here's the syntax of a `for` loop:

```java
for (initialization; condition; update) {
    // Code to be executed
}
```

The `initialization` initializes the loop variable, the `condition` specifies the condition for continuing the loop, and the `update` statement modifies the loop variable after each iteration.

Here's an example of a `for` loop that prints numbers from 1 to 5:

```java
for (int i = 1; i <= 5; i++) {
    System.out.println(i);
}
```

## Java while Loop

The `while` loop is used when the number of iterations is not known beforehand and depends on a condition. It repeatedly executes a block of code as long as the condition is true. Here's the syntax of a `while` loop:

```java
while (condition) {
    // Code to be executed
}
```

The `condition` is checked before each iteration. If it evaluates to `true`, the code inside the loop is executed. If it evaluates to `false`, the loop is terminated.

Here's an example of a `while` loop that prints numbers from 1 to 5:

```java
int i = 1;
while (i <= 5) {
    System.out.println(i);
    i++;
}
```

## Java do-while Loop

The `do-while` loop is similar to the `while` loop but with a slight difference. It executes the block of code first and then checks the condition. If the condition is true, the loop continues with the next iteration; otherwise, it terminates. Here's the syntax of a `do-while` loop:

```java
do {
    // Code to be executed
} while (condition);
```

The block of code is executed at least once before checking the condition.

Here's an example of a `do-while` loop that prints numbers from 1 to 5:

```java
int i = 1;
do {
    System.out.println(i);
    i++;
} while (i <= 5);
```

## Loop Control Statements

Java provides loop control statements that allow you to control the flow of a loop:

- `break`: Terminates the loop and transfers control to the next statement after the loop.
- `continue`: Skips the remaining code in the current iteration and moves to the next iteration.

These statements are often used inside loops to control their execution flow.

## Nested Loops

Java allows you to nest one loop inside another loop. This is known as nested loops. It is a common technique used to iterate over multi-dimensional arrays or perform complex iterations.

Here's an example of a nested `for` loop that prints a pattern:

```java
for (int i = 1; i <= 3; i++) {
    for (int j = 1; j <= 3; j++) {
        System.out.print("* ");
    }
    System.out.println();
}
```

The outer loop controls the number of rows, and the inner loop controls the number of columns. This code will output a square pattern of stars.

