# TNT\Amazon\Tokens\V20210301\TokensApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestrictedDataToken**](TokensApi.md#createRestrictedDataToken) | **POST** /tokens/2021-03-01/restrictedDataToken | 


# **createRestrictedDataToken**
> \TNT\Amazon\Tokens\V20210301\Model\CreateRestrictedDataTokenResponse createRestrictedDataToken($body)



Returns a Restricted Data Token (RDT) for one or more restricted resources that you specify. A restricted resource is the HTTP method and path from a restricted operation that returns Personally Identifiable Information (PII), plus a dataElements value that indicates the type of PII requested. See the Tokens API Use Case Guide for a list of restricted operations. Use the RDT returned here as the access token in subsequent calls to the corresponding restricted operations.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 1 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\Tokens\V20210301\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\Tokens\V20210301\Model\CreateRestrictedDataTokenRequest(); // \TNT\Amazon\Tokens\V20210301\Model\CreateRestrictedDataTokenRequest | The restricted data token request details.

try {
    $result = $apiInstance->createRestrictedDataToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createRestrictedDataToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TNT\Amazon\Tokens\V20210301\Model\CreateRestrictedDataTokenRequest**](../Model/CreateRestrictedDataTokenRequest.md)| The restricted data token request details. |

### Return type

[**\TNT\Amazon\Tokens\V20210301\Model\CreateRestrictedDataTokenResponse**](../Model/CreateRestrictedDataTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

