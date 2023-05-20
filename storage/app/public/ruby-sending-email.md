# Sending Email with Ruby

Ruby provides libraries and frameworks that make it easy to send emails programmatically. In this tutorial, we'll explore how to send emails using the `mail` gem, which is a popular and feature-rich library for email handling in Ruby.

## Installation

To get started, you'll need to install the `mail` gem by adding it to your project's Gemfile or installing it directly using the following command:

```ruby
gem install mail
```

## Sending a Basic Email

To send an email using the `mail` gem, you need to create a `Mail::Message` object, set the necessary details such as the sender, recipients, subject, and body, and then deliver the email. Here's an example of sending a basic email:

```ruby
require 'mail'

# Create a new email message
email = Mail.new do
  from     'sender@example.com'
  to       'recipient@example.com'
  subject  'Hello from Ruby!'
  body     'This is the body of the email.'
end

# Deliver the email
email.deliver
```

In the example above, we create a new `Mail::Message` object using a block syntax and set the sender, recipient, subject, and body of the email. Finally, we call the `deliver` method to send the email.

## Adding Attachments

You can also attach files to your emails using the `mail` gem. To add an attachment, you can use the `add_file` method and specify the file path and content type. Here's an example:

```ruby
require 'mail'

email = Mail.new do
  # ... (set other email details)

  add_file '/path/to/file.pdf'     # Attach a file
  add_file '/path/to/image.jpg',   # Attach an image
           content_type: 'image/jpeg'
end

email.deliver
```

In the example above, we use the `add_file` method to attach a PDF file and an image file to the email. You can specify the content type of the attachment if it's different from the default based on the file extension.

## Sending HTML Emails

The `mail` gem also supports sending HTML emails. Instead of setting the body as plain text, you can set it as HTML content using the `html_part` method. Here's an example:

```ruby
require 'mail'

email = Mail.new do
  # ... (set other email details)

  text_part do
    body 'This is the plain text part of the email.'
  end

  html_part do
    content_type 'text/html; charset=UTF-8'
    body '<h1>This is the HTML part of the email.</h1>'
  end
end

email.deliver
```

In the example above, we use the `text_part` and `html_part` methods to specify the plain text and HTML versions of the email content, respectively. The `content_type` option is used to indicate the character set and content type of the HTML part.

## Conclusion

The `mail` gem provides a straightforward way to send emails with Ruby. By creating a `Mail::Message` object, setting the email details, and calling the `deliver` method, you can send emails with ease. Additionally, you can attach files and send HTML emails to enhance the functionality of your email communications.
