# PHP Strings

In PHP, a string is a sequence of characters enclosed in single quotes ('') or double quotes (""). Strings are used to store and manipulate textual data.

## Creating a String

To create a string, you can simply assign a value to a variable using quotes:

`````````
<?php>
$name = 'John';
$message = "Hello, World!";
`````````

## Concatenation

You can concatenate (join) strings together using the concatenation operator (`.`):

`````````
<?php>
$firstName = 'John';
$lastName = 'Doe';
$fullName = $firstName . ' ' . $lastName;
`````````

In this example, the value of `$fullName` will be `'John Doe'`.

## String Interpolation

PHP supports string interpolation, which allows you to embed variables directly within a string using double quotes:

`````````
<?php>
$name = 'John';
$message = "Hello, $name!";
`````````

In this example, the value of `$message` will be `'Hello, John!'`.

## String Functions

PHP provides a wide range of built-in functions for working with strings. Here are some commonly used string functions:

- `strlen($string)`: Returns the length of a string.
- `strtolower($string)`: Converts a string to lowercase.
- `strtoupper($string)`: Converts a string to uppercase.
- `substr($string, $start, $length)`: Extracts a substring from a string.
- `str_replace($search, $replace, $string)`: Replaces all occurrences of a search string with a replacement string.

Here's an example that demonstrates the usage of these functions:

`````````
<?php>
$text = 'Hello, World!';
$length = strlen($text);
$lowercase = strtolower($text);
$uppercase = strtoupper($text);
$substring = substr($text, 0, 5);
$replaced = str_replace('World', 'PHP', $text);
`````````

## Escape Sequences

PHP supports escape sequences, which are special characters that allow you to represent certain characters within a string. Here are some commonly used escape sequences:

- ````````: Backslash
- ````'`: Single quote
- ````"`: Double quote
- ````n`: Newline
- ````r`: Carriage return
- ````t`: Tab
- ````u{XXXX}`: Unicode character (PHP 7.0+)

Example:

`````````
<?php>
$message = "This is a ```"quoted```" text.";
$newline = "First line```nSecond line";
`````````
