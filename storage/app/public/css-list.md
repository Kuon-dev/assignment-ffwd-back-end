
# CSS List

CSS provides several properties that allow you to style and customize the appearance of lists. Whether you're working with unordered lists (`<ul>`) or ordered lists (`<ol>`), CSS allows you to control the bullet points, numbering, spacing, and other aspects of the list.

## Changing List Styles

By default, unordered lists are displayed with bullet points, and ordered lists are displayed with numbers. You can change the style of the list markers using the `list-style-type` property. Here's an example:

`````````css
ul {
  list-style-type: square;
}

ol {
  list-style-type: upper-roman;
}
`````````

In this example, the unordered list will have square bullet points, while the ordered list will use uppercase Roman numerals.

## Removing List Styles

If you want to remove the default list styles, you can set the `list-style-type` property to `none`. This will remove the bullet points or numbering from the list. Here's an example:

`````````css
ul, ol {
  list-style-type: none;
}
`````````

In this example, both unordered and ordered lists will have no bullet points or numbering.

## Customizing List Images

Instead of using default bullet points, you can customize the list markers with your own images using the `list-style-image` property. Here's an example:

`````````css
ul {
  list-style-image: url('bullet.png');
}
`````````

In this example, the unordered list will use the image 'bullet.png' as the list marker.

## Adjusting List Positioning

CSS allows you to control the positioning of the list markers using the `list-style-position` property. By default, the markers are placed outside the list items. However, you can change this behavior to place the markers inside the list items. Here's an example:

`````````css
ul {
  list-style-position: inside;
}
`````````

In this example, the list markers will be positioned inside the list items.
