# AuthoritiesV1MarketingCampaignRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advertising** | **string** | advertising cost of this marketing campaign | [optional] 
**campaign_type** | **string** | Available options are: &#x60;To Be Advised&#x60;, &#x60;Paper Based&#x60;, &#x60;Campaign Track&#x60;, &#x60;Realhub&#x60; | 
**marketing_campaign_items** | [**\Swagger\Client\Model\AuthoritiesV1MarketingCampaignItemRequest[]**](AuthoritiesV1MarketingCampaignItemRequest.md) |  | [optional] 
**comments** | **string** |  | [optional] 
**comments_fallback** | **string** |  | [optional] 
**discount_amount** | **string** |  | [optional] 
**discount_percent** | **string** |  | [optional] 
**expense** | **string** | Available options are: &#x60;Signing of this Authority&#x60;, &#x60;Written request&#x60;, &#x60;Specific Date&#x60;, &#x60;Signing of this Form 6&#x60;, &#x60;Signing of this Agency Agreement&#x60;, &#x60;Upon Invoice or Account&#x60;, &#x60;Prior to the commencement of marketing campaign&#x60;, &#x60;On Settlement or Withdrawal whichever occurs first&#x60;, &#x60;Vendor to pay through Campaign Agent v2&#x60;, &#x60;Vendor to pay through Market Now&#x60;, &#x60;Vendor to pay through Rello&#x60;, &#x60;Vendor to pay through List Ready&#x60; | [optional] 
**other** | **string** |  | [optional] 
**payable_on** | [**\DateTime**](\DateTime.md) |  | [optional] 
**total** | **string** | Total cost of this marketing campaign. Total of the items cost if there are items or (advertising + other) cost for other types | [optional] 
**realhub_quote_id** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

