# TNT\Amazon\VendorDirectFulfillmentTransactions\V20211228\VendorTransactionApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionStatus**](VendorTransactionApi.md#getTransactionStatus) | **GET** /vendor/directFulfillment/transactions/2021-12-28/transactions/{transactionId} | 


# **getTransactionStatus**
> \TNT\Amazon\VendorDirectFulfillmentTransactions\V20211228\Model\TransactionStatus getTransactionStatus($transaction_id)



Returns the status of the transaction indicated by the specified transactionId.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentTransactions\V20211228\Api\VendorTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = "transaction_id_example"; // string | Previously returned in the response to the POST request of a specific transaction.

try {
    $result = $apiInstance->getTransactionStatus($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorTransactionApi->getTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**| Previously returned in the response to the POST request of a specific transaction. |

### Return type

[**\TNT\Amazon\VendorDirectFulfillmentTransactions\V20211228\Model\TransactionStatus**](../Model/TransactionStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

