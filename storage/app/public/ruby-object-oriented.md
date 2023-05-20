# Ruby Object-Oriented Programming

Object-oriented programming (OOP) is a programming paradigm that organizes code around objects, which encapsulate data and behavior. Ruby is a powerful object-oriented programming language that supports the principles of OOP. In this tutorial, we'll explore the key concepts of OOP in Ruby.

## Classes and Objects

In Ruby, everything is an object. A class is a blueprint or template that defines the properties and behaviors of objects. Objects are instances of a class.

To define a class in Ruby, you use the `class` keyword, followed by the class name. The class name should be in CamelCase.

```ruby
class MyClass
  # Class definition
end
```

To create an object of a class, you use the `new` method on the class.

```ruby
my_object = MyClass.new
```

## Attributes and Methods

Classes in Ruby can have attributes and methods. Attributes are variables that hold data, and methods are functions that perform actions.

### Attributes

You can define attributes using the `attr_accessor`, `attr_reader`, or `attr_writer` methods. These methods automatically generate getter and setter methods for the attributes.

```ruby
class Person
  attr_accessor :name, :age

  def initialize(name, age)
    @name = name
    @age = age
  end
end
```

In the example above, the `Person` class has `name` and `age` attributes. The `attr_accessor` method generates getter and setter methods for these attributes.

### Methods

Methods are defined within the class to perform actions or provide functionality. They can access the attributes and perform operations on them.

```ruby
class Person
  attr_accessor :name, :age

  def initialize(name, age)
    @name = name
    @age = age
  end

  def say_hello
    puts "Hello, #{@name}!"
  end
end
```

In the example above, the `Person` class has a `say_hello` method that prints a greeting using the `name` attribute.

## Inheritance

Inheritance is a fundamental concept in OOP that allows classes to inherit attributes and methods from other classes. In Ruby, you can define a class that inherits from another class using the `<` symbol.

```ruby
class ChildClass < ParentClass
  # Child class definition
end
```

The child class inherits all the attributes and methods from the parent class. It can also override or add new methods.

## Polymorphism

Polymorphism is the ability of objects of different classes to respond to the same message or method invocation. In Ruby, you can achieve polymorphism through duck typing, which focuses on the object's behavior rather than its specific type.

If an object can respond to a certain method, it can be used interchangeably with other objects that have the same method.

## Encapsulation

Encapsulation is the practice of hiding internal implementation details of an object and exposing only the necessary interfaces. In Ruby, you can use access modifiers to control the visibility of attributes and methods.

The three access modifiers in Ruby are `public`, `protected`, and `private`. By default, methods and attributes are `public`.

## Conclusion

Ruby's support for object-oriented programming makes it a versatile and flexible language for building complex applications. By understanding the concepts of classes, objects, attributes, methods, inheritance, polymorphism, and encapsulation, you can write clean, modular, and maintainable code in Ruby.
