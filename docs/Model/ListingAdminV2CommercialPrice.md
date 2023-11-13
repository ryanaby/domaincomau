# ListingAdminV2CommercialPrice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price_unit_type** | **string** | Price Unit type. Can have the values \&quot;TotalAmount\&quot;, \&quot;PerSqm\&quot;. Default &#x3D; \&quot;TotalAmount\&quot; | [optional] 
**price_type** | **string** | Type can have the values \&quot;Gross\&quot;, \&quot;Net\&quot;. Default \&quot;Net\&quot; | [optional] 
**gst_option_type** | **string** | GST Option Type. Can have the values \&quot;NA\&quot;, \&quot;Inc\&quot;, \&quot;Ex\&quot;. Default &#x3D; \&quot;NA\&quot; | [optional] 
**price_reduction** | **bool** | Indicates if this property is under price reduction | [optional] 
**display_text** | **string** | When provided this will be shown instead of the price range, e.g.: \&quot;Offers over $450K considered\&quot; | [optional] 
**from** | **int** | Lowest price the property is expected to sell/rent for to set search price. For a fixed price, set this value the same as To | 
**to** | **int** | Highest price the property is expected to sell/rent for to set search price.   For a fixed price, set this value the same as From | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

