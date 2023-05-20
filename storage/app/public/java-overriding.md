# Java Overriding

In Java, method overriding is a mechanism that allows a subclass to provide a different implementation of a method already defined in its superclass. Method overriding is an essential feature of object-oriented programming that promotes code reusability and polymorphism. In this tutorial, we'll explore the concept of method overriding and how to use it effectively in Java.

## What is Method Overriding?

Method overriding occurs when a subclass provides its own implementation of a method that is already defined in its superclass. The method in the subclass must have the same name, return type, and parameter list as the method in the superclass. When an overridden method is called on an instance of the subclass, the subclass's implementation is executed instead of the superclass's implementation.

## Rules for Method Overriding

To correctly override a method in Java, you must follow these rules:

1. The method in the subclass must have the same method signature (name, return type, and parameter list) as the method in the superclass.
2. The access level of the overridden method in the subclass cannot be more restrictive than the access level of the method in the superclass. For example, if the superclass method is declared as `public`, the subclass method cannot be declared as `private`.
3. The subclass method can have a different implementation from the superclass method, providing the desired behavior specific to the subclass.
4. The subclass method can use the `@Override` annotation to indicate that it is intended to override a method in the superclass. Although not required, using this annotation can help catch potential errors during compilation.

## Example of Method Overriding

Here's an example that demonstrates method overriding in Java:

```java
class Animal {
    public void makeSound() {
        System.out.println("Animal makes a sound");
    }
}

class Cat extends Animal {
    @Override
    public void makeSound() {
        System.out.println("Cat says meow");
    }
}
```

In the above example, we have a superclass `Animal` with a method `makeSound()`, and a subclass `Cat` that overrides the `makeSound()` method. When we call the `makeSound()` method on an instance of the `Cat` class, it prints `"Cat says meow"` instead of the default message in the superclass.

## When to Use Method Overriding?

Method overriding is useful in scenarios where you want to provide a specialized implementation of a method in a subclass. It allows you to extend the functionality of the superclass method or modify its behavior to suit the requirements of the subclass. Method overriding is commonly used in scenarios such as:

- Customizing behavior: Override methods to provide specific functionality in subclasses while inheriting the common behavior from the superclass.
- Polymorphism: Use method overriding to achieve polymorphism, where different objects can be treated as instances of a common superclass and exhibit different behaviors based on their actual types.

## Conclusion

Method overriding is a powerful feature in Java that allows subclasses to provide their own implementation of methods defined in the superclass. By following the rules of method overriding and understanding its use cases, you can effectively leverage this feature to create flexible and extensible code structures in your Java programs.
