# openapi_client.ParksApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_park**](ParksApi.md#create_park) | **POST** /parks | Create a new park resource in the collection
[**delete_park**](ParksApi.md#delete_park) | **DELETE** /parks/{id} | Remove a resource from the collection
[**edit_park**](ParksApi.md#edit_park) | **PUT** /parks/{id} | Edit a resource by ID
[**get_park**](ParksApi.md#get_park) | **GET** /parks/{id} | List a park by ID
[**get_parks**](ParksApi.md#get_parks) | **GET** /parks | List all parks at Walt Disney World


# **create_park**
> create_park(name=name, central_attraction=central_attraction, year_opened=year_opened, ride_count=ride_count, restaurant_count=restaurant_count, resort_count=resort_count, size=size, fireworks=fireworks)

Create a new park resource in the collection

Create a new park at Walt Disney World

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ParksApi()
name = 'name_example' # str |  (optional)
central_attraction = 'central_attraction_example' # str |  (optional)
year_opened = 56 # int |  (optional)
ride_count = 56 # int |  (optional)
restaurant_count = 56 # int |  (optional)
resort_count = 56 # int |  (optional)
size = 56 # int |  (optional)
fireworks = True # bool |  (optional)

try:
    # Create a new park resource in the collection
    api_instance.create_park(name=name, central_attraction=central_attraction, year_opened=year_opened, ride_count=ride_count, restaurant_count=restaurant_count, resort_count=resort_count, size=size, fireworks=fireworks)
except ApiException as e:
    print("Exception when calling ParksApi->create_park: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | [optional] 
 **central_attraction** | **str**|  | [optional] 
 **year_opened** | **int**|  | [optional] 
 **ride_count** | **int**|  | [optional] 
 **restaurant_count** | **int**|  | [optional] 
 **resort_count** | **int**|  | [optional] 
 **size** | **int**|  | [optional] 
 **fireworks** | **bool**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_park**
> delete_park()

Remove a resource from the collection

Remove a resource from the collection by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ParksApi()

try:
    # Remove a resource from the collection
    api_instance.delete_park()
except ApiException as e:
    print("Exception when calling ParksApi->delete_park: %s\n" % e)
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

# **edit_park**
> edit_park()

Edit a resource by ID

Edit a park resource by an ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ParksApi()

try:
    # Edit a resource by ID
    api_instance.edit_park()
except ApiException as e:
    print("Exception when calling ParksApi->edit_park: %s\n" % e)
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

# **get_park**
> InlineResponse2007 get_park()

List a park by ID

Get a park at Walt Disney World by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ParksApi()

try:
    # List a park by ID
    api_response = api_instance.get_park()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ParksApi->get_park: %s\n" % e)
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

# **get_parks**
> InlineResponse2006 get_parks()

List all parks at Walt Disney World

Get a list of all parks at Walt Disney World

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.ParksApi()

try:
    # List all parks at Walt Disney World
    api_response = api_instance.get_parks()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ParksApi->get_parks: %s\n" % e)
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

