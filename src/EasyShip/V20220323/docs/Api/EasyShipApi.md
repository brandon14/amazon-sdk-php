# TNT\Amazon\EasyShip\V20220323\EasyShipApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduledPackage**](EasyShipApi.md#createScheduledPackage) | **POST** /easyShip/2022-03-23/package | 
[**getScheduledPackage**](EasyShipApi.md#getScheduledPackage) | **GET** /easyShip/2022-03-23/package | 
[**listHandoverSlots**](EasyShipApi.md#listHandoverSlots) | **POST** /easyShip/2022-03-23/timeSlot | 
[**updateScheduledPackages**](EasyShipApi.md#updateScheduledPackages) | **PATCH** /easyShip/2022-03-23/package | 


# **createScheduledPackage**
> \TNT\Amazon\EasyShip\V20220323\Model\Package createScheduledPackage($create_scheduled_package_request)



Schedules an Easy Ship order and returns the scheduled package information.  This operation does the following:  *  Specifies the time slot and handover method for the order to be scheduled for delivery.  * Updates the Easy Ship order status.  * Generates a shipping label and an invoice. Calling `createScheduledPackage` also generates a warranty document if you specify a `SerialNumber` value. To get these documents, see [How to get invoice, shipping label, and warranty documents](doc:easy-ship-api-v2022-03-23-use-case-guide).  * Shows the status of Easy Ship orders when you call the `getOrders` operation of the Selling Partner API for Orders and examine the `EasyShipShipmentStatus` property in the response body.  See the **Shipping Label**, **Invoice**, and **Warranty** columns in the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide) to see which documents are supported in each marketplace.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\EasyShip\V20220323\Api\EasyShipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_scheduled_package_request = new \TNT\Amazon\EasyShip\V20220323\Model\CreateScheduledPackageRequest(); // \TNT\Amazon\EasyShip\V20220323\Model\CreateScheduledPackageRequest | 

try {
    $result = $apiInstance->createScheduledPackage($create_scheduled_package_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipApi->createScheduledPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_scheduled_package_request** | [**\TNT\Amazon\EasyShip\V20220323\Model\CreateScheduledPackageRequest**](../Model/CreateScheduledPackageRequest.md)|  |

### Return type

[**\TNT\Amazon\EasyShip\V20220323\Model\Package**](../Model/Package.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledPackage**
> \TNT\Amazon\EasyShip\V20220323\Model\Package getScheduledPackage($amazon_order_id, $marketplace_id)



Returns information about a package, including dimensions, weight, time slot information for handover, invoice and item information, and status.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\EasyShip\V20220323\Api\EasyShipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
$marketplace_id = "marketplace_id_example"; // string | An identifier for the marketplace in which the seller is selling.

try {
    $result = $apiInstance->getScheduledPackage($amazon_order_id, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipApi->getScheduledPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amazon_order_id** | **string**| An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship. |
 **marketplace_id** | **string**| An identifier for the marketplace in which the seller is selling. |

### Return type

[**\TNT\Amazon\EasyShip\V20220323\Model\Package**](../Model/Package.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHandoverSlots**
> \TNT\Amazon\EasyShip\V20220323\Model\ListHandoverSlotsResponse listHandoverSlots($list_handover_slots_request)



Returns time slots available for Easy Ship orders to be scheduled based on the package weight and dimensions that the seller specifies.  This operation is available for scheduled and unscheduled orders based on marketplace support. See **Get Time Slots** in the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide).  This operation can return time slots that have either pickup or drop-off handover methods - see **Supported Handover Methods** in the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide).  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\EasyShip\V20220323\Api\EasyShipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_handover_slots_request = new \TNT\Amazon\EasyShip\V20220323\Model\ListHandoverSlotsRequest(); // \TNT\Amazon\EasyShip\V20220323\Model\ListHandoverSlotsRequest | 

try {
    $result = $apiInstance->listHandoverSlots($list_handover_slots_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipApi->listHandoverSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_handover_slots_request** | [**\TNT\Amazon\EasyShip\V20220323\Model\ListHandoverSlotsRequest**](../Model/ListHandoverSlotsRequest.md)|  | [optional]

### Return type

[**\TNT\Amazon\EasyShip\V20220323\Model\ListHandoverSlotsResponse**](../Model/ListHandoverSlotsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScheduledPackages**
> \TNT\Amazon\EasyShip\V20220323\Model\Packages updateScheduledPackages($update_scheduled_packages_request)



Updates the time slot for handing over the package indicated by the specified `scheduledPackageId`. You can get the new `slotId` value for the time slot by calling the `listHandoverSlots` operation before making another `patch` call.  See the **Update Package** column in the [Marketplace Support Table](doc:easy-ship-api-v2022-03-23-use-case-guide) to see which marketplaces this operation is supported in.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\EasyShip\V20220323\Api\EasyShipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_scheduled_packages_request = new \TNT\Amazon\EasyShip\V20220323\Model\UpdateScheduledPackagesRequest(); // \TNT\Amazon\EasyShip\V20220323\Model\UpdateScheduledPackagesRequest | 

try {
    $result = $apiInstance->updateScheduledPackages($update_scheduled_packages_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasyShipApi->updateScheduledPackages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_scheduled_packages_request** | [**\TNT\Amazon\EasyShip\V20220323\Model\UpdateScheduledPackagesRequest**](../Model/UpdateScheduledPackagesRequest.md)|  | [optional]

### Return type

[**\TNT\Amazon\EasyShip\V20220323\Model\Packages**](../Model/Packages.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

