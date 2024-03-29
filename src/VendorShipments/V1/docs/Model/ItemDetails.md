# ItemDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_order_number** | **string** | The Amazon purchase order number for the shipment being confirmed. If the items in this shipment belong to multiple purchase order numbers that are in particular carton or pallet within the shipment, then provide the purchaseOrderNumber at the appropriate carton or pallet level. Formatting Notes: 8-character alpha-numeric code. | [optional] 
**lot_number** | **string** | The batch or lot number associates an item with information the manufacturer considers relevant for traceability of the trade item to which the Element String is applied. The data may refer to the trade item itself or to items contained. This field is mandatory for all perishable items. | [optional] 
**expiry** | [**\TNT\Amazon\VendorShipments\V1\Model\Expiry**](Expiry.md) | Either expiryDate or mfgDate and expiryAfterDuration are mandatory for perishable items. | [optional] 
**maximum_retail_price** | [**\TNT\Amazon\VendorShipments\V1\Model\Money**](Money.md) | Maximum retail price of the item being shipped. | [optional] 
**handling_code** | **string** | Identification of the instructions on how specified item/carton/pallet should be handled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


