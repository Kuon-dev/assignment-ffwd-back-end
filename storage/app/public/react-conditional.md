# React Conditional Rendering

Conditional rendering in React allows you to control the visibility or content of components based on certain conditions. It enables you to create dynamic user interfaces by showing different UI elements based on the state or props of your components.

## If-Else Conditional Rendering

The simplest form of conditional rendering in React is using the `if-else` statement within the `render` method. Here's an example:

```jsx
import React from 'react';

function Greeting(props) {
  if (props.isLoggedIn) {
    return <h1>Welcome back!</h1>;
  } else {
    return <h1>Please log in.</h1>;
  }
}

export default Greeting;
```

In this example, the `Greeting` component renders different heading elements based on the value of the `isLoggedIn` prop. If `isLoggedIn` is `true`, it displays the "Welcome back!" heading; otherwise, it shows the "Please log in." heading.

## Conditional Rendering with Ternary Operator

Another way to conditionally render content in React is by using the ternary operator (`? :`). It allows you to write more concise code for conditional rendering. Here's an example:

```jsx
import React from 'react';

function Greeting(props) {
  return (
    <div>
      {props.isLoggedIn ? <h1>Welcome back!</h1> : <h1>Please log in.</h1>}
    </div>
  );
}

export default Greeting;
```

In this example, the `Greeting` component uses the ternary operator to conditionally render the heading elements. If `props.isLoggedIn` is `true`, it displays the "Welcome back!" heading; otherwise, it shows the "Please log in." heading.

## Conditional Rendering with Logical && Operator

You can also use the logical `&&` operator for conditional rendering in React. This approach is useful when you want to conditionally render a component without an alternative. Here's an example:

```jsx
import React from 'react';

function Greeting(props) {
  return (
    <div>
      {props.isLoggedIn && <h1>Welcome back!</h1>}
    </div>
  );
}

export default Greeting;
```

In this example, the `Greeting` component renders the "Welcome back!" heading only if `props.isLoggedIn` is `true`. If it is `false`, nothing will be rendered within the `div`.

## Conditional Rendering with Element Variables

When you have more complex conditional rendering logic, you can use variables to store elements and conditionally include them in the JSX code. Here's an example:

```jsx
import React from 'react';

function Greeting(props) {
  let greetingElement;

  if (props.isLoggedIn) {
    greetingElement = <h1>Welcome back!</h1>;
  } else {
    greetingElement = <h1>Please log in.</h1>;
  }

  return <div>{greetingElement}</div>;
}

export default Greeting;
```

In this example, the `Greeting` component uses a variable called `greetingElement` to store the appropriate heading element based on the value of `props.isLoggedIn`. The variable is then included within the JSX code to be rendered.

