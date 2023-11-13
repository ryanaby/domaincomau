# AuthoritiesV1AuthorityRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**address** | [**\Swagger\Client\Model\AuthoritiesV1Address**](AuthoritiesV1Address.md) |  | 
**marketing_campaigns** | [**\Swagger\Client\Model\AuthoritiesV1MarketingCampaignRequest[]**](AuthoritiesV1MarketingCampaignRequest.md) |  | [optional] 
**vendors** | [**\Swagger\Client\Model\AuthoritiesV1VendorRequest[]**](AuthoritiesV1VendorRequest.md) |  | [optional] 
**agents** | [**\Swagger\Client\Model\AuthoritiesV1AgentRequest[]**](AuthoritiesV1AgentRequest.md) |  | [optional] 
**bathrooms** | **int** |  | 
**bedrooms** | **int** |  | 
**parking** | **int** |  | 
**property_type** | **string** | Available options are: &#x60;ApartmentUnitFlat&#x60;, &#x60;House&#x60;, &#x60;Townhouse&#x60;, &#x60;VacantLand&#x60; | 
**created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modified** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status** | **string** | Available options are: &#x60;draft&#x60;, &#x60;missing sign&#x60;, &#x60;executed&#x60; | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**administration_fee** | **string** |  | [optional] 
**agent_details_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**auction_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**auction_type** | **string** |  | [optional] 
**chattels_excluded** | **string** |  | [optional] 
**chattels_included** | **string[]** |  | [optional] 
**continuing_period** | **float** |  | [optional] 
**esp_range_higher** | **float** |  | [optional] 
**esp_range_lower** | **float** |  | [optional] 
**exclusive_period** | **float** |  | [optional] 
**exclusive_period_start_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**exclusive_sold_as** | **string** | Available options are: &#x60;Private Sale&#x60;, &#x60;Expression of Interest with the reserve to be advised prior to closing date&#x60; | [optional] 
**is_owners_corporation_managed** | **bool** |  | [optional] 
**is_property_tenanted** | **bool** |  | [optional] 
**occupation_state** | **string** | Available options are: &#x60;With vacant possession&#x60;, &#x60;Subject to any tenancy&#x60;, &#x60;Both&#x60; | [optional] 
**opt_out_information** | **bool** |  | [optional] 
**payable_in** | **string[]** |  | [optional] 
**payment_method** | **string** | Available options are: &#x60;Full purchase price&#x60;, &#x60;Payment of full deposit&#x60; | [optional] 
**payment_sum** | **float** |  | [optional] 
**reserve_price** | **float** |  | [optional] 
**sale_price_gst_type** | **string** |  | [optional] 
**sale_sign_permission** | **bool** |  | [optional] 
**search_criteria_amount** | **float** |  | [optional] 
**search_criteria_price_type** | **string** | Available options are: &#x60;amount&#x60;, &#x60;range&#x60;, &#x60;other&#x60; | [optional] 
**transaction_type** | **string** |  | [optional] 
**type** | **string** | Available options are: &#x60;Exclusive Auction&#x60;, &#x60;Exclusive Sale&#x60;, &#x60;General Sale&#x60;, &#x60;Appraisal&#x60; | 
**vendor_mkt_price_na** | **bool** |  | [optional] 
**waived_cooling_off** | **bool** |  | [optional] 
**lot** | **string** |  | [optional] 
**plan** | **string** |  | [optional] 
**title_reference** | **string** |  | [optional] 
**certificate_of_title_type** | **string** | This field is unique to SA | [optional] 
**certificate_of_title_folio** | **string** | This field is unique to SA | [optional] 
**certificate_of_title_volume** | **string** | This field is unique to SA | [optional] 
**improved_land** | **bool** | This field is unique to SA | [optional] [default to false]
**crm_details** | [**\Swagger\Client\Model\AuthoritiesV1CrmDetails**](AuthoritiesV1CrmDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

