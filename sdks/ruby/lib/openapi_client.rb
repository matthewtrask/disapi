=begin
#Walt Disney World API

#An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.

OpenAPI spec version: 0.1.0
Contact: support@disapi.io
Generated by: https://openapi-generator.tech
OpenAPI Generator version: 3.2.3

=end

# Common files
require 'openapi_client/api_client'
require 'openapi_client/api_error'
require 'openapi_client/version'
require 'openapi_client/configuration'

# Models
require 'openapi_client/models/inline_response200'
require 'openapi_client/models/inline_response2001'
require 'openapi_client/models/inline_response2002'
require 'openapi_client/models/inline_response2003'
require 'openapi_client/models/inline_response2004'
require 'openapi_client/models/inline_response2005'
require 'openapi_client/models/inline_response2006'
require 'openapi_client/models/inline_response2007'
require 'openapi_client/models/park'
require 'openapi_client/models/park_form'
require 'openapi_client/models/parks'
require 'openapi_client/models/resort'
require 'openapi_client/models/resort_form'
require 'openapi_client/models/resorts'
require 'openapi_client/models/restaurant'
require 'openapi_client/models/restaurant_form'
require 'openapi_client/models/restaurants'
require 'openapi_client/models/ride'
require 'openapi_client/models/ride_form'
require 'openapi_client/models/rides'

# APIs
require 'openapi_client/api/parks_api'
require 'openapi_client/api/resorts_api'
require 'openapi_client/api/restaurants_api'
require 'openapi_client/api/rides_api'

module OpenapiClient
  class << self
    # Customize default settings for the SDK using block.
    #   OpenapiClient.configure do |config|
    #     config.username = "xxx"
    #     config.password = "xxx"
    #   end
    # If no block given, return the default Configuration object.
    def configure
      if block_given?
        yield(Configuration.default)
      else
        Configuration.default
      end
    end
  end
end