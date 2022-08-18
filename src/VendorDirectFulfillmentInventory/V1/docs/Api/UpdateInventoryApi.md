# TNT\Amazon\VendorDirectFulfillmentInventory\V1\UpdateInventoryApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInventoryUpdate**](UpdateInventoryApi.md#submitInventoryUpdate) | **POST** /vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items | 


# **submitInventoryUpdate**
> \TNT\Amazon\VendorDirectFulfillmentInventory\V1\Model\SubmitInventoryUpdateResponse submitInventoryUpdate($body, $warehouse_id)



Submits inventory updates for the specified warehouse for either a partial or full feed of inventory items.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentInventory\V1\Api\UpdateInventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\VendorDirectFulfillmentInventory\V1\Model\SubmitInventoryUpdateRequest(); // \TNT\Amazon\VendorDirectFulfillmentInventory\V1\Model\SubmitInventoryUpdateRequest | 
$warehouse_id = "warehouse_id_example"; // string | Identifier for the warehouse for which to update inventory.

try {
    $result = $apiInstance->submitInventoryUpdate($body, $warehouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UpdateInventoryApi->submitInventoryUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\VendorDirectFulfillmentInventory\V1\Model\SubmitInventoryUpdateRequest**](../Model/SubmitInventoryUpdateRequest.md)|  |
 **warehouse_id** | **string**| Identifier for the warehouse for which to update inventory. |

### Return type

[**\TNT\Amazon\VendorDirectFulfillmentInventory\V1\Model\SubmitInventoryUpdateResponse**](../Model/SubmitInventoryUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

