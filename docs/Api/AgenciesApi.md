# Swagger\Client\AgenciesApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agenciesCreateTestAgency**](AgenciesApi.md#agenciescreatetestagency) | **POST** /v1/agencies/_testAgency | Create a test agency for sandbox testing
[**agenciesGet**](AgenciesApi.md#agenciesget) | **GET** /v1/agencies/{id} | Retrieves a specific agency details.
[**agenciesGetListings**](AgenciesApi.md#agenciesgetlistings) | **GET** /v1/agencies/{id}/listings | Retrieves listings across all channels for a specific agency matching specified criteria.
[**agenciesGetStatistics**](AgenciesApi.md#agenciesgetstatistics) | **GET** /v1/agencies/{id}/statistics | Retrieves statistics for a specific agency.
[**agenciesHead**](AgenciesApi.md#agencieshead) | **HEAD** /v1/agencies | Retrieves summary of agency search.
[**agenciesSearch**](AgenciesApi.md#agenciessearch) | **GET** /v1/agencies | Retrieves summary of agencies matching the specified criteria.

# **agenciesCreateTestAgency**
> \Swagger\Client\Model\AgenciesV2Agency agenciesCreateTestAgency()

Create a test agency for sandbox testing

Enables automatic creation of a test agency in our sandbox environment.

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

$apiInstance = new Swagger\Client\Api\AgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->agenciesCreateTestAgency();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgenciesApi->agenciesCreateTestAgency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AgenciesV2Agency**](../Model/AgenciesV2Agency.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agenciesGet**
> \Swagger\Client\Model\AgenciesV2Agency agenciesGet($id)

Retrieves a specific agency details.

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

$apiInstance = new Swagger\Client\Api\AgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Agency identifier

try {
    $result = $apiInstance->agenciesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgenciesApi->agenciesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agency identifier |

### Return type

[**\Swagger\Client\Model\AgenciesV2Agency**](../Model/AgenciesV2Agency.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agenciesGetListings**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsListing[] agenciesGetListings($id, $listing_status_filter, $date_updated_since, $page_number, $page_size)

Retrieves listings across all channels for a specific agency matching specified criteria.

Note that the result page size is clamped at 200.  Requesting a page size greater than this will be treated as if only a page size of 200 were requested.

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

$apiInstance = new Swagger\Client\Api\AgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Agency identifier
$listing_status_filter = "listing_status_filter_example"; // string | Filter for listing status
$date_updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter to remove listings not updated since before the given date time
$page_number = 56; // int | Page number for paginated results
$page_size = 56; // int | Page size for paginated results

try {
    $result = $apiInstance->agenciesGetListings($id, $listing_status_filter, $date_updated_since, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgenciesApi->agenciesGetListings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agency identifier |
 **listing_status_filter** | **string**| Filter for listing status | [optional]
 **date_updated_since** | **\DateTime**| Filter to remove listings not updated since before the given date time | [optional]
 **page_number** | **int**| Page number for paginated results | [optional]
 **page_size** | **int**| Page size for paginated results | [optional]

### Return type

[**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsListing[]**](../Model/DomainPublicAdapterWebApiModelsV1ListingsListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agenciesGetStatistics**
> \Swagger\Client\Model\ListingPerformanceV1Statistics[] agenciesGetStatistics($id, $time_period, $status_filter, $channel, $page_number, $page_size)

Retrieves statistics for a specific agency.

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

$apiInstance = new Swagger\Client\Api\AgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Agency identifier
$time_period = "last7Days"; // string | Period to report on, Valid values are: `last7Days`, `last90Days`, `wholeCampaign`. Default is `last7Days`.
$status_filter = "liveAndArchived"; // string | Status to filter, Valid values are: `Live`, `LiveAndArchived`. Default is `LiveAndArchived`
$channel = "residential"; // string | Filter statistics for the given channel
$page_number = 1; // int | Page number
$page_size = 20; // int | Page size

try {
    $result = $apiInstance->agenciesGetStatistics($id, $time_period, $status_filter, $channel, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgenciesApi->agenciesGetStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agency identifier |
 **time_period** | **string**| Period to report on, Valid values are: &#x60;last7Days&#x60;, &#x60;last90Days&#x60;, &#x60;wholeCampaign&#x60;. Default is &#x60;last7Days&#x60;. | [optional] [default to last7Days]
 **status_filter** | **string**| Status to filter, Valid values are: &#x60;Live&#x60;, &#x60;LiveAndArchived&#x60;. Default is &#x60;LiveAndArchived&#x60; | [optional] [default to liveAndArchived]
 **channel** | **string**| Filter statistics for the given channel | [optional] [default to residential]
 **page_number** | **int**| Page number | [optional] [default to 1]
 **page_size** | **int**| Page size | [optional] [default to 20]

### Return type

[**\Swagger\Client\Model\ListingPerformanceV1Statistics[]**](../Model/ListingPerformanceV1Statistics.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agenciesHead**
> agenciesHead($q, $page_number, $page_size)

Retrieves summary of agency search.

Given a specified agency search criteria, this endpoint can be used to ascertain the result count that can be expected.    See `X-Total-Count` header for result count.

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

$apiInstance = new Swagger\Client\Api\AgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Search phrase.  e.g. name:\"Agency XYZ\"
$page_number = 1; // int | Page number for paginated results
$page_size = 20; // int | Page size for paginated results

try {
    $apiInstance->agenciesHead($q, $page_number, $page_size);
} catch (Exception $e) {
    echo 'Exception when calling AgenciesApi->agenciesHead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Search phrase.  e.g. name:\&quot;Agency XYZ\&quot; | [optional]
 **page_number** | **int**| Page number for paginated results | [optional] [default to 1]
 **page_size** | **int**| Page size for paginated results | [optional] [default to 20]

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agenciesSearch**
> \Swagger\Client\Model\AgenciesV2AgencySummary[] agenciesSearch($q, $page_number, $page_size)

Retrieves summary of agencies matching the specified criteria.

<br>The ```q``` parameter supports:  <ul>    <li>name: search by name eg. ```name:\"Agency XYZ\"```</li>    <li>providerId: search by providerId. eg. ```providerId:\"ABC Software\"```</li>    <li>domainUrl: search by domainUrl. eg. ```domainUrl:\"agency-xyz\"```</li>    <li>dateUpdated: search by dateUpdated. eg. ```dateUpdated:\"2016-12-25\"```</li>    <li>suburbId: search by suburbId. Lists supported.  eg. ```suburbId:1``` eg. ```suburbId:(1 OR 2 OR 3)```.  Can include related suburbs by adding ```in:related```</li>    <li>accountType: search by account type. Lists supported.  eg. ```accountType:residential``` eg. ```accountType:(residential OR commercial)``` Valid values are: none, residential, commerciallight, commercialfull, developer, holiday, business</li>    <li>      ```in:all``` includes archived agencies (archived agencies excluded by default)</li>    <li>      ```-is:selfservice``` excludes selfservice</li>  </ul>

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

$apiInstance = new Swagger\Client\Api\AgenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Search phrase.  e.g. name:\"Agency XYZ\"
$page_number = 1; // int | Page number for paginated results
$page_size = 20; // int | Page size for paginated results

try {
    $result = $apiInstance->agenciesSearch($q, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgenciesApi->agenciesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Search phrase.  e.g. name:\&quot;Agency XYZ\&quot; | [optional]
 **page_number** | **int**| Page number for paginated results | [optional] [default to 1]
 **page_size** | **int**| Page size for paginated results | [optional] [default to 20]

### Return type

[**\Swagger\Client\Model\AgenciesV2AgencySummary[]**](../Model/AgenciesV2AgencySummary.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

