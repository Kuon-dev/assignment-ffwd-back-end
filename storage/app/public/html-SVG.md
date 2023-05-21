# HTML SVG

SVG (Scalable Vector Graphics) is a powerful technology that allows you to create and manipulate vector graphics directly in HTML. SVG images are resolution-independent and can be scaled without losing quality, making them ideal for creating icons, illustrations, and interactive graphics on the web. In this tutorial, we'll explore the basics of using SVG in HTML.

## Including SVG in HTML

To include an SVG image in an HTML document, you can use the `<svg>` element. The `<svg>` element is a container that defines a new SVG document fragment. You can place SVG shapes, paths, and other elements inside it.

Here's an example of embedding an SVG image in HTML:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>SVG Example</title>
  </head>
  <body>
    <svg width="200" height="200">
      <circle cx="100" cy="100" r="50" fill="red" />
    </svg>
  </body>
</html>
```

In the above example, we create a simple SVG image using the `<svg>` element. The `width` and `height` attributes specify the dimensions of the SVG canvas. Inside the `<svg>` element, we add a `<circle>` element to draw a red circle at the center of the canvas.

## SVG Elements and Attributes

SVG provides a wide range of elements and attributes to create complex graphics. Here are some commonly used SVG elements:

- `<rect>`: Represents a rectangle or a rounded rectangle.
- `<circle>`: Represents a circle.
- `<ellipse>`: Represents an ellipse or a circle with different x and y radii.
- `<line>`: Represents a straight line segment.
- `<polyline>`: Represents a series of connected straight line segments.
- `<polygon>`: Represents a closed shape formed by connecting multiple points.
- `<path>`: Represents a complex shape defined by a series of path commands.

Each SVG element has its own set of attributes that control its appearance and behavior. For example, the `<circle>` element has attributes like `cx` (center x-coordinate), `cy` (center y-coordinate), and `r` (radius) to define the circle's position and size.

## Styling SVG

You can style SVG elements using CSS, just like you would style HTML elements. SVG supports various CSS properties, including `fill` (background color), `stroke` (outline color), `stroke-width` (outline thickness), `opacity` (transparency), and many more.

Here's an example of styling an SVG circle using CSS:

```html
<svg width="200" height="200">
  <circle cx="100" cy="100" r="50" class="my-circle" />
</svg>

<style>
  .my-circle {
    fill: blue;
    stroke: black;
    stroke-width: 2px;
  }
</style>
```

In the above example, we assign the class `my-circle` to the `<circle>` element and apply CSS styles to it. The `fill` property sets the circle's background color to blue, while the `stroke` property sets the outline color to black, and `stroke-width` defines the outline thickness.

## Interactivity and Animation

SVG allows you to add interactivity and animation to your graphics. You can use JavaScript and SVG's event attributes like `onclick`, `onmouseover`, etc., to respond to user interactions. Additionally, SVG supports animations using CSS or SMIL (Synchronized Multimedia Integration Language).

Here's an example of adding interactivity to an SVG circle:

```html
<svg width="200" height="200">
  <circle cx="100" cy="100" r="50" onclick="alert('Clicked!')" />
</svg>
```

In the above example, we attach an `onclick` attribute to the `<circle>` element, which triggers an alert box when the circle is clicked.

## Conclusion

SVG is a versatile technology that allows you to create and manipulate scalable vector graphics directly in HTML. By using the `<svg>` element, various SVG elements and attributes, CSS styling, and adding interactivity and animation, you can create rich and interactive graphics for your web applications. Experiment with different shapes, styles, and effects to unleash the full potential of SVG!
