# Ruby File Handling

File handling is a crucial aspect of many programming tasks, and Ruby provides a convenient set of methods and classes for working with files. Whether you need to read data from a file, write data to a file, or perform other file-related operations, Ruby offers straightforward and efficient solutions.

## Reading from a File

To read data from a file in Ruby, you can use the `File.open` method along with an iterator such as `each_line` or `readlines`.

```ruby
# Example: Reading a file using each_line
File.open("myfile.txt", "r") do |file|
  file.each_line do |line|
    puts line
  end
end
```

In the example above, we open the file named "myfile.txt" in read-only mode using `File.open`. We then iterate over each line in the file using the `each_line` method and print each line to the console.

## Writing to a File

To write data to a file in Ruby, you can use the `File.open` method with the "w" mode or the `File.write` method.

```ruby
# Example: Writing to a file using File.open
File.open("myfile.txt", "w") do |file|
  file.puts "Hello, world!"
  file.puts "This is a new line."
end
```

In the example above, we open the file named "myfile.txt" in write mode using `File.open`. We then use the `puts` method to write two lines of text to the file.

## File Operations

Ruby provides various other file operations, such as checking if a file exists, deleting a file, or renaming a file. Here are a few examples:

### Checking if a File Exists

To check if a file exists, you can use the `File.exist?` method.

```ruby
if File.exist?("myfile.txt")
  puts "File exists!"
else
  puts "File does not exist."
end
```

### Deleting a File

To delete a file, you can use the `File.delete` method.

```ruby
File.delete("myfile.txt")
```

### Renaming a File

To rename a file, you can use the `File.rename` method.

```ruby
File.rename("myfile.txt", "newfile.txt")
```

## Closing Files

When you're finished working with a file, it's important to close it to release system resources. In Ruby, when you use `File.open` with a block, the file is automatically closed for you.

If you open a file without a block, you should manually close it using the `close` method.

```ruby
file = File.open("myfile.txt", "r")
# Do something with the file...
file.close
```

Closing files properly ensures that your code behaves correctly and prevents any potential resource leaks.

## Summary

Working with files is a fundamental task in many programming scenarios, and Ruby provides a rich set of file handling capabilities. Whether you need to read data from a file, write data to a file, or perform other file operations, Ruby's file handling features make it easy and efficient to work with files in your programs.
