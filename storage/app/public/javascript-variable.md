# JavaScript Variables

Variables are used to store and manipulate data in JavaScript. They provide a way to give names to values and refer to them later in your code. In this tutorial, we'll learn how to declare and use variables in JavaScript.

## Variable Declaration

In JavaScript, you can declare variables using the `var`, `let`, or `const` keywords. Here's an example of each:

```javascript
// Using var (older way, still works)
var name = 'John';

// Using let (preferred for block-scoped variables)
let age = 25;

// Using const (for constants that don't change)
const PI = 3.14;
```

In this example, we declared three variables: `name`, `age`, and `PI`. The `var` keyword is the older way of declaring variables, while `let` and `const` are introduced in newer versions of JavaScript. It's generally recommended to use `let` and `const` for better scoping and code clarity.

## Assigning Values to Variables

To assign a value to a variable, you can use the assignment operator (`=`). Here's an example:

```javascript
let greeting = 'Hello';
greeting = greeting + ', world!';
```

In this example, we first assigned the string `'Hello'` to the `greeting` variable. Then, we concatenated `', world!'` to the existing value of `greeting` using the `+` operator.

## Variable Naming Rules

When naming variables in JavaScript, you should follow these rules:

- Start with a letter, underscore (`_`), or dollar sign (`$`).
- Subsequent characters can be letters, digits, underscores, or dollar signs.
- Avoid using reserved keywords as variable names (e.g., `let`, `function`, `if`).

## Using Variables

Once you've declared and assigned values to variables, you can use them in your code. Here's an example:

```javascript
let x = 5;
let y = 3;
let sum = x + y;

console.log(sum); // Output: 8
```

In this example, we declared the variables `x` and `y` and assigned them the values `5` and `3`, respectively. Then, we added the values of `x` and `y` and stored the result in the `sum` variable. Finally, we used `console.log()` to display the value of `sum` in the console.

## Summary

- Variables are used to store and manipulate data in JavaScript.
- Use `var`, `let`, or `const` keywords to declare variables.
- Assign values using the assignment operator (`=`).
- Follow variable naming rules and best practices.
- Use variables to store, manipulate, and retrieve data in your code.

Understanding variables is fundamental to programming in JavaScript. They allow you to work with data and make your code more flexible and dynamic. Keep practicing and incorporating variables into your JavaScript programs to enhance your coding skills.

Happy coding!
