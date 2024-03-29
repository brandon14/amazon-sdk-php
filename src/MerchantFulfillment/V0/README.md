# 
The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.

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
      "url": "https://github.com/brandon14/amazon-merchant-fulfillment-v0.git"
    }
  ],
  "require": {
    "brandon14/amazon-merchant-fulfillment-v0": "*@dev"
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

$apiInstance = new TNT\Amazon\MerchantFulfillment\V0\Api\MerchantFulfillmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | The Amazon-defined shipment identifier for the shipment to cancel.

try {
    $result = $apiInstance->cancelShipment($shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantFulfillmentApi->cancelShipment: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*MerchantFulfillmentApi* | [**cancelShipment**](docs/Api/MerchantFulfillmentApi.md#cancelshipment) | **DELETE** /mfn/v0/shipments/{shipmentId} | 
*MerchantFulfillmentApi* | [**cancelShipmentOld**](docs/Api/MerchantFulfillmentApi.md#cancelshipmentold) | **PUT** /mfn/v0/shipments/{shipmentId}/cancel | 
*MerchantFulfillmentApi* | [**createShipment**](docs/Api/MerchantFulfillmentApi.md#createshipment) | **POST** /mfn/v0/shipments | 
*MerchantFulfillmentApi* | [**getAdditionalSellerInputs**](docs/Api/MerchantFulfillmentApi.md#getadditionalsellerinputs) | **POST** /mfn/v0/additionalSellerInputs | 
*MerchantFulfillmentApi* | [**getAdditionalSellerInputsOld**](docs/Api/MerchantFulfillmentApi.md#getadditionalsellerinputsold) | **POST** /mfn/v0/sellerInputs | 
*MerchantFulfillmentApi* | [**getEligibleShipmentServices**](docs/Api/MerchantFulfillmentApi.md#geteligibleshipmentservices) | **POST** /mfn/v0/eligibleShippingServices | 
*MerchantFulfillmentApi* | [**getEligibleShipmentServicesOld**](docs/Api/MerchantFulfillmentApi.md#geteligibleshipmentservicesold) | **POST** /mfn/v0/eligibleServices | 
*MerchantFulfillmentApi* | [**getShipment**](docs/Api/MerchantFulfillmentApi.md#getshipment) | **GET** /mfn/v0/shipments/{shipmentId} | 


## Documentation For Models

 - [AdditionalInputs](docs/Model/AdditionalInputs.md)
 - [AdditionalInputsList](docs/Model/AdditionalInputsList.md)
 - [AdditionalSellerInput](docs/Model/AdditionalSellerInput.md)
 - [AdditionalSellerInputs](docs/Model/AdditionalSellerInputs.md)
 - [AdditionalSellerInputsList](docs/Model/AdditionalSellerInputsList.md)
 - [Address](docs/Model/Address.md)
 - [AddressLine1](docs/Model/AddressLine1.md)
 - [AddressLine2](docs/Model/AddressLine2.md)
 - [AddressLine3](docs/Model/AddressLine3.md)
 - [AddressName](docs/Model/AddressName.md)
 - [AmazonOrderId](docs/Model/AmazonOrderId.md)
 - [AvailableCarrierWillPickUpOption](docs/Model/AvailableCarrierWillPickUpOption.md)
 - [AvailableCarrierWillPickUpOptionsList](docs/Model/AvailableCarrierWillPickUpOptionsList.md)
 - [AvailableDeliveryExperienceOption](docs/Model/AvailableDeliveryExperienceOption.md)
 - [AvailableDeliveryExperienceOptionsList](docs/Model/AvailableDeliveryExperienceOptionsList.md)
 - [AvailableFormatOptionsForLabel](docs/Model/AvailableFormatOptionsForLabel.md)
 - [AvailableFormatOptionsForLabelList](docs/Model/AvailableFormatOptionsForLabelList.md)
 - [AvailableShippingServiceOptions](docs/Model/AvailableShippingServiceOptions.md)
 - [CancelShipmentResponse](docs/Model/CancelShipmentResponse.md)
 - [CarrierWillPickUpOption](docs/Model/CarrierWillPickUpOption.md)
 - [City](docs/Model/City.md)
 - [Constraint](docs/Model/Constraint.md)
 - [Constraints](docs/Model/Constraints.md)
 - [CountryCode](docs/Model/CountryCode.md)
 - [CreateShipmentRequest](docs/Model/CreateShipmentRequest.md)
 - [CreateShipmentResponse](docs/Model/CreateShipmentResponse.md)
 - [CurrencyAmount](docs/Model/CurrencyAmount.md)
 - [CustomTextForLabel](docs/Model/CustomTextForLabel.md)
 - [DeliveryExperienceOption](docs/Model/DeliveryExperienceOption.md)
 - [DeliveryExperienceType](docs/Model/DeliveryExperienceType.md)
 - [DistrictOrCounty](docs/Model/DistrictOrCounty.md)
 - [EmailAddress](docs/Model/EmailAddress.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [FileContents](docs/Model/FileContents.md)
 - [FileType](docs/Model/FileType.md)
 - [GetAdditionalSellerInputsRequest](docs/Model/GetAdditionalSellerInputsRequest.md)
 - [GetAdditionalSellerInputsResponse](docs/Model/GetAdditionalSellerInputsResponse.md)
 - [GetAdditionalSellerInputsResult](docs/Model/GetAdditionalSellerInputsResult.md)
 - [GetEligibleShipmentServicesRequest](docs/Model/GetEligibleShipmentServicesRequest.md)
 - [GetEligibleShipmentServicesResponse](docs/Model/GetEligibleShipmentServicesResponse.md)
 - [GetEligibleShipmentServicesResult](docs/Model/GetEligibleShipmentServicesResult.md)
 - [GetShipmentResponse](docs/Model/GetShipmentResponse.md)
 - [HazmatType](docs/Model/HazmatType.md)
 - [InputTargetType](docs/Model/InputTargetType.md)
 - [Item](docs/Model/Item.md)
 - [ItemDescription](docs/Model/ItemDescription.md)
 - [ItemLevelFields](docs/Model/ItemLevelFields.md)
 - [ItemLevelFieldsList](docs/Model/ItemLevelFieldsList.md)
 - [ItemList](docs/Model/ItemList.md)
 - [ItemQuantity](docs/Model/ItemQuantity.md)
 - [Label](docs/Model/Label.md)
 - [LabelCustomization](docs/Model/LabelCustomization.md)
 - [LabelDimension](docs/Model/LabelDimension.md)
 - [LabelDimensions](docs/Model/LabelDimensions.md)
 - [LabelFormat](docs/Model/LabelFormat.md)
 - [LabelFormatList](docs/Model/LabelFormatList.md)
 - [LabelFormatOption](docs/Model/LabelFormatOption.md)
 - [LabelFormatOptionRequest](docs/Model/LabelFormatOptionRequest.md)
 - [Length](docs/Model/Length.md)
 - [OrderItemId](docs/Model/OrderItemId.md)
 - [PackageDimension](docs/Model/PackageDimension.md)
 - [PackageDimensions](docs/Model/PackageDimensions.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [PostalCode](docs/Model/PostalCode.md)
 - [PredefinedPackageDimensions](docs/Model/PredefinedPackageDimensions.md)
 - [RejectedShippingService](docs/Model/RejectedShippingService.md)
 - [RejectedShippingServiceList](docs/Model/RejectedShippingServiceList.md)
 - [RestrictedSetValues](docs/Model/RestrictedSetValues.md)
 - [SellerInputDefinition](docs/Model/SellerInputDefinition.md)
 - [SellerOrderId](docs/Model/SellerOrderId.md)
 - [Shipment](docs/Model/Shipment.md)
 - [ShipmentId](docs/Model/ShipmentId.md)
 - [ShipmentRequestDetails](docs/Model/ShipmentRequestDetails.md)
 - [ShipmentStatus](docs/Model/ShipmentStatus.md)
 - [ShippingOfferingFilter](docs/Model/ShippingOfferingFilter.md)
 - [ShippingService](docs/Model/ShippingService.md)
 - [ShippingServiceIdentifier](docs/Model/ShippingServiceIdentifier.md)
 - [ShippingServiceList](docs/Model/ShippingServiceList.md)
 - [ShippingServiceOptions](docs/Model/ShippingServiceOptions.md)
 - [StandardIdForLabel](docs/Model/StandardIdForLabel.md)
 - [StateOrProvinceCode](docs/Model/StateOrProvinceCode.md)
 - [TemporarilyUnavailableCarrier](docs/Model/TemporarilyUnavailableCarrier.md)
 - [TemporarilyUnavailableCarrierList](docs/Model/TemporarilyUnavailableCarrierList.md)
 - [TermsAndConditionsNotAcceptedCarrier](docs/Model/TermsAndConditionsNotAcceptedCarrier.md)
 - [TermsAndConditionsNotAcceptedCarrierList](docs/Model/TermsAndConditionsNotAcceptedCarrierList.md)
 - [Timestamp](docs/Model/Timestamp.md)
 - [TrackingId](docs/Model/TrackingId.md)
 - [TransparencyCode](docs/Model/TransparencyCode.md)
 - [TransparencyCodeList](docs/Model/TransparencyCodeList.md)
 - [UnitOfLength](docs/Model/UnitOfLength.md)
 - [UnitOfWeight](docs/Model/UnitOfWeight.md)
 - [Weight](docs/Model/Weight.md)
 - [WeightValue](docs/Model/WeightValue.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author



