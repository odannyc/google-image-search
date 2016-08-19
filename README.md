# google-image-search
You're able to query google for images using Google's new Custom Search API.

``` php
ImageSearch::config()->apiKey('API Goes Here');
ImageSearch::config()->cx('CX Goes Here');

ImageSearch::search('civic'); // returns array of results
```

## Installation
Use composer to install

`composer require odannyc/google-image-search`

## Usage
Set your API and CX string using the config method:

```php
ImageSearch::config()->apiKey('API Goes Here');
ImageSearch::config()->cx('CX Goes Here');
```

Once that's done, use the search method to query a specific string of text

```php
ImageSearch::search('civic');
```

It'll return an array of results. The images are specifically in the `items` key.
