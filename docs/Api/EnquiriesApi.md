# Swagger\Client\EnquiriesApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enquiriesGet**](EnquiriesApi.md#enquiriesget) | **GET** /v1/enquiries/{id} | Retrieve the details of a specific enquiry
[**enquiriesPost**](EnquiriesApi.md#enquiriespost) | **POST** /v1/enquiries | Sends an enquiry for listing, agency, etc... (based on the enquiry type and referenceid).  Recipients and template will be automatically selected.
[**enquiriesSearch**](EnquiriesApi.md#enquiriessearch) | **GET** /v1/enquiries | Searches enquiries based on agents or agencies.

# **enquiriesGet**
> \Swagger\Client\Model\EnquiriesV1EnquiryReport enquiriesGet($id)

Retrieve the details of a specific enquiry

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

$apiInstance = new Swagger\Client\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of the enquiry

try {
    $result = $apiInstance->enquiriesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the enquiry |

### Return type

[**\Swagger\Client\Model\EnquiriesV1EnquiryReport**](../Model/EnquiriesV1EnquiryReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enquiriesPost**
> \Swagger\Client\Model\DomainEnquiryServiceV1ModelGroupEnquiryServiceModelsEnquiryResponse enquiriesPost($body)

Sends an enquiry for listing, agency, etc... (based on the enquiry type and referenceid).  Recipients and template will be automatically selected.

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

$apiInstance = new Swagger\Client\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1EnquiriesEnquiry(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1EnquiriesEnquiry | The enquiry object

try {
    $result = $apiInstance->enquiriesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1EnquiriesEnquiry**](../Model/DomainPublicAdapterWebApiModelsV1EnquiriesEnquiry.md)| The enquiry object |

### Return type

[**\Swagger\Client\Model\DomainEnquiryServiceV1ModelGroupEnquiryServiceModelsEnquiryResponse**](../Model/DomainEnquiryServiceV1ModelGroupEnquiryServiceModelsEnquiryResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enquiriesPost**
> \Swagger\Client\Model\DomainEnquiryServiceV1ModelGroupEnquiryServiceModelsEnquiryResponse enquiriesPost($delivery_method, $enquiry_type, $reference_id, $id, $sender, $subject, $message, $meta_data)

Sends an enquiry for listing, agency, etc... (based on the enquiry type and referenceid).  Recipients and template will be automatically selected.

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

$apiInstance = new Swagger\Client\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_method = "delivery_method_example"; // string | 
$enquiry_type = "enquiry_type_example"; // string | 
$reference_id = 56; // int | 
$id = "id_example"; // string | 
$sender = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1EnquiriesSender(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1EnquiriesSender | 
$subject = "subject_example"; // string | 
$message = "message_example"; // string | 
$meta_data = array('key' => "meta_data_example"); // map[string,string] | 

try {
    $result = $apiInstance->enquiriesPost($delivery_method, $enquiry_type, $reference_id, $id, $sender, $subject, $message, $meta_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_method** | **string**|  |
 **enquiry_type** | **string**|  |
 **reference_id** | **int**|  |
 **id** | **string**|  |
 **sender** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1EnquiriesSender**](../Model/.md)|  |
 **subject** | **string**|  |
 **message** | **string**|  |
 **meta_data** | [**map[string,string]**](../Model/string.md)|  |

### Return type

[**\Swagger\Client\Model\DomainEnquiryServiceV1ModelGroupEnquiryServiceModelsEnquiryResponse**](../Model/DomainEnquiryServiceV1ModelGroupEnquiryServiceModelsEnquiryResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enquiriesSearch**
> \Swagger\Client\Model\EnquiriesV1EnquiryReport[] enquiriesSearch($agency_id, $agent_id, $from, $to, $page_number)

Searches enquiries based on agents or agencies.

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

$apiInstance = new Swagger\Client\Api\EnquiriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agency_id = 56; // int | Agency identifier
$agent_id = 56; // int | Agent identifier
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Enquiries received from
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Enquiries received up to
$page_number = 1; // int | Page number for paginated results (25 per page)

try {
    $result = $apiInstance->enquiriesSearch($agency_id, $agent_id, $from, $to, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnquiriesApi->enquiriesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agency_id** | **int**| Agency identifier | [optional]
 **agent_id** | **int**| Agent identifier | [optional]
 **from** | **\DateTime**| Enquiries received from | [optional]
 **to** | **\DateTime**| Enquiries received up to | [optional]
 **page_number** | **int**| Page number for paginated results (25 per page) | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\EnquiriesV1EnquiryReport[]**](../Model/EnquiriesV1EnquiryReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

