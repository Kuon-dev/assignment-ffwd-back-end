# Ruby If-Else

In Ruby, the `if-else` statement allows you to execute different blocks of code based on a specific condition. It is a fundamental control structure that helps you control the flow of your program. Let's explore how to use the `if-else` statement in Ruby.

## Basic If-Else Statement

The basic `if-else` statement consists of an `if` condition followed by an optional `else` block. If the condition is true, the code inside the `if` block is executed; otherwise, the code inside the `else` block is executed.

`````````ruby
# Example
x = 10

if x > 5
  puts "x is greater than 5"
else
  puts "x is less than or equal to 5"
end
`````````

## If-Elseif-Else Statement

You can use the `elsif` keyword to add additional conditions to your `if-else` statement. This allows you to test multiple conditions and execute different code blocks accordingly.

`````````ruby
# Example
x = 10

if x > 10
  puts "x is greater than 10"
elsif x < 10
  puts "x is less than 10"
else
  puts "x is equal to 10"
end
`````````

## Inline If-Else Statement

In Ruby, you can also use the inline or ternary `if-else` statement to write more concise code. It allows you to execute a single statement based on a condition.

`````````ruby
# Example
x = 10

result = x > 5 ? "x is greater than 5" : "x is less than or equal to 5"
puts result
`````````

## Nested If-Else Statement

You can nest `if-else` statements within each other to create more complex conditional structures. This allows you to test multiple conditions and execute different code blocks based on various scenarios.

`````````ruby
# Example
x = 10
y = 5

if x > 5
  if y > 3
    puts "x is greater than 5 and y is greater than 3"
  else
    puts "x is greater than 5 but y is not greater than 3"
  end
else
  puts "x is not greater than 5"
end
`````````

## Conclusion

The `if-else` statement is a powerful tool in Ruby that allows you to control the flow of your program based on specific conditions. By understanding its syntax and variations, you can write more dynamic and flexible code. Practice using `if-else` statements in different scenarios to gain proficiency and make your programs more robust.
