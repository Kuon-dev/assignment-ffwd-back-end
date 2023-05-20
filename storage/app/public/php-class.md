# PHP Class

In PHP, a class is a blueprint for creating objects. It defines the properties (attributes) and behaviors (methods) that an object of that class will have.

To create a class in PHP, you use the `class` keyword followed by the class name. Here's the basic syntax:

`````````
php
class ClassName {
    // Properties (attributes)

    // Methods (behaviors)
}
`````````

## Properties

Properties are the variables that hold data within a class. They define the characteristics of an object. You can declare properties inside a class using the visibility keywords `public`, `private`, or `protected`, followed by the variable name.

`````````
php
class Person {
    public $name;
    private $age;
    protected $email;
}
`````````

In the above example, we have a class named `Person` with three properties: `$name`, `$age`, and `$email`. The `public` property can be accessed from anywhere, the `private` property is only accessible within the class, and the `protected` property is accessible within the class and its subclasses.

## Methods

Methods are the functions defined within a class. They represent the behaviors or actions that an object can perform. You can declare methods inside a class using the visibility keywords `public`, `private`, or `protected`, followed by the function definition.

`````````
php
class Person {
    public function greet() {
        echo "Hello, I'm a person!";
    }

    private function calculateAge() {
        // Calculate age here
    }

    protected function sendEmail() {
        // Send email here
    }
}
`````````

In the above example, we have three methods: `greet()`, `calculateAge()`, and `sendEmail()`. The `public` method can be called from anywhere, the `private` method is only accessible within the class, and the `protected` method is accessible within the class and its subclasses.

## Creating Objects (Instantiating a Class)

To use a class, you need to create objects (instances) of that class. You do this by using the `new` keyword followed by the class name and parentheses.

`````````
php
// Create an object of the Person class
$person = new Person();
`````````

Now, you can access the properties and call the methods of the object using the object variable (`$person` in this case).

