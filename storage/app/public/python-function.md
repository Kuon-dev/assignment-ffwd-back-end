# Python Functions

Functions are a fundamental concept in Python that allow you to organize and reuse code. In this tutorial, we'll explore the basics of functions and their usage.

## Defining Functions

You can define a function in Python using the `def` keyword, followed by the function name and parentheses `()`. Here's a simple example:

```python
def greet():
    print("Hello, world!")
```
## Calling Functions

Once you define a function, you can call it by using its name followed by parentheses `()`. Here's how you can call the `greet()` function defined earlier:

```python
greet()  # Output: "Hello, world!"
```
## Function Parameters

Functions can accept parameters, which are values passed to the function when it is called. Parameters allow you to provide inputs to a function and customize its behavior. Here's an example:

```python
def greet(name):
    print("Hello, " + name + "!")
```
greet("Alice")  # Output: "Hello, Alice!"

## Return Values

Functions can also return values using the `return` statement. This allows a function to compute a result and provide it back to the caller. Here's an example:

```python
def add(a, b):
    return a + b
```
result = add(3, 5)
print(result)  # Output: 8

## Function Documentation

It's good practice to provide documentation for your functions using docstrings. Docstrings are enclosed in triple quotes `"""` and describe the purpose and usage of a function. Here's an example:

```python
def square(n):
    """
    Returns the square of a number.
    
    Parameters:
    n (int): The input number.
    
    Returns:
    int: The square of the input number.
    """
    return n * n
```
## Function Scope

Variables defined inside a function have local scope, which means they are only accessible within the function. Variables defined outside a function have global scope and can be accessed from anywhere in the program. Here's an example:

```python
def my_function():
    x = 10  # Local variable
    print(x)  # Output: 10

x = 5  # Global variable
my_function()  # Output: 10
print(x)  # Output: 5
```
Python offers many more advanced features and techniques for working with functions, such as default arguments, variable-length arguments, and recursive functions. Understanding functions is essential for writing modular, reusable, and maintainable code.

