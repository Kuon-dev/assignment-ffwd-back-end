# Ionic Radio Button

Ionic provides a radio button component that allows users to select a single option from a list of choices. Radio buttons are commonly used when there's a need for exclusive selection, where only one option can be chosen at a time. In this tutorial, we'll explore how to use the Ionic radio button component.

## Creating a Basic Radio Button

To create a basic radio button, we can use the `ion-radio` component. Here's an example of a simple radio button:

```html
<ion-radio-group>
  <ion-item>
    <ion-label>Option 1</ion-label>
    <ion-radio slot="start" value="option1"></ion-radio>
  </ion-item>
  <ion-item>
    <ion-label>Option 2</ion-label>
    <ion-radio slot="start" value="option2"></ion-radio>
  </ion-item>
</ion-radio-group>
```

In the above example, we have a radio button group with two options: "Option 1" and "Option 2." The `ion-radio` components represent the radio buttons themselves. By wrapping the radio buttons in an `ion-radio-group` component, we ensure that only one option can be selected at a time.

## Binding Radio Button Values

Similar to checkboxes, we can bind the value of the radio button to a property in our component using two-way data binding with `ngModel` directive. This allows us to track the selected option. Here's an example:

```html
<ion-radio-group [(ngModel)]="selectedOption">
  <ion-item>
    <ion-label>Option 1</ion-label>
    <ion-radio slot="start" value="option1"></ion-radio>
  </ion-item>
  <ion-item>
    <ion-label>Option 2</ion-label>
    <ion-radio slot="start" value="option2"></ion-radio>
  </ion-item>
</ion-radio-group>
```

In the above example, we bind the `selectedOption` property to the radio button group using `[(ngModel)]`. The value of `selectedOption` will be updated with the selected option's value.

## Handling Radio Button Events

Ionic radio button component emits events when the selected option changes. We can listen to these events and perform specific actions in response. Here's an example:

```html
<ion-radio-group [(ngModel)]="selectedOption" (ionChange)="handleOptionChange()">
  <ion-item>
    <ion-label>Option 1</ion-label>
    <ion-radio slot="start" value="option1"></ion-radio>
  </ion-item>
  <ion-item>
    <ion-label>Option 2</ion-label>
    <ion-radio slot="start" value="option2"></ion-radio>
  </ion-item>
</ion-radio-group>
```

In the above example, we added the `(ionChange)` event binding to the `handleOptionChange()` method in our component. Whenever the selected option changes, the `handleOptionChange()` method will be called.

## Customizing Radio Button Appearance

Ionic radio button component provides various attributes and classes to customize its appearance. For example, we can use the `color` attribute to change the radio button's color. Here's an example:

```html
<ion-radio-group [(ngModel)]="selectedOption" color="secondary">
  <ion-item>
    <ion-label>Option 1</ion-label>
    <ion-radio slot="start" value="option1"></ion-radio>
  </ion-item>
  <ion-item>
    <ion-label>Option 2</ion-label>
    <ion-radio slot="start" value="option2"></
