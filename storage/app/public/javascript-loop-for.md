# JavaScript for Loop

The for loop is a control flow statement in JavaScript that allows you to repeatedly execute a block of code a certain number of times. It is especially useful when you want to perform an action on each item of an array or when you know the exact number of iterations needed. In this tutorial, we'll explore how to use the for loop in JavaScript.

## Syntax

The syntax of the for loop in JavaScript is as follows:

```javascript
for (initialization; condition; increment) {
  // Code to be executed in each iteration
}
```

- The `initialization` is an expression that is executed before the loop starts. It typically initializes a counter variable.
- The `condition` is an expression that is evaluated before each iteration. If the condition is true, the loop continues. If it's false, the loop ends.
- The `increment` is an expression that is executed at the end of each iteration. It typically updates the counter variable.

The code block inside the for loop will be executed repeatedly as long as the condition evaluates to true.

## Example

Let's look at an example that demonstrates the usage of the for loop:

```javascript
for (let i = 0; i < 5; i++) {
  console.log("Iteration: " + i);
}
```

In this example, the for loop is used to iterate from `0` to `4` (5 iterations). The variable `i` is initialized to `0`, and the condition `i < 5` is evaluated before each iteration. As long as the condition is true, the code block inside the loop is executed, which logs the current iteration number to the console. After each iteration, the `i` variable is incremented by `1` using the `i++` increment statement.



