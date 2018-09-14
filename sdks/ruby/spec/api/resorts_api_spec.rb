=begin
#Walt Disney World API

#An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.

OpenAPI spec version: 0.1.0
Contact: support@disapi.io
Generated by: https://openapi-generator.tech
OpenAPI Generator version: 3.2.3

=end

require 'spec_helper'
require 'json'

# Unit tests for OpenapiClient::ResortsApi
# Automatically generated by openapi-generator (https://openapi-generator.tech)
# Please update as you see appropriate
describe 'ResortsApi' do
  before do
    # run before each test
    @instance = OpenapiClient::ResortsApi.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of ResortsApi' do
    it 'should create an instance of ResortsApi' do
      expect(@instance).to be_instance_of(OpenapiClient::ResortsApi)
    end
  end

  # unit tests for create_resort
  # Create a new resort resource
  # Create a new resort resource for the Walt Disney World Resort
  # @param [Hash] opts the optional parameters
  # @option opts [String] :name 
  # @option opts [Integer] :park_id 
  # @option opts [Integer] :opening_year 
  # @option opts [String] :resort_type 
  # @option opts [String] :transport_options 
  # @option opts [String] :category 
  # @option opts [Integer] :num_of_rooms 
  # @option opts [BOOLEAN] :quick_service_restaurants 
  # @option opts [BOOLEAN] :table_service_restaurants 
  # @option opts [BOOLEAN] :gift_shop 
  # @option opts [BOOLEAN] :arcade 
  # @option opts [BOOLEAN] :pool 
  # @return [nil]
  describe 'create_resort test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for delete_resort
  # Delete resort resource by ID
  # @param [Hash] opts the optional parameters
  # @return [nil]
  describe 'delete_resort test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for edit_resort
  # Edit a specific resort resource by ID
  # Find and edit a specific resort resource by its ID
  # @param [Hash] opts the optional parameters
  # @option opts [String] :name 
  # @option opts [Integer] :park_id 
  # @option opts [Integer] :opening_year 
  # @option opts [String] :resort_type 
  # @option opts [String] :transport_options 
  # @option opts [String] :category 
  # @option opts [Integer] :num_of_rooms 
  # @option opts [BOOLEAN] :quick_service_restaurants 
  # @option opts [BOOLEAN] :table_service_restaurants 
  # @option opts [BOOLEAN] :gift_shop 
  # @option opts [BOOLEAN] :arcade 
  # @option opts [BOOLEAN] :pool 
  # @return [nil]
  describe 'edit_resort test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for get_resort
  # List a specific resort resource by ID
  # Get a specific resort resource by ID
  # @param [Hash] opts the optional parameters
  # @option opts [String] :name 
  # @option opts [Integer] :park_id 
  # @option opts [Integer] :opening_year 
  # @option opts [String] :resort_type 
  # @option opts [String] :transport_options 
  # @option opts [String] :category 
  # @option opts [Integer] :num_of_rooms 
  # @option opts [BOOLEAN] :quick_service_restaurants 
  # @option opts [BOOLEAN] :table_service_restaurants 
  # @option opts [BOOLEAN] :gift_shop 
  # @option opts [BOOLEAN] :arcade 
  # @option opts [BOOLEAN] :pool 
  # @return [InlineResponse2001]
  describe 'get_resort test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for get_resorts
  # List resorts at Walt Disney World
  # Get a list of resorts at Walt Disney World
  # @param [Hash] opts the optional parameters
  # @return [InlineResponse200]
  describe 'get_resorts test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end