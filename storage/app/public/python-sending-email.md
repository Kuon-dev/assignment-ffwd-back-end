# Python Sending Email

Python provides libraries and modules that make it easy to send emails programmatically. You can use these libraries to send plain text emails, HTML emails, attachments, and more. In this tutorial, we'll explore the basics of sending emails using Python.

## Sending Plain Text Email

To send a plain text email in Python, you can use the `smtplib` module, which is part of the standard library. Here's an example:

```python
import smtplib
from email.message import EmailMessage

# Create a plain text email
msg = EmailMessage()
msg.set_content("Hello, this is a plain text email!")

# Set the sender and recipient
msg["From"] = "sender@example.com"
msg["To"] = "recipient@example.com"

# Set the subject
msg["Subject"] = "Plain Text Email"

# Send the email
with smtplib.SMTP("smtp.example.com", 587) as smtp:
    smtp.login("username", "password")
    smtp.send_message(msg)

In this example, we create an `EmailMessage` object and set its content to the plain text message. We set the sender, recipient, and subject using the appropriate message headers. Finally, we use the `smtplib.SMTP` class to connect to the SMTP server, login with the sender's credentials, and send the email.

## Sending HTML Email

Python also allows you to send HTML emails. You can include HTML tags in the email content to format the message. Here's an example:

```python
import smtplib
from email.message import EmailMessage

# Create an HTML email
msg = EmailMessage()
msg.set_content("<h1>Hello, this is an HTML email!</h1>", subtype="html")

# Set the sender, recipient, and subject
msg["From"] = "sender@example.com"
msg["To"] = "recipient@example.com"
msg["Subject"] = "HTML Email"

# Send the email
with smtplib.SMTP("smtp.example.com", 587) as smtp:
    smtp.login("username", "password")
    smtp.send_message(msg)

In this example, we set the `subtype` parameter of the `set_content()` method to `"html"`, indicating that the email content is HTML. The rest of the process is similar to sending a plain text email.

## Sending Email with Attachments

Python allows you to send email attachments by including files as attachments in the email. Here's an example:

```python
import smtplib
from email.message import EmailMessage

# Create an email with an attachment
msg = EmailMessage()
msg.set_content("Hello, this email has an attachment!")

# Set the sender, recipient, and subject
msg["From"] = "sender@example.com"
msg["To"] = "recipient@example.com"
msg["Subject"] = "Email with Attachment"

# Add an attachment
with open("path/to/attachment.pdf", "rb") as file:
    attachment_data = file.read()
msg.add_attachment(attachment_data, maintype="application", subtype="pdf", filename="attachment.pdf")

# Send the email
with smtplib.SMTP("smtp.example.com", 587) as smtp:
    smtp.login("username", "password")
    smtp.send_message(msg)

In this example, we open the attachment file in binary mode and read its contents. We then use the `add_attachment()` method to attach the file to the email. You can specify the main type and subtype of the attachment content and provide a filename.

