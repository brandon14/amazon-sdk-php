# 
The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2021-06-30
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
      "url": "https://github.com/brandon14/amazon-feeds-v20210630.git"
    }
  ],
  "require": {
    "brandon14/amazon-feeds-v20210630": "*@dev"
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

$apiInstance = new TNT\Amazon\Feeds\V20210630\Api\FeedsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$feed_id = "feed_id_example"; // string | The identifier for the feed. This identifier is unique only in combination with a seller ID.

try {
    $apiInstance->cancelFeed($feed_id);
} catch (Exception $e) {
    echo 'Exception when calling FeedsApi->cancelFeed: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FeedsApi* | [**cancelFeed**](docs/Api/FeedsApi.md#cancelfeed) | **DELETE** /feeds/2021-06-30/feeds/{feedId} | 
*FeedsApi* | [**createFeed**](docs/Api/FeedsApi.md#createfeed) | **POST** /feeds/2021-06-30/feeds | 
*FeedsApi* | [**createFeedDocument**](docs/Api/FeedsApi.md#createfeeddocument) | **POST** /feeds/2021-06-30/documents | 
*FeedsApi* | [**getFeed**](docs/Api/FeedsApi.md#getfeed) | **GET** /feeds/2021-06-30/feeds/{feedId} | 
*FeedsApi* | [**getFeedDocument**](docs/Api/FeedsApi.md#getfeeddocument) | **GET** /feeds/2021-06-30/documents/{feedDocumentId} | 
*FeedsApi* | [**getFeeds**](docs/Api/FeedsApi.md#getfeeds) | **GET** /feeds/2021-06-30/feeds | 


## Documentation For Models

 - [CreateFeedDocumentResponse](docs/Model/CreateFeedDocumentResponse.md)
 - [CreateFeedDocumentSpecification](docs/Model/CreateFeedDocumentSpecification.md)
 - [CreateFeedResponse](docs/Model/CreateFeedResponse.md)
 - [CreateFeedSpecification](docs/Model/CreateFeedSpecification.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [Feed](docs/Model/Feed.md)
 - [FeedDocument](docs/Model/FeedDocument.md)
 - [FeedList](docs/Model/FeedList.md)
 - [FeedOptions](docs/Model/FeedOptions.md)
 - [GetFeedsResponse](docs/Model/GetFeedsResponse.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



