# google-image-search
You're able to query google for images using Google's new Custom Search API.

``` php
ImageSearch::config()->apiKey('API Goes Here');
ImageSearch::config()->cx('CX Goes Here');

ImageSearch::search('civic'); // returns array of results
```

## Requirements
You need to have an API key and a CX string, both can be found by taking a look here:
https://developers.google.com/custom-search/docs/overview

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

You can also pass in some filters as a second parameter as an array.

```php
ImageSearch::search('civic', ['imgSize' => 'large']);
```

The list of filters can be found on Google's official site:

https://developers.google.com/custom-search/json-api/v1/reference/cse/list

It'll return an array of results. The images are specifically in the `items` key.
