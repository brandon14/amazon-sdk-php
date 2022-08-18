# FulfillmentPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_speed_category** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**scheduled_delivery_info** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\ScheduledDeliveryInfo**](ScheduledDeliveryInfo.md) |  | [optional] 
**is_fulfillable** | **bool** | When true, this fulfillment order preview is fulfillable. | 
**is_cod_capable** | **bool** | When true, this fulfillment order preview is for COD (Cash On Delivery). | 
**estimated_shipping_weight** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Weight**](Weight.md) | Estimated shipping weight for this fulfillment order preview. | [optional] 
**estimated_fees** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FeeList**](FeeList.md) | The estimated fulfillment fees for this fulfillment order preview, if applicable. | [optional] 
**fulfillment_preview_shipments** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FulfillmentPreviewShipmentList**](FulfillmentPreviewShipmentList.md) |  | [optional] 
**unfulfillable_preview_items** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\UnfulfillablePreviewItemList**](UnfulfillablePreviewItemList.md) |  | [optional] 
**order_unfulfillable_reasons** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\StringList**](StringList.md) | Error codes associated with the fulfillment order preview that indicate why the order is not fulfillable.  Error code examples:  DeliverySLAUnavailable InvalidDestinationAddress | [optional] 
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | 
**feature_constraints** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


