
# HTML Video

HTML provides a powerful `<video>` tag for embedding videos directly into your web pages. In this tutorial, we'll explore how to use the HTML `<video>` tag to display videos on your website.

## Basic Video Embedding

To embed a video, you can use the `<video>` tag along with the `src` attribute to specify the video file. Here's an example:

```[html
<video src="video.mp4" controls>
  Your browser does not support the video tag.
</video>
```

In the code above, we use the `src` attribute to define the source of the video file. The `controls` attribute adds a default set of playback controls to the video player. The text between the opening and closing `<video>` tags is displayed if the browser doesn't support the video tag.

## Video Format Support

Different browsers support different video formats. To ensure cross-browser compatibility, it's recommended to provide multiple video sources in different formats. You can achieve this using the `<source>` tag within the `<video>` tag. Here's an example:

```[html
<video controls>
  <source src="video.mp4" type="video/mp4">
  <source src="video.webm" type="video/webm">
  <source src="video.ogv" type="video/ogg">
  Your browser does not support the video tag.
</video>
```

In the code above, we provide three video sources in different formats using the `<source>` tag. The browser will try to play the first supported format. If none of the formats are supported, the fallback text will be displayed.

## Video Attributes

The `<video>` tag supports various attributes for customizing the video player. Here are some commonly used attributes:

- `autoplay`: Specifies that the video should start playing automatically.
- `loop`: Specifies that the video should loop indefinitely.
- `muted`: Specifies that the video should be muted by default.
- `width` and `height`: Specifies the dimensions of the video player.

Example:

```[html
<video src="video.mp4" controls autoplay loop width="640" height="360">
  Your browser does not support the video tag.
</video>
```

In the code above, we use the `autoplay` and `loop` attributes to automatically start and loop the video. The `width` and `height` attributes define the dimensions of the video player.

## Summary

The `<video>` tag in HTML allows you to embed videos directly into your web pages. By providing different video sources in various formats and using attributes like `controls`, `autoplay`, and `loop`, you can create a rich video playback experience for your users. Experiment with different options and explore JavaScript APIs to further enhance the functionality of your video player.

Remember to provide fallback content or text between the opening and closing `<video>` tags for browsers that do not support the video tag, ensuring a good user experience across different devices and platforms.
