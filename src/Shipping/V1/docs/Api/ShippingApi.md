# TNT\Amazon\Shipping\V1\ShippingApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment**](ShippingApi.md#cancelShipment) | **POST** /shipping/v1/shipments/{shipmentId}/cancel | 
[**createShipment**](ShippingApi.md#createShipment) | **POST** /shipping/v1/shipments | 
[**getAccount**](ShippingApi.md#getAccount) | **GET** /shipping/v1/account | 
[**getRates**](ShippingApi.md#getRates) | **POST** /shipping/v1/rates | 
[**getShipment**](ShippingApi.md#getShipment) | **GET** /shipping/v1/shipments/{shipmentId} | 
[**getTrackingInformation**](ShippingApi.md#getTrackingInformation) | **GET** /shipping/v1/tracking/{trackingId} | 
[**purchaseLabels**](ShippingApi.md#purchaseLabels) | **POST** /shipping/v1/shipments/{shipmentId}/purchaseLabels | 
[**purchaseShipment**](ShippingApi.md#purchaseShipment) | **POST** /shipping/v1/purchaseShipment | 
[**retrieveShippingLabel**](ShippingApi.md#retrieveShippingLabel) | **POST** /shipping/v1/shipments/{shipmentId}/containers/{trackingId}/label | 


# **cancelShipment**
> \TNT\Amazon\Shipping\V1\Model\CancelShipmentResponse cancelShipment($shipment_id)



Cancel a shipment by the given shipmentId.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\CancelShipmentResponse**](../Model/CancelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShipment**
> \TNT\Amazon\Shipping\V1\Model\CreateShipmentResponse createShipment($body)



Create a new shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\Shipping\V1\Model\CreateShipmentRequest(); // \TNT\Amazon\Shipping\V1\Model\CreateShipmentRequest | 

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\Shipping\V1\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\CreateShipmentResponse**](../Model/CreateShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \TNT\Amazon\Shipping\V1\Model\GetAccountResponse getAccount()



Verify if the current account is valid.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TNT\Amazon\Shipping\V1\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRates**
> \TNT\Amazon\Shipping\V1\Model\GetRatesResponse getRates($body)



Get service rates.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\Shipping\V1\Model\GetRatesRequest(); // \TNT\Amazon\Shipping\V1\Model\GetRatesRequest | 

try {
    $result = $apiInstance->getRates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\Shipping\V1\Model\GetRatesRequest**](../Model/GetRatesRequest.md)|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\GetRatesResponse**](../Model/GetRatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipment**
> \TNT\Amazon\Shipping\V1\Model\GetShipmentResponse getShipment($shipment_id)



Return the entire shipment object for the shipmentId.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | 

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\GetShipmentResponse**](../Model/GetShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingInformation**
> \TNT\Amazon\Shipping\V1\Model\GetTrackingInformationResponse getTrackingInformation($tracking_id)



Return the tracking information of a shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tracking_id = "tracking_id_example"; // string | 

try {
    $result = $apiInstance->getTrackingInformation($tracking_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->getTrackingInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tracking_id** | **string**|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\GetTrackingInformationResponse**](../Model/GetTrackingInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseLabels**
> \TNT\Amazon\Shipping\V1\Model\PurchaseLabelsResponse purchaseLabels($shipment_id, $body)



Purchase shipping labels based on a given rate.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | 
$body = new \TNT\Amazon\Shipping\V1\Model\PurchaseLabelsRequest(); // \TNT\Amazon\Shipping\V1\Model\PurchaseLabelsRequest | 

try {
    $result = $apiInstance->purchaseLabels($shipment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->purchaseLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |
 **body** | [**\TNT\Amazon\Shipping\V1\Model\PurchaseLabelsRequest**](../Model/PurchaseLabelsRequest.md)|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\PurchaseLabelsResponse**](../Model/PurchaseLabelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseShipment**
> \TNT\Amazon\Shipping\V1\Model\PurchaseShipmentResponse purchaseShipment($body)



Purchase shipping labels.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\Shipping\V1\Model\PurchaseShipmentRequest(); // \TNT\Amazon\Shipping\V1\Model\PurchaseShipmentRequest | 

try {
    $result = $apiInstance->purchaseShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->purchaseShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\Shipping\V1\Model\PurchaseShipmentRequest**](../Model/PurchaseShipmentRequest.md)|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\PurchaseShipmentResponse**](../Model/PurchaseShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveShippingLabel**
> \TNT\Amazon\Shipping\V1\Model\RetrieveShippingLabelResponse retrieveShippingLabel($shipment_id, $tracking_id, $body)



Retrieve shipping label based on the shipment id and tracking id.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Shipping\V1\Api\ShippingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | 
$tracking_id = "tracking_id_example"; // string | 
$body = new \TNT\Amazon\Shipping\V1\Model\RetrieveShippingLabelRequest(); // \TNT\Amazon\Shipping\V1\Model\RetrieveShippingLabelRequest | 

try {
    $result = $apiInstance->retrieveShippingLabel($shipment_id, $tracking_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingApi->retrieveShippingLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**|  |
 **tracking_id** | **string**|  |
 **body** | [**\TNT\Amazon\Shipping\V1\Model\RetrieveShippingLabelRequest**](../Model/RetrieveShippingLabelRequest.md)|  |

### Return type

[**\TNT\Amazon\Shipping\V1\Model\RetrieveShippingLabelResponse**](../Model/RetrieveShippingLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

