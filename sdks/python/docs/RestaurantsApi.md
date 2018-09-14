# openapi_client.RestaurantsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_restaurant**](RestaurantsApi.md#create_restaurant) | **POST** /restaurants | Create a new restaurant resource
[**delete_restaurant**](RestaurantsApi.md#delete_restaurant) | **DELETE** /restaurants/{id} | Remove a resource from the restaurants collection
[**edit_restaurant**](RestaurantsApi.md#edit_restaurant) | **PUT** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
[**get_restaurant**](RestaurantsApi.md#get_restaurant) | **GET** /restaurants/{id} | List a single restaurant resource from the collection by ID
[**get_restaurants**](RestaurantsApi.md#get_restaurants) | **GET** /restaurants | List restaurants at Walt Disney World


# **create_restaurant**
> create_restaurant(name=name, park_id=park_id, quick_service=quick_service, table_service=table_service, alcohol=alcohol, dining_plan=dining_plan, meal_types=meal_types, food_types=food_types)

Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RestaurantsApi()
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
quick_service = True # bool |  (optional)
table_service = True # bool |  (optional)
alcohol = True # bool |  (optional)
dining_plan = True # bool |  (optional)
meal_types = 'meal_types_example' # list[str] |  (optional)
food_types = 'food_types_example' # list[str] |  (optional)

try:
    # Create a new restaurant resource
    api_instance.create_restaurant(name=name, park_id=park_id, quick_service=quick_service, table_service=table_service, alcohol=alcohol, dining_plan=dining_plan, meal_types=meal_types, food_types=food_types)
except ApiException as e:
    print("Exception when calling RestaurantsApi->create_restaurant: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **quick_service** | **bool**|  | [optional] 
 **table_service** | **bool**|  | [optional] 
 **alcohol** | **bool**|  | [optional] 
 **dining_plan** | **bool**|  | [optional] 
 **meal_types** | [**list[str]**](str.md)|  | [optional] 
 **food_types** | [**list[str]**](str.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_restaurant**
> delete_restaurant(id)

Remove a resource from the restaurants collection

Remove a resource from the restaurants collection by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RestaurantsApi()
id = 56 # int | The ID of the restaurant

try:
    # Remove a resource from the restaurants collection
    api_instance.delete_restaurant(id)
except ApiException as e:
    print("Exception when calling RestaurantsApi->delete_restaurant: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the restaurant | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **edit_restaurant**
> edit_restaurant(id, name=name, park_id=park_id, quick_service=quick_service, table_service=table_service, alcohol=alcohol, dining_plan=dining_plan, meal_types=meal_types, food_types=food_types)

Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RestaurantsApi()
id = 56 # int | The ID of the restaurant
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
quick_service = True # bool |  (optional)
table_service = True # bool |  (optional)
alcohol = True # bool |  (optional)
dining_plan = True # bool |  (optional)
meal_types = 'meal_types_example' # list[str] |  (optional)
food_types = 'food_types_example' # list[str] |  (optional)

try:
    # Edit a single restaurant resource in the collection by ID
    api_instance.edit_restaurant(id, name=name, park_id=park_id, quick_service=quick_service, table_service=table_service, alcohol=alcohol, dining_plan=dining_plan, meal_types=meal_types, food_types=food_types)
except ApiException as e:
    print("Exception when calling RestaurantsApi->edit_restaurant: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the restaurant | 
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **quick_service** | **bool**|  | [optional] 
 **table_service** | **bool**|  | [optional] 
 **alcohol** | **bool**|  | [optional] 
 **dining_plan** | **bool**|  | [optional] 
 **meal_types** | [**list[str]**](str.md)|  | [optional] 
 **food_types** | [**list[str]**](str.md)|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_restaurant**
> InlineResponse2005 get_restaurant(id)

List a single restaurant resource from the collection by ID

Get a single restaurant resource by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RestaurantsApi()
id = 56 # int | The ID of the restaurant

try:
    # List a single restaurant resource from the collection by ID
    api_response = api_instance.get_restaurant(id)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RestaurantsApi->get_restaurant: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the restaurant | 

### Return type

[**InlineResponse2005**](InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_restaurants**
> InlineResponse2004 get_restaurants()

List restaurants at Walt Disney World

Get a list of restaurants at all parks

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RestaurantsApi()

try:
    # List restaurants at Walt Disney World
    api_response = api_instance.get_restaurants()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RestaurantsApi->get_restaurants: %s\n" % e)
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

