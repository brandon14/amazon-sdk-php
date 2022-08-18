# TNT\Amazon\ProductPricing\V0\ProductPricingApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompetitivePricing**](ProductPricingApi.md#getCompetitivePricing) | **GET** /products/pricing/v0/competitivePrice | 
[**getItemOffers**](ProductPricingApi.md#getItemOffers) | **GET** /products/pricing/v0/items/{Asin}/offers | 
[**getItemOffersBatch**](ProductPricingApi.md#getItemOffersBatch) | **POST** /batches/products/pricing/v0/itemOffers | 
[**getListingOffers**](ProductPricingApi.md#getListingOffers) | **GET** /products/pricing/v0/listings/{SellerSKU}/offers | 
[**getListingOffersBatch**](ProductPricingApi.md#getListingOffersBatch) | **POST** /batches/products/pricing/v0/listingOffers | 
[**getPricing**](ProductPricingApi.md#getPricing) | **GET** /products/pricing/v0/price | 


# **getCompetitivePricing**
> \TNT\Amazon\ProductPricing\V0\Model\GetPricingResponse getCompetitivePricing($marketplace_id, $item_type, $asins, $skus, $customer_type)



Returns competitive pricing information for a seller's offer listings based on seller SKU or ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 20 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ProductPricing\V0\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = "item_type_example"; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
$asins = array("asins_example"); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array("skus_example"); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$customer_type = "customer_type_example"; // string | Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer.

try {
    $result = $apiInstance->getCompetitivePricing($marketplace_id, $item_type, $asins, $skus, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getCompetitivePricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. |
 **asins** | [**string[]**](../Model/string.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/string.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **customer_type** | **string**| Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. | [optional]

### Return type

[**\TNT\Amazon\ProductPricing\V0\Model\GetPricingResponse**](../Model/GetPricingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemOffers**
> \TNT\Amazon\ProductPricing\V0\Model\GetOffersResponse getItemOffers($marketplace_id, $item_condition, $asin, $customer_type)



Returns the lowest priced offers for a single item based on ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ProductPricing\V0\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = "item_condition_example"; // string | Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.
$customer_type = "customer_type_example"; // string | Indicates whether to request Consumer or Business offers. Default is Consumer.

try {
    $result = $apiInstance->getItemOffers($marketplace_id, $item_condition, $asin, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **customer_type** | **string**| Indicates whether to request Consumer or Business offers. Default is Consumer. | [optional]

### Return type

[**\TNT\Amazon\ProductPricing\V0\Model\GetOffersResponse**](../Model/GetOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemOffersBatch**
> \TNT\Amazon\ProductPricing\V0\Model\GetItemOffersBatchResponse getItemOffersBatch($get_item_offers_batch_request_body)



Returns the lowest priced offers for a batch of items based on ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | .5 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ProductPricing\V0\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_item_offers_batch_request_body = new \TNT\Amazon\ProductPricing\V0\Model\GetItemOffersBatchRequest(); // \TNT\Amazon\ProductPricing\V0\Model\GetItemOffersBatchRequest | 

try {
    $result = $apiInstance->getItemOffersBatch($get_item_offers_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getItemOffersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_item_offers_batch_request_body** | [**\TNT\Amazon\ProductPricing\V0\Model\GetItemOffersBatchRequest**](../Model/GetItemOffersBatchRequest.md)|  |

### Return type

[**\TNT\Amazon\ProductPricing\V0\Model\GetItemOffersBatchResponse**](../Model/GetItemOffersBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingOffers**
> \TNT\Amazon\ProductPricing\V0\Model\GetOffersResponse getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type)



Returns the lowest priced offers for a single SKU listing.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ProductPricing\V0\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = "item_condition_example"; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$seller_sku = "seller_sku_example"; // string | Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$customer_type = "customer_type_example"; // string | Indicates whether to request Consumer or Business offers. Default is Consumer.

try {
    $result = $apiInstance->getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getListingOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **seller_sku** | **string**| Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. |
 **customer_type** | **string**| Indicates whether to request Consumer or Business offers. Default is Consumer. | [optional]

### Return type

[**\TNT\Amazon\ProductPricing\V0\Model\GetOffersResponse**](../Model/GetOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingOffersBatch**
> \TNT\Amazon\ProductPricing\V0\Model\GetListingOffersBatchResponse getListingOffersBatch($get_listing_offers_batch_request_body)



Returns the lowest priced offers for a batch of listings by SKU.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | .5 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ProductPricing\V0\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_listing_offers_batch_request_body = new \TNT\Amazon\ProductPricing\V0\Model\GetListingOffersBatchRequest(); // \TNT\Amazon\ProductPricing\V0\Model\GetListingOffersBatchRequest | 

try {
    $result = $apiInstance->getListingOffersBatch($get_listing_offers_batch_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getListingOffersBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_listing_offers_batch_request_body** | [**\TNT\Amazon\ProductPricing\V0\Model\GetListingOffersBatchRequest**](../Model/GetListingOffersBatchRequest.md)|  |

### Return type

[**\TNT\Amazon\ProductPricing\V0\Model\GetListingOffersBatchResponse**](../Model/GetListingOffersBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPricing**
> \TNT\Amazon\ProductPricing\V0\Model\GetPricingResponse getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type)



Returns pricing information for a seller's offer listings based on seller SKU or ASIN.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 20 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new TNT\Amazon\ProductPricing\V0\Api\ProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = "marketplace_id_example"; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = "item_type_example"; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
$asins = array("asins_example"); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array("skus_example"); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$item_condition = "item_condition_example"; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$offer_type = "offer_type_example"; // string | Indicates whether to request pricing information for the seller's B2C or B2B offers. Default is B2C.

try {
    $result = $apiInstance->getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductPricingApi->getPricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. |
 **asins** | [**string[]**](../Model/string.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/string.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. | [optional]
 **offer_type** | **string**| Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. | [optional]

### Return type

[**\TNT\Amazon\ProductPricing\V0\Model\GetPricingResponse**](../Model/GetPricingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

