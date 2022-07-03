# YtCheck

Check if youtube video exists.

### Setup:

Install package with composer:

```
composer require mor/yt-check
```

### To Use

```php
use YtCheck\Yt;
```

### Check if video exists

```php

$id = 'BUykFA7FCo4'; // It can be url.

$isValid = Yt::isValid($id); // True or False
```

### Get some details about video

```php

$url = 'https://www.youtube.com/shorts/BUykFA7FCo4'; // It can be id.

$video = Yt::oembed($url);
$title = $video->title;

// OR

$video = new Yt($url);
$title = $video->title; // Returns video title
$author_name = $video->author_name;
$author_url = $video->author_url;
$type = $video->type;
$thumbnail_url = $video->thumbnail_url;
$html = $video->html; // Iframe of video

```
