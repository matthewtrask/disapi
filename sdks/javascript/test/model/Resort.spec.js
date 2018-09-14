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
    instance = new WaltDisneyWorldApi.Resort();
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

  describe('Resort', function() {
    it('should create an instance of Resort', function() {
      // uncomment below and update the code to test Resort
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be.a(WaltDisneyWorldApi.Resort);
    });

    it('should have the property id (base name: "id")', function() {
      // uncomment below and update the code to test the property id
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property name (base name: "name")', function() {
      // uncomment below and update the code to test the property name
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property parkId (base name: "parkId")', function() {
      // uncomment below and update the code to test the property parkId
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property transportOptions (base name: "transportOptions")', function() {
      // uncomment below and update the code to test the property transportOptions
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property category (base name: "category")', function() {
      // uncomment below and update the code to test the property category
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property numOfRooms (base name: "numOfRooms")', function() {
      // uncomment below and update the code to test the property numOfRooms
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property quickServiceRestaurants (base name: "quickServiceRestaurants")', function() {
      // uncomment below and update the code to test the property quickServiceRestaurants
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property tableServiceRestaurants (base name: "tableServiceRestaurants")', function() {
      // uncomment below and update the code to test the property tableServiceRestaurants
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property giftShop (base name: "giftShop")', function() {
      // uncomment below and update the code to test the property giftShop
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property arcade (base name: "arcade")', function() {
      // uncomment below and update the code to test the property arcade
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

    it('should have the property pool (base name: "pool")', function() {
      // uncomment below and update the code to test the property pool
      //var instance = new WaltDisneyWorldApi.Resort();
      //expect(instance).to.be();
    });

  });

}));
