# Ruby Iterators

Iterators are an essential part of Ruby's programming paradigm. They allow you to perform repetitive tasks on collections of data, such as arrays or hashes, without having to write explicit looping constructs. Ruby provides a variety of built-in iterators that make it easy to iterate over data and perform operations on each element.

## `each` Iterator

The `each` iterator is the most commonly used iterator in Ruby. It allows you to iterate over each element of a collection and perform a specific operation on each element.

```ruby
# Example: Iterating over an array
fruits = ["apple", "banana", "orange"]

fruits.each do |fruit|
  puts "I love #{fruit}s"
end
```

In the example above, we use the `each` iterator to iterate over each element of the `fruits` array. The iterator assigns each element to the block variable `fruit`, and we print a message using that variable.

## Other Common Iterators

Ruby provides several other commonly used iterators that offer different functionalities depending on the situation. Here are a few examples:

### `times` Iterator

The `times` iterator allows you to execute a block of code a specified number of times.

```ruby
3.times do |count|
  puts "Iteration #{count + 1}"
end
```

In the example above, the block of code within the `times` iterator is executed three times, and the block variable `count` represents the current iteration.

### `map` Iterator

The `map` iterator applies a given block of code to each element of a collection and returns a new collection containing the results.

```ruby
numbers = [1, 2, 3, 4, 5]

squared_numbers = numbers.map do |number|
  number ** 2
end

puts squared_numbers  # Output: [1, 4, 9, 16, 25]
```

In the example above, we use the `map` iterator to square each number in the `numbers` array and store the squared values in a new array called `squared_numbers`.

### `select` Iterator

The `select` iterator filters a collection based on a condition specified in the block and returns a new collection containing the elements that meet the condition.

```ruby
numbers = [1, 2, 3, 4, 5]

even_numbers = numbers.select do |number|
  number.even?
end

puts even_numbers  # Output: [2, 4]
```

In the example above, we use the `select` iterator to filter out even numbers from the `numbers` array and store them in a new array called `even_numbers`.

## Custom Iterators

Ruby also allows you to define your own custom iterators using blocks and the `yield` keyword. This gives you the flexibility to create iterators that suit your specific needs.

```ruby
def repeat_three_times
  3.times do
    yield
  end
end

repeat_three_times do
  puts "Hello, world!"
end
```

In the example above, we define a custom iterator called `repeat_three_times` that executes the block of code passed to it three times using the `yield` keyword.

Iterators are a powerful feature in Ruby that simplify and enhance your code by providing concise and expressive ways to perform repetitive operations on data collections. Understanding how to use and create iterators will greatly improve your productivity as a Ruby programmer.
