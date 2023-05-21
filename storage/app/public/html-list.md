
# HTML Lists

HTML provides three types of lists: ordered lists, unordered lists, and definition lists. Lists are used to organize and structure content on web pages. In this tutorial, we will explore each type of list and learn how to create them.

## Ordered Lists

Ordered lists are used to represent a list of items in a specific order. Each item is marked with a number or letter by default. To create an ordered list, use the `<ol>` element and wrap each item with the `<li>` (list item) element.

Here's an example of an ordered list:

```
<ol>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ol>
```

The output will be:

1. Item 1
2. Item 2
3. Item 3

You can also customize the numbering style using CSS.

## Unordered Lists

Unordered lists are used to represent a list of items without any specific order. Each item is typically marked with a bullet point. To create an unordered list, use the `<ul>` element and wrap each item with the `<li>` element.

Here's an example of an unordered list:

```
<ul>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ul>
```

The output will be:

- Item 1
- Item 2
- Item 3

You can also customize the bullet style using CSS.

## Definition Lists

Definition lists are used to present a list of terms and their corresponding definitions. Each term is marked with the `<dt>` (definition term) element, and each definition is marked with the `<dd>` (definition description) element. To create a definition list, use the `<dl>` element and wrap each term and definition with the appropriate elements.

Here's an example of a definition list:

```
<dl>
<dt>Term 1</dt>
<dd>Definition 1</dd>
<dt>Term 2</dt>
<dd>Definition 2</dd>
</dl>
```

The output will be:

Term 1
: Definition 1

Term 2
: Definition 2

## Nested Lists

You can also nest lists within other lists to create a hierarchical structure. Simply include a new list within an existing list item.

Here's an example of a nested list:

```
<ul>
<li>Item 1</li>
<li>
<ul>
<li>Subitem 1</li>
<li>Subitem 2</li>
</ul>
</li>
<li>Item 2</li>
</ul>
```

The output will be:

- Item 1
  - Subitem 1
  - Subitem 2
- Item 2

## Conclusion

HTML lists are essential for organizing and structuring content on web pages. Whether you need to create an ordered list, unordered list, or definition list, understanding how to use the appropriate HTML elements will allow you to present information in a clear and organized manner.
