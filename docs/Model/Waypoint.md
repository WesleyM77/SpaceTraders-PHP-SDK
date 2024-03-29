# # Waypoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**symbol** | **string** | The symbol of the waypoint. |
**type** | [**\OpenAPI\Client\Model\WaypointType**](WaypointType.md) |  |
**system_symbol** | **string** | The symbol of the system. |
**x** | **int** | Relative position of the waypoint on the system&#39;s x axis. This is not an absolute position in the universe. |
**y** | **int** | Relative position of the waypoint on the system&#39;s y axis. This is not an absolute position in the universe. |
**orbitals** | [**\OpenAPI\Client\Model\WaypointOrbital[]**](WaypointOrbital.md) | Waypoints that orbit this waypoint. |
**orbits** | **string** | The symbol of the parent waypoint, if this waypoint is in orbit around another waypoint. Otherwise this value is undefined. | [optional]
**faction** | [**\OpenAPI\Client\Model\WaypointFaction**](WaypointFaction.md) |  | [optional]
**traits** | [**\OpenAPI\Client\Model\WaypointTrait[]**](WaypointTrait.md) | The traits of the waypoint. |
**modifiers** | [**\OpenAPI\Client\Model\WaypointModifier[]**](WaypointModifier.md) | The modifiers of the waypoint. | [optional]
**chart** | [**\OpenAPI\Client\Model\Chart**](Chart.md) |  | [optional]
**is_under_construction** | **bool** | True if the waypoint is under construction. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
