# DomainAvmV1Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**val_ex_job_number** | **string** | The client identification for the valuation transaction from request. | [optional] 
**estimate** | **int** | The estimate. | [optional] 
**estimate_low** | **int** | The estimate low range. | [optional] 
**estimate_high** | **int** | The estimate high range. | [optional] 
**confidence** | **string** | The confidence level of the estimates. | [optional] 
**percent_fsd** | **double** | The forecast standard deviation of the property. | [optional] 
**estimate_date** | **string** | The date the estimates were generated. | [optional] 
**property_type** | **string** | Property type used when estimating the value of property. Valid values: [House, Unit]. | [optional] 
**year_built** | **string** | The year of construction. | [optional] 
**bedrooms** | **int** | The amount of bedrooms. | [optional] 
**bathrooms** | **int** | The amount of bathrooms. | [optional] 
**carparks** | **int** | The amount of carparks. | [optional] 
**building_area** | **double** | Building area in square meters to be used when estimating value of property, for houses only not units. | [optional] 
**land_area** | **double** | Land area in square meters to be used when estimating value of property, for houses only not units. | [optional] 
**address** | [**\Swagger\Client\Model\DomainAvmV1Address**](DomainAvmV1Address.md) |  | [optional] 
**report** | **string** | The B64 encoded pdf of the valuation report. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

