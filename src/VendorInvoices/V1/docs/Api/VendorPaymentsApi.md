# TNT\Amazon\VendorInvoices\V1\VendorPaymentsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInvoices**](VendorPaymentsApi.md#submitInvoices) | **POST** /vendor/payments/v1/invoices | 


# **submitInvoices**
> \TNT\Amazon\VendorInvoices\V1\Model\SubmitInvoicesResponse submitInvoices($body)



Submit new invoices to Amazon.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorInvoices\V1\Api\VendorPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\VendorInvoices\V1\Model\SubmitInvoicesRequest(); // \TNT\Amazon\VendorInvoices\V1\Model\SubmitInvoicesRequest | 

try {
    $result = $apiInstance->submitInvoices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorPaymentsApi->submitInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\VendorInvoices\V1\Model\SubmitInvoicesRequest**](../Model/SubmitInvoicesRequest.md)|  |

### Return type

[**\TNT\Amazon\VendorInvoices\V1\Model\SubmitInvoicesResponse**](../Model/SubmitInvoicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

