# # ManualTradeForm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** |  | [optional]
**action** | [**\SnapTrade\Model\Action**](Action.md) |  | [optional]
**order_type** | [**\SnapTrade\Model\OrderType**](OrderType.md) |  | [optional]
**price** | **float** | Trade Price if limit or stop limit order | [optional]
**stop** | **float** | Stop Price. If stop loss or stop limit order, the price to trigger the stop | [optional]
**time_in_force** | [**\SnapTrade\Model\TimeInForce**](TimeInForce.md) |  | [optional]
**units** | **float** | Trade Units. Cannot work with notional value. | [optional]
**universal_symbol_id** | **string** |  | [optional]
**notional_value** | **float** | Dollar amount to trade. Cannot work with units. Can only work for market order types and day for time in force. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
