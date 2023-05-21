
# CSS Text Effects

CSS provides various properties and techniques to create visually appealing text effects on your web pages. Whether you want to apply unique styles, animations, or decorations to your text, CSS has got you covered. Let's explore some popular CSS text effects.

## Changing Text Color

To change the color of text, you can use the `color` property. Here's an example:

```css
h1 {
  color: blue;
}
```

In this example, the `h1` selector targets the heading text, and the `color` property sets the text color to blue. You can choose from a wide range of color names, hexadecimal codes, or RGB values to customize the text color.

## Applying Text Shadows

Text shadows can add depth and emphasis to your text. Use the `text-shadow` property to apply shadows. Here's an example:

```css
h2 {
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}
```

In this example, the `h2` selector targets the heading text, and the `text-shadow` property creates a shadow effect. The values `2px 2px` represent the horizontal and vertical offsets of the shadow, `4px` represents the blur radius, and `rgba(0, 0, 0, 0.2)` represents the color and opacity of the shadow. Adjust these values to achieve the desired shadow effect.

## Adding Text Background

You can highlight text by adding a background color to it using the `background-color` property. Here's an example:

```css
p {
  background-color: yellow;
}
```

In this example, the `p` selector targets paragraphs, and the `background-color` property sets the background color to yellow. The text will be displayed with a yellow background.

## Creating Text Gradients

Gradients allow you to create smooth transitions between colors. You can apply gradients to text using the `background-image` property and the `linear-gradient()` function. Here's an example:

```css
h3 {
  background-image: linear-gradient(to right, red, blue);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
```

In this example, the `h3` selector targets the heading text. The `background-image` property creates a linear gradient from red to blue. The `-webkit-background-clip` property with a value of `text` clips the background to the text, and the `-webkit-text-fill-color` property sets the text color to transparent, revealing the gradient.

## Applying Text Animations

CSS animations can bring your text to life with movement and transitions. Use the `@keyframes` rule and the `animation` property to apply animations. Here's an example:

```css
span {
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% {
    font-size: 16px;
  }
  50% {
    font-size: 20px;
  }
  100% {
    font-size: 16px;
  }
}
```

In this example, the `span` selector targets a specific span of text. The `animation` property applies the `pulse` animation, which lasts for 2 seconds and repeats infinitely. The `@keyframes` rule defines the keyframe percentages and the property values at each keyframe. In this case, the text pulses by changing the font size.

