# DomainPublicAdapterWebApiModelsV1ListingsCommercialSearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_number** | **int** |  | [optional] 
**advertiser_id** | **int** | Agency ID | [optional] 
**page_size** | **int** | Search results page size | [optional] 
**property_types** | **string[]** | Listing property types | [optional] 
**price** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialPriceSearch**](DomainPublicAdapterWebApiModelsV1ListingsCommercialPriceSearch.md) |  | [optional] 
**locations** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialLocationSearch[]**](DomainPublicAdapterWebApiModelsV1ListingsCommercialLocationSearch.md) | Location search criteria | [optional] 
**keywords** | **string[]** | Search listings by keyword | [optional] 
**geo_window** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialGeoWindow**](DomainPublicAdapterWebApiModelsV1ListingsCommercialGeoWindow.md) |  | [optional] 
**land_area_min** | **int** | Minimum land area | [optional] 
**land_area_max** | **int** | Maximum land area | [optional] 
**building_size_min** | **int** | Minimum building area | [optional] 
**building_size_max** | **int** | Maximum building area | [optional] 
**search_mode** | **string** | Search mode | [optional] 
**occupancy** | **string** | Occupancy | [optional] 
**sort** | **string** | Sorting order | [optional] 
**sale_type** | **string** | Sale type | [optional] 
**property_title** | **string** | Property title | [optional] 
**parking** | [**\Swagger\Client\Model\DomainPublicAdapterWebApiModelsV1ListingsCommercialParkingSearch**](DomainPublicAdapterWebApiModelsV1ListingsCommercialParkingSearch.md) |  | [optional] 
**exclusion_types** | **string[]** | Exclusion Types | [optional] 
**annual_return** | **int** | Minimum annual return (in percents) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

