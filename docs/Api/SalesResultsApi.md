# Swagger\Client\SalesResultsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesResultsGet**](SalesResultsApi.md#salesresultsget) | **GET** /v1/salesResults/{city} | Retrieves sales results for a given city
[**salesResultsHead**](SalesResultsApi.md#salesresultshead) | **GET** /v1/salesResults/_head | Retrieves metadata regarding sales result data
[**salesResultsListings**](SalesResultsApi.md#salesresultslistings) | **GET** /v1/salesResults/{city}/listings | Retrieves listing summaries corresponding to the sales results

# **salesResultsGet**
> \Swagger\Client\Model\SalesResultsV1CityResultsSummary salesResultsGet($city)

Retrieves sales results for a given city

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

$apiInstance = new Swagger\Client\Api\SalesResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$city = "city_example"; // string | City. Supported cities are: `Sydney`, `Melbourne`, `Brisbane`, `Adelaide`, `Canberra`

try {
    $result = $apiInstance->salesResultsGet($city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesResultsApi->salesResultsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city** | **string**| City. Supported cities are: &#x60;Sydney&#x60;, &#x60;Melbourne&#x60;, &#x60;Brisbane&#x60;, &#x60;Adelaide&#x60;, &#x60;Canberra&#x60; |

### Return type

[**\Swagger\Client\Model\SalesResultsV1CityResultsSummary**](../Model/SalesResultsV1CityResultsSummary.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesResultsHead**
> \Swagger\Client\Model\SalesResultsV1CityResultsDate salesResultsHead()

Retrieves metadata regarding sales result data

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

$apiInstance = new Swagger\Client\Api\SalesResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->salesResultsHead();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesResultsApi->salesResultsHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SalesResultsV1CityResultsDate**](../Model/SalesResultsV1CityResultsDate.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesResultsListings**
> \Swagger\Client\Model\SalesResultsV1SaleListing[] salesResultsListings($city)

Retrieves listing summaries corresponding to the sales results

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

$apiInstance = new Swagger\Client\Api\SalesResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$city = "city_example"; // string | City. Supported cities are: `Sydney`, `Melbourne`, `Brisbane`, `Adelaide`, `Canberra`

try {
    $result = $apiInstance->salesResultsListings($city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesResultsApi->salesResultsListings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city** | **string**| City. Supported cities are: &#x60;Sydney&#x60;, &#x60;Melbourne&#x60;, &#x60;Brisbane&#x60;, &#x60;Adelaide&#x60;, &#x60;Canberra&#x60; |

### Return type

[**\Swagger\Client\Model\SalesResultsV1SaleListing[]**](../Model/SalesResultsV1SaleListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

