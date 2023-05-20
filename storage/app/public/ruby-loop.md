# Ruby Loop

In Ruby, loops allow you to execute a block of code repeatedly until a certain condition is met. They provide a way to iterate over collections, perform repetitive tasks, and control the flow of your program. Let's explore the different types of loops available in Ruby.

## 1. While Loop

The `````````while loop````````` continues to execute a block of code as long as a specified condition evaluates to `````````true`````````. The syntax for a `````````while loop````````` in Ruby is as follows:

`````````ruby
while condition
  # code to be executed
end
`````````

The `````````condition````````` is checked before each iteration. If it evaluates to `````````true`````````', the code within the loop is executed. Once the `````````condition````````` becomes `````````false`````````', the loop terminates.

Here's an example of using a `````````while loop````````` to print numbers from 1 to 5:

`````````ruby
# Example
i = 1
while i <= 5 do
  puts i
  i += 1
end
`````````

Output: 1,2,3,4,5
