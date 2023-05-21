# Ionic JS Scroll

Ionic JS provides a Scroll component that allows you to implement scrolling behavior in your Ionic applications. The Scroll component is useful when you have content that exceeds the available space and needs to be scrolled vertically or horizontally. In this tutorial, we will learn how to use the Ionic JS Scroll component to implement scrolling functionality.

## Adding Scrollable Content

To make a section of your app scrollable, you need to wrap the content inside the `<ion-content>` element. This element acts as the container for the scrollable content. Here's an example of how to create a basic scrollable section:

```html
<ion-content>
  <!-- Your scrollable content goes here -->
</ion-content>
```

By default, the `<ion-content>` element will scroll vertically. If you want to enable horizontal scrolling, you can use the `scrollX` attribute:

```html
<ion-content scrollX="true">
  <!-- Your horizontally scrollable content goes here -->
</ion-content>
```

## Scroll Events

Ionic JS provides several events that you can use to respond to scroll-related actions. You can listen for these events in your controller using the `$ionicScrollDelegate` service. Here's an example of how to listen for the `scroll` event and log the scroll position:

```javascript
angular.module('myApp', ['ionic'])
.controller('myCtrl', function($scope, $ionicScrollDelegate) {
  $scope.onScroll = function() {
    var scrollPosition = $ionicScrollDelegate.getScrollPosition();
    console.log('Scroll position:', scrollPosition);
  };
});
```

In the example above, we have defined an `onScroll` function that is called whenever the user scrolls the content. Inside the function, we use the `$ionicScrollDelegate.getScrollPosition()` method to retrieve the current scroll position. We then log the scroll position to the console.

To attach the `onScroll` function to the scroll event, you can use the `ion-scroll` directive and specify the event listener in the `on-scroll` attribute:

```html
<ion-content>
  <ion-scroll on-scroll="onScroll()">
    <!-- Your scrollable content goes here -->
  </ion-scroll>
</ion-content>
```

## Programmatically Scrolling

Ionic JS also provides methods to programmatically scroll the content. You can use the `$ionicScrollDelegate` service to scroll to a specific position or element. Here's an example:

```javascript
angular.module('myApp', ['ionic'])
.controller('myCtrl', function($scope, $ionicScrollDelegate) {
  $scope.scrollToTop = function() {
    $ionicScrollDelegate.scrollTop();
  };
});
```

In the example above, we have defined a `scrollToTop` function that scrolls the content to the top. We use the `$ionicScrollDelegate.scrollTop()` method to scroll to the top position.

To trigger the scroll programmatically, you can use a button or any other event in your view:

```html
<ion-content>
  <button class="button" ng-click="scrollToTop()">Scroll to Top</button>
  <!-- Your scrollable content goes here -->
</ion-content>
```

These are the basics of implementing scrolling functionality in Ionic JS using the Scroll component. You can explore more advanced features and customization options in the Ionic documentation.

