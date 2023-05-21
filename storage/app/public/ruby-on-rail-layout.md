# Ruby on Rails Layout

In Ruby on Rails, layouts are used to define the common structure and presentation of multiple views. They provide a way to encapsulate the shared HTML markup, headers, footers, and navigation menus across different pages of an application. In this tutorial, we'll explore the basics of working with layouts in Rails.

## Default Layout

By default, Rails uses a layout file called `application.html.erb` located in the `app/views/layouts` directory. This layout acts as a parent template that wraps around other views. It typically contains the `<html>`, `<head>`, and `<body>` tags, as well as any common elements shared across the application.

## Yielding Content

Within a layout file, you can use the `<%= yield %>` tag to define the content area where the specific view content will be inserted. The `yield` keyword acts as a placeholder that gets replaced with the rendered content of the corresponding view. Here's an example:

```html
<!DOCTYPE html>
<html>
<head>
  <title>My Rails Application</title>
  <%= stylesheet_link_tag 'application' %>
  <%= javascript_include_tag 'application' %>
</head>
<body>
  <header>
    <!-- Header content -->
  </header>

  <main>
    <%= yield %>
  </main>

  <footer>
    <!-- Footer content -->
  </footer>
</body>
</html>

In this example, the `<%= yield %>` tag indicates the position where the content of each specific view will be rendered. The stylesheets and JavaScript files are included using the `stylesheet_link_tag` and `javascript_include_tag` helper methods, respectively.

## Using Different Layouts

Rails allows you to define multiple layouts and associate them with specific views or controllers. You can create custom layout files in the `app/views/layouts` directory and specify which layout to use using the `layout` method in controllers or by setting the `layout` instance variable in views. Here's an example:

```ruby
# app/controllers/posts_controller.rb
class PostsController < ApplicationController
  layout 'custom_layout'

  def show
    # Controller action logic
  end
end

In this example, the `PostsController` specifies the `custom_layout` as the layout to be used for all actions within the controller. You can create `custom_layout.html.erb` in the `app/views/layouts` directory and define its structure and content.

## Conditional Layouts

You can also conditionally select a layout based on certain criteria. This can be useful when you want to use different layouts for different scenarios. The `layout` method accepts a symbol or a block to define conditional layouts. Here's an example:

```ruby
# app/controllers/posts_controller.rb
class PostsController < ApplicationController
  layout :select_layout

  def show
    # Controller action logic
  end

  private

  def select_layout
    if condition
      'layout1'
    else
      'layout2'
    end
  end
end

In this example, the `select_layout` method returns the layout to be used based on a condition. You can define your own logic to determine which layout to use.

## Conclusion

Layouts provide a way to define the common structure and presentation of views in a Ruby on Rails application. By creating layout files and using the `<%= yield %>` tag, you can encapsulate shared HTML markup and create a consistent user interface. Additionally, you can use different layouts for specific views or conditionally select layouts based on certain criteria. Understanding layouts is essential for creating a cohesive and well-structured application interface in Rails.
