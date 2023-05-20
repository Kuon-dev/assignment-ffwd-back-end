# Vue Computed Properties

Computed properties in Vue.js are an essential feature that allows you to derive new data based on existing data properties. They are useful for performing calculations, filtering data, and transforming data in a reactive manner. In this tutorial, we'll explore how to use computed properties in Vue.

## Basic Usage

To define a computed property in Vue, you need to declare it inside the `computed` object of your component. Computed properties are based on other data properties and update automatically whenever their dependencies change. Here's an example:

```vue
<template>
  <div>
    <p>First Name: {{ firstName }}</p>
    <p>Last Name: {{ lastName }}</p>
    <p>Full Name: {{ fullName }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      firstName: 'John',
      lastName: 'Doe'
    };
  },
  computed: {
    fullName() {
      return this.firstName + ' ' + this.lastName;
    }
  }
};
</script>
```

In this example, we define a computed property called `fullName` that concatenates the `firstName` and `lastName` data properties. The computed property is accessed in the template using the `{{ fullName }}` syntax. Whenever `firstName` or `lastName` changes, the `fullName` computed property will be recalculated automatically.

Computed properties are cached based on their dependencies, so they only update when necessary. If the dependencies of a computed property don't change, Vue reuses the previously computed result.

## Computed Getters and Setters

Computed properties in Vue can also have getter and setter functions, allowing you to define custom read and write behavior for the computed property. The getter function returns the computed value, while the setter function is called when you try to assign a new value to the computed property. Here's an example:

```vue
<template>
  <div>
    <p>Counter: {{ counter }}</p>
    <button @click="incrementCounter">Increment</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      counter: 0
    };
  },
  computed: {
    doubleCounter: {
      get() {
        return this.counter * 2;
      },
      set(newValue) {
        this.counter = newValue / 2;
      }
    }
  },
  methods: {
    incrementCounter() {
      this.doubleCounter++;
    }
  }
};
</script>
```

In this example, we define a computed property called `doubleCounter` with a getter and setter function. The getter returns the double of the `counter` data property, and the setter updates the `counter` property based on the new value assigned to `doubleCounter`. The `incrementCounter` method increments the `doubleCounter` property, which triggers the setter function and updates the `counter` accordingly.

## Computed vs. Methods

Both computed properties and methods in Vue can be used to derive new data, so you might wonder when to use one over the other. Computed properties are cached and only update when their dependencies change, while methods are recalculated every time they are called.

As a general guideline, use computed properties when you have data that depends on other data and needs to be updated reactively. Use methods when you have data that needs to be recalculated every time it's accessed or when you need to pass arguments to perform calculations.

If a computed property doesn't depend on any data properties and only relies on other computed properties, you can also consider using a method instead.


