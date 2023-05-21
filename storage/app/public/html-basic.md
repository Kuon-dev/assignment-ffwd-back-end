# Basic HTML Tutorial

HTML, which stands for HyperText Markup Language, is the standard markup language used to create web pages. It provides the structure and content of a webpage, defining elements such as headings, paragraphs, links, images, and more. In this tutorial, we will cover the basics of HTML to help you get started.

## HTML Document Structure

Every HTML document follows a basic structure. It starts with the `<!DOCTYPE html>` declaration, which specifies the HTML version being used. The document is enclosed within the `<html>` element, and it consists of two main sections: the `<head>` section and the `<body>` section.

The `<head>` section contains meta-information about the document, such as the page title, character encoding, CSS stylesheets, and JavaScript code. It is not displayed on the actual webpage.

The `<body>` section contains the visible content of the webpage, including text, images, links, and other HTML elements. This is what users see when they visit your webpage.

Here's an example of a basic HTML structure:

````html
<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>
  <body>
    <h1>Heading</h1>
    <p>This is a paragraph.</p>
  </body>
</html>
````

In the above example, we have a simple HTML document with a page title, a heading (`<h1>`), and a paragraph (`<p>`).

## HTML Elements

HTML elements are the building blocks of an HTML document. They are represented by tags and are used to define the structure and content of a webpage. Some commonly used HTML elements include:

- `<h1>` to `<h6>`: Headings of different levels
- `<p>`: Paragraph
- `<a>`: Anchor (link)
- `<img>`: Image
- `<ul>`: Unordered list
- `<li>`: List item
- `<div>`: Division or container
- `<span>`: Inline container
- `<table>`: Table
- `<form>`: Form

These are just a few examples, and there are many more HTML elements available for different purposes.

## Adding Styles and Formatting

While HTML provides the structure of a webpage, CSS (Cascading Style Sheets) is used to add styles and formatting to the HTML elements. With CSS, you can change the colors, fonts, sizes, alignments, and other visual aspects of your webpage.

To apply CSS styles, you can use inline styles, internal stylesheets, or external stylesheets. Inline styles are added directly to the HTML elements using the `style` attribute. Internal stylesheets are placed within the `<head>` section of the HTML document using the `<style>` tag. External stylesheets are created in separate CSS files and linked to the HTML document using the `<link>` tag.

Here's an example of applying CSS styles to a paragraph element:

````html
<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <style>
      p {
        color: blue;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <h1>Heading</h1>
    <p>This is a paragraph.</p>
  </body>
</html>
````

In the above example, we have added an internal stylesheet in the `<head>` section to set the color and font size of the paragraph (`<p>`) element.


