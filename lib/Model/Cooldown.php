<?php
/**
 * Cooldown
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
 * Cooldown Class Doc Comment
 *
 * @category Class
 * @description A cooldown is a period of time in which a ship cannot perform certain actions.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Cooldown implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cooldown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ship_symbol' => 'string',
        'total_seconds' => 'int',
        'remaining_seconds' => 'int',
        'expiration' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ship_symbol' => null,
        'total_seconds' => null,
        'remaining_seconds' => null,
        'expiration' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ship_symbol' => false,
        'total_seconds' => false,
        'remaining_seconds' => false,
        'expiration' => false
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
        'ship_symbol' => 'shipSymbol',
        'total_seconds' => 'totalSeconds',
        'remaining_seconds' => 'remainingSeconds',
        'expiration' => 'expiration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ship_symbol' => 'setShipSymbol',
        'total_seconds' => 'setTotalSeconds',
        'remaining_seconds' => 'setRemainingSeconds',
        'expiration' => 'setExpiration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ship_symbol' => 'getShipSymbol',
        'total_seconds' => 'getTotalSeconds',
        'remaining_seconds' => 'getRemainingSeconds',
        'expiration' => 'getExpiration'
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
        $this->setIfExists('ship_symbol', $data ?? [], null);
        $this->setIfExists('total_seconds', $data ?? [], null);
        $this->setIfExists('remaining_seconds', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
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

        if ($this->container['ship_symbol'] === null) {
            $invalidProperties[] = "'ship_symbol' can't be null";
        }
        if ((mb_strlen($this->container['ship_symbol']) < 1)) {
            $invalidProperties[] = "invalid value for 'ship_symbol', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['total_seconds'] === null) {
            $invalidProperties[] = "'total_seconds' can't be null";
        }
        if (($this->container['total_seconds'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_seconds', must be bigger than or equal to 0.";
        }

        if ($this->container['remaining_seconds'] === null) {
            $invalidProperties[] = "'remaining_seconds' can't be null";
        }
        if (($this->container['remaining_seconds'] < 0)) {
            $invalidProperties[] = "invalid value for 'remaining_seconds', must be bigger than or equal to 0.";
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
     * Gets ship_symbol
     *
     * @return string
     */
    public function getShipSymbol()
    {
        return $this->container['ship_symbol'];
    }

    /**
     * Sets ship_symbol
     *
     * @param string $ship_symbol The symbol of the ship that is on cooldown
     *
     * @return self
     */
    public function setShipSymbol($ship_symbol)
    {
        if (is_null($ship_symbol)) {
            throw new \InvalidArgumentException('non-nullable ship_symbol cannot be null');
        }

        if ((mb_strlen($ship_symbol) < 1)) {
            throw new \InvalidArgumentException('invalid length for $ship_symbol when calling Cooldown., must be bigger than or equal to 1.');
        }

        $this->container['ship_symbol'] = $ship_symbol;

        return $this;
    }

    /**
     * Gets total_seconds
     *
     * @return int
     */
    public function getTotalSeconds()
    {
        return $this->container['total_seconds'];
    }

    /**
     * Sets total_seconds
     *
     * @param int $total_seconds The total duration of the cooldown in seconds
     *
     * @return self
     */
    public function setTotalSeconds($total_seconds)
    {
        if (is_null($total_seconds)) {
            throw new \InvalidArgumentException('non-nullable total_seconds cannot be null');
        }

        if (($total_seconds < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_seconds when calling Cooldown., must be bigger than or equal to 0.');
        }

        $this->container['total_seconds'] = $total_seconds;

        return $this;
    }

    /**
     * Gets remaining_seconds
     *
     * @return int
     */
    public function getRemainingSeconds()
    {
        return $this->container['remaining_seconds'];
    }

    /**
     * Sets remaining_seconds
     *
     * @param int $remaining_seconds The remaining duration of the cooldown in seconds
     *
     * @return self
     */
    public function setRemainingSeconds($remaining_seconds)
    {
        if (is_null($remaining_seconds)) {
            throw new \InvalidArgumentException('non-nullable remaining_seconds cannot be null');
        }

        if (($remaining_seconds < 0)) {
            throw new \InvalidArgumentException('invalid value for $remaining_seconds when calling Cooldown., must be bigger than or equal to 0.');
        }

        $this->container['remaining_seconds'] = $remaining_seconds;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \DateTime|null
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \DateTime|null $expiration The date and time when the cooldown expires in ISO 8601 format
     *
     * @return self
     */
    public function setExpiration($expiration)
    {
        if (is_null($expiration)) {
            throw new \InvalidArgumentException('non-nullable expiration cannot be null');
        }
        $this->container['expiration'] = $expiration;

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


