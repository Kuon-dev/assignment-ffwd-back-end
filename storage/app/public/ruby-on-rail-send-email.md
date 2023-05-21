# Sending Email in Ruby on Rails

Sending email notifications is a crucial feature in many web applications. Ruby on Rails provides a powerful framework for sending emails effortlessly. In this tutorial, we'll explore how to send emails using Ruby on Rails.

## 1. Configuring Email Delivery

Before you can send emails, you need to configure the email delivery settings in your Rails application. The configuration is typically done in the `config/environments/` files (e.g., `development.rb`, `production.rb`). Here's an example configuration for sending emails using Gmail:

```ruby
# config/environments/development.rb

Rails.application.configure do
  # ...
  
  config.action_mailer.delivery_method = :smtp
  config.action_mailer.smtp_settings = {
    address:              'smtp.gmail.com',
    port:                 587,
    domain:               'your-domain.com',
    user_name:            'your-email@gmail.com',
    password:             'your-password',
    authentication:       'plain',
    enable_starttls_auto: true
  }
  
  # ...
end
```