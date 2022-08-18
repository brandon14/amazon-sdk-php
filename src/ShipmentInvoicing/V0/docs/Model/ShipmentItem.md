# ShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | [optional] 
**seller_sku** | **string** | The seller SKU of the item. | [optional] 
**order_item_id** | **string** | The Amazon-defined identifier for the order item. | [optional] 
**title** | **string** | The name of the item. | [optional] 
**quantity_ordered** | **float** | The number of items ordered. | [optional] 
**item_price** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\Money**](Money.md) | The selling price of the item multiplied by the quantity ordered. Note that ItemPrice excludes ShippingPrice and GiftWrapPrice. | [optional] 
**shipping_price** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\Money**](Money.md) | The shipping price of the item. | [optional] 
**gift_wrap_price** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\Money**](Money.md) | The gift wrap price of the item. | [optional] 
**shipping_discount** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\Money**](Money.md) | The discount on the shipping price. | [optional] 
**promotion_discount** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\Money**](Money.md) | The total of all promotional discounts in the offer. | [optional] 
**serial_numbers** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\SerialNumbersList**](SerialNumbersList.md) | The list of serial numbers. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


