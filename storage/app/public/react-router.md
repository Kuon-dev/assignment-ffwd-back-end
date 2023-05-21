# React Router

React Router is a popular library for handling routing in React applications. It allows you to define routes, navigate between different pages, and pass parameters to components based on the URL.

## Installation

To use React Router in your project, you need to install the `react-router-dom` package. You can do this using npm or yarn:

```shell
npm install react-router-dom
```

or

```shell
yarn add react-router-dom
```

## Basic Usage

React Router provides several components to define routes in your application. The most common components are `BrowserRouter`, `Switch`, and `Route`.

Here's an example of basic usage:

```jsx
import React from 'react';
import { BrowserRouter, Switch, Route } from 'react-router-dom';

import Home from './components/Home';
import About from './components/About';
import NotFound from './components/NotFound';

function App() {
  return (
    <BrowserRouter>
      <Switch>
        <Route exact path="/" component={Home} />
        <Route path="/about" component={About} />
        <Route component={NotFound} />
      </Switch>
    </BrowserRouter>
  );
}

export default App;
```

In this example, we wrap our application with the `BrowserRouter` component, which provides the necessary routing functionality. Inside the `Switch` component, we define multiple `Route` components. The `exact` attribute ensures that only the exact path matches are rendered.

