<?php
/**
 * ShipyardShip
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
 * ShipyardShip Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShipyardShip implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShipyardShip';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => '\OpenAPI\Client\Model\ShipType',
        'name' => 'string',
        'description' => 'string',
        'supply' => '\OpenAPI\Client\Model\SupplyLevel',
        'activity' => '\OpenAPI\Client\Model\ActivityLevel',
        'purchase_price' => 'int',
        'frame' => '\OpenAPI\Client\Model\ShipFrame',
        'reactor' => '\OpenAPI\Client\Model\ShipReactor',
        'engine' => '\OpenAPI\Client\Model\ShipEngine',
        'modules' => '\OpenAPI\Client\Model\ShipModule[]',
        'mounts' => '\OpenAPI\Client\Model\ShipMount[]',
        'crew' => '\OpenAPI\Client\Model\ShipyardShipCrew'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
        'description' => null,
        'supply' => null,
        'activity' => null,
        'purchase_price' => null,
        'frame' => null,
        'reactor' => null,
        'engine' => null,
        'modules' => null,
        'mounts' => null,
        'crew' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'name' => false,
        'description' => false,
        'supply' => false,
        'activity' => false,
        'purchase_price' => false,
        'frame' => false,
        'reactor' => false,
        'engine' => false,
        'modules' => false,
        'mounts' => false,
        'crew' => false
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
        'type' => 'type',
        'name' => 'name',
        'description' => 'description',
        'supply' => 'supply',
        'activity' => 'activity',
        'purchase_price' => 'purchasePrice',
        'frame' => 'frame',
        'reactor' => 'reactor',
        'engine' => 'engine',
        'modules' => 'modules',
        'mounts' => 'mounts',
        'crew' => 'crew'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'description' => 'setDescription',
        'supply' => 'setSupply',
        'activity' => 'setActivity',
        'purchase_price' => 'setPurchasePrice',
        'frame' => 'setFrame',
        'reactor' => 'setReactor',
        'engine' => 'setEngine',
        'modules' => 'setModules',
        'mounts' => 'setMounts',
        'crew' => 'setCrew'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'description' => 'getDescription',
        'supply' => 'getSupply',
        'activity' => 'getActivity',
        'purchase_price' => 'getPurchasePrice',
        'frame' => 'getFrame',
        'reactor' => 'getReactor',
        'engine' => 'getEngine',
        'modules' => 'getModules',
        'mounts' => 'getMounts',
        'crew' => 'getCrew'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('supply', $data ?? [], null);
        $this->setIfExists('activity', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('frame', $data ?? [], null);
        $this->setIfExists('reactor', $data ?? [], null);
        $this->setIfExists('engine', $data ?? [], null);
        $this->setIfExists('modules', $data ?? [], null);
        $this->setIfExists('mounts', $data ?? [], null);
        $this->setIfExists('crew', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['supply'] === null) {
            $invalidProperties[] = "'supply' can't be null";
        }
        if ($this->container['purchase_price'] === null) {
            $invalidProperties[] = "'purchase_price' can't be null";
        }
        if ($this->container['frame'] === null) {
            $invalidProperties[] = "'frame' can't be null";
        }
        if ($this->container['reactor'] === null) {
            $invalidProperties[] = "'reactor' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['modules'] === null) {
            $invalidProperties[] = "'modules' can't be null";
        }
        if ($this->container['mounts'] === null) {
            $invalidProperties[] = "'mounts' can't be null";
        }
        if ($this->container['crew'] === null) {
            $invalidProperties[] = "'crew' can't be null";
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
     * Gets type
     *
     * @return \OpenAPI\Client\Model\ShipType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\ShipType $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
     * @param string $name name
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
     * @param string $description description
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
     * Gets supply
     *
     * @return \OpenAPI\Client\Model\SupplyLevel
     */
    public function getSupply()
    {
        return $this->container['supply'];
    }

    /**
     * Sets supply
     *
     * @param \OpenAPI\Client\Model\SupplyLevel $supply supply
     *
     * @return self
     */
    public function setSupply($supply)
    {
        if (is_null($supply)) {
            throw new \InvalidArgumentException('non-nullable supply cannot be null');
        }
        $this->container['supply'] = $supply;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return \OpenAPI\Client\Model\ActivityLevel|null
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param \OpenAPI\Client\Model\ActivityLevel|null $activity activity
     *
     * @return self
     */
    public function setActivity($activity)
    {
        if (is_null($activity)) {
            throw new \InvalidArgumentException('non-nullable activity cannot be null');
        }
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return int
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param int $purchase_price purchase_price
     *
     * @return self
     */
    public function setPurchasePrice($purchase_price)
    {
        if (is_null($purchase_price)) {
            throw new \InvalidArgumentException('non-nullable purchase_price cannot be null');
        }
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets frame
     *
     * @return \OpenAPI\Client\Model\ShipFrame
     */
    public function getFrame()
    {
        return $this->container['frame'];
    }

    /**
     * Sets frame
     *
     * @param \OpenAPI\Client\Model\ShipFrame $frame frame
     *
     * @return self
     */
    public function setFrame($frame)
    {
        if (is_null($frame)) {
            throw new \InvalidArgumentException('non-nullable frame cannot be null');
        }
        $this->container['frame'] = $frame;

        return $this;
    }

    /**
     * Gets reactor
     *
     * @return \OpenAPI\Client\Model\ShipReactor
     */
    public function getReactor()
    {
        return $this->container['reactor'];
    }

    /**
     * Sets reactor
     *
     * @param \OpenAPI\Client\Model\ShipReactor $reactor reactor
     *
     * @return self
     */
    public function setReactor($reactor)
    {
        if (is_null($reactor)) {
            throw new \InvalidArgumentException('non-nullable reactor cannot be null');
        }
        $this->container['reactor'] = $reactor;

        return $this;
    }

    /**
     * Gets engine
     *
     * @return \OpenAPI\Client\Model\ShipEngine
     */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
     * Sets engine
     *
     * @param \OpenAPI\Client\Model\ShipEngine $engine engine
     *
     * @return self
     */
    public function setEngine($engine)
    {
        if (is_null($engine)) {
            throw new \InvalidArgumentException('non-nullable engine cannot be null');
        }
        $this->container['engine'] = $engine;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return \OpenAPI\Client\Model\ShipModule[]
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param \OpenAPI\Client\Model\ShipModule[] $modules modules
     *
     * @return self
     */
    public function setModules($modules)
    {
        if (is_null($modules)) {
            throw new \InvalidArgumentException('non-nullable modules cannot be null');
        }
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets mounts
     *
     * @return \OpenAPI\Client\Model\ShipMount[]
     */
    public function getMounts()
    {
        return $this->container['mounts'];
    }

    /**
     * Sets mounts
     *
     * @param \OpenAPI\Client\Model\ShipMount[] $mounts mounts
     *
     * @return self
     */
    public function setMounts($mounts)
    {
        if (is_null($mounts)) {
            throw new \InvalidArgumentException('non-nullable mounts cannot be null');
        }
        $this->container['mounts'] = $mounts;

        return $this;
    }

    /**
     * Gets crew
     *
     * @return \OpenAPI\Client\Model\ShipyardShipCrew
     */
    public function getCrew()
    {
        return $this->container['crew'];
    }

    /**
     * Sets crew
     *
     * @param \OpenAPI\Client\Model\ShipyardShipCrew $crew crew
     *
     * @return self
     */
    public function setCrew($crew)
    {
        if (is_null($crew)) {
            throw new \InvalidArgumentException('non-nullable crew cannot be null');
        }
        $this->container['crew'] = $crew;

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


