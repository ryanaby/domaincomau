# Swagger\Client\ListingsApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listingLocationsSearch**](ListingsApi.md#listinglocationssearch) | **GET** /v1/listings/locations | Suggests listing locations
[**listingsDetailedBusinessSearch**](ListingsApi.md#listingsdetailedbusinesssearch) | **POST** /v1/listings/business/_search | Retrieves business listings matching the specified criteria.
[**listingsDetailedCommercialSearch**](ListingsApi.md#listingsdetailedcommercialsearch) | **POST** /v1/listings/commercial/_search | Retrieves commercial listings matching the specified criteria.
[**listingsDetailedResidentialSearch**](ListingsApi.md#listingsdetailedresidentialsearch) | **POST** /v1/listings/residential/_search | Retrieves residential listings matching the specified criteria.
[**listingsGet**](ListingsApi.md#listingsget) | **GET** /v1/listings/{id} | Retrieve details of listing using the listing id
[**listingsGetEnquiries**](ListingsApi.md#listingsgetenquiries) | **GET** /v1/listings/{id}/enquiries | Retrieve details of all enquiries received for a specific listing
[**listingsGetListingReport**](ListingsApi.md#listingsgetlistingreport) | **GET** /v1/listings/processingReports/{id} | Gets the processing report
[**listingsGetListingReportByReference**](ListingsApi.md#listingsgetlistingreportbyreference) | **GET** /v1/listings/processingReports | Searches processing reports
[**listingsGetListingStatistics**](ListingsApi.md#listingsgetlistingstatistics) | **GET** /v1/listings/{id}/statistics | Retrieve details of listing using the listing id
[**listingsUpsertBusinessListing**](ListingsApi.md#listingsupsertbusinesslisting) | **PUT** /v1/listings/business | Creates or updates a business listing
[**listingsUpsertResidentialListing**](ListingsApi.md#listingsupsertresidentiallisting) | **PUT** /v1/listings/residential | Creates or updates a residential listing
[**listingsUpsertbusinessoffmarket**](ListingsApi.md#listingsupsertbusinessoffmarket) | **POST** /v2/listings/business/offmarket | Creates an externally sold business listing; or takes an existing business listing off the market.
[**listingsUpsertcommerciallisting**](ListingsApi.md#listingsupsertcommerciallisting) | **PUT** /v2/listings/commercial | Creates a commercial listing.
[**listingsUpsertcommercialoffmarket**](ListingsApi.md#listingsupsertcommercialoffmarket) | **POST** /v2/listings/commercial/offmarket | Creates an externally sold or leased commercial listing; or takes an existing commercial listing off the market.
[**listingsUpsertresidentialoffmarket**](ListingsApi.md#listingsupsertresidentialoffmarket) | **POST** /v2/listings/residential/offmarket | Creates an externally sold or leased residential listing; or takes an existing residential listing off the market.

# **listingLocationsSearch**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsListingLocation[] listingLocationsSearch($terms)

Suggests listing locations

The resulting suggested location can be of type \"suburb\" / \"area\" / \"region\".    The `name` property corresponds to the type of location returned.    The area name / region name can be fed into the corresponding fields search fields.  See [`v1/listings/residential/_search`](/docs/v1/apis/pkg_agents_listings/references/listings_detailedresidentialsearch)

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$terms = "terms_example"; // string | Suburb / area / region prefix, or postcode

try {
    $result = $apiInstance->listingLocationsSearch($terms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingLocationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terms** | **string**| Suburb / area / region prefix, or postcode | [optional]

### Return type

[**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsListingLocation[]**](../Model/DomainPublicAdapterWebApiModelsV1ListingsListingLocation.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsDetailedBusinessSearch**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessListing[] listingsDetailedBusinessSearch($body)

Retrieves business listings matching the specified criteria.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessSearchRequest(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessSearchRequest | Search parameters

try {
    $result = $apiInstance->listingsDetailedBusinessSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsDetailedBusinessSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessSearchRequest**](../Model/DomainPublicAdapterWebApiModelsV1ListingsBusinessSearchRequest.md)| Search parameters |

### Return type

[**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessListing[]**](../Model/DomainPublicAdapterWebApiModelsV1ListingsBusinessListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsDetailedBusinessSearch**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessListing[] listingsDetailedBusinessSearch($page_number, $advertiser_id, $property_types, $keywords, $brand_id, $franchise_group_id, $locations, $page_size, $price, $sort, $search_mode)

Retrieves business listings matching the specified criteria.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | 
$advertiser_id = 56; // int | 
$property_types = array("property_types_example"); // string[] | 
$keywords = array("keywords_example"); // string[] | 
$brand_id = 56; // int | 
$franchise_group_id = 56; // int | 
$locations = array(new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessLocationSearch()); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessLocationSearch[] | 
$page_size = 56; // int | 
$price = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessPriceSearch(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessPriceSearch | 
$sort = "sort_example"; // string | 
$search_mode = "search_mode_example"; // string | 

try {
    $result = $apiInstance->listingsDetailedBusinessSearch($page_number, $advertiser_id, $property_types, $keywords, $brand_id, $franchise_group_id, $locations, $page_size, $price, $sort, $search_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsDetailedBusinessSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**|  |
 **advertiser_id** | **int**|  |
 **property_types** | [**string[]**](../Model/string.md)|  |
 **keywords** | [**string[]**](../Model/string.md)|  |
 **brand_id** | **int**|  |
 **franchise_group_id** | **int**|  |
 **locations** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessLocationSearch[]**](../Model/\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessLocationSearch.md)|  |
 **page_size** | **int**|  |
 **price** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessPriceSearch**](../Model/.md)|  |
 **sort** | **string**|  |
 **search_mode** | **string**|  |

### Return type

[**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsBusinessListing[]**](../Model/DomainPublicAdapterWebApiModelsV1ListingsBusinessListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsDetailedCommercialSearch**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialListing[] listingsDetailedCommercialSearch($body)

Retrieves commercial listings matching the specified criteria.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialSearchRequest(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialSearchRequest | Search parameters

try {
    $result = $apiInstance->listingsDetailedCommercialSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsDetailedCommercialSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialSearchRequest**](../Model/DomainPublicAdapterWebApiModelsV1ListingsCommercialSearchRequest.md)| Search parameters |

### Return type

[**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialListing[]**](../Model/DomainPublicAdapterWebApiModelsV1ListingsCommercialListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsDetailedCommercialSearch**
> \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialListing[] listingsDetailedCommercialSearch($page_number, $advertiser_id, $page_size, $property_types, $price, $locations, $keywords, $geo_window, $land_area_min, $land_area_max, $building_size_min, $building_size_max, $search_mode, $occupancy, $sort, $sale_type, $property_title, $parking, $exclusion_types, $annual_return)

Retrieves commercial listings matching the specified criteria.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_number = 56; // int | 
$advertiser_id = 56; // int | 
$page_size = 56; // int | 
$property_types = array("property_types_example"); // string[] | 
$price = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialPriceSearch(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialPriceSearch | 
$locations = array(new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialLocationSearch()); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialLocationSearch[] | 
$keywords = array("keywords_example"); // string[] | 
$geo_window = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialGeoWindow(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialGeoWindow | 
$land_area_min = 56; // int | 
$land_area_max = 56; // int | 
$building_size_min = 56; // int | 
$building_size_max = 56; // int | 
$search_mode = "search_mode_example"; // string | 
$occupancy = "occupancy_example"; // string | 
$sort = "sort_example"; // string | 
$sale_type = "sale_type_example"; // string | 
$property_title = "property_title_example"; // string | 
$parking = new \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialParkingSearch(); // \Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialParkingSearch | 
$exclusion_types = array("exclusion_types_example"); // string[] | 
$annual_return = 56; // int | 

try {
    $result = $apiInstance->listingsDetailedCommercialSearch($page_number, $advertiser_id, $page_size, $property_types, $price, $locations, $keywords, $geo_window, $land_area_min, $land_area_max, $building_size_min, $building_size_max, $search_mode, $occupancy, $sort, $sale_type, $property_title, $parking, $exclusion_types, $annual_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsDetailedCommercialSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_number** | **int**|  |
 **advertiser_id** | **int**|  |
 **page_size** | **int**|  |
 **property_types** | [**string[]**](../Model/string.md)|  |
 **price** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialPriceSearch**](../Model/.md)|  |
 **locations** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialLocationSearch[]**](../Model/\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialLocationSearch.md)|  |
 **keywords** | [**string[]**](../Model/string.md)|  |
 **geo_window** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialGeoWindow**](../Model/.md)|  |
 **land_area_min** | **int**|  |
 **land_area_max** | **int**|  |
 **building_size_min** | **int**|  |
 **building_size_max** | **int**|  |
 **search_mode** | **string**|  |
 **occupancy** | **string**|  |
 **sort** | **string**|  |
 **sale_type** | **string**|  |
 **property_title** | **string**|  |
 **parking** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialParkingSearch**](../Model/.md)|  |
 **exclusion_types** | [**string[]**](../Model/string.md)|  |
 **annual_return** | **int**|  |

### Return type

[**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialListing[]**](../Model/DomainPublicAdapterWebApiModelsV1ListingsCommercialListing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsDetailedResidentialSearch**
> \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SearchResult[] listingsDetailedResidentialSearch($body)

Retrieves residential listings matching the specified criteria.

Search results are limited to the first 1000 results.    If the number of results is greater, the intention is to refine the search by adding more restrictive parameters, to find a relevant set of results.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchParameters(); // \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchParameters | Search parameters

try {
    $result = $apiInstance->listingsDetailedResidentialSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsDetailedResidentialSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchParameters**](../Model/DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchParameters.md)| Search parameters |

### Return type

[**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SearchResult[]**](../Model/DomainSearchServiceV2ModelDomainSearchContractsV2SearchResult.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsDetailedResidentialSearch**
> \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SearchResult[] listingsDetailedResidentialSearch($listing_type, $property_types, $property_features, $listing_attributes, $property_established_type, $min_bedrooms, $max_bedrooms, $min_bathrooms, $max_bathrooms, $min_carspaces, $max_carspaces, $min_price, $max_price, $min_land_area, $max_land_area, $advertiser_ids, $ad_ids, $exclude_ad_ids, $locations, $school_catchments, $location_terms, $keywords, $new_dev_only, $inspection_from, $inspection_to, $auction_from, $auction_to, $date_available_from, $date_available_to, $rural_only, $exclude_price_withheld, $exclude_deposit_taken, $topspot_keywords, $custom_sort, $sort, $page_size, $geo_window, $updated_since, $listed_since, $include_inspection_aggregations, $tags, $page_number)

Retrieves residential listings matching the specified criteria.

Search results are limited to the first 1000 results.    If the number of results is greater, the intention is to refine the search by adding more restrictive parameters, to find a relevant set of results.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_type = "listing_type_example"; // string | 
$property_types = array("property_types_example"); // string[] | 
$property_features = array("property_features_example"); // string[] | 
$listing_attributes = array("listing_attributes_example"); // string[] | 
$property_established_type = "property_established_type_example"; // string | 
$min_bedrooms = 3.4; // float | 
$max_bedrooms = 3.4; // float | 
$min_bathrooms = 3.4; // float | 
$max_bathrooms = 3.4; // float | 
$min_carspaces = 56; // int | 
$max_carspaces = 56; // int | 
$min_price = 56; // int | 
$max_price = 56; // int | 
$min_land_area = 56; // int | 
$max_land_area = 56; // int | 
$advertiser_ids = array(56); // int[] | 
$ad_ids = array(56); // int[] | 
$exclude_ad_ids = array(56); // int[] | 
$locations = array(new \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchLocation()); // \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchLocation[] | 
$school_catchments = array(new \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSchoolCatchment()); // \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSchoolCatchment[] | 
$location_terms = "location_terms_example"; // string | 
$keywords = array("keywords_example"); // string[] | 
$new_dev_only = true; // bool | 
$inspection_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$inspection_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$auction_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$auction_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_available_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$date_available_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$rural_only = true; // bool | 
$exclude_price_withheld = true; // bool | 
$exclude_deposit_taken = true; // bool | 
$topspot_keywords = array("topspot_keywords_example"); // string[] | 
$custom_sort = new \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsCustomSort(); // \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsCustomSort | 
$sort = new \Swagger\Client\Model\DomainSearchServiceV2ModelSystemNullableDomainSearchWebApiV2ModelsSortBy(); // \Swagger\Client\Model\DomainSearchServiceV2ModelSystemNullableDomainSearchWebApiV2ModelsSortBy | 
$page_size = 56; // int | 
$geo_window = new \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsGeoWindow(); // \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsGeoWindow | 
$updated_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$listed_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$include_inspection_aggregations = true; // bool | 
$tags = array(new \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsTagQuery()); // \Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsTagQuery[] | 
$page_number = 56; // int | 

try {
    $result = $apiInstance->listingsDetailedResidentialSearch($listing_type, $property_types, $property_features, $listing_attributes, $property_established_type, $min_bedrooms, $max_bedrooms, $min_bathrooms, $max_bathrooms, $min_carspaces, $max_carspaces, $min_price, $max_price, $min_land_area, $max_land_area, $advertiser_ids, $ad_ids, $exclude_ad_ids, $locations, $school_catchments, $location_terms, $keywords, $new_dev_only, $inspection_from, $inspection_to, $auction_from, $auction_to, $date_available_from, $date_available_to, $rural_only, $exclude_price_withheld, $exclude_deposit_taken, $topspot_keywords, $custom_sort, $sort, $page_size, $geo_window, $updated_since, $listed_since, $include_inspection_aggregations, $tags, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsDetailedResidentialSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_type** | **string**|  |
 **property_types** | [**string[]**](../Model/string.md)|  |
 **property_features** | [**string[]**](../Model/string.md)|  |
 **listing_attributes** | [**string[]**](../Model/string.md)|  |
 **property_established_type** | **string**|  |
 **min_bedrooms** | **float**|  |
 **max_bedrooms** | **float**|  |
 **min_bathrooms** | **float**|  |
 **max_bathrooms** | **float**|  |
 **min_carspaces** | **int**|  |
 **max_carspaces** | **int**|  |
 **min_price** | **int**|  |
 **max_price** | **int**|  |
 **min_land_area** | **int**|  |
 **max_land_area** | **int**|  |
 **advertiser_ids** | [**int[]**](../Model/int.md)|  |
 **ad_ids** | [**int[]**](../Model/int.md)|  |
 **exclude_ad_ids** | [**int[]**](../Model/int.md)|  |
 **locations** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchLocation[]**](../Model/\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSearchLocation.md)|  |
 **school_catchments** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSchoolCatchment[]**](../Model/\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsSchoolCatchment.md)|  |
 **location_terms** | **string**|  |
 **keywords** | [**string[]**](../Model/string.md)|  |
 **new_dev_only** | **bool**|  |
 **inspection_from** | **\DateTime**|  |
 **inspection_to** | **\DateTime**|  |
 **auction_from** | **\DateTime**|  |
 **auction_to** | **\DateTime**|  |
 **date_available_from** | **\DateTime**|  |
 **date_available_to** | **\DateTime**|  |
 **rural_only** | **bool**|  |
 **exclude_price_withheld** | **bool**|  |
 **exclude_deposit_taken** | **bool**|  |
 **topspot_keywords** | [**string[]**](../Model/string.md)|  |
 **custom_sort** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsCustomSort**](../Model/.md)|  |
 **sort** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelSystemNullableDomainSearchWebApiV2ModelsSortBy**](../Model/.md)|  |
 **page_size** | **int**|  |
 **geo_window** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsGeoWindow**](../Model/.md)|  |
 **updated_since** | **\DateTime**|  |
 **listed_since** | **\DateTime**|  |
 **include_inspection_aggregations** | **bool**|  |
 **tags** | [**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsTagQuery[]**](../Model/\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchWebApiV2ModelsTagQuery.md)|  |
 **page_number** | **int**|  |

### Return type

[**\Swagger\Client\Model\DomainSearchServiceV2ModelDomainSearchContractsV2SearchResult[]**](../Model/DomainSearchServiceV2ModelDomainSearchContractsV2SearchResult.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsGet**
> \Swagger\Client\Model\ListingsV1Listing listingsGet($id)

Retrieve details of listing using the listing id

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the listing

try {
    $result = $apiInstance->listingsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the listing |

### Return type

[**\Swagger\Client\Model\ListingsV1Listing**](../Model/ListingsV1Listing.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsGetEnquiries**
> \Swagger\Client\Model\EnquiriesV1EnquiryReport[] listingsGetEnquiries($id, $page_number)

Retrieve details of all enquiries received for a specific listing

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing Id
$page_number = 1; // int | Page number for paginated results (25 per page)

try {
    $result = $apiInstance->listingsGetEnquiries($id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsGetEnquiries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing Id |
 **page_number** | **int**| Page number for paginated results (25 per page) | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\EnquiriesV1EnquiryReport[]**](../Model/EnquiriesV1EnquiryReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsGetListingReport**
> \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingReport listingsGetListingReport($id)

Gets the processing report

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Report id

try {
    $result = $apiInstance->listingsGetListingReport($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsGetListingReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Report id |

### Return type

[**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingReport**](../Model/DomainListingAdminServiceV1ModelListingReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsGetListingReportByReference**
> \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingReport[] listingsGetListingReportByReference($agency_id, $provider_ad_id)

Searches processing reports

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agency_id = 56; // int | Domain agency Id
$provider_ad_id = "provider_ad_id_example"; // string | External provider advertisement identifier

try {
    $result = $apiInstance->listingsGetListingReportByReference($agency_id, $provider_ad_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsGetListingReportByReference: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agency_id** | **int**| Domain agency Id |
 **provider_ad_id** | **string**| External provider advertisement identifier |

### Return type

[**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingReport[]**](../Model/DomainListingAdminServiceV1ModelListingReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsGetListingStatistics**
> \Swagger\Client\Model\ListingPerformanceV1StatisticReport listingsGetListingStatistics($id, $time_period, $channel)

Retrieve details of listing using the listing id

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the listing
$time_period = "last7Days"; // string | The period of time to see the listing performance for (not including today). Defaults to Last7Days
$channel = "channel_example"; // string | Filter statistics for the given channel. Defaults to listing Channel.

try {
    $result = $apiInstance->listingsGetListingStatistics($id, $time_period, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsGetListingStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the listing |
 **time_period** | **string**| The period of time to see the listing performance for (not including today). Defaults to Last7Days | [optional] [default to last7Days]
 **channel** | **string**| Filter statistics for the given channel. Defaults to listing Channel. | [optional]

### Return type

[**\Swagger\Client\Model\ListingPerformanceV1StatisticReport**](../Model/ListingPerformanceV1StatisticReport.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertBusinessListing**
> \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse listingsUpsertBusinessListing($body)

Creates or updates a business listing

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelBusinessListing(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelBusinessListing | The business listing

try {
    $result = $apiInstance->listingsUpsertBusinessListing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertBusinessListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelBusinessListing**](../Model/DomainListingAdminServiceV1ModelBusinessListing.md)| The business listing |

### Return type

[**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse**](../Model/DomainListingAdminServiceV1ModelListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertBusinessListing**
> \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse listingsUpsertBusinessListing($listing_action, $contact_preference, $under_offer_or_contract, $nabers, $property_details, $lease_hold_details, $sale_info, $freehold_commercial_ad_id, $price, $domain_ad_id, $domain_agency_id, $provider_ad_id, $features, $description, $summary, $inspection_details, $media, $contacts, $other_enquiry_email, $receive_emails_to_default_address, $is_rural, $supplementary)

Creates or updates a business listing

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_action = "listing_action_example"; // string | 
$contact_preference = "contact_preference_example"; // string | 
$under_offer_or_contract = true; // bool | 
$nabers = 1.2; // double | 
$property_details = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelBusinessProperty(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelBusinessProperty | 
$lease_hold_details = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelLeaseHoldDetail(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelLeaseHoldDetail | 
$sale_info = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelSaleInfo(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelSaleInfo | 
$freehold_commercial_ad_id = 56; // int | 
$price = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelPrice(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelPrice | 
$domain_ad_id = 56; // int | 
$domain_agency_id = 56; // int | 
$provider_ad_id = "provider_ad_id_example"; // string | 
$features = "features_example"; // string | 
$description = "description_example"; // string | 
$summary = "summary_example"; // string | 
$inspection_details = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelInspectionDetails(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelInspectionDetails | 
$media = array(new \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia()); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[] | 
$contacts = array(new \Swagger\Client\Model\DomainListingAdminServiceV1ModelContact()); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelContact[] | 
$other_enquiry_email = "other_enquiry_email_example"; // string | 
$receive_emails_to_default_address = true; // bool | 
$is_rural = true; // bool | 
$supplementary = array(new \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary()); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary[] | 

try {
    $result = $apiInstance->listingsUpsertBusinessListing($listing_action, $contact_preference, $under_offer_or_contract, $nabers, $property_details, $lease_hold_details, $sale_info, $freehold_commercial_ad_id, $price, $domain_ad_id, $domain_agency_id, $provider_ad_id, $features, $description, $summary, $inspection_details, $media, $contacts, $other_enquiry_email, $receive_emails_to_default_address, $is_rural, $supplementary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertBusinessListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_action** | **string**|  |
 **contact_preference** | **string**|  |
 **under_offer_or_contract** | **bool**|  |
 **nabers** | **double**|  |
 **property_details** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelBusinessProperty**](../Model/.md)|  |
 **lease_hold_details** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelLeaseHoldDetail**](../Model/.md)|  |
 **sale_info** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelSaleInfo**](../Model/.md)|  |
 **freehold_commercial_ad_id** | **int**|  |
 **price** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelPrice**](../Model/.md)|  |
 **domain_ad_id** | **int**|  |
 **domain_agency_id** | **int**|  |
 **provider_ad_id** | **string**|  |
 **features** | **string**|  |
 **description** | **string**|  |
 **summary** | **string**|  |
 **inspection_details** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelInspectionDetails**](../Model/.md)|  |
 **media** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[]**](../Model/\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia.md)|  |
 **contacts** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelContact[]**](../Model/\Swagger\Client\Model\DomainListingAdminServiceV1ModelContact.md)|  |
 **other_enquiry_email** | **string**|  |
 **receive_emails_to_default_address** | **bool**|  |
 **is_rural** | **bool**|  |
 **supplementary** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary[]**](../Model/\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary.md)|  |

### Return type

[**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse**](../Model/DomainListingAdminServiceV1ModelListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertResidentialListing**
> \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse listingsUpsertResidentialListing($body)

Creates or updates a residential listing

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelResidentialListing(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelResidentialListing | The residential listing

try {
    $result = $apiInstance->listingsUpsertResidentialListing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertResidentialListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelResidentialListing**](../Model/DomainListingAdminServiceV1ModelResidentialListing.md)| The residential listing |

### Return type

[**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse**](../Model/DomainListingAdminServiceV1ModelListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertResidentialListing**
> \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse listingsUpsertResidentialListing($life_style_type, $listing_action, $contact_preference, $under_offer_or_contract, $auction, $bond, $available_from, $property_details, $is_new_development, $statement_of_information, $price, $project, $domain_ad_id, $domain_agency_id, $provider_ad_id, $features, $description, $summary, $inspection_details, $media, $contacts, $other_enquiry_email, $receive_emails_to_default_address, $is_rural, $supplementary)

Creates or updates a residential listing

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$life_style_type = "life_style_type_example"; // string | 
$listing_action = "listing_action_example"; // string | 
$contact_preference = "contact_preference_example"; // string | 
$under_offer_or_contract = true; // bool | 
$auction = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelAuction(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelAuction | 
$bond = 56; // int | 
$available_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$property_details = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelResidentialProperty(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelResidentialProperty | 
$is_new_development = true; // bool | 
$statement_of_information = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelStatementOfInformation(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelStatementOfInformation | 
$price = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelPrice(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelPrice | 
$project = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingProject(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingProject | 
$domain_ad_id = 56; // int | 
$domain_agency_id = 56; // int | 
$provider_ad_id = "provider_ad_id_example"; // string | 
$features = "features_example"; // string | 
$description = "description_example"; // string | 
$summary = "summary_example"; // string | 
$inspection_details = new \Swagger\Client\Model\DomainListingAdminServiceV1ModelInspectionDetails(); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelInspectionDetails | 
$media = array(new \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia()); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[] | 
$contacts = array(new \Swagger\Client\Model\DomainListingAdminServiceV1ModelContact()); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelContact[] | 
$other_enquiry_email = "other_enquiry_email_example"; // string | 
$receive_emails_to_default_address = true; // bool | 
$is_rural = true; // bool | 
$supplementary = array(new \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary()); // \Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary[] | 

try {
    $result = $apiInstance->listingsUpsertResidentialListing($life_style_type, $listing_action, $contact_preference, $under_offer_or_contract, $auction, $bond, $available_from, $property_details, $is_new_development, $statement_of_information, $price, $project, $domain_ad_id, $domain_agency_id, $provider_ad_id, $features, $description, $summary, $inspection_details, $media, $contacts, $other_enquiry_email, $receive_emails_to_default_address, $is_rural, $supplementary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertResidentialListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **life_style_type** | **string**|  |
 **listing_action** | **string**|  |
 **contact_preference** | **string**|  |
 **under_offer_or_contract** | **bool**|  |
 **auction** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelAuction**](../Model/.md)|  |
 **bond** | **int**|  |
 **available_from** | **\DateTime**|  |
 **property_details** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelResidentialProperty**](../Model/.md)|  |
 **is_new_development** | **bool**|  |
 **statement_of_information** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelStatementOfInformation**](../Model/.md)|  |
 **price** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelPrice**](../Model/.md)|  |
 **project** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingProject**](../Model/.md)|  |
 **domain_ad_id** | **int**|  |
 **domain_agency_id** | **int**|  |
 **provider_ad_id** | **string**|  |
 **features** | **string**|  |
 **description** | **string**|  |
 **summary** | **string**|  |
 **inspection_details** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelInspectionDetails**](../Model/.md)|  |
 **media** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[]**](../Model/\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia.md)|  |
 **contacts** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelContact[]**](../Model/\Swagger\Client\Model\DomainListingAdminServiceV1ModelContact.md)|  |
 **other_enquiry_email** | **string**|  |
 **receive_emails_to_default_address** | **bool**|  |
 **is_rural** | **bool**|  |
 **supplementary** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary[]**](../Model/\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingSupplementary.md)|  |

### Return type

[**\Swagger\Client\Model\DomainListingAdminServiceV1ModelListingResponse**](../Model/DomainListingAdminServiceV1ModelListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, text/html, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, text/html, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertbusinessoffmarket**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertbusinessoffmarket($body)

Creates an externally sold business listing; or takes an existing business listing off the market.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListingAdminV2BusinessOffMarketListing(); // \Swagger\Client\Model\ListingAdminV2BusinessOffMarketListing | Listing data

try {
    $result = $apiInstance->listingsUpsertbusinessoffmarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertbusinessoffmarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListingAdminV2BusinessOffMarketListing**](../Model/ListingAdminV2BusinessOffMarketListing.md)| Listing data |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertbusinessoffmarket**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertbusinessoffmarket($sale_info, $listing_provider, $domain_agency_id, $provider_ad_id, $description, $summary, $contacts, $listing_action, $off_market_details, $property_details)

Creates an externally sold business listing; or takes an existing business listing off the market.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_info = new \Swagger\Client\Model\ListingAdminV2SaleInfo(); // \Swagger\Client\Model\ListingAdminV2SaleInfo | 
$listing_provider = "listing_provider_example"; // string | 
$domain_agency_id = 56; // int | 
$provider_ad_id = "provider_ad_id_example"; // string | 
$description = "description_example"; // string | 
$summary = "summary_example"; // string | 
$contacts = array(new \Swagger\Client\Model\ListingAdminV2Contact()); // \Swagger\Client\Model\ListingAdminV2Contact[] | 
$listing_action = "listing_action_example"; // string | 
$off_market_details = new \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase(); // \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase | 
$property_details = new \Swagger\Client\Model\ListingAdminV2BusinessOffMarketProperty(); // \Swagger\Client\Model\ListingAdminV2BusinessOffMarketProperty | 

try {
    $result = $apiInstance->listingsUpsertbusinessoffmarket($sale_info, $listing_provider, $domain_agency_id, $provider_ad_id, $description, $summary, $contacts, $listing_action, $off_market_details, $property_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertbusinessoffmarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_info** | [**\Swagger\Client\Model\ListingAdminV2SaleInfo**](../Model/.md)|  |
 **listing_provider** | **string**|  |
 **domain_agency_id** | **int**|  |
 **provider_ad_id** | **string**|  |
 **description** | **string**|  |
 **summary** | **string**|  |
 **contacts** | [**\Swagger\Client\Model\ListingAdminV2Contact[]**](../Model/\Swagger\Client\Model\ListingAdminV2Contact.md)|  |
 **listing_action** | **string**|  |
 **off_market_details** | [**\Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase**](../Model/.md)|  |
 **property_details** | [**\Swagger\Client\Model\ListingAdminV2BusinessOffMarketProperty**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertcommerciallisting**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertcommerciallisting($body)

Creates a commercial listing.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListingAdminV2CommercialListingV2(); // \Swagger\Client\Model\ListingAdminV2CommercialListingV2 | Listing data

try {
    $result = $apiInstance->listingsUpsertcommerciallisting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertcommerciallisting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListingAdminV2CommercialListingV2**](../Model/ListingAdminV2CommercialListingV2.md)| Listing data |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertcommerciallisting**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertcommerciallisting($sale_price, $lease_price, $lease, $eoi, $tenant, $tender, $occupancy_type, $annual_return, $units_offered, $unit_details, $nabers, $sale_terms, $auction, $property_details, $conjunction_agents, $highlights, $under_offer_or_contract, $domain_ad_id, $listing_provider, $domain_agency_id, $provider_ad_id, $features, $description, $summary, $inspection_details, $media, $listing_action, $contact_preference, $contacts, $other_enquiry_email, $receive_emails_to_default_address, $is_rural, $supplementary)

Creates a commercial listing.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_price = new \Swagger\Client\Model\ListingAdminV2CommercialPrice(); // \Swagger\Client\Model\ListingAdminV2CommercialPrice | 
$lease_price = new \Swagger\Client\Model\ListingAdminV2CommercialPrice(); // \Swagger\Client\Model\ListingAdminV2CommercialPrice | 
$lease = new \Swagger\Client\Model\ListingAdminV2Lease(); // \Swagger\Client\Model\ListingAdminV2Lease | 
$eoi = new \Swagger\Client\Model\ListingAdminV2EOI(); // \Swagger\Client\Model\ListingAdminV2EOI | 
$tenant = new \Swagger\Client\Model\ListingAdminV2Tenant(); // \Swagger\Client\Model\ListingAdminV2Tenant | 
$tender = new \Swagger\Client\Model\ListingAdminV2Tender(); // \Swagger\Client\Model\ListingAdminV2Tender | 
$occupancy_type = "occupancy_type_example"; // string | 
$annual_return = 56; // int | 
$units_offered = 56; // int | 
$unit_details = array(new \Swagger\Client\Model\ListingAdminV2SpecificUnitDetail()); // \Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[] | 
$nabers = 1.2; // double | 
$sale_terms = "sale_terms_example"; // string | 
$auction = new \Swagger\Client\Model\ListingAdminV2CommercialAuction(); // \Swagger\Client\Model\ListingAdminV2CommercialAuction | 
$property_details = new \Swagger\Client\Model\ListingAdminV2CommercialProperty(); // \Swagger\Client\Model\ListingAdminV2CommercialProperty | 
$conjunction_agents = array(new \Swagger\Client\Model\ListingAdminV2AgentContact()); // \Swagger\Client\Model\ListingAdminV2AgentContact[] | 
$highlights = array("highlights_example"); // string[] | 
$under_offer_or_contract = true; // bool | 
$domain_ad_id = 56; // int | 
$listing_provider = "listing_provider_example"; // string | 
$domain_agency_id = 56; // int | 
$provider_ad_id = "provider_ad_id_example"; // string | 
$features = "features_example"; // string | 
$description = "description_example"; // string | 
$summary = "summary_example"; // string | 
$inspection_details = new \Swagger\Client\Model\ListingAdminV2InspectionDetails(); // \Swagger\Client\Model\ListingAdminV2InspectionDetails | 
$media = array(new \Swagger\Client\Model\ListingAdminV2PropertyMedia()); // \Swagger\Client\Model\ListingAdminV2PropertyMedia[] | 
$listing_action = "listing_action_example"; // string | 
$contact_preference = "contact_preference_example"; // string | 
$contacts = array(new \Swagger\Client\Model\ListingAdminV2Contact()); // \Swagger\Client\Model\ListingAdminV2Contact[] | 
$other_enquiry_email = "other_enquiry_email_example"; // string | 
$receive_emails_to_default_address = true; // bool | 
$is_rural = true; // bool | 
$supplementary = array(new \Swagger\Client\Model\ListingAdminV2ListingSupplementary()); // \Swagger\Client\Model\ListingAdminV2ListingSupplementary[] | 

try {
    $result = $apiInstance->listingsUpsertcommerciallisting($sale_price, $lease_price, $lease, $eoi, $tenant, $tender, $occupancy_type, $annual_return, $units_offered, $unit_details, $nabers, $sale_terms, $auction, $property_details, $conjunction_agents, $highlights, $under_offer_or_contract, $domain_ad_id, $listing_provider, $domain_agency_id, $provider_ad_id, $features, $description, $summary, $inspection_details, $media, $listing_action, $contact_preference, $contacts, $other_enquiry_email, $receive_emails_to_default_address, $is_rural, $supplementary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertcommerciallisting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_price** | [**\Swagger\Client\Model\ListingAdminV2CommercialPrice**](../Model/.md)|  |
 **lease_price** | [**\Swagger\Client\Model\ListingAdminV2CommercialPrice**](../Model/.md)|  |
 **lease** | [**\Swagger\Client\Model\ListingAdminV2Lease**](../Model/.md)|  |
 **eoi** | [**\Swagger\Client\Model\ListingAdminV2EOI**](../Model/.md)|  |
 **tenant** | [**\Swagger\Client\Model\ListingAdminV2Tenant**](../Model/.md)|  |
 **tender** | [**\Swagger\Client\Model\ListingAdminV2Tender**](../Model/.md)|  |
 **occupancy_type** | **string**|  |
 **annual_return** | **int**|  |
 **units_offered** | **int**|  |
 **unit_details** | [**\Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[]**](../Model/\Swagger\Client\Model\ListingAdminV2SpecificUnitDetail.md)|  |
 **nabers** | **double**|  |
 **sale_terms** | **string**|  |
 **auction** | [**\Swagger\Client\Model\ListingAdminV2CommercialAuction**](../Model/.md)|  |
 **property_details** | [**\Swagger\Client\Model\ListingAdminV2CommercialProperty**](../Model/.md)|  |
 **conjunction_agents** | [**\Swagger\Client\Model\ListingAdminV2AgentContact[]**](../Model/\Swagger\Client\Model\ListingAdminV2AgentContact.md)|  |
 **highlights** | [**string[]**](../Model/string.md)|  |
 **under_offer_or_contract** | **bool**|  |
 **domain_ad_id** | **int**|  |
 **listing_provider** | **string**|  |
 **domain_agency_id** | **int**|  |
 **provider_ad_id** | **string**|  |
 **features** | **string**|  |
 **description** | **string**|  |
 **summary** | **string**|  |
 **inspection_details** | [**\Swagger\Client\Model\ListingAdminV2InspectionDetails**](../Model/.md)|  |
 **media** | [**\Swagger\Client\Model\ListingAdminV2PropertyMedia[]**](../Model/\Swagger\Client\Model\ListingAdminV2PropertyMedia.md)|  |
 **listing_action** | **string**|  |
 **contact_preference** | **string**|  |
 **contacts** | [**\Swagger\Client\Model\ListingAdminV2Contact[]**](../Model/\Swagger\Client\Model\ListingAdminV2Contact.md)|  |
 **other_enquiry_email** | **string**|  |
 **receive_emails_to_default_address** | **bool**|  |
 **is_rural** | **bool**|  |
 **supplementary** | [**\Swagger\Client\Model\ListingAdminV2ListingSupplementary[]**](../Model/\Swagger\Client\Model\ListingAdminV2ListingSupplementary.md)|  |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertcommercialoffmarket**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertcommercialoffmarket($body)

Creates an externally sold or leased commercial listing; or takes an existing commercial listing off the market.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListingAdminV2CommercialOffMarketListing(); // \Swagger\Client\Model\ListingAdminV2CommercialOffMarketListing | Listing data

try {
    $result = $apiInstance->listingsUpsertcommercialoffmarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertcommercialoffmarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListingAdminV2CommercialOffMarketListing**](../Model/ListingAdminV2CommercialOffMarketListing.md)| Listing data |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertcommercialoffmarket**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertcommercialoffmarket($units_offered, $unit_details, $annual_return, $nabers, $highlights, $listing_provider, $domain_agency_id, $provider_ad_id, $description, $summary, $contacts, $listing_action, $off_market_details, $property_details)

Creates an externally sold or leased commercial listing; or takes an existing commercial listing off the market.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$units_offered = 56; // int | 
$unit_details = array(new \Swagger\Client\Model\ListingAdminV2SpecificUnitDetail()); // \Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[] | 
$annual_return = 56; // int | 
$nabers = 1.2; // double | 
$highlights = array("highlights_example"); // string[] | 
$listing_provider = "listing_provider_example"; // string | 
$domain_agency_id = 56; // int | 
$provider_ad_id = "provider_ad_id_example"; // string | 
$description = "description_example"; // string | 
$summary = "summary_example"; // string | 
$contacts = array(new \Swagger\Client\Model\ListingAdminV2Contact()); // \Swagger\Client\Model\ListingAdminV2Contact[] | 
$listing_action = "listing_action_example"; // string | 
$off_market_details = new \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase(); // \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase | 
$property_details = new \Swagger\Client\Model\ListingAdminV2CommercialOffMarketProperty(); // \Swagger\Client\Model\ListingAdminV2CommercialOffMarketProperty | 

try {
    $result = $apiInstance->listingsUpsertcommercialoffmarket($units_offered, $unit_details, $annual_return, $nabers, $highlights, $listing_provider, $domain_agency_id, $provider_ad_id, $description, $summary, $contacts, $listing_action, $off_market_details, $property_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertcommercialoffmarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **units_offered** | **int**|  |
 **unit_details** | [**\Swagger\Client\Model\ListingAdminV2SpecificUnitDetail[]**](../Model/\Swagger\Client\Model\ListingAdminV2SpecificUnitDetail.md)|  |
 **annual_return** | **int**|  |
 **nabers** | **double**|  |
 **highlights** | [**string[]**](../Model/string.md)|  |
 **listing_provider** | **string**|  |
 **domain_agency_id** | **int**|  |
 **provider_ad_id** | **string**|  |
 **description** | **string**|  |
 **summary** | **string**|  |
 **contacts** | [**\Swagger\Client\Model\ListingAdminV2Contact[]**](../Model/\Swagger\Client\Model\ListingAdminV2Contact.md)|  |
 **listing_action** | **string**|  |
 **off_market_details** | [**\Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase**](../Model/.md)|  |
 **property_details** | [**\Swagger\Client\Model\ListingAdminV2CommercialOffMarketProperty**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertresidentialoffmarket**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertresidentialoffmarket($body)

Creates an externally sold or leased residential listing; or takes an existing residential listing off the market.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ListingAdminV2ResidentialOffMarketListing(); // \Swagger\Client\Model\ListingAdminV2ResidentialOffMarketListing | Listing data

try {
    $result = $apiInstance->listingsUpsertresidentialoffmarket($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertresidentialoffmarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ListingAdminV2ResidentialOffMarketListing**](../Model/ListingAdminV2ResidentialOffMarketListing.md)| Listing data |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingsUpsertresidentialoffmarket**
> \Swagger\Client\Model\ListingAdminV2ListingResponse listingsUpsertresidentialoffmarket($listing_provider, $domain_agency_id, $provider_ad_id, $description, $summary, $contacts, $listing_action, $off_market_details, $property_details)

Creates an externally sold or leased residential listing; or takes an existing residential listing off the market.

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

$apiInstance = new Swagger\Client\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_provider = "listing_provider_example"; // string | 
$domain_agency_id = 56; // int | 
$provider_ad_id = "provider_ad_id_example"; // string | 
$description = "description_example"; // string | 
$summary = "summary_example"; // string | 
$contacts = array(new \Swagger\Client\Model\ListingAdminV2Contact()); // \Swagger\Client\Model\ListingAdminV2Contact[] | 
$listing_action = "listing_action_example"; // string | 
$off_market_details = new \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase(); // \Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase | 
$property_details = new \Swagger\Client\Model\ListingAdminV2ResidentialOffMarketProperty(); // \Swagger\Client\Model\ListingAdminV2ResidentialOffMarketProperty | 

try {
    $result = $apiInstance->listingsUpsertresidentialoffmarket($listing_provider, $domain_agency_id, $provider_ad_id, $description, $summary, $contacts, $listing_action, $off_market_details, $property_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->listingsUpsertresidentialoffmarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_provider** | **string**|  |
 **domain_agency_id** | **int**|  |
 **provider_ad_id** | **string**|  |
 **description** | **string**|  |
 **summary** | **string**|  |
 **contacts** | [**\Swagger\Client\Model\ListingAdminV2Contact[]**](../Model/\Swagger\Client\Model\ListingAdminV2Contact.md)|  |
 **listing_action** | **string**|  |
 **off_market_details** | [**\Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase**](../Model/.md)|  |
 **property_details** | [**\Swagger\Client\Model\ListingAdminV2ResidentialOffMarketProperty**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\ListingAdminV2ListingResponse**](../Model/ListingAdminV2ListingResponse.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

