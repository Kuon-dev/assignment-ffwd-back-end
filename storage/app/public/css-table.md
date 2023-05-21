
# CSS Table

CSS provides powerful styling options for HTML tables, allowing you to customize their appearance and layout. You can apply styles to the table itself, as well as to specific parts like the table headers, table cells, and even individual rows and columns.

## Styling the Table

To style the entire table, you can use the `table` selector. Here's an example that sets the table's border, background color, and width:

`````````css
table {
  border: 1px solid black;
  background-color: #f2f2f2;
  width: 100%;
}
`````````

In this example, the table will have a solid black border, a light gray background color, and will occupy the full width of its container.

## Styling Table Headers

You can style the table headers (`<th>`) separately using the `th` selector. Here's an example that sets the font weight, background color, and text alignment for table headers:

`````````css
th {
  font-weight: bold;
  background-color: #ccc;
  text-align: center;
}
`````````

In this example, the table headers will have bold text, a light gray background color, and will be centered horizontally.

## Styling Table Cells

To style the table cells (`<td>`), you can use the `td` selector. Here's an example that sets the padding, background color, and text alignment for table cells:

`````````css
td {
  padding: 10px;
  background-color: #fff;
  text-align: left;
}
`````````

In this example, the table cells will have 10 pixels of padding, a white background color, and left-aligned text.

## Alternating Row Styles

You can apply alternating styles to the rows of a table to improve readability. This can be achieved using the `:nth-child()` selector. Here's an example that applies different background colors to odd and even rows:

`````````css
tr:nth-child(odd) {
  background-color: #f9f9f9;
}

tr:nth-child(even) {
  background-color: #e8e8e8;
}
`````````

In this example, odd-numbered rows will have a slightly darker background color (#f9f9f9), while even-numbered rows will have a lighter background color (#e8e8e8).

These are just a few examples of how CSS can be used to style tables. With CSS, you have a wide range of options to customize the appearance of tables to suit your needs and design preferences.
