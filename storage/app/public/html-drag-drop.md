
# HTML Drag & Drop

The HTML Drag and Drop API allows you to create interactive web applications that support drag and drop functionality. In this tutorial, we'll explore how to implement drag and drop functionality using HTML.

## Drag Source

To make an element draggable, you need to set the `draggable` attribute to `true`. Here's an example of how to create a draggable element:

```html
<div draggable="true">Drag me!</div>
```

When the user interacts with the element, they will be able to drag it within the browser window.

## Drop Target

A drop target is an element where draggable elements can be dropped. To define a drop target, you need to handle the `dragover` and `drop` events.

Here's an example of how to create a drop target:

```html
<div ondragover="event.preventDefault()" ondrop="drop(event)">Drop here!</div>
```

In the example above, we use the `ondragover` event to prevent the default behavior of the browser when a draggable element is being dragged over the drop target. The `ondrop` event is used to handle the drop event and perform any necessary actions.

## Drag and Drop Event Handlers

To handle drag and drop events, you can define JavaScript functions that will be executed when specific events occur. Here are the commonly used events for drag and drop:

- `ondragstart`: Triggered when the user starts dragging an element.
- `ondragover`: Triggered when a draggable element is being dragged over a drop target.
- `ondragenter`: Triggered when a draggable element enters a drop target.
- `ondragleave`: Triggered when a draggable element leaves a drop target.
- `ondrop`: Triggered when a draggable element is dropped onto a drop target.
- `ondragend`: Triggered when the user finishes dragging an element.

Here's an example of how to implement the event handlers:

```javascript
function dragstart(event) {
  // Add custom behavior when drag starts
}

function dragover(event) {
  // Add custom behavior when element is being dragged over a drop target
  event.preventDefault();
}

function drop(event) {
  // Add custom behavior when element is dropped onto a drop target
}

function dragend(event) {
  // Add custom behavior when drag ends
}
```

Remember to attach these event handlers to the respective HTML elements using the `ondragstart`, `ondragover`, `ondragenter`, `ondragleave`, `ondrop`, and `ondragend` attributes.

## Summary

The HTML Drag and Drop API provides a simple way to implement drag and drop functionality in your web applications. By marking elements as draggable and defining drop targets, you can enable users to interact with your application by dragging and dropping elements. By utilizing the various drag and drop events, you can customize the behavior to suit your application's needs.

For more details on the HTML Drag and Drop API and its events, you can refer to the [Drag and Drop Specification](https://www.w3.org/TR/html-dnd/).
