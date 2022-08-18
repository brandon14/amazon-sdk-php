# 
With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v1
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
      "url": "https://github.com/brandon14/amazon-fba-inbound-eligibility-v1.git"
    }
  ],
  "require": {
    "brandon14/amazon-fba-inbound-eligibility-v1": "*@dev"
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

$apiInstance = new TNT\Amazon\FbaInboundEligibility\V1\Api\FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = "asin_example"; // string | The ASIN of the item for which you want an eligibility preview.
$program = "program_example"; // string | The program that you want to check eligibility against.
$marketplace_ids = array("marketplace_ids_example"); // string[] | The identifier for the marketplace in which you want to determine eligibility. Required only when program=INBOUND.

try {
    $result = $apiInstance->getItemEligibilityPreview($asin, $program, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInboundApi->getItemEligibilityPreview: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FbaInboundApi* | [**getItemEligibilityPreview**](docs/Api/FbaInboundApi.md#getitemeligibilitypreview) | **GET** /fba/inbound/v1/eligibility/itemPreview | 


## Documentation For Models

 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [GetItemEligibilityPreviewResponse](docs/Model/GetItemEligibilityPreviewResponse.md)
 - [ItemEligibilityPreview](docs/Model/ItemEligibilityPreview.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author


