# TNT\Amazon\AplusContent\V20201101\AplusContentApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContentDocument**](AplusContentApi.md#createContentDocument) | **POST** /aplus/2020-11-01/contentDocuments | 
[**getContentDocument**](AplusContentApi.md#getContentDocument) | **GET** /aplus/2020-11-01/contentDocuments/{contentReferenceKey} | 
[**listContentDocumentAsinRelations**](AplusContentApi.md#listContentDocumentAsinRelations) | **GET** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins | 
[**postContentDocumentApprovalSubmission**](AplusContentApi.md#postContentDocumentApprovalSubmission) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/approvalSubmissions | 
[**postContentDocumentAsinRelations**](AplusContentApi.md#postContentDocumentAsinRelations) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/asins | 
[**postContentDocumentSuspendSubmission**](AplusContentApi.md#postContentDocumentSuspendSubmission) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey}/suspendSubmissions | 
[**searchContentDocuments**](AplusContentApi.md#searchContentDocuments) | **GET** /aplus/2020-11-01/contentDocuments | 
[**searchContentPublishRecords**](AplusContentApi.md#searchContentPublishRecords) | **GET** /aplus/2020-11-01/contentPublishRecords | 
[**updateContentDocument**](AplusContentApi.md#updateContentDocument) | **POST** /aplus/2020-11-01/contentDocuments/{contentReferenceKey} | 
[**validateContentDocumentAsinRelations**](AplusContentApi.md#validateContentDocumentAsinRelations) | **POST** /aplus/2020-11-01/contentAsinValidations | 


# **createContentDocument**
> \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentResponse createContentDocument($marketplace_id, $post_content_document_request)



Creates a new A+ Content document.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_request = new \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest(); // \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest | The content document request details.

try {
    $result = $apiInstance->createContentDocument($marketplace_id, $post_content_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->createContentDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_request** | [**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest**](../Model/PostContentDocumentRequest.md)| The content document request details. |

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentResponse**](../Model/PostContentDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentDocument**
> \TNT\Amazon\AplusContent\V20201101\Model\GetContentDocumentResponse getContentDocument($content_reference_key, $marketplace_id, $included_data_set)



Returns an A+ Content document, if available.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_reference_key = "content_reference_key_example"; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$included_data_set = array("included_data_set_example"); // string[] | The set of A+ Content data types to include in the response.

try {
    $result = $apiInstance->getContentDocument($content_reference_key, $marketplace_id, $included_data_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->getContentDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **included_data_set** | [**string[]**](../Model/string.md)| The set of A+ Content data types to include in the response. |

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\GetContentDocumentResponse**](../Model/GetContentDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContentDocumentAsinRelations**
> \TNT\Amazon\AplusContent\V20201101\Model\ListContentDocumentAsinRelationsResponse listContentDocumentAsinRelations($content_reference_key, $marketplace_id, $included_data_set, $asin_set, $page_token)



Returns a list of ASINs related to the specified A+ Content document, if available. If you do not include the asinSet parameter, the operation returns all ASINs related to the content document.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_reference_key = "content_reference_key_example"; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$included_data_set = array("included_data_set_example"); // string[] | The set of A+ Content data types to include in the response. If you do not include this parameter, the operation returns the related ASINs without metadata.
$asin_set = array("asin_set_example"); // string[] | The set of ASINs.
$page_token = "page_token_example"; // string | A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.

try {
    $result = $apiInstance->listContentDocumentAsinRelations($content_reference_key, $marketplace_id, $included_data_set, $asin_set, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->listContentDocumentAsinRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **included_data_set** | [**string[]**](../Model/string.md)| The set of A+ Content data types to include in the response. If you do not include this parameter, the operation returns the related ASINs without metadata. | [optional]
 **asin_set** | [**string[]**](../Model/string.md)| The set of ASINs. | [optional]
 **page_token** | **string**| A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. | [optional]

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\ListContentDocumentAsinRelationsResponse**](../Model/ListContentDocumentAsinRelationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentDocumentApprovalSubmission**
> \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentApprovalSubmissionResponse postContentDocumentApprovalSubmission($content_reference_key, $marketplace_id)



Submits an A+ Content document for review, approval, and publishing.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_reference_key = "content_reference_key_example"; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.

try {
    $result = $apiInstance->postContentDocumentApprovalSubmission($content_reference_key, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->postContentDocumentApprovalSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentApprovalSubmissionResponse**](../Model/PostContentDocumentApprovalSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentDocumentAsinRelations**
> \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentAsinRelationsResponse postContentDocumentAsinRelations($content_reference_key, $marketplace_id, $post_content_document_asin_relations_request)



Replaces all ASINs related to the specified A+ Content document, if available. This may add or remove ASINs, depending on the current set of related ASINs. Removing an ASIN has the side effect of suspending the content document from that ASIN.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_reference_key = "content_reference_key_example"; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_asin_relations_request = new \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentAsinRelationsRequest(); // \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentAsinRelationsRequest | The content document ASIN relations request details.

try {
    $result = $apiInstance->postContentDocumentAsinRelations($content_reference_key, $marketplace_id, $post_content_document_asin_relations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->postContentDocumentAsinRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_asin_relations_request** | [**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentAsinRelationsRequest**](../Model/PostContentDocumentAsinRelationsRequest.md)| The content document ASIN relations request details. |

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentAsinRelationsResponse**](../Model/PostContentDocumentAsinRelationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentDocumentSuspendSubmission**
> \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentSuspendSubmissionResponse postContentDocumentSuspendSubmission($content_reference_key, $marketplace_id)



Submits a request to suspend visible A+ Content. This neither deletes the content document nor the ASIN relations.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_reference_key = "content_reference_key_example"; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier.
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.

try {
    $result = $apiInstance->postContentDocumentSuspendSubmission($content_reference_key, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->postContentDocumentSuspendSubmission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentSuspendSubmissionResponse**](../Model/PostContentDocumentSuspendSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContentDocuments**
> \TNT\Amazon\AplusContent\V20201101\Model\SearchContentDocumentsResponse searchContentDocuments($marketplace_id, $page_token)



Returns a list of all A+ Content documents assigned to a selling partner. This operation returns only the metadata of the A+ Content documents. Call the getContentDocument operation to get the actual contents of the A+ Content documents.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$page_token = "page_token_example"; // string | A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.

try {
    $result = $apiInstance->searchContentDocuments($marketplace_id, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->searchContentDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **page_token** | **string**| A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. | [optional]

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\SearchContentDocumentsResponse**](../Model/SearchContentDocumentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContentPublishRecords**
> \TNT\Amazon\AplusContent\V20201101\Model\SearchContentPublishRecordsResponse searchContentPublishRecords($marketplace_id, $asin, $page_token)



Searches for A+ Content publishing records, if available.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN).
$page_token = "page_token_example"; // string | A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations.

try {
    $result = $apiInstance->searchContentPublishRecords($marketplace_id, $asin, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->searchContentPublishRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN). |
 **page_token** | **string**| A page token from the nextPageToken response element returned by your previous call to this operation. nextPageToken is returned when the results of a call exceed the page size. To get the next page of results, call the operation and include pageToken as the only parameter. Specifying pageToken with any other parameter will cause the request to fail. When no nextPageToken value is returned there are no more pages to return. A pageToken value is not usable across different operations. | [optional]

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\SearchContentPublishRecordsResponse**](../Model/SearchContentPublishRecordsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContentDocument**
> \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentResponse updateContentDocument($content_reference_key, $marketplace_id, $post_content_document_request)



Updates an existing A+ Content document.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_reference_key = "content_reference_key_example"; // string | The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier.
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_request = new \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest(); // \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest | The content document request details.

try {
    $result = $apiInstance->updateContentDocument($content_reference_key, $marketplace_id, $post_content_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->updateContentDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_reference_key** | **string**| The unique reference key for the A+ Content document. A content reference key cannot form a permalink and may change in the future. A content reference key is not guaranteed to match any A+ Content identifier. |
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_request** | [**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest**](../Model/PostContentDocumentRequest.md)| The content document request details. |

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentResponse**](../Model/PostContentDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateContentDocumentAsinRelations**
> \TNT\Amazon\AplusContent\V20201101\Model\ValidateContentDocumentAsinRelationsResponse validateContentDocumentAsinRelations($marketplace_id, $post_content_document_request, $asin_set)



Checks if the A+ Content document is valid for use on a set of ASINs.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\AplusContent\V20201101\Api\AplusContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | The identifier for the marketplace where the A+ Content is published.
$post_content_document_request = new \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest(); // \TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest | The content document request details.
$asin_set = array("asin_set_example"); // string[] | The set of ASINs.

try {
    $result = $apiInstance->validateContentDocumentAsinRelations($marketplace_id, $post_content_document_request, $asin_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AplusContentApi->validateContentDocumentAsinRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| The identifier for the marketplace where the A+ Content is published. |
 **post_content_document_request** | [**\TNT\Amazon\AplusContent\V20201101\Model\PostContentDocumentRequest**](../Model/PostContentDocumentRequest.md)| The content document request details. |
 **asin_set** | [**string[]**](../Model/string.md)| The set of ASINs. | [optional]

### Return type

[**\TNT\Amazon\AplusContent\V20201101\Model\ValidateContentDocumentAsinRelationsResponse**](../Model/ValidateContentDocumentAsinRelationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

