# BuyBoxPriceType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**condition** | **string** | Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club. | 
**offer_type** | [**\TNT\Amazon\ProductPricing\V0\Model\OfferCustomerType**](OfferCustomerType.md) | Indicates the type of customer that the offer is valid for.&lt;br&gt;&lt;br&gt;When the offer type is B2C in a quantity discount, the seller is winning the Buy Box because others do not have inventory at that quantity, not because they have a quantity discount on the ASIN. | [optional] 
**quantity_tier** | **int** | Indicates at what quantity this price becomes active. | [optional] 
**quantity_discount_type** | [**\TNT\Amazon\ProductPricing\V0\Model\QuantityDiscountType**](QuantityDiscountType.md) | Indicates the type of quantity discount this price applies to. | [optional] 
**landed_price** | [**\TNT\Amazon\ProductPricing\V0\Model\MoneyType**](MoneyType.md) | The value calculated by adding ListingPrice + Shipping - Points. | 
**listing_price** | [**\TNT\Amazon\ProductPricing\V0\Model\MoneyType**](MoneyType.md) | The price of the item. | 
**shipping** | [**\TNT\Amazon\ProductPricing\V0\Model\MoneyType**](MoneyType.md) | The shipping cost. | 
**points** | [**\TNT\Amazon\ProductPricing\V0\Model\Points**](Points.md) | The number of Amazon Points offered with the purchase of an item. | [optional] 
**seller_id** | **string** | The seller identifier for the offer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


