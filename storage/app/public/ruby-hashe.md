# Ruby Hashes

A hash, also known as an associative array or dictionary, is an unordered collection of key-value pairs in Ruby. It allows you to store and retrieve values based on a unique key.

## Creating a Hash

You can create a hash by enclosing key-value pairs within curly braces ({}), with each pair separated by a comma. The key and value are separated by a colon (:).

`````````ruby
# Creating a hash with string keys
student = { "name" => "John", "age" => 25, "major" => "Computer Science" }

# Creating a hash with symbol keys (Ruby 1.9+)
student = { name: "John", age: 25, major: "Computer Science" }
`````````

In the example above, we create a hash called `student` with different key-value pairs. The first hash uses string keys, while the second hash uses symbol keys.

## Accessing Hash Values

You can access the value of a specific key in a hash using square brackets ([]). Provide the key inside the brackets to retrieve the corresponding value.

`````````ruby
student = { name: "John", age: 25, major: "Computer Science" }

puts student[:name]  # Output: "John"
puts student[:age]   # Output: 25
puts student[:major] # Output: "Computer Science"
`````````

In the example above, we access and print the values associated with the keys `:name`, `:age`, and `:major` in the `student` hash.

## Modifying Hash Values

You can modify the value of a specific key in a hash by assigning a new value to that key.

`````````ruby
student = { name: "John", age: 25, major: "Computer Science" }

student[:age] = 26
student[:major] = "Electrical Engineering"

puts student.inspect
# Output: {:name=>"John", :age=>26, :major=>"Electrical Engineering"}
`````````

In the example above, we modify the values of the `:age` and `:major` keys in the `student` hash.

## Common Hash Methods

Ruby provides several built-in methods for working with hashes. Here are some commonly used methods:

- `keys`: Returns an array of all the keys in the hash.
- `values`: Returns an array of all the values in the hash.
- `has_key?` or `key?`: Checks if a specific key exists in the hash.
- `has_value?` or `value?`: Checks if a specific value exists in the hash.

`````````ruby
student = { name: "John", age: 25, major: "Computer Science" }

puts student.keys.inspect  # Output: [:name, :age, :major]
puts student.values.inspect  # Output: ["John", 25, "Computer Science"]
puts student.has_key?(:name)  # Output: true
puts student.has_value?("Math")  # Output: false
`````````

In the example above, we demonstrate the usage of some common hash methods.

## Conclusion

Hashes are powerful data structures in Ruby that allow you to store and retrieve values based on unique keys. By understanding how to create hashes, access and modify values, and utilize common hash methods, you can effectively work with key-value pairs in your Ruby programs.
