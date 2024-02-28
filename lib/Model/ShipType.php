<?php
/**
 * ShipType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * ShipType Class Doc Comment
 *
 * @category Class
 * @description Type of ship
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipType
{
    /**
     * Possible values of this enum
     */
    public const PROBE = 'SHIP_PROBE';

    public const MINING_DRONE = 'SHIP_MINING_DRONE';

    public const SIPHON_DRONE = 'SHIP_SIPHON_DRONE';

    public const INTERCEPTOR = 'SHIP_INTERCEPTOR';

    public const LIGHT_HAULER = 'SHIP_LIGHT_HAULER';

    public const COMMAND_FRIGATE = 'SHIP_COMMAND_FRIGATE';

    public const EXPLORER = 'SHIP_EXPLORER';

    public const HEAVY_FREIGHTER = 'SHIP_HEAVY_FREIGHTER';

    public const LIGHT_SHUTTLE = 'SHIP_LIGHT_SHUTTLE';

    public const ORE_HOUND = 'SHIP_ORE_HOUND';

    public const REFINING_FREIGHTER = 'SHIP_REFINING_FREIGHTER';

    public const SURVEYOR = 'SHIP_SURVEYOR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROBE,
            self::MINING_DRONE,
            self::SIPHON_DRONE,
            self::INTERCEPTOR,
            self::LIGHT_HAULER,
            self::COMMAND_FRIGATE,
            self::EXPLORER,
            self::HEAVY_FREIGHTER,
            self::LIGHT_SHUTTLE,
            self::ORE_HOUND,
            self::REFINING_FREIGHTER,
            self::SURVEYOR
        ];
    }
}

