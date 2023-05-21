# Vue Template Ref

In Vue.js, the `ref` attribute allows you to access a reference to an element or a child component within your template. This is useful when you need to manipulate or interact with that element or component programmatically. In this tutorial, we'll explore how to use the `ref` attribute in Vue templates.

## Accessing Elements with `ref`

To access an element using the `ref` attribute, you can assign a unique identifier to the element and reference it in your Vue component. Here's an example:

```html
<template>
  <div>
    <h1 ref="pageTitle">Hello, Vue!</h1>
  </div>
</template>
```

In this example, we have an `h1` element with the `ref` attribute set to `"pageTitle"`. This assigns a reference to the element, allowing us to access it in our Vue component.

To access the element in the component, we can use the `$refs` property. Here's an example of accessing and manipulating the element:

```javascript
export default {
  mounted() {
    const pageTitleElement = this.$refs.pageTitle;
    pageTitleElement.style.color = 'red';
  },
};
```

In the `mounted` lifecycle hook, we use `this.$refs.pageTitle` to access the element with the `"pageTitle"` ref. We can then manipulate the element, in this case, changing its text color to red.

## Accessing Child Components with `ref`

You can also use the `ref` attribute to access child components within a parent component. This is useful when you need to call methods or access properties of the child component. Here's an example:

```html
<template>
  <div>
    <ChildComponent ref="childComponent"></ChildComponent>
  </div>
</template>
```

In this example, we have a `ChildComponent` that we want to access in the parent component. We assign a `ref` attribute with the value `"childComponent"` to the `ChildComponent` tag.

To access the child component in the parent component, we can use the `$refs` property, just like we did with the element reference. Here's an example:

```javascript
export default {
  mounted() {
    const childComponent = this.$refs.childComponent;
    childComponent.doSomething();
  },
};
```

In the `mounted` lifecycle hook of the parent component, we use `this.$refs.childComponent` to access the child component with the `"childComponent"` ref. We can then call methods or access properties of the child component.

## Limitations and Considerations

When using the `ref` attribute, keep in mind the following:

- The `ref` attribute can only be used on elements or components within the same template.
- If a `ref` is used on a component, the reference will point to the component instance rather than the root element of the component.
- When accessing elements with `ref`, make sure the element has been rendered before accessing it. You can use the `mounted` lifecycle hook or other appropriate hooks to ensure the element is available.

## Conclusion

The `ref` attribute in Vue templates allows you to access elements and child components within your components. It provides a way to manipulate and interact with them programmatically. By understanding how to assign `ref` attributes to elements and components and how to access them using the `$refs` property, you can enhance the functionality and interactivity of your Vue applications.
