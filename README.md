# snaptrade-php-sdk [Packagist](https://packagist.org/packages/konfig/snaptrade-php-sdk)

Connect brokerage accounts to your app for live positions and trading

For more information, please visit [https://snaptrade.com/](https://snaptrade.com/).

## Installation & Usage

### Requirements

This library requires `PHP ^8.0`

### Composer

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
    "konfig/snaptrade-php-sdk": "2.0.7"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/snaptrade-php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$snaptrade = new \SnapTrade\Client(
    clientId: getenv("SNAPTRADE_CLIENT_ID"),
    consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$brokerage_authorizations = "917c8734-8470-4a3e-a18f-57c3f2ee6631"; // Optional. Comma seperated list of authorization IDs (only use if filtering is needed on one or more authorizations).

try {
    $result = $snaptrade->accountInformation->getAllUserHoldings(
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

## API Endpoints

All URIs are relative to *https://api.snaptrade.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountInformationApi* | [**getAllUserHoldings**](docs/Api/AccountInformationApi.md#getalluserholdings) | **GET** /holdings | List all accounts for the user, plus balances, positions, and orders for each account.
*AccountInformationApi* | [**getUserAccountBalance**](docs/Api/AccountInformationApi.md#getuseraccountbalance) | **GET** /accounts/{accountId}/balances | List account balances
*AccountInformationApi* | [**getUserAccountDetails**](docs/Api/AccountInformationApi.md#getuseraccountdetails) | **GET** /accounts/{accountId} | Return details of a specific investment account
*AccountInformationApi* | [**getUserAccountOrders**](docs/Api/AccountInformationApi.md#getuseraccountorders) | **GET** /accounts/{accountId}/orders | List account orders
*AccountInformationApi* | [**getUserAccountPositions**](docs/Api/AccountInformationApi.md#getuseraccountpositions) | **GET** /accounts/{accountId}/positions | List account positions
*AccountInformationApi* | [**getUserHoldings**](docs/Api/AccountInformationApi.md#getuserholdings) | **GET** /accounts/{accountId}/holdings | List balances, positions and orders for the specified account
*AccountInformationApi* | [**listUserAccounts**](docs/Api/AccountInformationApi.md#listuseraccounts) | **GET** /accounts | List accounts
*AccountInformationApi* | [**updateUserAccount**](docs/Api/AccountInformationApi.md#updateuseraccount) | **PUT** /accounts/{accountId} | Update details of an investment account
*ApiStatusApi* | [**check**](docs/Api/ApiStatusApi.md#check) | **GET** / | Get API Status
*AuthenticationApi* | [**deleteSnapTradeUser**](docs/Api/AuthenticationApi.md#deletesnaptradeuser) | **DELETE** /snapTrade/deleteUser | Delete SnapTrade user
*AuthenticationApi* | [**getUserJWT**](docs/Api/AuthenticationApi.md#getuserjwt) | **GET** /snapTrade/encryptedJWT | Generate encrypted JWT token
*AuthenticationApi* | [**listSnapTradeUsers**](docs/Api/AuthenticationApi.md#listsnaptradeusers) | **GET** /snapTrade/listUsers | List SnapTrade users
*AuthenticationApi* | [**loginSnapTradeUser**](docs/Api/AuthenticationApi.md#loginsnaptradeuser) | **POST** /snapTrade/login | Login user &amp; generate connection link
*AuthenticationApi* | [**registerSnapTradeUser**](docs/Api/AuthenticationApi.md#registersnaptradeuser) | **POST** /snapTrade/registerUser | Create SnapTrade user
*AuthenticationApi* | [**resetSnapTradeUserSecret**](docs/Api/AuthenticationApi.md#resetsnaptradeusersecret) | **POST** /snapTrade/resetUserSecret | Obtain a new user secret for a user
*ConnectionsApi* | [**detailBrokerageAuthorization**](docs/Api/ConnectionsApi.md#detailbrokerageauthorization) | **GET** /authorizations/{authorizationId} | Get brokerage authorization details
*ConnectionsApi* | [**listBrokerageAuthorizations**](docs/Api/ConnectionsApi.md#listbrokerageauthorizations) | **GET** /authorizations | List all brokerage authorizations for the user
*ConnectionsApi* | [**removeBrokerageAuthorization**](docs/Api/ConnectionsApi.md#removebrokerageauthorization) | **DELETE** /authorizations/{authorizationId} | Delete brokerage authorization
*ConnectionsApi* | [**sessionEvents**](docs/Api/ConnectionsApi.md#sessionevents) | **GET** /sessionEvents | List all session events for the partner
*ErrorLogsApi* | [**listUserErrors**](docs/Api/ErrorLogsApi.md#listusererrors) | **GET** /snapTrade/listUserErrors | Retrieve error logs on behalf of your SnapTrade users
*OptionsApi* | [**getOptionStrategy**](docs/Api/OptionsApi.md#getoptionstrategy) | **POST** /accounts/{accountId}/optionStrategy | Creates an option strategy object that will be used to place an option strategy order
*OptionsApi* | [**getOptionsChain**](docs/Api/OptionsApi.md#getoptionschain) | **GET** /accounts/{accountId}/optionsChain | Get the options chain
*OptionsApi* | [**getOptionsStrategyQuote**](docs/Api/OptionsApi.md#getoptionsstrategyquote) | **GET** /accounts/{accountId}/optionStrategy/{optionStrategyId} | Get latest market data of option strategy
*OptionsApi* | [**listOptionHoldings**](docs/Api/OptionsApi.md#listoptionholdings) | **GET** /accounts/{accountId}/options | Get the options holdings in the account
*OptionsApi* | [**placeOptionStrategy**](docs/Api/OptionsApi.md#placeoptionstrategy) | **POST** /accounts/{accountId}/optionStrategy/{optionStrategyId}/execute | Place an option strategy order on the brokerage
*ReferenceDataApi* | [**getCurrencyExchangeRatePair**](docs/Api/ReferenceDataApi.md#getcurrencyexchangeratepair) | **GET** /currencies/rates/{currencyPair} | Return the exchange rate of a currency pair
*ReferenceDataApi* | [**getPartnerInfo**](docs/Api/ReferenceDataApi.md#getpartnerinfo) | **GET** /snapTrade/partners | Get metadata related to Snaptrade partner
*ReferenceDataApi* | [**getSecurityTypes**](docs/Api/ReferenceDataApi.md#getsecuritytypes) | **GET** /securityTypes | List of all security types
*ReferenceDataApi* | [**getStockExchanges**](docs/Api/ReferenceDataApi.md#getstockexchanges) | **GET** /exchanges | List exchanges
*ReferenceDataApi* | [**getSymbols**](docs/Api/ReferenceDataApi.md#getsymbols) | **POST** /symbols | Search for symbols
*ReferenceDataApi* | [**getSymbolsByTicker**](docs/Api/ReferenceDataApi.md#getsymbolsbyticker) | **GET** /symbols/{query} | Get details of a symbol by the ticker or the universal_symbol_id
*ReferenceDataApi* | [**listAllBrokerageAuthorizationType**](docs/Api/ReferenceDataApi.md#listallbrokerageauthorizationtype) | **GET** /brokerageAuthorizationTypes | List of all brokerage authorization types
*ReferenceDataApi* | [**listAllBrokerages**](docs/Api/ReferenceDataApi.md#listallbrokerages) | **GET** /brokerages | List brokerages
*ReferenceDataApi* | [**listAllCurrencies**](docs/Api/ReferenceDataApi.md#listallcurrencies) | **GET** /currencies | List currencies
*ReferenceDataApi* | [**listAllCurrenciesRates**](docs/Api/ReferenceDataApi.md#listallcurrenciesrates) | **GET** /currencies/rates | List currency exchange rates
*ReferenceDataApi* | [**symbolSearchUserAccount**](docs/Api/ReferenceDataApi.md#symbolsearchuseraccount) | **POST** /accounts/{accountId}/symbols | Search for symbols available in an account
*TradingApi* | [**cancelUserAccountOrder**](docs/Api/TradingApi.md#canceluseraccountorder) | **POST** /accounts/{accountId}/orders/cancel | Cancel open order in account
*TradingApi* | [**getOrderImpact**](docs/Api/TradingApi.md#getorderimpact) | **POST** /trade/impact | Check impact of trades on account.
*TradingApi* | [**getUserAccountQuotes**](docs/Api/TradingApi.md#getuseraccountquotes) | **GET** /accounts/{accountId}/quotes | Get symbol quotes
*TradingApi* | [**placeForceOrder**](docs/Api/TradingApi.md#placeforceorder) | **POST** /trade/place | Place a trade with NO validation.
*TradingApi* | [**placeOCOOrder**](docs/Api/TradingApi.md#placeocoorder) | **POST** /trade/oco | Place a OCO (One Cancels Other) order
*TradingApi* | [**placeOrder**](docs/Api/TradingApi.md#placeorder) | **POST** /trade/{tradeId} | Place order
*TransactionsAndReportingApi* | [**getActivities**](docs/Api/TransactionsAndReportingApi.md#getactivities) | **GET** /activities | Get transaction history for a user
*TransactionsAndReportingApi* | [**getReportingCustomRange**](docs/Api/TransactionsAndReportingApi.md#getreportingcustomrange) | **GET** /performance/custom | Get performance information for a specific timeframe

## Models

- [Account](docs/Model/Account.md)
- [AccountBalance](docs/Model/AccountBalance.md)
- [AccountBalanceTotal](docs/Model/AccountBalanceTotal.md)
- [AccountHoldings](docs/Model/AccountHoldings.md)
- [AccountHoldingsAccount](docs/Model/AccountHoldingsAccount.md)
- [AccountOrderRecord](docs/Model/AccountOrderRecord.md)
- [AccountOrderRecordStatus](docs/Model/AccountOrderRecordStatus.md)
- [AccountSimple](docs/Model/AccountSimple.md)
- [AccountSyncStatus](docs/Model/AccountSyncStatus.md)
- [Action](docs/Model/Action.md)
- [Amount](docs/Model/Amount.md)
- [AuthenticationLoginSnapTradeUser200Response](docs/Model/AuthenticationLoginSnapTradeUser200Response.md)
- [Balance](docs/Model/Balance.md)
- [Brokerage](docs/Model/Brokerage.md)
- [BrokerageAuthorization](docs/Model/BrokerageAuthorization.md)
- [BrokerageAuthorizationType](docs/Model/BrokerageAuthorizationType.md)
- [BrokerageAuthorizationTypeReadOnly](docs/Model/BrokerageAuthorizationTypeReadOnly.md)
- [BrokerageAuthorizationTypeReadOnlyBrokerage](docs/Model/BrokerageAuthorizationTypeReadOnlyBrokerage.md)
- [BrokerageSymbol](docs/Model/BrokerageSymbol.md)
- [BrokerageSymbolOptionSymbol](docs/Model/BrokerageSymbolOptionSymbol.md)
- [BrokerageSymbolSymbol](docs/Model/BrokerageSymbolSymbol.md)
- [BrokerageType](docs/Model/BrokerageType.md)
- [CalculatedTrade](docs/Model/CalculatedTrade.md)
- [CashRestriction](docs/Model/CashRestriction.md)
- [ConnectionsSessionEvents200ResponseInner](docs/Model/ConnectionsSessionEvents200ResponseInner.md)
- [Currency](docs/Model/Currency.md)
- [DeleteUserResponse](docs/Model/DeleteUserResponse.md)
- [DividendAtDate](docs/Model/DividendAtDate.md)
- [EncryptedResponse](docs/Model/EncryptedResponse.md)
- [EncryptedResponseEncryptedMessageData](docs/Model/EncryptedResponseEncryptedMessageData.md)
- [Exchange](docs/Model/Exchange.md)
- [ExchangeRatePairs](docs/Model/ExchangeRatePairs.md)
- [ExcludedAsset](docs/Model/ExcludedAsset.md)
- [JWT](docs/Model/JWT.md)
- [LoginRedirectURI](docs/Model/LoginRedirectURI.md)
- [ManualTrade](docs/Model/ManualTrade.md)
- [ManualTradeAndImpact](docs/Model/ManualTradeAndImpact.md)
- [ManualTradeBalance](docs/Model/ManualTradeBalance.md)
- [ManualTradeForm](docs/Model/ManualTradeForm.md)
- [ManualTradeSymbol](docs/Model/ManualTradeSymbol.md)
- [Model400FailedRequestResponse](docs/Model/Model400FailedRequestResponse.md)
- [Model401FailedRequestResponse](docs/Model/Model401FailedRequestResponse.md)
- [Model403FailedRequestResponse](docs/Model/Model403FailedRequestResponse.md)
- [Model404FailedRequestResponse](docs/Model/Model404FailedRequestResponse.md)
- [Model500UnexpectedExceptionResponse](docs/Model/Model500UnexpectedExceptionResponse.md)
- [ModelAssetClass](docs/Model/ModelAssetClass.md)
- [ModelAssetClassDetails](docs/Model/ModelAssetClassDetails.md)
- [ModelAssetClassTarget](docs/Model/ModelAssetClassTarget.md)
- [ModelPortfolio](docs/Model/ModelPortfolio.md)
- [ModelPortfolioAssetClass](docs/Model/ModelPortfolioAssetClass.md)
- [ModelPortfolioDetails](docs/Model/ModelPortfolioDetails.md)
- [ModelPortfolioSecurity](docs/Model/ModelPortfolioSecurity.md)
- [MonthlyDividends](docs/Model/MonthlyDividends.md)
- [NetContributions](docs/Model/NetContributions.md)
- [NetDividend](docs/Model/NetDividend.md)
- [OptionChainInner](docs/Model/OptionChainInner.md)
- [OptionChainInnerChainPerRootInner](docs/Model/OptionChainInnerChainPerRootInner.md)
- [OptionChainInnerChainPerRootInnerChainPerStrikePriceInner](docs/Model/OptionChainInnerChainPerRootInnerChainPerStrikePriceInner.md)
- [OptionLeg](docs/Model/OptionLeg.md)
- [OptionStrategy](docs/Model/OptionStrategy.md)
- [OptionStrategyLegsInner](docs/Model/OptionStrategyLegsInner.md)
- [OptionsGetOptionStrategyRequest](docs/Model/OptionsGetOptionStrategyRequest.md)
- [OptionsHoldings](docs/Model/OptionsHoldings.md)
- [OptionsPlaceOptionStrategyRequest](docs/Model/OptionsPlaceOptionStrategyRequest.md)
- [OptionsPosition](docs/Model/OptionsPosition.md)
- [OptionsPositionCurrency](docs/Model/OptionsPositionCurrency.md)
- [OptionsSymbol](docs/Model/OptionsSymbol.md)
- [OrderType](docs/Model/OrderType.md)
- [PartnerData](docs/Model/PartnerData.md)
- [PastValue](docs/Model/PastValue.md)
- [PerformanceCustom](docs/Model/PerformanceCustom.md)
- [PortfolioGroup](docs/Model/PortfolioGroup.md)
- [PortfolioGroupInfo](docs/Model/PortfolioGroupInfo.md)
- [PortfolioGroupPosition](docs/Model/PortfolioGroupPosition.md)
- [PortfolioGroupSettings](docs/Model/PortfolioGroupSettings.md)
- [Position](docs/Model/Position.md)
- [PositionSymbol](docs/Model/PositionSymbol.md)
- [RedirectTokenandPin](docs/Model/RedirectTokenandPin.md)
- [SecurityType](docs/Model/SecurityType.md)
- [SessionEvent](docs/Model/SessionEvent.md)
- [SnapTradeAPIDisclaimerAcceptStatus](docs/Model/SnapTradeAPIDisclaimerAcceptStatus.md)
- [SnapTradeHoldingsAccount](docs/Model/SnapTradeHoldingsAccount.md)
- [SnapTradeHoldingsAccountAccountId](docs/Model/SnapTradeHoldingsAccountAccountId.md)
- [SnapTradeHoldingsTotalValue](docs/Model/SnapTradeHoldingsTotalValue.md)
- [SnapTradeLoginUserRequestBody](docs/Model/SnapTradeLoginUserRequestBody.md)
- [SnapTradeRegisterUserRequestBody](docs/Model/SnapTradeRegisterUserRequestBody.md)
- [Status](docs/Model/Status.md)
- [StrategyImpact](docs/Model/StrategyImpact.md)
- [StrategyImpactLegsInner](docs/Model/StrategyImpactLegsInner.md)
- [StrategyOrderPlace](docs/Model/StrategyOrderPlace.md)
- [StrategyOrderPlaceOrdersInner](docs/Model/StrategyOrderPlaceOrdersInner.md)
- [StrategyOrderPlaceOrdersInnerLegsInner](docs/Model/StrategyOrderPlaceOrdersInnerLegsInner.md)
- [StrategyOrderRecord](docs/Model/StrategyOrderRecord.md)
- [StrategyQuotes](docs/Model/StrategyQuotes.md)
- [StrategyQuotesGreek](docs/Model/StrategyQuotesGreek.md)
- [SubPeriodReturnRate](docs/Model/SubPeriodReturnRate.md)
- [Symbol](docs/Model/Symbol.md)
- [SymbolQuery](docs/Model/SymbolQuery.md)
- [SymbolsQuotesInner](docs/Model/SymbolsQuotesInner.md)
- [TargetAsset](docs/Model/TargetAsset.md)
- [TimeInForceStrict](docs/Model/TimeInForceStrict.md)
- [Trade](docs/Model/Trade.md)
- [TradeExecutionStatus](docs/Model/TradeExecutionStatus.md)
- [TradeImpact](docs/Model/TradeImpact.md)
- [TradingCancelUserAccountOrderRequest](docs/Model/TradingCancelUserAccountOrderRequest.md)
- [TradingPlaceOCOOrderRequest](docs/Model/TradingPlaceOCOOrderRequest.md)
- [TransactionsStatus](docs/Model/TransactionsStatus.md)
- [USExchange](docs/Model/USExchange.md)
- [UnderlyingSymbol](docs/Model/UnderlyingSymbol.md)
- [UniversalActivity](docs/Model/UniversalActivity.md)
- [UniversalSymbol](docs/Model/UniversalSymbol.md)
- [UserErrorLog](docs/Model/UserErrorLog.md)
- [UserIDandSecret](docs/Model/UserIDandSecret.md)
- [UserSettings](docs/Model/UserSettings.md)
- [ValidatedTradeBody](docs/Model/ValidatedTradeBody.md)

## Author

This PHP package is automatically generated by [Konfig](https://konfigthis.com):