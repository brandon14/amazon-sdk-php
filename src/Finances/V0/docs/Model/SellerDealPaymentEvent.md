# SellerDealPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\TNT\Amazon\Finances\V0\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was posted. | [optional] 
**deal_id** | **string** | The unique identifier of the deal. | [optional] 
**deal_description** | **string** | The internal description of the deal. | [optional] 
**event_type** | **string** | The type of event: SellerDealComplete. | [optional] 
**fee_type** | **string** | The type of fee: RunLightningDealFee. | [optional] 
**fee_amount** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The monetary amount of the fee. | [optional] 
**tax_amount** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The monetary amount of the tax applied. | [optional] 
**total_amount** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The total monetary amount paid. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


