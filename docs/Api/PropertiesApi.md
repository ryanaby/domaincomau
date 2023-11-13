# Swagger\Client\PropertiesApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listingsBypropertyid**](PropertiesApi.md#listingsbypropertyid) | **GET** /v2/properties/{propertyId}/listings | Retrieve list of listings for the given property id
[**propertiesGet**](PropertiesApi.md#propertiesget) | **GET** /v1/properties/{id} | Retrieves a specific property.
[**propertiesGetPriceEstimate**](PropertiesApi.md#propertiesgetpriceestimate) | **GET** /v1/properties/{propertyId}/priceEstimate | Price estimates based on propertyId
[**propertiesGetRentalEstimate**](PropertiesApi.md#propertiesgetrentalestimate) | **GET** /v1/properties/{propertyId}/rentalEstimate | Rental estimates based on propertyId
[**propertiesSuggest**](PropertiesApi.md#propertiessuggest) | **GET** /v1/properties/_suggest | Search for suggested addresses for the given terms
[**propertyReportsGet**](PropertiesApi.md#propertyreportsget) | **GET** /v1/propertyReports | Retrieves a property report based on query parameters
[**propertyenrichmentGet**](PropertiesApi.md#propertyenrichmentget) | **GET** /v1/propertyenrichment | API that supplies property level data and activities across two packages for a specific property

# **listingsBypropertyid**
> \Swagger\Client\Model\ListingsV2Listing[] listingsBypropertyid($property_id, $updated_since, $listed_since, $sale_mode)

Retrieve list of listings for the given property id

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = "property_id_example"; // string | 
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$listed_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$sale_mode = "both"; // string | 

try {
    $result = $apiInstance->listingsBypropertyid($property_id, $updated_since, $listed_since, $sale_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->listingsBypropertyid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  |
 **updated_since** | **\DateTime**|  | [optional]
 **listed_since** | **\DateTime**|  | [optional]
 **sale_mode** | **string**|  | [optional] [default to both]

### Return type

[**\Swagger\Client\Model\ListingsV2Listing[]**](../Model/ListingsV2Listing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesGet**
> \Swagger\Client\Model\PropertiesV1Property propertiesGet($id)

Retrieves a specific property.

Applicable [policies](/docs/latest/support/policies) apply here include APM attribution and appropriate state government attribution.

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Property identifier.  Use the `_suggest` resource to determine the propertyId.

try {
    $result = $apiInstance->propertiesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Property identifier.  Use the &#x60;_suggest&#x60; resource to determine the propertyId. |

### Return type

[**\Swagger\Client\Model\PropertiesV1Property**](../Model/PropertiesV1Property.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesGetPriceEstimate**
> \Swagger\Client\Model\DomainAvmPIV1PropertyPriceEstimate propertiesGetPriceEstimate($property_id)

Price estimates based on propertyId

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = "property_id_example"; // string | 

try {
    $result = $apiInstance->propertiesGetPriceEstimate($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesGetPriceEstimate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DomainAvmPIV1PropertyPriceEstimate**](../Model/DomainAvmPIV1PropertyPriceEstimate.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesGetRentalEstimate**
> \Swagger\Client\Model\DomainAvmPIV1RentalEstimate propertiesGetRentalEstimate($property_id)

Rental estimates based on propertyId

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = "property_id_example"; // string | 

try {
    $result = $apiInstance->propertiesGetRentalEstimate($property_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesGetRentalEstimate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DomainAvmPIV1RentalEstimate**](../Model/DomainAvmPIV1RentalEstimate.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertiesSuggest**
> \Swagger\Client\Model\LocationTypeaheadV1PropertySuggestion[] propertiesSuggest($terms, $page_size, $channel)

Search for suggested addresses for the given terms

Applicable [policies](/docs/latest/support/policies) apply here include APM attribution.

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terms = "terms_example"; // string | The address to search
$page_size = 20; // int | Number of suggestions (maximum 20)
$channel = "0"; // string | Restrict the suggestions to this type of property: `All` (default), `Residential`, `Commercial`

try {
    $result = $apiInstance->propertiesSuggest($terms, $page_size, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertiesSuggest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terms** | **string**| The address to search |
 **page_size** | **int**| Number of suggestions (maximum 20) | [optional] [default to 20]
 **channel** | **string**| Restrict the suggestions to this type of property: &#x60;All&#x60; (default), &#x60;Residential&#x60;, &#x60;Commercial&#x60; | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\LocationTypeaheadV1PropertySuggestion[]**](../Model/LocationTypeaheadV1PropertySuggestion.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyReportsGet**
> \Swagger\Client\Model\DomainPropertyReportServiceV1ModelPropertyReportGenerationResult propertyReportsGet($property_type, $street_number, $street_name, $suburb, $state, $unit_number, $street_type, $postcode, $area_size, $bedrooms, $bathrooms, $parking, $prepared_for, $product_code)

Retrieves a property report based on query parameters

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_type = "property_type_example"; // string | Type of property `House`, `Unit`
$street_number = "street_number_example"; // string | Street number
$street_name = "street_name_example"; // string | Street name
$suburb = "suburb_example"; // string | Suburb e.g. `Pyrmont`
$state = "state_example"; // string | State e.g. `NSW`
$unit_number = "unit_number_example"; // string | Unit number
$street_type = "street_type_example"; // string | Street type e.g. `Pl`
$postcode = "postcode_example"; // string | Postcode e.g. `2009`
$area_size = 56; // int | Area size
$bedrooms = 56; // int | Number of bedrooms
$bathrooms = 56; // int | Number of bathrooms
$parking = 56; // int | Number of parking spots
$prepared_for = "prepared_for_example"; // string | \"Prepared for\" information
$product_code = "product_code_example"; // string | Report product code

try {
    $result = $apiInstance->propertyReportsGet($property_type, $street_number, $street_name, $suburb, $state, $unit_number, $street_type, $postcode, $area_size, $bedrooms, $bathrooms, $parking, $prepared_for, $product_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertyReportsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_type** | **string**| Type of property &#x60;House&#x60;, &#x60;Unit&#x60; |
 **street_number** | **string**| Street number |
 **street_name** | **string**| Street name |
 **suburb** | **string**| Suburb e.g. &#x60;Pyrmont&#x60; |
 **state** | **string**| State e.g. &#x60;NSW&#x60; |
 **unit_number** | **string**| Unit number | [optional]
 **street_type** | **string**| Street type e.g. &#x60;Pl&#x60; | [optional]
 **postcode** | **string**| Postcode e.g. &#x60;2009&#x60; | [optional]
 **area_size** | **int**| Area size | [optional]
 **bedrooms** | **int**| Number of bedrooms | [optional]
 **bathrooms** | **int**| Number of bathrooms | [optional]
 **parking** | **int**| Number of parking spots | [optional]
 **prepared_for** | **string**| \&quot;Prepared for\&quot; information | [optional]
 **product_code** | **string**| Report product code | [optional]

### Return type

[**\Swagger\Client\Model\DomainPropertyReportServiceV1ModelPropertyReportGenerationResult**](../Model/DomainPropertyReportServiceV1ModelPropertyReportGenerationResult.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyenrichmentGet**
> \Swagger\Client\Model\PropertyEnrichmentV1PropertyResults propertyenrichmentGet($property_id, $gnaf_id, $flat_number, $street_number, $street_name, $street_type, $postcode, $suburb_name, $state)

API that supplies property level data and activities across two packages for a specific property

Search for a specific property and provide property information and latest sale/rental activity if found. Supply either propertyId, gnafId, or all address fields (with flatNumber optional)

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

$apiInstance = new Swagger\Client\Api\PropertiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_id = "property_id_example"; // string | 
$gnaf_id = "gnaf_id_example"; // string | 
$flat_number = "flat_number_example"; // string | 
$street_number = "street_number_example"; // string | 
$street_name = "street_name_example"; // string | 
$street_type = "street_type_example"; // string | 
$postcode = "postcode_example"; // string | 
$suburb_name = "suburb_name_example"; // string | 
$state = "state_example"; // string | 

try {
    $result = $apiInstance->propertyenrichmentGet($property_id, $gnaf_id, $flat_number, $street_number, $street_name, $street_type, $postcode, $suburb_name, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertiesApi->propertyenrichmentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_id** | **string**|  | [optional]
 **gnaf_id** | **string**|  | [optional]
 **flat_number** | **string**|  | [optional]
 **street_number** | **string**|  | [optional]
 **street_name** | **string**|  | [optional]
 **street_type** | **string**|  | [optional]
 **postcode** | **string**|  | [optional]
 **suburb_name** | **string**|  | [optional]
 **state** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\PropertyEnrichmentV1PropertyResults**](../Model/PropertyEnrichmentV1PropertyResults.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

