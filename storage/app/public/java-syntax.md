# Java Syntax

Java syntax refers to the set of rules that define how Java programs are written. Understanding the syntax is crucial for writing valid and error-free Java code. In this tutorial, we'll cover some essential elements of Java syntax.

## Comments

Comments are used to add explanatory notes to the code. They are ignored by the compiler and do not affect the program's execution. In Java, there are two types of comments:

- **Single-line comments**: Denoted by `//`. Anything after `//` on the same line is treated as a comment.

- **Multi-line comments**: Enclosed between `/*` and `*/`. Everything between these symbols is considered a comment, even if it spans multiple lines.

```java
// This is a single-line comment

/*
   This is a
   multi-line comment
*/
```

## Package and Import Statements

Packages provide a way to organize and categorize classes and interfaces in Java. The `package` statement appears at the beginning of a Java source file and declares the package to which the class belongs. It is followed by import statements, which allow you to use classes from other packages in your code.

```java
package com.example.myproject;

import java.util.ArrayList;
import java.util.List;
```

## Class Declaration

A class is a blueprint for creating objects in Java. The class declaration includes the keyword `class`, followed by the class name. The class body is enclosed within curly braces `{}`.

```java
public class MyClass {
    // Class body
}
```

## Method Declaration

Methods define the behavior of a class. They are declared within a class and specify the actions that can be performed on objects of that class. A method declaration consists of an access modifier, a return type, a method name, optional parameters enclosed in parentheses `()`, and a method body enclosed in curly braces `{}`.

```java
public int calculateSum(int a, int b) {
    return a + b;
}
```

## Variables and Data Types

Variables are used to store data in a program. In Java, you need to declare variables before using them. The syntax for declaring a variable is: `data_type variable_name;`.

```java
int age;
double salary;
String name;
```

Java has several built-in data types, including `int`, `double`, `boolean`, and `String`, among others. Each data type specifies the kind of data that can be stored in a variable.

## Control Flow Statements

Control flow statements allow you to control the flow of execution in a program. Some commonly used control flow statements in Java are:

- **Conditional Statements**: `if`, `else if`, and `else` statements are used to perform different actions based on different conditions.

```java
if (condition1) {
    // Code block executed if condition1 is true
} else if (condition2) {
    // Code block executed if condition1 is false and condition2 is true
} else {
    // Code block executed if both condition1 and condition2 are false
}
```

- **Looping Statements**: `for`, `while`, and `do-while` loops are used to repeat a block of code until a specific condition is met.

```java
for (int i = 0; i < 5; i++) {
    // Code block executed 5 times
}

while (condition) {
    // Code block executed repeatedly until condition is false
}

do {
    // Code block executed at least once and repeatedly until condition is false
} while (condition);
```


