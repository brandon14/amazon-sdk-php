# 
The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, see the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2020-12-01-use-case-guide).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2020-12-01
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
      "url": "https://github.com/brandon14/amazon-catalog-items-v20201201.git"
    }
  ],
  "require": {
    "brandon14/amazon-catalog-items-v20201201": "*@dev"
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

$apiInstance = new TNT\Amazon\CatalogItems\V20201201\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = "asin_example"; // string | The Amazon Standard Identification Number (ASIN) of the item.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
$included_data = array("summaries"); // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$locale = "en_US"; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->getCatalogItem($asin, $marketplace_ids, $included_data, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CatalogApi* | [**getCatalogItem**](docs/Api/CatalogApi.md#getcatalogitem) | **GET** /catalog/2020-12-01/items/{asin} | 
*CatalogApi* | [**searchCatalogItems**](docs/Api/CatalogApi.md#searchcatalogitems) | **GET** /catalog/2020-12-01/items | 


## Documentation For Models

 - [BrandRefinement](docs/Model/BrandRefinement.md)
 - [ClassificationRefinement](docs/Model/ClassificationRefinement.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [Item](docs/Model/Item.md)
 - [ItemAsin](docs/Model/ItemAsin.md)
 - [ItemAttributes](docs/Model/ItemAttributes.md)
 - [ItemIdentifier](docs/Model/ItemIdentifier.md)
 - [ItemIdentifiers](docs/Model/ItemIdentifiers.md)
 - [ItemIdentifiersByMarketplace](docs/Model/ItemIdentifiersByMarketplace.md)
 - [ItemImage](docs/Model/ItemImage.md)
 - [ItemImages](docs/Model/ItemImages.md)
 - [ItemImagesByMarketplace](docs/Model/ItemImagesByMarketplace.md)
 - [ItemProductTypeByMarketplace](docs/Model/ItemProductTypeByMarketplace.md)
 - [ItemProductTypes](docs/Model/ItemProductTypes.md)
 - [ItemSalesRank](docs/Model/ItemSalesRank.md)
 - [ItemSalesRanks](docs/Model/ItemSalesRanks.md)
 - [ItemSalesRanksByMarketplace](docs/Model/ItemSalesRanksByMarketplace.md)
 - [ItemSearchResults](docs/Model/ItemSearchResults.md)
 - [ItemSummaries](docs/Model/ItemSummaries.md)
 - [ItemSummaryByMarketplace](docs/Model/ItemSummaryByMarketplace.md)
 - [ItemVariations](docs/Model/ItemVariations.md)
 - [ItemVariationsByMarketplace](docs/Model/ItemVariationsByMarketplace.md)
 - [ItemVendorDetails](docs/Model/ItemVendorDetails.md)
 - [ItemVendorDetailsByMarketplace](docs/Model/ItemVendorDetailsByMarketplace.md)
 - [Pagination](docs/Model/Pagination.md)
 - [Refinements](docs/Model/Refinements.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



