# FulfillmentPreviewItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. | 
**quantity** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Quantity**](Quantity.md) | The item quantity. | 
**seller_fulfillment_order_item_id** | **string** | A fulfillment order item identifier that the seller created with a call to the createFulfillmentOrder operation. | 
**estimated_shipping_weight** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Weight**](Weight.md) | The estimated shipping weight of the item quantity for a single item, as identified by sellerSku, in a shipment. | [optional] 
**shipping_weight_calculation_method** | **string** | The method used to calculate the estimated shipping weight. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


