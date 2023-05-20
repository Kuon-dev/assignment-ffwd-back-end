# JavaScript while Loop

The while loop is a control flow statement in JavaScript that allows you to repeatedly execute a block of code as long as a specified condition is true. It is useful when the number of iterations is not known in advance or when you want to loop until a certain condition is met. In this tutorial, we'll explore how to use the while loop in JavaScript.

## Syntax

The syntax of the while loop in JavaScript is as follows:

```javascript
while (condition) {
  // Code to be executed in each iteration
}
```

The `condition` is an expression that is evaluated before each iteration. If the condition is true, the code block inside the loop is executed. If it's false, the loop ends, and the program continues with the next statement after the loop.

## Example

Let's look at an example that demonstrates the usage of the while loop:

```javascript
let i = 0;

while (i < 5) {
  console.log("Iteration: " + i);
  i++;
}
```

In this example, the while loop is used to iterate from `0` to `4` (5 iterations). The variable `i` is initialized to `0`, and the condition `i < 5` is evaluated before each iteration. As long as the condition is true, the code block inside the loop is executed, which logs the current iteration number to the console. After each iteration, the `i` variable is incremented by `1` using the `i++` statement.


