# Ionic JS Navigation

Ionic provides a powerful navigation system that allows you to create multi-page applications with ease. In this tutorial, we'll explore how to navigate between pages using Ionic's JavaScript navigation.

## Setting Up the Navigation

Before we can start navigating between pages, we need to set up the navigation in our Ionic project. Ionic uses a router to handle navigation, which is configured in the `app.module.ts` file.

First, make sure you have the necessary imports:

```javascript
import { RouterModule, Routes } from '@angular/router';

// Import your page components here
import { HomePage } from './home/home.page';
import { AboutPage } from './about/about.page';
...

// Define your routes
const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', component: HomePage },
  { path: 'about', component: AboutPage },
  ...
];

// Configure the router module
@NgModule({
  imports: [
    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
```

In the above example, we import the necessary modules and components. We define an array of routes that map paths to component classes. Each route object specifies the path and the corresponding component to be displayed.

We configure the router module by importing `RouterModule` and calling `forRoot(routes)` to set up the routes. Finally, we export the router module.

## Navigating Between Pages

Once the navigation is set up, we can use the `NavController` class to navigate between pages programmatically. The `NavController` provides methods for navigating forward, backward, or to a specific page.

To navigate to a specific page, we can inject the `NavController` in our component and use its `navigateForward()` or `navigateBack()` methods. Here's an example:

```javascript
import { NavController } from '@ionic/angular';

constructor(private navCtrl: NavController) {}

goToAboutPage() {
  this.navCtrl.navigateForward('about');
}

goBack() {
  this.navCtrl.navigateBack('home');
}
```

In the above example, we import the `NavController` class and inject it into our component using dependency injection. Inside the component, we define two methods: `goToAboutPage()` and `goBack()`.

The `goToAboutPage()` method uses the `navigateForward()` method of the `NavController` to navigate to the 'about' page. Similarly, the `goBack()` method uses the `navigateBack()` method to go back to the 'home' page.

## Passing Parameters

In some cases, you may need to pass parameters from one page to another during navigation. Ionic provides a way to pass parameters using the `NavParams` class.

To pass parameters, you can modify the navigation methods in your component. Here's an example:

```javascript
import { NavController } from '@ionic/angular';

constructor(private navCtrl: NavController) {}

goToAboutPage() {
  const params = {
    id: 123,
    name: 'John Doe'
  };

  this.navCtrl.navigateForward('about', { queryParams: params });
}
```




