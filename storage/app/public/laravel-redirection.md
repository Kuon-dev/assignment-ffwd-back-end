# Laravel Redirection

Redirection is an essential feature in web development to navigate users from one URL to another. In Laravel, you can perform various types of redirections using the `redirect()` method.

## Basic Redirection

To perform a basic redirection in Laravel, you can use the `redirect()` method and specify the URL you want to redirect to:

``
```php
return redirect('/dashboard');
```

In this example, the user will be redirected to the `/dashboard` URL.

## Named Routes

Laravel allows you to define named routes in your routes file using the `name()` method. You can use these named routes for redirection:

``
```php
Route::get('/dashboard', function () {
    // ...
})->name('dashboard');
```

To redirect to a named route, you can use the `route()` method:

``
```php
return redirect()->route('dashboard');
```

This will redirect the user to the URL associated with the named route.

## Redirecting with Data

Sometimes, you may need to pass data to the redirected URL. Laravel provides several methods to achieve this.

### With Method

The `with()` method allows you to flash data to the session, making it available in the next request:

``
```php
return redirect('/dashboard')->with('status', 'Profile updated successfully!');
```

In the redirected route, you can retrieve the flashed data from the session using the `session()` helper:

``
```php
$status = session('status');
```

### WithInput Method

The `withInput()` method is used to flash the current input data to the session. This is useful when you want to retain the form data after redirection:

``
```php
return redirect('/contact')->withInput();
```

In the redirected route, you can retrieve the previous input using the `old()` helper:

``
```php
$previousInput = old();
```

## Redirecting with Status Codes

Laravel allows you to redirect with specific HTTP status codes using the `withStatus()` method:

``
```php
return redirect('/login')->withStatus(302);
```

In this example, the user will be redirected to the `/login` URL with a 302 status code.

## Redirecting Back

The `back()` method is used to redirect the user back to the previous URL:

``
```php
return back();
```

This is particularly useful when you want to create a "Cancel" button that takes the user back to the previous page.

## Conclusion

Redirection is a crucial aspect of web development, and Laravel provides a convenient and straightforward way to handle it. With the `redirect()` method and its various options, you can easily perform different types of redirections in your Laravel applications.
