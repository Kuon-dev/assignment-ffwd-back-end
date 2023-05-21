# C++ Storage Classes

In C++, storage classes are keywords used to define the scope, visibility, and lifetime of variables. They determine where and how variables are stored in memory during program execution. C++ provides several storage classes that serve different purposes. Let's explore each storage class:

## Automatic Storage Class

The `auto` storage class is the default storage class for local variables declared within a block or function. Variables declared with the `auto` keyword are automatically allocated and deallocated within their scope.

Here's an example that demonstrates the use of the `auto` storage class:

```cpp
#include <iostream>

int main() {
    auto x = 10;  // auto keyword deduces the type as int
    auto name = "John";  // auto keyword deduces the type as const char*

    std::cout << "x: " << x << std::endl;
    std::cout << "name: " << name << std::endl;

    return 0;
}
```
In this example, the variables `x` and `name` are declared with the `auto` keyword. The compiler automatically deduces their types based on the assigned values.

## Static Storage Class

The `static` storage class is used to declare variables that retain their values across multiple function calls. The variables declared as `static` are allocated memory once and persist throughout the program's execution.

Here's an example that demonstrates the use of the `static` storage class:

```cpp
#include <iostream>

void increment() {
    static int counter = 0;
    counter++;
    std::cout << "Counter: " << counter << std::endl;
}

int main() {
    increment();
    increment();
    increment();

    return 0;
}
```
In this example, the variable `counter` is declared as `static` inside the `increment` function. Each time the `increment` function is called, the value of `counter` is retained and incremented.

## External Storage Class

The `extern` storage class is used to declare variables that are defined in other files or translation units. It is commonly used when you want to access a variable defined in another file.

Here's an example that demonstrates the use of the `extern` storage class:

```cpp
// File1.cpp
#include <iostream>

extern int sharedVariable;

int main() {
    std::cout << "Shared Variable: " << sharedVariable << std::endl;
    return 0;
}

// File2.cpp
int sharedVariable = 10;
```
In this example, the variable `sharedVariable` is defined in `File2.cpp` and declared as `extern` in `File1.cpp`. The `extern` keyword informs the compiler that the variable is defined elsewhere.

## Register Storage Class

The `register` storage class is used to declare variables that should be stored in CPU registers for faster access. However, the use of `register` keyword is deprecated in modern C++, as compilers are smart enough to optimize variable storage automatically.

## Conclusion

Understanding the different storage classes in C++ is important for controlling the scope, visibility, and lifetime of variables. By using the appropriate storage class, you can manage memory allocation, variable persistence, and optimize performance in your C++ programs.
