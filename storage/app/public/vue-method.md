# Vue Methods

In Vue.js, methods are functions defined in your Vue component that can be called and executed in response to events or other actions. They are used to encapsulate reusable code and perform specific tasks. In this tutorial, we'll explore how to define and use methods in Vue.

## Defining Methods

To define a method in Vue, you can add a `methods` property to your component and define your methods as functions. Here's an example:
```vue
<template>
  <button v-on:click="sayHello">Click me</button>
</template>

<script>
export default {
  methods: {
    sayHello() {
      console.log('Hello!');
    }
  }
};
</script>
```

In this example, we define a `sayHello` method that logs the message "Hello!" to the console when the button is clicked. Methods are defined within the `methods` property of the component.

## Calling Methods

Once you have defined a method, you can call it from your template or other methods. Here are a few examples:
```vue
<template>
  <div>
    <button v-on:click="sayHello">Click me</button>
    <button v-on:click="incrementCounter">Increment</button>
    <p>{{ message }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      message: 'Hello!',
      counter: 0
    };
  },
  methods: {
    sayHello() {
      console.log(this.message);
    },
    incrementCounter() {
      this.counter++;
    }
  }
};
</script>
```

In this example, we have two additional methods. The `sayHello` method logs the value of the `message` data property, and the `incrementCounter` method increments the `counter` data property. Both methods are called when the respective buttons are clicked.

## Accessing Data and Props

Methods in Vue have access to the component's data and props. You can use them within your methods to perform calculations, update data, or interact with props. Here's an example:
```vue
<template>
  <div>
    <p>{{ fullName }}</p>
    <button v-on:click="greet">Greet</button>
  </div>
</template>

<script>
export default {
  props: {
    firstName: String,
    lastName: String
  },
  data() {
    return {
      message: 'Hello,'
    };
  },
  methods: {
    greet() {
      console.log(this.message + ' ' + this.fullName);
    }
  },
  computed: {
    fullName() {
      return this.firstName + ' ' + this.lastName;
    }
  }
};
</script>
```

In this example, we have a component that receives `firstName` and `lastName` as props. The `fullName` computed property concatenates the two props. The `greet` method uses the `fullName` property to log a greeting message to the console.

## Conclusion

Methods in Vue allow you to define reusable code and perform specific tasks within your components. They can be called in response to events or other actions and have access to the component's data and props. Using methods, you can encapsulate logic and keep your component's code clean and organized.
