# Ruby Syntax

Ruby has a clean and expressive syntax that emphasizes readability and simplicity. In this tutorial, we'll explore some key aspects of Ruby's syntax.

## Comments

In Ruby, you can add comments to your code to provide explanations or disable specific lines. Comments start with a `#` character and continue until the end of the line.

`````````ruby
# This is a single-line comment

=begin
This is a multi-line comment.
It can span multiple lines.
=end
`````````

## Variables

Variables in Ruby are dynamically typed and do not require explicit type declarations. You can assign a value to a variable using the assignment operator `=`. Here's an example:

`````````ruby
name = "John"
age = 25
is_student = true
`````````

## Output

To display information to the console, you can use the `puts` method. It adds a new line after the output. Alternatively, you can use the `print` method, which does not add a new line.

`````````ruby
puts "Hello, World!"  # Output: Hello, World!
print "Welcome!"      # Output: Welcome!
`````````

## Conditionals

Ruby provides several ways to express conditional logic. The most common one is the `if` statement, which allows you to execute a block of code based on a condition.

`````````ruby
if condition
  # Code to execute if the condition is true
else
  # Code to execute if the condition is false
end
`````````

## Loops

Ruby offers different types of loops, such as `while`, `until`, and `for`. The `while` loop executes a block of code as long as a condition is true, while the `until` loop executes a block of code until a condition becomes true.

`````````ruby
while condition
  # Code to execute while the condition is true
end

until condition
  # Code to execute until the condition is true
end
`````````

## Methods

Methods in Ruby are defined using the `def` keyword, followed by the method name and optional parameters. The method body is enclosed in a block.

`````````ruby
def greet(name)
  puts "Hello, #{name}!"
end
`````````

## Conclusion

This tutorial provided an overview of Ruby's syntax, covering comments, variables, output, conditionals, loops, and methods. Understanding these fundamental concepts will help you write clean and expressive Ruby code.

Keep practicing and exploring the Ruby language to become more comfortable with its syntax and unleash the full potential of Ruby in your projects.
