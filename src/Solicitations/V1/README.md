# 
With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.

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
      "url": "https://github.com/brandon14/amazon-solicitations-v1.git"
    }
  ],
  "require": {
    "brandon14/amazon-solicitations-v1": "*@dev"
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

$apiInstance = new TNT\Amazon\Solicitations\V1\Api\SolicitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$amazon_order_id = "amazon_order_id_example"; // string | An Amazon order identifier. This specifies the order for which a solicitation is sent.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified.

try {
    $result = $apiInstance->createProductReviewAndSellerFeedbackSolicitation($amazon_order_id, $marketplace_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SolicitationsApi->createProductReviewAndSellerFeedbackSolicitation: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SolicitationsApi* | [**createProductReviewAndSellerFeedbackSolicitation**](docs/Api/SolicitationsApi.md#createproductreviewandsellerfeedbacksolicitation) | **POST** /solicitations/v1/orders/{amazonOrderId}/solicitations/productReviewAndSellerFeedback | 
*SolicitationsApi* | [**getSolicitationActionsForOrder**](docs/Api/SolicitationsApi.md#getsolicitationactionsfororder) | **GET** /solicitations/v1/orders/{amazonOrderId} | 


## Documentation For Models

 - [CreateProductReviewAndSellerFeedbackSolicitationResponse](docs/Model/CreateProductReviewAndSellerFeedbackSolicitationResponse.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [GetSchemaResponse](docs/Model/GetSchemaResponse.md)
 - [GetSchemaResponseLinks](docs/Model/GetSchemaResponseLinks.md)
 - [GetSolicitationActionResponse](docs/Model/GetSolicitationActionResponse.md)
 - [GetSolicitationActionResponseEmbedded](docs/Model/GetSolicitationActionResponseEmbedded.md)
 - [GetSolicitationActionResponseLinks](docs/Model/GetSolicitationActionResponseLinks.md)
 - [GetSolicitationActionsForOrderResponse](docs/Model/GetSolicitationActionsForOrderResponse.md)
 - [GetSolicitationActionsForOrderResponseEmbedded](docs/Model/GetSolicitationActionsForOrderResponseEmbedded.md)
 - [GetSolicitationActionsForOrderResponseLinks](docs/Model/GetSolicitationActionsForOrderResponseLinks.md)
 - [LinkObject](docs/Model/LinkObject.md)
 - [Schema](docs/Model/Schema.md)
 - [SolicitationsAction](docs/Model/SolicitationsAction.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



