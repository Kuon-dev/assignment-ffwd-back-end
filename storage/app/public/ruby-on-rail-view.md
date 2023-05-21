# Ruby on Rails View

In Ruby on Rails, views are responsible for presenting the application's user interface. They handle the presentation logic and generate the HTML markup that is sent to the client's browser. In this tutorial, we'll explore the basics of creating views in a Rails application.

## View Templates

View templates are files that contain the HTML markup and embedded Ruby code that defines the structure and content of a web page. Rails uses the ERB (Embedded Ruby) templating language by default, which allows you to embed Ruby code within HTML using special tags.

By convention, view templates are located in the `app/views` directory of your Rails application. Each controller typically has its own subdirectory within `app/views`, and the template file is named after the corresponding action.

## Rendering Views

Rails provides a powerful rendering system that allows you to render views from within controller actions. The `render` method is used to render a view template and generate the response sent back to the client's browser. Here's an example of rendering a view:

```ruby
def show
  @user = User.find(params[:id])
  render 'users/show'
end
```
In this example, the `render 'users/show'` line renders the `show.html.erb` view template for the `users` controller. The `@user` instance variable is made available to the view, allowing you to pass data from the controller to the view.

## ERB Syntax

ERB templates allow you to embed Ruby code within HTML using `<% %>` and `<%= %>` tags. The `<% %>` tags are used for executing Ruby code, while the `<%= %>` tags are used for evaluating Ruby code and outputting the result. Here's an example:

```html
<h1>Welcome, <%= @user.name %></h1>
```
In this example, the `@user.name` value is dynamically inserted into the HTML markup when the view is rendered.

## Partials

Partials are reusable view templates that can be included within other views. They are useful for extracting common HTML components and reducing duplication in your views. Partials are typically prefixed with an underscore (`_`) and can be rendered using the `render` method. Here's an example:

```ruby
# app/views/users/show.html.erb
<h1>User Profile</h1>
<%= render 'shared/user_info', user: @user %>

# app/views/shared/_user_info.html.erb
<p>Name: <%= user.name %></p>
<p>Email: <%= user.email %></p>
```
In this example, the `_user_info.html.erb` partial is rendered within the `show.html.erb` view. The `user` variable is passed as a local variable to the partial, allowing it to access the user's information.

## Asset Pipeline

The Asset Pipeline is a feature of Rails that handles the management and compilation of assets such as CSS, JavaScript, and images. It provides a structured way to organize and serve static assets in your application. By default, assets are stored in the `app/assets` directory.

You can include stylesheets and JavaScript files in your views using the `stylesheet_link_tag` and `javascript_include_tag` helper methods, respectively. For example:

```html
<%= stylesheet_link_tag 'application' %>
<%= javascript_include_tag 'application' %>
```
These helper methods generate the appropriate HTML tags to include the CSS and JavaScript assets specified.


