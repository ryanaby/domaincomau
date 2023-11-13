# Swagger\Client\ProductsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productsRateForNewListing**](ProductsApi.md#productsratefornewlisting) | **POST** /v1/products/ratefornewlisting | Get updated pricing information for a hypothetical listing
[**socialBoostRateForNewSocialBoost**](ProductsApi.md#socialboostratefornewsocialboost) | **POST** /v1/products/ratefornewsocialboost | Get updated pricing information for a hypothetical listing

# **productsRateForNewListing**
> \Swagger\Client\Model\BookingsV2RateForNewListing productsRateForNewListing($body)

Get updated pricing information for a hypothetical listing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BookingsV2RateForNewListingRequest(); // \Swagger\Client\Model\BookingsV2RateForNewListingRequest | 

try {
    $result = $apiInstance->productsRateForNewListing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productsRateForNewListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BookingsV2RateForNewListingRequest**](../Model/BookingsV2RateForNewListingRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BookingsV2RateForNewListing**](../Model/BookingsV2RateForNewListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **socialBoostRateForNewSocialBoost**
> \Swagger\Client\Model\SocialBoostV1RateForNewSocialBoost socialBoostRateForNewSocialBoost($body)

Get updated pricing information for a hypothetical listing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SocialBoostV1RateForNewSocialBoostRequestModel(); // \Swagger\Client\Model\SocialBoostV1RateForNewSocialBoostRequestModel | 

try {
    $result = $apiInstance->socialBoostRateForNewSocialBoost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->socialBoostRateForNewSocialBoost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SocialBoostV1RateForNewSocialBoostRequestModel**](../Model/SocialBoostV1RateForNewSocialBoostRequestModel.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SocialBoostV1RateForNewSocialBoost**](../Model/SocialBoostV1RateForNewSocialBoost.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

