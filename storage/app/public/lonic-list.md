# Introduction to Ionic Lists

Ionic provides a powerful and flexible list component that allows you to display various types of data in a structured and organized manner. Lists are commonly used in mobile applications to present information such as contacts, messages, or product listings.

## Basic Usage of Ionic Lists

To create a basic list in Ionic, you can use the `ion-list` component along with the `ion-item` component. Each `ion-item` represents a single item in the list.

Here's an example of a basic list:

```html
<ion-list>
  <ion-item>
    Item 1
  </ion-item>
  <ion-item>
    Item 2
  </ion-item>
  <ion-item>
    Item 3
  </ion-item>
</ion-list>
```

In the above example, we have a simple list with three items. By default, the items are displayed vertically, one below the other.

## List Types

Ionic lists support different types to cater to various use cases. Some commonly used list types include:

- **Inset lists**: Inset lists have a slight indentation on the left side, giving them a visually distinct appearance. They are often used for navigation menus or settings screens.

```html
<ion-list lines="inset">
  <ion-item>
    Item 1
  </ion-item>
  <ion-item>
    Item 2
  </ion-item>
  <ion-item>
    Item 3
  </ion-item>
</ion-list>
```

- **Divider lists**: Divider lists display a horizontal line between each item, providing a clear visual separation. They are useful when you want to visually group items.

```html
<ion-list lines="full">
  <ion-item>
    Item 1
  </ion-item>
  <ion-item>
    Item 2
  </ion-item>
  <ion-item>
    Item 3
  </ion-item>
</ion-list>
```

- **Thumbnail lists**: Thumbnail lists allow you to display an image thumbnail alongside each item. They are commonly used when you want to show a preview or a visual representation of the list item.

```html
<ion-list>
  <ion-item>
    <ion-thumbnail slot="start">
      <img src="path/to/image.jpg" alt="Thumbnail">
    </ion-thumbnail>
    Item 1
  </ion-item>
  <ion-item>
    <ion-thumbnail slot="start">
      <img src="path/to/image.jpg" alt="Thumbnail">
    </ion-thumbnail>
    Item 2
  </ion-item>
  <ion-item>
    <ion-thumbnail slot="start">
      <img src="path/to/image.jpg" alt="Thumbnail">
    </ion-thumbnail>
    Item 3
  </ion-item>
</ion-list>
```

These are just a few examples of list types available in Ionic. You can explore the documentation for more list types and customization options.

## List Items with Actions

Ionic list items can be interactive and trigger actions when clicked. This is useful for handling user interactions and navigating to different parts of your app.

Here's an example of a list with clickable items:

```html
<ion-list>
  <ion-item (click)="handleItemClick('Item 1')">
    Item 1
  </ion-item>
  <ion-item (click)="handleItemClick('Item 2')">
    Item 2
  </ion-item>
  <ion-item (click)="handleItemClick('Item 3')">
    Item 3
  </ion-item>
</ion-list>
```

In the above example, each `ion-item` has an `(click)` event handler that calls the `handleItemClick`
