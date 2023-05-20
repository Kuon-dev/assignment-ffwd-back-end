# HTML Responsive Design

Responsive design is an essential concept in web development that allows websites to adapt and provide an optimal viewing experience across different devices and screen sizes. By applying responsive techniques, you can ensure that your web pages look and function well on desktops, laptops, tablets, and mobile devices.

## Using CSS Media Queries

CSS media queries are a fundamental tool for creating responsive designs. They allow you to apply different CSS styles based on the characteristics of the user's device, such as screen width, height, orientation, and resolution.

Here's an example of how you can use media queries to adjust the layout of an HTML element based on screen width:

```css
.container {
  width: 100%;
}

@media (min-width: 768px) {
  .container {
    width: 80%;
  }
}

@media (min-width: 1200px) {
  .container {
    width: 60%;
  }
}
```

In the example above, the `.container` class is set to occupy the full width of the screen by default. However, when the screen width reaches 768 pixels or more, the container's width is adjusted to 80%. And when the screen width reaches 1200 pixels or more, the container's width is further reduced to 60%.

By utilizing media queries and adjusting various CSS properties, such as widths, heights, font sizes, and positioning, you can create responsive designs that adapt to different screen sizes and devices.


