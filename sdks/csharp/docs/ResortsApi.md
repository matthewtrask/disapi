# Org.OpenAPITools.Api.ResortsApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateResort**](ResortsApi.md#createresort) | **POST** /resorts | Create a new resort resource
[**DeleteResort**](ResortsApi.md#deleteresort) | **DELETE** /resorts/{id} | Delete resort resource by ID
[**EditResort**](ResortsApi.md#editresort) | **PUT** /resorts/{id} | Edit a specific resort resource by ID
[**GetResort**](ResortsApi.md#getresort) | **GET** /resorts/{id} | List a specific resort resource by ID
[**GetResorts**](ResortsApi.md#getresorts) | **GET** /resorts | List resorts at Walt Disney World


<a name="createresort"></a>
# **CreateResort**
> void CreateResort (string name = null, int? parkId = null, int? openingYear = null, string resortType = null, string transportOptions = null, string category = null, int? numOfRooms = null, bool? quickServiceRestaurants = null, bool? tableServiceRestaurants = null, bool? giftShop = null, bool? arcade = null, bool? pool = null)

Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class CreateResortExample
    {
        public void main()
        {
            var apiInstance = new ResortsApi();
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var openingYear = 56;  // int? |  (optional) 
            var resortType = resortType_example;  // string |  (optional) 
            var transportOptions = transportOptions_example;  // string |  (optional) 
            var category = category_example;  // string |  (optional) 
            var numOfRooms = 56;  // int? |  (optional) 
            var quickServiceRestaurants = true;  // bool? |  (optional) 
            var tableServiceRestaurants = true;  // bool? |  (optional) 
            var giftShop = true;  // bool? |  (optional) 
            var arcade = true;  // bool? |  (optional) 
            var pool = true;  // bool? |  (optional) 

            try
            {
                // Create a new resort resource
                apiInstance.CreateResort(name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ResortsApi.CreateResort: " + e.Message );
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
 **resortType** | **string**|  | [optional] 
 **transportOptions** | **string**|  | [optional] 
 **category** | **string**|  | [optional] 
 **numOfRooms** | **int?**|  | [optional] 
 **quickServiceRestaurants** | **bool?**|  | [optional] 
 **tableServiceRestaurants** | **bool?**|  | [optional] 
 **giftShop** | **bool?**|  | [optional] 
 **arcade** | **bool?**|  | [optional] 
 **pool** | **bool?**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="deleteresort"></a>
# **DeleteResort**
> void DeleteResort ()

Delete resort resource by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class DeleteResortExample
    {
        public void main()
        {
            var apiInstance = new ResortsApi();

            try
            {
                // Delete resort resource by ID
                apiInstance.DeleteResort();
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ResortsApi.DeleteResort: " + e.Message );
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

<a name="editresort"></a>
# **EditResort**
> void EditResort (string name = null, int? parkId = null, int? openingYear = null, string resortType = null, string transportOptions = null, string category = null, int? numOfRooms = null, bool? quickServiceRestaurants = null, bool? tableServiceRestaurants = null, bool? giftShop = null, bool? arcade = null, bool? pool = null)

Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EditResortExample
    {
        public void main()
        {
            var apiInstance = new ResortsApi();
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var openingYear = 56;  // int? |  (optional) 
            var resortType = resortType_example;  // string |  (optional) 
            var transportOptions = transportOptions_example;  // string |  (optional) 
            var category = category_example;  // string |  (optional) 
            var numOfRooms = 56;  // int? |  (optional) 
            var quickServiceRestaurants = true;  // bool? |  (optional) 
            var tableServiceRestaurants = true;  // bool? |  (optional) 
            var giftShop = true;  // bool? |  (optional) 
            var arcade = true;  // bool? |  (optional) 
            var pool = true;  // bool? |  (optional) 

            try
            {
                // Edit a specific resort resource by ID
                apiInstance.EditResort(name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ResortsApi.EditResort: " + e.Message );
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
 **resortType** | **string**|  | [optional] 
 **transportOptions** | **string**|  | [optional] 
 **category** | **string**|  | [optional] 
 **numOfRooms** | **int?**|  | [optional] 
 **quickServiceRestaurants** | **bool?**|  | [optional] 
 **tableServiceRestaurants** | **bool?**|  | [optional] 
 **giftShop** | **bool?**|  | [optional] 
 **arcade** | **bool?**|  | [optional] 
 **pool** | **bool?**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getresort"></a>
# **GetResort**
> InlineResponse2001 GetResort (string name = null, int? parkId = null, int? openingYear = null, string resortType = null, string transportOptions = null, string category = null, int? numOfRooms = null, bool? quickServiceRestaurants = null, bool? tableServiceRestaurants = null, bool? giftShop = null, bool? arcade = null, bool? pool = null)

List a specific resort resource by ID

Get a specific resort resource by ID

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetResortExample
    {
        public void main()
        {
            var apiInstance = new ResortsApi();
            var name = name_example;  // string |  (optional) 
            var parkId = 56;  // int? |  (optional) 
            var openingYear = 56;  // int? |  (optional) 
            var resortType = resortType_example;  // string |  (optional) 
            var transportOptions = transportOptions_example;  // string |  (optional) 
            var category = category_example;  // string |  (optional) 
            var numOfRooms = 56;  // int? |  (optional) 
            var quickServiceRestaurants = true;  // bool? |  (optional) 
            var tableServiceRestaurants = true;  // bool? |  (optional) 
            var giftShop = true;  // bool? |  (optional) 
            var arcade = true;  // bool? |  (optional) 
            var pool = true;  // bool? |  (optional) 

            try
            {
                // List a specific resort resource by ID
                InlineResponse2001 result = apiInstance.GetResort(name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ResortsApi.GetResort: " + e.Message );
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
 **resortType** | **string**|  | [optional] 
 **transportOptions** | **string**|  | [optional] 
 **category** | **string**|  | [optional] 
 **numOfRooms** | **int?**|  | [optional] 
 **quickServiceRestaurants** | **bool?**|  | [optional] 
 **tableServiceRestaurants** | **bool?**|  | [optional] 
 **giftShop** | **bool?**|  | [optional] 
 **arcade** | **bool?**|  | [optional] 
 **pool** | **bool?**|  | [optional] 

### Return type

[**InlineResponse2001**](InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

<a name="getresorts"></a>
# **GetResorts**
> InlineResponse200 GetResorts ()

List resorts at Walt Disney World

Get a list of resorts at Walt Disney World

### Example
```csharp
using System;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class GetResortsExample
    {
        public void main()
        {
            var apiInstance = new ResortsApi();

            try
            {
                // List resorts at Walt Disney World
                InlineResponse200 result = apiInstance.GetResorts();
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ResortsApi.GetResorts: " + e.Message );
            }
        }
    }
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

