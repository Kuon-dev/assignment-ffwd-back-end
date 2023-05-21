# Ruby on Rails Migrations

Migrations are a crucial part of Ruby on Rails that allow you to manage database schema changes over time. They provide a convenient way to create, modify, and revert database tables and columns while keeping track of versioning. In this tutorial, we'll explore the basics of Rails migrations.

## Creating a Migration

To create a new migration, you can use the `rails generate` command followed by the `migration` generator, specifying the name of the migration and the desired changes. For example, to create a migration to add a new column to a table, you can run:

```ruby
rails generate migration AddColumnToTable column_name:data_type

This will generate a new migration file in the `db/migrate` directory with a name like `YYYYMMDDHHMMSS_add_column_to_table.rb`, where `YYYYMMDDHHMMSS` represents the current timestamp.

## Writing a Migration

The generated migration file will contain a Ruby class that inherits from `ActiveRecord::Migration`. Inside the migration class, you can define methods to perform the desired database changes using the provided DSL (Domain-Specific Language).

Here's an example of a migration that adds a `last_name` column to the `users` table:

```ruby
class AddLastNameToUsers < ActiveRecord::Migration
  def change
    add_column :users, :last_name, :string
  end
end

In this example, the `change` method is used to add a new column to the `users` table. The `add_column` method specifies the table name, column name, and data type.

## Running Migrations

To apply pending migrations and update the database schema, you can run the `rails db:migrate` command. This command will execute any migrations that haven't been applied yet.

```ruby
rails db:migrate

You can also roll back the last migration by using the `db:rollback` command:

```ruby
rails db:rollback

This will revert the last migration and undo the corresponding changes in the database.

## Additional Migration Tasks

Rails migrations provide several additional tasks and options to manage the database schema effectively. Here are some common tasks:

- `db:migrate:status`: Shows the status of migrations, indicating which ones have been applied.
- `db:migrate:redo`: Rolls back the last migration and applies it again.
- `db:migrate:reset`: Rolls back all migrations and applies them again from scratch.
- `db:rollback STEP=n`: Rolls back the last `n` migrations.
- `db:schema:load`: Loads the schema file (`db/schema.rb`) into the database.

These tasks can be executed using the `rails` command followed by the task name.

## Conclusion

Migrations are an essential part of Ruby on Rails for managing database schema changes. By creating and running migrations, you can modify the database structure over time while maintaining version control. Understanding migrations is crucial for developing Rails applications with robust and scalable database schemas.
