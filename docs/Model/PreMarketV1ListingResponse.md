# PreMarketV1ListingResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Pre-portal listing ID. | 
**listing_status** | [**\Swagger\Client\Model\PreMarketV1PrePortalListingStatus**](PreMarketV1PrePortalListingStatus.md) |  | 
**related_ad_id** | **int** | The Domain Ad Id of the related listing. | [optional] 
**provider_details** | [**\Swagger\Client\Model\PreMarketV1ProviderDetails**](PreMarketV1ProviderDetails.md) |  | [optional] 
**address** | [**\Swagger\Client\Model\PreMarketV1AddressResponse**](PreMarketV1AddressResponse.md) |  | 
**advertiser_identifiers** | [**\Swagger\Client\Model\PreMarketV1AdvertiserIdentifiers**](PreMarketV1AdvertiserIdentifiers.md) |  | [optional] 
**bedrooms** | **float** | Total number of bedrooms in the property. | 
**bathrooms** | **float** | Total number of bathrooms in the property. | 
**carspaces** | **float** | Total number of car spaces in the property. | 
**headline** | **string** | The short description of the property provided by the advertiser. | [optional] 
**description** | **string** | The long description of the property provided by the advertiser. | [optional] 
**authority_executed_date** | [**\DateTime**](\DateTime.md) | The date on which the authority contract was executed.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**reserve_price** | **double** | Vendor reserve price. | [optional] 
**estimated_sale_price** | [**\Swagger\Client\Model\PreMarketV1Price**](PreMarketV1Price.md) |  | 
**property_types** | [**\Swagger\Client\Model\PreMarketV1PropertyType[]**](PreMarketV1PropertyType.md) | The property types (e.g. house, apartment/unit/flat, etc.). | [optional] 
**authority_type** | [**\Swagger\Client\Model\PreMarketV1AuthorityType**](PreMarketV1AuthorityType.md) |  | [optional] 
**exclusive_period_days** | **int** | The time (in days) that the agent has exclusive authority to sell the property. | [optional] 
**exclusive_continuing_period_days** | **int** | The time (in days) that exclusive authority has been extended. | [optional] 
**exclusive_period_start_date** | [**\DateTime**](\DateTime.md) | Start date of the exclusivity period.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**geo_location** | [**\Swagger\Client\Model\PreMarketV1GeoLocation**](PreMarketV1GeoLocation.md) |  | [optional] 
**map_certainty** | **int** | Map certainty of the property location. | [optional] 
**media** | [**\Swagger\Client\Model\PreMarketV1PropertyMedia[]**](PreMarketV1PropertyMedia.md) | The media associated with the property provided by the advertiser. | [optional] 
**property_id** | **string** | The identifier which uniquely identifies the property being advertised.  This may be empty if the Address of property is poorly described. | [optional] 
**statement_of_information** | [**\Swagger\Client\Model\PreMarketV1StatementOfInformation**](PreMarketV1StatementOfInformation.md) |  | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | The date/time the listing was created.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**date_updated** | [**\DateTime**](\DateTime.md) | The date/time the listing was last updated.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**date_pre_market** | [**\DateTime**](\DateTime.md) | The date/time the listing went pre-market.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**date_listed** | [**\DateTime**](\DateTime.md) | The date/time the listing was listed.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**date_sold** | [**\DateTime**](\DateTime.md) | The date/time when the listing status was changed to sold (it is NOT the date/time when the property was sold).  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**date_withdrawn** | [**\DateTime**](\DateTime.md) | The date/time the listing was withdrawn.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**date_drafted** | [**\DateTime**](\DateTime.md) | The date/time the listing was drafted.  The date is compliant with the ISO 8601 and is in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**metadata** | **map[string,string]** | Optional listing metadata. | [optional] 
**comment** | **string** | Optional listing comment. | [optional] 
**sold_details** | [**\Swagger\Client\Model\PreMarketV1SoldDetails**](PreMarketV1SoldDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

