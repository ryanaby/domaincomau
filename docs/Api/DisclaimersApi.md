# Swagger\Client\DisclaimersApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**disclaimersGet**](DisclaimersApi.md#disclaimersget) | **GET** /v1/disclaimers | Retrieves disclaimers for given ids
[**disclaimersGetByProduct**](DisclaimersApi.md#disclaimersgetbyproduct) | **GET** /v1/disclaimers/product/{product} | Retrieves disclaimers for given product

# **disclaimersGet**
> \Swagger\Client\Model\DisclaimersV1DisclaimerModel[] disclaimersGet($ids)

Retrieves disclaimers for given ids

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

$apiInstance = new Swagger\Client\Api\DisclaimersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | Comma separated list of ids. Eg. \"1,2,3\"

try {
    $result = $apiInstance->disclaimersGet($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisclaimersApi->disclaimersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| Comma separated list of ids. Eg. \&quot;1,2,3\&quot; | [optional]

### Return type

[**\Swagger\Client\Model\DisclaimersV1DisclaimerModel[]**](../Model/DisclaimersV1DisclaimerModel.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **disclaimersGetByProduct**
> \Swagger\Client\Model\DisclaimersV1DisclaimerModel[] disclaimersGetByProduct($product)

Retrieves disclaimers for given product

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

$apiInstance = new Swagger\Client\Api\DisclaimersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = "product_example"; // string | Possible product values: `PropertyData`, `AURIN`, `HomePriceGuide`

try {
    $result = $apiInstance->disclaimersGetByProduct($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisclaimersApi->disclaimersGetByProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**| Possible product values: &#x60;PropertyData&#x60;, &#x60;AURIN&#x60;, &#x60;HomePriceGuide&#x60; |

### Return type

[**\Swagger\Client\Model\DisclaimersV1DisclaimerModel[]**](../Model/DisclaimersV1DisclaimerModel.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

