# Java Generics

Generics in Java provide a way to create reusable code that can work with different data types. They enable type safety and allow you to define classes, interfaces, and methods that can operate on objects of any specified type. Generics are particularly useful in collections, algorithms, and frameworks. In this tutorial, we'll explore the basics of Java generics.

## Introduction to Generics

Generics allow you to define classes and methods that can work with multiple types. By using placeholders called type parameters, you can create generic classes and methods that can be instantiated with different types at runtime. The most commonly used type parameter names are `T` (for type), `E` (for element), `K` (for key), `V` (for value), and `R` (for return type).

## Generic Classes

To define a generic class in Java, you specify the type parameter in angle brackets after the class name. The type parameter can then be used within the class to represent a specific type. Here's an example of a generic class called `Box`:

```java
public class Box<T> {
    private T content;

    public void add(T item) {
        this.content = item;
    }

    public T get() {
        return this.content;
    }
}
```

In the above example, `T` is the type parameter representing the type of the content stored in the box. The `add` method accepts an item of type `T`, and the `get` method returns an item of type `T`.

## Instantiating Generic Classes

To create an instance of a generic class, you specify the actual type argument in angle brackets after the class name. This determines the specific type that will be used for the type parameter within the class. Here's an example of creating instances of the `Box` class:

```java
Box<Integer> integerBox = new Box<>();
integerBox.add(42);
int value = integerBox.get(); // The type parameter is inferred as Integer

Box<String> stringBox = new Box<>();
stringBox.add("Hello");
String message = stringBox.get(); // The type parameter is inferred as String
```

In the above example, `Box<Integer>` and `Box<String>` are instances of the generic `Box` class with specific type arguments `Integer` and `String`, respectively. The type parameter `T` within the class is replaced with the specified type.

## Generic Methods

In addition to generic classes, Java also allows you to define generic methods. A generic method is a method that declares its own type parameter(s), separate from the type parameter(s) of the class it belongs to. This provides flexibility in working with different types within a method. Here's an example of a generic method:

```java
public class ArrayUtils {
    public static <T> T getLastElement(T[] array) {
        if (array.length == 0) {
            return null;
        } else {
            return array[array.length - 1];
        }
    }
}
```

In the above example, the `getLastElement` method is a generic method that takes an array of type `T` and returns the last element of the array. The type parameter `T` is declared before the return type of the method.


