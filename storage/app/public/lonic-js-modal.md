# Ionic JS Modal

In Ionic, the modal component is used to present a modal dialog or popup to the user. Modals are commonly used to display additional information, gather user input, or prompt for confirmation. In this tutorial, we'll explore how to use the modal component in Ionic using JavaScript.

## Creating and Presenting a Modal

To create a modal in Ionic, you can use the `create` method provided by the `ModalController` class. Here's an example:

```javascript
import { ModalController } from '@ionic/core';

const modalController = new ModalController();

async function presentModal() {
  const modal = await modalController.create({
    component: 'my-modal-component',
    componentProps: {
      // optional properties to pass to the modal component
    }
  });

  await modal.present();
}
```

In the above example, we import the `ModalController` class from the `@ionic/core` package and create a new instance of it. Then, we define an `async` function called `presentModal()` to demonstrate how to create and present a modal.

Inside the `presentModal()` function, we use the `create()` method of the `ModalController` to create a new modal. We provide the desired configuration options, such as the component to be displayed as the modal. In this example, we specify a fictional component named `my-modal-component`.

Finally, we call the `present()` method on the modal to present it to the user.

## Handling Modal Dismissal

When the user interacts with the modal, such as clicking a close button or performing an action, you may need to handle the dismissal of the modal. Ionic provides various ways to handle modal dismissal, such as by using buttons or programmatically dismissing the modal.

### Dismissing with Buttons

To dismiss a modal using buttons, you can add a close button or any other action buttons within the modal component. When the user interacts with these buttons, you can call the `dismiss()` method on the modal controller to dismiss the modal.

Here's an example of dismissing a modal with a close button:

```html
<ion-button (click)="dismissModal()">Close</ion-button>
```

In the above example, we define an `ion-button` component with a `(click)` event handler that calls the `dismissModal()` function to dismiss the modal. You can customize the appearance and behavior of the button as needed.

### Programmatically Dismissing the Modal

You can also dismiss the modal programmatically from your JavaScript code. This can be useful when you want to dismiss the modal based on specific conditions or events in your application.

Here's an example of programmatically dismissing a modal:

```javascript
import { ModalController } from '@ionic/core';

const modalController = new ModalController();

async function dismissModal() {
  const modal = await modalController.getTop();

  if (modal) {
    await modal.dismiss();
  }
}
```

In the above example, we import the `ModalController` class and create a new instance of it. Then, we define an `async` function called `dismissModal()` to demonstrate how to programmatically dismiss the modal.

Inside the `dismissModal()` function, we use the `getTop()` method of the `ModalController` to get the currently displayed modal. If a modal is found, we call the `dismiss()` method on the modal to dismiss it.

## Passing Data between Modals and Pages

Often, you may need to pass data between the modal and the underlying page or component. Ionic provides a convenient way to pass data using the `componentProps` property when creating the modal.

Here's an example of passing data to a modal:

```javascript
async function presentModal() {
  const modal = await
