# Laravel Cookie

Cookies are a convenient way to store small pieces of data on the client-side. In Laravel, you can easily work with cookies to store and retrieve data using the `Cookie` facade.

## Setting a Cookie

To set a cookie in Laravel, you can use the `Cookie` facade's `queue` method. This method allows you to add a cookie to the outgoing response.

For example, let's set a cookie named `username` with the value `"john"`:

```php
use Illuminate`Support`Facades`Cookie;

Cookie::queue('username', 'john', 60);
```

In this example, the `queue` method is used to add a cookie to the response. The first parameter is the cookie name, the second parameter is the cookie value, and the third parameter is the cookie expiration time in minutes.

## Retrieving a Cookie

To retrieve a cookie value in Laravel, you can use the `Cookie` facade's `get` method.

For example, let's retrieve the value of the `username` cookie:

```php
use Illuminate`Support`Facades`Cookie;

$username = Cookie::get('username');
```

In this example, the `get` method is used to retrieve the value of the `username` cookie. If the cookie is present, its value will be assigned to the `$username` variable.

## Deleting a Cookie

To delete a cookie in Laravel, you can use the `Cookie` facade's `forget` method. This method removes the cookie from the outgoing response.

For example, let's delete the `username` cookie:

```php
use Illuminate`Support`Facades`Cookie;

Cookie::forget('username');
```

In this example, the `forget` method is used to delete the `username` cookie from the response.

## Working with Encrypted Cookies

Laravel provides built-in support for encrypting cookies to enhance security. When setting an encrypted cookie, the value will be encrypted before being stored.

To set an encrypted cookie, you can use the `encrypt` method of the `Cookie` facade:

```php
use Illuminate`Support`Facades`Cookie;

$encryptedValue = encrypt('secret');
Cookie::queue('encrypted_cookie', $encryptedValue, 60);
```

In this example, the `encrypt` function is used to encrypt the cookie value before setting it.

When retrieving an encrypted cookie, Laravel will automatically decrypt the value for you:

```php
use Illuminate`Support`Facades`Cookie;

$decryptedValue = Cookie::get('encrypted_cookie');
$originalValue = decrypt($decryptedValue);
```

In this example, the `decrypt` function is used to decrypt the cookie value retrieved using the `get` method.

## Conclusion

Cookies are a powerful mechanism for storing data on the client-side. In Laravel, you can easily set, retrieve, and delete cookies using the `Cookie` facade. Additionally, Laravel provides support for encrypting cookies to ensure data security.

