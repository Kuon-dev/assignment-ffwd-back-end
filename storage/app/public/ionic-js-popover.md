# Ionic JS Popover

In Ionic, a popover is a small overlay that appears on top of the current view to provide additional information or actions. Popovers are commonly used to display tooltips, context menus, or secondary controls. In this tutorial, we'll explore how to use the popover component in Ionic using JavaScript.

## Creating and Presenting a Popover

To create a popover in Ionic, you can use the `create` method provided by the `PopoverController` class. Here's an example:

```javascript
import { PopoverController } from '@ionic/angular';

constructor(private popoverController: PopoverController) {}

async presentPopover(event: any) {
  const popover = await this.popoverController.create({
    component: 'my-popover-component',
    event: event,
    translucent: true
  });

  await popover.present();
}
```

In the above example, we import the `PopoverController` class and inject it into our component using dependency injection. We define an `async` method called `presentPopover()` that demonstrates how to create and present a popover.

Inside the `presentPopover()` method, we use the `create()` method of the `PopoverController` to create a new popover. We provide the desired configuration options, such as the component to be displayed as the popover and the event that triggered its presentation. In this example, we specify a fictional component named `my-popover-component` and pass the `event` parameter to determine the popover's position.

Finally, we call the `present()` method on the popover to present it to the user.

## Handling Popover Dismissal

When the user interacts with the popover or performs an action, you may need to handle the dismissal of the popover. Ionic provides various ways to dismiss the popover, such as by using buttons or programmatically dismissing it.

### Dismissing with Buttons

To dismiss a popover using buttons, you can add a close button or any other action buttons within the popover component. When the user interacts with these buttons, you can call the `dismiss()` method on the popover controller to dismiss the popover.

Here's an example of dismissing a popover with a close button:

```html
<ion-button (click)="dismissPopover()">Close</ion-button>
```

In the above example, we define an `ion-button` component with a `(click)` event handler that calls the `dismissPopover()` function to dismiss the popover. You can customize the appearance and behavior of the button as needed.

### Programmatically Dismissing the Popover

You can also dismiss the popover programmatically from your JavaScript code. This can be useful when you want to dismiss the popover based on specific conditions or events in your application.

Here's an example of programmatically dismissing a popover:

```javascript
import { PopoverController } from '@ionic/angular';

constructor(private popoverController: PopoverController) {}

async dismissPopover() {
  const popover = await this.popoverController.getTop();

  if (popover) {
    await popover.dismiss();
  }
}
```

In the above example, we import the `PopoverController` class and inject it into our component. We define an `async` method called `dismissPopover()` to demonstrate how to programmatically dismiss the popover.

Inside the `dismissPopover()` method, we use the `getTop()` method of the `PopoverController` to get the currently displayed popover. If a popover is found, we call the `dismiss()` method on the popover to dismiss it.


