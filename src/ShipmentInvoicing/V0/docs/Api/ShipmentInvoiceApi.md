# TNT\Amazon\ShipmentInvoicing\V0\ShipmentInvoiceApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvoiceStatus**](ShipmentInvoiceApi.md#getInvoiceStatus) | **GET** /fba/outbound/brazil/v0/shipments/{shipmentId}/invoice/status | 
[**getShipmentDetails**](ShipmentInvoiceApi.md#getShipmentDetails) | **GET** /fba/outbound/brazil/v0/shipments/{shipmentId} | 
[**submitInvoice**](ShipmentInvoiceApi.md#submitInvoice) | **POST** /fba/outbound/brazil/v0/shipments/{shipmentId}/invoice | 


# **getInvoiceStatus**
> \TNT\Amazon\ShipmentInvoicing\V0\Model\GetInvoiceStatusResponse getInvoiceStatus($shipment_id)



Returns the invoice status for the shipment you specify.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1.133 | 25 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ShipmentInvoicing\V0\Api\ShipmentInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The shipment identifier for the shipment.

try {
    $result = $apiInstance->getInvoiceStatus($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoiceApi->getInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The shipment identifier for the shipment. |

### Return type

[**\TNT\Amazon\ShipmentInvoicing\V0\Model\GetInvoiceStatusResponse**](../Model/GetInvoiceStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipmentDetails**
> \TNT\Amazon\ShipmentInvoicing\V0\Model\GetShipmentDetailsResponse getShipmentDetails($shipment_id)



Returns the shipment details required to issue an invoice for the specified shipment.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1.133 | 25 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ShipmentInvoicing\V0\Api\ShipmentInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide).

try {
    $result = $apiInstance->getShipmentDetails($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoiceApi->getShipmentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The identifier for the shipment. Get this value from the FBAOutboundShipmentStatus notification. For information about subscribing to notifications, see the [Notifications API Use Case Guide](doc:notifications-api-v1-use-case-guide). |

### Return type

[**\TNT\Amazon\ShipmentInvoicing\V0\Model\GetShipmentDetailsResponse**](../Model/GetShipmentDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitInvoice**
> \TNT\Amazon\ShipmentInvoicing\V0\Model\SubmitInvoiceResponse submitInvoice($shipment_id, $body)



Submits a shipment invoice document for a given shipment.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1.133 | 25 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ShipmentInvoicing\V0\Api\ShipmentInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The identifier for the shipment.
$body = new \TNT\Amazon\ShipmentInvoicing\V0\Model\SubmitInvoiceRequest(); // \TNT\Amazon\ShipmentInvoicing\V0\Model\SubmitInvoiceRequest | 

try {
    $result = $apiInstance->submitInvoice($shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentInvoiceApi->submitInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The identifier for the shipment. |
 **body** | [**\TNT\Amazon\ShipmentInvoicing\V0\Model\SubmitInvoiceRequest**](../Model/SubmitInvoiceRequest.md)|  |

### Return type

[**\TNT\Amazon\ShipmentInvoicing\V0\Model\SubmitInvoiceResponse**](../Model/SubmitInvoiceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

