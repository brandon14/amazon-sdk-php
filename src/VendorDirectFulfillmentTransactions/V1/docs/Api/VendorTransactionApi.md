# TNT\Amazon\VendorDirectFulfillmentTransactions\V1\VendorTransactionApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransactionStatus**](VendorTransactionApi.md#getTransactionStatus) | **GET** /vendor/directFulfillment/transactions/v1/transactions/{transactionId} | 


# **getTransactionStatus**
> \TNT\Amazon\VendorDirectFulfillmentTransactions\V1\Model\GetTransactionResponse getTransactionStatus($transaction_id)



Returns the status of the transaction indicated by the specified transactionId.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentTransactions\V1\Api\VendorTransactionApi(
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

[**\TNT\Amazon\VendorDirectFulfillmentTransactions\V1\Model\GetTransactionResponse**](../Model/GetTransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

