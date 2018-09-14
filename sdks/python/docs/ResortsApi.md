# openapi_client.ResortsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_resort**](ResortsApi.md#create_resort) | **POST** /resorts | Create a new resort resource
[**delete_resort**](ResortsApi.md#delete_resort) | **DELETE** /resorts/{id} | Delete resort resource by ID
[**edit_resort**](ResortsApi.md#edit_resort) | **PUT** /resorts/{id} | Edit a specific resort resource by ID
[**get_resort**](ResortsApi.md#get_resort) | **GET** /resorts/{id} | List a specific resort resource by ID
[**get_resorts**](ResortsApi.md#get_resorts) | **GET** /resorts | List resorts at Walt Disney World


# **create_resort**
> create_resort(name=name, park_id=park_id, opening_year=opening_year, resort_type=resort_type, transport_options=transport_options, category=category, num_of_rooms=num_of_rooms, quick_service_restaurants=quick_service_restaurants, table_service_restaurants=table_service_restaurants, gift_shop=gift_shop, arcade=arcade, pool=pool)

Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ResortsApi()
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
opening_year = 56 # int |  (optional)
resort_type = 'resort_type_example' # str |  (optional)
transport_options = 'transport_options_example' # str |  (optional)
category = 'category_example' # str |  (optional)
num_of_rooms = 56 # int |  (optional)
quick_service_restaurants = True # bool |  (optional)
table_service_restaurants = True # bool |  (optional)
gift_shop = True # bool |  (optional)
arcade = True # bool |  (optional)
pool = True # bool |  (optional)

try:
    # Create a new resort resource
    api_instance.create_resort(name=name, park_id=park_id, opening_year=opening_year, resort_type=resort_type, transport_options=transport_options, category=category, num_of_rooms=num_of_rooms, quick_service_restaurants=quick_service_restaurants, table_service_restaurants=table_service_restaurants, gift_shop=gift_shop, arcade=arcade, pool=pool)
except ApiException as e:
    print("Exception when calling ResortsApi->create_resort: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **opening_year** | **int**|  | [optional] 
 **resort_type** | **str**|  | [optional] 
 **transport_options** | **str**|  | [optional] 
 **category** | **str**|  | [optional] 
 **num_of_rooms** | **int**|  | [optional] 
 **quick_service_restaurants** | **bool**|  | [optional] 
 **table_service_restaurants** | **bool**|  | [optional] 
 **gift_shop** | **bool**|  | [optional] 
 **arcade** | **bool**|  | [optional] 
 **pool** | **bool**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_resort**
> delete_resort(id)

Delete resort resource by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ResortsApi()
id = 56 # int | The ID of the resort

try:
    # Delete resort resource by ID
    api_instance.delete_resort(id)
except ApiException as e:
    print("Exception when calling ResortsApi->delete_resort: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the resort | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **edit_resort**
> edit_resort(id, name=name, park_id=park_id, opening_year=opening_year, resort_type=resort_type, transport_options=transport_options, category=category, num_of_rooms=num_of_rooms, quick_service_restaurants=quick_service_restaurants, table_service_restaurants=table_service_restaurants, gift_shop=gift_shop, arcade=arcade, pool=pool)

Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ResortsApi()
id = 56 # int | The ID of the resort
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
opening_year = 56 # int |  (optional)
resort_type = 'resort_type_example' # str |  (optional)
transport_options = 'transport_options_example' # str |  (optional)
category = 'category_example' # str |  (optional)
num_of_rooms = 56 # int |  (optional)
quick_service_restaurants = True # bool |  (optional)
table_service_restaurants = True # bool |  (optional)
gift_shop = True # bool |  (optional)
arcade = True # bool |  (optional)
pool = True # bool |  (optional)

try:
    # Edit a specific resort resource by ID
    api_instance.edit_resort(id, name=name, park_id=park_id, opening_year=opening_year, resort_type=resort_type, transport_options=transport_options, category=category, num_of_rooms=num_of_rooms, quick_service_restaurants=quick_service_restaurants, table_service_restaurants=table_service_restaurants, gift_shop=gift_shop, arcade=arcade, pool=pool)
except ApiException as e:
    print("Exception when calling ResortsApi->edit_resort: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the resort | 
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **opening_year** | **int**|  | [optional] 
 **resort_type** | **str**|  | [optional] 
 **transport_options** | **str**|  | [optional] 
 **category** | **str**|  | [optional] 
 **num_of_rooms** | **int**|  | [optional] 
 **quick_service_restaurants** | **bool**|  | [optional] 
 **table_service_restaurants** | **bool**|  | [optional] 
 **gift_shop** | **bool**|  | [optional] 
 **arcade** | **bool**|  | [optional] 
 **pool** | **bool**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_resort**
> InlineResponse2001 get_resort(id, name=name, park_id=park_id, opening_year=opening_year, resort_type=resort_type, transport_options=transport_options, category=category, num_of_rooms=num_of_rooms, quick_service_restaurants=quick_service_restaurants, table_service_restaurants=table_service_restaurants, gift_shop=gift_shop, arcade=arcade, pool=pool)

List a specific resort resource by ID

Get a specific resort resource by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ResortsApi()
id = 56 # int | The ID of the resort
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
opening_year = 56 # int |  (optional)
resort_type = 'resort_type_example' # str |  (optional)
transport_options = 'transport_options_example' # str |  (optional)
category = 'category_example' # str |  (optional)
num_of_rooms = 56 # int |  (optional)
quick_service_restaurants = True # bool |  (optional)
table_service_restaurants = True # bool |  (optional)
gift_shop = True # bool |  (optional)
arcade = True # bool |  (optional)
pool = True # bool |  (optional)

try:
    # List a specific resort resource by ID
    api_response = api_instance.get_resort(id, name=name, park_id=park_id, opening_year=opening_year, resort_type=resort_type, transport_options=transport_options, category=category, num_of_rooms=num_of_rooms, quick_service_restaurants=quick_service_restaurants, table_service_restaurants=table_service_restaurants, gift_shop=gift_shop, arcade=arcade, pool=pool)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ResortsApi->get_resort: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the resort | 
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **opening_year** | **int**|  | [optional] 
 **resort_type** | **str**|  | [optional] 
 **transport_options** | **str**|  | [optional] 
 **category** | **str**|  | [optional] 
 **num_of_rooms** | **int**|  | [optional] 
 **quick_service_restaurants** | **bool**|  | [optional] 
 **table_service_restaurants** | **bool**|  | [optional] 
 **gift_shop** | **bool**|  | [optional] 
 **arcade** | **bool**|  | [optional] 
 **pool** | **bool**|  | [optional] 

### Return type

[**InlineResponse2001**](InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_resorts**
> InlineResponse200 get_resorts()

List resorts at Walt Disney World

Get a list of resorts at Walt Disney World

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ResortsApi()

try:
    # List resorts at Walt Disney World
    api_response = api_instance.get_resorts()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ResortsApi->get_resorts: %s\n" % e)
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

