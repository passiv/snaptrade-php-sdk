# SnapTrade\PortfolioManagementApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPortfolioExcludedAsset()**](PortfolioManagementApi.md#addPortfolioExcludedAsset) | **POST** /portfolioGroups/{portfolioGroupId}/excludedassets | Adds an asset to exclude to a portfolio group |
| [**all()**](PortfolioManagementApi.md#all) | **GET** /portfolioGroups | List all portfolio groups |
| [**create()**](PortfolioManagementApi.md#create) | **POST** /portfolioGroups | Create new portfolio group |
| [**createAssetClass()**](PortfolioManagementApi.md#createAssetClass) | **POST** /modelAssetClass | Create a new model asset class |
| [**createModelPortfolio()**](PortfolioManagementApi.md#createModelPortfolio) | **POST** /modelPortfolio | Creates a new model portfolio |
| [**deleteAssetClass()**](PortfolioManagementApi.md#deleteAssetClass) | **DELETE** /modelAssetClass/{modelAssetClassId} | Deletes a model asset class |
| [**deleteExcludedAsset()**](PortfolioManagementApi.md#deleteExcludedAsset) | **DELETE** /portfolioGroups/{portfolioGroupId}/excludedassets/{symbolId} | Unexclude an asset from a portfolio group |
| [**deleteModelPortfolioById()**](PortfolioManagementApi.md#deleteModelPortfolioById) | **DELETE** /modelPortfolio/{modelPortfolioId} | Deletes a model portfolio |
| [**deletePortfoli()**](PortfolioManagementApi.md#deletePortfoli) | **DELETE** /portfolioGroups/{portfolioGroupId} | Remove a target portfolio. |
| [**deletePortfolioTargetById()**](PortfolioManagementApi.md#deletePortfolioTargetById) | **DELETE** /portfolioGroups/{portfolioGroupId}/targets/{targetAssetId} | Remove a TargetAsset. |
| [**detailAssetClass()**](PortfolioManagementApi.md#detailAssetClass) | **GET** /modelAssetClass/{modelAssetClassId} | Get details of a model asset class |
| [**getCalculatedTradeById()**](PortfolioManagementApi.md#getCalculatedTradeById) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/{TradeId} | Return an individual trade |
| [**getModelDetailsById()**](PortfolioManagementApi.md#getModelDetailsById) | **GET** /modelPortfolio/{modelPortfolioId} | Get details of a model portfolio |
| [**getPortfolioBalances()**](PortfolioManagementApi.md#getPortfolioBalances) | **GET** /portfolioGroups/{portfolioGroupId}/balances | Get sum of cash balances in portfolio group |
| [**getPortfolioDetailsById()**](PortfolioManagementApi.md#getPortfolioDetailsById) | **GET** /portfolioGroups/{portfolioGroupId} | Get details of a target portfolio |
| [**getPortfolioInfo()**](PortfolioManagementApi.md#getPortfolioInfo) | **GET** /portfolioGroups/{portfolioGroupId}/info | Return a whole bunch of relevant information relating to a portfolio group. |
| [**getPortfolioSettings()**](PortfolioManagementApi.md#getPortfolioSettings) | **GET** /portfolioGroups/{portfolioGroupId}/settings | Get portfolio group settings |
| [**getPortfolioTargetById()**](PortfolioManagementApi.md#getPortfolioTargetById) | **GET** /portfolioGroups/{portfolioGroupId}/targets/{targetAssetId} | Get a specific target from a portfolio group |
| [**getPortfolioTargets()**](PortfolioManagementApi.md#getPortfolioTargets) | **GET** /portfolioGroups/{portfolioGroupId}/targets | Get all target assets under the specified PortfolioGroup. |
| [**getPortoflioExcludedAssets()**](PortfolioManagementApi.md#getPortoflioExcludedAssets) | **GET** /portfolioGroups/{portfolioGroupId}/excludedassets | Get an array of excluded assets associated with a portfolio group\\ |
| [**importModelPortfolio()**](PortfolioManagementApi.md#importModelPortfolio) | **POST** /portfolioGroups/{portfolioGroupId}/import | Import target allocation based on portfolio group |
| [**listAssetClasses()**](PortfolioManagementApi.md#listAssetClasses) | **GET** /modelAssetClass | List of model asset class |
| [**listCalculatedTrades()**](PortfolioManagementApi.md#listCalculatedTrades) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades | List of trades to make to rebalance portfolio group |
| [**listModelPortfolio()**](PortfolioManagementApi.md#listModelPortfolio) | **GET** /modelPortfolio | List of model portfolio |
| [**listPortfolioAccounts()**](PortfolioManagementApi.md#listPortfolioAccounts) | **GET** /portfolioGroups/{portfolioGroupId}/accounts | Get all accounts associated with a portfolio group |
| [**modifyModelPortfolioById()**](PortfolioManagementApi.md#modifyModelPortfolioById) | **POST** /modelPortfolio/{modelPortfolioId} | Updates model portfolio object |
| [**savePortfolio()**](PortfolioManagementApi.md#savePortfolio) | **PATCH** /portfolioGroups/{portfolioGroupId} | Update an existing target portfolio. |
| [**searchPortfolioSymbols()**](PortfolioManagementApi.md#searchPortfolioSymbols) | **POST** /portfolioGroups/{portfolioGroupId}/symbols | Search for symbols limited to brokerages under the specified portfolio group |
| [**setPortfolioTargets()**](PortfolioManagementApi.md#setPortfolioTargets) | **POST** /portfolioGroups/{portfolioGroupId}/targets | Set a new list of target assets under the specified PortfolioGroup. All existing target assets under this portfolio group will be replaced with the new list. |
| [**updateAssetClass()**](PortfolioManagementApi.md#updateAssetClass) | **POST** /modelAssetClass/{modelAssetClassId} | Updates model asset class objects |
| [**updatePortfolioSettings()**](PortfolioManagementApi.md#updatePortfolioSettings) | **PATCH** /portfolioGroups/{portfolioGroupId}/settings | Updates portfolio group settings |
| [**updatePortfolioTargetById()**](PortfolioManagementApi.md#updatePortfolioTargetById) | **PATCH** /portfolioGroups/{portfolioGroupId}/targets/{targetAssetId} | Update a TargetAsset under the specified PortfolioGroup. |


## `addPortfolioExcludedAsset()`

```php
addPortfolioExcludedAsset($portfolio_group_id, $universal_symbol): \SnapTrade\Model\ExcludedAsset
```

Adds an asset to exclude to a portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to exclude an asset.
$description = "VANGUARD CDN AGGREGATE BOND INDEX ETF";
$id = "2bcd7cc3-e922-4976-bce1-9858296801c3";
$symbol = "VAB.TO";
$raw_symbol = "VAB";
$currency = [
        "id" => "87b24961-b51e-4db8-9226-f198f6518a89",
        "code" => "USD",
        "name" => "US Dollar",
    ];
$exchange = [
        "id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "code" => "TSX",
        "mic_code" => "XTSE",
        "name" => "Toronto Stock Exchange",
        "timezone" => "America/New_York",
        "start_time" => "09:30:00",
        "close_time" => "57600",
        "suffix" => ".TO",
    ];
$type = [
        "description" => "Common Stock",
        "id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "code" => "cs",
        "is_supported" => True,
    ];
$currencies = [
        [
            "id" => "87b24961-b51e-4db8-9226-f198f6518a89",
            "code" => "USD",
            "name" => "US Dollar",
        ]
    ];

try {
    $result = $snaptrade->portfolioManagement->addPortfolioExcludedAsset(
        portfolio_group_id: $portfolio_group_id, 
        description: $description, 
        id: $id, 
        symbol: $symbol, 
        raw_symbol: $raw_symbol, 
        currency: $currency, 
        exchange: $exchange, 
        type: $type, 
        currencies: $currencies
    );
    print_r($result->$getSymbol());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->addPortfolioExcludedAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to exclude an asset. | |
| **universal_symbol** | [**\SnapTrade\Model\UniversalSymbol**](../Model/UniversalSymbol.md)|  | [optional] |

### Return type

[**\SnapTrade\Model\ExcludedAsset**](../Model/ExcludedAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `all()`

```php
all($user_id, $user_secret): \SnapTrade\Model\PortfolioGroup[]
```

List all portfolio groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";

try {
    $result = $snaptrade->portfolioManagement->all(
        user_id: $user_id, 
        user_secret: $user_secret
    );
    print_r($result->$getId());
    print_r($result->$getName());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->all: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

### Return type

[**\SnapTrade\Model\PortfolioGroup[]**](../Model/PortfolioGroup.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `create()`

```php
create($user_id, $user_secret, $request_body): \SnapTrade\Model\PortfolioGroup[]
```

Create new portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$id = "2bcd7cc3-e922-4976-bce1-9858296801c3";
$name = "Combined Retirement Portfolio";

try {
    $result = $snaptrade->portfolioManagement->create(
        user_id: $user_id, 
        user_secret: $user_secret, 
        id: $id, 
        name: $name
    );
    print_r($result->$getId());
    print_r($result->$getName());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\SnapTrade\Model\PortfolioGroup[]**](../Model/PortfolioGroup.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAssetClass()`

```php
createAssetClass(): \SnapTrade\Model\ModelAssetClassDetails
```

Create a new model asset class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);


try {
    $result = $snaptrade->portfolioManagement->createAssetClass();
    print_r($result->$getModelAssetClass());
    print_r($result->$getModelAssetClassTarget());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->createAssetClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SnapTrade\Model\ModelAssetClassDetails**](../Model/ModelAssetClassDetails.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createModelPortfolio()`

```php
createModelPortfolio(): \SnapTrade\Model\ModelPortfolioDetails
```

Creates a new model portfolio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);


try {
    $result = $snaptrade->portfolioManagement->createModelPortfolio();
    print_r($result->$getModelPortfolio());
    print_r($result->$getModelPortfolioSecurity());
    print_r($result->$getModelPortfolioAssetClass());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->createModelPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SnapTrade\Model\ModelPortfolioDetails**](../Model/ModelPortfolioDetails.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAssetClass()`

```php
deleteAssetClass($model_asset_class_id)
```

Deletes a model asset class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$model_asset_class_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the model asset class to delete.

try {
    $snaptrade->portfolioManagement->deleteAssetClass(
        model_asset_class_id: $model_asset_class_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->deleteAssetClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_asset_class_id** | **string**| The ID of the model asset class to delete. | |

### Return type

void (empty response body)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExcludedAsset()`

```php
deleteExcludedAsset($portfolio_group_id, $symbol_id)
```

Unexclude an asset from a portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to unexclude an asset.
$symbol_id = "symbolId_example"; // The ID of the excluded asset Symbol to delete.

try {
    $snaptrade->portfolioManagement->deleteExcludedAsset(
        portfolio_group_id: $portfolio_group_id, 
        symbol_id: $symbol_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->deleteExcludedAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to unexclude an asset. | |
| **symbol_id** | **string**| The ID of the excluded asset Symbol to delete. | |

### Return type

void (empty response body)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModelPortfolioById()`

```php
deleteModelPortfolioById($model_portfolio_id)
```

Deletes a model portfolio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$model_portfolio_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the model portfolio to delete.

try {
    $snaptrade->portfolioManagement->deleteModelPortfolioById(
        model_portfolio_id: $model_portfolio_id
    );
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->deleteModelPortfolioById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_portfolio_id** | **string**| The ID of the model portfolio to delete. | |

### Return type

void (empty response body)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePortfoli()`

```php
deletePortfoli($portfolio_group_id): \SnapTrade\Model\PortfolioGroup
```

Remove a target portfolio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup to delete.

try {
    $result = $snaptrade->portfolioManagement->deletePortfoli(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getName());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->deletePortfoli: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to delete. | |

### Return type

[**\SnapTrade\Model\PortfolioGroup**](../Model/PortfolioGroup.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePortfolioTargetById()`

```php
deletePortfolioTargetById($portfolio_group_id, $target_asset_id): \SnapTrade\Model\TargetAsset
```

Remove a TargetAsset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to remove the target asset.
$target_asset_id = "targetAssetId_example"; // The ID of the TargetAsset to delete.

try {
    $result = $snaptrade->portfolioManagement->deletePortfolioTargetById(
        portfolio_group_id: $portfolio_group_id, 
        target_asset_id: $target_asset_id
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getPercent());
    print_r($result->$getIsSupported());
    print_r($result->$getIsExcluded());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->deletePortfolioTargetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to remove the target asset. | |
| **target_asset_id** | **string**| The ID of the TargetAsset to delete. | |

### Return type

[**\SnapTrade\Model\TargetAsset**](../Model/TargetAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `detailAssetClass()`

```php
detailAssetClass($model_asset_class_id): \SnapTrade\Model\ModelAssetClassDetails
```

Get details of a model asset class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$model_asset_class_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the model asset class to get.

try {
    $result = $snaptrade->portfolioManagement->detailAssetClass(
        model_asset_class_id: $model_asset_class_id
    );
    print_r($result->$getModelAssetClass());
    print_r($result->$getModelAssetClassTarget());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->detailAssetClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_asset_class_id** | **string**| The ID of the model asset class to get. | |

### Return type

[**\SnapTrade\Model\ModelAssetClassDetails**](../Model/ModelAssetClassDetails.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalculatedTradeById()`

```php
getCalculatedTradeById($portfolio_group_id, $calculated_trade_id, $trade_id): \SnapTrade\Model\Trade[]
```

Return an individual trade

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup to perform rebalancing calculations
$calculated_trade_id = "calculatedTradeId_example"; // The ID of calculated trade to get account impact
$trade_id = "TradeId_example"; // The ID of trade object

try {
    $result = $snaptrade->portfolioManagement->getCalculatedTradeById(
        portfolio_group_id: $portfolio_group_id, 
        calculated_trade_id: $calculated_trade_id, 
        trade_id: $trade_id
    );
    print_r($result->$getId());
    print_r($result->$getAccount());
    print_r($result->$getSymbol());
    print_r($result->$getUniversalSymbol());
    print_r($result->$getAction());
    print_r($result->$getUnits());
    print_r($result->$getPrice());
    print_r($result->$getSequence());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getCalculatedTradeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to perform rebalancing calculations | |
| **calculated_trade_id** | **string**| The ID of calculated trade to get account impact | |
| **trade_id** | **string**| The ID of trade object | |

### Return type

[**\SnapTrade\Model\Trade[]**](../Model/Trade.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getModelDetailsById()`

```php
getModelDetailsById($model_portfolio_id): \SnapTrade\Model\ModelPortfolioDetails
```

Get details of a model portfolio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$model_portfolio_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the model portfolio to get.

try {
    $result = $snaptrade->portfolioManagement->getModelDetailsById(
        model_portfolio_id: $model_portfolio_id
    );
    print_r($result->$getModelPortfolio());
    print_r($result->$getModelPortfolioSecurity());
    print_r($result->$getModelPortfolioAssetClass());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getModelDetailsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_portfolio_id** | **string**| The ID of the model portfolio to get. | |

### Return type

[**\SnapTrade\Model\ModelPortfolioDetails**](../Model/ModelPortfolioDetails.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioBalances()`

```php
getPortfolioBalances($portfolio_group_id): \SnapTrade\Model\Balance[]
```

Get sum of cash balances in portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to create the target asset.

try {
    $result = $snaptrade->portfolioManagement->getPortfolioBalances(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getCurrency());
    print_r($result->$getCash());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortfolioBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to create the target asset. | |

### Return type

[**\SnapTrade\Model\Balance[]**](../Model/Balance.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioDetailsById()`

```php
getPortfolioDetailsById($portfolio_group_id): \SnapTrade\Model\PortfolioGroup
```

Get details of a target portfolio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup to get.

try {
    $result = $snaptrade->portfolioManagement->getPortfolioDetailsById(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getName());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortfolioDetailsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to get. | |

### Return type

[**\SnapTrade\Model\PortfolioGroup**](../Model/PortfolioGroup.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioInfo()`

```php
getPortfolioInfo($portfolio_group_id): \SnapTrade\Model\PortfolioGroupInfo
```

Return a whole bunch of relevant information relating to a portfolio group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to create the target asset.

try {
    $result = $snaptrade->portfolioManagement->getPortfolioInfo(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getSymbols());
    print_r($result->$getQuotableSymbols());
    print_r($result->$getBalances());
    print_r($result->$getPositions());
    print_r($result->$getTargetPositions());
    print_r($result->$getIdealPositions());
    print_r($result->$getExcludedPositions());
    print_r($result->$getCalculatedTrades());
    print_r($result->$getBrokerageAuthorizations());
    print_r($result->$getAccuracy());
    print_r($result->$getSettings());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortfolioInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to create the target asset. | |

### Return type

[**\SnapTrade\Model\PortfolioGroupInfo**](../Model/PortfolioGroupInfo.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioSettings()`

```php
getPortfolioSettings($portfolio_group_id): \SnapTrade\Model\PortfolioGroupSettings
```

Get portfolio group settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to get the settings.

try {
    $result = $snaptrade->portfolioManagement->getPortfolioSettings(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getBuyOnly());
    print_r($result->$getCashOptimizer());
    print_r($result->$getNotifyFrequency());
    print_r($result->$getDriftThreshold());
    print_r($result->$getPreferredCurrency());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortfolioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to get the settings. | |

### Return type

[**\SnapTrade\Model\PortfolioGroupSettings**](../Model/PortfolioGroupSettings.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioTargetById()`

```php
getPortfolioTargetById($portfolio_group_id, $target_asset_id): \SnapTrade\Model\TargetAsset
```

Get a specific target from a portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to get the target asset.
$target_asset_id = "targetAssetId_example"; // The ID of the TargetAsset to get.

try {
    $result = $snaptrade->portfolioManagement->getPortfolioTargetById(
        portfolio_group_id: $portfolio_group_id, 
        target_asset_id: $target_asset_id
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getPercent());
    print_r($result->$getIsSupported());
    print_r($result->$getIsExcluded());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortfolioTargetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to get the target asset. | |
| **target_asset_id** | **string**| The ID of the TargetAsset to get. | |

### Return type

[**\SnapTrade\Model\TargetAsset**](../Model/TargetAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioTargets()`

```php
getPortfolioTargets($portfolio_group_id): \SnapTrade\Model\TargetAsset[]
```

Get all target assets under the specified PortfolioGroup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to create the target asset.

try {
    $result = $snaptrade->portfolioManagement->getPortfolioTargets(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getPercent());
    print_r($result->$getIsSupported());
    print_r($result->$getIsExcluded());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortfolioTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to create the target asset. | |

### Return type

[**\SnapTrade\Model\TargetAsset[]**](../Model/TargetAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortoflioExcludedAssets()`

```php
getPortoflioExcludedAssets($portfolio_group_id): \SnapTrade\Model\ExcludedAsset[]
```

Get an array of excluded assets associated with a portfolio group\\

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which the excluded assets are linked.

try {
    $result = $snaptrade->portfolioManagement->getPortoflioExcludedAssets(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getSymbol());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->getPortoflioExcludedAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which the excluded assets are linked. | |

### Return type

[**\SnapTrade\Model\ExcludedAsset[]**](../Model/ExcludedAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importModelPortfolio()`

```php
importModelPortfolio($portfolio_group_id): \SnapTrade\Model\TargetAsset[]
```

Import target allocation based on portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to create the target asset.

try {
    $result = $snaptrade->portfolioManagement->importModelPortfolio(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getPercent());
    print_r($result->$getIsSupported());
    print_r($result->$getIsExcluded());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->importModelPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to create the target asset. | |

### Return type

[**\SnapTrade\Model\TargetAsset[]**](../Model/TargetAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAssetClasses()`

```php
listAssetClasses($user_id, $user_secret): \SnapTrade\Model\ModelAssetClassDetails[]
```

List of model asset class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";

try {
    $result = $snaptrade->portfolioManagement->listAssetClasses(
        user_id: $user_id, 
        user_secret: $user_secret
    );
    print_r($result->$getModelAssetClass());
    print_r($result->$getModelAssetClassTarget());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->listAssetClasses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

### Return type

[**\SnapTrade\Model\ModelAssetClassDetails[]**](../Model/ModelAssetClassDetails.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCalculatedTrades()`

```php
listCalculatedTrades($portfolio_group_id): \SnapTrade\Model\CalculatedTrade
```

List of trades to make to rebalance portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup to perform rebalancing calculations

try {
    $result = $snaptrade->portfolioManagement->listCalculatedTrades(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getTrades());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->listCalculatedTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to perform rebalancing calculations | |

### Return type

[**\SnapTrade\Model\CalculatedTrade**](../Model/CalculatedTrade.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModelPortfolio()`

```php
listModelPortfolio(): \SnapTrade\Model\ModelPortfolioDetails[]
```

List of model portfolio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);


try {
    $result = $snaptrade->portfolioManagement->listModelPortfolio();
    print_r($result->$getModelPortfolio());
    print_r($result->$getModelPortfolioSecurity());
    print_r($result->$getModelPortfolioAssetClass());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->listModelPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SnapTrade\Model\ModelPortfolioDetails[]**](../Model/ModelPortfolioDetails.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPortfolioAccounts()`

```php
listPortfolioAccounts($portfolio_group_id): \SnapTrade\Model\Account[]
```

Get all accounts associated with a portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which the accounts are linked.

try {
    $result = $snaptrade->portfolioManagement->listPortfolioAccounts(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getBrokerageAuthorization());
    print_r($result->$getPortfolioGroup());
    print_r($result->$getName());
    print_r($result->$getNumber());
    print_r($result->$getInstitutionName());
    print_r($result->$getCreatedDate());
    print_r($result->$getMeta());
    print_r($result->$getCashRestrictions());
    print_r($result->$getSyncStatus());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->listPortfolioAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which the accounts are linked. | |

### Return type

[**\SnapTrade\Model\Account[]**](../Model/Account.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyModelPortfolioById()`

```php
modifyModelPortfolioById($model_portfolio_id, $model_portfolio_details)
```

Updates model portfolio object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$model_portfolio_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the model portfolio to update.
$model_portfolio = [
        "id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "name" => "Passiv 5x Aggressive Growth Fund",
        "model_type" => -1,
    ];
$model_portfolio_security = [
        [
            "percent" => 100,
        ]
    ];
$model_portfolio_asset_class = [
        [
            "percent" => 100,
        ]
    ];

try {
    $snaptrade->portfolioManagement->modifyModelPortfolioById(
        model_portfolio_id: $model_portfolio_id, 
        model_portfolio: $model_portfolio, 
        model_portfolio_security: $model_portfolio_security, 
        model_portfolio_asset_class: $model_portfolio_asset_class
    );
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->modifyModelPortfolioById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_portfolio_id** | **string**| The ID of the model portfolio to update. | |
| **model_portfolio_details** | [**\SnapTrade\Model\ModelPortfolioDetails**](../Model/ModelPortfolioDetails.md)| Use this endpoint change model asset class name and to add or remove a model portfolio security/model portfolio asset class. &lt;br /&gt;&lt;br /&gt; * The model portfolio name and model portfolio model type is required. &lt;br /&gt; * The model portfolio model type must be either 0 or 1. [0 -&gt; Securities based, 1 -&gt; Asset Class based] &lt;br /&gt;&lt;br /&gt; * If the model portfolio type is 0, the model portfolio asset class must be an empty array. &lt;br /&gt; * If the model portfolio type is 1, the model portfolio security must be an empty array. &lt;br /&gt;&lt;br /&gt; * When updating the model portfolio security, the percent is required. Only the symbol id is required for the symbol object &lt;br /&gt; * When updating the model portfolio asset classes, the percent is required. Only the model asset class id is required for the model asset class object &lt;br /&gt;&lt;br /&gt; * To remove all model portfolio securities or model portfolio asset class, set then to an empty array | |

### Return type

void (empty response body)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `savePortfolio()`

```php
savePortfolio($portfolio_group_id, $request_body): \SnapTrade\Model\PortfolioGroup
```

Update an existing target portfolio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup to update.
$id = "2bcd7cc3-e922-4976-bce1-9858296801c3";
$name = "Combined Retirement Portfolio";

try {
    $result = $snaptrade->portfolioManagement->savePortfolio(
        portfolio_group_id: $portfolio_group_id, 
        id: $id, 
        name: $name
    );
    print_r($result->$getId());
    print_r($result->$getName());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->savePortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to update. | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | |

### Return type

[**\SnapTrade\Model\PortfolioGroup**](../Model/PortfolioGroup.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPortfolioSymbols()`

```php
searchPortfolioSymbols($portfolio_group_id, $symbol_query): \SnapTrade\Model\UniversalSymbol[]
```

Search for symbols limited to brokerages under the specified portfolio group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup to search under
$substring = "apple";

try {
    $result = $snaptrade->portfolioManagement->searchPortfolioSymbols(
        portfolio_group_id: $portfolio_group_id, 
        substring: $substring
    );
    print_r($result->$getDescription());
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getRawSymbol());
    print_r($result->$getCurrency());
    print_r($result->$getExchange());
    print_r($result->$getType());
    print_r($result->$getCurrencies());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->searchPortfolioSymbols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to search under | |
| **symbol_query** | [**\SnapTrade\Model\SymbolQuery**](../Model/SymbolQuery.md)|  | [optional] |

### Return type

[**\SnapTrade\Model\UniversalSymbol[]**](../Model/UniversalSymbol.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPortfolioTargets()`

```php
setPortfolioTargets($portfolio_group_id, $target_asset): \SnapTrade\Model\TargetAsset[]
```

Set a new list of target assets under the specified PortfolioGroup. All existing target assets under this portfolio group will be replaced with the new list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to create the target asset.

try {
    $result = $snaptrade->portfolioManagement->setPortfolioTargets(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getPercent());
    print_r($result->$getIsSupported());
    print_r($result->$getIsExcluded());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->setPortfolioTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to create the target asset. | |
| **target_asset** | [**\SnapTrade\Model\TargetAsset[]**](../Model/TargetAsset.md)|  | [optional] |

### Return type

[**\SnapTrade\Model\TargetAsset[]**](../Model/TargetAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAssetClass()`

```php
updateAssetClass($model_asset_class_id, $model_asset_class_details)
```

Updates model asset class objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$model_asset_class_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the model asset class to update.
$model_asset_class = [
        "id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "name" => "Bonds",
    ];
$model_asset_class_target = [
        [
        ]
    ];

try {
    $snaptrade->portfolioManagement->updateAssetClass(
        model_asset_class_id: $model_asset_class_id, 
        model_asset_class: $model_asset_class, 
        model_asset_class_target: $model_asset_class_target
    );
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->updateAssetClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model_asset_class_id** | **string**| The ID of the model asset class to update. | |
| **model_asset_class_details** | [**\SnapTrade\Model\ModelAssetClassDetails**](../Model/ModelAssetClassDetails.md)| Use this endpoint change model asset class name and to add or remove a model asset class target. &lt;br /&gt;&lt;br /&gt; * Only the model asset class name is required for the model asset class object. &lt;br /&gt; * Only the symbol id is required for the symbol object in the model asset class target object. &lt;br /&gt; * To remove all model asset class targets, set the model asset class target as an empty array | |

### Return type

void (empty response body)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePortfolioSettings()`

```php
updatePortfolioSettings($portfolio_group_id): \SnapTrade\Model\PortfolioGroupSettings
```

Updates portfolio group settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to patch the settings.

try {
    $result = $snaptrade->portfolioManagement->updatePortfolioSettings(
        portfolio_group_id: $portfolio_group_id
    );
    print_r($result->$getBuyOnly());
    print_r($result->$getCashOptimizer());
    print_r($result->$getNotifyFrequency());
    print_r($result->$getDriftThreshold());
    print_r($result->$getPreferredCurrency());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->updatePortfolioSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to patch the settings. | |

### Return type

[**\SnapTrade\Model\PortfolioGroupSettings**](../Model/PortfolioGroupSettings.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePortfolioTargetById()`

```php
updatePortfolioTargetById($portfolio_group_id, $target_asset_id, $target_asset): \SnapTrade\Model\TargetAsset
```

Update a TargetAsset under the specified PortfolioGroup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$portfolio_group_id = "portfolioGroupId_example"; // The ID of the PortfolioGroup under which to patch the target asset.
$target_asset_id = "targetAssetId_example"; // The ID of the TargetAsset to patch.
$id = "2bcd7cc3-e922-4976-bce1-9858296801c3";
$symbol = [
        "description" => "VANGUARD CDN AGGREGATE BOND INDEX ETF",
        "id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "symbol" => "VAB.TO",
        "raw_symbol" => "VAB",
    ];
$percent = 90;
$is_supported = True;
$is_excluded = True;

try {
    $result = $snaptrade->portfolioManagement->updatePortfolioTargetById(
        portfolio_group_id: $portfolio_group_id, 
        target_asset_id: $target_asset_id, 
        id: $id, 
        symbol: $symbol, 
        percent: $percent, 
        is_supported: $is_supported, 
        is_excluded: $is_excluded
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getPercent());
    print_r($result->$getIsSupported());
    print_r($result->$getIsExcluded());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling PortfolioManagementApi->updatePortfolioTargetById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup under which to patch the target asset. | |
| **target_asset_id** | **string**| The ID of the TargetAsset to patch. | |
| **target_asset** | [**\SnapTrade\Model\TargetAsset**](../Model/TargetAsset.md)|  | |

### Return type

[**\SnapTrade\Model\TargetAsset**](../Model/TargetAsset.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
