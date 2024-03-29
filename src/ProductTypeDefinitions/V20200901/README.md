# 
The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).  For more information, see the [Product Type Definitions API Use Case Guide](doc:product-type-api-use-case-guide).

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2020-09-01
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
      "url": "https://github.com/brandon14/amazon-product-type-definitions-v20200901.git"
    }
  ],
  "require": {
    "brandon14/amazon-product-type-definitions-v20200901": "*@dev"
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

$apiInstance = new TNT\Amazon\ProductTypeDefinitions\V20200901\Api\DefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$product_type = "LUGGAGE"; // string | The Amazon product type name.
$marketplace_ids = array("ATVPDKIKX0DER"); // string[] | A comma-delimited list of Amazon marketplace identifiers for the request. Note: This parameter is limited to one marketplaceId at this time.
$seller_id = "seller_id_example"; // string | A selling partner identifier. When provided, seller-specific requirements and values are populated within the product type definition schema, such as brand names associated with the selling partner.
$product_type_version = "LATEST"; // string | The version of the Amazon product type to retrieve. Defaults to \"LATEST\",. Prerelease versions of product type definitions may be retrieved with \"RELEASE_CANDIDATE\". If no prerelease version is currently available, the \"LATEST\" live version will be provided.
$requirements = "LISTING"; // string | The name of the requirements set to retrieve requirements for.
$requirements_enforced = "ENFORCED"; // string | Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all the required attributes being present (such as for partial updates).
$locale = "DEFAULT"; // string | Locale for retrieving display labels and other presentation details. Defaults to the default language of the first marketplace in the request.

try {
    $result = $apiInstance->getDefinitionsProductType($product_type, $marketplace_ids, $seller_id, $product_type_version, $requirements, $requirements_enforced, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefinitionsApi->getDefinitionsProductType: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefinitionsApi* | [**getDefinitionsProductType**](docs/Api/DefinitionsApi.md#getdefinitionsproducttype) | **GET** /definitions/2020-09-01/productTypes/{productType} | 
*DefinitionsApi* | [**searchDefinitionsProductTypes**](docs/Api/DefinitionsApi.md#searchdefinitionsproducttypes) | **GET** /definitions/2020-09-01/productTypes | 


## Documentation For Models

 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [ProductType](docs/Model/ProductType.md)
 - [ProductTypeDefinition](docs/Model/ProductTypeDefinition.md)
 - [ProductTypeList](docs/Model/ProductTypeList.md)
 - [ProductTypeVersion](docs/Model/ProductTypeVersion.md)
 - [PropertyGroup](docs/Model/PropertyGroup.md)
 - [SchemaLink](docs/Model/SchemaLink.md)
 - [SchemaLinkLink](docs/Model/SchemaLinkLink.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



