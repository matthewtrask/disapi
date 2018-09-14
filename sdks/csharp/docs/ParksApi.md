# Org.OpenAPITools.Api.ParksApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreatePark**](ParksApi.md#createpark) | **POST** /parks | Create a new park resource in the collection
[**DeletePark**](ParksApi.md#deletepark) | **DELETE** /parks/{id} | Remove a resource from the collection
[**EditPark**](ParksApi.md#editpark) | **PUT** /parks/{id} | Edit a resource by ID
[**GetPark**](ParksApi.md#getpark) | **GET** /parks/{id} | List a park by ID
[**GetParks**](ParksApi.md#getparks) | **GET** /parks | List all parks at Walt Disney World


<a name="createpark"></a>
# **CreatePark**
> void CreatePark (string name = null, string centralAttraction = null, int? yearOpened = null, int? rideCount = null, int? restaurantCount = null, int? resortCount = null, int? size = null, bool? fireworks = null)

Create a new park resource in the collection

Create a new park at Walt Disney World

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreateParkExample
    {
        public void main()
        {
            var apiInstance = new ParksApi();
            var name = name_example;  // string |  (optional) 
            var centralAttraction = centralAttraction_example;  // string |  (optional) 
            var yearOpened = 56;  // int? |  (optional) 
            var rideCount = 56;  // int? |  (optional) 
            var restaurantCount = 56;  // int? |  (optional) 
            var resortCount = 56;  // int? |  (optional) 
            var size = 56;  // int? |  (optional) 
            var fireworks = true;  // bool? |  (optional) 

            try
            {
                // Create a new park resource in the collection
                apiInstance.CreatePark(name, centralAttraction, yearOpened, rideCount, restaurantCount, resortCount, size, fireworks);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ParksApi.CreatePark: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional] 
 **centralAttraction** | **string**|  | [optional] 
 **yearOpened** | **int?**|  | [optional] 
 **rideCount** | **int?**|  | [optional] 
 **restaurantCount** | **int?**|  | [optional] 
 **resortCount** | **int?**|  | [optional] 
 **size** | **int?**|  | [optional] 
 **fireworks** | **bool?**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="deletepark"></a>
# **DeletePark**
> void DeletePark ()

Remove a resource from the collection

Remove a resource from the collection by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DeleteParkExample
    {
        public void main()
        {
            var apiInstance = new ParksApi();

            try
            {
                // Remove a resource from the collection
                apiInstance.DeletePark();
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ParksApi.DeletePark: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="editpark"></a>
# **EditPark**
> void EditPark ()

Edit a resource by ID

Edit a park resource by an ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EditParkExample
    {
        public void main()
        {
            var apiInstance = new ParksApi();

            try
            {
                // Edit a resource by ID
                apiInstance.EditPark();
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ParksApi.EditPark: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getpark"></a>
# **GetPark**
> InlineResponse2007 GetPark ()

List a park by ID

Get a park at Walt Disney World by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetParkExample
    {
        public void main()
        {
            var apiInstance = new ParksApi();

            try
            {
                // List a park by ID
                InlineResponse2007 result = apiInstance.GetPark();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ParksApi.GetPark: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2007**](InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getparks"></a>
# **GetParks**
> InlineResponse2006 GetParks ()

List all parks at Walt Disney World

Get a list of all parks at Walt Disney World

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetParksExample
    {
        public void main()
        {
            var apiInstance = new ParksApi();

            try
            {
                // List all parks at Walt Disney World
                InlineResponse2006 result = apiInstance.GetParks();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ParksApi.GetParks: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2006**](InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

