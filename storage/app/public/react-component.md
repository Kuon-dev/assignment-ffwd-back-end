# React Components

Components are the building blocks of a React application. They are reusable and independent pieces of code that encapsulate a part of the user interface and its behavior. React applications are typically composed of multiple components working together to create a rich UI.

## Functional Components

Functional components are the simplest type of components in React. They are JavaScript functions that return JSX. Here's an example of a functional component:

```jsx
import React from 'react';

function Greeting() {
  return <h1>Hello, World!</h1>;
}

export default Greeting;
```

In this example, we define a functional component called `Greeting` that renders an `<h1>` element with the text "Hello, World!". Functional components are stateless, meaning they don't manage their own internal state.

## Class Components

Class components are another type of component in React. They are JavaScript classes that extend the `React.Component` class and define a `render` method to return JSX. Here's an example of a class component:

```jsx
import React from 'react';

class Greeting extends React.Component {
  render() {
    return <h1>Hello, World!</h1>;
  }
}

export default Greeting;
```

In this example, we define a class component called `Greeting` that renders an `<h1>` element with the text "Hello, World!". Class components can have additional methods and manage their own state using the `state` property.

## Props

Props are used to pass data from a parent component to its child components. They allow components to be configured and customized based on their usage. Here's an example of using props in a component:

```jsx
import React from 'react';

function Greeting(props) {
  return <h1>Hello, {props.name}!</h1>;
}

export default Greeting;
```

In this example, we define a functional component called `Greeting` that receives a `name` prop. We use the prop within the JSX code to display a personalized greeting.

## Component Composition

Components can be composed together to create more complex UI structures. This is done by nesting components inside other components. Here's an example of component composition:

```jsx
import React from 'react';

function App() {
  return (
    <div>
      <Greeting name="John" />
      <Greeting name="Jane" />
    </div>
  );
}

export default App;
```

In this example, we have an `App` component that renders two instances of the `Greeting` component with different names. This allows us to reuse the `Greeting` component and display multiple greetings in the UI.

## Lifecycle Methods

Class components have lifecycle methods that allow you to hook into different stages of a component's lifecycle. These methods can be used to perform actions such as initialization, rendering, updating, and cleanup. Here's an example of a lifecycle method:

```jsx
import React from 'react';

class Timer extends React.Component {
  constructor(props) {
    super(props);
    this.state = { seconds: 0 };
  }

  componentDidMount() {
    this.interval = setInterval(() => {
      this.setState({ seconds: this.state.seconds + 1 });
    }, 1000);
  }

  componentWillUnmount() {
    clearInterval(this.interval);
  }

  render() {
    return <div>Seconds: {this.state.seconds}</div>;
  }
}

export default Timer;
```


