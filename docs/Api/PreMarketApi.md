# Swagger\Client\PreMarketApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**preMarketGet**](PreMarketApi.md#premarketget) | **GET** /v2/premarket/listings/{id} | Retrieves a pre-portal listing.
[**preMarketPatch**](PreMarketApi.md#premarketpatch) | **PATCH** /v2/premarket/listings/{id} | Patches a pre-portal listing.
[**preMarketPost**](PreMarketApi.md#premarketpost) | **POST** /v2/premarket/listings | Creates or updates a pre-portal listing.

# **preMarketGet**
> \Swagger\Client\Model\PreMarketV1ListingResponse preMarketGet($id)

Retrieves a pre-portal listing.

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

$apiInstance = new Swagger\Client\Api\PreMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Pre-portal listing ID.

try {
    $result = $apiInstance->preMarketGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreMarketApi->preMarketGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Pre-portal listing ID. |

### Return type

[**\Swagger\Client\Model\PreMarketV1ListingResponse**](../Model/PreMarketV1ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preMarketPatch**
> \Swagger\Client\Model\PreMarketV1ListingRequest preMarketPatch($id, $body)

Patches a pre-portal listing.

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

$apiInstance = new Swagger\Client\Api\PreMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Pre-portal listing ID.
$body = new \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument(); // \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument | ```
Examples:
[
{
	"op": "replace",
	"path": "/bedrooms",
	"value": 3
   },
{
	"op": "replace",
	"path": "/listingStatus",
	"value": "sold"
},
{
	"op": "remove",
	"path": "/StatementOfInformation"
},
{
	"op": "add",
	"path": "/contacts/-",
	"value": {
		"firstName": "lily",
		"lastName": "li",
		"email": "lily.li@domain.com.au",
		"phone": "0411111111",
		"mobile": null,
		"fax": null
	}
}
]
```

try {
    $result = $apiInstance->preMarketPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreMarketApi->preMarketPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Pre-portal listing ID. |
 **body** | [**\Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument**](../Model/PreMarketV1ListingRequestJsonPatchDocument.md)| &#x60;&#x60;&#x60;
Examples:
[
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/bedrooms&quot;,
	&quot;value&quot;: 3
   },
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/listingStatus&quot;,
	&quot;value&quot;: &quot;sold&quot;
},
{
	&quot;op&quot;: &quot;remove&quot;,
	&quot;path&quot;: &quot;/StatementOfInformation&quot;
},
{
	&quot;op&quot;: &quot;add&quot;,
	&quot;path&quot;: &quot;/contacts/-&quot;,
	&quot;value&quot;: {
		&quot;firstName&quot;: &quot;lily&quot;,
		&quot;lastName&quot;: &quot;li&quot;,
		&quot;email&quot;: &quot;lily.li@domain.com.au&quot;,
		&quot;phone&quot;: &quot;0411111111&quot;,
		&quot;mobile&quot;: null,
		&quot;fax&quot;: null
	}
}
]
&#x60;&#x60;&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\PreMarketV1ListingRequest**](../Model/PreMarketV1ListingRequest.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **preMarketPost**
> \Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse preMarketPost($body)

Creates or updates a pre-portal listing.

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

$apiInstance = new Swagger\Client\Api\PreMarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PreMarketV1ListingRequest(); // \Swagger\Client\Model\PreMarketV1ListingRequest | Pre-portal listing request.

try {
    $result = $apiInstance->preMarketPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreMarketApi->preMarketPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PreMarketV1ListingRequest**](../Model/PreMarketV1ListingRequest.md)| Pre-portal listing request. | [optional]

### Return type

[**\Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse**](../Model/PreMarketV1CreateOrUpdateListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

