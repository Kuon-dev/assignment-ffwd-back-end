# Vue Templates

Templates in Vue.js are the building blocks of your application's user interface. They define the structure and content of the rendered HTML based on your data and component logic. In this tutorial, we'll explore how to use templates in Vue.

## Basic Template Syntax

Vue templates use a declarative syntax that allows you to bind data and create dynamic content. You can use double curly braces (`{{ }}`) for data interpolation and directives to apply special behaviors to elements. Here's an example:

```html
<template>
  <div>
    <h1>{{ title }}</h1>
    <p v-if="showMessage">{{ message }}</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: 'Vue Templates',
      showMessage: true,
      message: 'Welcome to Vue!'
    };
  }
};
</script>
```

In this example, the template contains an `<h1>` element that displays the `title` data property using interpolation (`{{ title }}`). It also includes a `<p>` element with a `v-if` directive that conditionally renders the `message` data property if `showMessage` is `true`. Vue updates the template automatically whenever the data properties change.

## Directives

Directives in Vue allow you to apply special behaviors to elements. They are prefixed with the `v-` prefix and provide additional functionality to your template. Here are some commonly used directives:

- **`v-if`**: Conditionally renders an element based on the truthiness of an expression.
- **`v-for`**: Renders a list of items based on an array or an object.
- **`v-bind`** or `:`: Binds an element's attribute or property to an expression.
- **`v-on`** or `@`: Attaches an event listener to an element.
- **`v-model`**: Creates a two-way data binding between a form input element and a data property.

Here's an example that demonstrates the usage of these directives:

```html
<template>
  <div>
    <ul>
      <li v-for="item in items" :key="item.id">{{ item.name }}</li>
    </ul>
    <input v-model="inputText" placeholder="Enter some text" />
    <button @click="addItem">Add Item</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        { id: 1, name: 'Item 1' },
        { id: 2, name: 'Item 2' },
        { id: 3, name: 'Item 3' }
      ],
      inputText: ''
    };
  },
  methods: {
    addItem() {
      if (this.inputText) {
        this.items.push({ id: Date.now(), name: this.inputText });
        this.inputText = '';
      }
    }
  }
};
</script>
```

In this example, the `v-for` directive iterates over the `items` array and renders a `<li>` element for each item. The `v-bind` directive is used to bind the `:key` attribute to the `item.id` value for proper list rendering. The `v-model` directive creates a two-way data binding between the input element and the `inputText` data property. The `v-on` directive is used to attach the `@click` event listener to the button, which calls the `addItem` method when clicked.


