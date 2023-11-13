# Swagger\Client\DemographicsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**demographicsGetByNamedSuburb**](DemographicsApi.md#demographicsgetbynamedsuburb) | **GET** /v2/demographics/{state}/{suburb}/{postcode} | Search for demographics in a given geographic level.
[**demographicsGetByNamedSuburbWithoutPostcode**](DemographicsApi.md#demographicsgetbynamedsuburbwithoutpostcode) | **GET** /v2/demographics/{state}/{suburb} | Search for demographics in a given geographic level.

# **demographicsGetByNamedSuburb**
> \Swagger\Client\Model\DemographicsV2DemographicsResults demographicsGetByNamedSuburb($state, $suburb, $postcode, $types, $year)

Search for demographics in a given geographic level.

<br>Where available, all available topics and years will be returned if not supplied.  <br>Note that not all suburbs will have data available for all years and topics.

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

$apiInstance = new Swagger\Client\Api\DemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = "state_example"; // string | The Australian state abbreviation
$suburb = "suburb_example"; // string | Suburb name to retrieve data for
$postcode = "postcode_example"; // string | Suburb Post Code, optional, but required for suburbs with official post codes.
$types = "types_example"; // string | Comma separated list of census topics to retrieve demographic data for. Possible values include:              `AgeGroupOfPopulation`, `CountryOfBirth`, `NatureOfOccupancy`,              `Occupation`, `GeographicalPopulation`, `DwellingStructure`,              `EducationAttendance`, `HousingLoanRepayment`, `MaritalStatus`,              `Religion`, `TransportToWork`, `FamilyComposition`,              `HouseholdIncome`, `Rent`, `LabourForceStatus`
$year = 56; // int | Census Year of data to return

try {
    $result = $apiInstance->demographicsGetByNamedSuburb($state, $suburb, $postcode, $types, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DemographicsApi->demographicsGetByNamedSuburb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The Australian state abbreviation |
 **suburb** | **string**| Suburb name to retrieve data for |
 **postcode** | **string**| Suburb Post Code, optional, but required for suburbs with official post codes. |
 **types** | **string**| Comma separated list of census topics to retrieve demographic data for. Possible values include:              &#x60;AgeGroupOfPopulation&#x60;, &#x60;CountryOfBirth&#x60;, &#x60;NatureOfOccupancy&#x60;,              &#x60;Occupation&#x60;, &#x60;GeographicalPopulation&#x60;, &#x60;DwellingStructure&#x60;,              &#x60;EducationAttendance&#x60;, &#x60;HousingLoanRepayment&#x60;, &#x60;MaritalStatus&#x60;,              &#x60;Religion&#x60;, &#x60;TransportToWork&#x60;, &#x60;FamilyComposition&#x60;,              &#x60;HouseholdIncome&#x60;, &#x60;Rent&#x60;, &#x60;LabourForceStatus&#x60; | [optional]
 **year** | **int**| Census Year of data to return | [optional]

### Return type

[**\Swagger\Client\Model\DemographicsV2DemographicsResults**](../Model/DemographicsV2DemographicsResults.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **demographicsGetByNamedSuburbWithoutPostcode**
> \Swagger\Client\Model\DemographicsV2DemographicsResults demographicsGetByNamedSuburbWithoutPostcode($state, $suburb, $types, $year)

Search for demographics in a given geographic level.

<br>Where available, all available topics and years will be returned if not supplied.  <br>Note that not all suburbs will have data available for all years and topics.

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

$apiInstance = new Swagger\Client\Api\DemographicsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = "state_example"; // string | The Australian state abbreviation
$suburb = "suburb_example"; // string | Suburb name to retrieve data for
$types = "types_example"; // string | Comma separated list of census topics to retrieve demographic data for. Possible values include:              `AgeGroupOfPopulation`, `CountryOfBirth`, `NatureOfOccupancy`,              `Occupation`, `GeographicalPopulation`, `DwellingStructure`,              `EducationAttendance`, `HousingLoanRepayment`, `MaritalStatus`,              `Religion`, `TransportToWork`, `FamilyComposition`,              `HouseholdIncome`, `Rent`, `LabourForceStatus`
$year = 56; // int | Census Year of data to return

try {
    $result = $apiInstance->demographicsGetByNamedSuburbWithoutPostcode($state, $suburb, $types, $year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DemographicsApi->demographicsGetByNamedSuburbWithoutPostcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| The Australian state abbreviation |
 **suburb** | **string**| Suburb name to retrieve data for |
 **types** | **string**| Comma separated list of census topics to retrieve demographic data for. Possible values include:              &#x60;AgeGroupOfPopulation&#x60;, &#x60;CountryOfBirth&#x60;, &#x60;NatureOfOccupancy&#x60;,              &#x60;Occupation&#x60;, &#x60;GeographicalPopulation&#x60;, &#x60;DwellingStructure&#x60;,              &#x60;EducationAttendance&#x60;, &#x60;HousingLoanRepayment&#x60;, &#x60;MaritalStatus&#x60;,              &#x60;Religion&#x60;, &#x60;TransportToWork&#x60;, &#x60;FamilyComposition&#x60;,              &#x60;HouseholdIncome&#x60;, &#x60;Rent&#x60;, &#x60;LabourForceStatus&#x60; | [optional]
 **year** | **int**| Census Year of data to return | [optional]

### Return type

[**\Swagger\Client\Model\DemographicsV2DemographicsResults**](../Model/DemographicsV2DemographicsResults.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

