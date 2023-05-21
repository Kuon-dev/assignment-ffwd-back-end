# HTML Quotations

HTML provides elements to markup and display quotations. Quotations are used to attribute and present quoted text within a document. There are two types of quotations in HTML: inline quotations and block quotations.

## Inline Quotations

Inline quotations are used to mark up short quotes that are integrated within a sentence or paragraph. HTML provides the ``<q>` element for inline quotations. Here's an example:

```
According to `<q>Coco Chanel`</q>, "Fashion fades, only style remains the same."
```

The ``<q>` element is used to wrap the quoted text. Browsers usually render inline quotations with quotation marks or other distinctive styles.

## Block Quotations

Block quotations are used to mark up longer quotes that are displayed as separate blocks of text. HTML provides the ``<blockquote>` element for block quotations. Here's an example:

```
```<blockquote>
  <p>
    "The greatest glory in living lies not in never falling, but in rising every time we fall."
  </p>
  <footer>
    - Nelson Mandela
  </footer>
``</blockquote>
```

In the example above, the ``<blockquote>` element is used to wrap the quoted text, and the ``<p>` element is used to enclose the actual quote. The ``<footer>` element is used to provide attribution or citation information.

## Attribute: `cite`

Both inline and block quotations can use the `cite` attribute to specify the source of the quote. The `cite` attribute should contain the URL of the source document or a reference to the work being quoted. Here's an example:

```
According to `<q cite="https://example.com">John Doe`</q>, "Programming is the art of telling another human being what one wants the computer to do."
```

The `cite` attribute provides a way to give credit and link back to the original source of the quote.

## Conclusion

HTML offers the ``<q>` and ``<blockquote>` elements to markup and display quotations. Whether you need to mark up a short inline quote or a longer block quote, these elements provide a standardized way to attribute and present quoted text within your HTML documents. Don't forget to use the `cite` attribute to provide proper attribution. Happy quoting!
