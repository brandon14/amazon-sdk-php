# FeePreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asin** | **string** | The Amazon Standard Identification Number (ASIN) value used to identify the item. | [optional] 
**price** | [**\TNT\Amazon\FbaSmallAndLight\V1\Model\MoneyType**](MoneyType.md) | The price that the seller plans to charge for the item. | [optional] 
**fee_breakdown** | [**\TNT\Amazon\FbaSmallAndLight\V1\Model\FeeLineItem[]**](FeeLineItem.md) | A list of the Small and Light fees for the item. | [optional] 
**total_fees** | [**\TNT\Amazon\FbaSmallAndLight\V1\Model\MoneyType**](MoneyType.md) | The total fees charged if the item participated in the Small and Light program. | [optional] 
**errors** | [**\TNT\Amazon\FbaSmallAndLight\V1\Model\Error[]**](Error.md) | One or more unexpected errors occurred during the getSmallAndLightFeePreview operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


