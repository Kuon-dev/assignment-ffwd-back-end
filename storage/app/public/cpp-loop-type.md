# C++ Loop Types

In C++, loops are used to execute a block of code repeatedly. They provide a way to iterate over a set of statements until a certain condition is met. C++ offers several loop types to cater to different looping scenarios. Let's explore the three main loop types in C++.

## 1. `while` Loop

The `while` loop executes a block of code repeatedly as long as a specified condition is true. The condition is evaluated before each iteration. Here's the syntax of the `while` loop:

```cpp
while (condition) {
    // code to be executed
}
```

Example:

```cpp
int count = 0;
while (count < 5) {
    cout << "Count: " << count << endl;
    count++;
}
```

In this example, the loop will execute five times, printing the current count value on each iteration.

## 2. `do-while` Loop

The `do-while` loop is similar to the `while` loop, but the condition is evaluated after each iteration. This means that the code block is executed at least once, even if the condition is initially false. Here's the syntax of the `do-while` loop:

```cpp
do {
    // code to be executed
} while (condition);
```

Example:

```cpp
int count = 0;
do {
    cout << "Count: " << count << endl;
    count++;
} while (count < 5);
```

In this example, the loop will also execute five times and print the count values.

## 3. `for` Loop

The `for` loop provides a compact way to iterate over a range of values. It consists of three parts: initialization, condition, and increment/decrement. Here's the syntax of the `for` loop:

```cpp
for (initialization; condition; increment/decrement) {
    // code to be executed
}
```

Example:

```cpp
for (int i = 0; i < 5; i++) {
    cout << "Count: " << i << endl;
}
```

This `for` loop will iterate five times, printing the current count value on each iteration.

These are the main loop types in C++. Choose the appropriate loop based on your specific looping requirements to efficiently control the flow of your program.
