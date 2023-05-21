
# CSS Border

The CSS `border` property allows you to define the style, width, and color of an element's border. Borders can be applied to various HTML elements such as paragraphs, headings, divs, and more.

The `border` property is shorthand for specifying the following individual properties:

- `border-width`: sets the width of the border.
- `border-style`: sets the style of the border (e.g., solid, dashed, dotted).
- `border-color`: sets the color of the border.

## Setting Border Properties

To set the border properties, you can use the following syntax:

```css
selector {
  border: [width] [style] [color];
}
```

Let's break down each property:

- `[width]`: Specifies the width of the border. It can be a specific value (e.g., `1px`, `2px`) or one of the predefined values (`thin`, `medium`, `thick`).
- `[style]`: Defines the style of the border. Common styles include `solid`, `dashed`, `dotted`, `double`, and `none`.
- `[color]`: Sets the color of the border. You can use named colors (e.g., `red`, `blue`), hexadecimal codes (e.g., `#ff0000`, `#00ff00`), or RGB values (`rgb(255, 0, 0)`).

## Example Usage

Here's an example of applying a border to a `<div>` element:

```css
div {
  border: 2px solid red;
}
```

In this example, the `<div>` element will have a 2-pixel-wide solid border with a red color.

## Individual Border Properties

If you want to specify each border property individually, you can do so as follows:

```css
selector {
  border-width: [width];
  border-style: [style];
  border-color: [color];
}
```

For instance:

```css
div {
  border-width: 1px;
  border-style: dashed;
  border-color: blue;
}
```

In this case, the `<div>` element will have a 1-pixel-wide dashed border with a blue color.

By manipulating the values of the `border` properties, you can create various border styles to enhance the appearance of your elements.

Remember, the `border` property is not limited to specific elements and can be applied to different selectors, such as paragraphs, headings, or even specific classes or IDs.

Experiment with different values and styles to achieve the desired border effect for your web page!
