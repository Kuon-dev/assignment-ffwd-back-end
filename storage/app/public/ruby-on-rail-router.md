# Ruby on Rails Router

The router in Ruby on Rails is responsible for mapping incoming requests to the appropriate controller actions. It defines the routes that determine how URLs are handled and processed by the application. In this tutorial, we'll explore the basics of the Rails router.

## Route Configuration

The route configuration file in a Rails application is located at `config/routes.rb`. This file defines the mapping between URLs and controller actions. The routes are defined using a DSL (Domain-Specific Language) that provides a clean and intuitive syntax.

## Basic Routes

A basic route in Rails consists of an HTTP verb, a URL pattern, and a controller action. The most common HTTP verbs used in Rails are `get`, `post`, `put`, `patch`, and `delete`. Here's an example of a basic route:

```ruby
get '/users', to: 'users#index'

In this example, the `get` verb indicates that this route should handle GET requests. The `/users` URL pattern specifies that requests to the `/users` path should be routed to the `index` action of the `UsersController`.

## Route Parameters

Routes can also contain dynamic segments known as route parameters. Route parameters are denoted by a colon (`:`) followed by the parameter name. They allow you to capture parts of the URL and pass them as parameters to the controller action. Here's an example:

```ruby
get '/users/:id', to: 'users#show'

In this example, the `:id` parameter captures a dynamic value from the URL. For example, a request to `/users/1` would be routed to the `show` action of the `UsersController` with the `id` parameter set to `1`.

## Named Routes

Named routes provide a way to generate URLs based on route configurations. They allow you to reference routes by a specific name instead of hardcoding URLs in your code. To define a named route, you can use the `as` option. Here's an example:

```ruby
get '/users', to: 'users#index', as: 'all_users'

In this example, the `as: 'all_users'` option gives the route a name of `all_users`. You can then use the named route helper `all_users_path` or `all_users_url` to generate the corresponding URL.

## Route Constraints

Route constraints allow you to define additional conditions for routing. You can use constraints to match specific URL patterns or apply custom logic to determine if a route should be matched. Constraints are defined using regular expressions or custom objects that respond to the `matches?` method. Here's an example:

```ruby
get '/users/:id', to: 'users#show', constraints: { id: /`d+/ }

In this example, the `constraints` option specifies that the `:id` parameter must be a numeric value. This ensures that the route only matches when the `:id` segment of the URL consists of one or more digits.

## Route Resources

Rails provides a convenient way to define routes for a resourceful controller using the `resources` method. This method generates a set of conventional routes for CRUD operations (create, read, update, delete) based on RESTful conventions. Here's an example:

```ruby
resources :users
```
In this example, the `resources :users` statement generates a set of routes for the `UsersController`, including routes for index, show, new, create, edit, update, and destroy actions.


