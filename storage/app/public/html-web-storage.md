
# HTML Web Storage

HTML web storage allows you to store data locally in the browser. This data persists even after the browser window is closed, providing a way to store and retrieve information for your web applications. In this tutorial, we'll explore how to use web storage in HTML.

## Local Storage

The `localStorage` object provides a way to store key-value pairs locally in the browser. Here's an example of how to store data in local storage:

```javascript
// Store data in local storage
localStorage.setItem('key', 'value');
```

In the example above, we use the `setItem()` method of the `localStorage` object to store the value `'value'` with the key `'key'`. The data is stored as a string.

To retrieve the data from local storage, you can use the `getItem()` method:

```javascript
// Retrieve data from local storage
const value = localStorage.getItem('key');
console.log(value); // Output: value
```

The `getItem()` method retrieves the value associated with the specified key. In this case, we retrieve the value associated with the key `'key'` and assign it to the variable `value`.

To remove a specific key-value pair from local storage, you can use the `removeItem()` method:

```javascript
// Remove data from local storage
localStorage.removeItem('key');
```

The `removeItem()` method removes the key-value pair associated with the specified key from local storage.

## Session Storage

Similar to local storage, the `sessionStorage` object provides a way to store data locally in the browser. The difference is that data stored in session storage is only accessible within the same session. Once the session is closed, the data is deleted. The usage of session storage is similar to local storage:

```javascript
// Store data in session storage
sessionStorage.setItem('key', 'value');

// Retrieve data from session storage
const value = sessionStorage.getItem('key');

// Remove data from session storage
sessionStorage.removeItem('key');
```

## Summary

HTML web storage is a convenient way to store data locally in the browser. By using the `localStorage` or `sessionStorage` objects, you can store and retrieve key-value pairs. Local storage persists even after the browser window is closed, while session storage is limited to the current session. Understanding how to use web storage can enhance your web applications by allowing you to store and access data on the client-side.

For more information and advanced usage of web storage, you can refer to the [Web Storage API Specification](https://www.w3.org/TR/webstorage/).
