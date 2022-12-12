# BatchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uri** | **string** | The resource path of the operation you are calling in batch without any query parameters.  If you are calling &#x60;getItemOffersBatch&#x60;, supply the path of &#x60;getItemOffers&#x60;.  **Example:** &#x60;/products/pricing/v0/items/B000P6Q7MY/offers&#x60;  If you are calling &#x60;getListingOffersBatch&#x60;, supply the path of &#x60;getListingOffers&#x60;.  **Example:** &#x60;/products/pricing/v0/listings/B000P6Q7MY/offers&#x60; | 
**method** | [**\TNT\Amazon\ProductPricing\V0\Model\HttpMethod**](HttpMethod.md) |  | 
**headers** | [**\TNT\Amazon\ProductPricing\V0\Model\HttpRequestHeaders**](HttpRequestHeaders.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


