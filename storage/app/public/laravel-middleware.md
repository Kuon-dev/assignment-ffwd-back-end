# Laravel Middleware

Middleware provides a convenient way to filter HTTP requests entering your application. Laravel includes several middleware that handle common tasks, such as verifying authentication, CSRF protection, and more. Additionally, you can create custom middleware to perform specific actions on the request or response.

## Introduction to Middleware

Middleware acts as a bridge between a request and a response. It sits between the incoming request and the route handler, allowing you to modify or inspect the request, perform certain actions, and then pass the request to the next middleware or route handler. Middleware can be used for various purposes, such as authentication, authorization, logging, modifying headers, and more.

## Built-in Middleware

Laravel provides several built-in middleware that you can use out of the box. Some commonly used middleware include:

- `web`: This middleware group includes session handling and CSRF protection for web routes.
- `auth`: This middleware ensures the user is authenticated before accessing the route.
- `guest`: This middleware allows only unauthenticated users to access the route.
- `throttle`: This middleware limits the rate at which users can access a route.

You can apply middleware to routes or groups of routes using the `middleware` method in the route definition or route group.

## Creating Custom Middleware

In addition to the built-in middleware, Laravel allows you to create your own custom middleware to handle specific tasks. Custom middleware can be created using the `make:middleware` Artisan command. For example, to create a `TrimStrings` middleware, you can run:


```php
php artisan make:middleware TrimStrings
```

This command will generate a new middleware class in the `app/Http/Middleware` directory. You can then implement the desired logic in the `handle` method of the generated middleware class.

To use the custom middleware, you need to register it in the `app/Http/Kernel.php` file's `routeMiddleware` property. After registration, you can apply the middleware to routes or groups using its assigned key.

## Middleware Parameters

Middleware can also accept additional parameters if needed. To pass parameters to middleware, you can separate them by a colon in the middleware definition. For example:


```php
Route::get('/admin', function () {
    // Route callback logic here
})->middleware('auth:admin');
```

In the above example, the `auth` middleware is applied with the `admin` parameter, indicating that only administrators are allowed to access the `/admin` route.

## Middleware Priority

Middleware can be assigned a priority to determine the order in which they are executed. Middleware with a lower priority value will be executed before those with a higher priority. The priority can be set in the `app/Http/Kernel.php` file's `$middlewarePriority` property.

