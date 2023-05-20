
# What is CSS?

CSS stands for Cascading Style Sheets. It is a styling language used to describe the appearance and formatting of a document written in HTML or XML. CSS is an essential technology for web development as it allows you to control the visual presentation of web pages.

## How CSS Works

CSS works by associating style rules with HTML elements. These style rules define how the elements should be displayed in a web browser. The rules consist of selectors and declarations. Here's an example:

```css
p {
  color: blue;
  font-size: 16px;
}
```

In the example above, `p` is a selector that targets all `<p>` elements. The declarations within the curly braces specify the styles to be applied to the selected elements. In this case, the color is set to blue and the font size is set to 16 pixels.

CSS follows a cascading order, which means that multiple style rules can be applied to the same element. The order of precedence is determined by specificity and the order in which the rules are defined.

## CSS Selectors

CSS selectors are used to target specific HTML elements for styling. Some common CSS selectors include:

- **Element Selector**: Targets elements based on their tag name. For example, `p` selects all `<p>` elements.
- **Class Selector**: Targets elements with a specific class attribute. For example, `.my-class` selects all elements with `class="my-class"`.
- **ID Selector**: Targets an element with a specific ID attribute. For example, `#my-id` selects the element with `id="my-id"`.
- **Attribute Selector**: Targets elements based on their attribute values. For example, `[type="text"]` selects all elements with `type="text"`.

These are just a few examples of CSS selectors. There are many more selectors available to target elements based on different criteria.

## External CSS

CSS can be applied to HTML documents in multiple ways. One common method is to use external CSS files. By linking an external CSS file to an HTML document, you can keep the styles separate from the HTML structure, making it easier to manage and update the styles across multiple pages. Here's an example of linking an external CSS file:

```html
<link rel="stylesheet" href="styles.css">
```

In the example above, the `<link>` element is used to link the external CSS file `styles.css` to the HTML document.

## Summary

CSS is a powerful language for styling web pages. It allows you to control the visual presentation of HTML elements by defining style rules. CSS uses selectors to target specific elements and declarations to specify the desired styles. By understanding CSS, you can enhance the appearance and layout of your web pages, making them visually appealing and user-friendly.

For more in-depth learning about CSS, you can refer to the [CSS documentation](https://developer.mozilla.org/en-US/docs/Web/CSS) on MDN (Mozilla Developer Network).
