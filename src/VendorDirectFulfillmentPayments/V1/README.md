# 
The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.

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
      "url": "https://github.com/brandon14/amazon-vendor-direct-fulfillment-payments-v1.git"
    }
  ],
  "require": {
    "brandon14/amazon-vendor-direct-fulfillment-payments-v1": "*@dev"
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

$apiInstance = new TNT\Amazon\VendorDirectFulfillmentPayments\V1\Api\VendorInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\SubmitInvoiceRequest(); // \TNT\Amazon\VendorDirectFulfillmentPayments\V1\Model\SubmitInvoiceRequest | 

try {
    $result = $apiInstance->submitInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorInvoiceApi->submitInvoice: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*VendorInvoiceApi* | [**submitInvoice**](docs/Api/VendorInvoiceApi.md#submitinvoice) | **POST** /vendor/directFulfillment/payments/v1/invoices | 


## Documentation For Models

 - [AdditionalDetails](docs/Model/AdditionalDetails.md)
 - [Address](docs/Model/Address.md)
 - [ChargeDetails](docs/Model/ChargeDetails.md)
 - [Decimal](docs/Model/Decimal.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [InvoiceDetail](docs/Model/InvoiceDetail.md)
 - [InvoiceItem](docs/Model/InvoiceItem.md)
 - [ItemQuantity](docs/Model/ItemQuantity.md)
 - [Money](docs/Model/Money.md)
 - [PartyIdentification](docs/Model/PartyIdentification.md)
 - [SubmitInvoiceRequest](docs/Model/SubmitInvoiceRequest.md)
 - [SubmitInvoiceResponse](docs/Model/SubmitInvoiceResponse.md)
 - [TaxDetail](docs/Model/TaxDetail.md)
 - [TaxRegistrationDetail](docs/Model/TaxRegistrationDetail.md)
 - [TransactionReference](docs/Model/TransactionReference.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



