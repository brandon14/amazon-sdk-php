# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\ShipmentId**](ShipmentId.md) |  | 
**amazon_order_id** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\AmazonOrderId**](AmazonOrderId.md) |  | 
**seller_order_id** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\SellerOrderId**](SellerOrderId.md) |  | [optional] 
**item_list** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\ItemList**](ItemList.md) |  | 
**ship_from_address** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Address**](Address.md) | The address of the sender. | 
**ship_to_address** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Address**](Address.md) | The destination address for the shipment. | 
**package_dimensions** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\PackageDimensions**](PackageDimensions.md) |  | 
**weight** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Weight**](Weight.md) | The package weight. | 
**insurance** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\CurrencyAmount**](CurrencyAmount.md) | If DeclaredValue was specified in a previous call to the createShipment operation, then Insurance indicates the amount that the carrier will use to insure the shipment. If DeclaredValue was not specified with a previous call to the createShipment operation, then the shipment will be insured for the carrier&#39;s minimum insurance amount, or the combined sale prices that the items are listed for in the shipment, whichever is less. | 
**shipping_service** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\ShippingService**](ShippingService.md) |  | 
**label** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Label**](Label.md) | Data for creating a shipping label and dimensions for printing the label. If the shipment is canceled, an empty Label is returned. | 
**status** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\ShipmentStatus**](ShipmentStatus.md) | The shipment status. | 
**tracking_id** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\TrackingId**](TrackingId.md) |  | [optional] 
**created_date** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp**](Timestamp.md) | The date and time the shipment was created. | 
**last_updated_date** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp**](Timestamp.md) | The date and time of the last update. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


