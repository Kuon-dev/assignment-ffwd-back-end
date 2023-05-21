
# CSS Selectors

CSS selectors are an essential part of styling HTML elements. They allow you to target specific elements or groups of elements and apply styles to them. Let's explore some commonly used CSS selectors:

## Element Selector

The element selector targets elements based on their tag name. It selects all instances of a particular HTML element. Here's an example:

`````````css
p {
  color: blue;
}
`````````

In the example above, the `p` selector targets all `<p>` elements and sets their text color to blue.

## Class Selector

The class selector targets elements based on their class attribute. It is denoted by a dot (`.`) followed by the class name. Here's an example:

`````````css
.my-class {
  font-weight: bold;
}
`````````

In the example above, the `.my-class` selector targets all elements with `class="my-class"` and makes the text bold.

## ID Selector

The ID selector targets a specific element based on its ID attribute. It is denoted by a hash (`#`) followed by the ID name. Here's an example:

`````````css
#my-id {
  background-color: yellow;
}
`````````

In the example above, the `#my-id` selector targets the element with `id="my-id"` and sets its background color to yellow.

## Attribute Selector

The attribute selector targets elements based on their attribute values. It is denoted by square brackets (`[]`). Here are a few examples:

- Select elements with a specific attribute: `[attribute]`
- Select elements with a specific attribute and value: `[attribute="value"]`
- Select elements with an attribute containing a specific value: `[attribute*="value"]`

For instance:

`````````css
[type="text"] {
  border: 1px solid gray;
}
`````````

In the example above, the `[type="text"]` selector targets all elements with `type="text"` and adds a gray border.

## Descendant Selector

The descendant selector targets elements that are descendants of a specific element. It is denoted by a space between two selectors. For example:

`````````css
div p {
  font-style: italic;
}
`````````

In the example above, the `div p` selector targets all `<p>` elements that are descendants of `<div>` elements and sets their font style to italic.

These are just a few examples of CSS selectors. There are many more selectors available, including child selector, adjacent sibling selector, and more. Selectors provide powerful ways to target and style specific elements, allowing you to create visually appealing and well-structured web pages.
