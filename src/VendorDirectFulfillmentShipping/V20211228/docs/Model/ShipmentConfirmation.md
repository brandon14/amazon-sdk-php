# ShipmentConfirmation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | Purchase order number corresponding to the shipment. | 
**shipment_details** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model\ShipmentDetails**](ShipmentDetails.md) | Shipment information. | 
**selling_party** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model\PartyIdentification**](PartyIdentification.md) | ID of the selling party or vendor. | 
**ship_from_party** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model\PartyIdentification**](PartyIdentification.md) | Warehouse code of vendor. | 
**items** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model\Item[]**](Item.md) | Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package. | 
**containers** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model\Container[]**](Container.md) | Provide the details of the items in this shipment. If any of the item details field is common at a package or a pallet level, then provide them at the corresponding package. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


