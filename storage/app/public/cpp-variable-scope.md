# C++ Variable Scope

In C++, the scope of a variable refers to the region or portion of the program where the variable is visible and can be accessed. The scope of a variable is determined by its declaration and can vary based on where it is defined within the program.

## Global Scope

Variables declared outside of any function or block have a global scope. They can be accessed from any part of the program, including other functions or blocks. Global variables are defined at the beginning of the program and remain in memory throughout its execution.

``cpp
``#include <iostream>

int globalVariable = 10;    // Global variable

void myFunction() {
    std::cout << "Global variable value: " << globalVariable << std::endl;
}

int main() {
    myFunction();
    return 0;
}

## Local Scope

Variables declared inside a function or block have a local scope. They are only accessible within that specific function or block. Local variables are created when the function or block is executed and destroyed when it exits.

``cpp
``#include <iostream>

void myFunction() {
    int localVariable = 5;    // Local variable
    std::cout << "Local variable value: " << localVariable << std::endl;
}

int main() {
    myFunction();
    return 0;
}

