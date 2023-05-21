# Java Methods

Methods are a fundamental building block of Java programs. They encapsulate a set of instructions that can be executed and allow for code reuse. In this tutorial, we'll explore the basics of creating and using methods in Java.

## Creating a Method

To create a method in Java, you need to define its signature and specify its behavior. Here's an example of a method that calculates the sum of two numbers:

```java
public static int sum(int a, int b) {
    int result = a + b;
    return result;
}
```

In the above example, we define a method named `sum` that takes two integers `a` and `b` as parameters. It calculates the sum of the two numbers and returns the result.

## Calling a Method

Once you've defined a method, you can call it from other parts of your program. Here's an example of calling the `sum` method:

```java
int x = 5;
int y = 3;
int sumResult = sum(x, y);
System.out.println("Sum: " + sumResult);
```

In the above example, we call the `sum` method with the values `x` and `y` as arguments. The returned result is stored in the `sumResult` variable and then printed to the console.

## Method Parameters

Methods can have zero or more parameters. Parameters allow you to pass data to a method for processing. Here's an example of a method with multiple parameters:

```java
public static void greet(String name) {
    System.out.println("Hello, " + name + "!");
}
```

In the above example, we define a method named `greet` that takes a `String` parameter named `name`. It prints a greeting message to the console using the provided name.

## Method Return Types

Methods can have a return type, which specifies the type of data that the method will return after execution. Here's an example of a method with a return type:

```java
public static boolean isEven(int number) {
    return number % 2 == 0;
}
```

In the above example, we define a method named `isEven` that takes an integer `number` as a parameter. It checks if the number is even and returns a boolean value indicating the result.

## Method Overloading

Java supports method overloading, which allows you to define multiple methods with the same name but different parameters. Here's an example:

```java
public static int add(int a, int b) {
    return a + b;
}

public static double add(double a, double b) {
    return a + b;
}
```

In the above example, we define two `add` methods—one that takes two integers and another that takes two doubles. The appropriate method is called based on the argument types.

Java methods are a powerful feature that enables you to structure your code, promote reusability, and enhance readability. Understanding how to create and use methods will greatly benefit your Java programming skills.

Remember to use the appropriate access modifiers (`public`, `private`, etc.) and carefully design your methods to perform specific tasks effectively.
