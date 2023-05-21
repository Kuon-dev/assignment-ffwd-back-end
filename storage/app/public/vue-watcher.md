# Vue Watchers

Watchers in Vue.js are a powerful feature that allows you to watch for changes in specific data properties and perform custom actions when those changes occur. Watchers provide a way to reactively respond to data changes that don't involve computed properties or methods. In this tutorial, we'll explore how to use watchers in Vue.

## Basic Usage

To define a watcher in Vue, you need to declare it inside the `watch` object of your component. Watchers are associated with specific data properties and execute a callback function when the watched property changes. Here's an example:

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
  watch: {
    counter(newValue, oldValue) {
      console.log(`Counter changed from ${oldValue} to ${newValue}`);
    }
  },
  methods: {
    incrementCounter() {
      this.counter++;
    }
  }
};
</script>
```

In this example, we define a watcher for the `counter` data property. Whenever the value of `counter` changes, the watcher's callback function is executed. In this case, the callback logs a message to the console indicating the old and new values of `counter`.

## Watcher Options

Vue watchers provide additional options to customize their behavior. Here are some commonly used options:

- **`deep`**: By default, watchers perform shallow equality checks on watched data properties. Setting `deep: true` enables deep watching, which performs a deep equality check. This is useful when you need to watch changes in nested objects or arrays.
- **`immediate`**: By default, watchers are not called immediately when they are created. Setting `immediate: true` ensures that the watcher's callback function is executed immediately with the initial value of the watched property.
- **`handler`**: Instead of providing a callback function directly in the watcher definition, you can separate the callback function using the `handler` option. This can be useful when you want to reuse the same callback function in multiple watchers or define the callback function elsewhere in your component.

Here's an example that demonstrates these watcher options:

```vue
<template>
  <div>
    <p>Person: {{ person.name }}</p>
    <p>Age: {{ person.age }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      person: {
        name: 'John',
        age: 30
      }
    };
  },
  watch: {
    'person.name'(newValue, oldValue) {
      console.log(`Name changed from ${oldValue} to ${newValue}`);
    },
    'person.age': {
      handler(newValue, oldValue) {
        console.log(`Age changed from ${oldValue} to ${newValue}`);
      },
      deep: true,
      immediate: true
    }
  }
};
</script>
```

In this example, we define two watchers: one for the `person.name` property and another for the `person.age` property. The first watcher directly specifies the callback function, while the second watcher uses the `handler` option. The second watcher also enables deep watching and immediate invocation.


