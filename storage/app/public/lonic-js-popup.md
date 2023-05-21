# Ionic JS Popup

Ionic JS provides a Popup service that allows you to create and display popup windows in your Ionic applications. Popups are modal dialogs that can be used to display information, receive input from the user, or confirm actions. In this tutorial, we will learn how to create and customize popups in Ionic JS.

## Creating a Basic Popup

To create a basic popup in Ionic JS, you first need to inject the `$ionicPopup` service into your controller. You can then call the `show` method on this service to create and display a popup window. The `show` method takes an options object as an argument, which allows you to customize the content and behavior of the popup.

```[javascript
angular.module('myApp', ['ionic'])
.controller('myCtrl', function($scope, $ionicPopup) {
  $scope.showPopup = function() {
    $ionicPopup.show({
      title: 'Popup Title',
      subTitle: 'Popup Subtitle',
      template: 'This is the content of the popup',
      buttons: [{
        text: 'OK',
        type: 'button-positive'
      }]
    });
  };
});
```

In the example above, we have defined a `showPopup` function that creates and displays a basic popup window. The popup has a title, subtitle, and content, and a single button that says "OK". The `type` attribute of the button is set to `button-positive`, which will give it a green color.

To call the `showPopup` function from your view, you can simply use an `ng-click` directive:

```html
<button class="button button-positive" ng-click="showPopup()">Show Popup</button>
