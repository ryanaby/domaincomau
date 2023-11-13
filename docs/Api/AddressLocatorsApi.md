# Swagger\Client\AddressLocatorsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressLocatorsGet**](AddressLocatorsApi.md#addresslocatorsget) | **GET** /v1/addressLocators | Retrieves matching ids for use in other services.

# **addressLocatorsGet**
> \Swagger\Client\Model\AddressLocatorsV1AddressDataModel[] addressLocatorsGet($search_level, $unit_number, $street_number, $street_name, $street_type, $suburb, $state, $postcode)

Retrieves matching ids for use in other services.

Use this endpoint to retrieve IDs that may be used to query information from other endpoints.    For example use `id` of the `Suburb` level to query [`demographics`](/docs/v1/apis/pkg_properties_locations/references/demographics_get)

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

$apiInstance = new Swagger\Client\Api\AddressLocatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_level = "search_level_example"; // string | Requested search level. Valid values are: `Address`, and `Suburb`
$unit_number = "unit_number_example"; // string | Unit number
$street_number = "street_number_example"; // string | Street number
$street_name = "street_name_example"; // string | Street name
$street_type = "street_type_example"; // string | Street type
$suburb = "suburb_example"; // string | Suburb
$state = "state_example"; // string | State
$postcode = "postcode_example"; // string | Postcode

try {
    $result = $apiInstance->addressLocatorsGet($search_level, $unit_number, $street_number, $street_name, $street_type, $suburb, $state, $postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressLocatorsApi->addressLocatorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_level** | **string**| Requested search level. Valid values are: &#x60;Address&#x60;, and &#x60;Suburb&#x60; | [optional]
 **unit_number** | **string**| Unit number | [optional]
 **street_number** | **string**| Street number | [optional]
 **street_name** | **string**| Street name | [optional]
 **street_type** | **string**| Street type | [optional]
 **suburb** | **string**| Suburb | [optional]
 **state** | **string**| State | [optional]
 **postcode** | **string**| Postcode | [optional]

### Return type

[**\Swagger\Client\Model\AddressLocatorsV1AddressDataModel[]**](../Model/AddressLocatorsV1AddressDataModel.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

