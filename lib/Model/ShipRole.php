<?php
/**
 * ShipRole
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
 * ShipRole Class Doc Comment
 *
 * @category Class
 * @description The registered role of the ship
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipRole
{
    /**
     * Possible values of this enum
     */
    public const FABRICATOR = 'FABRICATOR';

    public const HARVESTER = 'HARVESTER';

    public const HAULER = 'HAULER';

    public const INTERCEPTOR = 'INTERCEPTOR';

    public const EXCAVATOR = 'EXCAVATOR';

    public const TRANSPORT = 'TRANSPORT';

    public const REPAIR = 'REPAIR';

    public const SURVEYOR = 'SURVEYOR';

    public const COMMAND = 'COMMAND';

    public const CARRIER = 'CARRIER';

    public const PATROL = 'PATROL';

    public const SATELLITE = 'SATELLITE';

    public const EXPLORER = 'EXPLORER';

    public const REFINERY = 'REFINERY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FABRICATOR,
            self::HARVESTER,
            self::HAULER,
            self::INTERCEPTOR,
            self::EXCAVATOR,
            self::TRANSPORT,
            self::REPAIR,
            self::SURVEYOR,
            self::COMMAND,
            self::CARRIER,
            self::PATROL,
            self::SATELLITE,
            self::EXPLORER,
            self::REFINERY
        ];
    }
}


