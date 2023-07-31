# SnapTrade\AuthenticationApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSnapTradeUser()**](AuthenticationApi.md#deleteSnapTradeUser) | **DELETE** /snapTrade/deleteUser | Delete SnapTrade user |
| [**getUserJWT()**](AuthenticationApi.md#getUserJWT) | **GET** /snapTrade/encryptedJWT | Generate encrypted JWT token |
| [**listSnapTradeUsers()**](AuthenticationApi.md#listSnapTradeUsers) | **GET** /snapTrade/listUsers | List SnapTrade users |
| [**loginSnapTradeUser()**](AuthenticationApi.md#loginSnapTradeUser) | **POST** /snapTrade/login | Login user &amp; generate connection link |
| [**registerSnapTradeUser()**](AuthenticationApi.md#registerSnapTradeUser) | **POST** /snapTrade/registerUser | Create SnapTrade user |


## `deleteSnapTradeUser()`

```php
deleteSnapTradeUser($user_id): \SnapTrade\Model\DeleteUserResponse
```

Delete SnapTrade user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$user_id = "John.doe@snaptrade.com";

try {
    $result = $snaptrade->authentication->deleteSnapTradeUser(
        user_id: $user_id
    );
    print_r($result->$getStatus());
    print_r($result->$getUserId());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->deleteSnapTradeUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\SnapTrade\Model\DeleteUserResponse**](../Model/DeleteUserResponse.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserJWT()`

```php
getUserJWT($user_id, $user_secret): \SnapTrade\Model\EncryptedResponse
```

Generate encrypted JWT token

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
    $result = $snaptrade->authentication->getUserJWT(
        user_id: $user_id, 
        user_secret: $user_secret
    );
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->getUserJWT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |

### Return type

[**\SnapTrade\Model\EncryptedResponse**](../Model/EncryptedResponse.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSnapTradeUsers()`

```php
listSnapTradeUsers(): string[]
```

List SnapTrade users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);


try {
    $result = $snaptrade->authentication->listSnapTradeUsers();
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->listSnapTradeUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginSnapTradeUser()`

```php
loginSnapTradeUser($user_id, $user_secret, $snap_trade_login_user_request_body): \SnapTrade\Model\AuthenticationLoginSnapTradeUser200Response
```

Login user & generate connection link

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
$broker = "ALPACA";
$immediate_redirect = True;
$custom_redirect = "https://passiv.com";
$reconnect = "8b5f262d-4bb9-365d-888a-202bd3b15fa1";
$connection_type = "read";

try {
    $result = $snaptrade->authentication->loginSnapTradeUser(
        user_id: $user_id, 
        user_secret: $user_secret, 
        broker: $broker, 
        immediate_redirect: $immediate_redirect, 
        custom_redirect: $custom_redirect, 
        reconnect: $reconnect, 
        connection_type: $connection_type
    );
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->loginSnapTradeUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **snap_trade_login_user_request_body** | [**\SnapTrade\Model\SnapTradeLoginUserRequestBody**](../Model/SnapTradeLoginUserRequestBody.md)|  | [optional] |

### Return type

[**\SnapTrade\Model\AuthenticationLoginSnapTradeUser200Response**](../Model/AuthenticationLoginSnapTradeUser200Response.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerSnapTradeUser()`

```php
registerSnapTradeUser($snap_trade_register_user_request_body): \SnapTrade\Model\UserIDandSecret
```

Create SnapTrade user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$user_id = "snaptrade-user-123"; // SnapTrade User ID. Provided by SnapTrade Partner. Can be any string, as long as it's unique to a user
$rsa_public_key = "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAAAgQC7vbqajDw4o6gJy8UtmIbkcpnkO3Kwc4qsEnSZp/TR+fQi62F79RHWmwKOtFmwteURgLbj7D/WGuNLGOfa/2vse3G2eHnHl5CB8ruRX9fBl/KgwCVr2JaEuUm66bBQeP5XeBotdR4cvX38uPYivCDdPjJ1QWPdspTBKcxeFbccDw=="; // Open SSH RSA public key

try {
    $result = $snaptrade->authentication->registerSnapTradeUser(
        user_id: $user_id, 
        rsa_public_key: $rsa_public_key
    );
    print_r($result->$getUserId());
    print_r($result->$getUserSecret());
} catch (\Exception $e) {
    echo 'Exception when calling AuthenticationApi->registerSnapTradeUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **snap_trade_register_user_request_body** | [**\SnapTrade\Model\SnapTradeRegisterUserRequestBody**](../Model/SnapTradeRegisterUserRequestBody.md)|  | |

### Return type

[**\SnapTrade\Model\UserIDandSecret**](../Model/UserIDandSecret.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
