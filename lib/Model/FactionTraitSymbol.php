<?php
/**
 * FactionTraitSymbol
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
 * FactionTraitSymbol Class Doc Comment
 *
 * @category Class
 * @description The unique identifier of the trait.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FactionTraitSymbol
{
    /**
     * Possible values of this enum
     */
    public const BUREAUCRATIC = 'BUREAUCRATIC';

    public const SECRETIVE = 'SECRETIVE';

    public const CAPITALISTIC = 'CAPITALISTIC';

    public const INDUSTRIOUS = 'INDUSTRIOUS';

    public const PEACEFUL = 'PEACEFUL';

    public const DISTRUSTFUL = 'DISTRUSTFUL';

    public const WELCOMING = 'WELCOMING';

    public const SMUGGLERS = 'SMUGGLERS';

    public const SCAVENGERS = 'SCAVENGERS';

    public const REBELLIOUS = 'REBELLIOUS';

    public const EXILES = 'EXILES';

    public const PIRATES = 'PIRATES';

    public const RAIDERS = 'RAIDERS';

    public const CLAN = 'CLAN';

    public const GUILD = 'GUILD';

    public const DOMINION = 'DOMINION';

    public const FRINGE = 'FRINGE';

    public const FORSAKEN = 'FORSAKEN';

    public const ISOLATED = 'ISOLATED';

    public const LOCALIZED = 'LOCALIZED';

    public const ESTABLISHED = 'ESTABLISHED';

    public const NOTABLE = 'NOTABLE';

    public const DOMINANT = 'DOMINANT';

    public const INESCAPABLE = 'INESCAPABLE';

    public const INNOVATIVE = 'INNOVATIVE';

    public const BOLD = 'BOLD';

    public const VISIONARY = 'VISIONARY';

    public const CURIOUS = 'CURIOUS';

    public const DARING = 'DARING';

    public const EXPLORATORY = 'EXPLORATORY';

    public const RESOURCEFUL = 'RESOURCEFUL';

    public const FLEXIBLE = 'FLEXIBLE';

    public const COOPERATIVE = 'COOPERATIVE';

    public const UNITED = 'UNITED';

    public const STRATEGIC = 'STRATEGIC';

    public const INTELLIGENT = 'INTELLIGENT';

    public const RESEARCH_FOCUSED = 'RESEARCH_FOCUSED';

    public const COLLABORATIVE = 'COLLABORATIVE';

    public const PROGRESSIVE = 'PROGRESSIVE';

    public const MILITARISTIC = 'MILITARISTIC';

    public const TECHNOLOGICALLY_ADVANCED = 'TECHNOLOGICALLY_ADVANCED';

    public const AGGRESSIVE = 'AGGRESSIVE';

    public const IMPERIALISTIC = 'IMPERIALISTIC';

    public const TREASURE_HUNTERS = 'TREASURE_HUNTERS';

    public const DEXTEROUS = 'DEXTEROUS';

    public const UNPREDICTABLE = 'UNPREDICTABLE';

    public const BRUTAL = 'BRUTAL';

    public const FLEETING = 'FLEETING';

    public const ADAPTABLE = 'ADAPTABLE';

    public const SELF_SUFFICIENT = 'SELF_SUFFICIENT';

    public const DEFENSIVE = 'DEFENSIVE';

    public const PROUD = 'PROUD';

    public const DIVERSE = 'DIVERSE';

    public const INDEPENDENT = 'INDEPENDENT';

    public const SELF_INTERESTED = 'SELF_INTERESTED';

    public const FRAGMENTED = 'FRAGMENTED';

    public const COMMERCIAL = 'COMMERCIAL';

    public const FREE_MARKETS = 'FREE_MARKETS';

    public const ENTREPRENEURIAL = 'ENTREPRENEURIAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUREAUCRATIC,
            self::SECRETIVE,
            self::CAPITALISTIC,
            self::INDUSTRIOUS,
            self::PEACEFUL,
            self::DISTRUSTFUL,
            self::WELCOMING,
            self::SMUGGLERS,
            self::SCAVENGERS,
            self::REBELLIOUS,
            self::EXILES,
            self::PIRATES,
            self::RAIDERS,
            self::CLAN,
            self::GUILD,
            self::DOMINION,
            self::FRINGE,
            self::FORSAKEN,
            self::ISOLATED,
            self::LOCALIZED,
            self::ESTABLISHED,
            self::NOTABLE,
            self::DOMINANT,
            self::INESCAPABLE,
            self::INNOVATIVE,
            self::BOLD,
            self::VISIONARY,
            self::CURIOUS,
            self::DARING,
            self::EXPLORATORY,
            self::RESOURCEFUL,
            self::FLEXIBLE,
            self::COOPERATIVE,
            self::UNITED,
            self::STRATEGIC,
            self::INTELLIGENT,
            self::RESEARCH_FOCUSED,
            self::COLLABORATIVE,
            self::PROGRESSIVE,
            self::MILITARISTIC,
            self::TECHNOLOGICALLY_ADVANCED,
            self::AGGRESSIVE,
            self::IMPERIALISTIC,
            self::TREASURE_HUNTERS,
            self::DEXTEROUS,
            self::UNPREDICTABLE,
            self::BRUTAL,
            self::FLEETING,
            self::ADAPTABLE,
            self::SELF_SUFFICIENT,
            self::DEFENSIVE,
            self::PROUD,
            self::DIVERSE,
            self::INDEPENDENT,
            self::SELF_INTERESTED,
            self::FRAGMENTED,
            self::COMMERCIAL,
            self::FREE_MARKETS,
            self::ENTREPRENEURIAL
        ];
    }
}

