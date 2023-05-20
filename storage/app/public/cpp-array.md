# C++ Arrays

In C++, an array is a collection of elements of the same data type, stored in contiguous memory locations. Arrays allow you to store multiple values under a single variable name. They are useful when you need to work with a fixed-size collection of elements.

## Declaring and Initializing Arrays

To declare an array in C++, you specify the data type of its elements and the size of the array. Here's the general syntax:

```cpp
dataType arrayName[arraySize];
```

For example, to declare an array of integers with a size of 5:

```cpp
int numbers[5];
```

You can also initialize the array elements at the time of declaration using an initializer list:

```cpp
int numbers[] = {1, 2, 3, 4, 5};
```

In this case, the size of the array is determined automatically based on the number of elements in the initializer list.

## Accessing Array Elements

Array elements are accessed using zero-based indexing. The first element of an array has an index of 0, the second element has an index of 1, and so on. To access an element, you use the array name followed by the index in square brackets.

Example:

```cpp
int numbers[5] = {1, 2, 3, 4, 5};
int firstNumber = numbers[0]; // Access the first element
int thirdNumber = numbers[2]; // Access the third element
```

In this example, we declare an array of integers and access the first and third elements using their respective indices.

## Modifying Array Elements

You can modify array elements by assigning new values to them. Use the array name followed by the index in square brackets on the left side of the assignment operator.

Example:

```cpp
int numbers[3] = {1, 2, 3};
numbers[1] = 10; // Modify the second element
```

In this example, we modify the second element of the array to have a new value of 10.

## Array Size

You can determine the size of an array using the `sizeof` operator. The `sizeof` operator returns the size of the array in bytes.

Example:

```cpp
int numbers[5] = {1, 2, 3, 4, 5};
int size = sizeof(numbers) / sizeof(numbers[0]);
```

In this example, we calculate the size of the array by dividing the total size of the array by the size of a single element.

## Looping Through Arrays

To iterate over the elements of an array, you can use loops such as `for` or `while`. By using a loop, you can perform operations on each element of the array.

Example:

```cpp
int numbers[] = {1, 2, 3, 4, 5};
int sum = 0;
for (int i = 0; i < sizeof(numbers) / sizeof(numbers[0]); i++) {
    sum += numbers[i];
}
```

In this example, we calculate the sum of all elements in the array by iterating over each element using a `for` loop.

Arrays are a fundamental data structure in C++ and provide a convenient way to work with collections of values. Understanding how to declare, access, and manipulate arrays will help you handle data more efficiently in your programs.
