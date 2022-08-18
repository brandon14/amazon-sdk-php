# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reservation_id** | **string** | Unique identifier for a reservation. If present, it is treated as an update reservation request and will update the corresponding reservation. Otherwise, it is treated as a new create reservation request. | [optional] 
**type** | **string** | Type of reservation. | 
**availability** | [**\TNT\Amazon\Services\V1\Model\AvailabilityRecord**](AvailabilityRecord.md) | &#x60;AvailabilityRecord&#x60; to represent the capacity of a resource over a time range. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


