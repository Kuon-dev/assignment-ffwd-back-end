# JavaScript Events

JavaScript events are actions or occurrences that happen within a web page, such as a button click, mouse movement, or keyboard input. Events allow you to respond to user interactions and trigger specific JavaScript code. In this tutorial, we'll explore how to work with JavaScript events.

## Event Handlers

Event handlers are functions that are executed when a specific event occurs. You can attach event handlers to HTML elements using the `on`-prefix attributes or by using JavaScript to add event listeners.

```javascript
// Inline event handler using on-prefixed attributes
<button onclick="myFunction()">Click me</button>

// Event handler added using JavaScript
let button = document.querySelector("button");
button.addEventListener("click", myFunction);
```

## Event Types

There are various types of events available in JavaScript, such as:

- Click event: occurs when an element is clicked.
- Mouseover event: occurs when the mouse pointer is moved over an element.
- Keydown event: occurs when a key is pressed down.
- Submit event: occurs when a form is submitted.
- and many more...

You can attach event handlers to these events to execute specific actions when they occur.

## Event Object

When an event is triggered, JavaScript creates an event object that contains information about the event. This object can be accessed inside the event handler function to perform actions based on the event details.

```javascript
function myFunction(event) {
  console.log("Event type: " + event.type);
  console.log("Target element: " + event.target);
  // Additional event-related actions...
}
```

## Preventing Default Behavior

By default, certain events have predefined behaviors associated with them. For example, a click event on a link will navigate to the specified URL. You can prevent this default behavior using the `preventDefault()` method of the event object.

```javascript
let link = document.querySelector("a");
link.addEventListener("click", function(event) {
  event.preventDefault();
});
```

## Event Bubbling and Capturing

JavaScript events follow a propagation model called event bubbling. When an event occurs on a nested element, it triggers the event handlers of all its ancestors. You can control the order of event execution using event capturing and event bubbling.

## Summary

JavaScript events provide a way to respond to user interactions and trigger specific code. You can attach event handlers to HTML elements and perform actions based on the event details. Understanding events is crucial for creating interactive and dynamic web pages.

Happy coding!
