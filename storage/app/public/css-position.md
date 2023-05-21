
# CSS Position

The `position` property in CSS allows you to control the positioning of elements on a web page. It determines how an element is positioned within its parent container or relative to other elements.

CSS provides several values for the `position` property:

- `static` (default)
- `relative`
- `absolute`
- `fixed`

## Static Positioning

By default, elements have a `position` value of `static`. In this mode, elements follow the normal flow of the document. They are positioned based on their order in the HTML structure and are not affected by the `top`, `bottom`, `left`, or `right` properties.

Here's an example:

```css
div {
  position: static;
}
```

In this example, the `<div>` element will be positioned statically.

## Relative Positioning

The `position: relative;` value allows you to position an element relative to its normal position. When an element is positioned relatively, you can use the `top`, `bottom`, `left`, and `right` properties to offset its position.

Here's an example:

```css
div {
  position: relative;
  top: 10px;
  left: 20px;
}
```

In this example, the `<div>` element will be positioned 10 pixels down and 20 pixels to the right from its normal position.

## Absolute Positioning

The `position: absolute;` value allows you to position an element relative to its nearest positioned ancestor or the containing block. An element with `position: absolute;` is taken out of the normal document flow, and its position is determined by the `top`, `bottom`, `left`, and `right` properties.

Here's an example:

```css
div {
  position: absolute;
  top: 50px;
  left: 100px;
}
```

In this example, the `<div>` element will be positioned 50 pixels down and 100 pixels to the right from its nearest positioned ancestor.

## Fixed Positioning

The `position: fixed;` value is similar to `position: absolute;`, but it positions the element relative to the viewport, regardless of scrolling. A fixed positioned element stays in the same position even when the page is scrolled.

Here's an example:

```css
div {
  position: fixed;
  top: 0;
  right: 0;
}
```

In this example, the `<div>` element will be positioned at the top-right corner of the viewport.

These are the basic values of the `position` property in CSS. By using these values and the associated properties (`top`, `bottom`, `left`, and `right`), you can precisely control the position of elements on your web page.
