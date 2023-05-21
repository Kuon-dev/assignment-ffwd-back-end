
# HTML SVG

Scalable Vector Graphics (SVG) is a markup language for describing two-dimensional vector graphics in XML format. It provides a powerful and flexible way to create and display graphics on the web. SVG graphics are resolution-independent, meaning they can be scaled to any size without losing quality. Let's explore the basics of using SVG in HTML.

## Adding SVG to HTML

To include an SVG image in an HTML document, you can use the `<svg>` element. Here's an example:

```[html
<svg width="200" height="200">
  <circle cx="100" cy="100" r="50" fill="red" />
</svg>
```

In the code above, we define an SVG element with a width and height of 200 units. Within the SVG element, we draw a circle using the `<circle>` element. The `cx` and `cy` attributes specify the center coordinates of the circle, and the `r` attribute defines the radius. The `fill` attribute determines the color of the circle, which in this case is set to "red".

You can add other SVG elements like rectangles, lines, and paths to create more complex graphics. SVG also supports various styling and animation options to enhance the visual appearance of the graphics.

SVG images can be embedded directly within an HTML file or referenced externally using the `<img>` tag or CSS background property.

## Benefits of SVG

Using SVG in HTML offers several benefits:

- Scalability: SVG graphics can be scaled up or down without losing quality, making them ideal for responsive web design.
- Interactivity: SVG supports event handlers and animations, allowing for interactive and dynamic graphics.
- Accessibility: SVG images can be easily styled and customized to ensure compatibility with different accessibility requirements.
- Searchability: SVG content is readable by search engines, enabling better indexing and search results.

With its versatility and compatibility, SVG is a valuable tool for creating visually appealing and interactive graphics on the web.
