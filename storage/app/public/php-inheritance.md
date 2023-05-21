# PHP Inheritance

Inheritance is a fundamental concept in object-oriented programming (OOP) that allows a class to inherit properties and methods from another class. In PHP, you can implement inheritance using the `extends` keyword.

## Defining a Parent Class

A parent class, also known as a base class or superclass, serves as the blueprint for creating derived classes. It contains common properties and methods that can be inherited by its subclasses.

Here's an example of a parent class in PHP:

`````````
php
class Animal {
    public $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function eat() {
        echo $this->name . ' is eating.';
    }

    public function sleep() {
        echo $this->name . ' is sleeping.';
    }
}
`````````

In the above example, we define a class called `Animal` with two properties: `$name` and `$age`. It also has two methods: `eat()` and `sleep()`, which are common behaviors of an animal.

## Creating a Subclass (Child Class)

A subclass, also known as a derived class or child class, inherits properties and methods from its parent class. It can also define additional properties and methods specific to itself.

To create a subclass in PHP, you use the `extends` keyword followed by the name of the parent class.

Here's an example of a subclass inheriting from the `Animal` class:

`````````
php
class Dog extends Animal {
    public function bark() {
        echo $this->name . ' is barking.';
    }
}
`````````

In the above example, we define a class called `Dog` that extends the `Animal` class. The `Dog` class inherits the properties and methods from the `Animal` class and defines an additional method `bark()`.

## Using Inheritance

Now that we have both the parent class `Animal` and the child class `Dog`, let's see how we can use inheritance:

`````````
php
// Create an instance of the Animal class
$animal = new Animal('Leo', 5);
$animal->eat(); // Output: Leo is eating.
$animal->sleep(); // Output: Leo is sleeping.

// Create an instance of the Dog class
$dog = new Dog('Max', 3);
$dog->eat(); // Output: Max is eating. (inherited from Animal class)
$dog->sleep(); // Output: Max is sleeping. (inherited from Animal class)
$dog->bark(); // Output: Max is barking. (defined in Dog class)
`````````

In the above example, we create an instance of the `Animal` class and demonstrate its inherited methods `eat()` and `sleep()`. Then, we create an instance of the `Dog` class and showcase the inherited methods along with the specific method `bark()` defined in the `Dog` class.

Inheritance allows us to create hierarchical relationships between classes, promoting code reusability and maintaining a logical structure. By utilizing inheritance, you can build complex class hierarchies that model real-world scenarios efficiently.

