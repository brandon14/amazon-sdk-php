# Container

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_type** | **string** | The type of container. | 
**container_identifier** | **string** | The container identifier. | 
**tracking_number** | **string** | The tracking number. | [optional] 
**manifest_id** | **string** | The manifest identifier. | [optional] 
**manifest_date** | **string** | The date of the manifest. | [optional] 
**ship_method** | **string** | The shipment method. | [optional] 
**scac_code** | **string** | SCAC code required for NA VOC vendors only. | [optional] 
**carrier** | **string** | Carrier required for EU VOC vendors only. | [optional] 
**container_sequence_number** | **int** | An integer that must be submitted for multi-box shipments only, where one item may come in separate packages. | [optional] 
**dimensions** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Dimensions**](Dimensions.md) |  | [optional] 
**weight** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\Weight**](Weight.md) |  | [optional] 
**packed_items** | [**\TNT\Amazon\VendorDirectFulfillmentShipping\V1\Model\PackedItem[]**](PackedItem.md) | A list of packed items. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


