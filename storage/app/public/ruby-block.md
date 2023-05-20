# Ruby Blocks

In Ruby, a block is a chunk of code that can be passed to a method for execution. Blocks are used to group statements together and are a fundamental part of Ruby's syntax.

## Block Syntax

In Ruby, blocks are denoted by either `do..end` or curly braces `{}`. They can be used interchangeably, depending on personal preference and the context of the code.

`````````ruby
# Using do..end
3.times do
  puts "Hello, World!"
end

# Using curly braces
3.times { puts "Hello, World!" }
`````````

In the example above, both the `do..end` syntax and the curly braces are used to create a block that prints "Hello, World!" three times.

## Passing Blocks to Methods

One of the primary uses of blocks in Ruby is to pass them as arguments to methods. This allows for flexible and dynamic behavior in your code.

`````````ruby
# Method that takes a block
def greet
  puts "Welcome!"
  yield if block_given?
  puts "Goodbye!"
end

# Calling the method with a block
greet do
  puts "Hello, World!"
end
`````````

In the example above, the `greet` method accepts a block using the `yield` keyword. When calling the method with a block, the code inside the block is executed between the "Welcome!" and "Goodbye!" messages.

## Block Parameters

Blocks can also accept parameters, allowing you to pass data into the block for further processing.

`````````ruby
# Using block parameters
[1, 2, 3].each do |number|
  puts number * 2
end
`````````

In the example above, the `each` method is called on an array and a block with a single parameter `number` is provided. The block multiplies each element of the array by 2 and prints the result.

## Conclusion

Ruby blocks are a powerful construct that enables you to write concise and expressive code. By understanding how to use blocks and their syntax, you can take advantage of their flexibility and enhance the functionality of your Ruby programs.
