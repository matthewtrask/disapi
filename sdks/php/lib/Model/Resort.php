<?php
/**
 * Resort
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Walt Disney World API
 *
 * An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@disapi.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Resort Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Resort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Resort';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'park_id' => 'int',
        'transport_options' => 'string[]',
        'category' => 'string',
        'num_of_rooms' => 'int',
        'quick_service_restaurants' => 'bool',
        'table_service_restaurants' => 'bool',
        'gift_shop' => 'bool',
        'arcade' => 'bool',
        'pool' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'park_id' => 'int32',
        'transport_options' => null,
        'category' => null,
        'num_of_rooms' => 'int32',
        'quick_service_restaurants' => null,
        'table_service_restaurants' => null,
        'gift_shop' => null,
        'arcade' => null,
        'pool' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'park_id' => 'parkId',
        'transport_options' => 'transportOptions',
        'category' => 'category',
        'num_of_rooms' => 'numOfRooms',
        'quick_service_restaurants' => 'quickServiceRestaurants',
        'table_service_restaurants' => 'tableServiceRestaurants',
        'gift_shop' => 'giftShop',
        'arcade' => 'arcade',
        'pool' => 'pool'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'park_id' => 'setParkId',
        'transport_options' => 'setTransportOptions',
        'category' => 'setCategory',
        'num_of_rooms' => 'setNumOfRooms',
        'quick_service_restaurants' => 'setQuickServiceRestaurants',
        'table_service_restaurants' => 'setTableServiceRestaurants',
        'gift_shop' => 'setGiftShop',
        'arcade' => 'setArcade',
        'pool' => 'setPool'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'park_id' => 'getParkId',
        'transport_options' => 'getTransportOptions',
        'category' => 'getCategory',
        'num_of_rooms' => 'getNumOfRooms',
        'quick_service_restaurants' => 'getQuickServiceRestaurants',
        'table_service_restaurants' => 'getTableServiceRestaurants',
        'gift_shop' => 'getGiftShop',
        'arcade' => 'getArcade',
        'pool' => 'getPool'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['park_id'] = isset($data['park_id']) ? $data['park_id'] : null;
        $this->container['transport_options'] = isset($data['transport_options']) ? $data['transport_options'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['num_of_rooms'] = isset($data['num_of_rooms']) ? $data['num_of_rooms'] : null;
        $this->container['quick_service_restaurants'] = isset($data['quick_service_restaurants']) ? $data['quick_service_restaurants'] : null;
        $this->container['table_service_restaurants'] = isset($data['table_service_restaurants']) ? $data['table_service_restaurants'] : null;
        $this->container['gift_shop'] = isset($data['gift_shop']) ? $data['gift_shop'] : null;
        $this->container['arcade'] = isset($data['arcade']) ? $data['arcade'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets park_id
     *
     * @return int|null
     */
    public function getParkId()
    {
        return $this->container['park_id'];
    }

    /**
     * Sets park_id
     *
     * @param int|null $park_id park_id
     *
     * @return $this
     */
    public function setParkId($park_id)
    {
        $this->container['park_id'] = $park_id;

        return $this;
    }

    /**
     * Gets transport_options
     *
     * @return string[]|null
     */
    public function getTransportOptions()
    {
        return $this->container['transport_options'];
    }

    /**
     * Sets transport_options
     *
     * @param string[]|null $transport_options transport_options
     *
     * @return $this
     */
    public function setTransportOptions($transport_options)
    {
        $this->container['transport_options'] = $transport_options;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets num_of_rooms
     *
     * @return int|null
     */
    public function getNumOfRooms()
    {
        return $this->container['num_of_rooms'];
    }

    /**
     * Sets num_of_rooms
     *
     * @param int|null $num_of_rooms num_of_rooms
     *
     * @return $this
     */
    public function setNumOfRooms($num_of_rooms)
    {
        $this->container['num_of_rooms'] = $num_of_rooms;

        return $this;
    }

    /**
     * Gets quick_service_restaurants
     *
     * @return bool|null
     */
    public function getQuickServiceRestaurants()
    {
        return $this->container['quick_service_restaurants'];
    }

    /**
     * Sets quick_service_restaurants
     *
     * @param bool|null $quick_service_restaurants quick_service_restaurants
     *
     * @return $this
     */
    public function setQuickServiceRestaurants($quick_service_restaurants)
    {
        $this->container['quick_service_restaurants'] = $quick_service_restaurants;

        return $this;
    }

    /**
     * Gets table_service_restaurants
     *
     * @return bool|null
     */
    public function getTableServiceRestaurants()
    {
        return $this->container['table_service_restaurants'];
    }

    /**
     * Sets table_service_restaurants
     *
     * @param bool|null $table_service_restaurants table_service_restaurants
     *
     * @return $this
     */
    public function setTableServiceRestaurants($table_service_restaurants)
    {
        $this->container['table_service_restaurants'] = $table_service_restaurants;

        return $this;
    }

    /**
     * Gets gift_shop
     *
     * @return bool|null
     */
    public function getGiftShop()
    {
        return $this->container['gift_shop'];
    }

    /**
     * Sets gift_shop
     *
     * @param bool|null $gift_shop gift_shop
     *
     * @return $this
     */
    public function setGiftShop($gift_shop)
    {
        $this->container['gift_shop'] = $gift_shop;

        return $this;
    }

    /**
     * Gets arcade
     *
     * @return bool|null
     */
    public function getArcade()
    {
        return $this->container['arcade'];
    }

    /**
     * Sets arcade
     *
     * @param bool|null $arcade arcade
     *
     * @return $this
     */
    public function setArcade($arcade)
    {
        $this->container['arcade'] = $arcade;

        return $this;
    }

    /**
     * Gets pool
     *
     * @return bool|null
     */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
     * Sets pool
     *
     * @param bool|null $pool pool
     *
     * @return $this
     */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


