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
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.WaltDisneyWorldApi);
  }
}(this, function(expect, WaltDisneyWorldApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new WaltDisneyWorldApi.ParksApi();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('ParksApi', function() {
    describe('createPark', function() {
      it('should call createPark successfully', function(done) {
        //uncomment below and update the code to test createPark
        //instance.createPark(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deletePark', function() {
      it('should call deletePark successfully', function(done) {
        //uncomment below and update the code to test deletePark
        //instance.deletePark(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('editPark', function() {
      it('should call editPark successfully', function(done) {
        //uncomment below and update the code to test editPark
        //instance.editPark(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getPark', function() {
      it('should call getPark successfully', function(done) {
        //uncomment below and update the code to test getPark
        //instance.getPark(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getParks', function() {
      it('should call getParks successfully', function(done) {
        //uncomment below and update the code to test getParks
        //instance.getParks(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
  });

}));
