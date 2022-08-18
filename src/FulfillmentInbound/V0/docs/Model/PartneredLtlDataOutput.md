# PartneredLtlDataOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\Contact**](Contact.md) | Contact information for the person in the seller&#39;s organization who is responsible for the shipment. Used by the carrier if they have questions about the shipment. | 
**box_count** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\UnsignedIntType**](UnsignedIntType.md) | The number of boxes in the shipment. | 
**seller_freight_class** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\SellerFreightClass**](SellerFreightClass.md) |  | [optional] 
**freight_ready_date** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\DateStringType**](DateStringType.md) | The date that the shipment will be ready to be picked up by the carrier. Must be in YYYY-MM-DD format. | 
**pallet_list** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\PalletList**](PalletList.md) |  | 
**total_weight** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\Weight**](Weight.md) | The total weight of the shipment. | 
**seller_declared_value** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\Amount**](Amount.md) | Your declaration of the total value of the inventory in the shipment. | [optional] 
**amazon_calculated_value** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\Amount**](Amount.md) | Estimate by Amazon of the total value of the inventory in the shipment. | [optional] 
**preview_pickup_date** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\DateStringType**](DateStringType.md) | The estimated date that the shipment will be picked up by the carrier, in YYYY-MM-DD format. | 
**preview_delivery_date** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\DateStringType**](DateStringType.md) | The estimated date that the shipment will be delivered to an Amazon fulfillment center, in YYYY-MM-DD format. | 
**preview_freight_class** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\SellerFreightClass**](SellerFreightClass.md) | The freight class of the shipment as estimated by Amazon if you did not include a freight class when you called the putTransportDetails operation. | 
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. | 
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. | 
**partnered_estimate** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\PartneredEstimate**](PartneredEstimate.md) | The estimated shipping cost using an Amazon-partnered carrier. | [optional] 
**carrier_name** | **string** | The carrier for the inbound shipment. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


