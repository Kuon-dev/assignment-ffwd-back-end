# Laravel Request

In Laravel, requests are used to handle and validate incoming HTTP requests. Requests provide a convenient way to retrieve input data, perform validation, and sanitize user input.

## Creating a Request

To create a new request class, you can use the `make:request` Artisan command:

```php
php artisan make:request CreateUserRequest
```

This command will generate a new request file `CreateUserRequest.php` in the `app/Http/Requests` directory.

## Defining Validation Rules

Within the request file, you can define validation rules for the incoming request data. The `rules` method is used to specify the validation rules.

For example, let's define a `CreateUserRequest` with validation rules for creating a new user:

```php
namespace App`Http`Requests;

use Illuminate`Foundation`Http`FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ];
    }
}
```

In this example, the `rules` method defines the validation rules using Laravel's validation syntax. The `name` field is required and must be a string, the `email` field is required and must be a valid email address, and the `password` field is required and must be at least 8 characters long.

## Accessing Request Data

You can access the request data within your controller or other parts of your application by type-hinting the request class in the method's parameters or using the `Request` facade.

For example, let's modify a controller method to accept the `CreateUserRequest`:

```php
use App`Http`Requests`CreateUserRequest;

public function store(CreateUserRequest $request)
{
    // Access request data
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');

    // Process the request
}
```

In this example, the `store` method accepts an instance of `CreateUserRequest` as a parameter. You can then access the request data using the `$request` object, such as retrieving input values using the `input` method.

## Customizing Error Messages

Laravel automatically handles request validation and redirects back with error messages if validation fails. You can customize the error messages by overriding the `messages` method in your request class.

For example, let's customize the error messages for the `CreateUserRequest`:

```php
public function messages()
{
    return [
        'name.required' => 'The name field is required.',
        'email.required' => 'The email field is required.',
        'email.email' => 'The email must be a valid email address.',
        'email.unique' => 'The email has already been taken.',
        'password.required' => 'The password field is required.',
        'password.min' => 'The password must be at least 8 characters.',
    ];
}
```

In this example, the `messages` method defines custom error messages for specific validation rules. If validation fails, Laravel will display these error messages to the user.

## Conclusion

Laravel requests provide a powerful way to handle and validate incoming HTTP requests. By creating request classes, defining validation rules, and accessing request data in your controllers, you can ensure the integrity and security of your application's input.

