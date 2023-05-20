
# CSS Website Layout

Creating a well-structured and visually appealing website layout is essential for a great user experience. In this tutorial, we'll explore how to use CSS to create a basic website layout with a header, navigation bar, content area, and footer.

## HTML Structure

Before diving into the CSS code, let's first define the HTML structure for our website layout. Here's a basic example:

```html
`````````html
<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>My Website</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>

  <main>
    <!-- Content goes here -->
  </main>

  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
</body>
</html>
