# Ruby Arrays

An array is an ordered collection of objects in Ruby. It is a versatile data structure that allows you to store and manipulate multiple values under a single variable name.

## Creating an Array

You can create an array by enclosing elements within square brackets ([]). Arrays can contain objects of different types, including numbers, strings, or even other arrays.

`````````ruby
# Creating an array of numbers
numbers = [1, 2, 3, 4, 5]

# Creating an array of strings
fruits = ["apple", "banana", "orange"]

# Creating an array of mixed types
mixed = [1, "hello", true]
`````````

In the example above, we create arrays `numbers`, `fruits`, and `mixed` with different types of elements.

## Accessing Array Elements

You can access individual elements of an array using their index. In Ruby, array indices start from 0, so the first element has an index of 0, the second element has an index of 1, and so on.

`````````ruby
fruits = ["apple", "banana", "orange"]

puts fruits[0]  # Output: "apple"
puts fruits[1]  # Output: "banana"
puts fruits[2]  # Output: "orange"
`````````

In the example above, we access and print individual elements of the `fruits` array.

## Modifying Array Elements

You can modify array elements by assigning new values to specific indices.

`````````ruby
numbers = [1, 2, 3, 4, 5]

numbers[2] = 10

puts numbers.inspect  # Output: "[1, 2, 10, 4, 5]"
`````````

In the example above, we modify the third element of the `numbers` array by assigning a new value to index 2.

## Common Array Methods

Ruby provides a variety of built-in methods for working with arrays. Here are some commonly used methods:

- `length` or `size`: Returns the number of elements in the array.
- `push` or `<<`: Adds an element to the end of the array.
- `pop`: Removes and returns the last element of the array.
- `join`: Concatenates array elements into a string.
- `sort`: Sorts the elements in the array.

`````````ruby
numbers = [3, 1, 4, 2, 5]

puts numbers.length  # Output: 5
numbers.push(6)
puts numbers.inspect  # Output: "[3, 1, 4, 2, 5, 6]"
puts numbers.pop  # Output: 6
puts numbers.join(", ")  # Output: "3, 1, 4, 2, 5"
puts numbers.sort.inspect  # Output: "[1, 2, 3, 4, 5]"
`````````

In the example above, we demonstrate the usage of some common array methods.

## Conclusion

Arrays are fundamental data structures in Ruby that allow you to store and manipulate collections of objects. By understanding how to create arrays, access and modify elements, and utilize common array methods, you can effectively work with multiple values in your Ruby programs.
