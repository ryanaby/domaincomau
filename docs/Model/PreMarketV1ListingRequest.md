# PreMarketV1ListingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_status** | [**\Swagger\Client\Model\PreMarketV1PrePortalListingStatus**](PreMarketV1PrePortalListingStatus.md) |  | 
**address** | [**\Swagger\Client\Model\PreMarketV1Address**](PreMarketV1Address.md) |  | 
**domain_agency_id** | **int** | The Domain agency ID. Must match an existing Domain agency ID. | 
**listing_provider** | **string** | A string identifying the source of the listing. | 
**provider_ad_id** | **string** | External Advertisement Id of up to 50 characters will be stored.  This value is correlated with actual Domain listing when it is created, and it should be unique for the listing provider.  This value is case-insensitive (meaning AAAA will update aaaa). | 
**contacts** | [**\Swagger\Client\Model\PreMarketV1Contact[]**](PreMarketV1Contact.md) |  | [optional] 
**bedrooms** | **float** | Number of bedrooms divisible by 0.5. | 
**bathrooms** | **float** | Number of bathrooms divisible by 0.5. | 
**carspaces** | **float** | Number of car spaces divisible by 0.5. | 
**summary** | **string** | Headline of the advertisement. Any HTML will be stripped out. | [optional] 
**description** | **string** | Description of the property.  Allow up to 6000 characters in length. The following HTML elements are permitted: &#x60;&#x60;&#x60;&lt;br /&gt;, &lt;p&gt;&lt;/p&gt;, &amp;nbsp;&#x60;&#x60;&#x60; . HTML must be well-formed.  Carriage Returns are interpreted as line breaks. Foreign characters must be HTML encoded, e.g., façade for façade | [optional] 
**authority_executed_date** | [**\DateTime**](\DateTime.md) | The date on which the authority contract was executed.  The date must comply with the ISO 8601 and be in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**reserve_price** | **double** | Vendor reserve price. | [optional] 
**estimated_sale_price** | [**\Swagger\Client\Model\PreMarketV1Price**](PreMarketV1Price.md) |  | 
**property_types** | [**\Swagger\Client\Model\PreMarketV1PropertyType[]**](PreMarketV1PropertyType.md) | The property types (e.g. house, apartment/unit/flat, etc.). | 
**authority_type** | [**\Swagger\Client\Model\PreMarketV1AuthorityType**](PreMarketV1AuthorityType.md) |  | [optional] 
**exclusive_period_days** | **int** | The time (in days) that the agent has exclusive authority to sell the property. | [optional] 
**exclusive_continuing_period_days** | **int** | The time (in days) that exclusive authority has been extended. | [optional] 
**exclusive_period_start_date** | [**\DateTime**](\DateTime.md) | Start date of the exclusivity period.  The date must comply with the ISO 8601 and be in the UTC format, e.g. 2009-06-15T13:45:30.0000000Z. | [optional] 
**statement_of_information** | [**\Swagger\Client\Model\PreMarketV1StatementOfInformation**](PreMarketV1StatementOfInformation.md) |  | [optional] 
**images** | [**\Swagger\Client\Model\PreMarketV1PropertyMedia[]**](PreMarketV1PropertyMedia.md) |  | [optional] 
**metadata** | **map[string,string]** | Optional listing metadata. | [optional] 
**comment** | **string** | Optional listing comment. | [optional] 
**sold_details** | [**\Swagger\Client\Model\PreMarketV1SoldDetails**](PreMarketV1SoldDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

