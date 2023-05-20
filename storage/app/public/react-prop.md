# React Props

Props (short for "properties") are a way to pass data from a parent component to its child components. They allow components to be configured and customized based on their usage. Props are read-only and cannot be modified by the child components.

## Passing Props to a Component

To pass props to a component, you simply include them as attributes when rendering the component. Here's an example of passing props to a component:

```jsx
import React from 'react';

function Greeting(props) {
  return <h1>Hello, {props.name}!</h1>;
}

function App() {
  return <Greeting name="John" />;
}

export default App;
```

In this example, we have a functional component called `Greeting` that receives a `name` prop. The `name` prop is accessed within the component using `props.name`. We then render the `Greeting` component within the `App` component and pass the `name` prop with the value "John".

## Using Props in a Component

Once props are passed to a component, they can be accessed within the component's rendering function. Props are accessed using the `props` object, which is automatically provided as an argument to the component function. Here's an example of using props in a component:

```jsx
import React from 'react';

function Greeting(props) {
  return <h1>Hello, {props.name}!</h1>;
}

export default Greeting;
```

In this example, the `Greeting` component receives a `name` prop and uses it to render a personalized greeting. The value of the `name` prop is accessed within the JSX code using `props.name`.

## Default Props

You can also provide default values for props in case they are not explicitly passed to a component. This can be done using the `defaultProps` property. Here's an example:

```jsx
import React from 'react';

function Greeting(props) {
  return <h1>Hello, {props.name}!</h1>;
}

Greeting.defaultProps = {
  name: 'Guest'
};

export default Greeting;
```

In this example, the `Greeting` component has a default prop value of "Guest" for the `name` prop. If the `name` prop is not provided when rendering the component, it will fallback to the default value.

## Prop Types

Prop types are a way to define the expected types of props passed to a component. They provide type checking during development to catch potential bugs and ensure that the correct props are passed. Prop types can be defined using the `propTypes` property. Here's an example:

```jsx
import React from 'react';
import PropTypes from 'prop-types';

function Greeting(props) {
  return <h1>Hello, {props.name}!</h1>;
}

Greeting.propTypes = {
  name: PropTypes.string.isRequired
};

export default Greeting;
```

In this example, we use the `PropTypes` module to define that the `name` prop of the `Greeting` component should be a string and is required. If the prop type is incorrect or not provided, a warning will be logged in the console during development.

