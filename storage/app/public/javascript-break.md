# JavaScript break Statement

The break statement is a control flow statement in JavaScript that allows you to terminate the execution of a loop or switch statement prematurely. It is useful when you want to exit a loop based on a certain condition without waiting for the loop to naturally complete. In this tutorial, we'll explore how to use the break statement in JavaScript.

## Usage in Loops

The break statement can be used within a loop to immediately exit the loop when a specific condition is met. It allows you to break out of the loop's execution flow and continue with the next statement after the loop. Here's an example of using the break statement in a while loop:

```javascript
let i = 0;

while (i < 5) {
  if (i === 3) {
    break;
  }

  console.log("Iteration: " + i);
  i++;
}
```

In this example, the while loop is set to iterate as long as `i` is less than `5`. However, when `i` becomes `3`, the break statement is encountered. As a result, the loop is immediately terminated, and the program continues executing the statements after the loop.



