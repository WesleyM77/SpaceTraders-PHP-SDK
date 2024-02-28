# OpenAPI\Client\FleetApi

All URIs are relative to https://api.spacetraders.io/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChart()**](FleetApi.md#createChart) | **POST** /my/ships/{shipSymbol}/chart | Create Chart |
| [**createShipShipScan()**](FleetApi.md#createShipShipScan) | **POST** /my/ships/{shipSymbol}/scan/ships | Scan Ships |
| [**createShipSystemScan()**](FleetApi.md#createShipSystemScan) | **POST** /my/ships/{shipSymbol}/scan/systems | Scan Systems |
| [**createShipWaypointScan()**](FleetApi.md#createShipWaypointScan) | **POST** /my/ships/{shipSymbol}/scan/waypoints | Scan Waypoints |
| [**createSurvey()**](FleetApi.md#createSurvey) | **POST** /my/ships/{shipSymbol}/survey | Create Survey |
| [**dockShip()**](FleetApi.md#dockShip) | **POST** /my/ships/{shipSymbol}/dock | Dock Ship |
| [**extractResources()**](FleetApi.md#extractResources) | **POST** /my/ships/{shipSymbol}/extract | Extract Resources |
| [**extractResourcesWithSurvey()**](FleetApi.md#extractResourcesWithSurvey) | **POST** /my/ships/{shipSymbol}/extract/survey | Extract Resources with Survey |
| [**getMounts()**](FleetApi.md#getMounts) | **GET** /my/ships/{shipSymbol}/mounts | Get Mounts |
| [**getMyShip()**](FleetApi.md#getMyShip) | **GET** /my/ships/{shipSymbol} | Get Ship |
| [**getMyShipCargo()**](FleetApi.md#getMyShipCargo) | **GET** /my/ships/{shipSymbol}/cargo | Get Ship Cargo |
| [**getMyShips()**](FleetApi.md#getMyShips) | **GET** /my/ships | List Ships |
| [**getShipCooldown()**](FleetApi.md#getShipCooldown) | **GET** /my/ships/{shipSymbol}/cooldown | Get Ship Cooldown |
| [**getShipNav()**](FleetApi.md#getShipNav) | **GET** /my/ships/{shipSymbol}/nav | Get Ship Nav |
| [**installMount()**](FleetApi.md#installMount) | **POST** /my/ships/{shipSymbol}/mounts/install | Install Mount |
| [**jettison()**](FleetApi.md#jettison) | **POST** /my/ships/{shipSymbol}/jettison | Jettison Cargo |
| [**jumpShip()**](FleetApi.md#jumpShip) | **POST** /my/ships/{shipSymbol}/jump | Jump Ship |
| [**navigateShip()**](FleetApi.md#navigateShip) | **POST** /my/ships/{shipSymbol}/navigate | Navigate Ship |
| [**negotiateContract()**](FleetApi.md#negotiateContract) | **POST** /my/ships/{shipSymbol}/negotiate/contract | Negotiate Contract |
| [**orbitShip()**](FleetApi.md#orbitShip) | **POST** /my/ships/{shipSymbol}/orbit | Orbit Ship |
| [**patchShipNav()**](FleetApi.md#patchShipNav) | **PATCH** /my/ships/{shipSymbol}/nav | Patch Ship Nav |
| [**purchaseCargo()**](FleetApi.md#purchaseCargo) | **POST** /my/ships/{shipSymbol}/purchase | Purchase Cargo |
| [**purchaseShip()**](FleetApi.md#purchaseShip) | **POST** /my/ships | Purchase Ship |
| [**refuelShip()**](FleetApi.md#refuelShip) | **POST** /my/ships/{shipSymbol}/refuel | Refuel Ship |
| [**removeMount()**](FleetApi.md#removeMount) | **POST** /my/ships/{shipSymbol}/mounts/remove | Remove Mount |
| [**sellCargo()**](FleetApi.md#sellCargo) | **POST** /my/ships/{shipSymbol}/sell | Sell Cargo |
| [**shipRefine()**](FleetApi.md#shipRefine) | **POST** /my/ships/{shipSymbol}/refine | Ship Refine |
| [**siphonResources()**](FleetApi.md#siphonResources) | **POST** /my/ships/{shipSymbol}/siphon | Siphon Resources |
| [**transferCargo()**](FleetApi.md#transferCargo) | **POST** /my/ships/{shipSymbol}/transfer | Transfer Cargo |
| [**warpShip()**](FleetApi.md#warpShip) | **POST** /my/ships/{shipSymbol}/warp | Warp Ship |


## `createChart()`

```php
createChart($ship_symbol): \OpenAPI\Client\Model\CreateChart201Response
```

Create Chart

Command a ship to chart the waypoint at its current location.  Most waypoints in the universe are uncharted by default. These waypoints have their traits hidden until they have been charted by a ship.  Charting a waypoint will record your agent as the one who created the chart, and all other agents would also be able to see the waypoint's traits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->createChart($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\CreateChart201Response**](../Model/CreateChart201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipShipScan()`

```php
createShipShipScan($ship_symbol): \OpenAPI\Client\Model\CreateShipShipScan201Response
```

Scan Ships

Scan for nearby ships, retrieving information for all ships in range.  Requires a ship to have the `Sensor Array` mount installed to use.  The ship will enter a cooldown after using this function, during which it cannot execute certain actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.

try {
    $result = $apiInstance->createShipShipScan($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createShipShipScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |

### Return type

[**\OpenAPI\Client\Model\CreateShipShipScan201Response**](../Model/CreateShipShipScan201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipSystemScan()`

```php
createShipSystemScan($ship_symbol): \OpenAPI\Client\Model\CreateShipSystemScan201Response
```

Scan Systems

Scan for nearby systems, retrieving information on the systems' distance from the ship and their waypoints. Requires a ship to have the `Sensor Array` mount installed to use.  The ship will enter a cooldown after using this function, during which it cannot execute certain actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.

try {
    $result = $apiInstance->createShipSystemScan($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createShipSystemScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |

### Return type

[**\OpenAPI\Client\Model\CreateShipSystemScan201Response**](../Model/CreateShipSystemScan201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createShipWaypointScan()`

```php
createShipWaypointScan($ship_symbol): \OpenAPI\Client\Model\CreateShipWaypointScan201Response
```

Scan Waypoints

Scan for nearby waypoints, retrieving detailed information on each waypoint in range. Scanning uncharted waypoints will allow you to ignore their uncharted state and will list the waypoints' traits.  Requires a ship to have the `Sensor Array` mount installed to use.  The ship will enter a cooldown after using this function, during which it cannot execute certain actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.

try {
    $result = $apiInstance->createShipWaypointScan($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createShipWaypointScan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |

### Return type

[**\OpenAPI\Client\Model\CreateShipWaypointScan201Response**](../Model/CreateShipWaypointScan201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSurvey()`

```php
createSurvey($ship_symbol): \OpenAPI\Client\Model\CreateSurvey201Response
```

Create Survey

Create surveys on a waypoint that can be extracted such as asteroid fields. A survey focuses on specific types of deposits from the extracted location. When ships extract using this survey, they are guaranteed to procure a high amount of one of the goods in the survey.  In order to use a survey, send the entire survey details in the body of the extract request.  Each survey may have multiple deposits, and if a symbol shows up more than once, that indicates a higher chance of extracting that resource.  Your ship will enter a cooldown after surveying in which it is unable to perform certain actions. Surveys will eventually expire after a period of time or will be exhausted after being extracted several times based on the survey's size. Multiple ships can use the same survey for extraction.  A ship must have the `Surveyor` mount installed in order to use this function.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->createSurvey($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->createSurvey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\CreateSurvey201Response**](../Model/CreateSurvey201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dockShip()`

```php
dockShip($ship_symbol): \OpenAPI\Client\Model\DockShip200Response
```

Dock Ship

Attempt to dock your ship at its current location. Docking will only succeed if your ship is capable of docking at the time of the request.  Docked ships can access elements in their current location, such as the market or a shipyard, but cannot do actions that require the ship to be above surface such as navigating or extracting.  The endpoint is idempotent - successive calls will succeed even if the ship is already docked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->dockShip($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->dockShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\DockShip200Response**](../Model/DockShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extractResources()`

```php
extractResources($ship_symbol, $extract_resources_request): \OpenAPI\Client\Model\ExtractResources201Response
```

Extract Resources

Extract resources from a waypoint that can be extracted, such as asteroid fields, into your ship. Send an optional survey as the payload to target specific yields.  The ship must be in orbit to be able to extract and must have mining equipments installed that can extract goods, such as the `Gas Siphon` mount for gas-based goods or `Mining Laser` mount for ore-based goods.  The survey property is now deprecated. See the `extract/survey` endpoint for more details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$extract_resources_request = new \OpenAPI\Client\Model\ExtractResourcesRequest(); // \OpenAPI\Client\Model\ExtractResourcesRequest

try {
    $result = $apiInstance->extractResources($ship_symbol, $extract_resources_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->extractResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **extract_resources_request** | [**\OpenAPI\Client\Model\ExtractResourcesRequest**](../Model/ExtractResourcesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtractResources201Response**](../Model/ExtractResources201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extractResourcesWithSurvey()`

```php
extractResourcesWithSurvey($ship_symbol, $survey): \OpenAPI\Client\Model\ExtractResources201Response
```

Extract Resources with Survey

Use a survey when extracting resources from a waypoint. This endpoint requires a survey as the payload, which allows your ship to extract specific yields.  Send the full survey object as the payload which will be validated according to the signature. If the signature is invalid, or any properties of the survey are changed, the request will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$survey = new \OpenAPI\Client\Model\Survey(); // \OpenAPI\Client\Model\Survey

try {
    $result = $apiInstance->extractResourcesWithSurvey($ship_symbol, $survey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->extractResourcesWithSurvey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **survey** | [**\OpenAPI\Client\Model\Survey**](../Model/Survey.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExtractResources201Response**](../Model/ExtractResources201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMounts()`

```php
getMounts($ship_symbol): \OpenAPI\Client\Model\GetMounts200Response
```

Get Mounts

Get the mounts installed on a ship.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship's symbol.

try {
    $result = $apiInstance->getMounts($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getMounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship&#39;s symbol. | |

### Return type

[**\OpenAPI\Client\Model\GetMounts200Response**](../Model/GetMounts200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyShip()`

```php
getMyShip($ship_symbol): \OpenAPI\Client\Model\GetMyShip200Response
```

Get Ship

Retrieve the details of a ship under your agent's ownership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->getMyShip($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getMyShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\GetMyShip200Response**](../Model/GetMyShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyShipCargo()`

```php
getMyShipCargo($ship_symbol): \OpenAPI\Client\Model\GetMyShipCargo200Response
```

Get Ship Cargo

Retrieve the cargo of a ship under your agent's ownership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->getMyShipCargo($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getMyShipCargo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\GetMyShipCargo200Response**](../Model/GetMyShipCargo200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyShips()`

```php
getMyShips($page, $limit): \OpenAPI\Client\Model\GetMyShips200Response
```

List Ships

Return a paginated list of all of ships under your agent's ownership.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | What entry offset to request
$limit = 10; // int | How many entries to return per page

try {
    $result = $apiInstance->getMyShips($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getMyShips: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| What entry offset to request | [optional] [default to 1] |
| **limit** | **int**| How many entries to return per page | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\GetMyShips200Response**](../Model/GetMyShips200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipCooldown()`

```php
getShipCooldown($ship_symbol): \OpenAPI\Client\Model\GetShipCooldown200Response
```

Get Ship Cooldown

Retrieve the details of your ship's reactor cooldown. Some actions such as activating your jump drive, scanning, or extracting resources taxes your reactor and results in a cooldown.  Your ship cannot perform additional actions until your cooldown has expired. The duration of your cooldown is relative to the power consumption of the related modules or mounts for the action taken.  Response returns a 204 status code (no-content) when the ship has no cooldown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->getShipCooldown($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getShipCooldown: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\GetShipCooldown200Response**](../Model/GetShipCooldown200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipNav()`

```php
getShipNav($ship_symbol): \OpenAPI\Client\Model\GetShipNav200Response
```

Get Ship Nav

Get the current nav status of a ship.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.

try {
    $result = $apiInstance->getShipNav($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->getShipNav: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |

### Return type

[**\OpenAPI\Client\Model\GetShipNav200Response**](../Model/GetShipNav200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installMount()`

```php
installMount($ship_symbol, $install_mount_request): \OpenAPI\Client\Model\InstallMount201Response
```

Install Mount

Install a mount on a ship.  In order to install a mount, the ship must be docked and located in a waypoint that has a `Shipyard` trait. The ship also must have the mount to install in its cargo hold.  An installation fee will be deduced by the Shipyard for installing the mount on the ship.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship's symbol.
$install_mount_request = new \OpenAPI\Client\Model\InstallMountRequest(); // \OpenAPI\Client\Model\InstallMountRequest

try {
    $result = $apiInstance->installMount($ship_symbol, $install_mount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->installMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship&#39;s symbol. | |
| **install_mount_request** | [**\OpenAPI\Client\Model\InstallMountRequest**](../Model/InstallMountRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InstallMount201Response**](../Model/InstallMount201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jettison()`

```php
jettison($ship_symbol, $jettison_request): \OpenAPI\Client\Model\Jettison200Response
```

Jettison Cargo

Jettison cargo from your ship's cargo hold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$jettison_request = new \OpenAPI\Client\Model\JettisonRequest(); // \OpenAPI\Client\Model\JettisonRequest

try {
    $result = $apiInstance->jettison($ship_symbol, $jettison_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->jettison: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **jettison_request** | [**\OpenAPI\Client\Model\JettisonRequest**](../Model/JettisonRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Jettison200Response**](../Model/Jettison200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jumpShip()`

```php
jumpShip($ship_symbol, $jump_ship_request): \OpenAPI\Client\Model\JumpShip200Response
```

Jump Ship

Jump your ship instantly to a target connected waypoint. The ship must be in orbit to execute a jump.  A unit of antimatter is purchased and consumed from the market when jumping. The price of antimatter is determined by the market and is subject to change. A ship can only jump to connected waypoints

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$jump_ship_request = new \OpenAPI\Client\Model\JumpShipRequest(); // \OpenAPI\Client\Model\JumpShipRequest

try {
    $result = $apiInstance->jumpShip($ship_symbol, $jump_ship_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->jumpShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **jump_ship_request** | [**\OpenAPI\Client\Model\JumpShipRequest**](../Model/JumpShipRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\JumpShip200Response**](../Model/JumpShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `navigateShip()`

```php
navigateShip($ship_symbol, $navigate_ship_request): \OpenAPI\Client\Model\NavigateShip200Response
```

Navigate Ship

Navigate to a target destination. The ship must be in orbit to use this function. The destination waypoint must be within the same system as the ship's current location. Navigating will consume the necessary fuel from the ship's manifest based on the distance to the target waypoint.  The returned response will detail the route information including the expected time of arrival. Most ship actions are unavailable until the ship has arrived at it's destination.  To travel between systems, see the ship's Warp or Jump actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$navigate_ship_request = new \OpenAPI\Client\Model\NavigateShipRequest(); // \OpenAPI\Client\Model\NavigateShipRequest | 

try {
    $result = $apiInstance->navigateShip($ship_symbol, $navigate_ship_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->navigateShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **navigate_ship_request** | [**\OpenAPI\Client\Model\NavigateShipRequest**](../Model/NavigateShipRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NavigateShip200Response**](../Model/NavigateShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `negotiateContract()`

```php
negotiateContract($ship_symbol): \OpenAPI\Client\Model\NegotiateContract200Response
```

Negotiate Contract

Negotiate a new contract with the HQ.  In order to negotiate a new contract, an agent must not have ongoing or offered contracts over the allowed maximum amount. Currently the maximum contracts an agent can have at a time is 1.  Once a contract is negotiated, it is added to the list of contracts offered to the agent, which the agent can then accept.   The ship must be present at any waypoint with a faction present to negotiate a contract with that faction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship's symbol.

try {
    $result = $apiInstance->negotiateContract($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->negotiateContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship&#39;s symbol. | |

### Return type

[**\OpenAPI\Client\Model\NegotiateContract200Response**](../Model/NegotiateContract200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orbitShip()`

```php
orbitShip($ship_symbol): \OpenAPI\Client\Model\OrbitShip200Response
```

Orbit Ship

Attempt to move your ship into orbit at its current location. The request will only succeed if your ship is capable of moving into orbit at the time of the request.  Orbiting ships are able to do actions that require the ship to be above surface such as navigating or extracting, but cannot access elements in their current waypoint, such as the market or a shipyard.  The endpoint is idempotent - successive calls will succeed even if the ship is already in orbit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.

try {
    $result = $apiInstance->orbitShip($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->orbitShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |

### Return type

[**\OpenAPI\Client\Model\OrbitShip200Response**](../Model/OrbitShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchShipNav()`

```php
patchShipNav($ship_symbol, $patch_ship_nav_request): \OpenAPI\Client\Model\GetShipNav200Response
```

Patch Ship Nav

Update the nav configuration of a ship.  Currently only supports configuring the Flight Mode of the ship, which affects its speed and fuel consumption.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$patch_ship_nav_request = new \OpenAPI\Client\Model\PatchShipNavRequest(); // \OpenAPI\Client\Model\PatchShipNavRequest

try {
    $result = $apiInstance->patchShipNav($ship_symbol, $patch_ship_nav_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->patchShipNav: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **patch_ship_nav_request** | [**\OpenAPI\Client\Model\PatchShipNavRequest**](../Model/PatchShipNavRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetShipNav200Response**](../Model/GetShipNav200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseCargo()`

```php
purchaseCargo($ship_symbol, $purchase_cargo_request): \OpenAPI\Client\Model\PurchaseCargo201Response
```

Purchase Cargo

Purchase cargo from a market.  The ship must be docked in a waypoint that has `Marketplace` trait, and the market must be selling a good to be able to purchase it.  The maximum amount of units of a good that can be purchased in each transaction are denoted by the `tradeVolume` value of the good, which can be viewed by using the Get Market action.  Purchased goods are added to the ship's cargo hold.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship's symbol.
$purchase_cargo_request = new \OpenAPI\Client\Model\PurchaseCargoRequest(); // \OpenAPI\Client\Model\PurchaseCargoRequest

try {
    $result = $apiInstance->purchaseCargo($ship_symbol, $purchase_cargo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->purchaseCargo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship&#39;s symbol. | |
| **purchase_cargo_request** | [**\OpenAPI\Client\Model\PurchaseCargoRequest**](../Model/PurchaseCargoRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PurchaseCargo201Response**](../Model/PurchaseCargo201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseShip()`

```php
purchaseShip($purchase_ship_request): \OpenAPI\Client\Model\PurchaseShip201Response
```

Purchase Ship

Purchase a ship from a Shipyard. In order to use this function, a ship under your agent's ownership must be in a waypoint that has the `Shipyard` trait, and the Shipyard must sell the type of the desired ship.  Shipyards typically offer ship types, which are predefined templates of ships that have dedicated roles. A template comes with a preset of an engine, a reactor, and a frame. It may also include a few modules and mounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_ship_request = new \OpenAPI\Client\Model\PurchaseShipRequest(); // \OpenAPI\Client\Model\PurchaseShipRequest

try {
    $result = $apiInstance->purchaseShip($purchase_ship_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->purchaseShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchase_ship_request** | [**\OpenAPI\Client\Model\PurchaseShipRequest**](../Model/PurchaseShipRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PurchaseShip201Response**](../Model/PurchaseShip201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refuelShip()`

```php
refuelShip($ship_symbol, $refuel_ship_request): \OpenAPI\Client\Model\RefuelShip200Response
```

Refuel Ship

Refuel your ship by buying fuel from the local market.  Requires the ship to be docked in a waypoint that has the `Marketplace` trait, and the market must be selling fuel in order to refuel.  Each fuel bought from the market replenishes 100 units in your ship's fuel.  Ships will always be refuel to their frame's maximum fuel capacity when using this action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$refuel_ship_request = new \OpenAPI\Client\Model\RefuelShipRequest(); // \OpenAPI\Client\Model\RefuelShipRequest

try {
    $result = $apiInstance->refuelShip($ship_symbol, $refuel_ship_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->refuelShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **refuel_ship_request** | [**\OpenAPI\Client\Model\RefuelShipRequest**](../Model/RefuelShipRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RefuelShip200Response**](../Model/RefuelShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMount()`

```php
removeMount($ship_symbol, $remove_mount_request): \OpenAPI\Client\Model\RemoveMount201Response
```

Remove Mount

Remove a mount from a ship.  The ship must be docked in a waypoint that has the `Shipyard` trait, and must have the desired mount that it wish to remove installed.  A removal fee will be deduced from the agent by the Shipyard.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship's symbol.
$remove_mount_request = new \OpenAPI\Client\Model\RemoveMountRequest(); // \OpenAPI\Client\Model\RemoveMountRequest

try {
    $result = $apiInstance->removeMount($ship_symbol, $remove_mount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->removeMount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship&#39;s symbol. | |
| **remove_mount_request** | [**\OpenAPI\Client\Model\RemoveMountRequest**](../Model/RemoveMountRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RemoveMount201Response**](../Model/RemoveMount201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sellCargo()`

```php
sellCargo($ship_symbol, $sell_cargo_request): \OpenAPI\Client\Model\SellCargo201Response
```

Sell Cargo

Sell cargo in your ship to a market that trades this cargo. The ship must be docked in a waypoint that has the `Marketplace` trait in order to use this function.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | Symbol of a ship.
$sell_cargo_request = new \OpenAPI\Client\Model\SellCargoRequest(); // \OpenAPI\Client\Model\SellCargoRequest

try {
    $result = $apiInstance->sellCargo($ship_symbol, $sell_cargo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->sellCargo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| Symbol of a ship. | |
| **sell_cargo_request** | [**\OpenAPI\Client\Model\SellCargoRequest**](../Model/SellCargoRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SellCargo201Response**](../Model/SellCargo201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipRefine()`

```php
shipRefine($ship_symbol, $ship_refine_request): \OpenAPI\Client\Model\ShipRefine201Response
```

Ship Refine

Attempt to refine the raw materials on your ship. The request will only succeed if your ship is capable of refining at the time of the request. In order to be able to refine, a ship must have goods that can be refined and have installed a `Refinery` module that can refine it.  When refining, 30 basic goods will be converted into 10 processed goods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The symbol of the ship.
$ship_refine_request = new \OpenAPI\Client\Model\ShipRefineRequest(); // \OpenAPI\Client\Model\ShipRefineRequest

try {
    $result = $apiInstance->shipRefine($ship_symbol, $ship_refine_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->shipRefine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The symbol of the ship. | |
| **ship_refine_request** | [**\OpenAPI\Client\Model\ShipRefineRequest**](../Model/ShipRefineRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ShipRefine201Response**](../Model/ShipRefine201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `siphonResources()`

```php
siphonResources($ship_symbol): \OpenAPI\Client\Model\SiphonResources201Response
```

Siphon Resources

Siphon gases, such as hydrocarbon, from gas giants.  The ship must be in orbit to be able to siphon and must have siphon mounts and a gas processor installed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.

try {
    $result = $apiInstance->siphonResources($ship_symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->siphonResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |

### Return type

[**\OpenAPI\Client\Model\SiphonResources201Response**](../Model/SiphonResources201Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferCargo()`

```php
transferCargo($ship_symbol, $transfer_cargo_request): \OpenAPI\Client\Model\TransferCargo200Response
```

Transfer Cargo

Transfer cargo between ships.  The receiving ship must be in the same waypoint as the transferring ship, and it must able to hold the additional cargo after the transfer is complete. Both ships also must be in the same state, either both are docked or both are orbiting.  The response body's cargo shows the cargo of the transferring ship after the transfer is complete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The transferring ship's symbol.
$transfer_cargo_request = new \OpenAPI\Client\Model\TransferCargoRequest(); // \OpenAPI\Client\Model\TransferCargoRequest

try {
    $result = $apiInstance->transferCargo($ship_symbol, $transfer_cargo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->transferCargo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The transferring ship&#39;s symbol. | |
| **transfer_cargo_request** | [**\OpenAPI\Client\Model\TransferCargoRequest**](../Model/TransferCargoRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TransferCargo200Response**](../Model/TransferCargo200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warpShip()`

```php
warpShip($ship_symbol, $navigate_ship_request): \OpenAPI\Client\Model\NavigateShip200Response
```

Warp Ship

Warp your ship to a target destination in another system. The ship must be in orbit to use this function and must have the `Warp Drive` module installed. Warping will consume the necessary fuel from the ship's manifest.  The returned response will detail the route information including the expected time of arrival. Most ship actions are unavailable until the ship has arrived at its destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: AgentToken
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FleetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ship_symbol = 'ship_symbol_example'; // string | The ship symbol.
$navigate_ship_request = new \OpenAPI\Client\Model\NavigateShipRequest(); // \OpenAPI\Client\Model\NavigateShipRequest | 

try {
    $result = $apiInstance->warpShip($ship_symbol, $navigate_ship_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FleetApi->warpShip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ship_symbol** | **string**| The ship symbol. | |
| **navigate_ship_request** | [**\OpenAPI\Client\Model\NavigateShipRequest**](../Model/NavigateShipRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\NavigateShip200Response**](../Model/NavigateShip200Response.md)

### Authorization

[AgentToken](../../README.md#AgentToken)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
