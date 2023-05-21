# Ruby Modules

In Ruby, a module is a way to group related methods, constants, and classes together. Modules serve as containers for these definitions and provide a mechanism for namespacing and code organization.

## Defining a Module

Modules are defined using the `module` keyword followed by the module name. The convention is to use CamelCase for module names.

`````````ruby
module MyModule
  def hello
    puts "Hello from MyModule!"
  end

  def goodbye
    puts "Goodbye from MyModule!"
  end
end
`````````

In the example above, we define a module called `MyModule` that contains two methods: `hello` and `goodbye`.

## Including a Module

To make the methods and constants defined in a module available within a class, we use the `include` keyword. This process is called "including" the module in the class.

`````````ruby
class MyClass
  include MyModule
end

obj = MyClass.new
obj.hello  # Output: "Hello from MyModule!"
obj.goodbye  # Output: "Goodbye from MyModule!"
`````````

In the example above, we define a class `MyClass` and include the `MyModule` module using the `include` keyword. As a result, the methods defined in `MyModule` become available to instances of `MyClass`.

## Module Namespacing

Modules also provide a way to organize code and avoid naming conflicts. By nesting modules within one another, we can create a hierarchical structure.

`````````ruby
module MyNamespace
  module MySubModule
    def hello
      puts "Hello from MySubModule!"
    end
  end
end

obj = MyNamespace::MySubModule
obj.hello  # Output: "Hello from MySubModule!"
`````````

In the example above, we define a module `MyNamespace` and nest another module `MySubModule` inside it. We can access the methods in `MySubModule` using the `::` operator for namespacing.

## Conclusion

Ruby modules are a powerful feature that allows you to organize and encapsulate code. By defining modules, including them in classes, and using namespacing, you can create reusable and well-organized code structures.
