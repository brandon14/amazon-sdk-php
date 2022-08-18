# OrderDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_order_number** | **string** | The customer order number. | 
**order_date** | [**\DateTime**](\DateTime.md) | The date the order was placed. This  field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed. | 
**order_status** | **string** | Current status of the order. | [optional] 
**shipment_details** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\ShipmentDetails**](ShipmentDetails.md) |  | 
**tax_total** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\TaxItemDetails**](TaxItemDetails.md) |  | [optional] 
**selling_party** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\PartyIdentification**](PartyIdentification.md) | PartyID of vendor code. | 
**ship_from_party** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\PartyIdentification**](PartyIdentification.md) | PartyID of vendor&#39;s warehouse. | 
**ship_to_party** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\Address**](Address.md) | Name/Address and tax details of the ship to party. | 
**bill_to_party** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\PartyIdentification**](PartyIdentification.md) | Name/Address and tax details of the bill to party. | 
**items** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\OrderItem[]**](OrderItem.md) | A list of items in this purchase order. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


