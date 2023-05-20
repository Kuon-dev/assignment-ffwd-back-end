
# HTML ID

In HTML, the `id` attribute is used to uniquely identify an element on a web page. Unlike the `class` attribute, which can be applied to multiple elements, the `id` attribute should only be used for a single element. The `id` attribute provides a way to select and target a specific element for styling or scripting purposes. Let's explore how to use the `id` attribute in HTML.

## Adding an ID to an Element

To add an ID to an HTML element, you can use the `id` attribute. The value of the `id` attribute should be unique within the HTML document. You can assign any meaningful name to the ID, but it should not be repeated elsewhere in the document.

Here's an example of adding an ID to a `<div>` element:

```
```<div id="my-id">
  This is a div element with the "my-id" ID.
```</div>
```

In this example, the element `<div id="my-id">` has been assigned the ID "my-id". Remember, the ID should be unique within the document.

## Targeting Elements with IDs

Once you have assigned an ID to an element, you can target and select it using CSS or JavaScript. To target an element with a specific ID, you can use the CSS selector `#idname`, where `idname` is the ID value you want to target.

Here's an example of styling an element with an ID:

```
```#my-id {
  color: blue;
  font-size: 16px;
}
```

In this example, the CSS rules inside the `#my-id` selector will be applied to the element with the ID "my-id". You can define various styling properties to customize the appearance of the element.

## Using IDs for Navigation

IDs are often used for creating internal links within a web page. You can use the `id` attribute to mark specific sections or elements that you want to link to from other parts of the page.

To create a link to an element with a specific ID, you can use the anchor tag `<a>` with the `href` attribute pointing to the ID value. Here's an example:

```
```<a href="#my-id">Go to My ID</a>
```

In this example, clicking on the "Go to My ID" link will scroll the page to the element with the ID "my-id". This allows users to navigate directly to a specific section of a long page.

## Conclusion

The `id` attribute in HTML provides a way to uniquely identify elements on a web page. By assigning IDs to elements, you can target them for styling, scripting, or creating internal links. Remember to use unique IDs within your HTML document and ensure meaningful names to maintain code readability and organization.
