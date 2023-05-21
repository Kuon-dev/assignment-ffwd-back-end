# Java Data Structures

Data structures in Java provide a way to store and organize data efficiently. They are essential for solving complex problems and improving the performance of algorithms. Java provides built-in data structures such as arrays, lists, queues, stacks, sets, and maps, as well as the flexibility to create custom data structures. In this tutorial, we'll explore some commonly used data structures in Java.

## Array

An array is a fixed-size data structure that stores elements of the same type in contiguous memory locations. It provides constant-time access to elements by their index. To work with arrays in Java, you declare the array type, specify the size, and access elements using their index. Here's an example of creating and using an array in Java:

```java
int[] numbers = new int[5]; // Declare an array of size 5

numbers[0] = 10; // Assign value to the first element
numbers[1] = 20; // Assign value to the second element

int thirdElement = numbers[2]; // Access the third element
System.out.println(thirdElement); // Output: 0 (default value for int)
```

## List

A list is an ordered collection of elements that allows duplicates and provides dynamic resizing. In Java, the `List` interface is implemented by various classes such as `ArrayList` and `LinkedList`. Lists provide methods to add, remove, and access elements at specific positions. Here's an example of using an `ArrayList` in Java:

```java
import java.util.ArrayList;

ArrayList<String> names = new ArrayList<>();

names.add("Alice"); // Add an element to the list
names.add("Bob");
names.add("Charlie");

int size = names.size(); // Get the size of the list
System.out.println(size); // Output: 3

String secondName = names.get(1); // Access the second element
System.out.println(secondName); // Output: Bob

names.remove(0); // Remove the first element
```

## Queue

A queue is a data structure that follows the FIFO (First-In-First-Out) principle. Elements are added to the back of the queue and removed from the front. In Java, the `Queue` interface is implemented by classes such as `LinkedList` and `PriorityQueue`. Queues provide methods to add, remove, and access elements. Here's an example of using a `LinkedList` as a queue in Java:

```java
import java.util.LinkedList;
import java.util.Queue;

Queue<String> queue = new LinkedList<>();

queue.add("Apple"); // Add an element to the queue
queue.add("Banana");
queue.add("Cherry");

String frontElement = queue.peek(); // Get the front element
System.out.println(frontElement); // Output: Apple

String removedElement = queue.remove(); // Remove and retrieve the front element
System.out.println(removedElement); // Output: Apple
```

