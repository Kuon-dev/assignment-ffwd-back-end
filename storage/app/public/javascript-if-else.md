# JavaScript if-else

In JavaScript, the if-else statement is used to perform different actions based on different conditions. It allows you to control the flow of your program by executing certain code blocks only if a specific condition is met. In this tutorial, we'll explore how to use the if-else statement in JavaScript.

## Syntax

The syntax of the if-else statement in JavaScript is as follows:

```javascript
if (condition) {
  // Code to be executed if the condition is true
} else {
  // Code to be executed if the condition is false
}
```

The `condition` is an expression that evaluates to either `true` or `false`. If the condition is true, the code block inside the `if` statement is executed. If the condition is false, the code block inside the `else` statement is executed.

## Example

Let's look at an example that demonstrates the usage of the if-else statement:

```javascript
let num = 10;

if (num > 0) {
  console.log("The number is positive.");
} else {
  console.log("The number is negative.");
}
```

In this example, we have a variable `num` initialized with the value `10`. The condition `num > 0` is evaluated. Since `num` is greater than `0`, the code block inside the `if` statement is executed, and the message "The number is positive." is printed to the console.

If we change the value of `num` to `-5`, the condition `num > 0` becomes false. In this case, the code block inside the `else` statement is executed, and the message "The number is negative." is printed to the console.

## Multiple Conditions with else if

You can also have multiple conditions using the `else if` statement. This allows you to test multiple conditions and execute different code blocks accordingly. Here's the syntax:

```javascript
if (condition1) {
  // Code to be executed if condition1 is true
} else if (condition2) {
  // Code to be executed if condition2 is true
} else {
  // Code to be executed if all conditions are false
}
```

The `else if` statement allows you to test additional conditions if the previous conditions are false. The code block inside the `else if` statement is executed only if the corresponding condition is true.

## Example with else if

Let's modify our previous example to include an `else if` statement:

```javascript
let num = 0;

if (num > 0) {
  console.log("The number is positive.");
} else if (num < 0) {
  console.log("The number is negative.");
} else {
  console.log("The number is zero.");
}
```

In this example, if `num` is greater than `0`, the code block inside the first `if` statement is executed. If `num` is less than `0`, the code block inside the `else if` statement is executed. If none of these conditions are true, the code block inside the `else` statement is executed.

## Summary

The if-else statement is a fundamental construct in JavaScript that allows you to make decisions based on conditions. By using if-else statements, you can control the flow of your program and execute different code blocks based on different scenarios. This provides flexibility and allows your program to respond dynamically to different situations.
