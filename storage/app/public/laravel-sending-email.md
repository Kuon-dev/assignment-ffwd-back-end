# Laravel Sending Email

Sending emails is a common requirement in web applications, and Laravel makes it easy to send emails using its built-in Mail API. In this tutorial, you'll learn how to send emails in Laravel.

## Setup

Before sending emails in Laravel, you need to configure your email settings in the `.env` file. Open the `.env` file in your Laravel project and set the following variables:

````dotenv
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=your-smtp-port
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="${APP_NAME}"
````

Make sure to replace the placeholders with your actual SMTP server details and email address.

## Creating Mailables

In Laravel, emails are represented as Mailable classes. These classes define the email's content, subject, recipients, and any other relevant information. To create a new Mailable class, you can use the `make:mail` Artisan command:

````shell
php artisan make:mail WelcomeEmail
````

This will generate a new Mailable class under the `app/Mail` directory. Open the generated file and update the `build` method to define the email's content and subject:

````php
namespace App`Mail;

use Illuminate`Bus`Queueable;
use Illuminate`Mail`Mailable;
use Illuminate`Queue`SerializesModels;
use Illuminate`Contracts`Queue`ShouldQueue;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Welcome to My Website')
                    ->view('emails.welcome');
    }
}
````

In this example, we set the subject of the email to "Welcome to My Website" and specify the view file that contains the email's content.

## Sending Emails

To send an email using the Mailable class you created, you can use the `Mail` facade. Here's an example of sending the `WelcomeEmail`:

````php
use App`Mail`WelcomeEmail;
use Illuminate`Support`Facades`Mail;

Mail::to('recipient@example.com')->send(new WelcomeEmail());
````

In this example, we use the `to` method to specify the recipient's email address and the `send` method to send the email. You can pass any necessary data to the Mailable class constructor to customize the email's content dynamically.

That's it! You have learned how to send emails in Laravel. With Laravel's Mail API, you can easily send personalized and dynamic emails to your users.
