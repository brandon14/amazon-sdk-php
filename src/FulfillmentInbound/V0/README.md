# 
The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.

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
      "url": "https://github.com/brandon14/amazon-fulfillment-inbound-v0.git"
    }
  ],
  "require": {
    "brandon14/amazon-fulfillment-inbound-v0": "*@dev"
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

$apiInstance = new TNT\Amazon\FulfillmentInbound\V0\Api\FbaInboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shipment_id = "shipment_id_example"; // string | A shipment identifier originally returned by the createInboundShipmentPlan operation.
$need_by_date = new \DateTime("2013-10-20"); // \DateTime | Date that the shipment must arrive at the Amazon fulfillment center to avoid delivery promise breaks for pre-ordered items. Must be in YYYY-MM-DD format. The response to the getPreorderInfo operation returns this value.
$marketplace_id = "marketplace_id_example"; // string | A marketplace identifier. Specifies the marketplace the shipment is tied to.

try {
    $result = $apiInstance->confirmPreorder($shipment_id, $need_by_date, $marketplace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaInboundApi->confirmPreorder: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sellingpartnerapi-na.amazon.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FbaInboundApi* | [**confirmPreorder**](docs/Api/FbaInboundApi.md#confirmpreorder) | **PUT** /fba/inbound/v0/shipments/{shipmentId}/preorder/confirm | 
*FbaInboundApi* | [**confirmTransport**](docs/Api/FbaInboundApi.md#confirmtransport) | **POST** /fba/inbound/v0/shipments/{shipmentId}/transport/confirm | 
*FbaInboundApi* | [**createInboundShipment**](docs/Api/FbaInboundApi.md#createinboundshipment) | **POST** /fba/inbound/v0/shipments/{shipmentId} | 
*FbaInboundApi* | [**createInboundShipmentPlan**](docs/Api/FbaInboundApi.md#createinboundshipmentplan) | **POST** /fba/inbound/v0/plans | 
*FbaInboundApi* | [**estimateTransport**](docs/Api/FbaInboundApi.md#estimatetransport) | **POST** /fba/inbound/v0/shipments/{shipmentId}/transport/estimate | 
*FbaInboundApi* | [**getBillOfLading**](docs/Api/FbaInboundApi.md#getbilloflading) | **GET** /fba/inbound/v0/shipments/{shipmentId}/billOfLading | 
*FbaInboundApi* | [**getInboundGuidance**](docs/Api/FbaInboundApi.md#getinboundguidance) | **GET** /fba/inbound/v0/itemsGuidance | 
*FbaInboundApi* | [**getLabels**](docs/Api/FbaInboundApi.md#getlabels) | **GET** /fba/inbound/v0/shipments/{shipmentId}/labels | 
*FbaInboundApi* | [**getPreorderInfo**](docs/Api/FbaInboundApi.md#getpreorderinfo) | **GET** /fba/inbound/v0/shipments/{shipmentId}/preorder | 
*FbaInboundApi* | [**getPrepInstructions**](docs/Api/FbaInboundApi.md#getprepinstructions) | **GET** /fba/inbound/v0/prepInstructions | 
*FbaInboundApi* | [**getShipmentItems**](docs/Api/FbaInboundApi.md#getshipmentitems) | **GET** /fba/inbound/v0/shipmentItems | 
*FbaInboundApi* | [**getShipmentItemsByShipmentId**](docs/Api/FbaInboundApi.md#getshipmentitemsbyshipmentid) | **GET** /fba/inbound/v0/shipments/{shipmentId}/items | 
*FbaInboundApi* | [**getShipments**](docs/Api/FbaInboundApi.md#getshipments) | **GET** /fba/inbound/v0/shipments | 
*FbaInboundApi* | [**getTransportDetails**](docs/Api/FbaInboundApi.md#gettransportdetails) | **GET** /fba/inbound/v0/shipments/{shipmentId}/transport | 
*FbaInboundApi* | [**putTransportDetails**](docs/Api/FbaInboundApi.md#puttransportdetails) | **PUT** /fba/inbound/v0/shipments/{shipmentId}/transport | 
*FbaInboundApi* | [**updateInboundShipment**](docs/Api/FbaInboundApi.md#updateinboundshipment) | **PUT** /fba/inbound/v0/shipments/{shipmentId} | 
*FbaInboundApi* | [**voidTransport**](docs/Api/FbaInboundApi.md#voidtransport) | **POST** /fba/inbound/v0/shipments/{shipmentId}/transport/void | 


## Documentation For Models

 - [ASINInboundGuidance](docs/Model/ASINInboundGuidance.md)
 - [ASINInboundGuidanceList](docs/Model/ASINInboundGuidanceList.md)
 - [ASINPrepInstructions](docs/Model/ASINPrepInstructions.md)
 - [ASINPrepInstructionsList](docs/Model/ASINPrepInstructionsList.md)
 - [Address](docs/Model/Address.md)
 - [AmazonPrepFeesDetails](docs/Model/AmazonPrepFeesDetails.md)
 - [AmazonPrepFeesDetailsList](docs/Model/AmazonPrepFeesDetailsList.md)
 - [Amount](docs/Model/Amount.md)
 - [BarcodeInstruction](docs/Model/BarcodeInstruction.md)
 - [BigDecimalType](docs/Model/BigDecimalType.md)
 - [BillOfLadingDownloadURL](docs/Model/BillOfLadingDownloadURL.md)
 - [BoxContentsFeeDetails](docs/Model/BoxContentsFeeDetails.md)
 - [BoxContentsSource](docs/Model/BoxContentsSource.md)
 - [CommonTransportResult](docs/Model/CommonTransportResult.md)
 - [Condition](docs/Model/Condition.md)
 - [ConfirmPreorderResponse](docs/Model/ConfirmPreorderResponse.md)
 - [ConfirmPreorderResult](docs/Model/ConfirmPreorderResult.md)
 - [ConfirmTransportResponse](docs/Model/ConfirmTransportResponse.md)
 - [Contact](docs/Model/Contact.md)
 - [CreateInboundShipmentPlanRequest](docs/Model/CreateInboundShipmentPlanRequest.md)
 - [CreateInboundShipmentPlanResponse](docs/Model/CreateInboundShipmentPlanResponse.md)
 - [CreateInboundShipmentPlanResult](docs/Model/CreateInboundShipmentPlanResult.md)
 - [CurrencyCode](docs/Model/CurrencyCode.md)
 - [DateStringType](docs/Model/DateStringType.md)
 - [Dimensions](docs/Model/Dimensions.md)
 - [Error](docs/Model/Error.md)
 - [ErrorList](docs/Model/ErrorList.md)
 - [ErrorReason](docs/Model/ErrorReason.md)
 - [EstimateTransportResponse](docs/Model/EstimateTransportResponse.md)
 - [GetBillOfLadingResponse](docs/Model/GetBillOfLadingResponse.md)
 - [GetInboundGuidanceResponse](docs/Model/GetInboundGuidanceResponse.md)
 - [GetInboundGuidanceResult](docs/Model/GetInboundGuidanceResult.md)
 - [GetLabelsResponse](docs/Model/GetLabelsResponse.md)
 - [GetPreorderInfoResponse](docs/Model/GetPreorderInfoResponse.md)
 - [GetPreorderInfoResult](docs/Model/GetPreorderInfoResult.md)
 - [GetPrepInstructionsResponse](docs/Model/GetPrepInstructionsResponse.md)
 - [GetPrepInstructionsResult](docs/Model/GetPrepInstructionsResult.md)
 - [GetShipmentItemsResponse](docs/Model/GetShipmentItemsResponse.md)
 - [GetShipmentItemsResult](docs/Model/GetShipmentItemsResult.md)
 - [GetShipmentsResponse](docs/Model/GetShipmentsResponse.md)
 - [GetShipmentsResult](docs/Model/GetShipmentsResult.md)
 - [GetTransportDetailsResponse](docs/Model/GetTransportDetailsResponse.md)
 - [GetTransportDetailsResult](docs/Model/GetTransportDetailsResult.md)
 - [GuidanceReason](docs/Model/GuidanceReason.md)
 - [GuidanceReasonList](docs/Model/GuidanceReasonList.md)
 - [InboundGuidance](docs/Model/InboundGuidance.md)
 - [InboundShipmentHeader](docs/Model/InboundShipmentHeader.md)
 - [InboundShipmentInfo](docs/Model/InboundShipmentInfo.md)
 - [InboundShipmentItem](docs/Model/InboundShipmentItem.md)
 - [InboundShipmentItemList](docs/Model/InboundShipmentItemList.md)
 - [InboundShipmentList](docs/Model/InboundShipmentList.md)
 - [InboundShipmentPlan](docs/Model/InboundShipmentPlan.md)
 - [InboundShipmentPlanItem](docs/Model/InboundShipmentPlanItem.md)
 - [InboundShipmentPlanItemList](docs/Model/InboundShipmentPlanItemList.md)
 - [InboundShipmentPlanList](docs/Model/InboundShipmentPlanList.md)
 - [InboundShipmentPlanRequestItem](docs/Model/InboundShipmentPlanRequestItem.md)
 - [InboundShipmentPlanRequestItemList](docs/Model/InboundShipmentPlanRequestItemList.md)
 - [InboundShipmentRequest](docs/Model/InboundShipmentRequest.md)
 - [InboundShipmentResponse](docs/Model/InboundShipmentResponse.md)
 - [InboundShipmentResult](docs/Model/InboundShipmentResult.md)
 - [IntendedBoxContentsSource](docs/Model/IntendedBoxContentsSource.md)
 - [InvalidASIN](docs/Model/InvalidASIN.md)
 - [InvalidASINList](docs/Model/InvalidASINList.md)
 - [InvalidSKU](docs/Model/InvalidSKU.md)
 - [InvalidSKUList](docs/Model/InvalidSKUList.md)
 - [LabelDownloadURL](docs/Model/LabelDownloadURL.md)
 - [LabelPrepPreference](docs/Model/LabelPrepPreference.md)
 - [LabelPrepType](docs/Model/LabelPrepType.md)
 - [NonPartneredLtlDataInput](docs/Model/NonPartneredLtlDataInput.md)
 - [NonPartneredLtlDataOutput](docs/Model/NonPartneredLtlDataOutput.md)
 - [NonPartneredSmallParcelDataInput](docs/Model/NonPartneredSmallParcelDataInput.md)
 - [NonPartneredSmallParcelDataOutput](docs/Model/NonPartneredSmallParcelDataOutput.md)
 - [NonPartneredSmallParcelPackageInput](docs/Model/NonPartneredSmallParcelPackageInput.md)
 - [NonPartneredSmallParcelPackageInputList](docs/Model/NonPartneredSmallParcelPackageInputList.md)
 - [NonPartneredSmallParcelPackageOutput](docs/Model/NonPartneredSmallParcelPackageOutput.md)
 - [NonPartneredSmallParcelPackageOutputList](docs/Model/NonPartneredSmallParcelPackageOutputList.md)
 - [PackageStatus](docs/Model/PackageStatus.md)
 - [Pallet](docs/Model/Pallet.md)
 - [PalletList](docs/Model/PalletList.md)
 - [PartneredEstimate](docs/Model/PartneredEstimate.md)
 - [PartneredLtlDataInput](docs/Model/PartneredLtlDataInput.md)
 - [PartneredLtlDataOutput](docs/Model/PartneredLtlDataOutput.md)
 - [PartneredSmallParcelDataInput](docs/Model/PartneredSmallParcelDataInput.md)
 - [PartneredSmallParcelDataOutput](docs/Model/PartneredSmallParcelDataOutput.md)
 - [PartneredSmallParcelPackageInput](docs/Model/PartneredSmallParcelPackageInput.md)
 - [PartneredSmallParcelPackageInputList](docs/Model/PartneredSmallParcelPackageInputList.md)
 - [PartneredSmallParcelPackageOutput](docs/Model/PartneredSmallParcelPackageOutput.md)
 - [PartneredSmallParcelPackageOutputList](docs/Model/PartneredSmallParcelPackageOutputList.md)
 - [PrepDetails](docs/Model/PrepDetails.md)
 - [PrepDetailsList](docs/Model/PrepDetailsList.md)
 - [PrepGuidance](docs/Model/PrepGuidance.md)
 - [PrepInstruction](docs/Model/PrepInstruction.md)
 - [PrepInstructionList](docs/Model/PrepInstructionList.md)
 - [PrepOwner](docs/Model/PrepOwner.md)
 - [ProNumber](docs/Model/ProNumber.md)
 - [PutTransportDetailsRequest](docs/Model/PutTransportDetailsRequest.md)
 - [PutTransportDetailsResponse](docs/Model/PutTransportDetailsResponse.md)
 - [Quantity](docs/Model/Quantity.md)
 - [SKUInboundGuidance](docs/Model/SKUInboundGuidance.md)
 - [SKUInboundGuidanceList](docs/Model/SKUInboundGuidanceList.md)
 - [SKUPrepInstructions](docs/Model/SKUPrepInstructions.md)
 - [SKUPrepInstructionsList](docs/Model/SKUPrepInstructionsList.md)
 - [SellerFreightClass](docs/Model/SellerFreightClass.md)
 - [ShipmentStatus](docs/Model/ShipmentStatus.md)
 - [ShipmentType](docs/Model/ShipmentType.md)
 - [TimeStampStringType](docs/Model/TimeStampStringType.md)
 - [TrackingId](docs/Model/TrackingId.md)
 - [TransportContent](docs/Model/TransportContent.md)
 - [TransportDetailInput](docs/Model/TransportDetailInput.md)
 - [TransportDetailOutput](docs/Model/TransportDetailOutput.md)
 - [TransportHeader](docs/Model/TransportHeader.md)
 - [TransportResult](docs/Model/TransportResult.md)
 - [TransportStatus](docs/Model/TransportStatus.md)
 - [UnitOfMeasurement](docs/Model/UnitOfMeasurement.md)
 - [UnitOfWeight](docs/Model/UnitOfWeight.md)
 - [UnsignedIntType](docs/Model/UnsignedIntType.md)
 - [VoidTransportResponse](docs/Model/VoidTransportResponse.md)
 - [Weight](docs/Model/Weight.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author


