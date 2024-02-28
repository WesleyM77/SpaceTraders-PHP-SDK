<?php
/**
 * TradeSymbol
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
 * TradeSymbol Class Doc Comment
 *
 * @category Class
 * @description The good&#39;s symbol.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TradeSymbol
{
    /**
     * Possible values of this enum
     */
    public const PRECIOUS_STONES = 'PRECIOUS_STONES';

    public const QUARTZ_SAND = 'QUARTZ_SAND';

    public const SILICON_CRYSTALS = 'SILICON_CRYSTALS';

    public const AMMONIA_ICE = 'AMMONIA_ICE';

    public const LIQUID_HYDROGEN = 'LIQUID_HYDROGEN';

    public const LIQUID_NITROGEN = 'LIQUID_NITROGEN';

    public const ICE_WATER = 'ICE_WATER';

    public const EXOTIC_MATTER = 'EXOTIC_MATTER';

    public const ADVANCED_CIRCUITRY = 'ADVANCED_CIRCUITRY';

    public const GRAVITON_EMITTERS = 'GRAVITON_EMITTERS';

    public const IRON = 'IRON';

    public const IRON_ORE = 'IRON_ORE';

    public const COPPER = 'COPPER';

    public const COPPER_ORE = 'COPPER_ORE';

    public const ALUMINUM = 'ALUMINUM';

    public const ALUMINUM_ORE = 'ALUMINUM_ORE';

    public const SILVER = 'SILVER';

    public const SILVER_ORE = 'SILVER_ORE';

    public const GOLD = 'GOLD';

    public const GOLD_ORE = 'GOLD_ORE';

    public const PLATINUM = 'PLATINUM';

    public const PLATINUM_ORE = 'PLATINUM_ORE';

    public const DIAMONDS = 'DIAMONDS';

    public const URANITE = 'URANITE';

    public const URANITE_ORE = 'URANITE_ORE';

    public const MERITIUM = 'MERITIUM';

    public const MERITIUM_ORE = 'MERITIUM_ORE';

    public const HYDROCARBON = 'HYDROCARBON';

    public const ANTIMATTER = 'ANTIMATTER';

    public const FAB_MATS = 'FAB_MATS';

    public const FERTILIZERS = 'FERTILIZERS';

    public const FABRICS = 'FABRICS';

    public const FOOD = 'FOOD';

    public const JEWELRY = 'JEWELRY';

    public const MACHINERY = 'MACHINERY';

    public const FIREARMS = 'FIREARMS';

    public const ASSAULT_RIFLES = 'ASSAULT_RIFLES';

    public const MILITARY_EQUIPMENT = 'MILITARY_EQUIPMENT';

    public const EXPLOSIVES = 'EXPLOSIVES';

    public const LAB_INSTRUMENTS = 'LAB_INSTRUMENTS';

    public const AMMUNITION = 'AMMUNITION';

    public const ELECTRONICS = 'ELECTRONICS';

    public const SHIP_PLATING = 'SHIP_PLATING';

    public const SHIP_PARTS = 'SHIP_PARTS';

    public const EQUIPMENT = 'EQUIPMENT';

    public const FUEL = 'FUEL';

    public const MEDICINE = 'MEDICINE';

    public const DRUGS = 'DRUGS';

    public const CLOTHING = 'CLOTHING';

    public const MICROPROCESSORS = 'MICROPROCESSORS';

    public const PLASTICS = 'PLASTICS';

    public const POLYNUCLEOTIDES = 'POLYNUCLEOTIDES';

    public const BIOCOMPOSITES = 'BIOCOMPOSITES';

    public const QUANTUM_STABILIZERS = 'QUANTUM_STABILIZERS';

    public const NANOBOTS = 'NANOBOTS';

    public const AI_MAINFRAMES = 'AI_MAINFRAMES';

    public const QUANTUM_DRIVES = 'QUANTUM_DRIVES';

    public const ROBOTIC_DRONES = 'ROBOTIC_DRONES';

    public const CYBER_IMPLANTS = 'CYBER_IMPLANTS';

    public const GENE_THERAPEUTICS = 'GENE_THERAPEUTICS';

    public const NEURAL_CHIPS = 'NEURAL_CHIPS';

    public const MOOD_REGULATORS = 'MOOD_REGULATORS';

    public const VIRAL_AGENTS = 'VIRAL_AGENTS';

    public const MICRO_FUSION_GENERATORS = 'MICRO_FUSION_GENERATORS';

    public const SUPERGRAINS = 'SUPERGRAINS';

    public const LASER_RIFLES = 'LASER_RIFLES';

    public const HOLOGRAPHICS = 'HOLOGRAPHICS';

    public const SHIP_SALVAGE = 'SHIP_SALVAGE';

    public const RELIC_TECH = 'RELIC_TECH';

    public const NOVEL_LIFEFORMS = 'NOVEL_LIFEFORMS';

    public const BOTANICAL_SPECIMENS = 'BOTANICAL_SPECIMENS';

    public const CULTURAL_ARTIFACTS = 'CULTURAL_ARTIFACTS';

    public const FRAME_PROBE = 'FRAME_PROBE';

    public const FRAME_DRONE = 'FRAME_DRONE';

    public const FRAME_INTERCEPTOR = 'FRAME_INTERCEPTOR';

    public const FRAME_RACER = 'FRAME_RACER';

    public const FRAME_FIGHTER = 'FRAME_FIGHTER';

    public const FRAME_FRIGATE = 'FRAME_FRIGATE';

    public const FRAME_SHUTTLE = 'FRAME_SHUTTLE';

    public const FRAME_EXPLORER = 'FRAME_EXPLORER';

    public const FRAME_MINER = 'FRAME_MINER';

    public const FRAME_LIGHT_FREIGHTER = 'FRAME_LIGHT_FREIGHTER';

    public const FRAME_HEAVY_FREIGHTER = 'FRAME_HEAVY_FREIGHTER';

    public const FRAME_TRANSPORT = 'FRAME_TRANSPORT';

    public const FRAME_DESTROYER = 'FRAME_DESTROYER';

    public const FRAME_CRUISER = 'FRAME_CRUISER';

    public const FRAME_CARRIER = 'FRAME_CARRIER';

    public const REACTOR_SOLAR_I = 'REACTOR_SOLAR_I';

    public const REACTOR_FUSION_I = 'REACTOR_FUSION_I';

    public const REACTOR_FISSION_I = 'REACTOR_FISSION_I';

    public const REACTOR_CHEMICAL_I = 'REACTOR_CHEMICAL_I';

    public const REACTOR_ANTIMATTER_I = 'REACTOR_ANTIMATTER_I';

    public const ENGINE_IMPULSE_DRIVE_I = 'ENGINE_IMPULSE_DRIVE_I';

    public const ENGINE_ION_DRIVE_I = 'ENGINE_ION_DRIVE_I';

    public const ENGINE_ION_DRIVE_II = 'ENGINE_ION_DRIVE_II';

    public const ENGINE_HYPER_DRIVE_I = 'ENGINE_HYPER_DRIVE_I';

    public const MODULE_MINERAL_PROCESSOR_I = 'MODULE_MINERAL_PROCESSOR_I';

    public const MODULE_GAS_PROCESSOR_I = 'MODULE_GAS_PROCESSOR_I';

    public const MODULE_CARGO_HOLD_I = 'MODULE_CARGO_HOLD_I';

    public const MODULE_CARGO_HOLD_II = 'MODULE_CARGO_HOLD_II';

    public const MODULE_CARGO_HOLD_III = 'MODULE_CARGO_HOLD_III';

    public const MODULE_CREW_QUARTERS_I = 'MODULE_CREW_QUARTERS_I';

    public const MODULE_ENVOY_QUARTERS_I = 'MODULE_ENVOY_QUARTERS_I';

    public const MODULE_PASSENGER_CABIN_I = 'MODULE_PASSENGER_CABIN_I';

    public const MODULE_MICRO_REFINERY_I = 'MODULE_MICRO_REFINERY_I';

    public const MODULE_SCIENCE_LAB_I = 'MODULE_SCIENCE_LAB_I';

    public const MODULE_JUMP_DRIVE_I = 'MODULE_JUMP_DRIVE_I';

    public const MODULE_JUMP_DRIVE_II = 'MODULE_JUMP_DRIVE_II';

    public const MODULE_JUMP_DRIVE_III = 'MODULE_JUMP_DRIVE_III';

    public const MODULE_WARP_DRIVE_I = 'MODULE_WARP_DRIVE_I';

    public const MODULE_WARP_DRIVE_II = 'MODULE_WARP_DRIVE_II';

    public const MODULE_WARP_DRIVE_III = 'MODULE_WARP_DRIVE_III';

    public const MODULE_SHIELD_GENERATOR_I = 'MODULE_SHIELD_GENERATOR_I';

    public const MODULE_SHIELD_GENERATOR_II = 'MODULE_SHIELD_GENERATOR_II';

    public const MODULE_ORE_REFINERY_I = 'MODULE_ORE_REFINERY_I';

    public const MODULE_FUEL_REFINERY_I = 'MODULE_FUEL_REFINERY_I';

    public const MOUNT_GAS_SIPHON_I = 'MOUNT_GAS_SIPHON_I';

    public const MOUNT_GAS_SIPHON_II = 'MOUNT_GAS_SIPHON_II';

    public const MOUNT_GAS_SIPHON_III = 'MOUNT_GAS_SIPHON_III';

    public const MOUNT_SURVEYOR_I = 'MOUNT_SURVEYOR_I';

    public const MOUNT_SURVEYOR_II = 'MOUNT_SURVEYOR_II';

    public const MOUNT_SURVEYOR_III = 'MOUNT_SURVEYOR_III';

    public const MOUNT_SENSOR_ARRAY_I = 'MOUNT_SENSOR_ARRAY_I';

    public const MOUNT_SENSOR_ARRAY_II = 'MOUNT_SENSOR_ARRAY_II';

    public const MOUNT_SENSOR_ARRAY_III = 'MOUNT_SENSOR_ARRAY_III';

    public const MOUNT_MINING_LASER_I = 'MOUNT_MINING_LASER_I';

    public const MOUNT_MINING_LASER_II = 'MOUNT_MINING_LASER_II';

    public const MOUNT_MINING_LASER_III = 'MOUNT_MINING_LASER_III';

    public const MOUNT_LASER_CANNON_I = 'MOUNT_LASER_CANNON_I';

    public const MOUNT_MISSILE_LAUNCHER_I = 'MOUNT_MISSILE_LAUNCHER_I';

    public const MOUNT_TURRET_I = 'MOUNT_TURRET_I';

    public const SHIP_PROBE = 'SHIP_PROBE';

    public const SHIP_MINING_DRONE = 'SHIP_MINING_DRONE';

    public const SHIP_SIPHON_DRONE = 'SHIP_SIPHON_DRONE';

    public const SHIP_INTERCEPTOR = 'SHIP_INTERCEPTOR';

    public const SHIP_LIGHT_HAULER = 'SHIP_LIGHT_HAULER';

    public const SHIP_COMMAND_FRIGATE = 'SHIP_COMMAND_FRIGATE';

    public const SHIP_EXPLORER = 'SHIP_EXPLORER';

    public const SHIP_HEAVY_FREIGHTER = 'SHIP_HEAVY_FREIGHTER';

    public const SHIP_LIGHT_SHUTTLE = 'SHIP_LIGHT_SHUTTLE';

    public const SHIP_ORE_HOUND = 'SHIP_ORE_HOUND';

    public const SHIP_REFINING_FREIGHTER = 'SHIP_REFINING_FREIGHTER';

    public const SHIP_SURVEYOR = 'SHIP_SURVEYOR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRECIOUS_STONES,
            self::QUARTZ_SAND,
            self::SILICON_CRYSTALS,
            self::AMMONIA_ICE,
            self::LIQUID_HYDROGEN,
            self::LIQUID_NITROGEN,
            self::ICE_WATER,
            self::EXOTIC_MATTER,
            self::ADVANCED_CIRCUITRY,
            self::GRAVITON_EMITTERS,
            self::IRON,
            self::IRON_ORE,
            self::COPPER,
            self::COPPER_ORE,
            self::ALUMINUM,
            self::ALUMINUM_ORE,
            self::SILVER,
            self::SILVER_ORE,
            self::GOLD,
            self::GOLD_ORE,
            self::PLATINUM,
            self::PLATINUM_ORE,
            self::DIAMONDS,
            self::URANITE,
            self::URANITE_ORE,
            self::MERITIUM,
            self::MERITIUM_ORE,
            self::HYDROCARBON,
            self::ANTIMATTER,
            self::FAB_MATS,
            self::FERTILIZERS,
            self::FABRICS,
            self::FOOD,
            self::JEWELRY,
            self::MACHINERY,
            self::FIREARMS,
            self::ASSAULT_RIFLES,
            self::MILITARY_EQUIPMENT,
            self::EXPLOSIVES,
            self::LAB_INSTRUMENTS,
            self::AMMUNITION,
            self::ELECTRONICS,
            self::SHIP_PLATING,
            self::SHIP_PARTS,
            self::EQUIPMENT,
            self::FUEL,
            self::MEDICINE,
            self::DRUGS,
            self::CLOTHING,
            self::MICROPROCESSORS,
            self::PLASTICS,
            self::POLYNUCLEOTIDES,
            self::BIOCOMPOSITES,
            self::QUANTUM_STABILIZERS,
            self::NANOBOTS,
            self::AI_MAINFRAMES,
            self::QUANTUM_DRIVES,
            self::ROBOTIC_DRONES,
            self::CYBER_IMPLANTS,
            self::GENE_THERAPEUTICS,
            self::NEURAL_CHIPS,
            self::MOOD_REGULATORS,
            self::VIRAL_AGENTS,
            self::MICRO_FUSION_GENERATORS,
            self::SUPERGRAINS,
            self::LASER_RIFLES,
            self::HOLOGRAPHICS,
            self::SHIP_SALVAGE,
            self::RELIC_TECH,
            self::NOVEL_LIFEFORMS,
            self::BOTANICAL_SPECIMENS,
            self::CULTURAL_ARTIFACTS,
            self::FRAME_PROBE,
            self::FRAME_DRONE,
            self::FRAME_INTERCEPTOR,
            self::FRAME_RACER,
            self::FRAME_FIGHTER,
            self::FRAME_FRIGATE,
            self::FRAME_SHUTTLE,
            self::FRAME_EXPLORER,
            self::FRAME_MINER,
            self::FRAME_LIGHT_FREIGHTER,
            self::FRAME_HEAVY_FREIGHTER,
            self::FRAME_TRANSPORT,
            self::FRAME_DESTROYER,
            self::FRAME_CRUISER,
            self::FRAME_CARRIER,
            self::REACTOR_SOLAR_I,
            self::REACTOR_FUSION_I,
            self::REACTOR_FISSION_I,
            self::REACTOR_CHEMICAL_I,
            self::REACTOR_ANTIMATTER_I,
            self::ENGINE_IMPULSE_DRIVE_I,
            self::ENGINE_ION_DRIVE_I,
            self::ENGINE_ION_DRIVE_II,
            self::ENGINE_HYPER_DRIVE_I,
            self::MODULE_MINERAL_PROCESSOR_I,
            self::MODULE_GAS_PROCESSOR_I,
            self::MODULE_CARGO_HOLD_I,
            self::MODULE_CARGO_HOLD_II,
            self::MODULE_CARGO_HOLD_III,
            self::MODULE_CREW_QUARTERS_I,
            self::MODULE_ENVOY_QUARTERS_I,
            self::MODULE_PASSENGER_CABIN_I,
            self::MODULE_MICRO_REFINERY_I,
            self::MODULE_SCIENCE_LAB_I,
            self::MODULE_JUMP_DRIVE_I,
            self::MODULE_JUMP_DRIVE_II,
            self::MODULE_JUMP_DRIVE_III,
            self::MODULE_WARP_DRIVE_I,
            self::MODULE_WARP_DRIVE_II,
            self::MODULE_WARP_DRIVE_III,
            self::MODULE_SHIELD_GENERATOR_I,
            self::MODULE_SHIELD_GENERATOR_II,
            self::MODULE_ORE_REFINERY_I,
            self::MODULE_FUEL_REFINERY_I,
            self::MOUNT_GAS_SIPHON_I,
            self::MOUNT_GAS_SIPHON_II,
            self::MOUNT_GAS_SIPHON_III,
            self::MOUNT_SURVEYOR_I,
            self::MOUNT_SURVEYOR_II,
            self::MOUNT_SURVEYOR_III,
            self::MOUNT_SENSOR_ARRAY_I,
            self::MOUNT_SENSOR_ARRAY_II,
            self::MOUNT_SENSOR_ARRAY_III,
            self::MOUNT_MINING_LASER_I,
            self::MOUNT_MINING_LASER_II,
            self::MOUNT_MINING_LASER_III,
            self::MOUNT_LASER_CANNON_I,
            self::MOUNT_MISSILE_LAUNCHER_I,
            self::MOUNT_TURRET_I,
            self::SHIP_PROBE,
            self::SHIP_MINING_DRONE,
            self::SHIP_SIPHON_DRONE,
            self::SHIP_INTERCEPTOR,
            self::SHIP_LIGHT_HAULER,
            self::SHIP_COMMAND_FRIGATE,
            self::SHIP_EXPLORER,
            self::SHIP_HEAVY_FREIGHTER,
            self::SHIP_LIGHT_SHUTTLE,
            self::SHIP_ORE_HOUND,
            self::SHIP_REFINING_FREIGHTER,
            self::SHIP_SURVEYOR
        ];
    }
}

