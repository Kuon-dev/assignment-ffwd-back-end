# Ruby on Rails Active Record

Active Record is an integral part of the Ruby on Rails framework and provides an object-relational mapping (ORM) layer for database interactions. It allows you to work with databases using Ruby classes and objects, making database operations more intuitive and efficient. In this tutorial, we'll explore some of the key concepts and features of Active Record.

## Models and Database Tables

In Active Record, models represent database tables. Each model class is a Ruby class that inherits from `ActiveRecord::Base`. By convention, the model class name is singular and capitalized, while the corresponding database table name is plural and lowercase.

Here's an example of a `User` model:

```ruby
class User < ActiveRecord::Base
end

This model assumes there is a `users` table in the database. Active Record infers the table name based on the model class name.

## CRUD Operations

Active Record provides a set of methods to perform CRUD (Create, Read, Update, Delete) operations on database records.

### Create

To create a new record, you can use the `create` method:

```ruby
user = User.create(name: 'John', email: 'john@example.com')

This will create a new `User` object and save it to the database.

### Read

To fetch records from the database, you can use various methods:

- `all`: Retrieves all records from the table.
- `find`: Retrieves a record by its primary key.
- `where`: Retrieves records based on conditions.
- `first` and `last`: Retrieve the first and last records.

Here's an example:

```ruby
users = User.all
user = User.find(1)
users = User.where(age: 25)
first_user = User.first
last_user = User.last

### Update

To update an existing record, you can modify its attributes and call the `save` method:

```ruby
user = User.find(1)
user.name = 'Updated Name'
user.save

Alternatively, you can use the `update` method to update multiple records at once:

```ruby
User.update_all(name: 'New Name')

### Delete

To delete a record, you can call the `destroy` method on the object:

```ruby
user = User.find(1)
user.destroy

### Associations

Active Record allows you to define associations between models, representing relationships between database tables. Some common association types include `belongs_to`, `has_many`, and `has_many :through`.

Here's an example of a `Comment` model associated with the `User` model:

```ruby
class Comment < ActiveRecord::Base
  belongs_to :user
end

class User < ActiveRecord::Base
  has_many :comments
end

This association allows a user to have multiple comments, and each comment belongs to a user.

## Conclusion

Active Record is a powerful feature of the Ruby on Rails framework that simplifies database interactions. By leveraging models, CRUD operations, and associations, you can efficiently work with databases in your Rails applications.
