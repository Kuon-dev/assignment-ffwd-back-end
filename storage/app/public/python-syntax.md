# Python Syntax

Python syntax refers to the rules and structure that define how Python code should be written. Understanding Python syntax is essential for writing correct and readable code. In this tutorial, we will cover some of the key elements of Python syntax.

## Statements and Indentation

In Python, statements are written one per line, and each statement typically performs a specific action. Unlike many other programming languages that use braces or semicolons to delimit blocks of code, Python uses **indentation** to define blocks.

Consider the following example that demonstrates a conditional statement:

```python
if x > 5:
    print("x is greater than 5")
else:
    print("x is less than or equal to 5")
```

In the above code, the **if** statement and the **else** statement form two separate blocks of code. The indentation (four spaces or a tab) before the print statements is crucial to define the code blocks. Proper indentation ensures the code is structured correctly.

## Variables and Data Types

In Python, variables are used to store data. Before using a variable, it needs to be declared and assigned a value. Python is a dynamically-typed language, meaning you don't need to explicitly declare the type of a variable. The type is inferred based on the value assigned to it.

Here's an example that demonstrates variable assignment and different data types:

```python
# Integer
age = 25

# Floating-point number
salary = 2500.50

# String
name = "John Doe"

# Boolean
is_active = True
```

In the above code, we assign values to variables **age**, **salary**, **name**, and **is_active**. Python automatically determines the data type based on the assigned values.

## Comments

Comments in Python are used to add explanatory notes to the code. They are ignored by the interpreter and do not affect the program's execution. Comments can be single-line or multi-line.

Here's an example of both types of comments:

```python
# This is a single-line comment

"""
This is a
multi-line comment
"""
```

Comments are useful for documenting code, providing context, or temporarily disabling specific lines of code during development.

## Control Flow Structures

Python provides several control flow structures to control the execution of code. These include **if-elif-else** statements for conditional execution, **for** and **while** loops for iteration, and **break** and **continue** statements for altering loop behavior.

Here's an example that demonstrates an if-else statement and a for loop:

```python
# If-else statement
x = 10
if x > 5:
    print("x is greater than 5")
else:
    print("x is less than or equal to 5")

# For loop
fruits = ["apple", "banana", "cherry"]
for fruit in fruits:
    print(fruit)
```

In the above code, we use an if-else statement to check the value of **x** and print the corresponding message. We also iterate over a list of fruits using a for loop and print each fruit.

## Conclusion

Python syntax forms the foundation of writing Python code. By understanding statements and indentation, variables and data types, comments, and control flow structures, you can start writing Python programs effectively. Practice writing code and experiment with different syntax elements to strengthen your understanding of Python syntax.
