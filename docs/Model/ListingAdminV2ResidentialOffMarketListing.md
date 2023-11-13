# ListingAdminV2ResidentialOffMarketListing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_provider** | **string** | A string identifying the data provider | [optional] 
**domain_agency_id** | **int** | The Domain Agency ID | 
**provider_ad_id** | **string** | External Advertisement Id of up to 50 characters will be stored.&lt;br /&gt;  This value is used to identify an Advertisement for updates and should be unique for listing provider.&lt;br /&gt;  This value is case-insensitive (meaning AAAA will update aaaa). | 
**description** | **string** | Description of the property.  6000 characters in length. The following HTML elements are permitted: &amp;lt;br /&amp;gt;, &amp;lt;p&amp;gt;&amp;lt;/p&amp;gt;, &amp;amp;nbsp;. HTML must be well-formed.  Carriage Returns are interpreted as line breaks. Foreign characters must be HTML encoded, e.g., façade for façade.  Unicode characters which are unsupported by Latin-1 (ISO-8859-1 range from U+0080 to U+00FF), will be removed https://en.wikipedia.org/wiki/ISO/IEC_8859-1 | [optional] 
**summary** | **string** | &#x27;Headline&#x27; Any HTML stripped out.  If the Summary is less than 80 characters long then the description is concatenated to it and the total trimmed to 250 characters. | [optional] 
**contacts** | [**\Swagger\Client\Model\ListingAdminV2Contact[]**](ListingAdminV2Contact.md) | Minimum required attributes: First name, last name and E-mail.  If the DomainAgentId is provided, contact information will be based on the existing agent found for that id.  Otherwise first name, last name and email will be used to find the matching contact. A new contact will be created if no contact can be found. | [optional] 
**listing_action** | **string** | Sale or Rent | 
**off_market_details** | [**\Swagger\Client\Model\ListingAdminV2OffMarketDetailsBase**](ListingAdminV2OffMarketDetailsBase.md) |  | 
**property_details** | [**\Swagger\Client\Model\ListingAdminV2ResidentialOffMarketProperty**](ListingAdminV2ResidentialOffMarketProperty.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

