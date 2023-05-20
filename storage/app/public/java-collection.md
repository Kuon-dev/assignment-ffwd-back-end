# Java Collections

Collections in Java provide a set of interfaces and classes to store, manipulate, and process groups of objects. They offer various data structures and algorithms for handling collections of elements efficiently. The Java Collections Framework includes interfaces such as `List`, `Set`, `Queue`, and `Map`, along with their implementation classes. In this tutorial, we'll explore some commonly used collections in Java.

## List

A list is an ordered collection of elements that allows duplicates. In Java, the `List` interface extends the `Collection` interface and is implemented by classes such as `ArrayList`, `LinkedList`, and `Vector`. Lists provide methods to add, remove, and access elements at specific positions. Here's an example of using an `ArrayList` as a list in Java:

```java
import java.util.ArrayList;
import java.util.List;

List<String> names = new ArrayList<>();

names.add("Alice"); // Add an element to the list
names.add("Bob");
names.add("Charlie");

int size = names.size(); // Get the size of the list
System.out.println(size); // Output: 3

String secondName = names.get(1); // Access the second element
System.out.println(secondName); // Output: Bob

names.remove(0); // Remove the first element
```

## Set

A set is a collection of unique elements that does not allow duplicates. In Java, the `Set` interface extends the `Collection` interface and is implemented by classes such as `HashSet`, `TreeSet`, and `LinkedHashSet`. Sets provide methods to add, remove, and check the presence of elements. Here's an example of using a `HashSet` as a set in Java:

```java
import java.util.HashSet;
import java.util.Set;

Set<String> names = new HashSet<>();

names.add("Alice"); // Add an element to the set
names.add("Bob");
names.add("Charlie");

int size = names.size(); // Get the size of the set
System.out.println(size); // Output: 3

boolean containsAlice = names.contains("Alice"); // Check if the set contains an element
System.out.println(containsAlice); // Output: true

names.remove("Bob"); // Remove an element from the set
```

## Queue

A queue is a collection that follows the FIFO (First-In-First-Out) principle. In Java, the `Queue` interface extends the `Collection` interface and is implemented by classes such as `LinkedList`, `PriorityQueue`, and `ArrayDeque`. Queues provide methods to add, remove, and access elements. Here's an example of using a `LinkedList` as a queue in Java:

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


