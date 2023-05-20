# JavaScript Precedence

Precedence, also known as operator precedence, refers to the order in which operators are evaluated in an expression. Understanding precedence is crucial in JavaScript to ensure that expressions are evaluated correctly. In this tutorial, we'll explore the concept of precedence and how it affects the evaluation of expressions.

## Operator Precedence

JavaScript has a set of predefined rules for determining the precedence of operators. These rules define the order in which operators are evaluated when an expression contains multiple operators. Here are some important points to consider:

- Operators with higher precedence are evaluated first.
- Parentheses `( )` can be used to override the default precedence and force evaluation in a specific order.
- Operators with the same precedence are evaluated from left to right, unless they are associative.

## Common Operator Precedence

Here is a list of common operators in JavaScript along with their precedence (from highest to lowest):

1. Grouping: `( )`
2. Member Access: `.` (dot notation)
3. Computed Member Access: `[ ]` (bracket notation)
4. Function Call: `( )`
5. Increment/Decrement: `++`, `--`
6. Logical NOT: `!`
7. Multiplication/Division/Remainder: `*`, `/`, `%`
8. Addition/Subtraction: `+`, `-`
9. Relational/Comparison: `<`, `>`, `<=`, `>=`, `instanceof`, `in`
10. Equality: `==`, `!=`, `===`, `!==`
11. Logical AND: `&&`
12. Logical OR: `||`
13. Conditional (Ternary) Operator: `? :`
14. Assignment: `=`, `+=`, `-=`, `*=`, `/=`, `%=` 

## Example

Let's look at an example to illustrate operator precedence in JavaScript:

```javascript
let result = 2 + 3 * 4;
console.log(result); // Output: 14
```

In this example, the expression `2 + 3 * 4` is evaluated. According to the precedence rules, multiplication (`*`) has higher precedence than addition (`+`). Therefore, the multiplication is performed first, resulting in `3 * 4 = 12`. Then, the addition is carried out, giving us the final result of `2 + 12 = 14`.

If we want to change the order of evaluation, we can use parentheses to override the default precedence. For example:

```javascript
let result = (2 + 3) * 4;
console.log(result); // Output: 20
```

By enclosing `2 + 3` in parentheses, we ensure that the addition is performed first. Thus, the expression evaluates to `(2 + 3) * 4 = 5 * 4 = 20`.

## Conclusion

Understanding operator precedence is essential for writing correct and predictable JavaScript code. By knowing the precedence rules, you can control the order of evaluation in complex expressions and avoid unexpected results. It's always a good practice to use parentheses when in doubt or when you want to explicitly define the order of operations in an expression.
