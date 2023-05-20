
# CSS Comments

CSS comments allow you to add descriptive notes within your CSS code. They are useful for documenting your styles, making notes for future reference, or temporarily disabling certain styles. Here's how you can write comments in CSS:

## Single-line Comments

Single-line comments start with `//` and continue until the end of the line. They are used for short comments or annotations. Here's an example:

`````````css
p {
  color: blue; // Set text color to blue
}
`````````

In the example above, the comment `// Set text color to blue` provides a brief explanation of the style rule.

## Multi-line Comments

Multi-line comments are enclosed between `/*` and `*/` and can span across multiple lines. They are suitable for longer comments or explanations. Here's an example:

`````````css
/*
This is a multi-line comment.
It can span across multiple lines.
It's useful for providing detailed explanations.
*/

p {
  font-size: 16px;
}
`````````

In the example above, the multi-line comment provides a more detailed description of the CSS code.

## Commenting Out Code

CSS comments are also handy for temporarily disabling or "commenting out" a block of code. This can be useful when you want to test different styles without removing the existing code. Here's an example:

`````````css
/*
p {
  color: red;
}
*/

p {
  color: blue;
}
`````````

In the example above, the first block of code is commented out, which means it won't be applied to the `<p>` elements. The second block of code remains active and sets the text color to blue.

## Best Practices

When using comments in your CSS code, it's good practice to:

- Keep your comments concise and relevant.
- Use comments to explain complex or non-obvious code.
- Remove unnecessary comments before deploying your website to improve performance.

CSS comments are a valuable tool for organizing, documenting, and annotating your styles. They help make your code more readable and maintainable, especially when working on large projects or collaborating with others.

Remember to use comments wisely and leverage their power to enhance the clarity and understandability of your CSS code.
