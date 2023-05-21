# Ionic Checkbox

Ionic provides a checkbox component that allows users to select one or multiple options from a list. Checkboxes are commonly used for multi-selection scenarios or when there are multiple choices available. In this tutorial, we'll explore how to use the Ionic checkbox component.

## Creating a Basic Checkbox

To create a basic checkbox, we can use the `ion-checkbox` component. Here's an example of a simple checkbox:

```html
<ion-item>
  <ion-label>Option 1</ion-label>
  <ion-checkbox></ion-checkbox>
</ion-item>
```

In the above example, we have a checkbox labeled "Option 1." The `ion-checkbox` component represents the checkbox itself.

## Binding Checkbox Values

To handle the state changes of the checkbox, we can use two-way data binding with `ngModel` directive. This allows us to bind the checkbox to a property in our component and track its value. Here's an example:

```html
<ion-item>
  <ion-label>Option 1</ion-label>
  <ion-checkbox [(ngModel)]="option1"></ion-checkbox>
</ion-item>
```

In the above example, we bind the `option1` property to the checkbox using `[(ngModel)]`. This means that whenever the checkbox state changes, the `option1` property in our component will be updated accordingly.

## Handling Checkbox Events

Ionic checkbox component also emits events when its state changes. We can listen to these events and perform specific actions in response. Here's an example:

```html
<ion-item>
  <ion-label>Option 1</ion-label>
  <ion-checkbox [(ngModel)]="option1" (ionChange)="handleOption1Change()"></ion-checkbox>
</ion-item>
```

In the above example, we added the `(ionChange)` event binding to the `handleOption1Change()` method in our component. Whenever the checkbox state changes, the `handleOption1Change()` method will be called.

## Customizing Checkbox Appearance

Ionic checkbox component provides various attributes and classes to customize its appearance. For example, we can use the `color` attribute to change the checkbox's color. Here's an example:

```html
<ion-item>
  <ion-label>Option 1</ion-label>
  <ion-checkbox [(ngModel)]="option1" color="secondary"></ion-checkbox>
</ion-item>
```

In the above example, we set the `color` attribute to "secondary" to change the checkbox's color to a secondary theme.

## Conclusion

In this tutorial, we learned how to use the Ionic checkbox component to create interactive checkboxes in our applications. We saw how to create a basic checkbox, bind its value to a property, handle checkbox events, and customize its appearance.

Checkboxes are a great way to allow users to select one or multiple options from a list. Feel free to explore the Ionic documentation for more advanced features and customization options for the checkbox component.
