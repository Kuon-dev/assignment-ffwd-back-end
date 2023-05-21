# Ionic Range

Ionic provides a range component that allows users to select a value from a range of options. The range component is commonly used for selecting values like volume, brightness, or any other numeric value within a specified range. In this tutorial, we'll explore how to use the Ionic range component.

## Creating a Basic Range

To create a basic range, we can use the `ion-range` component. Here's an example of a simple range:

```html
<ion-range min="0" max="100" step="1" snaps="true" value="50"></ion-range>
```

In the above example, we have a range that goes from 0 to 100 with a step of 1. The `snaps` attribute ensures that the range value snaps to the nearest step value when sliding. The initial value is set to 50.

## Binding Range Value

We can bind the value of the range to a property in our component using two-way data binding with `ngModel` directive. This allows us to track and update the selected value. Here's an example:

```html
<ion-range min="0" max="100" step="1" snaps="true" [(ngModel)]="selectedValue"></ion-range>
```

In the above example, we bind the `selectedValue` property to the range using `[(ngModel)]`. The `selectedValue` property will be updated with the selected value.

## Handling Range Change

Ionic range component emits events when the selected value changes. We can listen to these events and perform specific actions in response. Here's an example:

```html
<ion-range min="0" max="100" step="1" snaps="true" [(ngModel)]="selectedValue" (ionChange)="handleRangeChange()"></ion-range>
```

In the above example, we added the `(ionChange)` event binding to the `handleRangeChange()` method in our component. Whenever the selected value changes, the `handleRangeChange()` method will be called.

## Customizing Range Appearance

Ionic range component provides various attributes and classes to customize its appearance. For example, we can use the `color` attribute to change the range's color. Here's an example:

```html
<ion-range min="0" max="100" step="1" snaps="true" [(ngModel)]="selectedValue" color="secondary"></ion-range>
```

In the above example, we set the `color` attribute to "secondary" to change the range's color to the secondary color theme.

## Range with Labels

We can add labels to the range component to provide more context to the selected value. Ionic range supports adding labels on both ends of the range. Here's an example:

```html
<ion-range min="0" max="100" step="1" snaps="true" [(ngModel)]="selectedValue">
  <ion-label slot="start">Min</ion-label>
  <ion-label slot="end">Max</ion-label>
</ion-range>
```

In the above example, we added `ion-label` components with the `slot` attribute set to "start" and "end" to display labels at the respective ends of the range.

That's it! You now have a basic understanding of how to use the Ionic range component. Experiment with different attributes and explore the Ionic documentation for more advanced features and customization options.
