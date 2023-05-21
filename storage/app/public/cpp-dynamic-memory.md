# C++ Dynamic Memory Management

Dynamic memory management in C++ allows us to allocate and deallocate memory dynamically at runtime. It provides a way to manage memory resources and create data structures of varying sizes. In C++, we can perform dynamic memory management using the `new` and `delete` keywords, as well as the `new[]` and `delete[]` operators. Let's explore how it works.

## Allocating Memory for a Single Object

To allocate memory for a single object dynamically, we use the `new` keyword. Here's an example:

```cpp
#include <iostream>

int main() {
    int* ptr = new int; // Allocate memory for an integer

    *ptr = 42; // Assign a value to the dynamically allocated memory

    std::cout << "Value: " << *ptr << std::endl; // Print the value

    delete ptr; // Deallocate the memory

    return 0;
}
```

In this example, we allocate memory for an integer using `new int`. We assign a value to the dynamically allocated memory and print it. Finally, we deallocate the memory using `delete`.

## Allocating Memory for an Array

To allocate memory for an array dynamically, we use the `new[]` operator. Here's an example:

```cpp
#include <iostream>

int main() {
    int size = 5;
    int* arr = new int[size]; // Allocate memory for an array of integers

    for (int i = 0; i < size; i++) {
        arr[i] = i + 1; // Assign values to the array elements
    }

    for (int i = 0; i < size; i++) {
        std::cout << "Element " << i << ": " << arr[i] << std::endl; // Print the array elements
    }

    delete[] arr; // Deallocate the memory

    return 0;
}
```

In this example, we allocate memory for an array of integers using `new int[size]`. We assign values to the array elements and print them. Finally, we deallocate the memory using `delete[]`.

## Exception Handling in Dynamic Memory Allocation

When allocating memory dynamically, it's important to handle exceptions in case the allocation fails. The `new` operator can throw a `std::bad_alloc` exception if the memory allocation fails. Here's an example:

```cpp
#include <iostream>
#include <new>

int main() {
    try {
        int* ptr = new int[1000000000000]; // Try to allocate a large amount of memory
        delete[] ptr;
    }
    catch (const std::bad_alloc& e) {
        std::cout << "Memory allocation failed: " << e.what() << std::endl;
    }

    return 0;
}
```

In this example, we try to allocate a large amount of memory using `new int[1000000000000]`. Since such a large allocation is not possible, it will throw a `std::bad_alloc` exception. We catch the exception and handle it by printing an error message.

## Conclusion

Dynamic memory management in C++ allows us to allocate and deallocate memory at runtime. It provides flexibility in creating data structures of varying sizes. However, it's important to manage dynamic memory carefully and deallocate it when it is no longer needed to avoid memory leaks.
