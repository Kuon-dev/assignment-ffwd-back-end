# Ruby on Rails: Sending Email

Sending emails is a common requirement in web applications, and Ruby on Rails provides a convenient way to handle email functionality. In this tutorial, we will cover the basics of sending emails using Ruby on Rails.

## Setting Up

Before we can send emails, we need to configure the email settings in our Rails application. Rails uses Action Mailer, a built-in component, to handle email functionality. Action Mailer relies on an email delivery method such as SMTP (Simple Mail Transfer Protocol) to send emails. To get started, make sure you have the necessary email configuration in your Rails application.

Open the `config/environments/{environment}.rb` file (e.g., `config/environments/development.rb`) and locate the `config.action_mailer.smtp_settings` section. Configure the SMTP settings for your email provider, such as the address, port, authentication, username, and password.

Here's an example configuration for using Gmail's SMTP server:

```
#ruby
config.action_mailer.smtp_settings = {
  address: 'smtp.gmail.com',
  port: 587,
  domain: 'yourdomain.com',
  user_name: 'your-email@gmail.com',
  password: 'your-password',
  authentication: 'plain',
  enable_starttls_auto: true
}
```

Remember to replace `'your-email@gmail.com'` and `'your-password'` with your actual Gmail account credentials.

## Creating a Mailer

In Rails, we use mailers to handle email-related tasks. A mailer is a class that inherits from `ActionMailer::Base` and contains methods to compose and send emails. Let's create a mailer to handle our email functionality.

Open a terminal, navigate to your Rails application's root directory, and run the following command to generate a new mailer:

```
#bash
rails generate mailer UserMailer
```

This will create a new file `user_mailer.rb` inside the `app/mailers` directory. Open the `user_mailer.rb` file and define your email-related methods.

Here's an example of a simple mailer with a `welcome_email` method:

```
#ruby
class UserMailer < ActionMailer::Base
  def welcome_email(user)
    @user = user
    mail(to: @user.email, subject: 'Welcome to My App')
  end
end
```

In the above example, we define a `welcome_email` method that takes a user object as a parameter. Inside the method, we set the instance variable `@user` to the provided user object. We then use the `mail` method to compose the email, specifying the recipient's email address and the subject of the email.

## Composing and Sending Emails

To compose and send an email, we need to create corresponding views and invoke the mailer method. Let's create a view template for our `welcome_email` method.

Inside the `app/views/user_mailer` directory, create a new file named `welcome_email.html.erb` and add the desired HTML content for the email. You can also create a plain text version of the email by naming the file `welcome_email.text.erb`.

Here's an example of a simple email template:

```
#html+erb
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" />
  </head>
  <body>
    <h1>Welcome to My App</h1>
    <p>Hello <%= @user.name %>,</p>
    <p>Thank you for joining our application!</p>
  </body>
</html>
```

In the above example, we use ERB (Embedded Ruby) tags to embed Ruby code inside the HTML template. The `@user.name` variable retrieves the name of the user passed to the `welcome_email` method.

To send the email, we can invoke the mailer method from our controller or another part of the application. Here's an example of sending the `welcome_email`:

```
#ruby
UserMailer.welcome_email(user).deliver_now
```

In the above example, we call the `welcome_email` method of the `UserMailer` class and pass a `user` object as an argument. The `deliver_now` method sends the email immediately. Alternatively, you can use `deliver_later` to enqueue the email for asynchronous delivery.

## Conclusion

Sending emails in Ruby on Rails is made easy with the built-in Action Mailer component. By configuring the email settings, creating a mailer, composing views, and invoking mailer methods, you can handle email functionality in your Rails application. Remember to test your email sending functionality in different environments to ensure a smooth user experience.
