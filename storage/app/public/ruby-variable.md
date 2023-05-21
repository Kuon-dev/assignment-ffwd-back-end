# Ruby Variables

In Ruby, variables are used to store and manipulate data. They provide a way to reference and modify values within your program. Let's explore some key aspects of Ruby variables.

## Variable Naming

Ruby variable names are case-sensitive and must start with a lowercase letter or an underscore (_). They can contain letters, digits, and underscores. It's good practice to use descriptive names that reflect the purpose of the variable.

`````````ruby
# Valid variable names
age = 25
name = "John"
is_student = true
total_amount = 100.5

# Invalid variable names
123abc = 10    # Cannot start with a digit
full-name = "Jane"  # Cannot contain hyphens
isStudent? = false  # Cannot use question marks or special characters
`````````

## Variable Assignment

To assign a value to a variable, you can use the assignment operator (`=`). Ruby variables are dynamically typed, meaning you don't need to declare their types explicitly. The type is inferred based on the assigned value.

`````````ruby
# Assigning values to variables
name = "John"
age = 25
is_student = true
`````````

## Variable Types

Ruby has built-in support for different types of variables. Here are some common variable types:

- **Numbers**: Ruby supports integers and floating-point numbers. Example: `age = 25`, `weight = 75.5`.
- **Strings**: Ruby represents text using strings. Example: `name = "John"`, `message = 'Hello'`.
- **Booleans**: Ruby has a boolean type that can be either `true` or `false`. Example: `is_student = true`, `has_car = false`.

## Variable Scope

Variable scope defines where a variable can be accessed within your program. Ruby has different types of variable scope, including:

- **Local Variables**: Local variables are declared within a specific block or method and are accessible only within that block or method.
- **Instance Variables**: Instance variables are prefixed with the `@` symbol and are accessible within the scope of an object.
- **Class Variables**: Class variables are prefixed with `@@` and are shared among all instances of a class.
- **Global Variables**: Global variables are prefixed with the `$` symbol and can be accessed from anywhere in your program.

## Conclusion

This tutorial provided an overview of Ruby variables, covering naming conventions, assignment, variable types, and variable scope. Understanding these concepts will help you effectively work with data in Ruby programs.

Take time to practice using variables in different scenarios and explore more advanced features and techniques related to variables in Ruby.
