# Ruby Comments

Comments in Ruby are used to add explanatory notes or annotations within your code. They are ignored by the Ruby interpreter and have no impact on the program's execution.

## Single-line Comments

To add a single-line comment in Ruby, you can use the ```````ruby #` symbol followed by the comment text. Anything after the `#` symbol on the same line is considered a comment.

`````````ruby
# This is a single-line comment
puts "Hello, World!" # This line prints a greeting
`````````

In the example above, the comment on the first line is ignored by the interpreter, while the comment on the second line provides additional information about the code.

## Multi-line Comments

Ruby doesn't have a specific syntax for multi-line comments. However, you can achieve a similar effect by enclosing multiple lines of code within `=begin` and `=end` markers. Anything between these markers is treated as a comment.

`````````ruby
=begin
This is a multi-line comment.
It can span multiple lines without using the # symbol.
=end

puts "Hello, World!"
`````````

In the example above, the lines between `=begin` and `=end` are treated as comments and are not executed.

## Commenting Out Code

Comments can also be used to temporarily disable or "comment out" a piece of code that you don't want to run. This is useful for debugging or testing purposes.

`````````ruby
# puts "This line won't be executed"
puts "Hello, World!"
`````````

In the example above, the first line is commented out, so it won't be executed. The second line, which is not commented, will run as usual.

## Conclusion

Comments in Ruby are an essential tool for adding clarity and explanations to your code. By using comments effectively, you can make your code more readable and easier to understand for yourself and others.
