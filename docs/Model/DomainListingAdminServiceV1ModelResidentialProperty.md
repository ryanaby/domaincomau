# DomainListingAdminServiceV1ModelResidentialProperty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_type** | **string[]** | &#x27;Retirement&#x27; requires at least one more property type to be specified with it (for example: \\\&quot;Retirement\\\&quot;, \\\&quot;ApartmentUnitFlat\\\&quot;) [&#x27;acreageSemiRural&#x27;, &#x27;apartmentUnitFlat&#x27;, &#x27;aquaculture&#x27;, &#x27;blockOfUnits&#x27;, &#x27;carSpace&#x27;, &#x27;dairyFarming&#x27;, &#x27;developmentSite&#x27;, &#x27;duplex&#x27;, &#x27;farm&#x27;, &#x27;fishingForestry&#x27;, &#x27;newHomeDesigns&#x27;, &#x27;house&#x27;, &#x27;newHouseLand&#x27;, &#x27;irrigationServices&#x27;, &#x27;newLand&#x27;, &#x27;livestock&#x27;, &#x27;newApartments&#x27;, &#x27;penthouse&#x27;, &#x27;retirement&#x27;, &#x27;rural&#x27;, &#x27;semiDetached&#x27;, &#x27;specialistFarm&#x27;, &#x27;studio&#x27;, &#x27;terrace&#x27;, &#x27;townhouse&#x27;, &#x27;vacantLand&#x27;, &#x27;villa&#x27;, &#x27;cropping&#x27;, &#x27;viticulture&#x27;, &#x27;mixedFarming&#x27;, &#x27;grazing&#x27;, &#x27;horticulture&#x27;, &#x27;equine&#x27;, &#x27;farmlet&#x27;, &#x27;orchard&#x27;, &#x27;ruralLifestyle&#x27;]. | [optional] 
**bed_rooms** | **int** | Number of bedrooms | [optional] 
**bath_rooms** | **int** | Number of bathrooms | [optional] 
**parking_info** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelParkingInfo**](DomainListingAdminServiceV1ModelParkingInfo.md) |  | [optional] 
**energy_efficiency_rating** | **double** | Optional, although must be set for ACT dwellings for sale. Valid values range from 0 to 10 inclusive, in increments of 0.5 | [optional] 
**pdfs** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyPdf[]**](DomainListingAdminServiceV1ModelPropertyPdf.md) | List of PDF files related to the listing | [optional] 
**is_marked_for_liveability** | **bool** | Is the property liveability compliant | [optional] 
**property_name** | **string** | Name of the property up to 70 characters | [optional] 
**location** | **string** | Short location information up to 30 character, e.g.: Greenhills Beach | [optional] 
**images** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelPropertyMedia[]**](DomainListingAdminServiceV1ModelPropertyMedia.md) | List of image files, photos or floor plans related to the listing. | [optional] 
**address** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelAddress**](DomainListingAdminServiceV1ModelAddress.md) |  | [optional] 
**area** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelArea**](DomainListingAdminServiceV1ModelArea.md) |  | [optional] 
**land_area** | [**\Swagger\Client\Model\DomainListingAdminServiceV1ModelLandArea**](DomainListingAdminServiceV1ModelLandArea.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

