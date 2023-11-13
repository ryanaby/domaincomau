# Swagger\Client\ProjectsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsGet**](ProjectsApi.md#projectsget) | **GET** /v1/projects/{id} | Details of project
[**projectsGetChildListings**](ProjectsApi.md#projectsgetchildlistings) | **GET** /v1/projects/{id}/listings | Project listings
[**projectsGetChildListingsStatistics**](ProjectsApi.md#projectsgetchildlistingsstatistics) | **GET** /v1/projects/{id}/listings/statistics | Retrieves statistics for a specific project with a breakdown for listings.
[**projectsGetEnquiries**](ProjectsApi.md#projectsgetenquiries) | **GET** /v1/projects/{id}/enquiries | Retrieve details of all enquiries received for a specific new development project
[**projectsGetStatistics**](ProjectsApi.md#projectsgetstatistics) | **GET** /v1/projects/{id}/statistics | Retrieves statistics for a specific project.
[**projectsSearch**](ProjectsApi.md#projectssearch) | **GET** /v1/projects | Searches projects

# **projectsGet**
> \Swagger\Client\Model\ListingsV2Project projectsGet($id)

Details of project

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

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the project

try {
    $result = $apiInstance->projectsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the project |

### Return type

[**\Swagger\Client\Model\ListingsV2Project**](../Model/ListingsV2Project.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGetChildListings**
> \Swagger\Client\Model\ListingsV2Listing[] projectsGetChildListings($id)

Project listings

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

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the project

try {
    $result = $apiInstance->projectsGetChildListings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetChildListings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the project |

### Return type

[**\Swagger\Client\Model\ListingsV2Listing[]**](../Model/ListingsV2Listing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGetChildListingsStatistics**
> \Swagger\Client\Model\ListingPerformanceV1ProjectListingStatisticsReport projectsGetChildListingsStatistics($id, $time_period)

Retrieves statistics for a specific project with a breakdown for listings.

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

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | project identifier
$time_period = "last7Days"; // string | Period to report on, Valid values are: `last7Days`, `last90Days`, `wholeCampaign`. Default is `last7Days`.

try {
    $result = $apiInstance->projectsGetChildListingsStatistics($id, $time_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetChildListingsStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| project identifier |
 **time_period** | **string**| Period to report on, Valid values are: &#x60;last7Days&#x60;, &#x60;last90Days&#x60;, &#x60;wholeCampaign&#x60;. Default is &#x60;last7Days&#x60;. | [optional] [default to last7Days]

### Return type

[**\Swagger\Client\Model\ListingPerformanceV1ProjectListingStatisticsReport**](../Model/ListingPerformanceV1ProjectListingStatisticsReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGetEnquiries**
> \Swagger\Client\Model\EnquiriesV1EnquiryReport[] projectsGetEnquiries($id, $page_number)

Retrieve details of all enquiries received for a specific new development project

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

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | New Development Project Id
$page_number = 1; // int | Page number for paginated results (25 per page)

try {
    $result = $apiInstance->projectsGetEnquiries($id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetEnquiries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| New Development Project Id |
 **page_number** | **int**| Page number for paginated results (25 per page) | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\EnquiriesV1EnquiryReport[]**](../Model/EnquiriesV1EnquiryReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsGetStatistics**
> \Swagger\Client\Model\ListingPerformanceV1ProjectStatisticsReport projectsGetStatistics($id, $time_period)

Retrieves statistics for a specific project.

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

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | project identifier
$time_period = "last7Days"; // string | Period to report on, Valid values are: `last7Days`, `last90Days`, `wholeCampaign`. Default is `last7Days`.

try {
    $result = $apiInstance->projectsGetStatistics($id, $time_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGetStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| project identifier |
 **time_period** | **string**| Period to report on, Valid values are: &#x60;last7Days&#x60;, &#x60;last90Days&#x60;, &#x60;wholeCampaign&#x60;. Default is &#x60;last7Days&#x60;. | [optional] [default to last7Days]

### Return type

[**\Swagger\Client\Model\ListingPerformanceV1ProjectStatisticsReport**](../Model/ListingPerformanceV1ProjectStatisticsReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projectsSearch**
> \Swagger\Client\Model\ListingsV2Project[] projectsSearch($agency_id, $page_number, $page_size, $project_status)

Searches projects

Note that the result page size is clamped at 100.  Requesting a page size greater than this will be treated as if only a page size of 100 were requested.

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

$apiInstance = new Swagger\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agency_id = 56; // int | Restricts to the provided agency
$page_number = 1; // int | Page number for paginated results
$page_size = 20; // int | Page size for paginated results
$project_status = "project_status_example"; // string | The set of projects to return, defaults to `live` only

try {
    $result = $apiInstance->projectsSearch($agency_id, $page_number, $page_size, $project_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agency_id** | **int**| Restricts to the provided agency | [optional]
 **page_number** | **int**| Page number for paginated results | [optional] [default to 1]
 **page_size** | **int**| Page size for paginated results | [optional] [default to 20]
 **project_status** | **string**| The set of projects to return, defaults to &#x60;live&#x60; only | [optional]

### Return type

[**\Swagger\Client\Model\ListingsV2Project[]**](../Model/ListingsV2Project.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

