# InboundShipmentInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | The shipment identifier submitted in the request. | [optional] 
**shipment_name** | **string** | The name for the inbound shipment. | [optional] 
**ship_from_address** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\Address**](Address.md) | The return address. | 
**destination_fulfillment_center_id** | **string** | An Amazon fulfillment center identifier created by Amazon. | [optional] 
**shipment_status** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\ShipmentStatus**](ShipmentStatus.md) |  | [optional] 
**label_prep_type** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\LabelPrepType**](LabelPrepType.md) |  | [optional] 
**are_cases_required** | **bool** | Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired &#x3D; true for an inbound shipment, all items in the inbound shipment must be case packed. | 
**confirmed_need_by_date** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\DateStringType**](DateStringType.md) | Date by which the shipment must arrive at the Amazon fulfillment center to avoid delivery promise breaks for pre-ordered items. | [optional] 
**box_contents_source** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\BoxContentsSource**](BoxContentsSource.md) |  | [optional] 
**estimated_box_contents_fee** | [**\TNT\Amazon\FulfillmentInbound\V0\Model\BoxContentsFeeDetails**](BoxContentsFeeDetails.md) | An estimate of the manual processing fee charged by Amazon for boxes without box content information. This is only returned when BoxContentsSource is NONE. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


