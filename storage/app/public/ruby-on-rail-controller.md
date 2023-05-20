# Ruby on Rails Controllers

Controllers in Ruby on Rails are responsible for handling the application's incoming requests, processing the logic, and preparing the response. In this tutorial, we'll explore the basics of controllers in Rails.

## Creating a Controller

To create a new controller, you can use the `rails generate` command followed by the `controller` generator, specifying the name of the controller and any desired actions. For example, to create a `UsersController` with `index`, `show`, `create`, and `update` actions, you can run:

```ruby
rails generate controller Users index show create update

This will generate a new controller file (`users_controller.rb`) in the `app/controllers` directory.

## Actions and Routes

Each action in a controller corresponds to a specific URL route and handles the logic for that route. For example, the `index` action is responsible for listing all users, while the `show` action displays a specific user. By default, Rails generates corresponding routes for each action in the `config/routes.rb` file.

## Writing Controller Actions

Inside the controller file, each action is defined as a Ruby method. You can write the logic for each action inside its corresponding method. For example, here's an example of a `UsersController` with `index` and `show` actions:

```ruby
class UsersController < ApplicationController
  def index
    @users = User.all
  end

  def show
    @user = User.find(params[:id])
  end
end

In this example, the `index` action fetches all users from the database and assigns them to the `@users` instance variable. The `show` action finds a specific user based on the provided `id` parameter and assigns it to the `@user` instance variable.

## Rendering Views

Controllers are responsible for rendering the appropriate views to generate the response. By default, Rails looks for views in the `app/views` directory with a folder structure matching the controller name. For example, the views for the `UsersController` would be located in the `app/views/users` directory.

To render a view from an action, you can use the `render` method. By convention, Rails automatically renders the view with the same name as the action. For example, the `index` action would render the `index.html.erb` view.

## Strong Parameters

When handling user input, it's important to ensure the security of your application. Rails introduced strong parameters to provide an extra layer of protection against mass assignment vulnerabilities. Strong parameters allow you to define which parameters are allowed to be used in certain actions.

To use strong parameters, you can define a private method in your controller to specify the permitted parameters. For example:

```ruby
private

def user_params
  params.require(:user).permit(:name, :email, :password)
end

In this example, the `user_params` method specifies that only the `name`, `email`, and `password` parameters are allowed when creating or updating a user.
```
## Conclusion

Controllers play a crucial role in Ruby on Rails applications, handling incoming requests and orchestrating the application's logic. By understanding controllers, you can effectively process requests, retrieve and manipulate data, and render appropriate views. Controllers are an integral part of building dynamic and interactive web applications with Ruby on Rails.
