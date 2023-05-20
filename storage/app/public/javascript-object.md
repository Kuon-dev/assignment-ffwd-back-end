# JavaScript Objects

In JavaScript, objects are key-value pairs used to store and organize data. They provide a way to represent real-world entities and their properties. In this tutorial, we'll explore how to create and work with objects in JavaScript.

## Creating an Object

You can create an object using object literal notation or the `new` keyword with the `Object` constructor.

```javascript
// Object literal notation
let person = {
  name: "John",
  age: 30,
  city: "New York"
};

// Object created with the Object constructor
let car = new Object();
car.make = "Toyota";
car.model = "Camry";
car.year = 2022;
```

## Accessing Object Properties

You can access object properties using dot notation or bracket notation.

```javascript
console.log(person.name);     // Output: John
console.log(car["make"]);     // Output: Toyota
```

## Modifying Object Properties

You can modify the values of object properties by assigning new values to them.

```javascript
person.age = 35;
car["year"] = 2023;

console.log(person.age);     // Output: 35
console.log(car.year);       // Output: 2023
```

## Adding and Removing Object Properties

You can add new properties to an object by assigning values to them. Similarly, you can remove properties using the `delete` keyword.

```javascript
person.gender = "Male";
delete car.model;

console.log(person.gender);  // Output: Male
console.log(car.model);      // Output: undefined
```

## Object Methods

Objects can also have methods, which are functions defined as object properties. These methods can perform actions or calculations related to the object.

```javascript
let calculator = {
  add: function(a, b) {
    return a + b;
  },
  subtract: function(a, b) {
    return a - b;
  }
};

console.log(calculator.add(2, 3));       // Output: 5
console.log(calculator.subtract(5, 2));  // Output: 3
```

## Summary

- Objects in JavaScript are key-value pairs used to store and organize data.
- You can create objects using object literal notation or the `Object` constructor.
- Object properties can be accessed and modified using dot notation or bracket notation.
- Properties can be added or removed dynamically.
- Objects can have methods, which are functions defined as properties.

Understanding objects is essential for working with complex data structures and building applications in JavaScript. Objects provide a powerful way to represent and manipulate data in a structured manner.

Happy coding!
