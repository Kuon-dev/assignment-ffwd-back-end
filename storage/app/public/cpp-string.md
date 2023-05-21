# C++ Strings

In C++, a string is a sequence of characters. C++ provides a `string` class that allows you to work with strings conveniently. Strings are useful when you need to store and manipulate textual data.

## Including the String Library

To use strings in C++, you need to include the `<string>` library.

```cpp
#include <string>
```

## Declaring and Initializing Strings

To declare a string variable, you use the `string` class and provide a name for the variable. Here's the general syntax:

```cpp
string variableName;
```

For example:

```cpp
string message;
```

You can initialize a string at the time of declaration using an assignment operator and a string literal:

```cpp
string message = "Hello, world!";
```

In this case, the string variable `message` is initialized with the value "Hello, world!".

## String Operations

C++ provides various operations to work with strings. Here are some common operations:

- **Concatenation**: You can concatenate strings using the `+` operator.

    ```cpp
    string firstName = "John";
    string lastName = "Doe";
    string fullName = firstName + " " + lastName;
    ```

    In this example, the `fullName` string is created by concatenating the `firstName`, a space, and the `lastName`.

- **Length**: You can get the length of a string using the `length()` or `size()` member functions.

    ```cpp
    string message = "Hello, world!";
    int length = message.length();
    ```

    In this example, the `length` variable will contain the length of the string.

- **Accessing Characters**: You can access individual characters of a string using the indexing operator `[]`.

    ```cpp
    string message = "Hello, world!";
    char firstChar = message[0];
    ```

    In this example, the `firstChar` variable will contain the first character of the string.

- **Substring**: You can extract a substring from a string using the `substr()` member function.

    ```cpp
    string message = "Hello, world!";
    string substring = message.substr(0, 5);
    ```

    In this example, the `substring` variable will contain the first 5 characters of the string.

- **Comparing Strings**: You can compare two strings using comparison operators such as `==`, `!=`, `<`, `>`, `<=`, and `>=`.

    ```cpp
    string name1 = "John";
    string name2 = "Doe";
    if (name1 == name2) {
        // Strings are equal
    } else {
        // Strings are not equal
    }
    ```

    In this example, we compare two strings and perform different actions based on the result.

These are just a few examples of operations you can perform with strings in C++. The `string` class provides many more member functions and capabilities for string manipulation.

## Input and Output

You can input and output strings using the standard input/output streams `cin` and `cout`. Here's an example:

```cpp
#include <iostream>
using namespace std;

int main() {
    string name;
    cout << "Enter your name: ";
    cin >> name;
    cout << "Hello, " << name << "!" << endl;
    return 0;
}
```

