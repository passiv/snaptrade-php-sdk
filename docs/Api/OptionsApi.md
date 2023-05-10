# SnapTrade\OptionsApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOptionStrategy()**](OptionsApi.md#getOptionStrategy) | **POST** /accounts/{accountId}/optionStrategy | Creates an option strategy object that will be used to place an option strategy order |
| [**getOptionsChain()**](OptionsApi.md#getOptionsChain) | **GET** /accounts/{accountId}/optionsChain | Get the options chain |
| [**getOptionsStrategyQuote()**](OptionsApi.md#getOptionsStrategyQuote) | **GET** /accounts/{accountId}/optionStrategy/{optionStrategyId} | Get latest market data of option strategy |
| [**listOptionHoldings()**](OptionsApi.md#listOptionHoldings) | **GET** /accounts/{accountId}/options | Get the options holdings in the account |
| [**placeOptionStrategy()**](OptionsApi.md#placeOptionStrategy) | **POST** /accounts/{accountId}/optionStrategy/{optionStrategyId}/execute | Place an option strategy order on the brokerage |


## `getOptionStrategy()`

```php
getOptionStrategy($user_id, $user_secret, $account_id, $options_get_option_strategy_request): \SnapTrade\Model\StrategyQuotes
```

Creates an option strategy object that will be used to place an option strategy order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: PartnerClientId
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('clientId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientId', 'Bearer');

// Configure API key authorization: PartnerSignature
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Signature', 'Bearer');

// Configure API key authorization: PartnerTimestamp
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('timestamp', 'Bearer');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.
$options_get_option_strategy_request = new \SnapTrade\Model\OptionsGetOptionStrategyRequest([
        "underlying_symbol_id" => "2bcd7cc3-e922-4976-bce1-9858296801c3",
        "legs" => [
            [
                "action" => "BUY_TO_OPEN",
                "option_symbol_id" => "SPY220819P00200000",
                "quantity" => 1,
            ]
        ],
        "strategy_type" => "CUSTOM",
    ]);

try {
    $result = $apiInstance->getOptionStrategy(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id, 
        options_get_option_strategy_request: $options_get_option_strategy_request
    );
    print_r($result->$getStrategy());
    print_r($result->$getOpenPrice());
    print_r($result->$getBidPrice());
    print_r($result->$getAskPrice());
    print_r($result->$getVolatility());
    print_r($result->$getGreek());
} catch (\Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |
| **options_get_option_strategy_request** | [**\SnapTrade\Model\OptionsGetOptionStrategyRequest**](../Model/OptionsGetOptionStrategyRequest.md)|  | |

### Return type

[**\SnapTrade\Model\StrategyQuotes**](../Model/StrategyQuotes.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionsChain()`

```php
getOptionsChain($user_id, $user_secret, $account_id, $symbol): \SnapTrade\Model\OptionChainInner[]
```

Get the options chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: PartnerClientId
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('clientId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientId', 'Bearer');

// Configure API key authorization: PartnerSignature
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Signature', 'Bearer');

// Configure API key authorization: PartnerTimestamp
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('timestamp', 'Bearer');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.
$symbol = "symbol_example"; // Universal symbol ID if symbol

try {
    $result = $apiInstance->getOptionsChain(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id, 
        symbol: $symbol
    );
} catch (\Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |
| **symbol** | **string**| Universal symbol ID if symbol | |

### Return type

[**\SnapTrade\Model\OptionChainInner[]**](../Model/OptionChainInner.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptionsStrategyQuote()`

```php
getOptionsStrategyQuote($user_id, $user_secret, $account_id, $option_strategy_id): \SnapTrade\Model\StrategyQuotes
```

Get latest market data of option strategy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: PartnerClientId
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('clientId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientId', 'Bearer');

// Configure API key authorization: PartnerSignature
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Signature', 'Bearer');

// Configure API key authorization: PartnerTimestamp
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('timestamp', 'Bearer');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.
$option_strategy_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // Option strategy id obtained from response when creating option strategy object

try {
    $result = $apiInstance->getOptionsStrategyQuote(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id, 
        option_strategy_id: $option_strategy_id
    );
    print_r($result->$getStrategy());
    print_r($result->$getOpenPrice());
    print_r($result->$getBidPrice());
    print_r($result->$getAskPrice());
    print_r($result->$getVolatility());
    print_r($result->$getGreek());
} catch (\Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsStrategyQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |
| **option_strategy_id** | **string**| Option strategy id obtained from response when creating option strategy object | |

### Return type

[**\SnapTrade\Model\StrategyQuotes**](../Model/StrategyQuotes.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOptionHoldings()`

```php
listOptionHoldings($user_id, $user_secret, $account_id): \SnapTrade\Model\OptionsHoldings
```

Get the options holdings in the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: PartnerClientId
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('clientId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientId', 'Bearer');

// Configure API key authorization: PartnerSignature
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Signature', 'Bearer');

// Configure API key authorization: PartnerTimestamp
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('timestamp', 'Bearer');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.

try {
    $result = $apiInstance->listOptionHoldings(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id
    );
    print_r($result->$getId());
    print_r($result->$getSymbol());
    print_r($result->$getOptionSymbol());
    print_r($result->$getPrice());
    print_r($result->$getCurrency());
    print_r($result->$getAveragePurchasePrice());
} catch (\Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |

### Return type

[**\SnapTrade\Model\OptionsHoldings**](../Model/OptionsHoldings.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeOptionStrategy()`

```php
placeOptionStrategy($user_id, $user_secret, $account_id, $option_strategy_id, $options_place_option_strategy_request): \SnapTrade\Model\StrategyOrderRecord
```

Place an option strategy order on the brokerage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: PartnerClientId
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('clientId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('clientId', 'Bearer');

// Configure API key authorization: PartnerSignature
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('Signature', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Signature', 'Bearer');

// Configure API key authorization: PartnerTimestamp
$config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKey('timestamp', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SnapTrade\Configuration::getDefaultConfiguration()->setApiKeyPrefix('timestamp', 'Bearer');

// Setting host path is optional and defaults to https://api.snaptrade.com/api/v1
// SnapTrade\Configuration::getDefaultConfiguration()->setHost("https://api.snaptrade.com/api/v1");

$apiInstance = new SnapTrade\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // The ID of the account get positions.
$option_strategy_id = "2bcd7cc3-e922-4976-bce1-9858296801c3"; // Option strategy id obtained from response when creating option strategy object
$options_place_option_strategy_request = new \SnapTrade\Model\OptionsPlaceOptionStrategyRequest([
        "order_type" => "Limit",
        "time_in_force" => "DAY",
        "price" => 31.33,
    ]);

try {
    $result = $apiInstance->placeOptionStrategy(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id, 
        option_strategy_id: $option_strategy_id, 
        options_place_option_strategy_request: $options_place_option_strategy_request
    );
    print_r($result->$getStrategy());
    print_r($result->$getStatus());
    print_r($result->$getFilledQuantity());
    print_r($result->$getOpenQuantity());
    print_r($result->$getClosedQuantity());
    print_r($result->$getOrderType());
    print_r($result->$getTimeInForce());
    print_r($result->$getLimitPrice());
    print_r($result->$getExecutionPrice());
    print_r($result->$getTimePlaced());
    print_r($result->$getTimeUpdated());
} catch (\Exception $e) {
    echo 'Exception when calling OptionsApi->placeOptionStrategy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |
| **option_strategy_id** | **string**| Option strategy id obtained from response when creating option strategy object | |
| **options_place_option_strategy_request** | [**\SnapTrade\Model\OptionsPlaceOptionStrategyRequest**](../Model/OptionsPlaceOptionStrategyRequest.md)|  | |

### Return type

[**\SnapTrade\Model\StrategyOrderRecord**](../Model/StrategyOrderRecord.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
