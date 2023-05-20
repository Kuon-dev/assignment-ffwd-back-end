
# HTML Media

HTML provides various elements and attributes for embedding media content, such as images, audio, and video, into web pages. In this tutorial, we'll explore how to use HTML to include media in your web projects.

## Images

To display an image on a web page, you can use the `<img>` tag. Here's an example:

```[html
<img src="image.jpg" alt="Description of the image">
```

In the code above, we specify the image source using the `src` attribute and provide alternative text using the `alt` attribute. The alternative text is displayed if the image fails to load or for accessibility purposes.

You can also set additional attributes like `width` and `height` to control the size of the image. It's good practice to specify both the width and height to prevent page layout shifts while the image loads.

## Audio

To add audio content to your web page, you can use the `<audio>` tag. Here's an example:

```[html
<audio src="audio.mp3" controls>
  Your browser does not support the audio element.
</audio>
```

In the code above, we specify the audio source using the `src` attribute. The `controls` attribute adds a default set of playback controls to the audio player. The text between the opening and closing `<audio>` tags will be displayed if the browser doesn't support the audio element.

You can further customize the audio player by adding additional attributes and using JavaScript to control playback programmatically.

## Video

To embed videos in your web page, you can use the `<video>` tag. Here's an example:

```[html
<video src="video.mp4" controls width="640" height="360">
  Your browser does not support the video element.
</video>
```

In the code above, we specify the video source using the `src` attribute. The `controls` attribute adds playback controls to the video player. We also set the `width` and `height` attributes to define the dimensions of the video player.

Similar to audio, you can add more attributes and use JavaScript to interact with the video player programmatically.

## Summary

HTML provides convenient elements and attributes for embedding media content in web pages. By using the `<img>`, `<audio>`, and `<video>` tags, you can easily incorporate images, audio, and video into your web projects. Experiment with different attributes and explore JavaScript APIs to create engaging multimedia experiences.

Remember to always provide alternative text for images and fallback content for audio and video elements to ensure a good user experience across different browsers and devices.
