
# CSS Counter

CSS counters allow you to automatically number elements and create custom counters for various purposes. In this tutorial, we'll explore how to use CSS counters to create numbered lists and other counting mechanisms.

## Basic Usage

To use CSS counters, you need to define a counter using the `counter-reset` property and then increment it using the `counter-increment` property. Here's an example:

```css
`````````css
ul {
  counter-reset: my-counter; /* Define a counter with the name 'my-counter' */
}

li {
  counter-increment: my-counter; /* Increment the 'my-counter' counter for each list item */
}

li::before {
  content: counter(my-counter) ". "; /* Display the counter value before each list item */
}
