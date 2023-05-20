# Python Loop

Loops in Python are used to repeatedly execute a block of code until a certain condition is met. Python provides two types of loops: `for` loop and `while` loop. Let's explore them:

## for Loop

The `for` loop is used to iterate over a sequence (such as a list, tuple, or string) or other iterable objects. It allows you to execute a block of code for each item in the sequence. Here's the syntax:

```python
for item in sequence:
    # code block to be executed for each item

Example:

```python
fruits = ["apple", "banana", "cherry"]

for fruit in fruits:
    print(fruit)

## while Loop

The `while` loop is used to execute a block of code as long as a specified condition is true. It repeatedly checks the condition before each iteration. Here's the syntax:

```python
while condition:
    # code block to be executed as long as the condition is true

Example:

```python
count = 0

while count < 5:
    print(count)
    count += 1

## Loop Control Statements

Python provides loop control statements to modify the behavior of loops. These statements include `break`, `continue`, and `pass`.

- The `break` statement is used to exit the loop entirely.
- The `continue` statement is used to skip the rest of the code block and move to the next iteration.
- The `pass` statement is used as a placeholder when no action is required.

These statements can be used within both `for` and `while` loops to control the flow of execution.



