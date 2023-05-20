# Ionic Select

Ionic provides a select component that allows users to choose an option from a dropdown list. The select component is commonly used for selecting options like categories, countries, or any other set of choices. In this tutorial, we'll explore how to use the Ionic select component.

## Creating a Basic Select

To create a basic select, we can use the `ion-select` component. Here's an example of a simple select:

```html
<ion-select>
  <ion-select-option value="option1">Option 1</ion-select-option>
  <ion-select-option value="option2">Option 2</ion-select-option>
  <ion-select-option value="option3">Option 3</ion-select-option>
</ion-select>
```

In the above example, we have a select component with three options: "Option 1," "Option 2," and "Option 3." The user can choose one of these options from the dropdown list.

## Binding Select Value

We can bind the value of the select to a property in our component using two-way data binding with `ngModel` directive. This allows us to track and update the selected value. Here's an example:

```html
<ion-select [(ngModel)]="selectedValue">
  <ion-select-option value="option1">Option 1</ion-select-option>
  <ion-select-option value="option2">Option 2</ion-select-option>
  <ion-select-option value="option3">Option 3</ion-select-option>
</ion-select>
```

In the above example, we bind the `selectedValue` property to the select using `[(ngModel)]`. The `selectedValue` property will be updated with the selected option's value.

## Handling Select Change

Ionic select component emits events when the selected value changes. We can listen to these events and perform specific actions in response. Here's an example:

```html
<ion-select [(ngModel)]="selectedValue" (ionChange)="handleSelectChange()">
  <ion-select-option value="option1">Option 1</ion-select-option>
  <ion-select-option value="option2">Option 2</ion-select-option>
  <ion-select-option value="option3">Option 3</ion-select-option>
</ion-select>
```

In the above example, we added the `(ionChange)` event binding to the `handleSelectChange()` method in our component. Whenever the selected value changes, the `handleSelectChange()` method will be called.

## Customizing Select Appearance

Ionic select component provides various attributes and classes to customize its appearance. For example, we can use the `interface` attribute to change the select's appearance style. Here's an example:

```html
<ion-select interface="action-sheet" [(ngModel)]="selectedValue">
  <ion-select-option value="option1">Option 1</ion-select-option>
  <ion-select-option value="option2">Option 2</ion-select-option>
  <ion-select-option value="option3">Option 3</ion-select-option>
</ion-select>
```

In the above example, we set the `interface` attribute to "action-sheet" to change the select's appearance to an action sheet style.

## Select with Multiple Options

Ionic select component also supports selecting multiple options. We can enable this by setting the `multiple` attribute to `true`. Here's an example:

```html
<ion-select multiple [(ngModel)]="selectedValues">
  <ion-select-option value="option1">Option 1</ion-select-option>
  <ion-select-option value="option2">Option 2</ion-select-option>
  <ion-select-option value="option3">
