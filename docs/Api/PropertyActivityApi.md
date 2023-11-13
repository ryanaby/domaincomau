# Swagger\Client\PropertyActivityApi

All URIs are relative to *https://api.domain.com.au/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertyActivityAddToPortfolio**](PropertyActivityApi.md#propertyactivityaddtoportfolio) | **POST** /v1/property/activity/portfolio/{PortfolioId} | Add Properties to Portfolio
[**propertyActivityCreatePortfolio**](PropertyActivityApi.md#propertyactivitycreateportfolio) | **POST** /v1/property/activity/portfolio | Create Portfolio
[**propertyActivityDeletePortfolio**](PropertyActivityApi.md#propertyactivitydeleteportfolio) | **DELETE** /v1/property/activity/portfolio/{PortfolioId} | Delete Portfolio
[**propertyActivityListPortfolios**](PropertyActivityApi.md#propertyactivitylistportfolios) | **GET** /v1/property/activity/portfoliosummary | List Portfolios
[**propertyActivityRemoveFromPortfolio**](PropertyActivityApi.md#propertyactivityremovefromportfolio) | **POST** /v1/property/activity/portfolio/{PortfolioId}/property/delete | Remove Properties from Portfolio
[**propertyActivityViewPortfolio**](PropertyActivityApi.md#propertyactivityviewportfolio) | **GET** /v1/property/activity/portfolio/{PortfolioId} | View Properties in Portfolio

# **propertyActivityAddToPortfolio**
> propertyActivityAddToPortfolio($body, $portfolio_id)

Add Properties to Portfolio

Adds properties to a portfolio by property id's and/or gnaf id's

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

$apiInstance = new Swagger\Client\Api\PropertyActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PropertyActivityAPIV1PortfolioDetails(); // \Swagger\Client\Model\PropertyActivityAPIV1PortfolioDetails | 
$portfolio_id = "portfolio_id_example"; // string | 

try {
    $apiInstance->propertyActivityAddToPortfolio($body, $portfolio_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyActivityApi->propertyActivityAddToPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PropertyActivityAPIV1PortfolioDetails**](../Model/PropertyActivityAPIV1PortfolioDetails.md)|  |
 **portfolio_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyActivityCreatePortfolio**
> \Swagger\Client\Model\PropertyActivityAPIV1PortfolioCreated propertyActivityCreatePortfolio($body)

Create Portfolio

Creates a portfolio and returns portfolio id

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

$apiInstance = new Swagger\Client\Api\PropertyActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ActivityPortfolioBody(); // \Swagger\Client\Model\ActivityPortfolioBody | 

try {
    $result = $apiInstance->propertyActivityCreatePortfolio($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyActivityApi->propertyActivityCreatePortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActivityPortfolioBody**](../Model/ActivityPortfolioBody.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyActivityAPIV1PortfolioCreated**](../Model/PropertyActivityAPIV1PortfolioCreated.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyActivityDeletePortfolio**
> propertyActivityDeletePortfolio($portfolio_id)

Delete Portfolio

Deletes a portfolio and all associated properties

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

$apiInstance = new Swagger\Client\Api\PropertyActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$portfolio_id = "portfolio_id_example"; // string | 

try {
    $apiInstance->propertyActivityDeletePortfolio($portfolio_id);
} catch (Exception $e) {
    echo 'Exception when calling PropertyActivityApi->propertyActivityDeletePortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portfolio_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyActivityListPortfolios**
> \Swagger\Client\Model\PropertyActivityAPIV1PortfolioList propertyActivityListPortfolios()

List Portfolios

List all portfolios for the customer with a count of associated property and gnaf id's

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

$apiInstance = new Swagger\Client\Api\PropertyActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->propertyActivityListPortfolios();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyActivityApi->propertyActivityListPortfolios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PropertyActivityAPIV1PortfolioList**](../Model/PropertyActivityAPIV1PortfolioList.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyActivityRemoveFromPortfolio**
> \Swagger\Client\Model\InlineResponse2002 propertyActivityRemoveFromPortfolio($body, $portfolio_id)

Remove Properties from Portfolio

Removes properties from a portfolio by property id's and/or gnaf id's, returning any id's that did not exist within the portfolio

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

$apiInstance = new Swagger\Client\Api\PropertyActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PropertyActivityAPIV1PortfolioDetails(); // \Swagger\Client\Model\PropertyActivityAPIV1PortfolioDetails | 
$portfolio_id = "portfolio_id_example"; // string | 

try {
    $result = $apiInstance->propertyActivityRemoveFromPortfolio($body, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyActivityApi->propertyActivityRemoveFromPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PropertyActivityAPIV1PortfolioDetails**](../Model/PropertyActivityAPIV1PortfolioDetails.md)|  |
 **portfolio_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyActivityViewPortfolio**
> \Swagger\Client\Model\InlineResponse2001 propertyActivityViewPortfolio($portfolio_id)

View Properties in Portfolio

List property and gnaf id's for an existing portfolio

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

$apiInstance = new Swagger\Client\Api\PropertyActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$portfolio_id = "portfolio_id_example"; // string | 

try {
    $result = $apiInstance->propertyActivityViewPortfolio($portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyActivityApi->propertyActivityViewPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portfolio_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apikey](../../README.md#apikey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

