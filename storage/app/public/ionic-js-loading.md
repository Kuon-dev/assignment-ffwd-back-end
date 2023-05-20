# Ionic JS Loading

In Ionic, the loading component is used to display a loading indicator while performing an asynchronous task or waiting for data to load. The loading component provides a visually appealing way to indicate progress and keep the user informed. In this tutorial, we'll explore how to use the loading component in Ionic using JavaScript.

## Showing and Hiding the Loading Component

To show the loading component, you can use the `create` method provided by the `LoadingController` class. Here's an example:

```javascript
import { LoadingController } from '@ionic/core';

const loadingController = new LoadingController();

async function showLoading() {
  const loading = await loadingController.create({
    message: 'Loading...',
    duration: 2000
  });

  await loading.present();
}
```

In the above example, we import the `LoadingController` class from the `@ionic/core` package and create a new instance of it. Then, we define an `async` function called `showLoading()` to demonstrate how to show the loading component.

Inside the `showLoading()` function, we use the `create()` method of the `LoadingController` to create a new loading component. We provide the desired configuration options, such as the message to display and the duration for which the loading component should be shown.

Finally, we call the `present()` method on the loading component to display it on the screen.

To hide the loading component, you can use the `dismiss()` method. Here's an example:

```javascript
async function hideLoading(loading) {
  await loading.dismiss();
}
```

In the above example, we define an `async` function called `hideLoading()` that takes the loading component as a parameter. Inside the function, we call the `dismiss()` method on the loading component to hide it from the screen.

## Controlling the Loading Component

You can control the loading component programmatically by storing a reference to the created loading component. This allows you to show or hide the loading component based on specific conditions or events in your application.

Here's an example of controlling the loading component:

```javascript
let loading;

async function showLoading() {
  loading = await loadingController.create({
    message: 'Loading...',
    duration: 2000
  });

  await loading.present();
}

function performAsyncTask() {
  showLoading();

  // Simulate an asynchronous task
  setTimeout(() => {
    hideLoading(loading);
  }, 3000);
}
```

In the above example, we declare a variable called `loading` outside the `showLoading()` function. This variable is used to store the reference to the created loading component.

Inside the `performAsyncTask()` function, we call the `showLoading()` function to display the loading component. After that, we simulate an asynchronous task using `setTimeout()`. In this example, we hide the loading component after a delay of 3000 milliseconds (3 seconds) by calling the `hideLoading()` function and passing the `loading` reference.

By controlling the loading component, you can show or hide it at different stages of your application's workflow, such as during API requests, data loading, or any other time-consuming operations.

## Summary

The loading component in Ionic is a useful tool for indicating progress and keeping users informed during asynchronous tasks. By leveraging the `LoadingController` class, you can easily show and hide the loading component in your Ionic applications. Experiment with different configurations and integrate the loading component into your workflows to enhance the user experience.
