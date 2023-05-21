
# CSS Shadow

The CSS `box-shadow` property allows you to add shadows to elements on your web page, giving them depth and visual emphasis. Shadows can be applied to various elements such as boxes, text, and images.

## Adding Box Shadows

To add a shadow to an element, you can use the `box-shadow` property. Here's an example:

```css
div {
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
```

In this example, the `div` selector targets `<div>` elements, and the `box-shadow` property adds a shadow effect. The values `2px 2px` represent the horizontal and vertical offsets of the shadow, `4px` represents the blur radius, and `rgba(0, 0, 0, 0.2)` represents the color and opacity of the shadow. You can adjust these values to achieve the desired shadow effect.

## Multiple Shadows

You can also apply multiple shadows to an element by comma-separating the shadow values. Here's an example:

```css
div {
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2), -2px -2px 4px rgba(255, 255, 255, 0.2);
}
```

In this example, two shadows are applied to the `div` element. The first shadow has a positive offset and a darker color, while the second shadow has a negative offset and a lighter color. Experiment with different values and colors to create unique shadow effects.

## Shadow Spreading

You can control the spreading or expansion of the shadow using the `spread radius` value. This value specifies the size of the shadow relative to the element. Here's an example:

```css
div {
  box-shadow: 2px 2px 4px 2px rgba(0, 0, 0, 0.2);
}
```

In this example, the `4px` value represents the blur radius, and the `2px` value represents the spread radius. The spread radius of `2px` causes the shadow to expand by 2 pixels in all directions, creating a larger shadow effect.

## Inset Shadows

In addition to regular box shadows, you can also create inset shadows that appear inside the element. This can be useful for creating sunken or engraved effects. Here's an example:

```css
div {
  box-shadow: inset 2px 2px 4px rgba(0, 0, 0, 0.2);
}
```

In this example, the `inset` keyword is used to indicate that the shadow should be inset. The rest of the values work similarly to regular box shadows. Experiment with different values and combinations to achieve the desired effect.

## Applying Shadows to Text and Images

You can also apply shadows to text and images using the `text-shadow` and `box-shadow` properties, respectively. Here are a couple of examples:

```css
h1 {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

img {
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
```

In these examples, the `h1` selector applies a shadow to the heading text, while the `img` selector applies
