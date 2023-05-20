# Vue Routing

Vue Router is the official routing library for Vue.js. It allows you to build single-page applications with multiple views, handling navigation between different URLs in your application. In this tutorial, we'll explore how to set up and use Vue Router in your Vue.js projects.

## Installation

To use Vue Router, you need to install it as a dependency in your project. You can do this using npm or yarn:

```bash
npm install vue-router
```

or

```bash
yarn add vue-router
```

## Setting Up Vue Router

Once you've installed Vue Router, you can set it up in your Vue.js application. First, import the necessary modules:

```javascript
import Vue from 'vue';
import VueRouter from 'vue-router';
```

Next, use Vue's `use` method to install Vue Router:

```javascript
Vue.use(VueRouter);
```

Now, you can define your routes and create a router instance. A route maps a URL path to a component that should be rendered when the path is matched. Here's an example:

```javascript
const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
  { path: '/contact', component: Contact },
];

const router = new VueRouter({
  routes,
});
```

In this example, we have three routes: `'/'` for the Home component, `'/about'` for the About component, and `'/contact'` for the Contact component.

Finally, you need to mount the router to your Vue application. You can do this by passing the router instance to the `router` option when creating the root Vue instance:

```javascript
new Vue({
  router,
  render: (h) => h(App),
}).$mount('#app');
```

## Creating Route Components

To create route components, you can define them as regular Vue components. For example, let's create a simple Home component:

```javascript
<template>
  <div>
    <h1>Welcome to the Home Page</h1>
  </div>
</template>

<script>
export default {
  // Component logic goes here
};
</script>
```

Repeat the same process for the About and Contact components.

## Navigating between Routes

To navigate between routes, you can use the `<router-link>` component provided by Vue Router. It renders an anchor tag that automatically updates the URL and triggers the corresponding route component. Here's an example:

```javascript
<router-link to="/">Home</router-link>
<router-link to="/about">About</router-link>
<router-link to="/contact">Contact</router-link>
```

In this example, clicking on the links will navigate to the respective routes defined in the router.

## Displaying Route Components

To display the route components based on the current URL, you need to add a `<router-view>` component to your application's template. This component is responsible for rendering the component associated with the matched route. Here's an example:

```javascript
<template>
  <div>
    <router-view></router-view>
  </div>
</template>
```

The `<router-view>` component will dynamically render the component defined in the router based on the current URL.

## Programmatic Navigation

Vue Router also provides programmatic navigation methods that allow you to navigate to different routes using JavaScript. For example, you can use the `$router.push` method to navigate to a specific route:

```javascript
this.$router.push('/about');
```

This code will navigate to the `/about` route programmatically.


