# ListingAdminV2ResidentialOffMarketProperty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_type** | **string[]** | Residential property types&lt;br /&gt;  &#x27;Retirement&#x27; requires at least one more property type to be specified with it (for example: \&quot;Retirement\&quot;, \&quot;ApartmentUnitFlat\&quot;) [&#x27;acreageSemiRural&#x27;, &#x27;apartmentUnitFlat&#x27;, &#x27;aquaculture&#x27;, &#x27;blockOfUnits&#x27;, &#x27;carSpace&#x27;, &#x27;dairyFarming&#x27;, &#x27;developmentSite&#x27;, &#x27;duplex&#x27;, &#x27;farm&#x27;, &#x27;fishingForestry&#x27;, &#x27;newHomeDesigns&#x27;, &#x27;house&#x27;, &#x27;newHouseLand&#x27;, &#x27;irrigationServices&#x27;, &#x27;newLand&#x27;, &#x27;livestock&#x27;, &#x27;newApartments&#x27;, &#x27;penthouse&#x27;, &#x27;retirement&#x27;, &#x27;rural&#x27;, &#x27;semiDetached&#x27;, &#x27;specialistFarm&#x27;, &#x27;studio&#x27;, &#x27;terrace&#x27;, &#x27;townhouse&#x27;, &#x27;vacantLand&#x27;, &#x27;villa&#x27;, &#x27;cropping&#x27;, &#x27;viticulture&#x27;, &#x27;mixedFarming&#x27;, &#x27;grazing&#x27;, &#x27;horticulture&#x27;, &#x27;equine&#x27;, &#x27;farmlet&#x27;, &#x27;orchard&#x27;, &#x27;ruralLifestyle&#x27;]. | 
**bed_rooms** | **int** | Number of bedrooms | [optional] 
**bath_rooms** | **int** | Number of bathrooms | [optional] 
**parking_info** | [**\Swagger\Client\Model\ListingAdminV2ParkingInfo**](ListingAdminV2ParkingInfo.md) |  | [optional] 
**images** | [**\Swagger\Client\Model\ListingAdminV2PropertyMedia[]**](ListingAdminV2PropertyMedia.md) | List of image files, photos or floor plans related to the listing.  Supported image file formats: AVIF, BMP, GIF, HEIF/HEIC, JPEG, JPEG 2000, PNG, TIFF, WebP.  The file size is restricted to maximum 100MB.  We recommend against using transparent backgrounds.  Some image formats, such as PNG, support transparency, but when images with transparent areas are resized, they may be converted to a format that doesn’t support transparency, such as JPEG.  By default, transparent areas are converted to black, but the application displaying the image may convert the transparent area to the most appropriate colour for the area where the image is being placed. | [optional] 
**address** | [**\Swagger\Client\Model\ListingAdminV2Address**](ListingAdminV2Address.md) |  | 
**area** | [**\Swagger\Client\Model\ListingAdminV2Area**](ListingAdminV2Area.md) |  | [optional] 
**land_area** | [**\Swagger\Client\Model\ListingAdminV2LandArea**](ListingAdminV2LandArea.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

