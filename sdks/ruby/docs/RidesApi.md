# OpenapiClient::RidesApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_rides**](RidesApi.md#create_rides) | **POST** /rides | Create a new ride resource
[**delete_ride**](RidesApi.md#delete_ride) | **DELETE** /rides/{id} | Delete ride resource by ID
[**edit_ride**](RidesApi.md#edit_ride) | **PUT** /rides/{id} | Edit a ride by ID
[**get_ride**](RidesApi.md#get_ride) | **GET** /rides/{id} | Get ride by ID
[**get_rides**](RidesApi.md#get_rides) | **GET** /rides | List rides at Walt Disney World


# **create_rides**
> create_rides(opts)

Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RidesApi.new
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  opening_year: 56, # Integer | 
  ride_type: 'ride_type_example', # String | 
  ride_vehicle: 'ride_vehicle_example', # String | 
  interactive_queue: true, # BOOLEAN | 
  gift_store_finish: true, # BOOLEAN | 
  single_rider: 56, # Integer | 
  ride_photo: 56, # Integer | 
  height_restriction: 56 # Integer | 
}

begin
  #Create a new ride resource
  api_instance.create_rides(opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RidesApi->create_rides: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **opening_year** | **Integer**|  | [optional] 
 **ride_type** | **String**|  | [optional] 
 **ride_vehicle** | **String**|  | [optional] 
 **interactive_queue** | **BOOLEAN**|  | [optional] 
 **gift_store_finish** | **BOOLEAN**|  | [optional] 
 **single_rider** | **Integer**|  | [optional] 
 **ride_photo** | **Integer**|  | [optional] 
 **height_restriction** | **Integer**|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **delete_ride**
> delete_ride

Delete ride resource by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RidesApi.new

begin
  #Delete ride resource by ID
  api_instance.delete_ride
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RidesApi->delete_ride: #{e}"
end
```

### Parameters
This endpoint does not need any parameter.

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **edit_ride**
> edit_ride(opts)

Edit a ride by ID

Edit a ride in the resource collection by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RidesApi.new
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  opening_year: 56, # Integer | 
  ride_type: 'ride_type_example', # String | 
  ride_vehicle: 'ride_vehicle_example', # String | 
  interactive_queue: true, # BOOLEAN | 
  gift_store_finish: true, # BOOLEAN | 
  single_rider: 56, # Integer | 
  ride_photo: 56, # Integer | 
  height_restriction: 56 # Integer | 
}

begin
  #Edit a ride by ID
  api_instance.edit_ride(opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RidesApi->edit_ride: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **opening_year** | **Integer**|  | [optional] 
 **ride_type** | **String**|  | [optional] 
 **ride_vehicle** | **String**|  | [optional] 
 **interactive_queue** | **BOOLEAN**|  | [optional] 
 **gift_store_finish** | **BOOLEAN**|  | [optional] 
 **single_rider** | **Integer**|  | [optional] 
 **ride_photo** | **Integer**|  | [optional] 
 **height_restriction** | **Integer**|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **get_ride**
> InlineResponse2003 get_ride

Get ride by ID

Get a ride at Walt Disney World by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RidesApi.new

begin
  #Get ride by ID
  result = api_instance.get_ride
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RidesApi->get_ride: #{e}"
end
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



# **get_rides**
> InlineResponse2002 get_rides

List rides at Walt Disney World

Get a list of rides at all Walt Disney World Parks 

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RidesApi.new

begin
  #List rides at Walt Disney World
  result = api_instance.get_rides
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RidesApi->get_rides: #{e}"
end
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



