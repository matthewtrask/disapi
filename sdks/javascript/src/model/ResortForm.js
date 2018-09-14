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
    define(['ApiClient'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'));
  } else {
    // Browser globals (root is window)
    if (!root.WaltDisneyWorldApi) {
      root.WaltDisneyWorldApi = {};
    }
    root.WaltDisneyWorldApi.ResortForm = factory(root.WaltDisneyWorldApi.ApiClient);
  }
}(this, function(ApiClient) {
  'use strict';




  /**
   * The ResortForm model module.
   * @module model/ResortForm
   * @version 0.1.0
   */

  /**
   * Constructs a new <code>ResortForm</code>.
   * @alias module:model/ResortForm
   * @class
   */
  var exports = function() {
    var _this = this;













  };

  /**
   * Constructs a <code>ResortForm</code> from a plain JavaScript object, optionally creating a new instance.
   * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
   * @param {Object} data The plain JavaScript object bearing properties of interest.
   * @param {module:model/ResortForm} obj Optional instance to populate.
   * @return {module:model/ResortForm} The populated <code>ResortForm</code> instance.
   */
  exports.constructFromObject = function(data, obj) {
    if (data) {
      obj = obj || new exports();

      if (data.hasOwnProperty('name')) {
        obj['name'] = ApiClient.convertToType(data['name'], 'String');
      }
      if (data.hasOwnProperty('parkId')) {
        obj['parkId'] = ApiClient.convertToType(data['parkId'], 'Number');
      }
      if (data.hasOwnProperty('openingYear')) {
        obj['openingYear'] = ApiClient.convertToType(data['openingYear'], 'Number');
      }
      if (data.hasOwnProperty('resortType')) {
        obj['resortType'] = ApiClient.convertToType(data['resortType'], 'String');
      }
      if (data.hasOwnProperty('transportOptions')) {
        obj['transportOptions'] = ApiClient.convertToType(data['transportOptions'], 'String');
      }
      if (data.hasOwnProperty('category')) {
        obj['category'] = ApiClient.convertToType(data['category'], 'String');
      }
      if (data.hasOwnProperty('numOfRooms')) {
        obj['numOfRooms'] = ApiClient.convertToType(data['numOfRooms'], 'Number');
      }
      if (data.hasOwnProperty('quickServiceRestaurants')) {
        obj['quickServiceRestaurants'] = ApiClient.convertToType(data['quickServiceRestaurants'], 'Boolean');
      }
      if (data.hasOwnProperty('tableServiceRestaurants')) {
        obj['tableServiceRestaurants'] = ApiClient.convertToType(data['tableServiceRestaurants'], 'Boolean');
      }
      if (data.hasOwnProperty('giftShop')) {
        obj['giftShop'] = ApiClient.convertToType(data['giftShop'], 'Boolean');
      }
      if (data.hasOwnProperty('arcade')) {
        obj['arcade'] = ApiClient.convertToType(data['arcade'], 'Boolean');
      }
      if (data.hasOwnProperty('pool')) {
        obj['pool'] = ApiClient.convertToType(data['pool'], 'Boolean');
      }
    }
    return obj;
  }

  /**
   * @member {String} name
   */
  exports.prototype['name'] = undefined;
  /**
   * @member {Number} parkId
   */
  exports.prototype['parkId'] = undefined;
  /**
   * @member {Number} openingYear
   */
  exports.prototype['openingYear'] = undefined;
  /**
   * @member {String} resortType
   */
  exports.prototype['resortType'] = undefined;
  /**
   * @member {String} transportOptions
   */
  exports.prototype['transportOptions'] = undefined;
  /**
   * @member {String} category
   */
  exports.prototype['category'] = undefined;
  /**
   * @member {Number} numOfRooms
   */
  exports.prototype['numOfRooms'] = undefined;
  /**
   * @member {Boolean} quickServiceRestaurants
   */
  exports.prototype['quickServiceRestaurants'] = undefined;
  /**
   * @member {Boolean} tableServiceRestaurants
   */
  exports.prototype['tableServiceRestaurants'] = undefined;
  /**
   * @member {Boolean} giftShop
   */
  exports.prototype['giftShop'] = undefined;
  /**
   * @member {Boolean} arcade
   */
  exports.prototype['arcade'] = undefined;
  /**
   * @member {Boolean} pool
   */
  exports.prototype['pool'] = undefined;



  return exports;
}));

