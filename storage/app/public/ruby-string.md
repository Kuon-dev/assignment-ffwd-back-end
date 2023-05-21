# Ruby Strings

In Ruby, a string is a sequence of characters enclosed in either single quotes ('') or double quotes (""). Strings are objects and provide a wide range of methods for manipulation and transformation.

## Creating a String

You can create a string by simply enclosing characters within quotes:

`````````ruby
str1 = 'Hello, Ruby!'
str2 = "Welcome to Ruby!"
`````````

In the example above, `str1` is a string created using single quotes, while `str2` is created using double quotes.

## String Interpolation

String interpolation allows you to embed expressions and variables within a string. Use the `#{}` syntax to interpolate values:

`````````ruby
name = "John"
age = 25
message = "My name is #{name} and I'm #{age} years old."
puts message  # Output: "My name is John and I'm 25 years old."
`````````

In the example above, we interpolate the variables `name` and `age` within the string `message`.

## Common String Methods

Ruby provides numerous built-in methods for working with strings. Here are a few commonly used methods:

- `length`: Returns the length of the string.
- `upcase`: Converts the string to uppercase.
- `downcase`: Converts the string to lowercase.
- `reverse`: Reverses the characters in the string.
- `gsub`: Replaces occurrences of a pattern in the string.

`````````ruby
str = "Hello, Ruby!"

puts str.length  # Output: 12
puts str.upcase  # Output: "HELLO, RUBY!"
puts str.downcase  # Output: "hello, ruby!"
puts str.reverse  # Output: "!ybuR ,olleH"
puts str.gsub("Ruby", "World")  # Output: "Hello, World!"
`````````

In the example above, we demonstrate the usage of some common string methods.

## Escape Sequences

Ruby supports escape sequences to represent special characters within a string. Some commonly used escape sequences include:

- ```````n`: Newline
- ```````t`: Tab
- ``````````"`: Double quote
- ```````'`: Single quote
- ``````````````: Backslash

`````````ruby
puts "Hello``````nWorld"  # Output: "Hello```nWorld"
puts "Hello``````tWorld"  # Output: "Hello```tWorld"
puts "She said, ``````"Hello!``````""  # Output: 'She said, "Hello!"'
`````````

In the example above, we use escape sequences to represent newline, tab, and special characters within strings.

## Conclusion

Ruby provides a rich set of features for working with strings. By understanding the basics of string creation, interpolation, common methods, and escape sequences, you can effectively manipulate and process textual data in your Ruby programs.
