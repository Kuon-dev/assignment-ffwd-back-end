# Java File Handling

Java provides several classes and methods for file handling, allowing you to read from and write to files. In this tutorial, we'll explore the basics of working with files in Java.

## Reading from a File

To read data from a file, you can use the `FileInputStream` class along with other stream classes like `BufferedReader` or `Scanner`. Here's an example of reading data from a file:

```java
import java.io.*;

public class FileReaderExample {
    public static void main(String[] args) {
        try {
            File file = new File("path/to/file.txt");
            FileInputStream fis = new FileInputStream(file);
            BufferedReader reader = new BufferedReader(new InputStreamReader(fis));
            String line;
            while ((line = reader.readLine()) != null) {
                System.out.println(line);
            }
            reader.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
```

In the above example, we use the `FileInputStream` class to open a file and `BufferedReader` to read its contents line by line. The `while` loop iterates until all lines have been read, and each line is printed to the console.

## Writing to a File

To write data to a file, you can use the `FileOutputStream` class along with other stream classes like `BufferedWriter` or `PrintWriter`. Here's an example of writing data to a file:

```java
import java.io.*;

public class FileWriterExample {
    public static void main(String[] args) {
        try {
            File file = new File("path/to/file.txt");
            FileOutputStream fos = new FileOutputStream(file);
            BufferedWriter writer = new BufferedWriter(new OutputStreamWriter(fos));
            writer.write("Hello, World!");
            writer.newLine();
            writer.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
```

In the above example, we use the `FileOutputStream` class to create a file and `BufferedWriter` to write data to it. We write the string "Hello, World!" to the file and add a new line using the `newLine()` method.

## File Manipulation

Java provides various methods to manipulate files, such as creating or deleting files and directories, checking file existence, and more. Here are some commonly used methods:

- `File file = new File("path/to/file.txt")`: Creates a `File` object representing a file or directory.
- `file.exists()`: Checks if the file or directory exists.
- `file.isFile()`: Checks if the `File` object represents a file.
- `file.isDirectory()`: Checks if the `File` object represents a directory.
- `file.createNewFile()`: Creates a new file.
- `file.mkdir()`: Creates a new directory.
- `file.delete()`: Deletes the file or directory.

These are just a few examples of the file manipulation capabilities provided by Java.

File handling in Java allows you to perform various operations on files and directories, enabling you to read, write, and manipulate data effectively. Understanding how to work with files is essential for many real-world applications.

Remember to handle exceptions properly when working with files and close the file streams after use to free up system resources.

