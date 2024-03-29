<?php
/**
 * ShipEngine
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
 * ShipEngine Class Doc Comment
 *
 * @category Class
 * @description The engine determines how quickly a ship travels between waypoints.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipEngine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipEngine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'name' => 'string',
        'description' => 'string',
        'condition' => 'int',
        'speed' => 'int',
        'requirements' => '\OpenAPI\Client\Model\ShipRequirements'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'symbol' => null,
        'name' => null,
        'description' => null,
        'condition' => null,
        'speed' => null,
        'requirements' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'symbol' => false,
        'name' => false,
        'description' => false,
        'condition' => false,
        'speed' => false,
        'requirements' => false
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
        'symbol' => 'symbol',
        'name' => 'name',
        'description' => 'description',
        'condition' => 'condition',
        'speed' => 'speed',
        'requirements' => 'requirements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'name' => 'setName',
        'description' => 'setDescription',
        'condition' => 'setCondition',
        'speed' => 'setSpeed',
        'requirements' => 'setRequirements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'name' => 'getName',
        'description' => 'getDescription',
        'condition' => 'getCondition',
        'speed' => 'getSpeed',
        'requirements' => 'getRequirements'
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

    public const SYMBOL_IMPULSE_DRIVE_I = 'ENGINE_IMPULSE_DRIVE_I';
    public const SYMBOL_ION_DRIVE_I = 'ENGINE_ION_DRIVE_I';
    public const SYMBOL_ION_DRIVE_II = 'ENGINE_ION_DRIVE_II';
    public const SYMBOL_HYPER_DRIVE_I = 'ENGINE_HYPER_DRIVE_I';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSymbolAllowableValues()
    {
        return [
            self::SYMBOL_IMPULSE_DRIVE_I,
            self::SYMBOL_ION_DRIVE_I,
            self::SYMBOL_ION_DRIVE_II,
            self::SYMBOL_HYPER_DRIVE_I,
        ];
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
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('speed', $data ?? [], null);
        $this->setIfExists('requirements', $data ?? [], null);
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

        if ($this->container['symbol'] === null) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        $allowedValues = $this->getSymbolAllowableValues();
        if (!is_null($this->container['symbol']) && !in_array($this->container['symbol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'symbol', must be one of '%s'",
                $this->container['symbol'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if (!is_null($this->container['condition']) && ($this->container['condition'] > 100)) {
            $invalidProperties[] = "invalid value for 'condition', must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['condition']) && ($this->container['condition'] < 0)) {
            $invalidProperties[] = "invalid value for 'condition', must be bigger than or equal to 0.";
        }

        if ($this->container['speed'] === null) {
            $invalidProperties[] = "'speed' can't be null";
        }
        if (($this->container['speed'] < 1)) {
            $invalidProperties[] = "invalid value for 'speed', must be bigger than or equal to 1.";
        }

        if ($this->container['requirements'] === null) {
            $invalidProperties[] = "'requirements' can't be null";
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
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol The symbol of the engine.
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $allowedValues = $this->getSymbolAllowableValues();
        if (!in_array($symbol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'symbol', must be one of '%s'",
                    $symbol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the engine.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The description of the engine.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return int|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param int|null $condition Condition is a range of 0 to 100 where 0 is completely worn out and 100 is brand new.
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }

        if (($condition > 100)) {
            throw new \InvalidArgumentException('invalid value for $condition when calling ShipEngine., must be smaller than or equal to 100.');
        }
        if (($condition < 0)) {
            throw new \InvalidArgumentException('invalid value for $condition when calling ShipEngine., must be bigger than or equal to 0.');
        }

        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets speed
     *
     * @return int
     */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
     * Sets speed
     *
     * @param int $speed The speed stat of this engine. The higher the speed, the faster a ship can travel from one point to another. Reduces the time of arrival when navigating the ship.
     *
     * @return self
     */
    public function setSpeed($speed)
    {
        if (is_null($speed)) {
            throw new \InvalidArgumentException('non-nullable speed cannot be null');
        }

        if (($speed < 1)) {
            throw new \InvalidArgumentException('invalid value for $speed when calling ShipEngine., must be bigger than or equal to 1.');
        }

        $this->container['speed'] = $speed;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \OpenAPI\Client\Model\ShipRequirements
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param \OpenAPI\Client\Model\ShipRequirements $requirements requirements
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        if (is_null($requirements)) {
            throw new \InvalidArgumentException('non-nullable requirements cannot be null');
        }
        $this->container['requirements'] = $requirements;

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


