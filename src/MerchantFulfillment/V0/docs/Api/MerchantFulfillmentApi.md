# TNT\Amazon\MerchantFulfillment\V0\MerchantFulfillmentApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelShipment**](MerchantFulfillmentApi.md#cancelShipment) | **DELETE** /mfn/v0/shipments/{shipmentId} | 
[**cancelShipmentOld**](MerchantFulfillmentApi.md#cancelShipmentOld) | **PUT** /mfn/v0/shipments/{shipmentId}/cancel | 
[**createShipment**](MerchantFulfillmentApi.md#createShipment) | **POST** /mfn/v0/shipments | 
[**getAdditionalSellerInputs**](MerchantFulfillmentApi.md#getAdditionalSellerInputs) | **POST** /mfn/v0/additionalSellerInputs | 
[**getAdditionalSellerInputsOld**](MerchantFulfillmentApi.md#getAdditionalSellerInputsOld) | **POST** /mfn/v0/sellerInputs | 
[**getEligibleShipmentServices**](MerchantFulfillmentApi.md#getEligibleShipmentServices) | **POST** /mfn/v0/eligibleShippingServices | 
[**getEligibleShipmentServicesOld**](MerchantFulfillmentApi.md#getEligibleShipmentServicesOld) | **POST** /mfn/v0/eligibleServices | 
[**getShipment**](MerchantFulfillmentApi.md#getShipment) | **GET** /mfn/v0/shipments/{shipmentId} | 


# **cancelShipment**
> \TNT\Amazon\MerchantFulfillment\V0\Model\CancelShipmentResponse cancelShipment($shipment_id)



Cancel the shipment indicated by the specified shipment identifier.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\CancelShipmentResponse**](../Model/CancelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelShipmentOld**
> \TNT\Amazon\MerchantFulfillment\V0\Model\CancelShipmentResponse cancelShipmentOld($shipment_id)



Cancel the shipment indicated by the specified shipment identifer.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipmentOld($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->cancelShipmentOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment to cancel. |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\CancelShipmentResponse**](../Model/CancelShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShipment**
> \TNT\Amazon\MerchantFulfillment\V0\Model\CreateShipmentResponse createShipment($body)



Create a shipment with the information provided.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\MerchantFulfillment\V0\Model\CreateShipmentRequest(); // \TNT\Amazon\MerchantFulfillment\V0\Model\CreateShipmentRequest | 

try {
    $result = $apiInstance->createShipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->createShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\CreateShipmentRequest**](../Model/CreateShipmentRequest.md)|  |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\CreateShipmentResponse**](../Model/CreateShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalSellerInputs**
> \TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsResponse getAdditionalSellerInputs($body)



Gets a list of additional seller inputs required for a ship method. This is generally used for international shipping.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsRequest(); // \TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsRequest | 

try {
    $result = $apiInstance->getAdditionalSellerInputs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getAdditionalSellerInputs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsRequest**](../Model/GetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsResponse**](../Model/GetAdditionalSellerInputsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdditionalSellerInputsOld**
> \TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsResponse getAdditionalSellerInputsOld($body)



Get a list of additional seller inputs required for a ship method. This is generally used for international shipping.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsRequest(); // \TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsRequest | 

try {
    $result = $apiInstance->getAdditionalSellerInputsOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getAdditionalSellerInputsOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsRequest**](../Model/GetAdditionalSellerInputsRequest.md)|  |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\GetAdditionalSellerInputsResponse**](../Model/GetAdditionalSellerInputsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEligibleShipmentServices**
> \TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesResponse getEligibleShipmentServices($body)



Returns a list of shipping service offers that satisfy the specified shipment request details.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesRequest(); // \TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesRequest | 

try {
    $result = $apiInstance->getEligibleShipmentServices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getEligibleShipmentServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesRequest**](../Model/GetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesResponse**](../Model/GetEligibleShipmentServicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEligibleShipmentServicesOld**
> \TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesResponse getEligibleShipmentServicesOld($body)



Returns a list of shipping service offers that satisfy the specified shipment request details.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesRequest(); // \TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesRequest | 

try {
    $result = $apiInstance->getEligibleShipmentServicesOld($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getEligibleShipmentServicesOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesRequest**](../Model/GetEligibleShipmentServicesRequest.md)|  |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\GetEligibleShipmentServicesResponse**](../Model/GetEligibleShipmentServicesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShipment**
> \TNT\Amazon\MerchantFulfillment\V0\Model\GetShipmentResponse getShipment($shipment_id)



Returns the shipment information for an existing shipment.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The Amazon-defined shipment identifier for the shipment.

try {
    $result = $apiInstance->getShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipment_id** | **string**| The Amazon-defined shipment identifier for the shipment. |

### Return type

[**\TNT\Amazon\MerchantFulfillment\V0\Model\GetShipmentResponse**](../Model/GetShipmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

