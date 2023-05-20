# Multithreading in Ruby

Multithreading allows you to perform multiple tasks concurrently within a single Ruby program. It can be useful for improving performance, handling concurrent operations, and making your program more responsive. In this tutorial, we'll explore how to use multithreading in Ruby.

## Creating Threads

To create a new thread in Ruby, you can use the `Thread.new` method and provide a block of code to be executed concurrently. Here's an example:

```ruby
threads = []

5.times do |i|
  threads << Thread.new(i) do |count|
    puts "Thread #{count} is running"
    sleep rand(5)
    puts "Thread #{count} finished"
  end
end

threads.each(&:join)
```

In the example above, we create five threads using a loop. Each thread prints a message indicating its ID, sleeps for a random amount of time, and then prints a completion message. The `join` method is used to wait for all threads to finish execution.

## Synchronizing Threads

When multiple threads access shared resources or modify shared variables, it's important to synchronize their operations to avoid conflicts and ensure data integrity. Ruby provides synchronization primitives like `Mutex` to achieve thread-safe synchronization. Here's an example:

```ruby
mutex = Mutex.new
shared_value = 0

threads = []

5.times do
  threads << Thread.new do
    mutex.synchronize do
      shared_value += 1
    end
  end
end

threads.each(&:join)

puts "Final value of shared variable: #{shared_value}"
```

In the example above, we use a `Mutex` object to synchronize access to the `shared_value` variable. Each thread increments the value within the mutex's synchronized block. The `join` method ensures that all threads finish their execution before printing the final value of the shared variable.

## Handling Exceptions in Threads

When an exception occurs within a thread, it can be challenging to handle and propagate the exception to the main thread. To handle exceptions in threads, you can use the `Thread#raise` method to raise an exception within the thread and the `Thread#join` method to capture the exception. Here's an example:

```ruby
threads = []

5.times do |i|
  threads << Thread.new(i) do |count|
    begin
      if count == 3
        raise "Exception occurred in thread #{count}"
      else
        puts "Thread #{count} is running"
        sleep rand(5)
        puts "Thread #{count} finished"
      end
    rescue => e
      puts "Exception: #{e.message}"
    end
  end
end

threads.each(&:join)
```

In the example above, we intentionally raise an exception in thread 3 to demonstrate exception handling. The exception is caught within the thread's `rescue` block, and the error message is printed. The other threads continue their execution as usual.

## Conclusion

Multithreading in Ruby allows you to perform concurrent tasks and improve the performance and responsiveness of your programs. By creating threads, synchronizing access to shared resources, and handling exceptions, you can effectively leverage multithreading in your Ruby applications. However, it's essential to be cautious of potential race conditions and ensure thread safety when dealing with shared data.
