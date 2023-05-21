# Ionic Action Sheet

The Ionic Action Sheet component allows you to present users with a set of options or actions in a modal-like interface. It is commonly used to display a menu of choices when the user performs a specific action or triggers an event. In this tutorial, we'll explore how to use the Ionic Action Sheet component in your Ionic application.

## Getting Started

To use the Ionic Action Sheet component, you need to have an Ionic project set up. If you haven't done so, follow the Ionic installation guide to create a new Ionic project.

Once you have a project set up, you can start using the Action Sheet component.

## Creating an Action Sheet

To create an Action Sheet in Ionic, you need to import the `ActionSheetController` and `ActionSheetOptions` from `@ionic/angular`. Here's an example:

```javascript
import { Component } from '@angular/core';
import { ActionSheetController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {
  constructor(public actionSheetController: ActionSheetController) {}

  async presentActionSheet() {
    const actionSheet = await this.actionSheetController.create({
      header: 'Options',
      buttons: [
        {
          text: 'Option 1',
          handler: () => {
            console.log('Option 1 clicked');
          },
        },
        {
          text: 'Option 2',
          handler: () => {
            console.log('Option 2 clicked');
          },
        },
        {
          text: 'Cancel',
          role: 'cancel',
          handler: () => {
            console.log('Cancel clicked');
          },
        },
      ],
    });

    await actionSheet.present();
  }
}
```

In the above example, we import the necessary components and create an `ActionSheetController` instance. Inside the `presentActionSheet` method, we use the `create` method of `ActionSheetController` to create an action sheet. We provide the options, such as the header and the buttons array, to define the content of the action sheet.

The buttons array contains objects that represent each button in the action sheet. Each button object has properties like `text`, `handler`, and `role`. The `text` property specifies the button label, the `handler` property defines the callback function to be executed when the button is clicked, and the `role` property can be set to 'cancel' for the cancel button.

Finally, we call the `present` method on the action sheet to display it to the user.

## Triggering the Action Sheet

To trigger the action sheet, you need to add a UI element, such as a button, and call the `presentActionSheet` method when the user interacts with that element. Here's an example:

```html
<ion-button (click)="presentActionSheet()">Show Options</ion-button>
```

In the above example, we bind the `presentActionSheet` method to the button's `(click)` event. So when the button is clicked, the action sheet will be presented to the user.

## Styling the Action Sheet

Ionic provides a set of CSS variables that you can use to customize the appearance of the Action Sheet component. These variables allow you to change the background color, text color, button styles, and more. You can override these variables in your application's global CSS file or component-specific styles.

Refer to the Ionic documentation for a list of available CSS variables and their usage.


