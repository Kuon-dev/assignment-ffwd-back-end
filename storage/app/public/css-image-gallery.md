# CSS Image Gallery

In this tutorial, we will learn how to create a simple CSS image gallery. An image gallery is a common component used to display a collection of images in an organized and visually appealing manner. We will use HTML and CSS to build the gallery.

## HTML Structure

First, let's define the HTML structure for our image gallery. We will use an unordered list (`<ul>`) to hold the images and list items (`<li>`) to represent each image. Here's an example of the HTML structure:

```html
<ul class="image-gallery">
  <li><img src="image1.jpg" alt="Image 1"></li>
  <li><img src="image2.jpg" alt="Image 2"></li>
  <li><img src="image3.jpg" alt="Image 3"></li>
  <!-- Add more images as needed -->
</ul>
```

In the example above, we have a list of three images. You can add more images by duplicating the list item (`<li>`) and updating the `src` and `alt` attributes accordingly.

## CSS Styling

Next, let's apply some CSS styling to our image gallery to make it visually appealing. Here's an example of CSS styles you can use as a starting point:

```css
.image-gallery {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

.image-gallery li {
  border-radius: 5px;
  overflow: hidden;
}

.image-gallery img {
  width: 100%;
  height: auto;
}
```

In the CSS example above, we set the `list-style` to `none` to remove the default bullet points. We also remove the padding and margin from the image gallery to eliminate any unwanted spacing.

The `display: grid` property is used to create a grid layout for the gallery. We set `grid-template-columns` to `repeat(3, 1fr)` to create three equal-width columns. Adjust the number of columns as needed.

The `gap` property sets the spacing between the images. Feel free to adjust the value to your liking.

We apply some basic styling to the list items and images. The `border-radius` property adds rounded corners to the images, while `overflow: hidden` ensures that the images do not overflow outside their containers.

The `width: 100%` and `height: auto` properties on the images ensure that they scale proportionally and fit within their containers.

## Enhancements and Customization

You can further enhance and customize your image gallery by adding transitions, hover effects, captions, or additional layout modifications. Experiment with different CSS properties and values to achieve the desired look and feel.

## Conclusion

By following this tutorial, you have learned how to create a simple CSS image gallery. With HTML and CSS, you can create visually appealing galleries to showcase your images. Feel free to expand upon this tutorial and add your own creative touch to make your image gallery unique.

