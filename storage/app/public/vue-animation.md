# Vue Animation

Vue provides a powerful animation system that allows you to add dynamic and engaging animations to your applications. With Vue's animation features, you can create smooth transitions, apply CSS-based animations, and define complex animation sequences. In this tutorial, we'll explore how to use Vue animation to bring your Vue.js applications to life.

## Transition Component

Vue's transition component is the primary tool for adding animations to elements. It allows you to apply CSS-based transitions or animations when elements are inserted, updated, or removed from the DOM.

To use the transition component, wrap the target element with the `<transition>` tag and provide a name for the transition. Here's an example:

```html
<template>
  <div>
    <transition name="fade">
      <p v-if="show">This element will fade in and out</p>
    </transition>
    <button @click="show = !show">Toggle</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      show: true,
    };
  },
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
```

In this example, the `<transition>` component wraps the `<p>` element, and the `name="fade"` attribute defines the transition name. The `v-if="show"` directive controls the presence of the element. When the element is added or removed from the DOM, the specified transition animations will be applied.

You can define the CSS animations for the transition by using the corresponding CSS classes. In this case, we define a fade animation using the `.fade-enter-active`, `.fade-leave-active`, `.fade-enter`, and `.fade-leave-to` classes.

## Transition CSS Classes

Vue's transition component automatically adds and removes CSS classes during different stages of the transition process. Here are the main CSS classes used by the transition component:

- `*-enter-active`: Applied during the entire duration of an entering transition.
- `*-leave-active`: Applied during the entire duration of a leaving transition.
- `*-enter`: Applied when an element is inserted (before the entering transition).
- `*-leave-to`: Applied when an element is removed (after the leaving transition).

By defining CSS rules for these classes, you can control the appearance and behavior of the transition.

## Transition Modes

Vue provides several transition modes to control how elements are added or removed from the DOM. You can specify the mode by setting the `mode` attribute on the `<transition>` component. The available modes are:

- `in-out`: New elements are first animated out, and then the new element is animated in.
- `out-in`: Current elements are animated out, and then the new element is animated in.
- `default` (no value specified): Elements are simply replaced without any animations.

Here's an example that demonstrates the use of transition modes:

```html
<template>
  <div>
    <transition name="fade" mode="in-out">
      <p v-if="show">This element will fade in and out</p>
    </transition>
    <button @click="show = !show">Toggle</button>
  </div>
</template>
```

In this example, the `mode="in-out"` attribute is added to the `<transition>` component. When the element is toggled, it will first fade out, then the new element will fade in.


