# SnapTrade\TradingApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelUserAccountOrder()**](TradingApi.md#cancelUserAccountOrder) | **POST** /accounts/{accountId}/orders/cancel | Cancel open order in account |
| [**getCalculatedTradeImpactById()**](TradingApi.md#getCalculatedTradeImpactById) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/modify/{tradeId} | Return details of a specific trade before it&#39;s placed |
| [**getCalculatedTradesImpact()**](TradingApi.md#getCalculatedTradesImpact) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/impact | Return the impact of placing a series of trades on the portfolio |
| [**getOrderImpact()**](TradingApi.md#getOrderImpact) | **POST** /trade/impact | Check impact of trades on account. |
| [**getUserAccountQuotes()**](TradingApi.md#getUserAccountQuotes) | **GET** /accounts/{accountId}/quotes | Get symbol quotes |
| [**modifyCalculatedTradeById()**](TradingApi.md#modifyCalculatedTradeById) | **PATCH** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/modify/{tradeId} | Modify units of a trade before it is placed |
| [**placeCalculatedTrades()**](TradingApi.md#placeCalculatedTrades) | **POST** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/placeOrders | Place orders for the CalculatedTrades in series |
| [**placeForceOrder()**](TradingApi.md#placeForceOrder) | **POST** /trade/place | Place a trade with NO validation. |
| [**placeOCOOrder()**](TradingApi.md#placeOCOOrder) | **POST** /trade/oco | Place a OCO (One Cancels Other) order |
| [**placeOrder()**](TradingApi.md#placeOrder) | **POST** /trade/{tradeId} | Place order |


## `cancelUserAccountOrder()`

```php
cancelUserAccountOrder($user_id, $user_secret, $account_id, $trading_cancel_user_account_order_request): \SnapTrade\Model\AccountOrderRecord
```

Cancel open order in account

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
$account_id = "accountId_example"; // The ID of the account get positions.
$trading_cancel_user_account_order_request = new \SnapTrade\Model\TradingCancelUserAccountOrderRequest([
        "brokerage_order_id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
    ]); // The Order ID to be canceled

try {
    $result = $snaptrade->trading->cancelUserAccountOrder(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id, 
        trading_cancel_user_account_order_request: $trading_cancel_user_account_order_request
    );
    print_r($result->$getBrokerageOrderId());
    print_r($result->$getStatus());
    print_r($result->$getSymbol());
    print_r($result->$getUniversalSymbol());
    print_r($result->$getOptionSymbol());
    print_r($result->$getAction());
    print_r($result->$getTotalQuantity());
    print_r($result->$getOpenQuantity());
    print_r($result->$getCanceledQuantity());
    print_r($result->$getFilledQuantity());
    print_r($result->$getExecutionPrice());
    print_r($result->$getLimitPrice());
    print_r($result->$getStopPrice());
    print_r($result->$getOrderType());
    print_r($result->$getTimeInForce());
    print_r($result->$getTimePlaced());
    print_r($result->$getTimeUpdated());
    print_r($result->$getExpiryDate());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->cancelUserAccountOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |
| **trading_cancel_user_account_order_request** | [**\SnapTrade\Model\TradingCancelUserAccountOrderRequest**](../Model/TradingCancelUserAccountOrderRequest.md)| The Order ID to be canceled | |

### Return type

[**\SnapTrade\Model\AccountOrderRecord**](../Model/AccountOrderRecord.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalculatedTradeImpactById()`

```php
getCalculatedTradeImpactById($portfolio_group_id, $calculated_trade_id, $trade_id): \SnapTrade\Model\Trade
```

Return details of a specific trade before it's placed

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
$trade_id = "tradeId_example"; // The ID of trade object

try {
    $result = $snaptrade->trading->getCalculatedTradeImpactById(
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
    echo 'Exception when calling TradingApi->getCalculatedTradeImpactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to perform rebalancing calculations | |
| **calculated_trade_id** | **string**| The ID of calculated trade to get account impact | |
| **trade_id** | **string**| The ID of trade object | |

### Return type

[**\SnapTrade\Model\Trade**](../Model/Trade.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCalculatedTradesImpact()`

```php
getCalculatedTradesImpact($portfolio_group_id, $calculated_trade_id): \SnapTrade\Model\TradeImpact[]
```

Return the impact of placing a series of trades on the portfolio

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

try {
    $result = $snaptrade->trading->getCalculatedTradesImpact(
        portfolio_group_id: $portfolio_group_id, 
        calculated_trade_id: $calculated_trade_id
    );
    print_r($result->$getAccount());
    print_r($result->$getCurrency());
    print_r($result->$getRemainingCash());
    print_r($result->$getEstimatedCommissions());
    print_r($result->$getForexFees());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->getCalculatedTradesImpact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to perform rebalancing calculations | |
| **calculated_trade_id** | **string**| The ID of calculated trade to get account impact | |

### Return type

[**\SnapTrade\Model\TradeImpact[]**](../Model/TradeImpact.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderImpact()`

```php
getOrderImpact($user_id, $user_secret, $manual_trade_form): \SnapTrade\Model\ManualTradeAndImpact
```

Check impact of trades on account.

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
$manual_trade_form = new \SnapTrade\Model\ManualTradeForm([
        "account_id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "action" => "BUY",
        "order_type" => "Limit",
        "price" => 31.33,
        "stop" => 31.33,
        "time_in_force" => "Day",
        "universal_symbol_id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
    ]);

try {
    $result = $snaptrade->trading->getOrderImpact(
        user_id: $user_id, 
        user_secret: $user_secret, 
        manual_trade_form: $manual_trade_form
    );
    print_r($result->$getTrade());
    print_r($result->$getTradeImpacts());
    print_r($result->$getCombinedRemainingBalance());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->getOrderImpact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **manual_trade_form** | [**\SnapTrade\Model\ManualTradeForm**](../Model/ManualTradeForm.md)|  | |

### Return type

[**\SnapTrade\Model\ManualTradeAndImpact**](../Model/ManualTradeAndImpact.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAccountQuotes()`

```php
getUserAccountQuotes($user_id, $user_secret, $symbols, $account_id, $use_ticker): \SnapTrade\Model\SymbolsQuotes
```

Get symbol quotes

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
$symbols = "symbols_example"; // List of universal_symbol_id or tickers to get quotes for.
$account_id = "accountId_example"; // The ID of the account to get quotes.
$use_ticker = True; // Should be set to True if providing tickers.

try {
    $result = $snaptrade->trading->getUserAccountQuotes(
        user_id: $user_id, 
        user_secret: $user_secret, 
        symbols: $symbols, 
        account_id: $account_id, 
        use_ticker: $use_ticker
    );
    print_r($result->$getSymbol());
    print_r($result->$getBidPrice());
    print_r($result->$getAskPrice());
    print_r($result->$getLastTradePrice());
    print_r($result->$getBidSize());
    print_r($result->$getAskSize());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->getUserAccountQuotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **symbols** | **string**| List of universal_symbol_id or tickers to get quotes for. | |
| **account_id** | **string**| The ID of the account to get quotes. | |
| **use_ticker** | **bool**| Should be set to True if providing tickers. | [optional] |

### Return type

[**\SnapTrade\Model\SymbolsQuotes**](../Model/SymbolsQuotes.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyCalculatedTradeById()`

```php
modifyCalculatedTradeById($portfolio_group_id, $calculated_trade_id, $trade_id, $trade): \SnapTrade\Model\Trade
```

Modify units of a trade before it is placed

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
$trade_id = "tradeId_example"; // The ID of trade object
$trade = new \SnapTrade\Model\Trade([
        "id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "action" => "BUY",
        "units" => 6,
        "price" => 24.81,
        "sequence" => 1,
    ]);

try {
    $result = $snaptrade->trading->modifyCalculatedTradeById(
        portfolio_group_id: $portfolio_group_id, 
        calculated_trade_id: $calculated_trade_id, 
        trade_id: $trade_id, 
        trade: $trade
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
    echo 'Exception when calling TradingApi->modifyCalculatedTradeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to perform rebalancing calculations | |
| **calculated_trade_id** | **string**| The ID of calculated trade to get account impact | |
| **trade_id** | **string**| The ID of trade object | |
| **trade** | [**\SnapTrade\Model\Trade**](../Model/Trade.md)|  | [optional] |

### Return type

[**\SnapTrade\Model\Trade**](../Model/Trade.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeCalculatedTrades()`

```php
placeCalculatedTrades($portfolio_group_id, $calculated_trade_id): \SnapTrade\Model\TradeExecutionStatus[]
```

Place orders for the CalculatedTrades in series

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

try {
    $result = $snaptrade->trading->placeCalculatedTrades(
        portfolio_group_id: $portfolio_group_id, 
        calculated_trade_id: $calculated_trade_id
    );
    print_r($result->$getSymbol());
    print_r($result->$getUniversalSymbol());
    print_r($result->$getTrade());
    print_r($result->$getState());
    print_r($result->$getFilledUnits());
    print_r($result->$getAction());
    print_r($result->$getPrice());
    print_r($result->$getCommissions());
    print_r($result->$getMeta());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->placeCalculatedTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolio_group_id** | **string**| The ID of the PortfolioGroup to perform rebalancing calculations | |
| **calculated_trade_id** | **string**| The ID of calculated trade to get account impact | |

### Return type

[**\SnapTrade\Model\TradeExecutionStatus[]**](../Model/TradeExecutionStatus.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeForceOrder()`

```php
placeForceOrder($user_id, $user_secret, $manual_trade_form): \SnapTrade\Model\AccountOrderRecord
```

Place a trade with NO validation.

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
$manual_trade_form = new \SnapTrade\Model\ManualTradeForm([
        "account_id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "action" => "BUY",
        "order_type" => "Limit",
        "price" => 31.33,
        "stop" => 31.33,
        "time_in_force" => "Day",
        "universal_symbol_id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
    ]);

try {
    $result = $snaptrade->trading->placeForceOrder(
        user_id: $user_id, 
        user_secret: $user_secret, 
        manual_trade_form: $manual_trade_form
    );
    print_r($result->$getBrokerageOrderId());
    print_r($result->$getStatus());
    print_r($result->$getSymbol());
    print_r($result->$getUniversalSymbol());
    print_r($result->$getOptionSymbol());
    print_r($result->$getAction());
    print_r($result->$getTotalQuantity());
    print_r($result->$getOpenQuantity());
    print_r($result->$getCanceledQuantity());
    print_r($result->$getFilledQuantity());
    print_r($result->$getExecutionPrice());
    print_r($result->$getLimitPrice());
    print_r($result->$getStopPrice());
    print_r($result->$getOrderType());
    print_r($result->$getTimeInForce());
    print_r($result->$getTimePlaced());
    print_r($result->$getTimeUpdated());
    print_r($result->$getExpiryDate());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->placeForceOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **manual_trade_form** | [**\SnapTrade\Model\ManualTradeForm**](../Model/ManualTradeForm.md)|  | |

### Return type

[**\SnapTrade\Model\AccountOrderRecord**](../Model/AccountOrderRecord.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeOCOOrder()`

```php
placeOCOOrder($user_id, $user_secret, $trading_place_oco_order_request): \SnapTrade\Model\AccountOrderRecord
```

Place a OCO (One Cancels Other) order

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
$trading_place_oco_order_request = new \SnapTrade\Model\TradingPlaceOcoOrderRequest([
    ]);

try {
    $result = $snaptrade->trading->placeOCOOrder(
        user_id: $user_id, 
        user_secret: $user_secret, 
        trading_place_oco_order_request: $trading_place_oco_order_request
    );
    print_r($result->$getBrokerageOrderId());
    print_r($result->$getStatus());
    print_r($result->$getSymbol());
    print_r($result->$getUniversalSymbol());
    print_r($result->$getOptionSymbol());
    print_r($result->$getAction());
    print_r($result->$getTotalQuantity());
    print_r($result->$getOpenQuantity());
    print_r($result->$getCanceledQuantity());
    print_r($result->$getFilledQuantity());
    print_r($result->$getExecutionPrice());
    print_r($result->$getLimitPrice());
    print_r($result->$getStopPrice());
    print_r($result->$getOrderType());
    print_r($result->$getTimeInForce());
    print_r($result->$getTimePlaced());
    print_r($result->$getTimeUpdated());
    print_r($result->$getExpiryDate());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->placeOCOOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **trading_place_oco_order_request** | [**\SnapTrade\Model\TradingPlaceOcoOrderRequest**](../Model/TradingPlaceOcoOrderRequest.md)|  | |

### Return type

[**\SnapTrade\Model\AccountOrderRecord**](../Model/AccountOrderRecord.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeOrder()`

```php
placeOrder($trade_id, $user_id, $user_secret): \SnapTrade\Model\AccountOrderRecord
```

Place order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$trade_id = "tradeId_example"; // The ID of trade object obtained from trade/impact endpoint
$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";

try {
    $result = $snaptrade->trading->placeOrder(
        trade_id: $trade_id, 
        user_id: $user_id, 
        user_secret: $user_secret
    );
    print_r($result->$getBrokerageOrderId());
    print_r($result->$getStatus());
    print_r($result->$getSymbol());
    print_r($result->$getUniversalSymbol());
    print_r($result->$getOptionSymbol());
    print_r($result->$getAction());
    print_r($result->$getTotalQuantity());
    print_r($result->$getOpenQuantity());
    print_r($result->$getCanceledQuantity());
    print_r($result->$getFilledQuantity());
    print_r($result->$getExecutionPrice());
    print_r($result->$getLimitPrice());
    print_r($result->$getStopPrice());
    print_r($result->$getOrderType());
    print_r($result->$getTimeInForce());
    print_r($result->$getTimePlaced());
    print_r($result->$getTimeUpdated());
    print_r($result->$getExpiryDate());
} catch (\Exception $e) {
    echo 'Exception when calling TradingApi->placeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trade_id** | **string**| The ID of trade object obtained from trade/impact endpoint | |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

### Return type

[**\SnapTrade\Model\AccountOrderRecord**](../Model/AccountOrderRecord.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
