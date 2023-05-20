# CSS Overflow

CSS `overflow` is a property that controls how content that overflows the boundaries of an element is handled. It is useful when dealing with elements that have a fixed size and cannot accommodate their entire content within that size. The `overflow` property has several values:

- `visible` (default): Content overflows and is visible outside the element's boundaries.
- `hidden`: Content overflows but is clipped and not visible outside the element's boundaries.
- `scroll`: Content overflows and creates a scrollbar to navigate through the overflowed content.
- `auto`: Content overflows and a scrollbar is added only when necessary.

Here's an example that demonstrates the use of the `overflow` property:

```css
.container {
  width: 200px;
  height: 100px;
  border: 1px solid black;
  overflow: scroll;
}
```

In the example above, the `.container` element has a fixed width and height, and the `overflow` property is set to `scroll`. This will add a scrollbar to the element if the content exceeds its boundaries.

It's important to note that the `overflow` property only works on block-level elements and elements with a specified height or width. Inline elements are not affected by the `overflow` property.

## Handling Overflowed Content

When an element's content overflows, you can apply additional CSS properties to control how the overflowed content is displayed:

- `overflow-x` and `overflow-y`: These properties allow you to specify the behavior of overflow on the horizontal and vertical axes separately. For example, `overflow-x: auto` will create a horizontal scrollbar only if the content overflows horizontally.
- `text-overflow`: This property applies to text within an element and determines how overflowed text is displayed. The `text-overflow: ellipsis` value truncates the text and adds an ellipsis (...) to indicate the overflow.
- `white-space`: This property controls how whitespace characters are handled within an element. The `white-space: nowrap` value prevents text from wrapping and can be used to avoid overflow caused by long words.

Using these additional properties along with the `overflow` property provides more control over handling overflowed content.

## Summary

The `overflow` property in CSS is a powerful tool for controlling how content that exceeds the boundaries of an element is displayed. By using values like `hidden`, `scroll`, or `auto`, you can determine how overflowed content is handled. Additionally, properties like `overflow-x`, `overflow-y`, `text-overflow`, and `white-space` provide further customization options.

Experiment with the `overflow` property and its related properties to create designs that handle overflowed content in an elegant and user-friendly manner.
