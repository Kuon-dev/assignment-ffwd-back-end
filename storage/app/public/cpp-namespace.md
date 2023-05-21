# C++ Namespaces

Namespaces in C++ are used to organize code into logical groups and prevent naming conflicts. They provide a way to group related classes, functions, and variables together. Let's explore how namespaces work in C++.

## Creating and Using Namespaces

To create a namespace, we use the `namespace` keyword followed by the namespace name. Here's an example:

```cpp
#include <iostream>

namespace Math {
    int add(int a, int b) {
        return a + b;
    }
}

int main() {
    int result = Math::add(5, 3); // Access the add() function from the Math namespace
    std::cout << "Result: " << result << std::endl;

    return 0;
}
```

In this example, we create a namespace named `Math` and define a function `add()` inside it. To access the `add()` function, we use the scope resolution operator `::` along with the namespace name. We call `Math::add(5, 3)` to perform the addition.

## Using a Namespace Directive

Instead of using the scope resolution operator every time, we can use a namespace directive to bring the entire namespace into scope. Here's an example:

```cpp
#include <iostream>

namespace Math {
    int add(int a, int b) {
        return a + b;
    }
}

using namespace Math; // Bring the Math namespace into scope

int main() {
    int result = add(5, 3); // Access the add() function directly
    std::cout << "Result: " << result << std::endl;

    return 0;
}
```

In this example, we use the `using` directive to bring the entire `Math` namespace into scope. Now, we can access the `add()` function directly without specifying the namespace. We call `add(5, 3)` to perform the addition.

## Nested and Anonymous Namespaces

C++ also supports nested namespaces and anonymous namespaces. Nested namespaces allow us to further organize our code into hierarchical structures. Here's an example:

```cpp
#include <iostream>

namespace Math {
    namespace Geometry {
        const double Pi = 3.14159;

        double calculateArea(double radius) {
            return Pi * radius * radius;
        }
    }
}

int main() {
    double radius = 2.5;
    double area = Math::Geometry::calculateArea(radius);
    std::cout << "Area: " << area << std::endl;

    return 0;
}
```

In this example, we have a nested namespace `Geometry` inside the `Math` namespace. It contains a constant `Pi` and a function `calculateArea()`. To access them, we use the scope resolution operator `::` to navigate through the nested namespaces.

Anonymous namespaces, denoted by an empty name, are used to define entities with internal linkage within a translation unit. Here's an example:

```cpp
#include <iostream>

namespace {
    void internalFunction() {
        std::cout << "Internal function" << std::endl;
    }
}

int main() {
    internalFunction(); // Call the internal function

    return 0;
}
```

In this example, we define an anonymous namespace and a function `internalFunction()` inside it. The function has internal linkage and can only be accessed within the translation unit where it is defined.

