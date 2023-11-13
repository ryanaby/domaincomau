# Swagger\Client\StatisticsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsPost**](StatisticsApi.md#statisticspost) | **POST** /v1/statistics/{event} | Record a statistic event along with its associated metadata (if applicable)
[**suburbPerformanceGetByNamedSuburb**](StatisticsApi.md#suburbperformancegetbynamedsuburb) | **GET** /v2/suburbPerformanceStatistics/{state}/{suburb}/{postcode} | Search for sales statistics in a given geographic level.
[**suburbPerformanceGetByNamedSuburbWithoutPostcode**](StatisticsApi.md#suburbperformancegetbynamedsuburbwithoutpostcode) | **GET** /v2/suburbPerformanceStatistics/{state}/{suburb} | Search for sales statistics in a given geographic level.

# **statisticsPost**
> statisticsPost($body, $event)

Record a statistic event along with its associated metadata (if applicable)

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

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | A JSON object dictionary of the metadata associated with the event.
$event = "event_example"; // string | The event type

try {
    $apiInstance->statisticsPost($body, $event);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)| A JSON object dictionary of the metadata associated with the event. |
 **event** | **string**| The event type |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suburbPerformanceGetByNamedSuburb**
> \Swagger\Client\Model\SuburbPerformanceStatisticsV3SuburbPerformance suburbPerformanceGetByNamedSuburb($state, $suburb, $postcode, $property_category, $bedrooms, $period_size, $starting_period_relative_to_current, $total_periods)

Search for sales statistics in a given geographic level.

- Standard Auction Clearance Rate formula is: `AuctionNumberSold / (AuctionNumberAuctioned + AuctionNumberWithdrawn)`  - The Rate is considered Not Statistic Reliable if: `AuctionNumberAuctioned + AuctionNumberWithdrawn < 10`  - APM Standard Gross Rental Yield formula is: `(MedianRentListingPrice* 52) / MedianSoldPrice`  - The Yield is considered Not Available if: `MedianRentListingPrice is null or MedianSoldPrice is null`

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

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = "state_example"; // string | The Australian state abbreviation
$suburb = "suburb_example"; // string | Suburb name to retrieve data for
$postcode = "postcode_example"; // string | Suburb Post Code, optional, but required for suburbs with official post codes.
$property_category = "house"; // string | Category of sales results to show. Possible values: `House`, `Unit`
$bedrooms = 56; // int | Number of bedrooms to use in the sales search
$period_size = "quarters"; // string | Unit of the measurement period to use
$starting_period_relative_to_current = 1; // int | When to start stats from. 1 = current period, 2 = previous period, etc.
$total_periods = 4; // int | Number of total periods to show statistics for. i.e. 4 Quarters would be 1 full year

try {
    $result = $apiInstance->suburbPerformanceGetByNamedSuburb($state, $suburb, $postcode, $property_category, $bedrooms, $period_size, $starting_period_relative_to_current, $total_periods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->suburbPerformanceGetByNamedSuburb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The Australian state abbreviation |
 **suburb** | **string**| Suburb name to retrieve data for |
 **postcode** | **string**| Suburb Post Code, optional, but required for suburbs with official post codes. |
 **property_category** | **string**| Category of sales results to show. Possible values: &#x60;House&#x60;, &#x60;Unit&#x60; | [optional] [default to house]
 **bedrooms** | **int**| Number of bedrooms to use in the sales search | [optional]
 **period_size** | **string**| Unit of the measurement period to use | [optional] [default to quarters]
 **starting_period_relative_to_current** | **int**| When to start stats from. 1 &#x3D; current period, 2 &#x3D; previous period, etc. | [optional] [default to 1]
 **total_periods** | **int**| Number of total periods to show statistics for. i.e. 4 Quarters would be 1 full year | [optional] [default to 4]

### Return type

[**\Swagger\Client\Model\SuburbPerformanceStatisticsV3SuburbPerformance**](../Model/SuburbPerformanceStatisticsV3SuburbPerformance.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suburbPerformanceGetByNamedSuburbWithoutPostcode**
> \Swagger\Client\Model\SuburbPerformanceStatisticsV3SuburbPerformance suburbPerformanceGetByNamedSuburbWithoutPostcode($state, $suburb, $property_category, $bedrooms, $period_size, $starting_period_relative_to_current, $total_periods)

Search for sales statistics in a given geographic level.

- Standard Auction Clearance Rate formula is: `AuctionNumberSold / (AuctionNumberAuctioned + AuctionNumberWithdrawn)`  - The Rate is considered Not Statistic Reliable if: `AuctionNumberAuctioned + AuctionNumberWithdrawn < 10`  - APM Standard Gross Rental Yield formula is: `(MedianRentListingPrice* 52) / MedianSoldPrice`  - The Yield is considered Not Available if: `MedianRentListingPrice is null or MedianSoldPrice is null`

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

$apiInstance = new Swagger\Client\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = "state_example"; // string | The Australian state abbreviation
$suburb = "suburb_example"; // string | Suburb name to retrieve data for
$property_category = "house"; // string | Category of sales results to show. Possible values: `House`, `Unit`
$bedrooms = 56; // int | Number of bedrooms to use in the sales search
$period_size = "quarters"; // string | Unit of the measurement period to use
$starting_period_relative_to_current = 1; // int | When to start stats from. 1 = current period, 2 = previous period, etc.
$total_periods = 4; // int | Number of total periods to show statistics for. i.e. 4 Quarters would be 1 full year

try {
    $result = $apiInstance->suburbPerformanceGetByNamedSuburbWithoutPostcode($state, $suburb, $property_category, $bedrooms, $period_size, $starting_period_relative_to_current, $total_periods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->suburbPerformanceGetByNamedSuburbWithoutPostcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The Australian state abbreviation |
 **suburb** | **string**| Suburb name to retrieve data for |
 **property_category** | **string**| Category of sales results to show. Possible values: &#x60;House&#x60;, &#x60;Unit&#x60; | [optional] [default to house]
 **bedrooms** | **int**| Number of bedrooms to use in the sales search | [optional]
 **period_size** | **string**| Unit of the measurement period to use | [optional] [default to quarters]
 **starting_period_relative_to_current** | **int**| When to start stats from. 1 &#x3D; current period, 2 &#x3D; previous period, etc. | [optional] [default to 1]
 **total_periods** | **int**| Number of total periods to show statistics for. i.e. 4 Quarters would be 1 full year | [optional] [default to 4]

### Return type

[**\Swagger\Client\Model\SuburbPerformanceStatisticsV3SuburbPerformance**](../Model/SuburbPerformanceStatisticsV3SuburbPerformance.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

