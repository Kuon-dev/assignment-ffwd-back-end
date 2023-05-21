
# CSS Variables

CSS variables, also known as CSS custom properties, allow you to store and reuse values in your CSS stylesheets. They provide a convenient way to manage and update common values across your styles, making your code more flexible and maintainable. Let's explore how to use CSS variables.

## Declaring CSS Variables

To declare a CSS variable, use the `--` prefix followed by a name and assign a value to it. Here's an example:

```css
:root {
  --primary-color: #ff0000;
}
```

In this example, we declare a variable named `--primary-color` and set it to `#ff0000`, which is a red color. The `:root` selector ensures that the variable is available throughout the document.

## Using CSS Variables

You can use CSS variables by referencing them using the `var()` function. Here's an example:

```css
h1 {
  color: var(--primary-color);
}
```

In this example, we apply the value of the `--primary-color` variable to the `color` property of `h1` elements. If you update the variable value, all elements referencing it will inherit the new color.

## Variable Scope

CSS variables have a scope that defines where they can be accessed. When declared inside a selector, the variable is scoped to that selector and its descendants. Here's an example:

```css
.section {
  --background-color: #f2f2f2;

  .content {
    background-color: var(--background-color);
  }
}
```

In this example, the `--background-color` variable is scoped to the `.section` selector and can be used by its descendant elements, like `.content`.

## Modifying CSS Variables with JavaScript

CSS variables can also be modified dynamically using JavaScript. You can access and update the variable value using the `setProperty()` method. Here's an example:

```javascript
const element = document.querySelector('.element');
element.style.setProperty('--primary-color', '#00ff00');
```

In this example, we select an element with the class `.element` and update the value of the `--primary-color` variable to `#00ff00`, which is a green color. The change will be reflected in the element's styles.

## Inheritance and Cascading

CSS variables follow the rules of inheritance and cascading. When a variable is not defined for an element, it will inherit the value from its parent element. If the variable is not defined at all in the hierarchy, the browser will use the initial value.

## Using CSS Variables in Media Queries

CSS variables can also be used in media queries to create responsive designs. Here's an example:

```css
:root {
  --max-width: 800px;
}

@media (max-width: var(--max-width)) {
  /* Styles for smaller screens */
}
```

In this example, we define a `--max-width` variable and use it in a media query to specify different styles for screens with a maximum width equal to the variable's value.

## Browser Support

CSS variables are supported in modern browsers, including most versions of Chrome, Firefox, Safari, and Edge. However, some older browsers, such as Internet Explorer, do not support CSS variables.

## Conclusion

CSS variables are a powerful feature that allows you to define and reuse values throughout your stylesheets. They provide flexibility and maintainability, making it easier to update styles across your website. Start using CSS variables in your projects to streamline your CSS code and create more dynamic designs.
```
