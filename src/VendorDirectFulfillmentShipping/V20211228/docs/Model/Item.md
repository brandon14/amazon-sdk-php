# Item

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_sequence_number** | **int** | Item Sequence Number for the item. This must be the same value as sent in order for a given item. | 
**buyer_product_identifier** | **string** | Buyer&#39;s Standard Identification Number (ASIN) of an item. Either buyerProductIdentifier or vendorProductIdentifier is required. | [optional] 
**vendor_product_identifier** | **string** | The vendor selected product identification of the item. Should be the same as was sent in the purchase order, like SKU Number. | [optional] 
**shipped_quantity** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V20211228\Model\ItemQuantity**](ItemQuantity.md) | Total item quantity shipped in this shipment. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


