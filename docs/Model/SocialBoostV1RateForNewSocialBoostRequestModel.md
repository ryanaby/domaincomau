# SocialBoostV1RateForNewSocialBoostRequestModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agency_id** | **int** | Id of the agency for whom rates are to be calculated. | 
**agent_first_name** | **string** | The first name of the primary agent associated with the listing. | 
**agent_last_name** | **string** | The last name of the primary agent associated with the listing | 
**agent_email** | **string** | The email of the primary agent associated with the listing. | 
**suburb** | **string** | Suburb for which rates are to be calculated. | 
**postcode** | **string** | Postcode for which rates are to be calculated. | 
**state** | **string** | State for which rates are to be calculated | 
**property_type** | **string** | The property type of the listing e.g. House | 
**is_rural** | **bool** | Whether to return the normal or rural rates | 
**listing_type** | **string** | Type of the listing whether sale or rent | 
**price** | **double** | The value of the listing | 
**channel** | **string** | The intended channel of the listing. | 
**booking_start_date** | [**\DateTime**](\DateTime.md) | Date at which the booking will start. Defaults to today. Allows for returning future contracts/price changes. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

