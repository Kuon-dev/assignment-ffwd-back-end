
# CSS Display

The `display` property in CSS allows you to control the layout and behavior of elements on a web page. It determines how an element is rendered and how it interacts with other elements.

## Block-Level Elements

By default, most HTML elements are considered block-level elements. They take up the full width of their container and start on a new line. Examples of block-level elements include `<div>`, `<p>`, `<h1>` to `<h6>`, and `<ul>`.

To explicitly set an element as a block-level element, you can use the `display: block;` property. Here's an example:

`````````css
div {
  display: block;
}
`````````

In this example, the `<div>` element will be displayed as a block-level element.

## Inline Elements

Inline elements, on the other hand, do not start on a new line and only take up the necessary width to fit their content. Examples of inline elements include `<span>`, `<a>`, `<strong>`, and `<em>`.

To set an element as an inline element, you can use the `display: inline;` property. Here's an example:

`````````css
span {
  display: inline;
}
`````````

In this example, the `<span>` element will be displayed as an inline element.

## Inline-Block Elements

The `display: inline-block;` property allows you to combine the characteristics of block-level and inline elements. Inline-block elements are laid out in a flow like inline elements but also respect width, height, padding, and margin properties like block-level elements. This is useful when you want to have elements displayed side by side with block-level properties.

Here's an example:

`````````css
button {
  display: inline-block;
  width: 100px;
  height: 40px;
  background-color: blue;
  color: white;
}
`````````

In this example, the `<button>` element will be displayed as an inline-block element with a width of 100 pixels, a height of 40 pixels, a blue background color, and white text color.

## None

The `display: none;` property is used to hide an element completely. It removes the element from the normal flow of the document, and it won't take up any space or be visible on the page. This is often used in cases where you want to hide an element dynamically using JavaScript or CSS.

Here's an example:

`````````css
.hide {
  display: none;
}
`````````

In this example, any element with the class `.hide` will not be displayed on the page.

These are just a few examples of how the `display` property can be used in CSS to control the layout and behavior of elements. By understanding and utilizing the different display values, you can create more flexible and responsive designs.
