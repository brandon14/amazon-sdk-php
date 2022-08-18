# SellerReviewEnrollmentPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\TNT\Amazon\Finances\V0\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**enrollment_id** | **string** | An enrollment identifier. | [optional] 
**parent_asin** | **string** | The Amazon Standard Identification Number (ASIN) of the item that was enrolled in the Early Reviewer Program. | [optional] 
**fee_component** | [**\TNT\Amazon\Finances\V0\Model\FeeComponent**](FeeComponent.md) |  | [optional] 
**charge_component** | [**\TNT\Amazon\Finances\V0\Model\ChargeComponent**](ChargeComponent.md) |  | [optional] 
**total_amount** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The FeeComponent value plus the ChargeComponent value. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


