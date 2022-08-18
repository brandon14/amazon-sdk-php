# ServiceJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | [**\DateTime**](\DateTime.md) | The date and time of the creation of the job in ISO 8601 format. | [optional] 
**service_job_id** | [**\TNT\Amazon\Services\V1\Model\ServiceJobId**](ServiceJobId.md) | The service job identifier. | [optional] 
**service_job_status** | **string** | The status of the service job. | [optional] 
**scope_of_work** | [**\TNT\Amazon\Services\V1\Model\ScopeOfWork**](ScopeOfWork.md) | The scope of work for the order. | [optional] 
**seller** | [**\TNT\Amazon\Services\V1\Model\Seller**](Seller.md) | Information about the seller of the service job. | [optional] 
**service_job_provider** | [**\TNT\Amazon\Services\V1\Model\ServiceJobProvider**](ServiceJobProvider.md) | Information about the service job provider. | [optional] 
**preferred_appointment_times** | [**\TNT\Amazon\Services\V1\Model\AppointmentTime[]**](AppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional] 
**appointments** | [**\TNT\Amazon\Services\V1\Model\Appointment[]**](Appointment.md) | A list of appointments. | [optional] 
**service_order_id** | [**\TNT\Amazon\Services\V1\Model\OrderId**](OrderId.md) | The Amazon-defined identifier for an order placed by the buyer in 3-7-7 format. | [optional] 
**marketplace_id** | **string** | The marketplace identifier. | [optional] 
**store_id** | **string** | The Amazon-defined identifier for the region scope. | [optional] 
**buyer** | [**\TNT\Amazon\Services\V1\Model\Buyer**](Buyer.md) | Information about the buyer. | [optional] 
**associated_items** | [**\TNT\Amazon\Services\V1\Model\AssociatedItem[]**](AssociatedItem.md) | A list of items associated with the service job. | [optional] 
**service_location** | [**\TNT\Amazon\Services\V1\Model\ServiceLocation**](ServiceLocation.md) | Information about the location of the service job. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


