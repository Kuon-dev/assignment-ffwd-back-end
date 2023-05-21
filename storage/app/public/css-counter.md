# CSS Counter
CSS counters are a powerful feature that allow you to create and manipulate counters in your CSS stylesheets. Counters are variables maintained by CSS that can be incremented or decremented to keep track of elements or generate automatic numbering. In this tutorial, we'll explore the basics of using CSS counters.

## Creating a Counter
To create a counter, you need to use the counter-reset property. The counter-reset property initializes a counter with an initial value. You can assign a name to the counter and specify the initial value.

Here's an example of creating a counter named "myCounter" with an initial value of 1:

```css
body {
counter-reset: myCounter 1;
}
```

In the above example, we apply the counter-reset property to the body element and specify the counter name as "myCounter" with an initial value of 1.

## Incrementing and Displaying the Counter
Once you've created a counter, you can increment its value and display it using the counter-increment and content properties, respectively.

Here's an example of incrementing the "myCounter" and displaying its value:

```css
h1::before {
counter-increment: myCounter;
content: counter(myCounter) ". ";
}
```

In the above example, we target the h1 element and use the counter-increment property to increment the "myCounter" value. We then use the content property to display the counter value before the content of the h1 element.

## Using Counters for Numbered Lists
CSS counters can be particularly useful for creating custom numbered lists. By combining the counter-reset, counter-increment, and content properties, you can generate automatic numbering for list items.

Here's an example of using counters to create a numbered list:

```css
ol {
counter-reset: myCounter;
list-style-type: none;
}

li::before {
counter-increment: myCounter;
content: counter(myCounter) ". ";
}
```

In the above example, we apply the counter-reset property to the ol element to reset the "myCounter" value. We then use the counter-increment property on the li elements to increment the counter and the content property to display the counter value before each list item.

That's it! You now have a basic understanding of how to use CSS counters to create and manipulate counters in your web pages.





