# Swagger\Client\SchoolsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**schoolsGetById**](SchoolsApi.md#schoolsgetbyid) | **GET** /v2/schools/{id} | Retrieve the details of a school by Id
[**schoolsSearchByLocation**](SchoolsApi.md#schoolssearchbylocation) | **GET** /v2/schools/{latitude}/{longitude} | Search for a school in a location

# **schoolsGetById**
> \Swagger\Client\Model\SchoolsV2School schoolsGetById($id)

Retrieve the details of a school by Id

Domain School Ids can be obtained from the search by location endpoint.

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

$apiInstance = new Swagger\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | School id

try {
    $result = $apiInstance->schoolsGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| School id |

### Return type

[**\Swagger\Client\Model\SchoolsV2School**](../Model/SchoolsV2School.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schoolsSearchByLocation**
> \Swagger\Client\Model\SchoolsV2SchoolWithDistance[] schoolsSearchByLocation($latitude, $longitude)

Search for a school in a location

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

$apiInstance = new Swagger\Client\Api\SchoolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$latitude = 1.2; // double | Latitude to search
$longitude = 1.2; // double | Longitude to search

try {
    $result = $apiInstance->schoolsSearchByLocation($latitude, $longitude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchoolsApi->schoolsSearchByLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **latitude** | **double**| Latitude to search |
 **longitude** | **double**| Longitude to search |

### Return type

[**\Swagger\Client\Model\SchoolsV2SchoolWithDistance[]**](../Model/SchoolsV2SchoolWithDistance.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

