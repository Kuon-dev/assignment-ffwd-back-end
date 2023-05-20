
# HTML Class

In HTML, the `class` attribute is used to assign one or more class names to an element. Classes are used to define styles or behaviors that can be applied to multiple elements on a web page. The `class` attribute provides a way to select and target specific elements for styling or scripting purposes. Let's explore how to use the `class` attribute in HTML.

## Adding a Class to an Element

To add a class to an HTML element, you can use the `class` attribute. The value of the `class` attribute is a space-separated list of class names. You can assign multiple classes to an element by including each class name separated by a space.

Here's an example of adding a class to a `<div>` element:

```
```<div class="my-class">
  This is a div element with the "my-class" class.
```</div>
```

In this example, the element `<div class="my-class">` has been assigned the class name "my-class". You can choose any meaningful name for your class.

## Styling Elements with Classes

Once you have assigned a class to an element, you can style it using CSS. To target elements with a specific class, you can use the CSS selector `.classname`, where `classname` is the name of the class you want to target.

Here's an example of styling an element with a class:

```
```.my-class {
  color: blue;
  font-size: 16px;
}
```

In this example, the CSS rules inside the `.my-class` selector will be applied to any element that has the class "my-class". You can define various styling properties such as color, font size, background, and more.

## Using Multiple Classes

HTML allows you to assign multiple classes to a single element. This can be helpful when you want to apply different styles or behaviors to an element based on multiple criteria.

To assign multiple classes to an element, simply include all the class names in the `class` attribute separated by spaces. Here's an example:

```
```<div class="class1 class2 class3">
  This div element has multiple classes assigned to it.
```</div>
```

In this example, the `<div>` element has three classes assigned to it: "class1", "class2", and "class3". You can apply specific styles to each class or target them using CSS selectors.

## Conclusion

The `class` attribute in HTML allows you to assign classes to elements, enabling you to apply styles and behaviors to multiple elements on your web page. By using meaningful class names and combining multiple classes, you can create flexible and reusable styles for your HTML elements.
