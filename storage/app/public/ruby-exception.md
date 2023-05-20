# Ruby Exception Handling

Exception handling is a powerful mechanism in Ruby that allows you to handle and manage errors in your code. By using exception handling, you can gracefully recover from unexpected situations and ensure that your program doesn't terminate abruptly.

## The `begin`-`rescue`-`end` Block

The primary construct for exception handling in Ruby is the `begin`-`rescue`-`end` block. Code that may raise an exception is enclosed within the `begin` block, and any potential exceptions are caught and handled in the `rescue` block.

```ruby
begin
  # Code that may raise an exception
rescue ExceptionType
  # Code to handle the exception
end
```

In the example above, the code within the `begin` block is executed, and if an exception of `ExceptionType` is raised, it is caught by the `rescue` block. You can replace `ExceptionType` with the specific type of exception you want to handle, such as `StandardError` or a custom exception class.

## Handling Specific Exceptions

To handle specific types of exceptions, you can specify the exception class in the `rescue` block.

```ruby
begin
  # Code that may raise an exception
rescue TypeError
  # Code to handle TypeError
rescue ArgumentError
  # Code to handle ArgumentError
end
```

In the example above, the first `rescue` block handles `TypeError`, and the second `rescue` block handles `ArgumentError`. You can have multiple `rescue` blocks to handle different exception types.

## Handling Multiple Exceptions

You can handle multiple exceptions with a single `rescue` block by specifying multiple exception classes separated by commas.

```ruby
begin
  # Code that may raise an exception
rescue TypeError, ArgumentError
  # Code to handle TypeError or ArgumentError
end
```

In the example above, the `rescue` block handles both `TypeError` and `ArgumentError` exceptions.

## The `ensure` Block

The `ensure` block is used to specify code that should be executed regardless of whether an exception is raised or not. It is placed after the `rescue` block.

```ruby
begin
  # Code that may raise an exception
rescue ExceptionType
  # Code to handle the exception
ensure
  # Code to execute regardless of an exception
end
```

In the example above, the code within the `ensure` block will always be executed, regardless of whether an exception is raised or caught.

## Raising Exceptions

You can raise exceptions explicitly in your code using the `raise` keyword. This allows you to generate and handle your own exceptions.

```ruby
def divide(x, y)
  raise ArgumentError, "Divisor cannot be zero" if y == 0

  x / y
end
```

In the example above, the `divide` method raises an `ArgumentError` exception with a custom error message if the divisor (`y`) is zero.

## Handling Unhandled Exceptions

If an exception is not caught and handled within your code, it will propagate up the call stack until it is either caught or causes your program to terminate. By default, unhandled exceptions print a stack trace and terminate the program.

## Conclusion

Exception handling is a vital aspect of writing robust and reliable code. By using the `begin`-`rescue`-`end` block and other exception handling techniques in Ruby, you can effectively manage errors and ensure that your program gracefully handles unexpected situations.
