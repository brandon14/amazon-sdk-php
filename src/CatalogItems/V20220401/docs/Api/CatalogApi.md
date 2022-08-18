# TNT\Amazon\CatalogItems\V20220401\CatalogApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem**](CatalogApi.md#getCatalogItem) | **GET** /catalog/2022-04-01/items/{asin} | 
[**searchCatalogItems**](CatalogApi.md#searchCatalogItems) | **GET** /catalog/2022-04-01/items | 


# **getCatalogItem**
> \TNT\Amazon\CatalogItems\V20220401\Model\Item getCatalogItem($asin, $marketplace_ids, $included_data, $locale)



Retrieves details for an item in the Amazon catalog.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may observe higher rate and burst values than those shown here. For more information, refer to the [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\CatalogItems\V20220401\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
$included_data = array("[\"summaries\"]"); // string[] | A comma-delimited list of data sets to include in the response. Default: `summaries`.
$locale = "en_US"; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->getCatalogItem($asin, $marketplace_ids, $included_data, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. | [optional] [default to [&quot;summaries&quot;]]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\TNT\Amazon\CatalogItems\V20220401\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchCatalogItems**
> \TNT\Amazon\CatalogItems\V20220401\Model\ItemSearchResults searchCatalogItems($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale)



Search for and return a list of Amazon catalog items and associated information either by identifier or by keywords.  **Usage Plans:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may observe higher rate and burst values than those shown here. For more information, refer to the [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\CatalogItems\V20220401\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$identifiers = array("shoes"); // string[] | A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with `keywords`.
$identifiers_type = "ASIN"; // string | Type of product identifiers to search the Amazon catalog for. **Note:** Required when `identifiers` are provided.
$included_data = array("[\"summaries\"]"); // string[] | A comma-delimited list of data sets to include in the response. Default: `summaries`.
$locale = "en_US"; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.
$seller_id = "seller_id_example"; // string | A selling partner identifier, such as a seller account or vendor code. **Note:** Required when `identifiersType` is `SKU`.
$keywords = array("shoes"); // string[] | A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with `identifiers`.
$brand_names = array("Beautiful Boats"); // string[] | A comma-delimited list of brand names to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
$classification_ids = array("12345678"); // string[] | A comma-delimited list of classification identifiers to limit the search for `keywords`-based queries. **Note:** Cannot be used with `identifiers`.
$page_size = 10; // int | Number of results to be returned per page.
$page_token = "sdlkj234lkj234lksjdflkjwdflkjsfdlkj234234234234"; // string | A token to fetch a certain page when there are multiple pages worth of results.
$keywords_locale = "en_US"; // string | The language of the keywords provided for `keywords`-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with `identifiers`.

try {
    $result = $apiInstance->searchCatalogItems($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->searchCatalogItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **identifiers** | [**string[]**](../Model/string.md)| A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. | [optional]
 **identifiers_type** | **string**| Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. | [optional]
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. | [optional] [default to [&quot;summaries&quot;]]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]
 **seller_id** | **string**| A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. | [optional]
 **keywords** | [**string[]**](../Model/string.md)| A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. | [optional]
 **brand_names** | [**string[]**](../Model/string.md)| A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. | [optional]
 **classification_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. | [optional]
 **page_size** | **int**| Number of results to be returned per page. | [optional] [default to 10]
 **page_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. | [optional]
 **keywords_locale** | **string**| The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. | [optional]

### Return type

[**\TNT\Amazon\CatalogItems\V20220401\Model\ItemSearchResults**](../Model/ItemSearchResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

