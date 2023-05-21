
# HTML Head

In HTML, the `<head>` element is a container that holds metadata and other important information about an HTML document. It is placed between the opening `<html>` tag and the opening `<body>` tag. The content within the `<head>` element is not displayed on the web page but provides essential instructions and data for the browser and search engines.

## Adding Metadata

One of the main purposes of the `<head>` element is to include metadata that describes the HTML document. Metadata provides information about the document's title, character encoding, CSS stylesheets, JavaScript files, and more. Here are some commonly used tags within the `<head>` element:

- `<title>`: Specifies the title of the web page that appears in the browser's title bar or tab.
- `<meta charset="utf-8">`: Specifies the character encoding for the document, typically set to UTF-8 for multi-language support.
- `<link rel="stylesheet" href="styles.css">`: Links an external CSS file to apply styles to the HTML document.
- `<script src="script.js"></script>`: Links an external JavaScript file to add interactivity and functionality to the web page.

Here's an example of a basic HTML document structure with the `<head>` element:

```
<html>
  <head>
    <title>My Web Page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
  </head>
  <body>
    <!-- Content of the web page goes here -->
  </body>
</html>
```

In this example, the `<title>` tag sets the title of the web page, the `<meta>` tag specifies the character encoding, the `<link>` tag links an external CSS file, and the `<script>` tag links an external JavaScript file.

## Search Engine Optimization (SEO)

The `<head>` element is also crucial for search engine optimization (SEO). By including relevant metadata, you can provide search engines with information about your web page, such as keywords, descriptions, and authorship. This helps search engines understand and index your content correctly.

