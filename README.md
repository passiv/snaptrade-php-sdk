<div align="center">

[![Visit SnapTrade](./header.png)](https://snaptrade.com)

# [SnapTrade](https://snaptrade.com)<a id="snaptrade"></a>

Connect brokerage accounts to your app for live positions and trading

[![Packagist](https://img.shields.io/badge/Packagist-v2.0.53-blue)](https://packagist.org/packages/konfig/snaptrade-php-sdk)
[![More Info](https://img.shields.io/badge/More%20Info-Click%20Here-orange)](https://snaptrade.com/)

</div>

## Table of Contents<a id="table-of-contents"></a>

<!-- toc -->

- [Installation & Usage](#installation--usage)
  * [Requirements](#requirements)
  * [Composer](#composer)
  * [Manual Installation](#manual-installation)
- [Getting Started](#getting-started)
- [Reference](#reference)
  * [`snaptrade.accountInformation.getAllUserHoldings`](#snaptradeaccountinformationgetalluserholdings)
  * [`snaptrade.accountInformation.getUserAccountBalance`](#snaptradeaccountinformationgetuseraccountbalance)
  * [`snaptrade.accountInformation.getUserAccountDetails`](#snaptradeaccountinformationgetuseraccountdetails)
  * [`snaptrade.accountInformation.getUserAccountOrders`](#snaptradeaccountinformationgetuseraccountorders)
  * [`snaptrade.accountInformation.getUserAccountPositions`](#snaptradeaccountinformationgetuseraccountpositions)
  * [`snaptrade.accountInformation.getUserAccountRecentOrders`](#snaptradeaccountinformationgetuseraccountrecentorders)
  * [`snaptrade.accountInformation.getUserAccountReturnRates`](#snaptradeaccountinformationgetuseraccountreturnrates)
  * [`snaptrade.accountInformation.getUserHoldings`](#snaptradeaccountinformationgetuserholdings)
  * [`snaptrade.accountInformation.listUserAccounts`](#snaptradeaccountinformationlistuseraccounts)
  * [`snaptrade.accountInformation.updateUserAccount`](#snaptradeaccountinformationupdateuseraccount)
  * [`snaptrade.apiStatus.check`](#snaptradeapistatuscheck)
  * [`snaptrade.authentication.deleteSnapTradeUser`](#snaptradeauthenticationdeletesnaptradeuser)
  * [`snaptrade.authentication.listSnapTradeUsers`](#snaptradeauthenticationlistsnaptradeusers)
  * [`snaptrade.authentication.loginSnapTradeUser`](#snaptradeauthenticationloginsnaptradeuser)
  * [`snaptrade.authentication.registerSnapTradeUser`](#snaptradeauthenticationregistersnaptradeuser)
  * [`snaptrade.authentication.resetSnapTradeUserSecret`](#snaptradeauthenticationresetsnaptradeusersecret)
  * [`snaptrade.connections.detailBrokerageAuthorization`](#snaptradeconnectionsdetailbrokerageauthorization)
  * [`snaptrade.connections.disableBrokerageAuthorization`](#snaptradeconnectionsdisablebrokerageauthorization)
  * [`snaptrade.connections.listBrokerageAuthorizations`](#snaptradeconnectionslistbrokerageauthorizations)
  * [`snaptrade.connections.refreshBrokerageAuthorization`](#snaptradeconnectionsrefreshbrokerageauthorization)
  * [`snaptrade.connections.removeBrokerageAuthorization`](#snaptradeconnectionsremovebrokerageauthorization)
  * [`snaptrade.connections.returnRates`](#snaptradeconnectionsreturnrates)
  * [`snaptrade.connections.sessionEvents`](#snaptradeconnectionssessionevents)
  * [`snaptrade.options.getOptionStrategy`](#snaptradeoptionsgetoptionstrategy)
  * [`snaptrade.options.getOptionsChain`](#snaptradeoptionsgetoptionschain)
  * [`snaptrade.options.getOptionsStrategyQuote`](#snaptradeoptionsgetoptionsstrategyquote)
  * [`snaptrade.options.listOptionHoldings`](#snaptradeoptionslistoptionholdings)
  * [`snaptrade.options.placeOptionStrategy`](#snaptradeoptionsplaceoptionstrategy)
  * [`snaptrade.referenceData.getCurrencyExchangeRatePair`](#snaptradereferencedatagetcurrencyexchangeratepair)
  * [`snaptrade.referenceData.getPartnerInfo`](#snaptradereferencedatagetpartnerinfo)
  * [`snaptrade.referenceData.getSecurityTypes`](#snaptradereferencedatagetsecuritytypes)
  * [`snaptrade.referenceData.getStockExchanges`](#snaptradereferencedatagetstockexchanges)
  * [`snaptrade.referenceData.getSymbols`](#snaptradereferencedatagetsymbols)
  * [`snaptrade.referenceData.getSymbolsByTicker`](#snaptradereferencedatagetsymbolsbyticker)
  * [`snaptrade.referenceData.listAllBrokerageAuthorizationType`](#snaptradereferencedatalistallbrokerageauthorizationtype)
  * [`snaptrade.referenceData.listAllBrokerages`](#snaptradereferencedatalistallbrokerages)
  * [`snaptrade.referenceData.listAllCurrencies`](#snaptradereferencedatalistallcurrencies)
  * [`snaptrade.referenceData.listAllCurrenciesRates`](#snaptradereferencedatalistallcurrenciesrates)
  * [`snaptrade.referenceData.symbolSearchUserAccount`](#snaptradereferencedatasymbolsearchuseraccount)
  * [`snaptrade.trading.cancelUserAccountOrder`](#snaptradetradingcanceluseraccountorder)
  * [`snaptrade.trading.getOrderImpact`](#snaptradetradinggetorderimpact)
  * [`snaptrade.trading.getUserAccountQuotes`](#snaptradetradinggetuseraccountquotes)
  * [`snaptrade.trading.placeForceOrder`](#snaptradetradingplaceforceorder)
  * [`snaptrade.trading.placeOrder`](#snaptradetradingplaceorder)
  * [`snaptrade.transactionsAndReporting.getActivities`](#snaptradetransactionsandreportinggetactivities)
  * [`snaptrade.transactionsAndReporting.getReportingCustomRange`](#snaptradetransactionsandreportinggetreportingcustomrange)

<!-- tocstop -->

## Installation & Usage<a id="installation--usage"></a>

### Requirements<a id="requirements"></a>

This library requires `PHP ^8.0`

### Composer<a id="composer"></a>

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/passiv/snaptrade-php-sdk.git"
    }
  ],
  "require": {
    "konfig/snaptrade-php-sdk": "2.0.53"
  }
}
```

Then run `composer install`

### Manual Installation<a id="manual-installation"></a>

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/snaptrade-php-sdk/vendor/autoload.php');
```

## Getting Started<a id="getting-started"></a>

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$result = $snaptrade->accountInformation->getAllUserHoldings(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    brokerage_authorizations: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```
## Reference<a id="reference"></a>


### `snaptrade.accountInformation.getAllUserHoldings`<a id="snaptradeaccountinformationgetalluserholdings"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

**Deprecated, please use the account-specific holdings endpoint instead.**

List all accounts for the user, plus balances, positions, and orders for each
account.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getAllUserHoldings(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    brokerage_authorizations: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### brokerage_authorizations: `string`<a id="brokerage_authorizations-string"></a>

Optional. Comma separated list of authorization IDs (only use if filtering is needed on one or more authorizations).


#### 🔄 Return<a id="🔄-return"></a>

[**AccountHoldings**](./lib/Model/AccountHoldings.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/holdings` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountBalance`<a id="snaptradeaccountinformationgetuseraccountbalance"></a>

Returns a list of balances for the account. Each element of the list has a distinct currency. Some brokerages like Questrade [allows holding multiple currencies in the same account](https://www.questrade.com/learning/questrade-basics/balances-and-reports/understanding-your-account-balances).

The data returned here is cached. How long the data is cached for varies by brokerage. Check the [brokerage integrations doc](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=d16c4c97b8d5438bbb2d8581ac53b11e) and look for "Cache Expiry Time" to see the exact value for a specific brokerage. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountBalance(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Balance**](./lib/Model/Balance.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/balances` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountDetails`<a id="snaptradeaccountinformationgetuseraccountdetails"></a>

Returns account detail known to SnapTrade for the specified account.

The data returned here is always cached and refreshed once a day. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountDetails(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountOrders`<a id="snaptradeaccountinformationgetuseraccountorders"></a>

Returns a list of recent orders in the specified account.

The data returned here is cached. How long the data is cached for varies by brokerage. Check the [brokerage integrations doc](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=d16c4c97b8d5438bbb2d8581ac53b11e) and look for "Cache Expiry Time" to see the exact value for a specific brokerage. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountOrders(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    state: "all", 
    days: 30
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### state: `string`<a id="state-string"></a>

defaults value is set to \"all\"

##### days: `int`<a id="days-int"></a>

Number of days in the past to fetch the most recent orders. Defaults to the last 30 days if no value is passed in.


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/orders` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountPositions`<a id="snaptradeaccountinformationgetuseraccountpositions"></a>

Returns a list of stock/ETF/crypto/mutual fund positions in the specified account. For option positions, please use the [options endpoint](/reference/Options/Options_listOptionHoldings).

The data returned here is cached. How long the data is cached for varies by brokerage. Check the [brokerage integrations doc](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=d16c4c97b8d5438bbb2d8581ac53b11e) and look for "Cache Expiry Time" to see the exact value for a specific brokerage. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountPositions(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Position**](./lib/Model/Position.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/positions` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountRecentOrders`<a id="snaptradeaccountinformationgetuseraccountrecentorders"></a>

Returns a list of orders executed in the last 24 hours in the specified account.
This endpoint is realtime and can be used to quickly check if account state has recently changed due to an execution
Differs from /orders in that it only returns orders that have been *executed* in the last 24 hours as opposed to pending or cancelled orders up to 30 days old
*Please contact support for access as this endpoint is not enabled by default.*



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountRecentOrders(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**RecentOrdersResponse**](./lib/Model/RecentOrdersResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/recentOrders` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserAccountReturnRates`<a id="snaptradeaccountinformationgetuseraccountreturnrates"></a>

Returns a list of rate of return percents for a given account. Will include timeframes available from the brokerage, for example "ALL", "1Y", "6M", "3M", "1M"



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserAccountReturnRates(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**RateOfReturnResponse**](./lib/Model/RateOfReturnResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/returnRates` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.getUserHoldings`<a id="snaptradeaccountinformationgetuserholdings"></a>

Returns a list of balances, positions, and recent orders for the specified account. The data returned is similar to the data returned over the more fine-grained [balances](/reference/Account%20Information/AccountInformation_getUserAccountBalance), [positions](/reference/Account%20Information/AccountInformation_getUserAccountPositions) and [orders](/reference/Account%20Information/AccountInformation_getUserAccountOrders) endpoints. __The finer-grained APIs are preferred. They are easier to work with, faster, and have better error handling than this coarse-grained API.__

The data returned here is cached. How long the data is cached for varies by brokerage. Check the [brokerage integrations doc](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=d16c4c97b8d5438bbb2d8581ac53b11e) and look for "Cache Expiry Time" to see the exact value for a specific brokerage. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->getUserHoldings(
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountHoldingsAccount**](./lib/Model/AccountHoldingsAccount.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/holdings` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.listUserAccounts`<a id="snaptradeaccountinformationlistuseraccounts"></a>

Returns all brokerage accounts across all connections known to SnapTrade for the authenticated user.

The data returned here is always cached and refreshed once a day. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->listUserAccounts(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.accountInformation.updateUserAccount`<a id="snaptradeaccountinformationupdateuseraccount"></a>

Updates various properties of a specified account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->accountInformation->updateUserAccount(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "accountId_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to update.


#### 🔄 Return<a id="🔄-return"></a>

[**Account**](./lib/Model/Account.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}` `PUT`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.apiStatus.check`<a id="snaptradeapistatuscheck"></a>

Check whether the API is operational and verify timestamps.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->apiStatus->check();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Status**](./lib/Model/Status.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.deleteSnapTradeUser`<a id="snaptradeauthenticationdeletesnaptradeuser"></a>

Deletes a registered user and all associated data. This action is irreversible. This API is asynchronous and will return a 200 status code if the request is accepted. The user and all associated data will be queued for deletion. Once deleted, a `USER_DELETED` webhook will be sent.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->deleteSnapTradeUser(
    user_id: "snaptrade-user-123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**DeleteUserResponse**](./lib/Model/DeleteUserResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/deleteUser` `DELETE`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.listSnapTradeUsers`<a id="snaptradeauthenticationlistsnaptradeusers"></a>

Returns a list of all registered user IDs. Please note that the response is not currently paginated.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->listSnapTradeUsers();
```


#### 🔄 Return<a id="🔄-return"></a>

**string[]**

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/listUsers` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.loginSnapTradeUser`<a id="snaptradeauthenticationloginsnaptradeuser"></a>

Authenticates a SnapTrade user and returns the Connection Portal URL used for connecting brokerage accounts. Please check [this guide](/docs/implement-connection-portal) for how to integrate the Connection Portal into your app.

Please note that the returned URL expires in 5 minutes.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->loginSnapTradeUser(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    broker: "ALPACA", 
    immediate_redirect: True, 
    custom_redirect: "https://snaptrade.com", 
    reconnect: "8b5f262d-4bb9-365d-888a-202bd3b15fa1", 
    connection_type: "read", 
    connection_portal_version: "v4"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### broker: `string`<a id="broker-string"></a>

Slug of the brokerage to connect the user to. See [the integrations page](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=3cfea70ef4254afc89704e47275a7a9a&pvs=4) for a list of supported brokerages and their slugs.

##### immediateRedirect: `bool`<a id="immediateredirect-bool"></a>

When set to `true`, user will be redirected back to the partner's site instead of the connection portal. This parameter is ignored if the connection portal is loaded inside an iframe. See the [guide on ways to integrate the connection portal](/docs/implement-connection-portal) for more information.

##### customRedirect: `string`<a id="customredirect-string"></a>

URL to redirect the user to after the user connects their brokerage account. This parameter is ignored if the connection portal is loaded inside an iframe. See the [guide on ways to integrate the connection portal](/docs/implement-connection-portal) for more information.

##### reconnect: `string`<a id="reconnect-string"></a>

The UUID of the brokerage connection to be reconnected. This parameter should be left empty unless you are reconnecting a disabled connection. See the [guide on fixing broken connections](/docs/fix-broken-connections) for more information.

##### connectionType: `string`<a id="connectiontype-string"></a>

Sets whether the connection should be read-only or trade-enabled. Defaults to read-only if not specified.

##### connectionPortalVersion: `string`<a id="connectionportalversion-string"></a>

Sets the connection portal version to render. Currently only v4 is supported and is the default. All other versions are deprecated and will automatically be set to v4.


#### 🔄 Return<a id="🔄-return"></a>

[**AuthenticationLoginSnapTradeUser200Response**](./lib/Model/AuthenticationLoginSnapTradeUser200Response.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/login` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.registerSnapTradeUser`<a id="snaptradeauthenticationregistersnaptradeuser"></a>

Registers a new SnapTrade user under your Client ID. A user secret will be automatically generated for you and must be properly stored in your system.
Most SnapTrade operations require a user ID and user secret to be passed in as parameters.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->registerSnapTradeUser(
    user_id: "snaptrade-user-123"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### userId: `string`<a id="userid-string"></a>

SnapTrade User ID. This is chosen by the API partner and can be any string that is a) unique to the user, and b) immutable for the user. It is recommended to NOT use email addresses for this property because they are usually not immutable.


#### 🔄 Return<a id="🔄-return"></a>

[**UserIDandSecret**](./lib/Model/UserIDandSecret.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/registerUser` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.authentication.resetSnapTradeUserSecret`<a id="snaptradeauthenticationresetsnaptradeusersecret"></a>

Rotates the secret for a SnapTrade user. You might use this if `userSecret` is compromised. Please note that if you call this endpoint and fail to save the new secret, you'll no longer be able to access any data for this user, and your only option will be to delete and recreate the user, then ask them to reconnect.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->authentication->resetSnapTradeUserSecret(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### userId: `string`<a id="userid-string"></a>

SnapTrade User ID. This is chosen by the API partner and can be any string that is a) unique to the user, and b) immutable for the user. It is recommended to NOT use email addresses for this property because they are usually not immutable.

##### userSecret: `string`<a id="usersecret-string"></a>

SnapTrade User Secret. This is a randomly generated string and should be stored securely. If compromised, please rotate it via the [rotate user secret endpoint](/reference/Authentication/Authentication_resetSnapTradeUserSecret).


#### 🔄 Return<a id="🔄-return"></a>

[**UserIDandSecret**](./lib/Model/UserIDandSecret.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/resetUserSecret` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.detailBrokerageAuthorization`<a id="snaptradeconnectionsdetailbrokerageauthorization"></a>

Returns a single connection for the specified ID.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->detailBrokerageAuthorization(
    authorization_id: "87b24961-b51e-4db8-9226-f198f6518a89", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorization**](./lib/Model/BrokerageAuthorization.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.disableBrokerageAuthorization`<a id="snaptradeconnectionsdisablebrokerageauthorization"></a>

Manually force the specified connection to become disabled. This should only be used for testing a reconnect flow, and never used on production connections.
Will trigger a disconnect as if it happened naturally, and send a [`CONNECTION_BROKEN` webhook](/docs/webhooks#webhooks-connection_broken) for the connection.

*Please contact us in order to use this endpoint as it is disabled by default.*



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->disableBrokerageAuthorization(
    authorization_id: "87b24961-b51e-4db8-9226-f198f6518a89", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorizationDisabledConfirmation**](./lib/Model/BrokerageAuthorizationDisabledConfirmation.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}/disable` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.listBrokerageAuthorizations`<a id="snaptradeconnectionslistbrokerageauthorizations"></a>

Returns a list of all connections for the specified user. Note that `Connection` and `Brokerage Authorization` are interchangeable, but the term `Connection` is preferred and used in the doc for consistency.

A connection is usually tied to a single login at a brokerage. A single connection can contain multiple brokerage accounts.

SnapTrade performs de-duping on connections for a given user. If the user has an existing connection with the brokerage, when connecting the brokerage with the same credentials, SnapTrade will return the existing connection instead of creating a new one.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->listBrokerageAuthorizations(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorization**](./lib/Model/BrokerageAuthorization.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.refreshBrokerageAuthorization`<a id="snaptradeconnectionsrefreshbrokerageauthorization"></a>

Trigger a holdings update for all accounts under this connection. Updates will be queued asynchronously. [`ACCOUNT_HOLDINGS_UPDATED` webhook](/docs/webhooks#webhooks-account_holdings_updated) will be sent once the sync completes for each account under the connection.

*Please contact support for access as this endpoint is not enabled by default.*



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->refreshBrokerageAuthorization(
    authorization_id: "87b24961-b51e-4db8-9226-f198f6518a89", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorizationRefreshConfirmation**](./lib/Model/BrokerageAuthorizationRefreshConfirmation.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}/refresh` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.removeBrokerageAuthorization`<a id="snaptradeconnectionsremovebrokerageauthorization"></a>

Deletes the connection specified by the ID. This will also delete all accounts and holdings associated with the connection. This action is irreversible. This endpoint is synchronous, a 204 response indicates that the connection has been successfully deleted.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$snaptrade->connections->removeBrokerageAuthorization(
    authorization_id: "87b24961-b51e-4db8-9226-f198f6518a89", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

void (empty response body)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}` `DELETE`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.returnRates`<a id="snaptradeconnectionsreturnrates"></a>

Returns a list of rate of return percents for a given connection. Will include timeframes available from the brokerage, for example "ALL", "1Y", "6M", "3M", "1M"



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->returnRates(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    authorization_id: "87b24961-b51e-4db8-9226-f198f6518a89"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### authorization_id: `string`<a id="authorization_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**RateOfReturnResponse**](./lib/Model/RateOfReturnResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/authorizations/{authorizationId}/returnRates` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.connections.sessionEvents`<a id="snaptradeconnectionssessionevents"></a>

Returns a list of session events associated with a user.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->connections->sessionEvents(
    partner_client_id: "SNAPTRADETEST", 
    user_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    session_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### partner_client_id: `string`<a id="partner_client_id-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

Optional comma separated list of user IDs used to filter the request on specific users

##### session_id: `string`<a id="session_id-string"></a>

Optional comma separated list of session IDs used to filter the request on specific users


#### 🔄 Return<a id="🔄-return"></a>

[**ConnectionsSessionEvents200ResponseInner**](./lib/Model/ConnectionsSessionEvents200ResponseInner.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/sessionEvents` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.getOptionStrategy`<a id="snaptradeoptionsgetoptionstrategy"></a>

Creates an option strategy object that will be used to place an option strategy order.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionStrategy(
    underlying_symbol_id: "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    legs: [
        [
            "action" => "BUY_TO_OPEN",
            "option_symbol_id" => "SPY220819P00200000",
            "quantity" => 1,
        ]
    ], 
    strategy_type: "CUSTOM", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "accountId_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### underlying_symbol_id: `string`<a id="underlying_symbol_id-string"></a>

##### legs: [`OptionLeg`](./lib/Model/OptionLeg.php)[]<a id="legs-optionleglibmodeloptionlegphp"></a>

##### strategy_type: `string`<a id="strategy_type-string"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to create the option strategy object in.


#### 🔄 Return<a id="🔄-return"></a>

[**StrategyQuotes**](./lib/Model/StrategyQuotes.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionStrategy` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.getOptionsChain`<a id="snaptradeoptionsgetoptionschain"></a>

Returns the option chain for the specified symbol in the specified account.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionsChain(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "accountId_example", 
    symbol: "symbol_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to get the options chain from.

##### symbol: `string`<a id="symbol-string"></a>

Universal symbol ID if symbol


#### 🔄 Return<a id="🔄-return"></a>

[**OptionChainInner**](./lib/Model/OptionChainInner.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionsChain` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.getOptionsStrategyQuote`<a id="snaptradeoptionsgetoptionsstrategyquote"></a>

Returns a Strategy Quotes object which has latest market data of the specified option strategy.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->getOptionsStrategyQuote(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "accountId_example", 
    option_strategy_id: "2bcd7cc3-e922-4976-bce1-9858296801c3"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account the strategy will be placed in.

##### option_strategy_id: `string`<a id="option_strategy_id-string"></a>

Option strategy id obtained from response when creating option strategy object


#### 🔄 Return<a id="🔄-return"></a>

[**StrategyQuotes**](./lib/Model/StrategyQuotes.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionStrategy/{optionStrategyId}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.listOptionHoldings`<a id="snaptradeoptionslistoptionholdings"></a>

Returns a list of option positions in the specified account. For stock/ETF/crypto/mutual fund positions, please use the [positions endpoint](/reference/Account%20Information/AccountInformation_getUserAccountPositions).

The data returned here is cached. How long the data is cached for varies by brokerage. Check the [brokerage integrations doc](https://snaptrade.notion.site/66793431ad0b416489eaabaf248d0afb?v=d16c4c97b8d5438bbb2d8581ac53b11e) and look for "Cache Expiry Time" to see the exact value for a specific brokerage. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->listOptionHoldings(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**OptionsPosition**](./lib/Model/OptionsPosition.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/options` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.options.placeOptionStrategy`<a id="snaptradeoptionsplaceoptionstrategy"></a>

Places the option strategy order and returns the order record received from the brokerage.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->options->placeOptionStrategy(
    order_type: "Market", 
    time_in_force: "FOK", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    option_strategy_id: "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    price: 31.33
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### order_type:<a id="order_type"></a>

##### time_in_force:<a id="time_in_force"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

The ID of the account to execute the strategy in.

##### option_strategy_id: `string`<a id="option_strategy_id-string"></a>

Option strategy id obtained from response when creating option strategy object

##### price: `float`<a id="price-float"></a>

Trade Price if limit or stop limit order


#### 🔄 Return<a id="🔄-return"></a>

[**StrategyOrderRecord**](./lib/Model/StrategyOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/optionStrategy/{optionStrategyId}/execute` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getCurrencyExchangeRatePair`<a id="snaptradereferencedatagetcurrencyexchangeratepair"></a>

Returns an Exchange Rate Pair object for the specified Currency Pair.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getCurrencyExchangeRatePair(
    currency_pair: "currencyPair_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### currency_pair: `string`<a id="currency_pair-string"></a>

A currency pair based on currency code for example, {CAD-USD}


#### 🔄 Return<a id="🔄-return"></a>

[**ExchangeRatePairs**](./lib/Model/ExchangeRatePairs.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/currencies/rates/{currencyPair}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getPartnerInfo`<a id="snaptradereferencedatagetpartnerinfo"></a>

Returns configurations for your SnapTrade Client ID, including allowed brokerages and data access.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getPartnerInfo();
```


#### 🔄 Return<a id="🔄-return"></a>

[**PartnerData**](./lib/Model/PartnerData.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/snapTrade/partners` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getSecurityTypes`<a id="snaptradereferencedatagetsecuritytypes"></a>

Return all available security types supported by SnapTrade.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getSecurityTypes();
```


#### 🔄 Return<a id="🔄-return"></a>

[**SecurityType**](./lib/Model/SecurityType.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/securityTypes` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getStockExchanges`<a id="snaptradereferencedatagetstockexchanges"></a>

Returns a list of all supported Exchanges.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getStockExchanges();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Exchange**](./lib/Model/Exchange.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/exchanges` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getSymbols`<a id="snaptradereferencedatagetsymbols"></a>

Returns a list of Universal Symbol objects that match the given query. The matching takes into consideration both the ticker and the name of the symbol. Only the first 20 results are returned.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getSymbols(
    substring: "AAPL"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### substring: `string`<a id="substring-string"></a>

The search query for symbols.


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalSymbol**](./lib/Model/UniversalSymbol.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/symbols` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.getSymbolsByTicker`<a id="snaptradereferencedatagetsymbolsbyticker"></a>

Returns the Universal Symbol object specified by the ticker or the Universal Symbol ID. When a ticker is specified, the first matching result is returned. We largely follow the [Yahoo Finance ticker format](https://help.yahoo.com/kb/SLN2310.html)(click on "Yahoo Finance Market Coverage and Data Delays"). For example, for securities traded on the Toronto Stock Exchange, the symbol has a '.TO' suffix. For securities traded on NASDAQ or NYSE, the symbol does not have a suffix. Please use the ticker with the proper suffix for the best results.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->getSymbolsByTicker(
    query: "query_example"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### query: `string`<a id="query-string"></a>

The ticker or Universal Symbol ID to look up the symbol with.


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalSymbol**](./lib/Model/UniversalSymbol.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/symbols/{query}` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllBrokerageAuthorizationType`<a id="snaptradereferencedatalistallbrokerageauthorizationtype"></a>

Returns a list of all defined Brokerage authorization Type objects.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllBrokerageAuthorizationType(
    brokerage: "QUESTRADE,ALPACA"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### brokerage: `string`<a id="brokerage-string"></a>

Comma separated value of brokerage slugs


#### 🔄 Return<a id="🔄-return"></a>

[**BrokerageAuthorizationTypeReadOnly**](./lib/Model/BrokerageAuthorizationTypeReadOnly.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/brokerageAuthorizationTypes` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllBrokerages`<a id="snaptradereferencedatalistallbrokerages"></a>

Returns a list of all defined Brokerage objects.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllBrokerages();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Brokerage**](./lib/Model/Brokerage.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/brokerages` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllCurrencies`<a id="snaptradereferencedatalistallcurrencies"></a>

Returns a list of all defined Currency objects.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllCurrencies();
```


#### 🔄 Return<a id="🔄-return"></a>

[**Currency**](./lib/Model/Currency.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/currencies` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.listAllCurrenciesRates`<a id="snaptradereferencedatalistallcurrenciesrates"></a>

Returns a list of all Exchange Rate Pairs for all supported Currencies.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->listAllCurrenciesRates();
```


#### 🔄 Return<a id="🔄-return"></a>

[**ExchangeRatePairs**](./lib/Model/ExchangeRatePairs.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/currencies/rates` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.referenceData.symbolSearchUserAccount`<a id="snaptradereferencedatasymbolsearchuseraccount"></a>

Returns a list of Universal Symbol objects that match the given query. The matching takes into consideration both the ticker and the name of the symbol. Only the first 20 results are returned.

The search results are further limited to the symbols supported by the brokerage for which the account is under.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->referenceData->symbolSearchUserAccount(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    substring: "AAPL"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### substring: `string`<a id="substring-string"></a>

The search query for symbols.


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalSymbol**](./lib/Model/UniversalSymbol.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/symbols` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.cancelUserAccountOrder`<a id="snaptradetradingcanceluseraccountorder"></a>

Attempts to cancel an open order with the brokerage. If the order is no longer cancellable, the request will be rejected.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->cancelUserAccountOrder(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    brokerage_order_id: "66a033fa-da74-4fcf-b527-feefdec9257e"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### account_id: `string`<a id="account_id-string"></a>

##### brokerage_order_id: `string`<a id="brokerage_order_id-string"></a>

Order ID returned by brokerage. This is the unique identifier for the order in the brokerage system.


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/orders/cancel` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.getOrderImpact`<a id="snaptradetradinggetorderimpact"></a>

Simulates an order and its impact on the account. This endpoint does not place the order with the brokerage. If successful, it returns a `Trade` object and the ID of the object can be used to place the order with the brokerage using the [place checked order endpoint](/reference/Trading/Trading_placeOrder). Please note that the `Trade` object returned expires after 5 minutes. Any order placed using an expired `Trade` will be rejected.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->getOrderImpact(
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    action: "BUY", 
    universal_symbol_id: "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    order_type: "Market", 
    time_in_force: "FOK", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    price: 31.33, 
    stop: 31.33, 
    units: 10.5, 
    notional_value: None
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_id: `string`<a id="account_id-string"></a>

Unique identifier for the connected brokerage account. This is the UUID used to reference the account in SnapTrade.

##### action:<a id="action"></a>

##### universal_symbol_id: `string`<a id="universal_symbol_id-string"></a>

Unique identifier for the symbol within SnapTrade. This is the ID used to reference the symbol in SnapTrade API calls.

##### order_type:<a id="order_type"></a>

##### time_in_force:<a id="time_in_force"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### price: `float`<a id="price-float"></a>

The limit price for `Limit` and `StopLimit` orders.

##### stop: `float`<a id="stop-float"></a>

The price at which a stop order is triggered for `Stop` and `StopLimit` orders.

##### units: [`float`](./lib/Model/float.php)<a id="units-floatlibmodelfloatphp"></a>

##### notional_value: [`ManualTradeFormNotionalValue`](./lib/Model/ManualTradeFormNotionalValue.php)<a id="notional_value-manualtradeformnotionalvaluelibmodelmanualtradeformnotionalvaluephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**ManualTradeAndImpact**](./lib/Model/ManualTradeAndImpact.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/impact` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.getUserAccountQuotes`<a id="snaptradetradinggetuseraccountquotes"></a>

Returns quotes from the brokerage for the specified symbols and account. The quotes returned can be delayed depending on the brokerage the account belongs to. It is highly recommended that you use your own market data provider for real-time quotes instead of relying on this endpoint. This endpoint does not work for options quotes.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->getUserAccountQuotes(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    symbols: "symbols_example", 
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    use_ticker: True
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### symbols: `string`<a id="symbols-string"></a>

List of Universal Symbol IDs or tickers to get quotes for.

##### account_id: `string`<a id="account_id-string"></a>

##### use_ticker: `bool`<a id="use_ticker-bool"></a>

Should be set to `True` if `symbols` are comprised of tickers. Defaults to `False` if not provided.


#### 🔄 Return<a id="🔄-return"></a>

[**SymbolsQuotesInner**](./lib/Model/SymbolsQuotesInner.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/accounts/{accountId}/quotes` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.placeForceOrder`<a id="snaptradetradingplaceforceorder"></a>

Places a brokerage order in the specified account. The order could be rejected by the brokerage if it is invalid or if the account does not have sufficient funds.

This endpoint does not compute the impact to the account balance from the order and any potential commissions before submitting the order to the brokerage. If that is desired, you can use the [check order impact endpoint](/reference/Trading/Trading_getOrderImpact).

It's recommended to trigger a manual refresh of the account after placing an order to ensure the account is up to date. You can use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint for this.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeForceOrder(
    account_id: "917c8734-8470-4a3e-a18f-57c3f2ee6631", 
    action: "BUY", 
    order_type: "Market", 
    time_in_force: "FOK", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    universal_symbol_id: "2bcd7cc3-e922-4976-bce1-9858296801c3", 
    symbol: "AAPL  131124C00240000", 
    price: 31.33, 
    stop: 31.33, 
    units: 10.5, 
    notional_value: None
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### account_id: `string`<a id="account_id-string"></a>

Unique identifier for the connected brokerage account. This is the UUID used to reference the account in SnapTrade.

##### action:<a id="action"></a>

##### order_type:<a id="order_type"></a>

##### time_in_force:<a id="time_in_force"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### universal_symbol_id: [`string`](./lib/Model/string.php)<a id="universal_symbol_id-stringlibmodelstringphp"></a>

The universal symbol ID of the security to trade. Must be 'null' if `symbol` is provided, otherwise must be provided.

##### symbol: `string`<a id="symbol-string"></a>

The security's trading ticker symbol. This currently only support Options symbols in the 21 character OCC format. For example \\\"AAPL  131124C00240000\\\" represents a call option on AAPL expiring on 2024-11-13 with a strike price of $240. For more information on the OCC format, see [here](https://en.wikipedia.org/wiki/Option_symbol#OCC_format). If 'symbol' is provided, then 'universal_symbol_id' must be 'null'.

##### price: `float`<a id="price-float"></a>

The limit price for `Limit` and `StopLimit` orders.

##### stop: `float`<a id="stop-float"></a>

The price at which a stop order is triggered for `Stop` and `StopLimit` orders.

##### units: [`float`](./lib/Model/float.php)<a id="units-floatlibmodelfloatphp"></a>

For Equity orders, this represents the number of shares for the order. This can be a decimal for fractional orders. Must be `null` if `notional_value` is provided. If placing an Option order, this field represents the number of contracts to buy or sell. (e.g., 1 contract = 100 shares).

##### notional_value: [`ManualTradeFormNotionalValue`](./lib/Model/ManualTradeFormNotionalValue.php)<a id="notional_value-manualtradeformnotionalvaluelibmodelmanualtradeformnotionalvaluephp"></a>


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/place` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.trading.placeOrder`<a id="snaptradetradingplaceorder"></a>

Places the previously checked order with the brokerage. The `tradeId` is obtained from the [check order impact endpoint](/reference/Trading/Trading_getOrderImpact). If you prefer to place the order without checking for impact first, you can use the [place order endpoint](/reference/Trading/Trading_placeForceOrder).

It's recommended to trigger a manual refresh of the account after placing an order to ensure the account is up to date. You can use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint for this.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->trading->placeOrder(
    trade_id: "139e307a-82f7-4402-b39e-4da7baa87758", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    wait_to_confirm: True
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### trade_id: `string`<a id="trade_id-string"></a>

Obtained from calling the [check order impact endpoint](/reference/Trading/Trading_getOrderImpact)

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### wait_to_confirm: `bool`<a id="wait_to_confirm-bool"></a>

Optional, defaults to true. Determines if a wait is performed to check on order status. If false, latency will be reduced but orders returned will be more likely to be of status `PENDING` as we will not wait to check on the status before responding to the request.


#### 🔄 Return<a id="🔄-return"></a>

[**AccountOrderRecord**](./lib/Model/AccountOrderRecord.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/trade/{tradeId}` `POST`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.transactionsAndReporting.getActivities`<a id="snaptradetransactionsandreportinggetactivities"></a>

Returns all historical transactions for the specified user and filtering criteria. It's recommended to use `startDate` and `endDate` to paginate through the data, as the response may be very large for accounts with a long history and/or a lot of activity. There's a max number of 10000 transactions returned per request.

There is no guarantee to the ordering of the transactions returned. Please sort the transactions based on the `trade_date` field if you need them in a specific order.

The data returned here is always cached and refreshed once a day. **If you need real-time data, please use the [manual refresh](/reference/Connections/Connections_refreshBrokerageAuthorization) endpoint**.



#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->transactionsAndReporting->getActivities(
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    start_date: "2022-01-24", 
    end_date: "2022-01-24", 
    accounts: "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    brokerage_authorizations: "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    type: "BUY,SELL,DIVIDEND"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### start_date: `\DateTime`<a id="start_date-datetime"></a>

The start date (inclusive) of the transaction history to retrieve. If not provided, the default is the first transaction known to SnapTrade based on `trade_date`.

##### end_date: `\DateTime`<a id="end_date-datetime"></a>

The end date (inclusive) of the transaction history to retrieve. If not provided, the default is the last transaction known to SnapTrade based on `trade_date`.

##### accounts: `string`<a id="accounts-string"></a>

Optional comma separated list of SnapTrade Account IDs used to filter the request to specific accounts. If not provided, the default is all known brokerage accounts for the user. The `brokerageAuthorizations` parameter takes precedence over this parameter.

##### brokerage_authorizations: `string`<a id="brokerage_authorizations-string"></a>

Optional comma separated list of SnapTrade Connection (Brokerage Authorization) IDs used to filter the request to only accounts that belong to those connections. If not provided, the default is all connections for the user. This parameter takes precedence over the `accounts` parameter.

##### type: `string`<a id="type-string"></a>

Optional comma separated list of transaction types to filter by. SnapTrade does a best effort to categorize brokerage transaction types into a common set of values. Here are some of the most popular values:   - `BUY` - Asset bought.   - `SELL` - Asset sold.   - `DIVIDEND` - Dividend payout.   - `CONTRIBUTION` - Cash contribution.   - `WITHDRAWAL` - Cash withdrawal.   - `REI` - Dividend reinvestment.   - `INTEREST` - Interest deposited into the account.   - `FEE` - Fee withdrawn from the account.   - `OPTIONEXPIRATION` - Option expiration event.   - `OPTIONASSIGNMENT` - Option assignment event.   - `OPTIONEXERCISE` - Option exercise event.


#### 🔄 Return<a id="🔄-return"></a>

[**UniversalActivity**](./lib/Model/UniversalActivity.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/activities` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


### `snaptrade.transactionsAndReporting.getReportingCustomRange`<a id="snaptradetransactionsandreportinggetreportingcustomrange"></a>
![Deprecated](https://img.shields.io/badge/deprecated-yellow)

Returns performance information (contributions, dividends, rate of return, etc) for a specific timeframe. Please note that Total Equity Timeframe and Rate of Returns are experimental features. Please contact support@snaptrade.com if you notice any inconsistencies.


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $snaptrade->transactionsAndReporting->getReportingCustomRange(
    start_date: "2022-01-24", 
    end_date: "2022-01-24", 
    user_id: "snaptrade-user-123", 
    user_secret: "adf2aa34-8219-40f7-a6b3-60156985cc61", 
    accounts: "917c8734-8470-4a3e-a18f-57c3f2ee6631,65e839a3-9103-4cfb-9b72-2071ef80c5f2", 
    detailed: True, 
    frequency: "monthly"
);
```

#### ⚙️ Parameters<a id="⚙️-parameters"></a>

##### start_date: `\DateTime`<a id="start_date-datetime"></a>

##### end_date: `\DateTime`<a id="end_date-datetime"></a>

##### user_id: `string`<a id="user_id-string"></a>

##### user_secret: `string`<a id="user_secret-string"></a>

##### accounts: `string`<a id="accounts-string"></a>

Optional comma separated list of account IDs used to filter the request on specific accounts

##### detailed: `bool`<a id="detailed-bool"></a>

Optional, increases frequency of data points for the total value and contribution charts if set to true

##### frequency: `string`<a id="frequency-string"></a>

Optional frequency for the rate of return chart (defaults to monthly). Possible values are daily, weekly, monthly, quarterly, yearly.


#### 🔄 Return<a id="🔄-return"></a>

[**PerformanceCustom**](./lib/Model/PerformanceCustom.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/performance/custom` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


## Author<a id="author"></a>
This PHP package is automatically generated by [Konfig](https://konfigthis.com)
