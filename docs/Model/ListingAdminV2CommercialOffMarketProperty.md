# ListingAdminV2CommercialOffMarketProperty

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**property_type** | **string[]** | Commercial property types [&#x27;aquaculture&#x27;, &#x27;dairyFarming&#x27;, &#x27;developmentLand&#x27;, &#x27;fishingForestry&#x27;, &#x27;hotelLeisure&#x27;, &#x27;industrialWarehouse&#x27;, &#x27;irrigationServices&#x27;, &#x27;livestock&#x27;, &#x27;internationalCommercial&#x27;, &#x27;medicalConsulting&#x27;, &#x27;offices&#x27;, &#x27;parkingCarSpace&#x27;, &#x27;retail&#x27;, &#x27;ruralCommercialFarming&#x27;, &#x27;showroomsBulkyGoods&#x27;, &#x27;servicedOffices&#x27;, &#x27;other&#x27;, &#x27;cropping&#x27;, &#x27;viticulture&#x27;, &#x27;mixedFarming&#x27;, &#x27;grazing&#x27;, &#x27;horticulture&#x27;, &#x27;equine&#x27;, &#x27;farmlet&#x27;, &#x27;orchard&#x27;, &#x27;ruralLifestyle&#x27;]. | 
**building_type** | **string** | Building Type | [optional] 
**parking** | [**\Swagger\Client\Model\ListingAdminV2Parking**](ListingAdminV2Parking.md) |  | [optional] 
**images** | [**\Swagger\Client\Model\ListingAdminV2PropertyMedia[]**](ListingAdminV2PropertyMedia.md) | List of image files, photos or floor plans related to the listing.  Supported image file formats: AVIF, BMP, GIF, HEIF/HEIC, JPEG, JPEG 2000, PNG, TIFF, WebP.  The file size is restricted to maximum 100MB.  We recommend against using transparent backgrounds.  Some image formats, such as PNG, support transparency, but when images with transparent areas are resized, they may be converted to a format that doesn’t support transparency, such as JPEG.  By default, transparent areas are converted to black, but the application displaying the image may convert the transparent area to the most appropriate colour for the area where the image is being placed. | [optional] 
**address** | [**\Swagger\Client\Model\ListingAdminV2Address**](ListingAdminV2Address.md) |  | 
**area** | [**\Swagger\Client\Model\ListingAdminV2Area**](ListingAdminV2Area.md) |  | [optional] 
**land_area** | [**\Swagger\Client\Model\ListingAdminV2LandArea**](ListingAdminV2LandArea.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

