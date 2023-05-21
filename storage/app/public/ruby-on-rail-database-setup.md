# Ruby on Rails Database Setup

Setting up the database for your Ruby on Rails application is an essential step in the development process. In this tutorial, we'll walk through the necessary steps to configure and interact with the database in a Rails application.

## Step 1: Configure Database Connection

Rails uses a configuration file called `database.yml` to specify the database connection details. Locate this file in your Rails application's directory and open it for editing. You'll find sections for different environments such as development, test, and production.

Here's an example of the `database.yml` file:

```yaml
development:
  adapter: postgresql
  database: myapp_development
  username: myapp
  password: secret
  host: localhost

test:
  adapter: postgresql
  database: myapp_test
  username: myapp
  password: secret
  host: localhost

production:
  adapter: postgresql
  database: myapp_production
  username: myapp
  password: <%= ENV['MYAPP_DATABASE_PASSWORD'] %>
  host: <%= ENV['MYAPP_DATABASE_HOST'] %>

Make sure to adjust the values according to your database setup. You'll need to provide the adapter (e.g., postgresql, mysql), database name, username, password, and host information.

## Step 2: Create the Database

Rails provides a convenient command to create the database based on the configuration specified in `database.yml`. Open your terminal, navigate to your Rails application's directory, and run the following command:

```bash
rails db:create

This command will create the development and test databases based on the configuration in `database.yml`.

## Step 3: Run Migrations

Migrations are used in Rails to manage database schema changes over time. Rails provides a set of generators to create and manage migrations. To run pending migrations and update your database schema, run the following command:

```bash
rails db:migrate

This will apply any pending migrations and bring your database schema up to date.
```
## Step 4: Interact with the Database

With the database set up, you can now interact with it through your Rails application. You can define models that correspond to database tables and use ActiveRecord, Rails' object-relational mapping (ORM) library, to perform database operations.

For example, you can create a `User` model and interact with the `users` table in the database using ActiveRecord methods such as `create`, `find`, `update`, and `destroy`.

## Conclusion

Configuring and setting up the database in a Ruby on Rails application is an essential step in building dynamic web applications. By following the steps outlined in this tutorial, you should now have a basic understanding of how to configure the database connection, create the database, run migrations, and interact with the database using ActiveRecord.
