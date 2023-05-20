# Vue Slots

Slots in Vue.js allow you to create reusable components with customizable content. They provide a way to pass content from the parent component to the child component, allowing for flexible component composition. In this tutorial, we'll explore how to use slots in Vue.

## Basic Slot Usage

To define a slot in a Vue component, you can use the `<slot>` element within the component's template. Here's an example:

```html
<template>
  <div>
    <h1>Slot Example</h1>
    <slot></slot>
  </div>
</template>
```

In this example, the `<slot>` element is used to define a placeholder for the content that will be passed from the parent component. The content within the opening and closing `<slot>` tags will be replaced with the content provided by the parent component.

To use the component with a slot, you can provide the content between the component's opening and closing tags. Here's an example:

```html
<template>
  <div>
    <slot-example>
      <p>This content will be placed inside the slot.</p>
    </slot-example>
  </div>
</template>
```

In this example, the `<slot-example>` component is used, and the content within the opening and closing tags (`<p>This content will be placed inside the slot.</p>`) will be rendered in place of the `<slot>` element defined in the component's template.

## Default Content

You can also provide default content for a slot, which will be used if no content is provided by the parent component. To define default content, you can place it within the `<slot>` element. Here's an example:

```html
<template>
  <div>
    <h1>Slot with Default Content Example</h1>
    <slot>
      <p>This is the default content.</p>
    </slot>
  </div>
</template>
```

In this example, if the parent component doesn't provide any content for the slot, the default content (`<p>This is the default content.</p>`) will be rendered instead.

## Named Slots

In addition to the default slot, Vue also supports named slots. Named slots allow you to have multiple slots in a component with different names, giving you more control over where the content is placed. Here's an example:

```html
<template>
  <div>
    <h1>Named Slots Example</h1>
    <slot name="header"></slot>
    <slot></slot>
    <slot name="footer"></slot>
  </div>
</template>
```

In this example, we have three slots: a named slot with the name "header", a default slot without a name, and another named slot with the name "footer". The parent component can then provide content specifically for each named slot. Here's an example:

```html
<template>
  <div>
    <named-slots-example>
      <template v-slot:header>
        <h2>This content will be placed in the header slot.</h2>
      </template>
      <p>This content will be placed in the default slot.</p>
      <template v-slot:footer>
        <p>This content will be placed in the footer slot.</p>
      </template>
    </named-slots-example>
  </div>
</template>
```

In this example, we use the `v-slot` directive to provide content for each named slot. The content within the `<template>` tags with the `v-slot` directive will be placed in the corresponding named slot in the component.


