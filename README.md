# Prismic Api client




## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/bachus03/prismic-api-client"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\PrismicItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_field = 56; // int | Name of custom field created in prismic
$request_body = array(new \stdClass); // object[]

try {
    $result = $apiInstance->pushItems($custom_field, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrismicItemsApi->pushItems: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost/if/write*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PrismicItemsApi* | [**pushItems**](docs/Api/PrismicItemsApi.md#pushitems) | **POST** /{custom-field} | Push Items into prismic.

## Models

- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseRequestError](docs/Model/ErrorResponseRequestError.md)
- [PrismicResponse](docs/Model/PrismicResponse.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## About this package

- API version: `1.0.0`

