# UpdateFulfillmentOrderRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | [optional] 
**displayable_order_id** | **string** | A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier. | [optional] 
**displayable_order_date** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Timestamp**](Timestamp.md) | The date and time of the fulfillment order. Displays as the order date in recipient-facing materials such as the outbound shipment packing slip. | [optional] 
**displayable_order_comment** | **string** | Order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip. | [optional] 
**shipping_speed_category** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | [optional] 
**destination_address** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\Address**](Address.md) | The destination address for the fulfillment order. | [optional] 
**fulfillment_action** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FulfillmentAction**](FulfillmentAction.md) |  | [optional] 
**fulfillment_policy** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional] 
**ship_from_country_code** | **string** | The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format. | [optional] 
**notification_emails** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\NotificationEmailList**](NotificationEmailList.md) |  | [optional] 
**feature_constraints** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\FeatureSettings[]**](FeatureSettings.md) | A list of features and their fulfillment policies to apply to the order. | [optional] 
**items** | [**\TNT\Amazon\FulfillmentOutbound\V20200701\Model\UpdateFulfillmentOrderItemList**](UpdateFulfillmentOrderItemList.md) | A list of items to include in the fulfillment order preview, including quantity. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


