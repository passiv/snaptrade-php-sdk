# SnapTrade\ApiDisclaimerApi

All URIs are relative to https://api.snaptrade.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accept()**](ApiDisclaimerApi.md#accept) | **POST** /snapTrade/acceptDisclaimer | Accept or Reject SnapTrade disclaimer agreement |


## `accept()`

```php
accept($user_id, $user_secret, $api_disclaimer_accept_request): \SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus
```

Accept or Reject SnapTrade disclaimer agreement

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
$accepted = True; // A boolean that indicates whether this user has accepted the disclaimer or not.

try {
    $result = $snaptrade->apiDisclaimer->accept(
        user_id: $user_id, 
        user_secret: $user_secret, 
        accepted: $accepted
    );
    print_r($result->$getAccepted());
    print_r($result->$getTimestamp());
} catch (\Exception $e) {
    echo 'Exception when calling ApiDisclaimerApi->accept: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **user_secret** | **string**|  | |
| **api_disclaimer_accept_request** | [**\SnapTrade\Model\APIDisclaimerAcceptRequest**](../Model/APIDisclaimerAcceptRequest.md)|  | |

### Return type

[**\SnapTrade\Model\SnapTradeAPIDisclaimerAcceptStatus**](../Model/SnapTradeAPIDisclaimerAcceptStatus.md)

### Authorization

[PartnerClientId](../../README.md#PartnerClientId), [PartnerSignature](../../README.md#PartnerSignature), [PartnerTimestamp](../../README.md#PartnerTimestamp)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
