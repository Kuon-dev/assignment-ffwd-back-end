# Java Multithreading

Multithreading in Java allows you to write programs that can perform multiple tasks concurrently. It enables you to execute multiple threads of execution within a single program, making efficient use of available system resources. In this tutorial, we'll explore the basics of multithreading in Java.

## Creating Threads

In Java, you can create threads by extending the `Thread` class or implementing the `Runnable` interface. Here's an example of creating a thread by extending the `Thread` class:

```java
class MyThread extends Thread {
    public void run() {
        // Code to be executed in the thread
    }
}

// Create and start the thread
MyThread myThread = new MyThread();
myThread.start();
```

In the above example, the `run` method contains the code to be executed in the thread. To start the thread, you create an instance of `MyThread` and call the `start` method.

Alternatively, you can create a thread by implementing the `Runnable` interface. Here's an example:

```java
class MyRunnable implements Runnable {
    public void run() {
        // Code to be executed in the thread
    }
}

// Create a thread using the Runnable implementation
Thread myThread = new Thread(new MyRunnable());
myThread.start();
```

In this example, the `run` method of `MyRunnable` contains the code to be executed. The `MyRunnable` class is passed as an argument to the `Thread` constructor, and the resulting thread is started.

## Thread Synchronization

When multiple threads access shared resources concurrently, thread synchronization is necessary to ensure data integrity and prevent race conditions. In Java, you can use synchronization mechanisms such as `synchronized` blocks and `Lock` interfaces to achieve thread synchronization.

### Synchronized Blocks

Synchronized blocks allow you to specify a block of code that can be accessed by only one thread at a time. This ensures that the shared resource is accessed in a thread-safe manner. Here's an example:

```java
class Counter {
    private int count = 0;

    public void increment() {
        synchronized (this) {
            count++;
        }
    }

    public int getCount() {
        synchronized (this) {
            return count;
        }
    }
}
```

In the above example, the `increment` and `getCount` methods are synchronized using the `synchronized` keyword with the `this` reference. This ensures that only one thread can access the `count` variable at a time.

### Lock Interfaces

Java provides the `Lock` interface and its implementations, such as `ReentrantLock`, for fine-grained control over thread synchronization. Here's an example using the `ReentrantLock` class:

```java
import java.util.concurrent.locks.*;

class Counter {
    private int count = 0;
    private Lock lock = new ReentrantLock();

    public void increment() {
        lock.lock();
        try {
            count++;
        } finally {
            lock.unlock();
        }
    }

    public int getCount() {
        lock.lock();
        try {
            return count;
        } finally {
            lock.unlock();
        }
    }
}
```

In this example, the `ReentrantLock` is used to acquire and release the lock explicitly using the `lock` and `unlock` methods. The `try-finally` block ensures that the lock is always released, even if an exception occurs.

## Thread Intercommunication

Threads often need to communicate and coordinate with each other. Java provides several mechanisms for thread intercommunication, such as `wait`, `notify`, and `notifyAll` methods.


