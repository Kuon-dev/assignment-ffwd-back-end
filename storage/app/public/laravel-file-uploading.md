# Laravel File Uploading

Uploading files is a common requirement in web applications, and Laravel provides convenient methods to handle file uploads effortlessly. In this tutorial, you'll learn how to upload files using Laravel.

## File Upload Process

The file upload process involves the following steps:

1. Create a form with an input field of type `file`.
2. Submit the form and handle the uploaded file in the server-side code.
3. Process and store the uploaded file.

Let's dive into each step in detail.

## Step 1: Create a Form

In your HTML form, add an input field with the `file` type to allow users to select and upload files. Make sure to set the `enctype` attribute of the form to `"multipart/form-data"` to support file uploads.

Here's an example form using Laravel's Blade templating engine:

```html
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
```

In this example, we create a form that submits to the `/upload` route using the `POST` method. The `@csrf` directive generates a CSRF token to protect against cross-site request forgery attacks. The `input` field of type `file` allows users to select a file for upload.

## Step 2: Handle the Uploaded File

In your server-side code, typically within a controller method, you can handle the uploaded file using the `store` method provided by Laravel's `Request` object. This method will store the file in a specified location on the server.

Here's an example of handling the uploaded file:

```php
public function upload(Request $request)
{
    if ($request->hasFile('file')) {
        $path = $request->file('file')->store('uploads');
        // Process the stored file path
        return "File uploaded successfully!";
    }

    return "No file uploaded!";
}
```

In this example, we check if the request has a file using the `hasFile` method. If a file is present, we use the `file` method to access the uploaded file. The `store` method saves the file to the specified storage location, which in this case is the `uploads` directory. You can customize the storage location as per your application's requirements.

## Step 3: Process and Store the Uploaded File

Once the file is uploaded and stored, you can perform additional processing or store relevant information in your application's database. You can access the file's details, such as its name, size, and extension, using the methods provided by Laravel's `UploadedFile` class.

Here's an example of processing the uploaded file:

```php
public function upload(Request $request)
{
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $fileSize = $file->getSize();
        $fileExtension = $file->getClientOriginalExtension();

        // Perform additional processing or store the file details

        return "File uploaded successfully!";
    }

    return "No file uploaded!";
}
```

In this example, we access the uploaded file using the `file` method. We can then use various methods, such as `getClientOriginalName`, `getSize`, and `getClientOriginalExtension`, to retrieve information about the file. You can customize the processing logic based on your application's requirements.

