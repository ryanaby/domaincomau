# Swagger\Client\AuthoritiesApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authoritiesCreate**](AuthoritiesApi.md#authoritiescreate) | **POST** /v1/authorities | Creates a new authority into the system.
[**authoritiesDownloadAttachments**](AuthoritiesApi.md#authoritiesdownloadattachments) | **GET** /v1/authorities/{id}/attachments | Download a compressed file that contains all files attached to an authority.
[**authoritiesGetById**](AuthoritiesApi.md#authoritiesgetbyid) | **GET** /v1/authorities/{id} | Retrieve a single authority
[**authoritiesSubscribe**](AuthoritiesApi.md#authoritiessubscribe) | **PUT** /v1/authorities/webhooks/subscription | Subscribe to an agency for all its authorities
[**authoritiesUnsubscribe**](AuthoritiesApi.md#authoritiesunsubscribe) | **DELETE** /v1/authorities/webhooks/subscription/{subscriptionId} | Delete a subscription using subscriptionId
[**authoritiesUpdateById**](AuthoritiesApi.md#authoritiesupdatebyid) | **PUT** /v1/authorities/{id} | full update an existing authority.
[**authoritiesUploadAttachment**](AuthoritiesApi.md#authoritiesuploadattachment) | **POST** /v1/authorities/{id}/attachments | Upload multiple files to an authority.
[**authoritiesUploadVendorAttachment**](AuthoritiesApi.md#authoritiesuploadvendorattachment) | **POST** /v1/authorities/{id}/vendors/{vendorId}/attachments | Upload multiple files to be attached to a specific vendor in an authority.

# **authoritiesCreate**
> \Swagger\Client\Model\AuthoritiesV1AuthorityResponse authoritiesCreate($body)

Creates a new authority into the system.

Creates a new authority into the system.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AuthoritiesV1AuthorityRequest(); // \Swagger\Client\Model\AuthoritiesV1AuthorityRequest | Authority information to be created.

try {
    $result = $apiInstance->authoritiesCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthoritiesV1AuthorityRequest**](../Model/AuthoritiesV1AuthorityRequest.md)| Authority information to be created. |

### Return type

[**\Swagger\Client\Model\AuthoritiesV1AuthorityResponse**](../Model/AuthoritiesV1AuthorityResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/vnd.realtimeagent.authorities.v1+json
 - **Accept**: application/vnd.realtimeagent.authorities.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesDownloadAttachments**
> string authoritiesDownloadAttachments($id)

Download a compressed file that contains all files attached to an authority.

Download a compressed file(`.zip`) that contains all files attached to an authority based on the given authority `id`.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->authoritiesDownloadAttachments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesDownloadAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesGetById**
> \Swagger\Client\Model\AuthoritiesV1AuthorityResponse authoritiesGetById($id)

Retrieve a single authority

Retrieve authority details based on the given ID.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->authoritiesGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AuthoritiesV1AuthorityResponse**](../Model/AuthoritiesV1AuthorityResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.realtimeagent.authorities.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesSubscribe**
> \Swagger\Client\Model\AuthoritiesV1SubscriptionResponse authoritiesSubscribe($body)

Subscribe to an agency for all its authorities

Subscribe to an agency to get notified on changes made to the authorities in that agencies scope.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AuthoritiesV1SubscriptionRequest(); // \Swagger\Client\Model\AuthoritiesV1SubscriptionRequest | 

try {
    $result = $apiInstance->authoritiesSubscribe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesSubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthoritiesV1SubscriptionRequest**](../Model/AuthoritiesV1SubscriptionRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\AuthoritiesV1SubscriptionResponse**](../Model/AuthoritiesV1SubscriptionResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesUnsubscribe**
> authoritiesUnsubscribe($subscription_id)

Delete a subscription using subscriptionId

Delete a subscription using subscriptionId.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "subscription_id_example"; // string | 

try {
    $apiInstance->authoritiesUnsubscribe($subscription_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesUnsubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesUpdateById**
> \Swagger\Client\Model\AuthoritiesV1AuthorityResponse authoritiesUpdateById($body, $id)

full update an existing authority.

Executes a full update on an existing authority.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AuthoritiesV1AuthorityResponse(); // \Swagger\Client\Model\AuthoritiesV1AuthorityResponse | Authority information to be updated.
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->authoritiesUpdateById($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesUpdateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthoritiesV1AuthorityResponse**](../Model/AuthoritiesV1AuthorityResponse.md)| Authority information to be updated. |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AuthoritiesV1AuthorityResponse**](../Model/AuthoritiesV1AuthorityResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/vnd.realtimeagent.authorities.v1+json
 - **Accept**: application/vnd.realtimeagent.authorities.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesUploadAttachment**
> \Swagger\Client\Model\AuthoritiesV1Attachments[] authoritiesUploadAttachment($id)

Upload multiple files to an authority.

Upload multiple files to be attached to an authority based on the given `id`.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->authoritiesUploadAttachment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesUploadAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AuthoritiesV1Attachments[]**](../Model/AuthoritiesV1Attachments.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/vnd.realtimeagent.authorities.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authoritiesUploadVendorAttachment**
> \Swagger\Client\Model\AuthoritiesV1VendorAttachments[] authoritiesUploadVendorAttachment($id, $vendor_id)

Upload multiple files to be attached to a specific vendor in an authority.

Upload multiple files to be attached to a specific vendor in an authority.

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

$apiInstance = new Swagger\Client\Api\AuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$vendor_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->authoritiesUploadVendorAttachment($id, $vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthoritiesApi->authoritiesUploadVendorAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **vendor_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AuthoritiesV1VendorAttachments[]**](../Model/AuthoritiesV1VendorAttachments.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/vnd.realtimeagent.authorities.v1+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

