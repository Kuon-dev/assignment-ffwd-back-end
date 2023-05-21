# Ruby Built-in Functions

Ruby provides a wide range of built-in functions that allow you to perform common operations efficiently. These functions are part of the Ruby core library and can be used directly in your programs. In this tutorial, we'll explore some of the essential built-in functions in Ruby.

## `puts` and `print`

The `puts` and `print` functions are used to output data to the console. They are commonly used for displaying messages or program output. The main difference between them is that `puts` adds a newline character at the end of the output, while `print` does not. Here's an example:

```ruby
puts "Hello, world!"  # Output with newline
print "Hello, world!" # Output without newline
```

## `gets`

The `gets` function is used to read input from the console. It allows the user to enter data, which can be stored in variables for further processing. Here's an example:

```ruby
puts "Enter your name:"
name = gets.chomp
puts "Hello, #{name}!"
```

In the example above, the `gets.chomp` expression reads a line of text from the user and removes the trailing newline character.

## `to_s`, `to_i`, and `to_f`

The `to_s`, `to_i`, and `to_f` functions are used to convert values between different data types. `to_s` converts a value to a string, `to_i` converts a value to an integer, and `to_f` converts a value to a floating-point number. Here's an example:

```ruby
num = 42
puts num.to_s       # Convert to string
puts num.to_f       # Convert to float
puts "3.14".to_f    # Convert string to float
puts "100".to_i     # Convert string to integer
```

## `length`, `size`, and `count`

The `length`, `size`, and `count` functions are used to determine the length or size of an object. They can be applied to strings, arrays, and other enumerable objects. Here's an example:

```ruby
str = "Hello, world!"
arr = [1, 2, 3, 4, 5]

puts str.length     # Length of string
puts arr.size       # Size of array
puts arr.count(3)   # Count occurrences of a value in an array
```

## `split` and `join`

The `split` and `join` functions are used for splitting strings into arrays and joining arrays into strings, respectively. `split` breaks a string into an array based on a specified delimiter, while `join` combines the elements of an array into a string using a specified separator. Here's an example:

```ruby
str = "Hello, world!"
arr = str.split(", ")   # Split string into an array
new_str = arr.join("-") # Join array into a string

puts arr.inspect        # Output array
puts new_str            # Output joined string
```

## Conclusion

Ruby's built-in functions provide a wide range of functionality for performing common tasks. By leveraging these functions, you can simplify your code and achieve desired results more efficiently. Take the time to explore the Ruby documentation to discover more built-in functions and their capabilities.
