# Org.OpenAPITools.Api.RestaurantsApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateRestaurant**](RestaurantsApi.md#createrestaurant) | **POST** /restaurants | Create a new restaurant resource
[**DeleteRestaurant**](RestaurantsApi.md#deleterestaurant) | **DELETE** /restaurants/{id} | Remove a resource from the restaurants collection
[**EditRestaurant**](RestaurantsApi.md#editrestaurant) | **PUT** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
[**GetRestaurant**](RestaurantsApi.md#getrestaurant) | **GET** /restaurants/{id} | List a single restaurant resource from the collection by ID
[**GetRestaurants**](RestaurantsApi.md#getrestaurants) | **GET** /restaurants | List restaurants at Walt Disney World


<a name="createrestaurant"></a>
# **CreateRestaurant**
> void CreateRestaurant (string name = null, int? parkId = null, bool? quickService = null, bool? tableService = null, bool? alcohol = null, bool? diningPlan = null, List<string> mealTypes = null, List<string> foodTypes = null)

Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreateRestaurantExample
    {
        public void main()
        {
            var apiInstance = new RestaurantsApi();
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var quickService = true;  // bool? |  (optional) 
            var tableService = true;  // bool? |  (optional) 
            var alcohol = true;  // bool? |  (optional) 
            var diningPlan = true;  // bool? |  (optional) 
            var mealTypes = new List<string>(); // List<string> |  (optional) 
            var foodTypes = new List<string>(); // List<string> |  (optional) 

            try
            {
                // Create a new restaurant resource
                apiInstance.CreateRestaurant(name, parkId, quickService, tableService, alcohol, diningPlan, mealTypes, foodTypes);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RestaurantsApi.CreateRestaurant: " + e.Message );
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
 **quickService** | **bool?**|  | [optional] 
 **tableService** | **bool?**|  | [optional] 
 **alcohol** | **bool?**|  | [optional] 
 **diningPlan** | **bool?**|  | [optional] 
 **mealTypes** | [**List&lt;string&gt;**](string.md)|  | [optional] 
 **foodTypes** | [**List&lt;string&gt;**](string.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="deleterestaurant"></a>
# **DeleteRestaurant**
> void DeleteRestaurant ()

Remove a resource from the restaurants collection

Remove a resource from the restaurants collection by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DeleteRestaurantExample
    {
        public void main()
        {
            var apiInstance = new RestaurantsApi();

            try
            {
                // Remove a resource from the restaurants collection
                apiInstance.DeleteRestaurant();
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RestaurantsApi.DeleteRestaurant: " + e.Message );
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

<a name="editrestaurant"></a>
# **EditRestaurant**
> void EditRestaurant (string name = null, int? parkId = null, bool? quickService = null, bool? tableService = null, bool? alcohol = null, bool? diningPlan = null, List<string> mealTypes = null, List<string> foodTypes = null)

Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EditRestaurantExample
    {
        public void main()
        {
            var apiInstance = new RestaurantsApi();
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var quickService = true;  // bool? |  (optional) 
            var tableService = true;  // bool? |  (optional) 
            var alcohol = true;  // bool? |  (optional) 
            var diningPlan = true;  // bool? |  (optional) 
            var mealTypes = new List<string>(); // List<string> |  (optional) 
            var foodTypes = new List<string>(); // List<string> |  (optional) 

            try
            {
                // Edit a single restaurant resource in the collection by ID
                apiInstance.EditRestaurant(name, parkId, quickService, tableService, alcohol, diningPlan, mealTypes, foodTypes);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RestaurantsApi.EditRestaurant: " + e.Message );
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
 **quickService** | **bool?**|  | [optional] 
 **tableService** | **bool?**|  | [optional] 
 **alcohol** | **bool?**|  | [optional] 
 **diningPlan** | **bool?**|  | [optional] 
 **mealTypes** | [**List&lt;string&gt;**](string.md)|  | [optional] 
 **foodTypes** | [**List&lt;string&gt;**](string.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getrestaurant"></a>
# **GetRestaurant**
> InlineResponse2005 GetRestaurant ()

List a single restaurant resource from the collection by ID

Get a single restaurant resource by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetRestaurantExample
    {
        public void main()
        {
            var apiInstance = new RestaurantsApi();

            try
            {
                // List a single restaurant resource from the collection by ID
                InlineResponse2005 result = apiInstance.GetRestaurant();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RestaurantsApi.GetRestaurant: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2005**](InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getrestaurants"></a>
# **GetRestaurants**
> InlineResponse2004 GetRestaurants ()

List restaurants at Walt Disney World

Get a list of restaurants at all parks

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetRestaurantsExample
    {
        public void main()
        {
            var apiInstance = new RestaurantsApi();

            try
            {
                // List restaurants at Walt Disney World
                InlineResponse2004 result = apiInstance.GetRestaurants();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling RestaurantsApi.GetRestaurants: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2004**](InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

