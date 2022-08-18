# OrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **string** | Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on. | 
**buyer_product_identifier** | **string** | Buyer&#39;s standard identification number (ASIN) of an item. | [optional] 
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. | [optional] 
**title** | **string** | Title for the item. | [optional] 
**ordered_quantity** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\ItemQuantity**](ItemQuantity.md) | Item quantity ordered. | 
**scheduled_delivery_shipment** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\ScheduledDeliveryShipment**](ScheduledDeliveryShipment.md) | Details for the scheduled delivery shipment. | [optional] 
**gift_details** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\GiftDetails**](GiftDetails.md) | Gift message and wrapId details. | [optional] 
**net_price** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\Money**](Money.md) | Net price (before tax) to vendor with currency details. | 
**tax_details** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\TaxItemDetails**](TaxItemDetails.md) | Total tax details for the line item. | [optional] 
**total_price** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\Money**](Money.md) | The price to Amazon each (cost). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


