
# CSS Syntax

CSS syntax is the set of rules and conventions used to write valid CSS code. Understanding the CSS syntax is essential for creating and applying styles to HTML elements effectively.

## CSS Rule

A CSS rule consists of a selector and one or more declarations. The selector determines which HTML elements the rule applies to, and the declarations define the styles to be applied. Here's the basic structure of a CSS rule:

```css
selector {
  property: value;
}
```

Let's break down each part of the CSS rule:

- **Selector**: The selector specifies the HTML elements that the rule targets. It can be an element selector, class selector, ID selector, or other types of selectors. For example, `h1` selects all `<h1>` elements, `.my-class` selects elements with `class="my-class"`, and `#my-id` selects the element with `id="my-id"`.
- **Property**: The property defines the specific style attribute you want to set. Examples of properties include `color`, `font-size`, `background-image`, and many more. Each property has a specific purpose and accepted values.
- **Value**: The value is the assigned value for the property. It determines the specific style or behavior you want to apply to the selected elements. For example, `color: blue`, `font-size: 16px`, `background-image: url('image.jpg')`.

## CSS Comments

Comments in CSS allow you to add explanatory notes or disable specific code without affecting the styles. CSS comments are ignored by the browser and are only visible in the code. Here's the syntax for CSS comments:

```css
/* This is a CSS comment */
```

Comments start with `/*` and end with `*/`. Anything between these symbols is considered a comment and is not executed by the browser.

## CSS Declarations

CSS declarations are used to define specific styles for the selected elements. Each declaration consists of a property-value pair separated by a colon (`:`). Multiple declarations are separated by semicolons (`;`). Here's an example of CSS declarations:

```css
h1 {
  color: blue;
  font-size: 24px;
  margin-top: 10px;
}
```

In the example above, the `h1` selector targets all `<h1>` elements, and the declarations specify that the text color should be blue, the font size should be 24 pixels, and there should be a margin of 10 pixels on the top.

## CSS Selectors

CSS selectors determine which HTML elements the styles should be applied to. There are various types of selectors available in CSS, including:

- **Element Selector**: Targets elements based on their tag name. For example, `h1` selects all `<h1>` elements.
- **Class Selector**: Targets elements with a specific class attribute. For example, `.my-class` selects all elements with `class="my-class"`.
- **ID Selector**: Targets an element with a specific ID attribute. For example, `#my-id` selects the element with `id="my-id"`.
- **Attribute Selector**: Targets elements based on their attribute values. For example, `[type="text"]` selects all elements with `type="text"`.

These are just a few examples of CSS selectors. There are many more selectors available to target elements based on different criteria.

## CSS Specificity

CSS specificity determines which styles are applied when multiple conflicting rules target the same element. It is a calculation of how specific a selector is. In general, the more specific a selector, the higher its priority.
