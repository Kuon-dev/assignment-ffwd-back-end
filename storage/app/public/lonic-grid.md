# Ionic Grid

Ionic provides a powerful grid system that allows you to create responsive layouts for your app. The grid system is based on a 12-column layout and provides flexibility in arranging and aligning content on different screen sizes. In this tutorial, we'll explore how to use the Ionic grid system.

## Creating a Grid

To create a grid in Ionic, we can use the `ion-grid` component along with `ion-row` and `ion-col` components. The `ion-grid` acts as a container for rows and columns. Here's an example of creating a simple grid:

```html
<ion-grid>
  <ion-row>
    <ion-col>Column 1</ion-col>
    <ion-col>Column 2</ion-col>
    <ion-col>Column 3</ion-col>
  </ion-row>
</ion-grid>
```

In the above example, we have a grid with a single row and three columns. Each column is represented by an `ion-col` component. The content within each column will be automatically adjusted based on the available space.

## Grid Layout Options

Ionic grid system provides various layout options to control the arrangement of columns within a row. We can use attributes like `size`, `offset`, and `push` to customize the layout. Here are some examples:

- Using `size` attribute to specify column width:

  ```html
  <ion-row>
    <ion-col size="6">Half Width</ion-col>
    <ion-col size="6">Half Width</ion-col>
  </ion-row>
  ```

- Using `offset` attribute to create empty spaces before a column:

  ```html
  <ion-row>
    <ion-col offset="2">Column 1</ion-col>
    <ion-col>Column 2</ion-col>
  </ion-row>
  ```

- Using `push` attribute to reorder columns:

  ```html
  <ion-row>
    <ion-col>Column 1</ion-col>
    <ion-col push="6">Column 2 (Pushed)</ion-col>
    <ion-col>Column 3</ion-col>
  </ion-row>
  ```

## Responsive Grid

Ionic grid system automatically adapts to different screen sizes, providing a responsive layout for your app. We can use attributes like `size-md`, `offset-lg`, `push-xl`, etc., to customize the layout for specific breakpoints. Here's an example:

```html
<ion-row>
  <ion-col size="6" size-md="4" size-lg="3">Responsive Column</ion-col>
  <ion-col size="6" size-md="8" size-lg="9">Responsive Column</ion-col>
</ion-row>
```

In the above example, the column widths will adjust based on the screen size. On smaller screens, each column will take up half of the available space (`size="6"`). On medium screens, the first column will take up one-third of the space (`size-md="4"`), and the second column will take up two-thirds of the space (`size-md="8"`).

## Nesting Grids

Ionic grid system allows you to nest grids within grids to create complex layouts. You can use `ion-row` and `ion-col` components inside another `ion-col` to create nested grids. Here's an example:

```html
<ion-grid>
  <ion-row>
    <ion-col>Outer Column 1</ion-col>
    <ion-col>
      <ion-grid>
        <ion-row>
          <ion-col>Nested Column 1</ion-col>
          <ion-col>Nested Column 2</
