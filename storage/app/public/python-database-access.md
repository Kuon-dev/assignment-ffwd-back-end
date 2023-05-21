# Python Database Access

Python provides several libraries and modules for interacting with databases. These libraries enable you to connect to a database, execute SQL queries, fetch results, and perform other database operations. In this tutorial, we'll explore the basics of database access using Python.

## Connecting to a Database

Before you can interact with a database, you need to establish a connection. The specific method for connecting to a database depends on the database system you're using. Here's an example of connecting to a MySQL database using the `mysql-connector-python` library:

```python
import mysql.connector

# Establish a connection
connection = mysql.connector.connect(
    host="localhost",
    user="username",
    password="password",
    database="database_name"
)
```
In this example, we import the `mysql.connector` module and use the `connect()` function to establish a connection to a MySQL database. You need to provide the host, user, password, and database name as parameters.

## Executing SQL Queries

Once you have a connection, you can execute SQL queries using a cursor. The cursor allows you to interact with the database and fetch results. Here's an example of executing a simple SELECT query:

```python
import mysql.connector

# Establish a connection
connection = mysql.connector.connect(
    host="localhost",
    user="username",
    password="password",
    database="database_name"
)

# Create a cursor
cursor = connection.cursor()

# Execute a query
query = "SELECT * FROM table_name"
cursor.execute(query)

# Fetch results
results = cursor.fetchall()
for row in results:
    print(row)

# Close the cursor and connection
cursor.close()
connection.close()
```
In this example, we establish a connection to a MySQL database as before. We then create a cursor using the `cursor()` method of the connection object. The `execute()` method is used to execute the SQL query, and the `fetchall()` method retrieves all the rows returned by the query.

## Parameterized Queries

When executing SQL queries that involve user input, it's important to use parameterized queries to prevent SQL injection attacks. Parameterized queries separate the SQL code from the user input, providing better security. Here's an example:

```python
import mysql.connector

# Establish a connection
connection = mysql.connector.connect(
    host="localhost",
    user="username",
    password="password",
    database="database_name"
)

# Create a cursor
cursor = connection.cursor()

# Execute a parameterized query
query = "SELECT * FROM table_name WHERE id = %s"
params = (1,)
cursor.execute(query, params)

# Fetch results
results = cursor.fetchall()
for row in results:
    print(row)

# Close the cursor and connection
cursor.close()
connection.close()
```
In this example, we use a parameterized query by using a placeholder `%s` in the SQL query. The actual parameter value is provided as a tuple `params` in the `execute()` method.

