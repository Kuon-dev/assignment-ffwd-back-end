# JavaScript Data Types

JavaScript is a dynamically typed language, which means variables can hold values of different types. In this tutorial, we'll explore the different data types available in JavaScript.

## Primitive Data Types

JavaScript has six primitive data types:

1. **Number**: Represents numeric values, such as `42` or `3.14`.

```javascript
let age = 25;
let pi = 3.14;
```

2. **String**: Represents textual data enclosed in single or double quotes.

```javascript
let name = 'John';
let message = "Hello, world!";
```

3. **Boolean**: Represents a logical value of either `true` or `false`.

```javascript
let isStudent = true;
let hasCar = false;
```

4. **Undefined**: Represents a variable that has been declared but not assigned a value.

```javascript
let x;
console.log(x); // Output: undefined
```

5. **Null**: Represents the intentional absence of any object value.

```javascript
let person = null;
```

6. **Symbol**: Represents a unique identifier. Introduced in ECMAScript 2015.

```javascript
let id = Symbol();
```

## Object Data Type

In addition to primitive data types, JavaScript has one complex data type called **Object**. Objects are collections of key-value pairs and can represent more complex data structures.

```javascript
let person = {
  name: 'John',
  age: 25,
  isStudent: true
};
```

## Checking Data Types

You can use the `typeof` operator to check the data type of a value.

```javascript
console.log(typeof 42);       // Output: 'number'
console.log(typeof 'John');   // Output: 'string'
console.log(typeof true);     // Output: 'boolean'
console.log(typeof undefined);// Output: 'undefined'
console.log(typeof null);     // Output: 'object'
console.log(typeof Symbol()); // Output: 'symbol'
console.log(typeof {});       // Output: 'object'
```

## Type Conversion

JavaScript also allows you to convert values from one data type to another using various methods and operators. For example, you can convert a number to a string using the `toString()` method or the `String()` function.

```javascript
let num = 42;
let str = num.toString();
console.log(typeof str); // Output: 'string'

let anotherNum = Number('42');
console.log(typeof anotherNum); // Output: 'number'
```

## Summary

- JavaScript has six primitive data types: number, string, boolean, undefined, null, and symbol.
- Objects are the complex data type in JavaScript.
- Use the `typeof` operator to check the data type of a value.
- You can convert values from one data type to another using various methods and operators.

Understanding data types in JavaScript is crucial for effective programming. By using the appropriate data types, you can handle and manipulate data in a more efficient and meaningful way. Keep practicing and experimenting with different data types to enhance your JavaScript skills.

Happy coding!
