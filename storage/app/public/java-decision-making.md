# Java Decision Making

In Java, decision-making structures allow you to control the flow of your program based on certain conditions. They are used to make decisions and execute different blocks of code depending on whether a condition is true or false. Java provides several decision-making statements, including `if` statement, `if-else` statement, `nested if` statement, and `switch` statement.

## if Statement

The `if` statement is the simplest form of decision-making statement. It evaluates a condition and executes a block of code only if the condition is true. Here's the syntax of an `if` statement:

```java
if (condition) {
    // Code to be executed if the condition is true
}
```

Here's an example that demonstrates the use of an `if` statement:

```java
int number = 10;
if (number > 0) {
    System.out.println("The number is positive");
}
```

In the above example, the condition `number > 0` is evaluated. If the condition is true, the message "The number is positive" will be printed.

## if-else Statement

The `if-else` statement allows you to execute one block of code if the condition is true, and another block of code if the condition is false. Here's the syntax of an `if-else` statement:

```java
if (condition) {
    // Code to be executed if the condition is true
} else {
    // Code to be executed if the condition is false
}
```

Here's an example that demonstrates the use of an `if-else` statement:

```java
int number = 10;
if (number > 0) {
    System.out.println("The number is positive");
} else {
    System.out.println("The number is zero or negative");
}
```

In the above example, if the condition `number > 0` is true, the message "The number is positive" will be printed. Otherwise, the message "The number is zero or negative" will be printed.

## Nested if Statement

A nested `if` statement is an `if` statement inside another `if` statement. It allows you to test multiple conditions and execute different blocks of code based on the results. Here's the syntax of a nested `if` statement:

```java
if (condition1) {
    // Code to be executed if condition1 is true
    if (condition2) {
        // Code to be executed if condition2 is true
    }
}
```

Here's an example that demonstrates the use of a nested `if` statement:

```java
int number = 10;
if (number > 0) {
    System.out.println("The number is positive");
    if (number % 2 == 0) {
        System.out.println("The number is even");
    }
}
```

In the above example, if the condition `number > 0` is true, the message "The number is positive" will be printed. If the nested condition `number % 2 == 0` is true, the message "The number is even" will also be printed.

