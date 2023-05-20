# React Forms

Forms are an essential part of web applications for collecting user input. React provides powerful features to handle form input and manage the state of form components.

## Controlled Components

In React, form components that are controlled by React state are called "controlled components". The state is used to store and manage the current value of the form elements, allowing React to control the input value and handle changes.

Here's an example of a controlled component for a simple text input:

```jsx
import React, { useState } from 'react';

function Form() {
  const [name, setName] = useState('');

  const handleChange = (event) => {
    setName(event.target.value);
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    // Handle form submission
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Name:
        <input type="text" value={name} onChange={handleChange} />
      </label>
      <button type="submit">Submit</button>
    </form>
  );
}

export default Form;
```

In this example, the value of the text input is controlled by the `name` state variable. The `handleChange` function updates the `name` state whenever the input value changes. The form submission is handled by the `handleSubmit` function.

## Handling Multiple Form Inputs

When dealing with forms that contain multiple inputs, you can manage the state for each input using separate state variables or a single state object.

Here's an example of a form with multiple inputs using separate state variables:

```jsx
import React, { useState } from 'react';

function Form() {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');

  const handleNameChange = (event) => {
    setName(event.target.value);
  };

  const handleEmailChange = (event) => {
    setEmail(event.target.value);
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    // Handle form submission
  };

  return (
    <form onSubmit={handleSubmit}>
      <label>
        Name:
        <input type="text" value={name} onChange={handleNameChange} />
      </label>
      <label>
        Email:
        <input type="email" value={email} onChange={handleEmailChange} />
      </label>
      <button type="submit">Submit</button>
    </form>
  );
}

export default Form;
```

In this example, the `name` and `email` state variables are used to control the values of the respective inputs. The `handleNameChange` and `handleEmailChange` functions update the corresponding state variables based on the input changes.

## Form Submission

To handle form submission, you need to attach an event handler to the form's `onSubmit` event. In the event handler, you can perform actions such as validating the form inputs, making API requests, or updating the application state.

In the previous examples, the `handleSubmit` function is invoked when the form is submitted. By calling `event.preventDefault()`, we prevent the default form submission behavior, which typically causes a page refresh.

You can add your custom logic inside the `handleSubmit` function to handle the form submission according to your application's requirements.

## Form Validation

Form validation is an essential part of ensuring data integrity and providing a good user experience. React provides various techniques and libraries to handle form validation, including custom validation functions, third-party libraries like Formik or Yup, or HTML5 form validation attributes.

Custom validation functions can be implemented by adding conditional checks within the form submission handler or the input change handlers.
