# C++ File and Stream Handling

File and stream handling in C++ allows us to read data from and write data to files. It provides a way to interact with external files, such as reading input from a file or writing output to a file. In C++, we can perform file and stream handling using the `<fstream>` library. Let's explore some common operations.

## Reading from a File

To read data from a file, we need to follow these steps:

1. Open the file using an input file stream (`std::ifstream`).
2. Read data from the file.
3. Close the file.

Here's an example that demonstrates reading from a file:

```cpp
#include <iostream>
#include <fstream>
#include <string>

int main() {
    std::ifstream inputFile("example.txt");
    if (inputFile.is_open()) {
        std::string line;
        while (std::getline(inputFile, line)) {
            std::cout << line << std::endl;
        }
        inputFile.close();
    }
    else {
        std::cout << "Unable to open file." << std::endl;
    }
    return 0;
}
```

In this example, we open the file `"example.txt"` using an input file stream `inputFile`. We check if the file is open using `is_open()` to handle any errors that may occur. Then, we read the file line by line using `std::getline()` and print each line to the console. Finally, we close the file using `close()`.

## Writing to a File

To write data to a file, we need to follow these steps:

1. Open the file using an output file stream (`std::ofstream` or `std::fstream`).
2. Write data to the file.
3. Close the file.

Here's an example that demonstrates writing to a file:

```cpp
#include <iostream>
#include <fstream>

int main() {
    std::ofstream outputFile("example.txt");
    if (outputFile.is_open()) {
        outputFile << "Hello, World!" << std::endl;
        outputFile << 42 << std::endl;
        outputFile.close();
    }
    else {
        std::cout << "Unable to open file." << std::endl;
    }
    return 0;
}
```

In this example, we open the file `"example.txt"` using an output file stream `outputFile`. We check if the file is open using `is_open()` to handle any errors. Then, we write data to the file using the stream insertion operator `<<`. Finally, we close the file using `close()`.

## Appending to a File

To append data to an existing file, we can open the file in the append mode (`std::ios::app`). Here's an example:

```cpp
#include <iostream>
#include <fstream>

int main() {
    std::ofstream outputFile("example.txt", std::ios::app);
    if (outputFile.is_open()) {
        outputFile << "New line" << std::endl;
        outputFile.close();
    }
    else {
        std::cout << "Unable to open file." << std::endl;
    }
    return 0;
}
```

In this example, we open the file `"example.txt"` in append mode by passing `std::ios::app` as the second argument to the `std::ofstream` constructor. We then write data to the file, which appends the new content to the existing file.

