### Basic

Create a new Background by passing the source image URL at initialization:

```javascript
$(".target").background({
	source: "http://example.com/image.jpg"
});
```

```markup
<div class="target">
	...
</div>
```

### Responsive

Create a responsive-friendly Background by defining key/value pairs containing the `min-width` image URLs:


```javascript
$(".target").background({
	source: {
		"0px": "http://example.com/image-small.jpg",
		"980px": "http://example.com/image-large.jpg"
	}
});
```

### HTML5 Video

Create a video Background by defining proper browser-specific source video URLs, as well as a poster image URL:

```javascript
$(".target").background({
	source: {
		poster: "http://example.com/poster.jpg",
		webm: "http://example.com/video.webm",
		mp4: "http://example.com/video.mp4",
		ogg: "http://example.com/video.ogv"
	}
});
```

### YouTube Video

Create a YouTube video Background by passing the YouTube embed URL as the source. If you do not define a poster, the YouTube thumbnail will be used:

```javascript
$(".target").background({
	source: {
		poster: "http://example.com/poster.jpg",
		video: "//www.youtube.com/embed/VIDEO_ID"
	}
});
```