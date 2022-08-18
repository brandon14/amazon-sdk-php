# CouponPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\TNT\Amazon\Finances\V0\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**coupon_id** | **string** | A coupon identifier. | [optional] 
**seller_coupon_description** | **string** | The description provided by the seller when they created the coupon. | [optional] 
**clip_or_redemption_count** | **int** | The number of coupon clips or redemptions. | [optional] 
**payment_event_id** | **string** | A payment event identifier. | [optional] 
**fee_component** | [**\TNT\Amazon\Finances\V0\Model\FeeComponent**](FeeComponent.md) |  | [optional] 
**charge_component** | [**\TNT\Amazon\Finances\V0\Model\ChargeComponent**](ChargeComponent.md) |  | [optional] 
**total_amount** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The FeeComponent value plus the ChargeComponent value. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


