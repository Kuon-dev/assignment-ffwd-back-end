# C++ Data Structures

Data structures are fundamental building blocks in computer science and programming. They provide a way to organize and store data efficiently, enabling us to perform operations and solve problems effectively. In C++, there are several built-in and user-defined data structures available. In this tutorial, we will explore some of the commonly used data structures.

## Arrays

An array is a contiguous block of memory that stores a fixed-size sequence of elements of the same type. It provides direct access to its elements using an index. Here's an example of declaring and accessing elements in an array:

```cpp
#include <iostream>

int main() {
    int numbers[5] = {1, 2, 3, 4, 5};

    // Accessing elements
    std::cout << "Element at index 0: " << numbers[0] << std::endl;
    std::cout << "Element at index 2: " << numbers[2] << std::endl;

    return 0;
}
```

In this example, we declare an array `numbers` with a size of 5 and initialize its elements. We can access individual elements using square brackets `[]` and the index of the element.

## Vectors

Vectors are dynamic arrays that can grow or shrink in size as needed. They provide a more flexible alternative to arrays. The `std::vector` class in the `<vector>` header provides a convenient interface to work with vectors. Here's an example:

```cpp
#include <iostream>
#include <vector>

int main() {
    std::vector<int> numbers;

    // Adding elements
    numbers.push_back(1);
    numbers.push_back(2);
    numbers.push_back(3);

    // Accessing elements
    std::cout << "Element at index 0: " << numbers[0] << std::endl;
    std::cout << "Element at index 2: " << numbers[2] << std::endl;

    return 0;
}
```

In this example, we create a vector `numbers` using the `std::vector` class. We can add elements to the vector using the `push_back()` function and access elements using square brackets `[]` and the index.

## Linked Lists

A linked list is a data structure consisting of nodes, where each node contains a value and a pointer to the next node. It provides efficient insertion and deletion at any position. While C++ does not have a built-in linked list, we can implement one using custom classes and pointers. Here's an example:

```cpp
#include <iostream>

struct Node {
    int data;
    Node* next;
};

int main() {
    // Create nodes
    Node* node1 = new Node();
    Node* node2 = new Node();
    Node* node3 = new Node();

    // Assign data
    node1->data = 1;
    node2->data = 2;
    node3->data = 3;

    // Connect nodes
    node1->next = node2;
    node2->next = node3;
    node3->next = nullptr;

    // Accessing elements
    std::cout << "Element at node 1: " << node1->data << std::endl;
    std::cout << "Element at node 2: " << node1->next->data << std::endl;

    // Free memory
    delete node1;
    delete node2;
    delete node3;

    return 0;
}
```


