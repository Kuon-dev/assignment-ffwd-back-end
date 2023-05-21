# HTML Comment

HTML comments allow you to add notes or annotations to your HTML code. Comments are not displayed on the webpage and are only visible in the source code. They are useful for documenting your code, providing explanations, or temporarily disabling code without deleting it.

## Syntax

To create an HTML comment, you can use the following syntax:

```
<!-- This is a comment -->
```

The comment starts with ``<!--` and ends with `-->`. Anything in between is considered a comment and is ignored by the browser when rendering the webpage.

## Usage

### Code Documentation

Comments are an excellent way to document your HTML code, making it easier for you and others to understand the purpose of different sections or elements. Here's an example:

```
<!-- Header Section -->
<header>
  <h1>Welcome to My Website</h1>
  <!-- Navigation Menu -->
  <nav>
    ...
  </nav>
</header>
```

### Temporarily Disable Code

You can use comments to temporarily disable a section of HTML code without deleting it. This is helpful when you want to test or debug your code. Simply wrap the code you want to disable within comment tags:

```
<!--
<div>
  This code is temporarily disabled.
</div>
-->

<div>
  This code is active.
</div>
```

The disabled code will be ignored by the browser, and the active code will be rendered.

## Best Practices

- Use comments to explain complex code or provide context.
- Avoid excessive or unnecessary comments. Keep them concise and relevant.
- Regularly review and update comments as your code evolves.

## Conclusion

HTML comments are a valuable tool for documenting your code and adding notes or explanations. They help improve code readability and provide a way to temporarily disable code during testing or debugging. Use comments wisely to enhance the clarity and maintainability of your HTML projects. Happy coding!
