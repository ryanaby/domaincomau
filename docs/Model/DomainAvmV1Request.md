# DomainAvmV1Request

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**val_ex_job_number** | **string** | The client identification for the valuation transaction. | 
**address** | [**\Swagger\Client\Model\DomainAvmV1Address**](DomainAvmV1Address.md) |  | [optional] 
**purchase_price** | **int** | The purchase price of the property to nearest AUD. | [optional] 
**property_type** | **string** | Property type to be used when estimating value of property. Valid values: [House, Unit]. | [optional] 
**landarea** | **int** | Land area in square meters to be used when estimating value of property, for houses only not units. | [optional] 
**bedrooms** | **int** | Number of bedrooms to be used when estimating value of property. | [optional] 
**bathrooms** | **int** | Number of bathrooms to be used when estimating value of property. | [optional] 
**carparks** | **int** | Number of carparks to be used when estimating value of property. | [optional] 
**gnaf_pid** | **string** | Geocoded National Address File. A G-NAF Persistent ID is a unique combination of address detail used to identify each property in Australia. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

