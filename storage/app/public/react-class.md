# React Class Components

Class components are a fundamental part of React and allow you to create more powerful and dynamic UIs. They are JavaScript classes that extend the `React.Component` class and provide additional features such as managing state and lifecycle methods.

## Creating a Class Component

To create a class component, you define a JavaScript class that extends the `React.Component` class. The component must implement a `render` method that returns the JSX code representing the component's UI. Here's an example of a basic class component:

```jsx
import React from 'react';

class MyComponent extends React.Component {
  render() {
    return <h1>Hello, World!</h1>;
  }
}

export default MyComponent;
```

In this example, we define a class component called `MyComponent` that renders an `<h1>` element with the text "Hello, World!". The `render` method is responsible for generating the component's UI.

## Class Component Lifecycle

Class components have a set of lifecycle methods that allow you to hook into different stages of the component's lifecycle. These methods provide opportunities to perform certain actions at specific times, such as initializing state, fetching data, or cleaning up resources. Here are some commonly used lifecycle methods:

- `componentDidMount`: Invoked immediately after the component is mounted (inserted into the DOM). This is a good place to start network requests, initialize timers, or perform other setup actions.

- `componentDidUpdate`: Invoked immediately after an update occurs, but not for the initial render. This method allows you to perform actions in response to changes in props or state.

- `componentWillUnmount`: Invoked immediately before the component is unmounted (removed from the DOM). This is where you can clean up resources such as event listeners or timers.

Here's an example of using the `componentDidMount` method to fetch data from an API when the component is mounted:

```jsx
import React from 'react';

class MyComponent extends React.Component {
  componentDidMount() {
    // Fetch data from an API
    fetch('https://api.example.com/data')
      .then(response => response.json())
      .then(data => {
        // Update component state with fetched data
        this.setState({ data: data });
      });
  }

  render() {
    // Render component UI using state data
    return <div>{this.state.data}</div>;
  }
}

export default MyComponent;
```

In this example, the `componentDidMount` method is used to fetch data from an API and update the component's state. The fetched data is then rendered in the component's UI.

## State in Class Components

Class components have the ability to manage their own internal state using the `this.state` object. State represents the mutable data within a component and can be accessed and updated using the `setState` method. Here's an example of using state in a class component:

```jsx
import React from 'react';

class Counter extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      count: 0
    };
  }

  incrementCount() {
    this.setState({ count: this.state.count + 1 });
  }

  render() {
    return (
      <div>
        <p>Count: {this.state.count}</p>
        <button onClick={() => this.incrementCount()}>Increment</button>
      </div>
    );
  }
}

export default Counter;
```

