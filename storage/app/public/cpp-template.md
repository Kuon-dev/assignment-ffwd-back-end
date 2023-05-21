# C++ Templates

Templates in C++ allow us to write generic code that can work with different types. They provide a powerful mechanism for creating reusable algorithms and data structures. Let's explore how templates work in C++.

## Function Templates

Function templates allow us to define a generic function that can operate on different types. Here's an example of a function template that swaps two values:

```cpp
#include <iostream>

template <typename T>
void swapValues(T& a, T& b) {
    T temp = a;
    a = b;
    b = temp;
}

int main() {
    int num1 = 5, num2 = 10;
    std::cout << "Before swap: num1 = " << num1 << ", num2 = " << num2 << std::endl;
    swapValues(num1, num2);
    std::cout << "After swap: num1 = " << num1 << ", num2 = " << num2 << std::endl;

    double val1 = 3.14, val2 = 2.718;
    std::cout << "Before swap: val1 = " << val1 << ", val2 = " << val2 << std::endl;
    swapValues(val1, val2);
    std::cout << "After swap: val1 = " << val1 << ", val2 = " << val2 << std::endl;

    return 0;
}
```

In this example, we define a function template `swapValues()` that takes two arguments of type `T` and swaps their values. The `typename` keyword is used to specify the generic type parameter. We can then call the `swapValues()` function with different types, such as `int` and `double`, to perform value swapping.

## Class Templates

Class templates allow us to define generic classes that can work with different types. Here's an example of a class template for a simple stack:

```cpp
#include <iostream>

template <typename T>
class Stack {
private:
    T* elements;
    int top;
    int capacity;

public:
    Stack(int size) {
        capacity = size;
        elements = new T[capacity];
        top = -1;
    }

    ~Stack() {
        delete[] elements;
    }

    void push(T value) {
        if (top < capacity - 1) {
            elements[++top] = value;
        } else {
            std::cout << "Stack overflow!" << std::endl;
        }
    }

    T pop() {
        if (top >= 0) {
            return elements[top--];
        } else {
            std::cout << "Stack underflow!" << std::endl;
            return T();
        }
    }

    bool isEmpty() {
        return top == -1;
    }
};

int main() {
    Stack<int> intStack(5);
    intStack.push(10);
    intStack.push(20);
    intStack.push(30);
    std::cout << "Popped value: " << intStack.pop() << std::endl;

    Stack<double> doubleStack(3);
    doubleStack.push(3.14);
    doubleStack.push(2.718);
    std::cout << "Popped value: " << doubleStack.pop() << std::endl;

    return 0;
}
```

In this example, we define a class template `Stack` that represents a stack data structure. The `T` type parameter is used to define the type of elements in the stack. We can then instantiate
