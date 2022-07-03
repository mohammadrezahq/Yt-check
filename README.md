# YtCheck

Check if a youtube video exists.

### Setup:

Install the package with composer:

```
composer require mor/yt-check
```

### To Use

```php
use YtCheck\Yt;
```

### Check if the video exists

```php

$id = 'BUykFA7FCo4'; // It can be a url.

$isValid = Yt::isValid($id); // True or False
```

### Get some details about the video

```php

$url = 'https://www.youtube.com/shorts/BUykFA7FCo4'; // It can be an id.

$video = Yt::oembed($url);
$title = $video->title;

// OR

$video = new Yt($url);
$title = $video->title; // Returns title
$author_name = $video->author_name;
$author_url = $video->author_url;
$type = $video->type;
$thumbnail_url = $video->thumbnail_url;
$html = $video->html; // Iframe of video

```
