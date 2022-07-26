# OpenAPI\Client\PrismicItemsApi

All URIs are relative to http://localhost/if/write.

Method | HTTP request | Description
------------- | ------------- | -------------
[**pushItems()**](PrismicItemsApi.md#pushItems) | **POST** /{custom-field} | Push Items into prismic.


## `pushItems()`

```php
pushItems($custom_field, $request_body): \OpenAPI\Client\Model\PrismicResponse
```

Push Items into prismic.

Push Items into Prismic

### Example

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_field** | **int**| Name of custom field created in prismic |
 **request_body** | [**object[]**](../Model/object.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PrismicResponse**](../Model/PrismicResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
