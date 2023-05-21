
# HTML Tables

HTML tables are used to display data in rows and columns. They provide a structured way to present information and are commonly used for organizing tabular data, creating grids, and laying out web page content.

## Creating a Basic Table

To create a basic table, you need to use the `<table>`, `<tr>`, and `<td>` elements. The `<table>` element represents the table itself, the `<tr>` element defines a table row, and the `<td>` element defines a table cell.

Here's an example of a basic table with two rows and two columns:

```
<table>
<tr>
<td>Row 1, Column 1</td>
<td>Row 1, Column 2</td>
</tr>
<tr>
<td>Row 2, Column 1</td>
<td>Row 2, Column 2</td>
</tr>
</table>
```

In the example above, we have a table with two rows and two columns. The content of each cell is defined using the `<td>` element.

## Table Headers

Tables often include headers to provide labels for columns or rows. HTML provides the `<th>` element specifically for table headers. By using `<th>` instead of `<td>`, you indicate that the cell contains a header.

Here's an example of a table with headers:

```
<table>
<tr>
<th>Header 1</th>
<th>Header 2</th>
</tr>
<tr>
<td>Data 1</td>
<td>Data 2</td>
</tr>
</table>
```

In this example, the first row contains `<th>` elements, which represent the table headers. The second row contains regular `<td>` elements for the data cells.

## Table Structure and Styling

HTML provides various elements to structure and style tables. Here are some commonly used elements:

- `<caption>`: Adds a caption to the table.
- `<thead>`, `<tbody>`, `<tfoot>`: Groups the table header, body, and footer sections respectively.
- `<colgroup>` and `<col>`: Defines groups or individual columns for styling purposes.
- CSS: You can use CSS to further customize the appearance of tables by applying styles to elements like `<table>`, `<th>`, and `<td>`.

## Conclusion

HTML tables are a powerful tool for displaying structured data on web pages. By understanding the basic table structure and utilizing additional elements and CSS, you can create visually appealing and well-organized tables to present information effectively.
