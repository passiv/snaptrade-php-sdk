# SnapTrade\AccountInformationApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllUserHoldings()**](AccountInformationApi.md#getAllUserHoldings) | **GET** /holdings | List all accounts for the user, plus balances and positions for each account. |
| [**getUserAccountBalance()**](AccountInformationApi.md#getUserAccountBalance) | **GET** /accounts/{accountId}/balances | Get all cash balances of an investment account |
| [**getUserAccountDetails()**](AccountInformationApi.md#getUserAccountDetails) | **GET** /accounts/{accountId} | Return details of a specific investment account |
| [**getUserAccountOrders()**](AccountInformationApi.md#getUserAccountOrders) | **GET** /accounts/{accountId}/orders | Get all history of orders placed in account |
| [**getUserAccountPositions()**](AccountInformationApi.md#getUserAccountPositions) | **GET** /accounts/{accountId}/positions | Get all positions of an investment account |
| [**getUserHoldings()**](AccountInformationApi.md#getUserHoldings) | **GET** /accounts/{accountId}/holdings | List balances, positions and orders for the specified account. |
| [**listUserAccounts()**](AccountInformationApi.md#listUserAccounts) | **GET** /accounts | List all investment accounts for the user |
| [**updateUserAccount()**](AccountInformationApi.md#updateUserAccount) | **PUT** /accounts/{accountId} | Update details of an investment account |


## `getAllUserHoldings()`

```php
getAllUserHoldings($user_id, $user_secret, $brokerage_authorizations): \SnapTrade\Model\AccountHoldings[]
```

List all accounts for the user, plus balances and positions for each account.

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$brokerage_authorizations = "917c8734-8470-4a3e-a18f-57c3f2ee6631"; // Optional. Comma seperated list of authorization IDs (only use if filtering is needed on one or more authorizations).

try {
    $result = $apiInstance->getAllUserHoldings(
        user_id: $user_id, 
        user_secret: $user_secret, 
        brokerage_authorizations: $brokerage_authorizations
    );
    print_r($result->$getAccount());
    print_r($result->$getBalances());
    print_r($result->$getPositions());
    print_r($result->$getTotalValue());
} catch (\Exception $e) {
    echo 'Exception when calling AccountInformationApi->getAllUserHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **brokerage_authorizations** | **string**| Optional. Comma seperated list of authorization IDs (only use if filtering is needed on one or more authorizations). | [optional] |

### Return type

[**\SnapTrade\Model\AccountHoldings[]**](../Model/AccountHoldings.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAccountBalance()`

```php
getUserAccountBalance($user_id, $user_secret, $account_id): \SnapTrade\Model\Balance[]
```

Get all cash balances of an investment account

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.

try {
    $result = $apiInstance->getUserAccountBalance(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id
    );
    print_r($result->$getCurrency());
    print_r($result->$getCash());
} catch (\Exception $e) {
    echo 'Exception when calling AccountInformationApi->getUserAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |

### Return type

[**\SnapTrade\Model\Balance[]**](../Model/Balance.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAccountDetails()`

```php
getUserAccountDetails($user_id, $user_secret, $account_id): \SnapTrade\Model\Account[]
```

Return details of a specific investment account

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account to get detail of.

try {
    $result = $apiInstance->getUserAccountDetails(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id
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
    echo 'Exception when calling AccountInformationApi->getUserAccountDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account to get detail of. | |

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

## `getUserAccountOrders()`

```php
getUserAccountOrders($user_id, $user_secret, $account_id, $state): \SnapTrade\Model\AccountOrderRecord[]
```

Get all history of orders placed in account

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.
$state = "all"; // defaults value is set to \"all\"

try {
    $result = $apiInstance->getUserAccountOrders(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id, 
        state: $state
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
    echo 'Exception when calling AccountInformationApi->getUserAccountOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |
| **state** | **string**| defaults value is set to \&quot;all\&quot; | [optional] |

### Return type

[**\SnapTrade\Model\AccountOrderRecord[]**](../Model/AccountOrderRecord.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAccountPositions()`

```php
getUserAccountPositions($user_id, $user_secret, $account_id): \SnapTrade\Model\Position[]
```

Get all positions of an investment account

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account get positions.

try {
    $result = $apiInstance->getUserAccountPositions(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id
    );
    print_r($result->$getSymbol());
    print_r($result->$getUnits());
    print_r($result->$getPrice());
    print_r($result->$getOpenPnl());
    print_r($result->$getFractionalUnits());
    print_r($result->$getAveragePurchasePrice());
} catch (\Exception $e) {
    echo 'Exception when calling AccountInformationApi->getUserAccountPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account get positions. | |

### Return type

[**\SnapTrade\Model\Position[]**](../Model/Position.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserHoldings()`

```php
getUserHoldings($account_id, $user_id, $user_secret): \SnapTrade\Model\AccountHoldingsAccount
```

List balances, positions and orders for the specified account.

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$account_id = "917c8734-8470-4a3e-a18f-57c3f2ee6631"; // The ID of the account to fetch holdings for.
$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";

try {
    $result = $apiInstance->getUserHoldings(
        account_id: $account_id, 
        user_id: $user_id, 
        user_secret: $user_secret
    );
    print_r($result->$getAccount());
    print_r($result->$getBalances());
    print_r($result->$getPositions());
    print_r($result->$getTotalValue());
} catch (\Exception $e) {
    echo 'Exception when calling AccountInformationApi->getUserHoldings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The ID of the account to fetch holdings for. | |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

### Return type

[**\SnapTrade\Model\AccountHoldingsAccount**](../Model/AccountHoldingsAccount.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserAccounts()`

```php
listUserAccounts($user_id, $user_secret): \SnapTrade\Model\Account[]
```

List all investment accounts for the user

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";

try {
    $result = $apiInstance->listUserAccounts(
        user_id: $user_id, 
        user_secret: $user_secret
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
    echo 'Exception when calling AccountInformationApi->listUserAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

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

## `updateUserAccount()`

```php
updateUserAccount($user_id, $user_secret, $account_id): \SnapTrade\Model\Account[]
```

Update details of an investment account

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

$apiInstance = new SnapTrade\Api\AccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$account_id = "accountId_example"; // The ID of the account to update.

try {
    $result = $apiInstance->updateUserAccount(
        user_id: $user_id, 
        user_secret: $user_secret, 
        account_id: $account_id
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
    echo 'Exception when calling AccountInformationApi->updateUserAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **account_id** | **string**| The ID of the account to update. | |

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
