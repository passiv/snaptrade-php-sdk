# snaptrade-php-sdk [Packagist](https://packagist.org/packages/konfig/snaptrade-php-sdk)

Connect brokerage accounts to your app for live positions and trading


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
    "konfig/snaptrade-php-sdk": "1.0.0"
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

$apiInstance = new SnapTrade\Api\APIDisclaimerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    // new GuzzleHttp\Client(),
    $config
);

$user_id = "John.doe@snaptrade.com";
$user_secret = "USERSECRET123";
$api_disclaimer_accept_request = new \SnapTrade\Model\APIDisclaimerAcceptRequest([
    ]);

try {
    $result = $apiInstance->accept(
        user_id: $user_id, 
        user_secret: $user_secret, 
        api_disclaimer_accept_request: $api_disclaimer_accept_request
    );
    print_r($result->$getAccepted());
    print_r($result->$getTimestamp());
} catch (\Exception $e) {
    echo 'Exception when calling APIDisclaimerApi->accept: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.snaptrade.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIDisclaimerApi* | [**accept**](docs/Api/APIDisclaimerApi.md#accept) | **POST** /snapTrade/acceptDisclaimer | Accept or Reject SnapTrade disclaimer agreement
*APIStatusApi* | [**check**](docs/Api/APIStatusApi.md#check) | **GET** / | Get API Status
*AccountInformationApi* | [**getAllUserHoldings**](docs/Api/AccountInformationApi.md#getalluserholdings) | **GET** /holdings | List all accounts for the user, plus balances and positions for each account.
*AccountInformationApi* | [**getUserAccountBalance**](docs/Api/AccountInformationApi.md#getuseraccountbalance) | **GET** /accounts/{accountId}/balances | Get all cash balances of an investment account
*AccountInformationApi* | [**getUserAccountDetails**](docs/Api/AccountInformationApi.md#getuseraccountdetails) | **GET** /accounts/{accountId} | Return details of a specific investment account
*AccountInformationApi* | [**getUserAccountOrders**](docs/Api/AccountInformationApi.md#getuseraccountorders) | **GET** /accounts/{accountId}/orders | Get all history of orders placed in account
*AccountInformationApi* | [**getUserAccountPositions**](docs/Api/AccountInformationApi.md#getuseraccountpositions) | **GET** /accounts/{accountId}/positions | Get all positions of an investment account
*AccountInformationApi* | [**getUserHoldings**](docs/Api/AccountInformationApi.md#getuserholdings) | **GET** /accounts/{accountId}/holdings | List balances, positions and orders for the specified account.
*AccountInformationApi* | [**listUserAccounts**](docs/Api/AccountInformationApi.md#listuseraccounts) | **GET** /accounts | List all investment accounts for the user
*AccountInformationApi* | [**updateUserAccount**](docs/Api/AccountInformationApi.md#updateuseraccount) | **PUT** /accounts/{accountId} | Update details of an investment account
*AuthenticationApi* | [**deleteSnapTradeUser**](docs/Api/AuthenticationApi.md#deletesnaptradeuser) | **DELETE** /snapTrade/deleteUser | Delete user from SnapTrade, disabling all brokerage authorizations and permanently deleting all data associated with the user
*AuthenticationApi* | [**getUserJWT**](docs/Api/AuthenticationApi.md#getuserjwt) | **GET** /snapTrade/encryptedJWT | Obtains an encrypted JWT tokens that should be decrypted on a user&#39;s local device
*AuthenticationApi* | [**listSnapTradeUsers**](docs/Api/AuthenticationApi.md#listsnaptradeusers) | **GET** /snapTrade/listUsers | Get a list of all SnapTrade users you&#39;ve registered on our platform
*AuthenticationApi* | [**loginSnapTradeUser**](docs/Api/AuthenticationApi.md#loginsnaptradeuser) | **POST** /snapTrade/login | Generate a redirect URI to securely login a user to the SnapTrade Connection Portal
*AuthenticationApi* | [**registerSnapTradeUser**](docs/Api/AuthenticationApi.md#registersnaptradeuser) | **POST** /snapTrade/registerUser | Register user with SnapTrade in order to create secure brokerage authorizations
*ConnectionsApi* | [**detailBrokerageAuthorization**](docs/Api/ConnectionsApi.md#detailbrokerageauthorization) | **GET** /authorizations/{authorizationId} | Get detail of a specific brokerage authorizations for the user
*ConnectionsApi* | [**listBrokerageAuthorizations**](docs/Api/ConnectionsApi.md#listbrokerageauthorizations) | **GET** /authorizations | List all brokerage authorizations for the user
*ConnectionsApi* | [**removeBrokerageAuthorization**](docs/Api/ConnectionsApi.md#removebrokerageauthorization) | **DELETE** /authorizations/{authorizationId} | Remove a brokerage authorization.
*ConnectionsApi* | [**sessionEvents**](docs/Api/ConnectionsApi.md#sessionevents) | **GET** /sessionEvents | List all session events for the partner
*ErrorLogsApi* | [**listUserErrors**](docs/Api/ErrorLogsApi.md#listusererrors) | **GET** /snapTrade/listUserErrors | Retrieve error logs on behalf of your SnapTrade users
*OptionsApi* | [**getOptionStrategy**](docs/Api/OptionsApi.md#getoptionstrategy) | **POST** /accounts/{accountId}/optionStrategy | Creates an option strategy object that will be used to place an option strategy order
*OptionsApi* | [**getOptionsChain**](docs/Api/OptionsApi.md#getoptionschain) | **GET** /accounts/{accountId}/optionsChain | Get the options chain
*OptionsApi* | [**getOptionsStrategyQuote**](docs/Api/OptionsApi.md#getoptionsstrategyquote) | **GET** /accounts/{accountId}/optionStrategy/{optionStrategyId} | Get latest market data of option strategy
*OptionsApi* | [**listOptionHoldings**](docs/Api/OptionsApi.md#listoptionholdings) | **GET** /accounts/{accountId}/options | Get the options holdings in the account
*OptionsApi* | [**placeOptionStrategy**](docs/Api/OptionsApi.md#placeoptionstrategy) | **POST** /accounts/{accountId}/optionStrategy/{optionStrategyId}/execute | Place an option strategy order on the brokerage
*PortfolioManagementApi* | [**addPortfolioExcludedAsset**](docs/Api/PortfolioManagementApi.md#addportfolioexcludedasset) | **POST** /portfolioGroups/{portfolioGroupId}/excludedassets | Adds an asset to exclude to a portfolio group
*PortfolioManagementApi* | [**all**](docs/Api/PortfolioManagementApi.md#all) | **GET** /portfolioGroups | List all portfolio groups
*PortfolioManagementApi* | [**create**](docs/Api/PortfolioManagementApi.md#create) | **POST** /portfolioGroups | Create new portfolio group
*PortfolioManagementApi* | [**createAssetClass**](docs/Api/PortfolioManagementApi.md#createassetclass) | **POST** /modelAssetClass | Create a new model asset class
*PortfolioManagementApi* | [**createModelPortfolio**](docs/Api/PortfolioManagementApi.md#createmodelportfolio) | **POST** /modelPortfolio | Creates a new model portfolio
*PortfolioManagementApi* | [**deleteAssetClass**](docs/Api/PortfolioManagementApi.md#deleteassetclass) | **DELETE** /modelAssetClass/{modelAssetClassId} | Deletes a model asset class
*PortfolioManagementApi* | [**deleteExcludedAsset**](docs/Api/PortfolioManagementApi.md#deleteexcludedasset) | **DELETE** /portfolioGroups/{portfolioGroupId}/excludedassets/{symbolId} | Unexclude an asset from a portfolio group
*PortfolioManagementApi* | [**deleteModelPortfolioById**](docs/Api/PortfolioManagementApi.md#deletemodelportfoliobyid) | **DELETE** /modelPortfolio/{modelPortfolioId} | Deletes a model portfolio
*PortfolioManagementApi* | [**deletePortfoli**](docs/Api/PortfolioManagementApi.md#deleteportfoli) | **DELETE** /portfolioGroups/{portfolioGroupId} | Remove a target portfolio.
*PortfolioManagementApi* | [**deletePortfolioTargetById**](docs/Api/PortfolioManagementApi.md#deleteportfoliotargetbyid) | **DELETE** /portfolioGroups/{portfolioGroupId}/targets/{targetAssetId} | Remove a TargetAsset.
*PortfolioManagementApi* | [**detailAssetClass**](docs/Api/PortfolioManagementApi.md#detailassetclass) | **GET** /modelAssetClass/{modelAssetClassId} | Get details of a model asset class
*PortfolioManagementApi* | [**getCalculatedTradeById**](docs/Api/PortfolioManagementApi.md#getcalculatedtradebyid) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/{TradeId} | Return an individual trade
*PortfolioManagementApi* | [**getModelDetailsById**](docs/Api/PortfolioManagementApi.md#getmodeldetailsbyid) | **GET** /modelPortfolio/{modelPortfolioId} | Get details of a model portfolio
*PortfolioManagementApi* | [**getPortfolioBalances**](docs/Api/PortfolioManagementApi.md#getportfoliobalances) | **GET** /portfolioGroups/{portfolioGroupId}/balances | Get sum of cash balances in portfolio group
*PortfolioManagementApi* | [**getPortfolioDetailsById**](docs/Api/PortfolioManagementApi.md#getportfoliodetailsbyid) | **GET** /portfolioGroups/{portfolioGroupId} | Get details of a target portfolio
*PortfolioManagementApi* | [**getPortfolioInfo**](docs/Api/PortfolioManagementApi.md#getportfolioinfo) | **GET** /portfolioGroups/{portfolioGroupId}/info | Return a whole bunch of relevant information relating to a portfolio group.
*PortfolioManagementApi* | [**getPortfolioSettings**](docs/Api/PortfolioManagementApi.md#getportfoliosettings) | **GET** /portfolioGroups/{portfolioGroupId}/settings | Get portfolio group settings
*PortfolioManagementApi* | [**getPortfolioTargetById**](docs/Api/PortfolioManagementApi.md#getportfoliotargetbyid) | **GET** /portfolioGroups/{portfolioGroupId}/targets/{targetAssetId} | Get a specific target from a portfolio group
*PortfolioManagementApi* | [**getPortfolioTargets**](docs/Api/PortfolioManagementApi.md#getportfoliotargets) | **GET** /portfolioGroups/{portfolioGroupId}/targets | Get all target assets under the specified PortfolioGroup.
*PortfolioManagementApi* | [**getPortoflioExcludedAssets**](docs/Api/PortfolioManagementApi.md#getportoflioexcludedassets) | **GET** /portfolioGroups/{portfolioGroupId}/excludedassets | Get an array of excluded assets associated with a portfolio group\\
*PortfolioManagementApi* | [**importModelPortfolio**](docs/Api/PortfolioManagementApi.md#importmodelportfolio) | **POST** /portfolioGroups/{portfolioGroupId}/import | Import target allocation based on portfolio group
*PortfolioManagementApi* | [**listAssetClasses**](docs/Api/PortfolioManagementApi.md#listassetclasses) | **GET** /modelAssetClass | List of model asset class
*PortfolioManagementApi* | [**listCalculatedTrades**](docs/Api/PortfolioManagementApi.md#listcalculatedtrades) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades | List of trades to make to rebalance portfolio group
*PortfolioManagementApi* | [**listModelPortfolio**](docs/Api/PortfolioManagementApi.md#listmodelportfolio) | **GET** /modelPortfolio | List of model portfolio
*PortfolioManagementApi* | [**listPortfolioAccounts**](docs/Api/PortfolioManagementApi.md#listportfolioaccounts) | **GET** /portfolioGroups/{portfolioGroupId}/accounts | Get all accounts associated with a portfolio group
*PortfolioManagementApi* | [**modifyModelPortfolioById**](docs/Api/PortfolioManagementApi.md#modifymodelportfoliobyid) | **POST** /modelPortfolio/{modelPortfolioId} | Updates model portfolio object
*PortfolioManagementApi* | [**savePortfolio**](docs/Api/PortfolioManagementApi.md#saveportfolio) | **PATCH** /portfolioGroups/{portfolioGroupId} | Update an existing target portfolio.
*PortfolioManagementApi* | [**searchPortfolioSymbols**](docs/Api/PortfolioManagementApi.md#searchportfoliosymbols) | **POST** /portfolioGroups/{portfolioGroupId}/symbols | Search for symbols limited to brokerages under the specified portfolio group
*PortfolioManagementApi* | [**setPortfolioTargets**](docs/Api/PortfolioManagementApi.md#setportfoliotargets) | **POST** /portfolioGroups/{portfolioGroupId}/targets | Set a new list of target assets under the specified PortfolioGroup. All existing target assets under this portfolio group will be replaced with the new list.
*PortfolioManagementApi* | [**updateAssetClass**](docs/Api/PortfolioManagementApi.md#updateassetclass) | **POST** /modelAssetClass/{modelAssetClassId} | Updates model asset class objects
*PortfolioManagementApi* | [**updatePortfolioSettings**](docs/Api/PortfolioManagementApi.md#updateportfoliosettings) | **PATCH** /portfolioGroups/{portfolioGroupId}/settings | Updates portfolio group settings
*PortfolioManagementApi* | [**updatePortfolioTargetById**](docs/Api/PortfolioManagementApi.md#updateportfoliotargetbyid) | **PATCH** /portfolioGroups/{portfolioGroupId}/targets/{targetAssetId} | Update a TargetAsset under the specified PortfolioGroup.
*ReferenceDataApi* | [**getCurrencyExchangeRatePair**](docs/Api/ReferenceDataApi.md#getcurrencyexchangeratepair) | **GET** /currencies/rates/{currencyPair} | Return the exchange rate of a currency pair
*ReferenceDataApi* | [**getPartnerInfo**](docs/Api/ReferenceDataApi.md#getpartnerinfo) | **GET** /snapTrade/partners | Get metadata related to Snaptrade partner
*ReferenceDataApi* | [**getSecurityTypes**](docs/Api/ReferenceDataApi.md#getsecuritytypes) | **GET** /securityTypes | List of all security types.
*ReferenceDataApi* | [**getStockExchanges**](docs/Api/ReferenceDataApi.md#getstockexchanges) | **GET** /exchanges | Return list of stock exchanges on Passiv and their suffixes
*ReferenceDataApi* | [**getSymbols**](docs/Api/ReferenceDataApi.md#getsymbols) | **POST** /symbols | Search for symbols
*ReferenceDataApi* | [**getSymbolsByTicker**](docs/Api/ReferenceDataApi.md#getsymbolsbyticker) | **GET** /symbols/{ticker} | Get details of a symbol by the ticker
*ReferenceDataApi* | [**listAllBrokerageAuthorizationType**](docs/Api/ReferenceDataApi.md#listallbrokerageauthorizationtype) | **GET** /brokerageAuthorizationTypes | List of all brokerage authorization types
*ReferenceDataApi* | [**listAllBrokerages**](docs/Api/ReferenceDataApi.md#listallbrokerages) | **GET** /brokerages | List of all brokerages.
*ReferenceDataApi* | [**listAllCurrencies**](docs/Api/ReferenceDataApi.md#listallcurrencies) | **GET** /currencies | List of all supported currencies
*ReferenceDataApi* | [**listAllCurrenciesRates**](docs/Api/ReferenceDataApi.md#listallcurrenciesrates) | **GET** /currencies/rates | Return the exchange rates of all supported currencies
*ReferenceDataApi* | [**symbolSearchUserAccount**](docs/Api/ReferenceDataApi.md#symbolsearchuseraccount) | **POST** /accounts/{accountId}/symbols | Search for symbols that are supported by a brokerage account using a substring
*TradingApi* | [**cancelUserAccountOrder**](docs/Api/TradingApi.md#canceluseraccountorder) | **POST** /accounts/{accountId}/orders/cancel | Cancel open order in account
*TradingApi* | [**getCalculatedTradeImpactById**](docs/Api/TradingApi.md#getcalculatedtradeimpactbyid) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/modify/{tradeId} | Return details of a specific trade before it&#39;s placed
*TradingApi* | [**getCalculatedTradesImpact**](docs/Api/TradingApi.md#getcalculatedtradesimpact) | **GET** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/impact | Return the impact of placing a series of trades on the portfolio
*TradingApi* | [**getOrderImpact**](docs/Api/TradingApi.md#getorderimpact) | **POST** /trade/impact | Check impact of trades on account.
*TradingApi* | [**getUserAccountQuotes**](docs/Api/TradingApi.md#getuseraccountquotes) | **GET** /accounts/{accountId}/quotes | Get symbol quotes
*TradingApi* | [**modifyCalculatedTradeById**](docs/Api/TradingApi.md#modifycalculatedtradebyid) | **PATCH** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/modify/{tradeId} | Modify units of a trade before it is placed
*TradingApi* | [**placeCalculatedTrades**](docs/Api/TradingApi.md#placecalculatedtrades) | **POST** /portfolioGroups/{portfolioGroupId}/calculatedtrades/{calculatedTradeId}/placeOrders | Place orders for the CalculatedTrades in series
*TradingApi* | [**placeForceOrder**](docs/Api/TradingApi.md#placeforceorder) | **POST** /trade/place | Place a trade with NO validation.
*TradingApi* | [**placeOCOOrder**](docs/Api/TradingApi.md#placeocoorder) | **POST** /trade/oco | Place a OCO (One Cancels Other) order
*TradingApi* | [**placeOrder**](docs/Api/TradingApi.md#placeorder) | **POST** /trade/{tradeId} | Place order
*TransactionsAndReportingApi* | [**getActivities**](docs/Api/TransactionsAndReportingApi.md#getactivities) | **GET** /activities | Get transaction history for a user
*TransactionsAndReportingApi* | [**getReportingCustomRange**](docs/Api/TransactionsAndReportingApi.md#getreportingcustomrange) | **GET** /performance/custom | Get performance information for a specific timeframe

## Models

- [APIDisclaimerAcceptRequest](docs/Model/APIDisclaimerAcceptRequest.md)
- [Account](docs/Model/Account.md)
- [AccountHoldings](docs/Model/AccountHoldings.md)
- [AccountHoldingsAccount](docs/Model/AccountHoldingsAccount.md)
- [AccountOrderRecord](docs/Model/AccountOrderRecord.md)
- [AccountOrderRecordStatus](docs/Model/AccountOrderRecordStatus.md)
- [AccountSimple](docs/Model/AccountSimple.md)
- [AccountSyncStatus](docs/Model/AccountSyncStatus.md)
- [Action](docs/Model/Action.md)
- [AuthenticationLoginSnapTradeUser200Response](docs/Model/AuthenticationLoginSnapTradeUser200Response.md)
- [Balance](docs/Model/Balance.md)
- [Brokerage](docs/Model/Brokerage.md)
- [BrokerageAuthorization](docs/Model/BrokerageAuthorization.md)
- [BrokerageAuthorizationType](docs/Model/BrokerageAuthorizationType.md)
- [BrokerageAuthorizationTypeReadOnly](docs/Model/BrokerageAuthorizationTypeReadOnly.md)
- [BrokerageAuthorizationTypeReadOnlyBrokerage](docs/Model/BrokerageAuthorizationTypeReadOnlyBrokerage.md)
- [BrokerageSymbol](docs/Model/BrokerageSymbol.md)
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
- [SymbolsQuotes](docs/Model/SymbolsQuotes.md)
- [TargetAsset](docs/Model/TargetAsset.md)
- [TimeInForce](docs/Model/TimeInForce.md)
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
- [UniversalSymbolTicker](docs/Model/UniversalSymbolTicker.md)
- [UserErrorLog](docs/Model/UserErrorLog.md)
- [UserIDandSecret](docs/Model/UserIDandSecret.md)
- [UserSettings](docs/Model/UserSettings.md)

## Author

This PHP package is automatically generated by [Konfig](https://konfigthis.com):