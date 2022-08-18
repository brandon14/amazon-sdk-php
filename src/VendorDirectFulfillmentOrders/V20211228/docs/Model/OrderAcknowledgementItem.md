# OrderAcknowledgementItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The purchase order number for this order. Formatting Notes: alpha-numeric code. | 
**vendor_order_number** | **string** | The vendor&#39;s order number for this order. | 
**acknowledgement_date** | [**\DateTime**](\DateTime.md) | The date and time when the order is acknowledged, in ISO-8601 date/time format. For example: 2018-07-16T23:00:00Z / 2018-07-16T23:00:00-05:00 / 2018-07-16T23:00:00-08:00. | 
**acknowledgement_status** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\AcknowledgementStatus**](AcknowledgementStatus.md) | Status of acknowledgement. | 
**selling_party** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\PartyIdentification**](PartyIdentification.md) | PartyID as vendor code. | 
**ship_from_party** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\PartyIdentification**](PartyIdentification.md) | PartyID as the vendor&#39;s warehouseId. | 
**item_acknowledgements** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\OrderItemAcknowledgement[]**](OrderItemAcknowledgement.md) | Item details including acknowledged quantity. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


