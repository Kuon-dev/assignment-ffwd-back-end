# CSS Navigation Bar

A navigation bar is an essential component of a website that helps users navigate and access different sections or pages. In this tutorial, we will explore how to create a basic CSS navigation bar from scratch.

## HTML Structure

To begin, let's define the HTML structure for our navigation bar. Typically, a navigation bar consists of an unordered list (`<ul>`) containing multiple list items (`<li>`), where each list item represents a navigation link.

Here's an example of the HTML structure:

```html
<nav>
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>
```

## Styling the Navigation Bar

Now, let's add some CSS styles to create a visually appealing navigation bar. We can use CSS selectors to target specific elements and apply styles accordingly.

Here's an example of CSS styles for the navigation bar:

```css
nav {
  background-color: #f2f2f2;
  padding: 10px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 10px;
}

nav li a {
  text-decoration: none;
  color: #333;
  padding: 5px;
}

nav li a:hover {
  background-color: #333;
  color: #fff;
}
```

In this example, we set a background color and padding for the `nav` element, remove the default list styles for the `ul`, display the list items inline, and add some spacing between them using the `margin-right` property. We also style the anchor links inside the list items, removing the underline and setting the color and padding. Additionally, we change the background color and text color when hovering over the links.

Feel free to customize the styles based on your design preferences.

## Responsive Navigation

To create a responsive navigation bar that adapts to different screen sizes, we can utilize CSS media queries. By applying different styles at different breakpoints, we can make the navigation bar collapse into a mobile-friendly menu on smaller screens.

Here's an example of CSS styles for a responsive navigation bar:

```css
@media (max-width: 768px) {
  nav ul {
    display: none;
  }

  nav li {
    display: block;
    margin-bottom: 10px;
  }

  nav li a {
    display: block;
    padding: 10px;
    background-color: #f2f2f2;
    color: #333;
  }
}
```

In this example, we use a media query to target screens with a maximum width of 768 pixels. Within the media query, we hide the unordered list (`nav ul`) to collapse the navigation on smaller screens. We change the list items (`nav li`) to display as block elements with margin-bottom for vertical spacing. The anchor links (`nav li a`) are also styled as blocks with padding, background color, and text color.

Again, feel free to customize the styles and breakpoints to suit your needs.

## Conclusion

Creating a CSS navigation bar is an essential skill for web developers. By defining the HTML structure and applying CSS styles, you can design and customize navigation bars to enhance the user experience on your websites.

Remember to consider responsiveness by using media queries to adapt the navigation bar for different screen sizes. Experiment with different styles, colors, and layouts to create unique and user-friendly navigation bars.

