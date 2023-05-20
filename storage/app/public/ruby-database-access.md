# Ruby Database Access

Ruby provides a rich ecosystem of libraries and frameworks for interacting with databases. In this tutorial, we'll explore the basics of connecting to a database, executing SQL queries, and retrieving data using Ruby.

## Connecting to a Database

To connect to a database in Ruby, you need to install a database adapter gem that corresponds to the database you're using. Popular options include `pg` for PostgreSQL, `mysql2` for MySQL, and `sqlite3` for SQLite.

Once you've installed the appropriate gem, you can establish a connection to the database using the corresponding adapter's `connect` or `new` method. Here's an example of connecting to a PostgreSQL database:

```ruby
require 'pg'

# Establish a connection to the database
connection = PG.connect(dbname: 'mydatabase', user: 'myuser', password: 'mypassword', host: 'localhost', port: 5432)

# Use the connection for executing queries
# ...

# Close the connection when finished
connection.close
```

In the example above, we're using the `pg` gem to connect to a PostgreSQL database. You'll need to replace the connection parameters (`dbname`, `user`, `password`, `host`, `port`) with the appropriate values for your database.

## Executing SQL Queries

Once you have a database connection, you can execute SQL queries using the `exec` or `exec_params` method provided by the database adapter. Here's an example of executing a simple query and retrieving the results:

```ruby
require 'pg'

# Establish a connection to the database
connection = PG.connect(dbname: 'mydatabase', user: 'myuser', password: 'mypassword', host: 'localhost', port: 5432)

# Execute a query
result = connection.exec('SELECT * FROM users')

# Process the query results
result.each do |row|
  puts row['name']
end

# Close the connection when finished
connection.close
```

In the example above, we execute a SELECT query to retrieve all rows from the `users` table. The query results are returned as a `PG::Result` object, which we iterate over to access the individual rows.

## Retrieving Data

The database adapter provides various methods to retrieve data from the query results. For example, you can use the `[]` operator to access column values by name or index, or you can use the `fetch` method to retrieve values with error handling. Here's an example:

```ruby
require 'pg'

# Establish a connection to the database
connection = PG.connect(dbname: 'mydatabase', user: 'myuser', password: 'mypassword', host: 'localhost', port: 5432)

# Execute a query
result = connection.exec('SELECT * FROM users')

# Access column values by name or index
result.each do |row|
  puts row['name']
  puts row[1]
end

# Retrieve values with error handling
result.each do |row|
  begin
    puts row.fetch('name')
  rescue KeyError
    puts 'Name column does not exist'
  end
end

# Close the connection when finished
connection.close
```

In the example above, we demonstrate different ways of accessing column values from the query results. The `fetch` method allows you to handle missing or non-existent columns gracefully by raising a `KeyError` that you can catch and handle.

## Conclusion

Ruby provides powerful database access capabilities through its database adapter gems. By establishing a connection, executing SQL queries, and retrieving data using the appropriate methods provided by the adapter, you can interact
