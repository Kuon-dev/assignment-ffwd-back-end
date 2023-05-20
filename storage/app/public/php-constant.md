# PHP Constants

In PHP, constants are like variables, but their values cannot be changed once they are defined. Constants are useful for storing values that should remain the same throughout the execution of a script.

## Defining Constants

In PHP, constants are defined using the `define()` function or the `const` keyword. Here's an example of defining a constant using the `define()` function:

`````````
php
define('PI', 3.14159);
`````````

In this example, we define a constant named `PI` and assign it the value `3.14159`. Once defined, the value of `PI` cannot be changed.

Alternatively, you can define constants using the `const` keyword:

`````````
php
const WEBSITE_NAME = 'My Website';
`````````

In this example, we define a constant named `WEBSITE_NAME` with the value `'My Website'`.

## Accessing Constants

To access the value of a constant, you simply use its name. Here's an example:

`````````
php
echo PI;              // Output: 3.14159
echo WEBSITE_NAME;   // Output: My Website
`````````

In this example, we use the `echo` statement to output the values of the `PI` and `WEBSITE_NAME` constants.

## Constant Naming Convention

When naming constants, it is common practice to use uppercase letters and underscores to separate words. This convention improves readability and distinguishes constants from variables. Here's an example:

`````````
php
define('MAX_SIZE', 100);
`````````

In this example, we define a constant named `MAX_SIZE` with the value `100`.

## Magic Constants

PHP also provides a set of predefined constants called "magic constants" that are automatically defined by the PHP interpreter. These constants provide information about the script's execution environment, file path, and more. Some commonly used magic constants include:

- `__LINE__`: The current line number of the file.
- `__FILE__`: The full path and filename of the file.
- `__DIR__`: The directory of the file.
- `__FUNCTION__`: The name of the current function.
- `__CLASS__`: The name of the current class.
- `__METHOD__`: The name of the current method.

Here's an example that demonstrates the usage of magic constants:

`````````
php
echo __LINE__;       // Output: Line number of the code
echo __FILE__;       // Output: Full path and filename of the script
echo __DIR__;        // Output: Directory of the script
echo __FUNCTION__;   // Output: Name of the function
echo __CLASS__;      // Output: Name of the class
echo __METHOD__;     // Output: Name of the method
`````````

In this example, we use the `echo` statement to output the values of various magic constants.

## Conclusion

Constants in PHP are used to store values that should not be changed during the execution of a script. They are defined using the `define()` function or the `const` keyword. Constants are accessed by their names and follow a naming convention of uppercase letters and underscores. Additionally, PHP provides a set of predefined magic constants that offer information about the script's execution environment.

Using constants can make your code more readable and maintainable, especially when dealing with values that should remain constant throughout your program's execution.
