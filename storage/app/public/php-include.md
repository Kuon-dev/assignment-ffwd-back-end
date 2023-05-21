# PHP `include`

In PHP, the `include` statement is used to include and evaluate the content of another PHP file within the current PHP script. This allows you to reuse code and organize your application's logic into separate files. The `include` statement is commonly used for including reusable functions, configuration files, templates, and more.

## Syntax

The syntax of the `include` statement is as follows:

`````````
php
include 'filename.php';
`````````

The `filename.php` represents the path to the file you want to include. You can use both relative and absolute paths depending on your file structure.

## Difference between `include` and `require`

In addition to `include`, PHP provides another similar statement called `require`. The main difference between them is how they handle errors when the specified file is not found:

- `include` will generate a warning and continue executing the script if the file is not found.
- `require` will generate a fatal error and stop the script execution if the file is not found.

It's recommended to use `require` when including essential files that are crucial for the script to run and use `include` for non-essential files.

## Usage Examples

Here are a few usage examples of the `include` statement:

### Including a PHP File

You can include a PHP file that contains reusable functions or variables. Once included, you can access the functions and variables defined in that file within the current script:

`````````
php
// File: utils.php
function greet($name) {
    echo "Hello, " . $name . "!";
}

// File: index.php
include 'utils.php';
greet("John"); // Output: Hello, John!
`````````

### Including an HTML Template

You can include an HTML template file to reuse common markup across multiple pages. This is particularly useful for headers, footers, or navigation menus:

`````````
php
// File: header.php
<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

// File: index.php
include 'header.php';
echo "<h1>Welcome to My Website</h1>";
include 'footer.php';
`````````

### Including a Configuration File

You can include a configuration file that contains important settings or constants for your application. This allows you to centralize configuration and easily make changes when needed:

`````````
php
// File: config.php
define('DB_HOST', 'localhost');
define('DB_USER', 'username');
define('DB_PASS', 'password');
...

// File: database.php
include 'config.php';
// Use the defined constants here to establish a database connection
...

// File: index.php
include 'config.php';
// Use the defined constants here for application configuration
...
`````````

## Conclusion

The `include` statement is a powerful feature in PHP that enables code reuse and modular programming. By including files, you can organize your codebase, improve maintainability, and enhance the overall structure of your PHP applications.
