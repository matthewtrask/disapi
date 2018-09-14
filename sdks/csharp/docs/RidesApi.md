# Org.OpenAPITools.Api.RidesApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateRides**](RidesApi.md#createrides) | **POST** /rides | Create a new ride resource
[**DeleteRide**](RidesApi.md#deleteride) | **DELETE** /rides/{id} | Delete ride resource by ID
[**EditRide**](RidesApi.md#editride) | **PUT** /rides/{id} | Edit a ride by ID
[**GetRide**](RidesApi.md#getride) | **GET** /rides/{id} | Get ride by ID
[**GetRides**](RidesApi.md#getrides) | **GET** /rides | List rides at Walt Disney World


<a name="createrides"></a>
# **CreateRides**
> void CreateRides (string name = null, int? parkId = null, int? openingYear = null, string rideType = null, string rideVehicle = null, bool? interactiveQueue = null, bool? giftStoreFinish = null, int? singleRider = null, int? ridePhoto = null, int? heightRestriction = null)

Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreateRidesExample
    {
        public void main()
        {
            var apiInstance = new RidesApi();
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var openingYear = 56;  // int? |  (optional) 
            var rideType = rideType_example;  // string |  (optional) 
            var rideVehicle = rideVehicle_example;  // string |  (optional) 
            var interactiveQueue = true;  // bool? |  (optional) 
            var giftStoreFinish = true;  // bool? |  (optional) 
            var singleRider = 56;  // int? |  (optional) 
            var ridePhoto = 56;  // int? |  (optional) 
            var heightRestriction = 56;  // int? |  (optional) 

            try
            {
                // Create a new ride resource
                apiInstance.CreateRides(name, parkId, openingYear, rideType, rideVehicle, interactiveQueue, giftStoreFinish, singleRider, ridePhoto, heightRestriction);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RidesApi.CreateRides: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional] 
 **parkId** | **int?**|  | [optional] 
 **openingYear** | **int?**|  | [optional] 
 **rideType** | **string**|  | [optional] 
 **rideVehicle** | **string**|  | [optional] 
 **interactiveQueue** | **bool?**|  | [optional] 
 **giftStoreFinish** | **bool?**|  | [optional] 
 **singleRider** | **int?**|  | [optional] 
 **ridePhoto** | **int?**|  | [optional] 
 **heightRestriction** | **int?**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="deleteride"></a>
# **DeleteRide**
> void DeleteRide (int? id)

Delete ride resource by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DeleteRideExample
    {
        public void main()
        {
            var apiInstance = new RidesApi();
            var id = 56;  // int? | The ID of the ride

            try
            {
                // Delete ride resource by ID
                apiInstance.DeleteRide(id);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RidesApi.DeleteRide: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int?**| The ID of the ride | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="editride"></a>
# **EditRide**
> void EditRide (int? id, string name = null, int? parkId = null, int? openingYear = null, string rideType = null, string rideVehicle = null, bool? interactiveQueue = null, bool? giftStoreFinish = null, int? singleRider = null, int? ridePhoto = null, int? heightRestriction = null)

Edit a ride by ID

Edit a ride in the resource collection by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EditRideExample
    {
        public void main()
        {
            var apiInstance = new RidesApi();
            var id = 56;  // int? | The ID of the ride
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var openingYear = 56;  // int? |  (optional) 
            var rideType = rideType_example;  // string |  (optional) 
            var rideVehicle = rideVehicle_example;  // string |  (optional) 
            var interactiveQueue = true;  // bool? |  (optional) 
            var giftStoreFinish = true;  // bool? |  (optional) 
            var singleRider = 56;  // int? |  (optional) 
            var ridePhoto = 56;  // int? |  (optional) 
            var heightRestriction = 56;  // int? |  (optional) 

            try
            {
                // Edit a ride by ID
                apiInstance.EditRide(id, name, parkId, openingYear, rideType, rideVehicle, interactiveQueue, giftStoreFinish, singleRider, ridePhoto, heightRestriction);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RidesApi.EditRide: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int?**| The ID of the ride | 
 **name** | **string**|  | [optional] 
 **parkId** | **int?**|  | [optional] 
 **openingYear** | **int?**|  | [optional] 
 **rideType** | **string**|  | [optional] 
 **rideVehicle** | **string**|  | [optional] 
 **interactiveQueue** | **bool?**|  | [optional] 
 **giftStoreFinish** | **bool?**|  | [optional] 
 **singleRider** | **int?**|  | [optional] 
 **ridePhoto** | **int?**|  | [optional] 
 **heightRestriction** | **int?**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getride"></a>
# **GetRide**
> InlineResponse2003 GetRide (int? id)

Get ride by ID

Get a ride at Walt Disney World by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetRideExample
    {
        public void main()
        {
            var apiInstance = new RidesApi();
            var id = 56;  // int? | The ID of the ride

            try
            {
                // Get ride by ID
                InlineResponse2003 result = apiInstance.GetRide(id);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RidesApi.GetRide: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int?**| The ID of the ride | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getrides"></a>
# **GetRides**
> InlineResponse2002 GetRides ()

List rides at Walt Disney World

Get a list of rides at all Walt Disney World Parks 

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetRidesExample
    {
        public void main()
        {
            var apiInstance = new RidesApi();

            try
            {
                // List rides at Walt Disney World
                InlineResponse2002 result = apiInstance.GetRides();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RidesApi.GetRides: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2002**](InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

