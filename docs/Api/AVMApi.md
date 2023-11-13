# Swagger\Client\AVMApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**avmGetValuation**](AVMApi.md#avmgetvaluation) | **POST** /v1/avm/getvaluation | Creates a bank grade valuation and PDF report for a given property address or GnafPId.

# **avmGetValuation**
> \Swagger\Client\Model\DomainAvmV1Response avmGetValuation($body)

Creates a bank grade valuation and PDF report for a given property address or GnafPId.

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

$apiInstance = new Swagger\Client\Api\AVMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainAvmV1Request(); // \Swagger\Client\Model\DomainAvmV1Request | The request to get the valuation.

try {
    $result = $apiInstance->avmGetValuation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AVMApi->avmGetValuation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainAvmV1Request**](../Model/DomainAvmV1Request.md)| The request to get the valuation. | [optional]

### Return type

[**\Swagger\Client\Model\DomainAvmV1Response**](../Model/DomainAvmV1Response.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

