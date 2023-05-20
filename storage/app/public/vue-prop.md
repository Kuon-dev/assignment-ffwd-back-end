# Vue Props

Props in Vue.js allow you to pass data from a parent component to a child component. They enable communication and data sharing between components, making your Vue application more modular and reusable. In this tutorial, we'll explore how to use props in Vue.

## Passing Props

To pass props to a child component, you can use the `v-bind` directive or the colon (`:`) shorthand in your template. Here's an example:

```vue
<template>
  <div>
    <child-component :title="pageTitle" :message="welcomeMessage" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      pageTitle: 'Welcome to My App',
      welcomeMessage: 'Hello, Vue!'
    };
  }
};
</script>
```

In this example, the parent component passes two props, `title` and `message`, to the `child-component` using the `v-bind` directive. The values of the props are bound to the data properties `pageTitle` and `welcomeMessage` of the parent component.

## Receiving Props

To receive and use props in a child component, you need to declare them in the child component's `props` option. Here's an example:

```vue
<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ message }}</p>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    message: {
      type: String,
      required: true
    }
  }
};
</script>
```

In this example, the child component declares two props, `title` and `message`, in its `props` option. The `title` prop is of type `String`, and the `message` prop is also of type `String` but is marked as `required`. The values of these props can be accessed and used within the child component's template.

## Using Props in the Child Component

Once the props are received in the child component, you can utilize them in the template or the component's logic. Here's an example:

```vue
<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ message }}</p>
    <p>{{ formattedMessage }}</p>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    message: String
  },
  computed: {
    formattedMessage() {
      return this.message.toUpperCase();
    }
  }
};
</script>
```

In this example, the child component uses the received props `title` and `message` in the template to display the values. Additionally, a computed property named `formattedMessage` is defined to transform the `message` prop to uppercase using the `toUpperCase()` method.



