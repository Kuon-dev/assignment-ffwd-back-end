# React JSX

JSX (JavaScript XML) is a syntax extension for JavaScript that allows you to write HTML-like code within your JavaScript code. It's commonly used in React to describe the structure and appearance of user interface components. JSX is not valid JavaScript, but it can be transformed into regular JavaScript using a transpiler like Babel.

## Basic JSX Syntax

In JSX, you can write HTML-like tags and elements directly in your JavaScript code. Here's an example of rendering a simple `<div>` element using JSX:

```jsx
import React from 'react';

function App() {
  return <div>Hello, World!</div>;
}

export default App;
```

In this example, we import the `React` library and define a functional component called `App`. Inside the component's return statement, we use JSX to render a `<div>` element with the text "Hello, World!".

## Embedding JavaScript Expressions

JSX allows you to embed JavaScript expressions within curly braces `{}`. This allows you to dynamically generate content or perform computations. Here's an example:

```jsx
import React from 'react';

function App() {
  const name = 'John Doe';

  return <div>Hello, {name}!</div>;
}

export default App;
```

In this example, we define a variable `name` and use it within the JSX code to display a personalized greeting.

## Using JSX Attributes

Just like HTML, JSX allows you to set attributes on elements. However, in JSX, attribute names use camelCase instead of kebab-case. Here's an example:

```jsx
import React from 'react';

function App() {
  return <input type="text" value="Hello" onChange={handleChange} />;
}

export default App;
```

In this example, we render an `<input>` element with the attribute `type` set to "text", the attribute `value` set to "Hello", and the attribute `onChange` set to a function called `handleChange`.

## Conditional Rendering

JSX also allows you to perform conditional rendering using JavaScript expressions. This allows you to render different components or elements based on certain conditions. Here's an example:

```jsx
import React from 'react';

function App() {
  const isLoggedIn = true;

  return (
    <div>
      {isLoggedIn ? <p>Welcome back!</p> : <p>Please log in.</p>}
    </div>
  );
}

export default App;
```

In this example, we conditionally render different `<p>` elements based on the value of the `isLoggedIn` variable.

## Fragments

When using JSX, you must return a single root element from your component's render function. If you need to render multiple elements without adding an extra `<div>` wrapper, you can use fragments. Fragments allow you to group a list of children without adding extra nodes to the DOM. Here's an example:

```jsx
import React from 'react';

function App() {
  return (
    <>
      <h1>Title</h1>
      <p>Paragraph 1</p>
      <p>Paragraph 2</p>
    </>
  );
}

export default App;
```

In this example, we use the shorthand syntax `<>...</>` to create a fragment and group multiple elements together.

## Conclusion

JSX is a powerful syntax extension that simplifies the process of building user interfaces in React. It allows you to write HTML-like code within your JavaScript, embed JavaScript expressions, set attributes, perform conditional rendering, and more. With JSX, you can create dynamic and expressive UI components in your React applications.
