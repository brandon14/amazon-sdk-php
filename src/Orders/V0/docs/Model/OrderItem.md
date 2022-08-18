# OrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item. | 
**seller_sku** | **string** | The seller stock keeping unit (SKU) of the item. | [optional] 
**order_item_id** | **string** | An Amazon-defined order item identifier. | 
**title** | **string** | The name of the item. | [optional] 
**quantity_ordered** | **int** | The number of items in the order. | 
**quantity_shipped** | **int** | The number of items shipped. | [optional] 
**product_info** | [**\TNT\Amazon\Orders\V0\Model\ProductInfoDetail**](ProductInfoDetail.md) | Product information for the item. | [optional] 
**points_granted** | [**\TNT\Amazon\Orders\V0\Model\PointsGrantedDetail**](PointsGrantedDetail.md) | The number and value of Amazon Points granted with the purchase of an item. | [optional] 
**item_price** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The selling price of the order item. Note that an order item is an item and a quantity. This means that the value of ItemPrice is equal to the selling price of the item multiplied by the quantity ordered. Note that ItemPrice excludes ShippingPrice and GiftWrapPrice. | [optional] 
**shipping_price** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The shipping price of the item. | [optional] 
**item_tax** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The tax on the item price. | [optional] 
**shipping_tax** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The tax on the shipping price. | [optional] 
**shipping_discount** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The discount on the shipping price. | [optional] 
**shipping_discount_tax** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The tax on the discount on the shipping price. | [optional] 
**promotion_discount** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The total of all promotional discounts in the offer. | [optional] 
**promotion_discount_tax** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The tax on the total of all promotional discounts in the offer. | [optional] 
**promotion_ids** | [**\TNT\Amazon\Orders\V0\Model\PromotionIdList**](PromotionIdList.md) |  | [optional] 
**cod_fee** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The fee charged for COD service. | [optional] 
**cod_fee_discount** | [**\TNT\Amazon\Orders\V0\Model\Money**](Money.md) | The discount on the COD fee. | [optional] 
**is_gift** | **bool** | When true, the item is a gift. | [optional] 
**condition_note** | **string** | The condition of the item as described by the seller. | [optional] 
**condition_id** | **string** | The condition of the item.  Possible values: New, Used, Collectible, Refurbished, Preorder, Club. | [optional] 
**condition_subtype_id** | **string** | The subcondition of the item.  Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other. | [optional] 
**scheduled_delivery_start_date** | **string** | The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format. | [optional] 
**scheduled_delivery_end_date** | **string** | The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format. | [optional] 
**price_designation** | **string** | Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).   Possible values: BusinessPrice - A special price that is available only for Amazon Business orders. | [optional] 
**tax_collection** | [**\TNT\Amazon\Orders\V0\Model\TaxCollection**](TaxCollection.md) | Information about withheld taxes. | [optional] 
**serial_number_required** | **bool** | When true, the product type for this item has a serial number.  Returned only for Amazon Easy Ship orders. | [optional] 
**is_transparency** | **bool** | When true, transparency codes are required. | [optional] 
**ioss_number** | **string** | The IOSS number for the marketplace. Sellers shipping to the European Union (EU) from outside of the EU must provide this IOSS number to their carrier when Amazon has collected the VAT on the sale. | [optional] 
**store_chain_store_id** | **string** | The store chain store identifier. Linked to a specific store in a store chain. | [optional] 
**deemed_reseller_category** | **string** | The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK. | [optional] 
**buyer_info** | [**\TNT\Amazon\Orders\V0\Model\ItemBuyerInfo**](ItemBuyerInfo.md) |  | [optional] 
**buyer_requested_cancel** | [**\TNT\Amazon\Orders\V0\Model\BuyerRequestedCancel**](BuyerRequestedCancel.md) | Information about whether or not a buyer requested cancellation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


