# Ruby Methods

Methods in Ruby are reusable blocks of code that perform specific tasks. They allow you to encapsulate functionality and make your code more modular and organized.

## Defining a Method

To define a method in Ruby, you use the ````ruby def` keyword followed by the method name, parentheses (optional), and a block of code that represents the method's body. The method name should start with a lowercase letter and can be followed by letters, digits, and underscores.

`````````ruby
def greet
  puts "Hello, World!"
end
`````````

## Calling a Method

Once a method is defined, you can call or invoke it by simply using its name followed by parentheses. If the method doesn't require any arguments, the parentheses can be omitted.

`````````ruby
greet
`````````

## Method Arguments

Methods can accept arguments, which are values passed to the method for it to work with. You can specify the arguments in the method declaration by placing them inside the parentheses.

`````````ruby
def greet(name)
  puts "Hello, #{name}!"
end

greet("Alice")
greet("Bob")
`````````

In the example above, the `greet` method accepts an argument `name` and outputs a personalized greeting.

## Return Values

Methods can also return values using the `return` keyword. The value returned by the method can be assigned to a variable or used in other expressions.

`````````ruby
def add(a, b)
  return a + b
end

result = add(3, 5)
puts result
`````````

In this example, the `add` method takes two arguments `a` and `b` and returns their sum. The return value is stored in the `result` variable and then displayed using `puts`.

## Conclusion

Ruby methods provide a way to organize and reuse code in your programs. By defining methods, you can break down complex tasks into smaller, more manageable parts, making your code easier to read and maintain.
