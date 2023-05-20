# Java Arrays

In Java, an array is a container object that holds a fixed number of values of the same type. Arrays are widely used for storing and manipulating collections of data elements.

## Declaring and Initializing Arrays

To declare an array in Java, you need to specify the type of elements it will hold, followed by the array name and the array size. Here's an example:

```java
int[] numbers = new int[5];
```

In the above example, an integer array named `numbers` is declared with a size of 5. The `new int[5]` expression creates an array object with space for 5 integer elements.

Alternatively, you can also initialize an array with values at the time of declaration. Here's an example:

```java
int[] numbers = {1, 2, 3, 4, 5};
```

In this case, the array is declared and initialized with the specified values.

## Accessing Array Elements

You can access individual elements of an array using their index. Array indexes start from 0 for the first element and go up to `array.length - 1` for the last element. Here's an example:

```java
int[] numbers = {1, 2, 3, 4, 5};
int firstElement = numbers[0]; // Accessing the first element
int lastElement = numbers[numbers.length - 1]; // Accessing the last element
```

In the above example, the first and last elements of the `numbers` array are accessed using their respective indexes.

## Array Length

To determine the length or size of an array in Java, you can use the `length` property. Here's an example:

```java
int[] numbers = {1, 2, 3, 4, 5};
int arrayLength = numbers.length;
```

In the above example, the `length` property is used to retrieve the size of the `numbers` array.

## Iterating Over an Array

You can iterate over the elements of an array using loops, such as the `for` loop or the enhanced `for-each` loop. Here's an example using a `for` loop:

```java
int[] numbers = {1, 2, 3, 4, 5};

for (int i = 0; i < numbers.length; i++) {
    System.out.println(numbers[i]);
}
```

In the above example, each element of the `numbers` array is printed using a `for` loop.

## Array Methods

The `java.util.Arrays` class provides several utility methods for working with arrays in Java. Some commonly used methods include:

- `toString(array)`: Converts an array into a string representation.
- `sort(array)`: Sorts the elements of an array in ascending order.
- `binarySearch(array, key)`: Searches for a specific element in the sorted array using binary search.

These are just a few examples of the methods available in the `java.util.Arrays` class.

Arrays are a fundamental data structure in Java, and understanding how to declare, initialize, and manipulate arrays is essential for any Java programmer.
