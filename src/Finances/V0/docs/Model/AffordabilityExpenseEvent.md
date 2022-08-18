# AffordabilityExpenseEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**posted_date** | [**\TNT\Amazon\Finances\V0\Model\\DateTime**](\DateTime.md) | The date and time when the financial event was created. | [optional] 
**marketplace_id** | **string** | An encrypted, Amazon-defined marketplace identifier. | [optional] 
**transaction_type** | **string** | Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal. | [optional] 
**base_expense** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The amount charged for clicks incurred under the Sponsored Products program. | [optional] 
**tax_type_cgst** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | Central Goods and Service Tax, charged and collected by the central government. | 
**tax_type_sgst** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | State Goods and Service Tax, charged and collected by the state government. | 
**tax_type_igst** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | Integrated Goods and Service Tax, charged and collected by the central government. | 
**total_expense** | [**\TNT\Amazon\Finances\V0\Model\Currency**](Currency.md) | The total amount charged to the seller. TotalExpense &#x3D; BaseExpense + TaxTypeIGST + TaxTypeCGST + TaxTypeSGST. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


