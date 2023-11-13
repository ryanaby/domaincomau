# ListingsV2Inspection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recurrence** | **string** | Gets or Sets Recurrence | [optional] 
**opening_date_time** | [**\DateTime**](\DateTime.md) | Opening date and time of the inspection. e.g. 2015-01-01T12:00:00.  Not provided by bulk uploaded listings, in these cases refer to the  inspection description field. DateTime is in a local timezone. | [optional] 
**closing_date_time** | [**\DateTime**](\DateTime.md) | Closing date and time of the inspection. e.g. 2015-01-01T12:00:00  Not provided by bulk uploaded listings, in these cases refer to the  inspection description field. DateTime is in a local timezone. | [optional] 
**description** | **string** | Description of the inspection provided by the Advertiser.  When listings are bulk uploaded, inspection times are provided as a string.  Other inspection details will not be provided | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

