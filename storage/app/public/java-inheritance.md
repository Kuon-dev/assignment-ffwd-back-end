# Java Inheritance

Inheritance is a fundamental concept in object-oriented programming that allows classes to inherit properties and behaviors from other classes. In Java, inheritance is achieved using the `extends` keyword. In this tutorial, we'll explore the basics of inheritance in Java.

## What is Inheritance?

Inheritance is a mechanism that enables a class to acquire properties (fields) and behaviors (methods) from another class. The class that inherits from another class is called the **subclass** or **derived class**, and the class being inherited from is called the **superclass** or **base class**.

## Creating a Subclass

To create a subclass in Java, you use the `extends` keyword in the class declaration. Here's an example:

```java
public class Subclass extends Superclass {
    // Subclass members
}
```

In the above example, the `Subclass` extends the `Superclass`. This means that the `Subclass` inherits all the fields and methods defined in the `Superclass`.

## Accessing Superclass Members

In a subclass, you can access the members (fields and methods) of the superclass using the `super` keyword. This is useful when you want to call the superclass's version of a method or access a field that is hidden by the subclass. Here's an example:

```java
public class Subclass extends Superclass {
    public void subclassMethod() {
        // Accessing superclass method
        super.superclassMethod();

        // Accessing superclass field
        int value = super.superclassField;
    }
}
```

In the above example, `super.superclassMethod()` calls the `superclassMethod()` defined in the superclass, and `super.superclassField` accesses the `superclassField` defined in the superclass.

## Overriding Methods

One of the key features of inheritance is method overriding. It allows the subclass to provide its own implementation of a method inherited from the superclass. To override a method, the subclass must define a method with the same name, return type, and parameter list as the superclass's method. Here's an example:

```java
public class Subclass extends Superclass {
    @Override
    public void superclassMethod() {
        // Subclass's implementation
    }
}
```

In the above example, the `Subclass` overrides the `superclassMethod()` from the `Superclass` by providing its own implementation.

## Constructor Chaining

When a subclass is instantiated, the constructors of both the subclass and superclass are called. This is known as constructor chaining. The subclass's constructor can use the `super` keyword to explicitly call the superclass's constructor. Here's an example:

```java
public class Subclass extends Superclass {
    public Subclass() {
        super(); // Calls the superclass constructor
        // Subclass's constructor code
    }
}
```

In the above example, the `Subclass` constructor calls the `super()` to invoke the superclass's constructor before executing its own code.

## Final and Abstract Classes

In Java, you can also define classes as `final` or `abstract`. A `final` class cannot be subclassed, meaning it cannot have any subclasses. An `abstract` class, on the other hand, is a class that cannot be instantiated and is meant to be subclassed. Abstract classes can have abstract methods, which are meant to be overridden by subclasses.

