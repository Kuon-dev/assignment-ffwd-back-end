# Ruby on Rails File Uploading

File uploading is a common requirement in web applications, and Ruby on Rails provides convenient features and libraries to handle file uploads seamlessly. In this tutorial, we'll explore how to implement file uploading in Ruby on Rails.

## 1. Setting Up File Uploading

To enable file uploading in your Rails application, you need to include the `Active Storage` module. Active Storage provides an easy way to upload files and associate them with your models.

To set up Active Storage, follow these steps:

1. Run the following command to install Active Storage:

   ```ruby
   rails active_storage:install
  ```
2. Run the database migrations to create the necessary tables:

   ```ruby
   rails db:migrate
  ```
3. Add the following line to your model to enable file attachments:

   ```ruby
   class User < ApplicationRecord
     has_one_attached :avatar
   end
  ```
## 2. Uploading Files

With Active Storage set up, you can now handle file uploads in your Rails application. Here's an example of how to upload a file using a form:

```ruby
<%= form_with(model: @user, url: users_path, multipart: true) do |form| %>
  <%= form.file_field :avatar %>
  <%= form.submit "Upload" %>
<% end %>
```
In this example, the form includes a file field for selecting the file to upload. The `multipart: true` option is necessary for forms that handle file uploads.

## 3. Processing Uploaded Files

After the file is uploaded, you can access and process it in your controller. Active Storage provides a convenient way to work with uploaded files. Here's an example of how to process an uploaded file:

```ruby
def create
  @user = User.new(user_params)
  @user.avatar.attach(params[:user][:avatar])

  if @user.save
    # File uploaded successfully
    redirect_to @user
  else
    # Handle errors
    render :new
  end
end
```
In this example, the uploaded file is attached to the `avatar` attribute of the `User` model using the `attach` method. If the user is saved successfully, you can perform the appropriate actions (e.g., redirecting to a show page). Otherwise, you can handle the errors accordingly.

## 4. Displaying Uploaded Files

To display an uploaded file in your views, you can use the `url_for` helper provided by Active Storage. Here's an example of how to display the avatar image for a user:

```ruby
<%= image_tag url_for(@user.avatar) if @user.avatar.attached? %>
```
This code checks if the user has an attached avatar and then uses the `image_tag` helper to generate the appropriate HTML tag for displaying the image.

## 5. Deleting Uploaded Files

Active Storage also provides a convenient way to delete uploaded files. To delete an attached file, you can use the `purge` method. Here's an example of how to delete a user's avatar:

```ruby
def destroy
  @user = User.find(params[:id])
  @user.avatar.purge

  # Handle the rest of the delete action
end
```
In this example, the `purge` method removes the attached file from storage. You can then handle the rest of the delete action as needed.

## Conclusion

File uploading is a common requirement in web applications, and Ruby on Rails makes it straightforward to handle file uploads with the help of Active Storage. By following the steps and examples in this tutorial, you can implement file uploading functionality in your Rails application efficiently.
