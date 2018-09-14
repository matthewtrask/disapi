/**
 * Walt Disney World API
 * An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@disapi.io
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 *
 * OpenAPI Generator version: 3.2.3
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/InlineResponse2006', 'model/InlineResponse2007'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/InlineResponse2006'), require('../model/InlineResponse2007'));
  } else {
    // Browser globals (root is window)
    if (!root.WaltDisneyWorldApi) {
      root.WaltDisneyWorldApi = {};
    }
    root.WaltDisneyWorldApi.ParksApi = factory(root.WaltDisneyWorldApi.ApiClient, root.WaltDisneyWorldApi.InlineResponse2006, root.WaltDisneyWorldApi.InlineResponse2007);
  }
}(this, function(ApiClient, InlineResponse2006, InlineResponse2007) {
  'use strict';

  /**
   * Parks service.
   * @module api/ParksApi
   * @version 0.1.0
   */

  /**
   * Constructs a new ParksApi. 
   * @alias module:api/ParksApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the createPark operation.
     * @callback module:api/ParksApi~createParkCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create a new park resource in the collection
     * Create a new park at Walt Disney World
     * @param {Object} opts Optional parameters
     * @param {String} opts.name 
     * @param {String} opts.centralAttraction 
     * @param {Number} opts.yearOpened 
     * @param {Number} opts.rideCount 
     * @param {Number} opts.restaurantCount 
     * @param {Number} opts.resortCount 
     * @param {Number} opts.size 
     * @param {Boolean} opts.fireworks 
     * @param {module:api/ParksApi~createParkCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.createPark = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
        'name': opts['name'],
        'centralAttraction': opts['centralAttraction'],
        'yearOpened': opts['yearOpened'],
        'rideCount': opts['rideCount'],
        'restaurantCount': opts['restaurantCount'],
        'resortCount': opts['resortCount'],
        'size': opts['size'],
        'fireworks': opts['fireworks']
      };

      var authNames = [];
      var contentTypes = ['application/x-www-form-urlencoded'];
      var accepts = [];
      var returnType = null;

      return this.apiClient.callApi(
        '/parks', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deletePark operation.
     * @callback module:api/ParksApi~deleteParkCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Remove a resource from the collection
     * Remove a resource from the collection by ID
     * @param {module:api/ParksApi~deleteParkCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.deletePark = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = [];
      var returnType = null;

      return this.apiClient.callApi(
        '/parks/{id}', 'DELETE',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the editPark operation.
     * @callback module:api/ParksApi~editParkCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Edit a resource by ID
     * Edit a park resource by an ID
     * @param {module:api/ParksApi~editParkCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.editPark = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = [];
      var returnType = null;

      return this.apiClient.callApi(
        '/parks/{id}', 'PUT',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getPark operation.
     * @callback module:api/ParksApi~getParkCallback
     * @param {String} error Error message, if any.
     * @param {module:model/InlineResponse2007} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List a park by ID
     * Get a park at Walt Disney World by ID
     * @param {module:api/ParksApi~getParkCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/InlineResponse2007}
     */
    this.getPark = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = InlineResponse2007;

      return this.apiClient.callApi(
        '/parks/{id}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getParks operation.
     * @callback module:api/ParksApi~getParksCallback
     * @param {String} error Error message, if any.
     * @param {module:model/InlineResponse2006} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List all parks at Walt Disney World
     * Get a list of all parks at Walt Disney World
     * @param {module:api/ParksApi~getParksCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/InlineResponse2006}
     */
    this.getParks = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = InlineResponse2006;

      return this.apiClient.callApi(
        '/parks', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
