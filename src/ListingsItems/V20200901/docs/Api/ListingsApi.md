# TNT\Amazon\ListingsItems\V20200901\ListingsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteListingsItem**](ListingsApi.md#deleteListingsItem) | **DELETE** /listings/2020-09-01/items/{sellerId}/{sku} | 
[**patchListingsItem**](ListingsApi.md#patchListingsItem) | **PATCH** /listings/2020-09-01/items/{sellerId}/{sku} | 
[**putListingsItem**](ListingsApi.md#putListingsItem) | **PUT** /listings/2020-09-01/items/{sellerId}/{sku} | 


# **deleteListingsItem**
> \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemSubmissionResponse deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale)



Delete a listings item for a selling partner.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ListingsItems\V20200901\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = "en_US"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->deleteListingsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. | [optional]

### Return type

[**\TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemSubmissionResponse**](../Model/ListingsItemSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchListingsItem**
> \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemSubmissionResponse patchListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale)



Partially update (patch) a listings item for a selling partner. Only top-level listings item attributes can be patched. Patching nested attributes is not supported.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ListingsItems\V20200901\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$body = new \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemPatchRequest(); // \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemPatchRequest | The request body schema for the patchListingsItem operation.
$issue_locale = "en_US"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->patchListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->patchListingsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **body** | [**\TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemPatchRequest**](../Model/ListingsItemPatchRequest.md)| The request body schema for the patchListingsItem operation. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. | [optional]

### Return type

[**\TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemSubmissionResponse**](../Model/ListingsItemSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putListingsItem**
> \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemSubmissionResponse putListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale)



Creates a new or fully-updates an existing listings item for a selling partner.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ListingsItems\V20200901\Api\ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = "sku_example"; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$body = new \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemPutRequest(); // \TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemPutRequest | The request body schema for the putListingsItem operation.
$issue_locale = "en_US"; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". Localized messages default to \"en_US\" when a localization is not available in the specified locale.

try {
    $result = $apiInstance->putListingsItem($seller_id, $sku, $marketplace_ids, $body, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingsApi->putListingsItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **body** | [**\TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemPutRequest**](../Model/ListingsItemPutRequest.md)| The request body schema for the putListingsItem operation. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. | [optional]

### Return type

[**\TNT\Amazon\ListingsItems\V20200901\Model\ListingsItemSubmissionResponse**](../Model/ListingsItemSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

