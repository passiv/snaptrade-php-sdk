# # UniversalActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account** | [**\SnapTrade\Model\AccountSimple**](AccountSimple.md) |  | [optional]
**amount** | **float** |  | [optional]
**currency** | [**\SnapTrade\Model\Currency**](Currency.md) |  | [optional]
**description** | **string** |  | [optional]
**fee** | **float** |  | [optional]
**institution** | **string** |  | [optional]
**option_type** | **string** | If an option transaction, then it&#39;s type (BUY_TO_OPEN, SELL_TO_CLOSE, etc), otherwise empty string | [optional]
**price** | **float** |  | [optional]
**settlement_date** | **string** |  | [optional]
**external_reference_id** | **string** | Reference ID from brokerage used to identify related transactions. For example if an order comprises of several transactions (buy, fee, fx), they can be grouped if they share the same external_reference_id | [optional]
**symbol** | [**\SnapTrade\Model\Symbol**](Symbol.md) |  | [optional]
**option_symbol** | [**\SnapTrade\Model\OptionsSymbol**](OptionsSymbol.md) |  | [optional]
**trade_date** | **string** |  | [optional]
**type** | **string** | Potential values include - DIVIDEND - BUY - SELL - CONTRIBUTION - WITHDRAWAL - EXTERNAL_ASSET_TRANSFER_IN - EXTERNAL_ASSET_TRANSFER_OUT - INTERNAL_CASH_TRANSFER_IN - INTERNAL_CASH_TRANSFER_OUT - INTERNAL_ASSET_TRANSFER_IN - INTERNAL_ASSET_TRANSFER_OUT - INTEREST - REBATE - GOV_GRANT - TAX - FEE - REI - FXT | [optional]
**units** | **float** | Usually but not necessarily an integer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
