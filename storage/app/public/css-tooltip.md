
# CSS Tooltip

Tooltips are useful for displaying additional information when users hover over an element. In this tutorial, we'll learn how to create a simple CSS tooltip.

## HTML Markup

To create a tooltip, we'll start with some HTML markup. Here's an example:

```html
<span class="tooltip">Hover over me
  <span class="tooltip-text">This is a tooltip</span>
</span>
```

In this example, we have an element with the class `.tooltip`. Inside this element, we have another element with the class `.tooltip-text` that contains the tooltip content. Initially, the tooltip content is hidden.

## CSS Styling

To style the tooltip, we'll use CSS. Here's an example:

```css
.tooltip {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

.tooltip-text {
  visibility: hidden;
  background-color: #000;
  color: #fff;
  text-align: center;
  border-radius: 4px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  transform: translateX(-50%);
  transition: opacity 0.3s;
}

.tooltip:hover .tooltip-text {
  visibility: visible;
  opacity: 1;
}
```

In this example, we style the `.tooltip` class to create the container for the tooltip. It's set to `position: relative` to establish a positioning context for the tooltip text. The `.tooltip-text` class is styled to define the appearance of the tooltip itself. By default, the tooltip is hidden (`visibility: hidden`), and it becomes visible on hover (`visibility: visible`) with a fade-in effect (`opacity: 1`).

## Customization

Feel free to customize the tooltip's appearance by modifying the CSS properties. You can change the background color, text color, positioning, animation, and more to match your design preferences.

## Browser Compatibility

CSS tooltips are supported in modern browsers. However, you may need to add vendor prefixes for full cross-browser compatibility. Additionally, keep in mind that tooltips are primarily intended for desktop devices and may have limited usability on touch devices.

## Conclusion

CSS tooltips provide a simple and effective way to display additional information on hover. By following the steps outlined in this tutorial, you can easily create tooltips for your web pages. Experiment with different styles and configurations to enhance the user experience.
```
