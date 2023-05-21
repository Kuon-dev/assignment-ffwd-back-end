# PHP Interfaces

An interface in PHP defines a contract that classes can implement. It specifies a set of methods that the implementing classes must define. Interfaces allow you to define common behavior that multiple classes can share.

## Defining an Interface

To define an interface in PHP, you use the `interface` keyword followed by the name of the interface. Inside the interface, you define the methods that the implementing classes must implement.

Here's an example of defining an interface in PHP:

`````````
<?php>
interface Vehicle {
    public function start();
    public function stop();
}
`````````

In the above example, we define an interface called `Vehicle`. It specifies two methods: `start()` and `stop()`. Any class that implements this interface must provide implementations for these methods.

## Implementing an Interface

To implement an interface in PHP, a class uses the `implements` keyword followed by the name of the interface. The implementing class must provide definitions for all the methods specified in the interface.

Here's an example of a class implementing the `Vehicle` interface:

`````````
<?php>
class Car implements Vehicle {
    public function start() {
        echo 'Car started.';
    }

    public function stop() {
        echo 'Car stopped.';
    }
}
`````````

In the above example, the `Car` class implements the `Vehicle` interface. It provides implementations for the `start()` and `stop()` methods defined in the `Vehicle` interface.

## Using Interfaces

Interfaces provide a way to define common behavior across different classes. You can use interfaces to create contracts that ensure consistent method implementations.

Here's an example of using the `Vehicle` interface:

`````````
<?php>
function performVehicleActions(Vehicle $vehicle) {
    $vehicle->start();
    $vehicle->stop();
}

// Create an instance of the Car class
$car = new Car();

// Perform actions on the Car object
performVehicleActions($car);
`````````

In the above example, we define a function `performVehicleActions()` that accepts an object of type `Vehicle`. We can pass an instance of the `Car` class to this function because the `Car` class implements the `Vehicle` interface. This allows us to call the `start()` and `stop()` methods on the `$vehicle` object.

Interfaces provide a way to define common behavior and ensure that classes adhere to a specific contract. They promote code reusability and maintainability by allowing you to work with objects based on their shared interface rather than their specific class.
