# 
The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://sellercentral.amazon.com/gp/mws/contactus.html](https://sellercentral.amazon.com/gp/mws/contactus.html)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/brandon14/amazon-product-pricing-v0.git"
    }
  ],
  "require": {
    "brandon14/amazon-product-pricing-v0": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProductPricingApi* | [**getCompetitivePricing**](docs/Api/ProductPricingApi.md#getcompetitivepricing) | **GET** /products/pricing/v0/competitivePrice | 
*ProductPricingApi* | [**getItemOffers**](docs/Api/ProductPricingApi.md#getitemoffers) | **GET** /products/pricing/v0/items/{Asin}/offers | 
*ProductPricingApi* | [**getItemOffersBatch**](docs/Api/ProductPricingApi.md#getitemoffersbatch) | **POST** /batches/products/pricing/v0/itemOffers | 
*ProductPricingApi* | [**getListingOffers**](docs/Api/ProductPricingApi.md#getlistingoffers) | **GET** /products/pricing/v0/listings/{SellerSKU}/offers | 
*ProductPricingApi* | [**getListingOffersBatch**](docs/Api/ProductPricingApi.md#getlistingoffersbatch) | **POST** /batches/products/pricing/v0/listingOffers | 
*ProductPricingApi* | [**getPricing**](docs/Api/ProductPricingApi.md#getpricing) | **GET** /products/pricing/v0/price | 


## Documentation For Models

 - [ASINIdentifier](docs/Model/ASINIdentifier.md)
 - [Asin](docs/Model/Asin.md)
 - [AttributeSetList](docs/Model/AttributeSetList.md)
 - [BatchOffersRequestParams](docs/Model/BatchOffersRequestParams.md)
 - [BatchOffersResponse](docs/Model/BatchOffersResponse.md)
 - [BatchRequest](docs/Model/BatchRequest.md)
 - [BuyBoxEligibleOffers](docs/Model/BuyBoxEligibleOffers.md)
 - [BuyBoxPriceType](docs/Model/BuyBoxPriceType.md)
 - [BuyBoxPrices](docs/Model/BuyBoxPrices.md)
 - [CompetitivePriceList](docs/Model/CompetitivePriceList.md)
 - [CompetitivePriceType](docs/Model/CompetitivePriceType.md)
 - [CompetitivePricingType](docs/Model/CompetitivePricingType.md)
 - [ConditionType](docs/Model/ConditionType.md)
 - [CustomerType](docs/Model/CustomerType.md)
 - [DetailedShippingTimeType](docs/Model/DetailedShippingTimeType.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [Errors](docs/Model/Errors.md)
 - [FulfillmentChannelType](docs/Model/FulfillmentChannelType.md)
 - [GetItemOffersBatchRequest](docs/Model/GetItemOffersBatchRequest.md)
 - [GetItemOffersBatchResponse](docs/Model/GetItemOffersBatchResponse.md)
 - [GetListingOffersBatchRequest](docs/Model/GetListingOffersBatchRequest.md)
 - [GetListingOffersBatchResponse](docs/Model/GetListingOffersBatchResponse.md)
 - [GetOffersHttpStatusLine](docs/Model/GetOffersHttpStatusLine.md)
 - [GetOffersResponse](docs/Model/GetOffersResponse.md)
 - [GetOffersResult](docs/Model/GetOffersResult.md)
 - [GetPricingResponse](docs/Model/GetPricingResponse.md)
 - [HttpMethod](docs/Model/HttpMethod.md)
 - [HttpRequestHeaders](docs/Model/HttpRequestHeaders.md)
 - [HttpResponseHeaders](docs/Model/HttpResponseHeaders.md)
 - [HttpUri](docs/Model/HttpUri.md)
 - [IdentifierType](docs/Model/IdentifierType.md)
 - [ItemCondition](docs/Model/ItemCondition.md)
 - [ItemIdentifier](docs/Model/ItemIdentifier.md)
 - [ItemOffersRequest](docs/Model/ItemOffersRequest.md)
 - [ItemOffersRequestList](docs/Model/ItemOffersRequestList.md)
 - [ItemOffersRequestParams](docs/Model/ItemOffersRequestParams.md)
 - [ItemOffersResponse](docs/Model/ItemOffersResponse.md)
 - [ItemOffersResponseList](docs/Model/ItemOffersResponseList.md)
 - [ListingOffersRequest](docs/Model/ListingOffersRequest.md)
 - [ListingOffersRequestList](docs/Model/ListingOffersRequestList.md)
 - [ListingOffersRequestParams](docs/Model/ListingOffersRequestParams.md)
 - [ListingOffersResponse](docs/Model/ListingOffersResponse.md)
 - [ListingOffersResponseList](docs/Model/ListingOffersResponseList.md)
 - [LowestPriceType](docs/Model/LowestPriceType.md)
 - [LowestPrices](docs/Model/LowestPrices.md)
 - [MarketplaceId](docs/Model/MarketplaceId.md)
 - [MoneyType](docs/Model/MoneyType.md)
 - [NumberOfOfferListingsList](docs/Model/NumberOfOfferListingsList.md)
 - [NumberOfOffers](docs/Model/NumberOfOffers.md)
 - [OfferCountType](docs/Model/OfferCountType.md)
 - [OfferCustomerType](docs/Model/OfferCustomerType.md)
 - [OfferDetail](docs/Model/OfferDetail.md)
 - [OfferDetailList](docs/Model/OfferDetailList.md)
 - [OfferListingCountType](docs/Model/OfferListingCountType.md)
 - [OfferType](docs/Model/OfferType.md)
 - [OffersList](docs/Model/OffersList.md)
 - [Points](docs/Model/Points.md)
 - [Price](docs/Model/Price.md)
 - [PriceList](docs/Model/PriceList.md)
 - [PriceType](docs/Model/PriceType.md)
 - [PrimeInformationType](docs/Model/PrimeInformationType.md)
 - [Product](docs/Model/Product.md)
 - [QuantityDiscountPriceType](docs/Model/QuantityDiscountPriceType.md)
 - [QuantityDiscountType](docs/Model/QuantityDiscountType.md)
 - [RelationshipList](docs/Model/RelationshipList.md)
 - [SalesRankList](docs/Model/SalesRankList.md)
 - [SalesRankType](docs/Model/SalesRankType.md)
 - [SellerFeedbackType](docs/Model/SellerFeedbackType.md)
 - [SellerSKUIdentifier](docs/Model/SellerSKUIdentifier.md)
 - [ShipsFromType](docs/Model/ShipsFromType.md)
 - [Summary](docs/Model/Summary.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author


