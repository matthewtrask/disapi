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

# Unit tests for OpenapiClient::ParksApi
# Automatically generated by openapi-generator (https://openapi-generator.tech)
# Please update as you see appropriate
describe 'ParksApi' do
  before do
    # run before each test
    @instance = OpenapiClient::ParksApi.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of ParksApi' do
    it 'should create an instance of ParksApi' do
      expect(@instance).to be_instance_of(OpenapiClient::ParksApi)
    end
  end

  # unit tests for create_park
  # Create a new park resource in the collection
  # Create a new park at Walt Disney World
  # @param [Hash] opts the optional parameters
  # @option opts [String] :name 
  # @option opts [String] :central_attraction 
  # @option opts [Integer] :year_opened 
  # @option opts [Integer] :ride_count 
  # @option opts [Integer] :restaurant_count 
  # @option opts [Integer] :resort_count 
  # @option opts [Integer] :size 
  # @option opts [BOOLEAN] :fireworks 
  # @return [nil]
  describe 'create_park test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for delete_park
  # Remove a resource from the collection
  # Remove a resource from the collection by ID
  # @param [Hash] opts the optional parameters
  # @return [nil]
  describe 'delete_park test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for edit_park
  # Edit a resource by ID
  # Edit a park resource by an ID
  # @param [Hash] opts the optional parameters
  # @return [nil]
  describe 'edit_park test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for get_park
  # List a park by ID
  # Get a park at Walt Disney World by ID
  # @param [Hash] opts the optional parameters
  # @return [InlineResponse2007]
  describe 'get_park test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

  # unit tests for get_parks
  # List all parks at Walt Disney World
  # Get a list of all parks at Walt Disney World
  # @param [Hash] opts the optional parameters
  # @return [InlineResponse2006]
  describe 'get_parks test' do
    it 'should work' do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end
