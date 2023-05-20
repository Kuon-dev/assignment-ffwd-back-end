# Ionic Tab

Ionic provides a tab component that allows you to create multi-page navigation within your app. Tabs are commonly used for organizing content and providing easy access to different sections of an application. In this tutorial, we'll explore how to use the Ionic tab component.

## Creating Tabs

To create tabs in Ionic, we can use the `ion-tabs` component along with `ion-tab` components. Each `ion-tab` represents a separate page within the tab layout. Here's an example of creating tabs:

```html
<ion-tabs>
  <ion-tab-bar slot="bottom">
    <ion-tab-button tab="tab1">
      <ion-icon name="home"></ion-icon>
      <ion-label>Home</ion-label>
    </ion-tab-button>
    <ion-tab-button tab="tab2">
      <ion-icon name="notifications"></ion-icon>
      <ion-label>Notifications</ion-label>
    </ion-tab-button>
    <ion-tab-button tab="tab3">
      <ion-icon name="settings"></ion-icon>
      <ion-label>Settings</ion-label>
    </ion-tab-button>
  </ion-tab-bar>

  <ion-tab tab="tab1">
    <ion-content>
      <!-- Content for the Home tab -->
    </ion-content>
  </ion-tab>
  <ion-tab tab="tab2">
    <ion-content>
      <!-- Content for the Notifications tab -->
    </ion-content>
  </ion-tab>
  <ion-tab tab="tab3">
    <ion-content>
      <!-- Content for the Settings tab -->
    </ion-content>
  </ion-tab>
</ion-tabs>
```

In the above example, we have three tabs: "Home," "Notifications," and "Settings." Each tab is represented by an `ion-tab-button` component, which contains an icon and a label. The content for each tab is defined within `ion-tab` components.

## Navigating between Tabs

Ionic tab component provides seamless navigation between tabs. When a tab button is clicked, the corresponding tab's content will be displayed. The tab button's `tab` attribute specifies which tab it should navigate to. Here's an example:

```html
<ion-tabs>
  <!-- Tab buttons -->
  <ion-tab-bar slot="bottom">
    <ion-tab-button tab="tab1">
      <ion-icon name="home"></ion-icon>
      <ion-label>Home</ion-label>
    </ion-tab-button>
    <ion-tab-button tab="tab2">
      <ion-icon name="notifications"></ion-icon>
      <ion-label>Notifications</ion-label>
    </ion-tab-button>
  </ion-tab-bar>

  <!-- Tab contents -->
  <ion-tab tab="tab1">
    <ion-content>
      <!-- Content for the Home tab -->
    </ion-content>
  </ion-tab>
  <ion-tab tab="tab2">
    <ion-content>
      <!-- Content for the Notifications tab -->
    </ion-content>
  </ion-tab>
</ion-tabs>
```

In the above example, we have two tabs: "Home" and "Notifications." Clicking on the "Home" tab button will display the content of the "Home" tab, and clicking on the "Notifications" tab button will display the content of the "Notifications" tab.


