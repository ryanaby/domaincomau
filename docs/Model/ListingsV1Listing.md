# ListingsV1Listing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**objective** | **string** | Gets or Sets Objective | [optional] 
**status** | **string** | Gets or Sets Status | [optional] 
**sale_mode** | **string** | Gets or Sets SaleMode | [optional] 
**channel** | **string** | Gets or Sets Channel | [optional] 
**id** | **int** | The identifier which uniquely identifies the listing. | 
**address_parts** | [**\Swagger\Client\Model\ListingsV1AddressParts**](ListingsV1AddressParts.md) |  | [optional] 
**advertiser_identifiers** | [**\Swagger\Client\Model\ListingsV1AdvertiserIdentifiers**](ListingsV1AdvertiserIdentifiers.md) |  | 
**apm_identifiers** | [**\Swagger\Client\Model\ListingsV1AustralianPropertyMonitorsIdentifiers**](ListingsV1AustralianPropertyMonitorsIdentifiers.md) |  | [optional] 
**bathrooms** | **float** | Total number of bathrooms in the property | [optional] 
**bedrooms** | **float** | Total number of bedrooms in the property; Studio apartments have a value of \\\&quot;0\\\&quot; | [optional] 
**building_area** | **string** | The building area display value of the property e.g. 160 ha | [optional] 
**building_area_sqm** | **double** | The properties building area in square meters | [optional] 
**carspaces** | **float** | Total number of car spaces in the property. | [optional] 
**date_available** | [**\DateTime**](\DateTime.md) | The date the property is available. DateTime is in a local timezone. | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | The date/time the listing was created. DateTime is in AEST (Australian Eastern Standard Time) or AEDT (Australian Eastern Daylight Time) timezone. | [optional] 
**date_updated** | [**\DateTime**](\DateTime.md) | The date/time the listing had major update. DateTime is in AEST (Australian Eastern Standard Time) or AEDT (Australian Eastern Daylight Time) timezone. | [optional] 
**date_minor_updated** | [**\DateTime**](\DateTime.md) | When minor update applied to the listing. DateTime is in AEST (Australian Eastern Standard Time) or AEDT (Australian Eastern Daylight Time) timezone. | [optional] 
**date_purged** | [**\DateTime**](\DateTime.md) | The date/time the listing was purged. It&#x27;s only returned for archived listings. DateTime is in AEST (Australian Eastern Standard Time) or AEDT (Australian Eastern Daylight Time) timezone. | [optional] 
**date_listed** | [**\DateTime**](\DateTime.md) | The date/time last listed. DateTime is in AEST (Australian Eastern Standard Time) or AEDT (Australian Eastern Daylight Time) timezone. | [optional] 
**description** | **string** | The long description of the property provided by the advertiser. | [optional] 
**dev_project_id** | **int** | The ID of the development project - null if no associated project | [optional] 
**energy_efficiency_rating** | **int** | Energy Efficiency Rating value for ACT properties | [optional] 
**features** | **string[]** | The property features specified by the advertiser | [optional] 
**geo_location** | [**\Swagger\Client\Model\ListingsV1GeoLocation**](ListingsV1GeoLocation.md) |  | [optional] 
**headline** | **string** | The short description of the property provided by the advertiser. | [optional] 
**inspection_details** | [**\Swagger\Client\Model\ListingsV1PropertyInspections**](ListingsV1PropertyInspections.md) |  | [optional] 
**is_new_development** | **bool** | Indicates whether the property is a new development | [optional] 
**land_area** | **string** | The land area display string for the property e.g. 160 sqm | [optional] 
**land_area_sqm** | **double** | The properties land area in square meters | [optional] 
**media** | [**\Swagger\Client\Model\ListingsV1ListingMedia[]**](ListingsV1ListingMedia.md) | The media associated with the property provided by the advertiser | [optional] 
**price_details** | [**\Swagger\Client\Model\ListingsV1PriceDetails**](ListingsV1PriceDetails.md) |  | [optional] 
**property_id** | **string** | The identifier which uniquely identifies the property being advertised.  This may be empty if the Address of property is poorly described | [optional] 
**property_types** | **string[]** | Types of the property | 
**provider_details** | [**\Swagger\Client\Model\ListingsV1ProviderDetails**](ListingsV1ProviderDetails.md) |  | [optional] 
**rental_details** | [**\Swagger\Client\Model\ListingsV1RentalDetails**](ListingsV1RentalDetails.md) |  | [optional] 
**sale_details** | [**\Swagger\Client\Model\ListingsV1SaleDetails**](ListingsV1SaleDetails.md) |  | [optional] 
**is_withdrawn** | **bool** | Indicates if the property has been withdrawn from the market  The value will be &#x27;true&#x27; When a listing is taken off market without being sold or leased. | [optional] 
**seo_url** | **string** | Listing SEO URL | [optional] 
**virtual_tour_url** | **string** | The Listing&#x27;s Virtual Tour URL. | [optional] 
**homepass_enabled** | **bool** | If Homepass is enabled for the listing (agency) | [optional] 
**statement_of_information** | [**\Swagger\Client\Model\ListingsV1StatementOfInformation**](ListingsV1StatementOfInformation.md) |  | [optional] 
**number_of_dwellings** | **int** | Number of dwellings for current listing | [optional] 
**highlights** | **string[]** | Highlight items for the listing | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

