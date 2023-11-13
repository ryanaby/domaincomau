# Swagger\Client\AgentsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agentsGet**](AgentsApi.md#agentsget) | **GET** /v1/agents/{id} | Retrieves a specific agent details, including contact information.
[**agentsGetListings**](AgentsApi.md#agentsgetlistings) | **GET** /v1/agents/{id}/listings | Gets listing using the contact id
[**agentsGetStatistics**](AgentsApi.md#agentsgetstatistics) | **GET** /v1/agents/{id}/statistics | Retrieves stats for the listings of a given agent
[**agentsSearch**](AgentsApi.md#agentssearch) | **GET** /v1/agents/search | Search for agents by name.

# **agentsGet**
> \Swagger\Client\Model\AgenciesV1Agent agentsGet($id)

Retrieves a specific agent details, including contact information.

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

$apiInstance = new Swagger\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Agent identifier

try {
    $result = $apiInstance->agentsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agent identifier |

### Return type

[**\Swagger\Client\Model\AgenciesV1Agent**](../Model/AgenciesV1Agent.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsGetListings**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsListing[] agentsGetListings($id, $date_updated_since, $included_archived_listings, $page_number, $page_size)

Gets listing using the contact id

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

$apiInstance = new Swagger\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Agent identifier
$date_updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter to remove listings not updated since before the given date time
$included_archived_listings = true; // bool | Filter to remove listings that have been archived
$page_number = 56; // int | Page number for paginated results
$page_size = 56; // int | Page size for paginated results

try {
    $result = $apiInstance->agentsGetListings($id, $date_updated_since, $included_archived_listings, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsGetListings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agent identifier |
 **date_updated_since** | **\DateTime**| Filter to remove listings not updated since before the given date time | [optional]
 **included_archived_listings** | **bool**| Filter to remove listings that have been archived | [optional]
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

# **agentsGetStatistics**
> \Swagger\Client\Model\ListingPerformanceV1Statistics[] agentsGetStatistics($id, $time_period, $status_filter, $channel, $page_number, $page_size)

Retrieves stats for the listings of a given agent

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

$apiInstance = new Swagger\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Agent identifier
$time_period = "last7Days"; // string | The time period to show statistics for. Valid values are: `last7Days`, `last90Days`, `wholeCampaign`
$status_filter = "liveAndArchived"; // string | Listing filter
$channel = "residential"; // string | Filter statistics for the given channel
$page_number = 1; // int | Page number for paginated results
$page_size = 20; // int | Page size for paginated results

try {
    $result = $apiInstance->agentsGetStatistics($id, $time_period, $status_filter, $channel, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsGetStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Agent identifier |
 **time_period** | **string**| The time period to show statistics for. Valid values are: &#x60;last7Days&#x60;, &#x60;last90Days&#x60;, &#x60;wholeCampaign&#x60; | [optional] [default to last7Days]
 **status_filter** | **string**| Listing filter | [optional] [default to liveAndArchived]
 **channel** | **string**| Filter statistics for the given channel | [optional] [default to residential]
 **page_number** | **int**| Page number for paginated results | [optional] [default to 1]
 **page_size** | **int**| Page size for paginated results | [optional] [default to 20]

### Return type

[**\Swagger\Client\Model\ListingPerformanceV1Statistics[]**](../Model/ListingPerformanceV1Statistics.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **agentsSearch**
> \Swagger\Client\Model\DomainAgentSearchV1ModelAutoSuggestAgentResultDto[] agentsSearch($query, $page_number, $page_size)

Search for agents by name.

The returned Agent ID can be used to get an agent details by ID. See `GET /agents/{id}/`

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

$apiInstance = new Swagger\Client\Api\AgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = "query_example"; // string | The name, or portion of name, to search for.
$page_number = 56; // int | Page number for paginated results
$page_size = 56; // int | Page size for paginated results (maximum 20)

try {
    $result = $apiInstance->agentsSearch($query, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgentsApi->agentsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**| The name, or portion of name, to search for. |
 **page_number** | **int**| Page number for paginated results | [optional]
 **page_size** | **int**| Page size for paginated results (maximum 20) | [optional]

### Return type

[**\Swagger\Client\Model\DomainAgentSearchV1ModelAutoSuggestAgentResultDto[]**](../Model/DomainAgentSearchV1ModelAutoSuggestAgentResultDto.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

