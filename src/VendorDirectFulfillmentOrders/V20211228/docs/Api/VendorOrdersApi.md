# TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\VendorOrdersApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrder**](VendorOrdersApi.md#getOrder) | **GET** /vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{purchaseOrderNumber} | 
[**getOrders**](VendorOrdersApi.md#getOrders) | **GET** /vendor/directFulfillment/orders/2021-12-28/purchaseOrders | 
[**submitAcknowledgement**](VendorOrdersApi.md#submitAcknowledgement) | **POST** /vendor/directFulfillment/orders/2021-12-28/acknowledgements | 


# **getOrder**
> \TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\Order getOrder($purchase_order_number)



Returns purchase order information for the purchaseOrderNumber that you specify.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Api\VendorOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchase_order_number = "purchase_order_number_example"; // string | The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code.

try {
    $result = $apiInstance->getOrder($purchase_order_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_number** | **string**| The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. |

### Return type

[**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\OrderList getOrders($created_after, $created_before, $ship_from_party_id, $status, $limit, $sort_order, $next_token, $include_details)



Returns a list of purchase orders created during the time frame that you specify. You define the time frame using the createdAfter and createdBefore parameters. You must use both parameters. You can choose to get only the purchase order numbers by setting the includeDetails parameter to false. In that case, the operation returns a list of purchase order numbers. You can then call the getOrder operation to return the details of a specific order.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Api\VendorOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format.
$ship_from_party_id = "ship_from_party_id_example"; // string | The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses.
$status = "status_example"; // string | Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status.
$limit = 789; // int | The limit to the number of purchase orders returned.
$sort_order = "sort_order_example"; // string | Sort the list in ascending or descending order by order creation date.
$next_token = "next_token_example"; // string | Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call.
$include_details = "true"; // string | When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned.

try {
    $result = $apiInstance->getOrders($created_after, $created_before, $ship_from_party_id, $status, $limit, $sort_order, $next_token, $include_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **created_after** | **\DateTime**| Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **created_before** | **\DateTime**| Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. |
 **ship_from_party_id** | **string**| The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. | [optional]
 **status** | **string**| Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. | [optional]
 **limit** | **int**| The limit to the number of purchase orders returned. | [optional]
 **sort_order** | **string**| Sort the list in ascending or descending order by order creation date. | [optional]
 **next_token** | **string**| Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. | [optional]
 **include_details** | **string**| When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. | [optional] [default to true]

### Return type

[**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\OrderList**](../Model/OrderList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitAcknowledgement**
> \TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\TransactionId submitAcknowledgement($body)



Submits acknowledgements for one or more purchase orders.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values then those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Api\VendorOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\SubmitAcknowledgementRequest(); // \TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\SubmitAcknowledgementRequest | 

try {
    $result = $apiInstance->submitAcknowledgement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorOrdersApi->submitAcknowledgement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\SubmitAcknowledgementRequest**](../Model/SubmitAcknowledgementRequest.md)|  |

### Return type

[**\TNT\Amazon\VendorDirectFulfillmentOrders\V20211228\Model\TransactionId**](../Model/TransactionId.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

