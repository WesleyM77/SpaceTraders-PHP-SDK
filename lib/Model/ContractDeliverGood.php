<?php
/**
 * ContractDeliverGood
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SpaceTraders API
 *
 * SpaceTraders is an open-universe game and learning platform that offers a set of HTTP endpoints to control a fleet of ships and explore a multiplayer universe.  The API is documented using [OpenAPI](https://github.com/SpaceTradersAPI/api-docs). You can send your first request right here in your browser to check the status of the game server.  ```json http {   \"method\": \"GET\",   \"url\": \"https://api.spacetraders.io/v2\", } ```  Unlike a traditional game, SpaceTraders does not have a first-party client or app to play the game. Instead, you can use the API to build your own client, write a script to automate your ships, or try an app built by the community.  We have a [Discord channel](https://discord.com/invite/jh6zurdWk5) where you can share your projects, ask questions, and get help from other players.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: joel@spacetraders.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
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
 * ContractDeliverGood Class Doc Comment
 *
 * @category Class
 * @description The details of a delivery contract. Includes the type of good, units needed, and the destination.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ContractDeliverGood implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractDeliverGood';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trade_symbol' => 'string',
        'destination_symbol' => 'string',
        'units_required' => 'int',
        'units_fulfilled' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'trade_symbol' => null,
        'destination_symbol' => null,
        'units_required' => null,
        'units_fulfilled' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'trade_symbol' => false,
        'destination_symbol' => false,
        'units_required' => false,
        'units_fulfilled' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'trade_symbol' => 'tradeSymbol',
        'destination_symbol' => 'destinationSymbol',
        'units_required' => 'unitsRequired',
        'units_fulfilled' => 'unitsFulfilled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trade_symbol' => 'setTradeSymbol',
        'destination_symbol' => 'setDestinationSymbol',
        'units_required' => 'setUnitsRequired',
        'units_fulfilled' => 'setUnitsFulfilled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trade_symbol' => 'getTradeSymbol',
        'destination_symbol' => 'getDestinationSymbol',
        'units_required' => 'getUnitsRequired',
        'units_fulfilled' => 'getUnitsFulfilled'
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
        $this->setIfExists('trade_symbol', $data ?? [], null);
        $this->setIfExists('destination_symbol', $data ?? [], null);
        $this->setIfExists('units_required', $data ?? [], null);
        $this->setIfExists('units_fulfilled', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['trade_symbol'] === null) {
            $invalidProperties[] = "'trade_symbol' can't be null";
        }
        if ((mb_strlen($this->container['trade_symbol']) < 1)) {
            $invalidProperties[] = "invalid value for 'trade_symbol', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['destination_symbol'] === null) {
            $invalidProperties[] = "'destination_symbol' can't be null";
        }
        if ((mb_strlen($this->container['destination_symbol']) < 1)) {
            $invalidProperties[] = "invalid value for 'destination_symbol', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['units_required'] === null) {
            $invalidProperties[] = "'units_required' can't be null";
        }
        if ($this->container['units_fulfilled'] === null) {
            $invalidProperties[] = "'units_fulfilled' can't be null";
        }
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
     * Gets trade_symbol
     *
     * @return string
     */
    public function getTradeSymbol()
    {
        return $this->container['trade_symbol'];
    }

    /**
     * Sets trade_symbol
     *
     * @param string $trade_symbol The symbol of the trade good to deliver.
     *
     * @return self
     */
    public function setTradeSymbol($trade_symbol)
    {
        if (is_null($trade_symbol)) {
            throw new \InvalidArgumentException('non-nullable trade_symbol cannot be null');
        }

        if ((mb_strlen($trade_symbol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $trade_symbol when calling ContractDeliverGood., must be bigger than or equal to 1.');
        }

        $this->container['trade_symbol'] = $trade_symbol;

        return $this;
    }

    /**
     * Gets destination_symbol
     *
     * @return string
     */
    public function getDestinationSymbol()
    {
        return $this->container['destination_symbol'];
    }

    /**
     * Sets destination_symbol
     *
     * @param string $destination_symbol The destination where goods need to be delivered.
     *
     * @return self
     */
    public function setDestinationSymbol($destination_symbol)
    {
        if (is_null($destination_symbol)) {
            throw new \InvalidArgumentException('non-nullable destination_symbol cannot be null');
        }

        if ((mb_strlen($destination_symbol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $destination_symbol when calling ContractDeliverGood., must be bigger than or equal to 1.');
        }

        $this->container['destination_symbol'] = $destination_symbol;

        return $this;
    }

    /**
     * Gets units_required
     *
     * @return int
     */
    public function getUnitsRequired()
    {
        return $this->container['units_required'];
    }

    /**
     * Sets units_required
     *
     * @param int $units_required The number of units that need to be delivered on this contract.
     *
     * @return self
     */
    public function setUnitsRequired($units_required)
    {
        if (is_null($units_required)) {
            throw new \InvalidArgumentException('non-nullable units_required cannot be null');
        }
        $this->container['units_required'] = $units_required;

        return $this;
    }

    /**
     * Gets units_fulfilled
     *
     * @return int
     */
    public function getUnitsFulfilled()
    {
        return $this->container['units_fulfilled'];
    }

    /**
     * Sets units_fulfilled
     *
     * @param int $units_fulfilled The number of units fulfilled on this contract.
     *
     * @return self
     */
    public function setUnitsFulfilled($units_fulfilled)
    {
        if (is_null($units_fulfilled)) {
            throw new \InvalidArgumentException('non-nullable units_fulfilled cannot be null');
        }
        $this->container['units_fulfilled'] = $units_fulfilled;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


