# ShipmentRequestDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\AmazonOrderId**](AmazonOrderId.md) | An Amazon-defined order identifier in 3-7-7 format. | 
**seller_order_id** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\SellerOrderId**](SellerOrderId.md) | A seller-defined order identifier. | [optional] 
**item_list** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\ItemList**](ItemList.md) |  | 
**ship_from_address** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Address**](Address.md) | The address of the sender. | 
**package_dimensions** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\PackageDimensions**](PackageDimensions.md) | The package dimensions. | 
**weight** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Weight**](Weight.md) | The package weight. | 
**must_arrive_by_date** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp**](Timestamp.md) | The date by which the package must arrive to keep the promise to the customer, in ISO 8601 datetime format. If MustArriveByDate is specified, only shipping service offers that can be delivered by that date are returned. | [optional] 
**ship_date** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\Timestamp**](Timestamp.md) | When used in a request, this is the date and time that the seller wants to ship the package. When used in a response, this is the date and time that the package can be shipped by the indicated method. | [optional] 
**shipping_service_options** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\ShippingServiceOptions**](ShippingServiceOptions.md) | Extra services offered by the carrier. | 
**label_customization** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\LabelCustomization**](LabelCustomization.md) | Label customization options. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


