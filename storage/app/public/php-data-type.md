# PHP Data Types

In PHP, data types represent the type of values that can be stored and manipulated. PHP supports various data types, including:

## 1. String

A string is a sequence of characters. It can be enclosed in single quotes ('') or double quotes ("").

Example:
`````````
php
$name = 'John';
`````````

## 2. Integer

An integer is a whole number without a decimal point. It can be positive or negative.

Example:
`````````
php
$age = 25;
`````````

## 3. Float

A float is a number with a decimal point. It is also referred to as a double or a floating-point number.

Example:
`````````
php
$price = 10.99;
`````````

## 4. Boolean

A boolean represents a logical value, either true or false.

Example:
`````````
php
$isStudent = true;
`````````

## 5. Array

An array is an ordered collection of values. It can store multiple values in a single variable.

Example:
`````````
php
$numbers = [1, 2, 3, 4, 5];
`````````

## 6. Object

An object is an instance of a class. It contains properties and methods that define its behavior.

Example:
`````````
php
class Person {
    public $name;
    public $age;
}

$person = new Person();
`````````

## 7. Null

Null represents a variable with no value assigned to it.

Example:
`````````
php
$score = null;
`````````

## 8. Resource

A resource is a special variable that holds a reference to an external resource, such as a database connection or file handle.

Example:
`````````
php
$file = fopen('data.txt', 'r');
`````````

These are the basic data types in PHP. Understanding the different data types is important for effectively storing and manipulating data in your PHP programs.
