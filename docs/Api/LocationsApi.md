# Swagger\Client\LocationsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**locationProfilesGet**](LocationsApi.md#locationprofilesget) | **GET** /v1/locations/profiles/{domainLocationId} | Get location data based on the given domainLocationId

# **locationProfilesGet**
> \Swagger\Client\Model\DomainLocationProfilesServiceV1ModelLocation locationProfilesGet($domain_location_id)

Get location data based on the given domainLocationId

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

$apiInstance = new Swagger\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_location_id = "domain_location_id_example"; // string | 

try {
    $result = $apiInstance->locationProfilesGet($domain_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->locationProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain_location_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DomainLocationProfilesServiceV1ModelLocation**](../Model/DomainLocationProfilesServiceV1ModelLocation.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

