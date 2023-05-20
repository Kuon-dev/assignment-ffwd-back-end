# JavaScript switch

The switch statement is a control flow statement in JavaScript that allows you to execute different blocks of code based on different cases. It provides an alternative to using multiple if-else statements when you have multiple possible conditions to check. In this tutorial, we'll explore how to use the switch statement in JavaScript.

## Syntax

The syntax of the switch statement in JavaScript is as follows:

```javascript
switch (expression) {
  case value1:
    // Code to be executed when expression matches value1
    break;
  case value2:
    // Code to be executed when expression matches value2
    break;
  ...
  default:
    // Code to be executed when none of the cases match expression
}
```

The `expression` is evaluated once, and its value is then compared with the values specified in each `case`. If a match is found, the corresponding code block is executed. The `break` statement is used to exit the switch statement after a match is found. If no match is found, the code block inside the `default` case is executed (if provided).

## Example

Let's look at an example that demonstrates the usage of the switch statement:

```javascript
let day = 1;
let dayName;

switch (day) {
  case 1:
    dayName = "Monday";
    break;
  case 2:
    dayName = "Tuesday";
    break;
  case 3:
    dayName = "Wednesday";
    break;
  case 4:
    dayName = "Thursday";
    break;
  case 5:
    dayName = "Friday";
    break;
  case 6:
    dayName = "Saturday";
    break;
  case 7:
    dayName = "Sunday";
    break;
  default:
    dayName = "Invalid day";
}

console.log("The day is: " + dayName);
```

In this example, we have a variable `day` initialized with the value `1`, representing Monday. The switch statement checks the value of `day` and executes the code block corresponding to the matching case (`case 1`). In this case, the variable `dayName` is assigned the value `"Monday"`. The `break` statement is used to exit the switch statement.

If we change the value of `day` to `4`, the switch statement matches `case 4` and assigns the value `"Thursday"` to `dayName`. The code block for the other cases is skipped because there is a `break` statement after each code block.

If the value of `day` doesn't match any of the cases, the code block inside the `default` case is executed, and `dayName` is assigned the value `"Invalid day"`.


