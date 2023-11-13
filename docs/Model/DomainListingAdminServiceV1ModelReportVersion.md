# DomainListingAdminServiceV1ModelReportVersion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operations** | **string[]** | Operations performed on a completed version [&#x27;none&#x27;, &#x27;dataReceived&#x27;, &#x27;processStarted&#x27;, &#x27;priceValidated&#x27;, &#x27;geoCoded&#x27;, &#x27;pdfsProcessed&#x27;, &#x27;primaryImagesProcessed&#x27;, &#x27;allImagesProcessed&#x27;, &#x27;listingDataSaved&#x27;, &#x27;listingDeleted&#x27;, &#x27;reportEmailSent&#x27;, &#x27;offMarketProcessed&#x27;, &#x27;listingIndexed&#x27;, &#x27;propertyTypesProcessed&#x27;, &#x27;contactsProcessed&#x27;, &#x27;messagesPublished&#x27;, &#x27;listingSentLive&#x27;, &#x27;listingUpdated&#x27;, &#x27;listingRestored&#x27;, &#x27;allImageSizesProcessed&#x27;, &#x27;patchProcessed&#x27;, &#x27;externalSaleProcessed&#x27;, &#x27;soiProcessed&#x27;, &#x27;duplicateDetection&#x27;, &#x27;listingMerged&#x27;, &#x27;supplementaryProcessed&#x27;, &#x27;listingHeldInMigration&#x27;, &#x27;linkedProjectsProcessed&#x27;, &#x27;linkedListingsProcessed&#x27;, &#x27;allMediaProcessed&#x27;, &#x27;projectProcessed&#x27;, &#x27;projectDeleted&#x27;]. | [optional] 
**version_id** | **string** | Version Id | [optional] 
**processed_date** | [**\DateTime**](\DateTime.md) | Date this version of data been processed | [optional] 
**data_url** | **string** | Url to access s3 file | [optional] 
**process_count** | **int** | Retry count | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

