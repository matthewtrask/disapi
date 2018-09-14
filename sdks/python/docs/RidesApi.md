# openapi_client.RidesApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_rides**](RidesApi.md#create_rides) | **POST** /rides | Create a new ride resource
[**delete_ride**](RidesApi.md#delete_ride) | **DELETE** /rides/{id} | Delete ride resource by ID
[**edit_ride**](RidesApi.md#edit_ride) | **PUT** /rides/{id} | Edit a ride by ID
[**get_ride**](RidesApi.md#get_ride) | **GET** /rides/{id} | Get ride by ID
[**get_rides**](RidesApi.md#get_rides) | **GET** /rides | List rides at Walt Disney World


# **create_rides**
> create_rides(name=name, park_id=park_id, opening_year=opening_year, ride_type=ride_type, ride_vehicle=ride_vehicle, interactive_queue=interactive_queue, gift_store_finish=gift_store_finish, single_rider=single_rider, ride_photo=ride_photo, height_restriction=height_restriction)

Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RidesApi()
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
opening_year = 56 # int |  (optional)
ride_type = 'ride_type_example' # str |  (optional)
ride_vehicle = 'ride_vehicle_example' # str |  (optional)
interactive_queue = True # bool |  (optional)
gift_store_finish = True # bool |  (optional)
single_rider = 56 # int |  (optional)
ride_photo = 56 # int |  (optional)
height_restriction = 56 # int |  (optional)

try:
    # Create a new ride resource
    api_instance.create_rides(name=name, park_id=park_id, opening_year=opening_year, ride_type=ride_type, ride_vehicle=ride_vehicle, interactive_queue=interactive_queue, gift_store_finish=gift_store_finish, single_rider=single_rider, ride_photo=ride_photo, height_restriction=height_restriction)
except ApiException as e:
    print("Exception when calling RidesApi->create_rides: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **opening_year** | **int**|  | [optional] 
 **ride_type** | **str**|  | [optional] 
 **ride_vehicle** | **str**|  | [optional] 
 **interactive_queue** | **bool**|  | [optional] 
 **gift_store_finish** | **bool**|  | [optional] 
 **single_rider** | **int**|  | [optional] 
 **ride_photo** | **int**|  | [optional] 
 **height_restriction** | **int**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **delete_ride**
> delete_ride()

Delete ride resource by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RidesApi()

try:
    # Delete ride resource by ID
    api_instance.delete_ride()
except ApiException as e:
    print("Exception when calling RidesApi->delete_ride: %s\n" % e)
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

# **edit_ride**
> edit_ride(name=name, park_id=park_id, opening_year=opening_year, ride_type=ride_type, ride_vehicle=ride_vehicle, interactive_queue=interactive_queue, gift_store_finish=gift_store_finish, single_rider=single_rider, ride_photo=ride_photo, height_restriction=height_restriction)

Edit a ride by ID

Edit a ride in the resource collection by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RidesApi()
name = 'name_example' # str |  (optional)
park_id = 56 # int |  (optional)
opening_year = 56 # int |  (optional)
ride_type = 'ride_type_example' # str |  (optional)
ride_vehicle = 'ride_vehicle_example' # str |  (optional)
interactive_queue = True # bool |  (optional)
gift_store_finish = True # bool |  (optional)
single_rider = 56 # int |  (optional)
ride_photo = 56 # int |  (optional)
height_restriction = 56 # int |  (optional)

try:
    # Edit a ride by ID
    api_instance.edit_ride(name=name, park_id=park_id, opening_year=opening_year, ride_type=ride_type, ride_vehicle=ride_vehicle, interactive_queue=interactive_queue, gift_store_finish=gift_store_finish, single_rider=single_rider, ride_photo=ride_photo, height_restriction=height_restriction)
except ApiException as e:
    print("Exception when calling RidesApi->edit_ride: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **str**|  | [optional] 
 **park_id** | **int**|  | [optional] 
 **opening_year** | **int**|  | [optional] 
 **ride_type** | **str**|  | [optional] 
 **ride_vehicle** | **str**|  | [optional] 
 **interactive_queue** | **bool**|  | [optional] 
 **gift_store_finish** | **bool**|  | [optional] 
 **single_rider** | **int**|  | [optional] 
 **ride_photo** | **int**|  | [optional] 
 **height_restriction** | **int**|  | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_ride**
> InlineResponse2003 get_ride()

Get ride by ID

Get a ride at Walt Disney World by ID

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RidesApi()

try:
    # Get ride by ID
    api_response = api_instance.get_ride()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RidesApi->get_ride: %s\n" % e)
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **get_rides**
> InlineResponse2002 get_rides()

List rides at Walt Disney World

Get a list of rides at all Walt Disney World Parks 

### Example
```python
from __future__ import print_function
import time
import openapi_client
from openapi_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = openapi_client.RidesApi()

try:
    # List rides at Walt Disney World
    api_response = api_instance.get_rides()
    pprint(api_response)
except ApiException as e:
    print("Exception when calling RidesApi->get_rides: %s\n" % e)
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

