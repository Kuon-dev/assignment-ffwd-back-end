# Vue Components

Components in Vue.js are reusable and self-contained units that encapsulate a specific piece of user interface and its associated logic. They promote code reusability, organization, and maintainability in your Vue applications. In this tutorial, we'll explore how to create and use components in Vue.

## Creating a Component

To create a component in Vue, you need to define a new Vue instance using the `Vue.component()` method or create a single-file component (SFC) using a `.vue` file. Let's start with the first approach:

```vue
<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ message }}</p>
  </div>
</template>

<script>
Vue.component('my-component', {
  data() {
    return {
      title: 'My Component',
      message: 'Hello from my component!'
    };
  }
});
</script>
```

In this example, we use the `Vue.component()` method to create a component named `my-component`. The component's template contains an `<h1>` element displaying the `title` data property and a `<p>` element displaying the `message` data property.

## Using a Component

Once you have defined a component, you can use it in other Vue instances or components. To use a component, you can include it as a custom element in the template. Here's an example:

```vue
<template>
  <div>
    <my-component></my-component>
  </div>
</template>

<script>
export default {
  // ...
};
</script>
```

In this example, we include the `my-component` custom element within another component's template. Vue will render the component and replace the custom element with the component's template.

## Single-File Components (SFC)

Single-File Components (SFC) provide a convenient way to define components in Vue applications. SFCs encapsulate the template, script, and styles of a component in a single `.vue` file. Here's an example of a basic SFC:

```vue
<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ message }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: 'My Component',
      message: 'Hello from my component!'
    };
  }
};
</script>

<style>
h1 {
  color: blue;
  font-size: 20px;
}
</style>
```

In this example, the SFC contains the template, script, and styles sections. The template section defines the component's HTML structure, the script section defines the component's logic, and the styles section defines the component's styles.

To use an SFC in your application, you can import it as a JavaScript module and include it in your template or other components.

## Component Props

Components can receive data from their parent components using props. Props allow you to pass data from a parent component to a child component. Here's an example:

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
    title: {
      type: String,
      default: 'Default Title'
    },
    message: {
      type: String,
      required: true
    }
  }
};
</script>
```
