
# HTML Block & Inline

In HTML, elements are categorized as either block-level elements or inline elements. Understanding the difference between these two types is important for controlling the layout and structure of your web page. Let's explore block-level elements and inline elements in this tutorial.

## Block-Level Elements

Block-level elements are those that create a block of content that spans the full width of its parent container. By default, block-level elements start on a new line and stack vertically. Some common block-level elements include `<div>`, `<p>`, `<h1>` to `<h6>`, `<ul>`, `<li>`, and more.

Here's an example of a block-level element:

```
```<div>
  This is a block-level element.
```</div>
```

Block-level elements are commonly used for grouping and organizing content, creating sections, and defining the overall structure of a web page. You can apply CSS styles to block-level elements to control their appearance, such as setting width, height, margins, and padding.

## Inline Elements

Inline elements, on the other hand, do not create a new line and do not break the flow of content. They are typically nested within block-level elements or other inline elements. Inline elements only take up the necessary width of their content and do not create a new block. Some common inline elements include `<span>`, `<a>`, `<strong>`, `<em>`, `<img>`, and more.

Here's an example of an inline element:

```
This is an example of an inline element: \<span>This is inline content\</span>.
```

Inline elements are often used for applying styles to specific portions of text, creating links, emphasizing text, and inserting images within a line of text. You can also apply CSS styles to inline elements, such as changing text color, font size, and text decorations.

## Controlling Display

It's important to note that the default display property of an element determines whether it's treated as a block-level element or an inline element. However, you can change the display property of an element using CSS to override the default behavior.

For example, you can change a block-level element to behave as an inline element:

```
```<div style="display: inline;">
  This block-level element will behave as an inline element.
```</div>
```

And you can change an inline element to behave as a block-level element:

```
```<span style="display: block;">
  This inline element will behave as a block-level element.
```</span>
```

By adjusting the display property, you have more flexibility in controlling the layout and positioning of elements on your web page.

## Conclusion

Understanding the distinction between block-level elements and inline elements is crucial for building well-structured and visually appealing web pages. Block-level elements create blocks of content that stack vertically, while inline elements flow within the text. By using these elements appropriately and leveraging CSS properties, you can design effective layouts and achieve the desired presentation of your web content.
