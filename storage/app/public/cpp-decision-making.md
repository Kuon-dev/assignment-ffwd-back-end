# C++ Decision Making

In C++, decision-making is crucial for controlling the flow of your program based on certain conditions. C++ provides several constructs to make decisions and execute different blocks of code accordingly. Let's explore the main decision-making constructs in C++.

## 1. `if` Statement

The `if` statement is used to execute a block of code if a specified condition is true. If the condition is false, the code block is skipped. Here's the syntax of the `if` statement:

```cpp
if (condition) {
    // code to be executed if the condition is true
}
```

Example:

```cpp
int age = 18;
if (age >= 18) {
    cout << "You are eligible to vote!" << endl;
}
```

In this example, the code block inside the `if` statement will only execute if the `age` variable is greater than or equal to 18.

## 2. `if-else` Statement

The `if-else` statement extends the `if` statement by providing an alternative code block to execute when the condition is false. Here's the syntax of the `if-else` statement:

```cpp
if (condition) {
    // code to be executed if the condition is true
} else {
    // code to be executed if the condition is false
}
```

Example:

```cpp
int age = 15;
if (age >= 18) {
    cout << "You are eligible to vote!" << endl;
} else {
    cout << "You are not eligible to vote." << endl;
}
```

In this example, the first code block will execute if the `age` variable is greater than or equal to 18. Otherwise, the second code block will execute.

## 3. `if-else if-else` Statement

The `if-else if-else` statement allows you to check multiple conditions and execute different code blocks accordingly. It provides a series of conditions to evaluate until a true condition is found. Here's the syntax of the `if-else if-else` statement:

```cpp
if (condition1) {
    // code to be executed if condition1 is true
} else if (condition2) {
    // code to be executed if condition2 is true
} else {
    // code to be executed if all conditions are false
}
```

Example:

```cpp
int score = 85;
if (score >= 90) {
    cout << "Your grade is A." << endl;
} else if (score >= 80) {
    cout << "Your grade is B." << endl;
} else if (score >= 70) {
    cout << "Your grade is C." << endl;
} else {
    cout << "Your grade is F." << endl;
}
```

In this example, the appropriate code block will execute based on the value of the `score` variable.

These are the main decision-making constructs in C++. They allow you to selectively execute different blocks of code based on specific conditions, providing control and flexibility to your programs.
