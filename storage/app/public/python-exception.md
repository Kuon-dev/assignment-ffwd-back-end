# Python Exception Handling

In Python, exceptions are a way to handle errors and unexpected situations that may occur during the execution of a program. Exception handling allows you to gracefully recover from errors and prevent your program from crashing. In this tutorial, we'll explore the basics of exception handling in Python.

## Handling Exceptions with Try-Except

The most common way to handle exceptions in Python is by using the `try-except` statement. The `try` block contains the code that might raise an exception, and the `except` block handles the exception if it occurs. Here's an example:

```python
try:
    # Code that might raise an exception
    result = 10 / 0
except ZeroDivisionError:
    # Exception handling code
    print("Cannot divide by zero!")

In this example, the `ZeroDivisionError` exception is raised when trying to divide a number by zero. The `except` block catches the exception and executes the specified code.

## Handling Multiple Exceptions

You can handle multiple exceptions by using multiple `except` blocks or a single `except` block with multiple exception types. Here's an example:

```python
try:
    # Code that might raise an exception
    result = int("abc")
except ValueError:
    # Exception handling for ValueError
    print("Invalid value!")
except TypeError:
    # Exception handling for TypeError
    print("Invalid type!")

In this example, the `ValueError` and `TypeError` exceptions are handled separately. If either exception occurs, the corresponding `except` block will be executed.

## Handling Any Exception

To catch any exception, you can use a generic `except` block without specifying the exception type. However, it's generally recommended to handle specific exceptions whenever possible to provide more targeted error messages. Here's an example:

```python
try:
    # Code that might raise an exception
    result = int("abc")
except:
    # Generic exception handling
    print("An error occurred!")

## Executing Code Regardless of Exceptions

Sometimes you need to execute certain code regardless of whether an exception occurs or not. For this purpose, you can use the `finally` block. The code inside the `finally` block will always be executed, whether an exception occurs or not. Here's an example:

```python
try:
    # Code that might raise an exception
    result = int("10")
except ValueError:
    # Exception handling for ValueError
    print("Invalid value!")
finally:
    # Code to be executed regardless of exceptions
    print("Execution complete!")

## Raising Exceptions

You can also explicitly raise exceptions using the `raise` statement. This can be useful when you want to raise specific exceptions based on certain conditions. Here's an example:

```python
def validate_age(age):
    if age < 0:
        raise ValueError("Age cannot be negative!")
    if age > 120:
        raise ValueError("Invalid age!")
    return age

try:
    result = validate_age(-10)
except ValueError as e:
    print(e)

In this example, the `validate_age()` function raises a `ValueError` exception if the age is negative or exceeds 120. The exception is then caught and its message is printed.

## Exception Hierarchy

Python has a hierarchy of built-in exception classes. The base class is `BaseException`, followed by `Exception`, which is the base class for all built-in exceptions. You can also create custom exception classes by inheriting from `Exception` or its subclasses.


