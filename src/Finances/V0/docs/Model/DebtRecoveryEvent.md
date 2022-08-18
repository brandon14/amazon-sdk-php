# DebtRecoveryEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**debt_recovery_type** | **string** | The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment | [optional] 
**recovery_amount** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The amount applied for recovery. | [optional] 
**over_payment_credit** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The amount returned for overpayment. | [optional] 
**debt_recovery_item_list** | [**\TNT\Amazon\Finances\V0\Model\DebtRecoveryItemList**](DebtRecoveryItemList.md) |  | [optional] 
**charge_instrument_list** | [**\TNT\Amazon\Finances\V0\Model\ChargeInstrumentList**](ChargeInstrumentList.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


