# DomainListingAdminServiceV1ModelListingReport

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_status** | **string** | Status of listing been processed  * Queued - We received request  * Processing - Request been processed  * Processed - Successful processed request  * Failed - Processing failed  * Error - Individual errors encountered | [optional] 
**agency_id** | **int** | AgencyId from Domain | [optional] 
**provider_id** | **string** | ProviderId for the agency | [optional] 
**provider_ad_id** | **string** | Listing identifier provided by CRM | [optional] 
**ad_id** | **int[]** | Advertisement Id from domain | [optional] 
**quality_score** | **int** | Quality score of the listing, based on data completeness | [optional] 
**events** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelModelEvent[]**](DomainListingAdminServiceV1ModelModelEvent.md) | All Events associated with this processing request | [optional] 
**versions** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelReportVersion[]**](DomainListingAdminServiceV1ModelReportVersion.md) | version list | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

