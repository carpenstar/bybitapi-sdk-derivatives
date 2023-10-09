[![phpunit](https://github.com/carpenstar/bybitapi-sdk-derivatives/actions/workflows/github-action.yml/badge.svg?branch=master)](https://github.com/carpenstar/bybitapi-sdk-derivatives/actions/workflows/github-action.yml/badge.svg?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/build.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)


# ByBitAPI - derivatives-trading package

**Disclaimer: This is an unofficial SDK for integration with the ByBit exchange.
Functional support is provided only within the code's area of responsibility and, if possible, on the part of the developer**

**Integration development is not yet complete, so functionality (either completely or individual components) is not guaranteed.**

## Requirements

- PHP >= 7.4

## Installation

```sh 
composer require carpenstar/bybitapi-sdk-derivatives
```

## Contents:

<table>
<tr>
     <th colspan="4" style="text-align: left; font-weight: bold">MARKET DATA</th>
   </tr>
   <tr>
     <th style="text-align: center; font-weight: bold">Endpoint</th>
     <th style="text-align: center; font-weight: bold">Access type</th>
     <th style="text-align: center; font-weight: bold">View in directory</th>
     <th style="text-align: center; font-weight: bold">Official documentation</th>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---funding-rate-history">Funding Rate History</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/FundingRateHistory">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/funding-rate" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---index-price-kline">Index Price Kline</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/IndexPriceKline">view</a </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/index-kline" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---instrument-info">Instrument Info</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/InstrumentInfo">view</a </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/instrument-info" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---kline">Kline</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/Kline">view</a> </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/kline" target="_blank">view</a> </td>
   </tr>
<tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---mark-price-kline">Mark Price Kline</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/MarkPriceKline">view</a> </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/mark-kline" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---open-interest">Open Interest</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OpenInterest">view</a> </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/open-interest" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---order-book">Order Book</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/orderbook">view</a></td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OrderBook" target="_blank" >view</a></td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---public-trading-history">Public Trading History</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/PublicTradingHistory">view</a> </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/trade" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---risk-limit">Risk Limit</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/RiskLimit">view</a> </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/risk-limit" target="_blank">view</a> </td>
   </tr>
   <tr>
   <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---ticker-info">Ticker Info</a>
     </td>
     <td>Public</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/TickerInfo">view</a> </td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/ticker" target="_blank">view</a> </td>
   </tr>
   <tr>
     <th colspan="4" style="text-align: left; font-weight: bold">CONTRACT - ACCOUNT</th>
   </tr>
   <tr>
     <th style="text-align: center; font-weight: bold">Endpoint</th>
     <th style="text-align: center; font-weight: bold">Access type</th>
     <th style="text-align: center; font-weight: bold">View in directory</th>
     <th style="text-align: center; font-weight: bold">Official documentation</th>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#contract---account---get-trading-fee-rate">Get Trading Fee Rate</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/GetTradingFeeRate">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#contract---account---wallet-balance">Wallet Balance</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/WalletBalance">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/wallet" target="_blank">view</a></td>
   </tr>
   <tr>
     <th colspan="4" style="text-align: left; font-weight: bold">CONTRACT - ORDER</th>
   </tr>
   <tr>
     <th style="text-align: center; font-weight: bold">Endpoint</th>
     <th style="text-align: center; font-weight: bold">Access type</th>
     <th style="text-align: center; font-weight: bold">View in directory</th>
     <th style="text-align: center; font-weight: bold">Official documentation</th>
   </tr>
  <tr>
     <td>
       <a href="">Cancel All Order</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelAllOrder">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Cancel Order</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelOrder">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Get Open Orders</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOpenOrders">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/open-order" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Get Order List</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOrderList">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/order-list" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#contract---account---order---place-order">Place Order</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/PlaceOrder">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/place-order" target="_blank">view</a></td>
   </tr>
   <tr>
   <td>
       <a href="">Replace Order</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/ReplaceOrder">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/replace-order" target="_blank">view</a></td>
   </tr>
   <tr>
     <th colspan="4" style="text-align: left; font-weight: bold">CONTRACT - POSITION</th>
   </tr>
   <tr>
     <th style="text-align: center; font-weight: bold">Endpoint</th>
     <th style="text-align: center; font-weight: bold">Access type</th>
     <th style="text-align: center; font-weight: bold">View in directory</th>
     <th style="text-align: center; font-weight: bold">Official documentation</th>
   </tr>
   <tr>
     <td>
       <a href="">Get Closed PnL</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetClosedPnL">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/closepnl" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Get Execution List</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetExecutionList">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/execution-list" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">My Position</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/MyPosition">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-list" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Set Auto Add Margin</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetAutoAddMargin">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin" target="_blank">view</a></td>
   </tr>
  <tr>
     <td>
       <a href="">Set Leverage</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetLeverage">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/leverage" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Set Risk Limit</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetRiskLimit">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit" target="_blank">view</a></td>
   </tr>
   <tr>
     <td>
       <a href="">Set Trading Stop</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetTradingStop">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="">Switch Cross Isolated Margin</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchCrossIsolatedMargin">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated" target="_blank">view</a> </td>
   </tr>
   <tr>
     <td>
       <a href="">Switch Position Mode</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchPositionMode">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-mode" target="_blank">view</a></td>
   </tr>
    <tr>
     <td>
       <a href="">Switch TpSl Mode</a>
     </td>
     <td>Private</td>
     <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchTpSlMode">view</a></td>
     <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode" target="_blank">view</a></td>
   </tr>
</table>

---

### Market Data - Funding Rate History
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/funding-rate)</b>
<p>Funding history for a specified symbol for a certain period</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory::class 
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new FundingRateHistoryRequest())->setSymbol("BTCUSDT")->setLimit(3);

/** @var FundingRateHistoryResponse[] $result */
$result = $bybit->rest(FundingRateHistory::class, $options)->getBody()->all();


foreach ($result as $rateItem) {
    echo "Symbol: {$rateItem->getSymbol()}" . PHP_EOL;
    echo "Funding Rate: {$rateItem->getFundingRate()}" . PHP_EOL;
    echo "Funding Rate Timestamp: {$rateItem->getFundingRateTimestamp()->format("Y-m-d H:i:s")}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Symbol: BTCUSDT
 * Funding Rate: 0.0001
 * Funding Rate Timestamp: 2023-05-09 08:00:00
 * -----
 * Symbol: BTCUSDT
 * Funding Rate: 0.00121833
 * Funding Rate Timestamp: 2023-05-09 00:00:00
 * -----
 * Symbol: BTCUSDT
 * Funding Rate: 0.00375
 * Funding Rate Timestamp: 2023-05-08 16:00:00
 * -----
 */
```

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>
    
---

```php
new \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest();
    
$options = (new FundingRateHistoryRequest())
    ->setSymbol("BTCUSDT") // Trading pair
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // The start timestamp
    ->setEndTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // The end timestamp
    ->setLimit(200) // Limit for data size per page. [1, 200]. Default: 200
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setSymbol(string $symbol): self</td>
    <td style="text-align: center">NO</td>
    <td>Trading pair symbol</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setStartTime(int $timestamp): self</td>
    <td style="text-align: center"><b>NO<sup>*</sup></b></td>
    <td>Timestamp FROM which the data slice is taken</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setEndTime(int $timestamp): self</td>
    <td style="text-align: center"><b>NO<sup>*</sup></b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setLimit(int $limit): self</td>
    <td style="text-align: center">NO</td>
    <td>Limiting the records returned per query</td>
  </tr>
</table>

> <sup>*</sup>**Warning:**
> When setting time limits on sampling, be sure to specify the upper and lower bounds using `setStartTime(int $timestamp)` and `setEndTime(int $timestamp)`.
> Otherwise an error will be returned

> **Warning:**
> By default, a request to the `FundingRateHistory::class` endpoint returns the last 200 records up to the current moment for a specific symbol


<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>
    
---

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 30%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getSymbol()</td>
    <td style="text-align: center">string</td>
    <td>Trading pair symbol</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getFundingRate()</td>
    <td style="text-align: center">float</td>
    <td>Financing rate</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getFundingRateTimestamp()</td>
    <td style="text-align: center">DateTime</td>
    <td>Financing rate holding time</td>
  </tr>
</table>


---
<br />

### Market Data - Index Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/index-kline)</b>
<p>Request for the history of the <b>INDEX</b> price calculated based on the prices of the largest exchanges.</p>
<p>Each element represents a group of prices depending on the requested interval.</p>
<p>This data can be used to construct candlestick and other charts.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline::class 
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new IndexPriceKlineRequest())
    ->setSymbol("ETHUSDT")
    ->setInterval(1)
    ->setStartTime((new DateTime("2023-05-01 10:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-01 20:00:00"))->getTimestamp())
    ->setLimit(5);

/** @var IndexPriceKlineResponse[] $result */
$result = $bybit->rest(IndexPriceKline::class, $options)->getBody()->all();


foreach ($result as $indexPriceKlineItem) {
    echo "Start: {$indexPriceKlineItem->getStartTime()->format('Y-m-d H:i:s')}" . PHP_EOL;
    echo "Open: {$indexPriceKlineItem->getOpen()}" . PHP_EOL;
    echo "High: {$indexPriceKlineItem->getHigh()}" . PHP_EOL;
    echo "Low: {$indexPriceKlineItem->getLow()}" . PHP_EOL;
    echo "Close: {$indexPriceKlineItem->getClose()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Start: 2023-05-01 10:04:00
 * Open: 1847.37
 * High: 1847.65
 * Low: 1847.37
 * Close: 1847.4
 * -----
 * Start: 2023-05-01 10:03:00
 * Open: 1847.45
 * High: 1847.57
 * Low: 1847.36
 * Close: 1847.37
 * -----
 * Start: 2023-05-01 10:02:00
 * Open: 1847.65
 * High: 1847.79
 * Low: 1847.41
 * Close: 1847.45
 * -----
 * Start: 2023-05-01 10:01:00
 * Open: 1847.63
 * High: 1847.66
 * Low: 1847.27
 * Close: 1847.65
 * -----
 * Start: 2023-05-01 10:00:00
 * Open: 1847.25
 * High: 1847.68
 * Low: 1847.25
 * Close: 1847.63
 * -----
 */
``` 

<p align="center" width="100%"><b>REQUEST PARAMETERS:</b></p>
    
---

```php
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
    
$options = (new IndexPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Trading pair
    ->setInterval(1) // Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // The start timestamp
    ->setEndTime((new DateTime("2023-05-09 11:00:00"))->getTimestamp()) // The end timestamp
    ->setLimit(200) // Limit for data size per page. [1, 1000]. Default: 200
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setStartTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>Timestamp FROM which the data slice is taken</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setEndTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default: 200</td>
  </tr>
</table>
<br />

<p align="center" width="100%"><b>RESPONSE STRUCTURE:</b></p>
    
---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse::class

interface IIndexPriceKlineResponse
{
    public function getStartTime(): \DateTime;
    public function getOpen(): float;
    public function getHigh(): float;
    public function getLow(): float;
    public function getClose(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup>INTERFACE:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse::class </b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup>DTO:</sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getStartTime()</td>
    <td>DateTime</td>
    <td>Tick start time</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getOpen()</td>
    <td>float</td>
    <td>Tick opening price</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getHigh()</td>
    <td>float</td>
    <td>Maximum tick price</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getLow()</td>
    <td>float</td>
    <td>Minimum tick price</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getClose()</td>
    <td>float</td>
    <td>Tick closing price</td>
  </tr>
</table>


---
<br />

### Market Data - Instrument Info
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/instrument-info)</b>
<p>Endpoint provides the specifications of the trading instrument.</p> 

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LeverageFilterItemResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\PriceFilterItemResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LotSizeFilterItemResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new InstrumentInfoRequest())->setSymbol('BTCUSDT');

/** @var InstrumentInfoResponse $instrumentInfo */
$instrumentInfo = $bybit->rest(InstrumentInfo::class, $options)->getBody()->fetch();



echo "Symbol: {$instrumentInfo->getSymbol()}" . PHP_EOL;
echo "Contract Type: {$instrumentInfo->getContractType()}" . PHP_EOL;
echo "Status: {$instrumentInfo->getStatus()}" . PHP_EOL;
echo "Base Coin: {$instrumentInfo->getBaseCoin()}" . PHP_EOL;
echo "Quote Coin: {$instrumentInfo->getQuoteCoin()}" . PHP_EOL;
echo "Launch Time: {$instrumentInfo->getLaunchTime()->format("Y-m-d H:i:s")}" . PHP_EOL;
echo "Delivery Time: " . ($instrumentInfo->getDeliveryTime() ? $instrumentInfo->getDeliveryTime()->format('Y-m-d H:i:s') : '-') . PHP_EOL;
echo "Delivery Fee Rate: {$instrumentInfo->getDeliveryFeeRate()}" . PHP_EOL;
echo "Price Scale: {$instrumentInfo->getPriceScale()}" . PHP_EOL;
echo "Unified Margin Trade: {$instrumentInfo->getUnifiedMarginTrade()}" . PHP_EOL;
echo "Funding Interval: {$instrumentInfo->getFundingInterval()}" . PHP_EOL;
echo "Settle Coin: {$instrumentInfo->getSettleCoin()}" . PHP_EOL;
echo "Leverage Filter Options:" . PHP_EOL;
/** @var LeverageFilterItemResponse $filterItem */
foreach ($instrumentInfo->getLeverageFilter()->all() as $filterItem)
{
    echo " - Minimal Leverage: {$filterItem->getMinLeverage()}" . PHP_EOL;
    echo " - Maximum Leverage: {$filterItem->getMaxLeverage()}" . PHP_EOL;
    echo " - Leverage Step: {$filterItem->getLeverageStep()}" . PHP_EOL;
}
echo "Price Filter Options:" . PHP_EOL;
/** @var PriceFilterItemResponse $filterItem */
foreach ($instrumentInfo->getPriceFilter()->all() as $filterItem)
{
    echo " - Minimal Price: {$filterItem->getMinPrice()}" . PHP_EOL;
    echo " - Maximum Price: {$filterItem->getMinPrice()}" . PHP_EOL;
    echo " - Tick Size: {$filterItem->getTickSize()}" . PHP_EOL;
}
echo "Lot Size Filter Options:" . PHP_EOL;
/** @var LotSizeFilterItemResponse $filterItem */
foreach ($instrumentInfo->getLotSizeFilter()->all() as $filterItem)
{
    echo " - Minimal Order Qty: {$filterItem->getMinOrderQty()}" . PHP_EOL;
    echo " - Maximum Order Qty: {$filterItem->getMaxOrderQty()}" . PHP_EOL;
    echo " - Qty Step: {$filterItem->getQtyStep()}" . PHP_EOL;
}

/**
 * Result:
 * 
 * Symbol: BTCUSDT
 * Contract Type: LinearPerpetual
 * Status: Trading
 * Base Coin: BTC
 * Quote Coint: USDT
 * Launch Time: 2020-03-30 00:00:00
 * Delivery Time: -
 * Delivery Fee Rate: 0
 * Price Scale: 2
 * Unified Margin Trade: 1
 * Funding Interval: 480
 * Settle Coin: USDT
 * Leverage Filter Options:
 * - Minimal Leverage: 1
 * - Maximum Leverage: 100
 * - Leverage Step: 0.01
 * Price Filter Options:
 * - Minimal Price: 0.1
 * - Maximum Price: 0.1
 * - Tick Size: 0.1
 * Lot Size Filter Options:
 * - Minimal Order Qty: 0.001
 * - Maximum Order Qty: 100
 * - Qty Step: 0.001
 *
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
use \Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;
    
$options = (new InstrumentInfoRequest())
    ->setSymbol('BTCUSDT'); // Trading pair
```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoRequest::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IInstrumentInfoRequest::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse::class
    
interface IInstrumentInfoResponse
{
     public function getSymbol(): ?string; // Trading pair
     public function getContractType(): ?string; // Contract type
     public function getBaseCoin(): ?string; // Base token. For example: BTC
     public function getQuoteCoin(): ?string; // Relative token. For example: USDT
     public function getSettleCoin(): ?string; // Settlement token. For example: USDT
     public function getFundingInterval(): int; // Interval for debiting the funding rate in milliseconds
     public function getUnifiedMarginTrade(): bool; // Support for a unified margin trading account
     public function getPriceScale(): float; // Price scale
     public function getStatus(): ?string; // Instrument trading status
     public function getLotSizeFilter(): EntityCollection; // ILotSizeFilterItem[]
     public function getPriceFilter(): EntityCollection; // IPriceFilterItem[]
     public function getLeverageFilter(): EntityCollection // ILeverageFilterItem[]; 
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\InstrumentInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getContractType()</td>
    <td>string</td>
    <td>Contract type. <b>Note: currently only Linear is supported</b></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getBaseCoin()</td>
    <td>string</td>
    <td>Base token. For example: BTC</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getQuoteCoin()</td>
    <td>string</td>
    <td>Relative token. For example: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getSettleCoin()</td>
    <td>string</td>
    <td>Settlement token. For example: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getFundingInterval()</td>
    <td>int</td>
    <td>Interval for debiting the funding rate in milliseconds</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getUnifiedMarginTrade()</td>
    <td>bool</td>
    <td>Support for a unified margin trading account</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getPriceScale()</td>
    <td>float</td>
    <td>Price scale</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getLaunchTime()</td>
    <td>DateTime</td>
    <td>
      Start time of trading on the instrument
    </td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getStatus()</td>
    <td>string</td>
    <td>
      Instrument trading status
    </td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getLotSizeFilter()</td>
    <td>ILotSizeFilterItem[]</td>
    <td></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getPriceFilter()</td>
    <td>IPriceFilterItem[]</td>
    <td></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getLeverageFilter()</td>
    <td>ILeverageFilterItem[]</td>
    <td></td>
  </tr>
</table>

<br />

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItem::class
    
interface ILotSizeFilterItem
{
    public function getMaxOrderQty(): float;
    public function getMinOrderQty(): float;
    public function getQtyStep(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItem:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LotSizeFilterItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ILotSizeFilterItem::getMaxOrderQty()</td>
    <td>float</td>
    <td>Maximum order size</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItem::getMinOrderQty()</td>
    <td>float</td>
    <td>Minimum order size</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItem::getQtyStep()</td>
    <td>float</td>
    <td>Step to change order size</td>
  </tr>
</table>

<br />

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItem::class
    
interface ILeverageFilterItem
{
    public function getMinLeverage(): int;
    public function getMaxLeverage(): float;
    public function getLeverageStep(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItem::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\LeverageFilterItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ILeverageFilterItem::getMinLeverage()</td>
    <td>int</td>
    <td>Minimum leverage</td>
  </tr>
  <tr>
    <td>ILeverageFilterItem::getMaxLeverage()</td>
    <td>float</td>
    <td>Maximum leverage</td>
  </tr>
  <tr>
    <td>ILeverageFilterItem::getLeverageStep()</td>
    <td>float</td>
    <td>Leverage step</td>
  </tr>
</table>

<br />

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItem::class
    
interface IPriceFilterItem
{
    public function getMinPrice(): float;
    public function getMaxPrice(): float;
    public function getTickSize(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItem::class</b>
    </td>
  </tr>
    <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Response\PriceFilterItemResponse::class</b>
    </td>
    </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPriceFilterItem::getMinPrice()</td>
    <td>int</td>
    <td>Minimum price</td>
  </tr>
  <tr>
    <td>IPriceFilterItem::getMaxPrice()</td>
    <td>float</td>
    <td>Maximum price</td>
  </tr>
  <tr>
    <td>IPriceFilterItem::getTickSize()</td>
    <td>float</td>
    <td>Tick size</td>
  </tr>
</table>

---
<br />

### Market Data - Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/kline)</b>
<p>Endpoint returns historical data for plotting. Candles are returned in groups depending on the requested interval.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT")
    ->setInterval(5)
    ->setStartTime((new DateTime("2023-05-01 00:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-05 00:00:00"))->getTimestamp())
    ->setLimit(5);

$klineData = $bybit->rest(Kline::class, $options)->getBody()->all();



/** @var KlineResponse $klineItem */
foreach ($klineData as $klineItem) {
    echo "Start: {$klineItem->getStartTime()->format('Y-m-d H:i:s')}" . PHP_EOL;
    echo "Open: {$klineItem->getOpen()}" . PHP_EOL;
    echo "High: {$klineItem->getHigh()}" . PHP_EOL;
    echo "Low: {$klineItem->getLow()}" . PHP_EOL;
    echo "Close: {$klineItem->getClose()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 * 
 * Start: 2023-05-01 00:20:00
 * Open: 29269.9
 * High: 29297.4
 * Low: 29263.3
 * Close: 29283
 * -----
 * Start: 2023-05-01 00:15:00
 * Open: 29277.8
 * High: 29316.3
 * Low: 29269.9
 * Close: 29269.9
 * -----
 * Start: 2023-05-01 00:10:00
 * Open: 29301
 * High: 29320.1
 * Low: 29264.7
 * Close: 29277.8
 * -----
 * Start: 2023-05-01 00:05:00
 * Open: 29286
 * High: 29348.1
 * Low: 29269.9
 * Close: 29301
 * -----
 * Start: 2023-05-01 00:00:00
 * Open: 29221.2
 * High: 29300.4
 * Low: 29206.2
 * Close: 29286
 * -----
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT") // Required parameter. Line with the ticker of the trading pair.
    ->setInterval(1) // Required parameter. Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Required parameter. Timestamp from which the data slice is taken
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()) // Required parameter. Timestamp BEFORE which the data slice is taken
    ->setLimit(200) // Optional parameter. Limit the records returned per query. Default 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setStartTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>Timestamp FROM which the data slice is taken </td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setEndTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default 200</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface
{
    public function getStartTime(): \DateTime; // Tick start time
    public function getOpen(): float; // Opening price
    public function getHigh(): float; // Highest price
    public function getLow(): float; // Lowest price
    public function getClose(): float; // Closing price
    public function getVolume(): float; // Volume
    public function getTurnover(): float; // Turnover
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>

  <tr>
    <td>IKlineResponseInterface::getStartTime()</td>
    <td>DateTime</td>
    <td>Tick start time</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getOpen()</td>
    <td>float</td>
    <td>Opening price</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getHigh()</td>
    <td>float</td>
    <td>Highest price</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getLow()</td>
    <td>float</td>
    <td>Lowest price</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getClose()</td>
    <td>float</td>
    <td>Closing price</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getVolume()</td>
    <td>float</td>
    <td>Volume</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getTurnover()</td>
    <td>float</td>
    <td>Turnover</td>
  </tr>
</table>

---
<br />

### Market Data - Mark Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Endpoint returns historical data at <b>MARKING price</b>.</p>
<p>Data is returned in groups depending on the requested interval. </p>
<p>Can be used to generate candlestick charts.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new MarkPriceKlineRequest())
    ->setSymbol("APTUSDT")
    ->setInterval('1') // Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W 
    ->setStartTime('2023-05-08 10:00:00')
    ->setEndTime('2023-05-08 15:00:00')
    ->setLimit(5);

$result = $bybit->rest(MarkPriceKline::class, $options)->getBody();



/**
 * @var MarkPriceKlineResponse $markPrice
 */
foreach ($result->all() as $markPrice) {
    echo "Start: {$markPrice->getStartTime()->format("Y-m-d H:i:s")}" . PHP_EOL;
    echo "Open: {$markPrice->getOpen()}" . PHP_EOL;
    echo "High: {$markPrice->getHigh()}" . PHP_EOL;
    echo "Low: {$markPrice->getLow()}" . PHP_EOL;
    echo "Close: {$markPrice->getClose()}" . PHP_EOL;
    echo "----" . PHP_EOL;
}

/**
 * Result:
 * 
 * Start: 2023-05-08 10:04:00
 * Open: 8.7751
 * High: 8.7759
 * Low: 8.7734
 * Close: 8.775
 * ----
 * Start: 2023-05-08 10:03:00
 * Open: 8.7748
 * High: 8.7765
 * Low: 8.7734
 * Close: 8.7751
 * ----
 * Start: 2023-05-08 10:02:00
 * Open: 8.772
 * High: 8.7749
 * Low: 8.77
 * Close: 8.7748
 * ----
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest::class

$options = (new MarkPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Required parameter. Line with the ticker of the trading pair.
    ->setInterval(1) // Required parameter. Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Required parameter. Timestamp from which the data slice is taken 
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()) // Required parameter. Timestamp BEFORE which the data slice is taken
    ->setLimit(200) // Optional parameter. Limit the records returned per query. Default 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>
      Tick size. <br />
      Possible values: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setStartTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>
      Timestamp string from which the data slice is taken
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setEndTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>
      Timestamp BEFORE which the data slice is taken
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>
      Limit the records returned per query. Default: 200
    </td>
  </tr>
</table>


<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class

interface IMarkPriceKline
{
    public function getStartTime(): \DateTime; // Tick start time
    public function getOpen(): float; // Opening price
    public function getHigh(): float; // Maximum price
    public function getLow(): float; // Minimum price
    public function getClose(): float; // Close price
    public function getVolume(): float; // Volume
}
```
<table style="width: 100%">
    <tr>
        <td colspan="3">
            <sup><b>INTERFACE</b></sup> <br />
            <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class</b>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <sup><b>DTO</b></sup> <br />
            <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest::class</b>
        </td>
    </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::getStartTime()</td>
    <td>DateTime</td>
    <td>Tick start time</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getOpen()</td>
    <td>float</td>
    <td>Opening price</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getHigh()</td>
    <td>float</td>
    <td>Maximum price</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getLow()</td>
    <td>float</td>
    <td>Minimum price</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getClose()</td>
    <td>float</td>
    <td>Close price</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getVolume()</td>
    <td>float</td>
    <td>Volume</td>
  </tr>
</table>


---
<br />

### Market Data - Open Interest
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Endpoint returns data about open interest for the specified symbol. <br />
<b>Open Interest is the total number of perpetual contract positions currently held on the platform.</b></p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OpenInterestRequest())->setSymbol("ETHUSDT")->setInterval("1h")->setLimit(5);

/** @var OpenInterestResponse[] $result */
$result = $bybit->rest(OpenInterest::class, $options)->getBody()->all();



foreach ($result as $interestItem) {
    echo "Funding Rate: {$interestItem->getOpenInterest()}" . PHP_EOL;
    echo "Funding Rate Timestamp: {$interestItem->getTimestamp()->format("Y-m-d H:i:s")}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Funding Rate: 1128313.46000000
 * Funding Rate Timestamp: 2023-05-09 11:00:00
 * -----
 * Funding Rate: 1127687.94000000
 * Funding Rate Timestamp: 2023-05-09 10:00:00
 * -----
 * Funding Rate: 1127713.76000000
 * Funding Rate Timestamp: 2023-05-09 09:00:00
 * -----
 * Funding Rate: 1127747.17000000
 * Funding Rate Timestamp: 2023-05-09 08:00:00
 * -----
 * Funding Rate: 1127889.81000000
 * Funding Rate Timestamp: 2023-05-09 07:00:00
 * -----
*/
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class   

$options = (new OpenInterestRequest())
    ->setSymbol("ETHUSDT") // Trading pair
    ->setInterval("1h") // Tick size. Possible values: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    ->setStartTime((new DateTime('2023-05-01 10:00:00'))->getTimestamp()) // Timestamp FROM which the data slice is taken
    ->setEndTime((new DateTime('2023-05-01 20:00:00'))->getTimestamp()) // Timestamp BEFORE which the data slice is taken
    ->setLimit(5); // Limit the records returned per query. Default 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trding pair</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>
      Tick size. <br />
      Possible values: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setStartTime(int $startTime): self</td>
    <td><b>Yes</b></td>
    <td>Timestamp FROM which the data slice is taken </td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setEndTime(string $end): self</td>
    <td><b>YES</b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default 200</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse::class

interface IOpenInterestResponse
{
    public function getTimestamp(): \DateTime; // Request execution time
    public function getOpenInterest(): float; // Volume of interest
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: getTimestamp()</td>
    <td>DateTime</td>
    <td>Request execution time</td>
  </tr>
  <tr>
    <td>:: getOpenInterest()</td>
    <td>float</td>
    <td>Volume of interest</td>
  </tr>
</table>

---
<br />

### Market Data - Order Book
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/orderbook)</b>
<p>Endpoint returns a list of orders to buy and sell perpetual contracts, organized and sorted by price level.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookPriceResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OrderBookRequest())->setSymbol('APTUSDT')->setLimit(5);

/** @var OrderBookResponse $result */
$result = $bybit->rest(OrderBook::class, $options)->getBody()->fetch();



echo "Update ID: " . $result->getUpdateId() . PHP_EOL;
echo "Symbol: " . $result->getSymbol() . PHP_EOL;
echo "Timestamp: " . $result->getTimestamp()->format("Y-m-d H:i:s") . PHP_EOL;
echo "BIDs:" . PHP_EOL;
/** @var OrderBookPriceResponse $bid */
foreach ($result->getBid()->all() as $bid) {
    echo " - Price: {$bid->getPrice()} Quantity: {$bid->getQuantity()}" . PHP_EOL;
}
echo "ASKs:" . PHP_EOL;
/** @var OrderBookPriceResponse $ask */
foreach ($result->getAsk()->all() as $ask) {
    echo " - Price: {$ask->getPrice()} Quantity: {$ask->getQuantity()}" . PHP_EOL;
}

/**
* Result:
*
* Update ID: 574349
* Symbol: APTUSDT
* Timestamp: 2023-05-08 22:43:21
* BIDs:
* - Price: 8.245 Quantity: 10700.04
* - Price: 8.2445 Quantity: 21984.53
* - Price: 8.244 Quantity: 7351.59
* - Price: 8.2435 Quantity: 20129.92
* - Price: 8.243 Quantity: 10495.79
* ASKs:
* - Price: 8.2455 Quantity: 20948.03
* - Price: 8.246 Quantity: 12376.44
* - Price: 8.2465 Quantity: 13590.33
* - Price: 8.247 Quantity: 12282.39
* - Price: 8.2475 Quantity: 4626.09
*/
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class

$options = (new OrderBookRequest())
    ->setSymbol("ETHUSDT") // Trading pair
    ->setLimit(25); // Limit on the number of orders in one direction: limit = 50 (25 - bid + 25 - ask)
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit on the number of orders in one direction: limit = 50 (25 - bid + 25 - ask)</td>
  </tr>
</table>


<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class

interface IOrderBookResponse
{
    public function getSymbol(): string; // Trading pair
    public function getTimestamp(): \DateTime; // Execution time
    public function getUpdateId(): int; // update ID
    public function getBid(): ICollectionInterface; // IOrderBookPriceResponse[]
    public function getAsk(): ICollectionInterface; // IOrderBookPriceResponse[]
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class</b>
        </td>
      </tr>
    <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::getSymbol()</td>
    <td>float</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getTimestamp()</td>
    <td>DateTime</td>
    <td>Execution time</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getUpdateId()</td>
    <td>float</td>
    <td>update ID</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getBid()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>List of sell orders</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getAsk()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>List of buy orders</td>
  </tr>
</table>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookPriceResponse::class

interface IOrderBookPriceResponse
{
    public function getPrice(): float;
    public function getQuantity(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup>
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookPriceItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup>
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\OrderBookPriceItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getPrice()</td>
    <td>float</td>
    <td>Price</td>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getQuantity()</td>
    <td>float</td>
    <td>Volume</td>
  </tr>
</table>

---
<br />

### Market Data - Public Trading History
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/trade)</b>
<p>Endpoint returns data on the execution of trading orders</p>  

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new PublicTradingHistoryRequest())->setSymbol("BTCUSDT")->setLimit(3);

/** @var PublicTradingHistoryResponse[] $result */
$result = $bybit->rest(PublicTradingHistory::class, $options)->getBody()->all();



foreach ($result as $historyItem) {
    echo "Exec ID: {$historyItem->getExecId()}" . PHP_EOL;
    echo "Symbol: {$historyItem->getSymbol()}" . PHP_EOL;
    echo "Price: {$historyItem->getPrice()}" . PHP_EOL;
    echo "Size: {$historyItem->getSize()}". PHP_EOL;
    echo "Side: {$historyItem->getSize()}" . PHP_EOL;
    echo "Time: {$historyItem->getTime()->format("Y-m-d H:i:s")}" . PHP_EOL;
    echo "Is Block Trade: {$historyItem->isBlockTrade()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Exec ID: d275d237-12fb-50ce-b019-14cfa19ec649
 * Symbol: BTCUSDT
 * Price: 27737.8
 * Size: 0.003
 * Side: Sell
 * Time: 2023-05-09 10:58:26
 * Is Block Trade: 
 * -----
 * Exec ID: 9a116105-7cf3-5090-8abd-54f5b423f9df
 * Symbol: BTCUSDT
 * Price: 27737.8
 * Size: 0.002
 * Side: Sell
 * Time: 2023-05-09 10:58:26
 * Is Block Trade: 
 * -----
 * Exec ID: c71ccbab-d948-5b69-98b4-29e51a230662
 * Symbol: BTCUSDT
 * Price: 27745.6
 * Size: 0.001
 * Side: Buy
 * Time: 2023-05-09 10:58:25
 * Is Block Trade: 
 * ----- 
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class

$options = (new PublicTradingHistoryRequest())
    ->setSymbol("ETHUSDT") // Trading pair
    ->setLimit(25); // Quantity limit per result set
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Quantity limit per result set</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class;

interface IPublicTradingHistoryResponse
{
    public function getExecId(): string; // Execution ID
    public function getSymbol(): string; // Trading pair
    public function getPrice(): float; // Execution price
    public function getSize(): float; // Execution volume
    public function getSide(): string; // Direction (buy, sell)
    public function getTime(): \DateTime; // Execution time
    public function isBlockTrade(): bool; // is OTC trade
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Тype</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getExecId()</td>
    <td>string</td>
    <td>
      Execution ID
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getPrice()</td>
    <td>float</td>
    <td>
      Execution price
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSize()</td>
    <td>float</td>
    <td>
      Execution volume
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSide()</td>
    <td>string</td>
    <td>
      Direction (buy, sell)
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getTime()</td>
    <td>DateTime</td>
    <td>
      Execution time
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::isBlockTrade()</td>
    <td>bool</td>
    <td>
      -
    </td>
  </tr>
</table>


---
<br />

### Market Data - Risk Limit
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/risk-limit)</b>
<p>Endpoint returns data on the risk limit for the specified symbol. </p>
<p>Risk limit is a risk management measure to limit traders' exposure to risk.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new RiskLimitsRequest())->setSymbol("BTCUSDT");

/** @var RiskLimitsResponse[] $result */
$result = $bybit->rest(RiskLimit::class, $options)->getBody()->all();



foreach ($result as $riskItem) {
    echo "Risk ID: {$riskItem->getId()}" . PHP_EOL;
    echo "Symbol: {$riskItem->getSymbol()}" . PHP_EOL;
    echo "Limit: {$riskItem->getLimit()}" . PHP_EOL;
    echo "Maintain Margin: {$riskItem->getMaintainMargin()}". PHP_EOL;
    echo "Initial Margin: {$riskItem->getInitialMargin()}" . PHP_EOL;
    echo "isLowerRisk: {$riskItem->getIsLowerRisk()}" . PHP_EOL;
    echo "maxLeverage: {$riskItem->getMaxLeverage()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Risk ID: 1
 * Symbol: BTCUSDT
 * Limit: 2000000
 * Maintain Margin: 0.005
 * Initial Margin: 0.01
 * isLowerRisk: 0
 * maxLeverage: 100
 * -----
 * Risk ID: 2
 * Symbol: BTCUSDT
 * Limit: 4000000
 * Maintain Margin: 0.01
 * Initial Margin: 0.0175
 * isLowerRisk: 0
 * maxLeverage: 57.14
 * -----
 * Risk ID: 3
 * Symbol: BTCUSDT
 * Limit: 6000000
 * Maintain Margin: 0.015
 * Initial Margin: 0.025
 * isLowerRisk: 0
 * maxLeverage: 40
 * -----
 * ...
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class

$options = (new RiskLimitsRequest())
    ->setSymbol("BTCUSDT"); // Trading pair
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse::class;

interface IRiskLimitsResponse
{
    public function getId(): string; // Risk ID
    public function getSymbol(): string; // Trading pair
    public function getLimit(): int; // Position limit
    public function getMaintainMargin(): float; // Margin maintenance
    public function getInitialMargin(): float; // Initial margin
    public function getIsLowerRisk(): int; // Is the trading instrument low risk?
    public function getMaxLeverage(): float; // Maximum leverage
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getId()</td>
    <td>string</td>
    <td>
      Risk ID
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getLimit()</td>
    <td>int</td>
    <td>
      Position limit
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getMaintainMargin()</td>
    <td>float</td>
    <td>
      Margin maintenance
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getInitialMargin()</td>
    <td>float</td>
    <td>
      Initial margin
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getIsLowerRisk()</td>
    <td>int</td>
    <td>
      Is the trading instrument low risk?
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getMaxLeverage()</td>
    <td>float</td>
    <td>
      Maximum leverage
    </td>
  </tr>
</table>


---
<br />

### Market Data - Ticker Info
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/ticker)</b>
<p>Endpoint returns symbol data (last price snapshot, best bid/ask price and trading volume) for the last 24 hours.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfo::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\TickerInfo;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new TickerInfoRequest())
    ->setSymbol("APTUSDT");

$tickerInfo = $bybit->rest(TickerInfo::class, $options)->getBody()->fetch();



/** @var TickerInfoResponse $tickerInfo */
echo "Symbol: {$tickerInfo->getSymbol()}" . PHP_EOL;
echo "Bid Price: {$tickerInfo->getBidPrice()}" . PHP_EOL;
echo "Ask Price: {$tickerInfo->getAskPrice()}" . PHP_EOL;
echo "Last Price: {$tickerInfo->getLastPrice()}" . PHP_EOL;
echo "Last Tick Direction: {$tickerInfo->getLastTickDirection()}" . PHP_EOL;
echo "Prev Price 24 hours: {$tickerInfo->getPrevPrice24h()}" . PHP_EOL;
echo "Prev Price 24 hours(%): {$tickerInfo->getPrice24hPcnt()}" . PHP_EOL;
echo "High Price 24 hours: {$tickerInfo->getHighPrice24h()}" . PHP_EOL;
echo "Low Price 24 hours: {$tickerInfo->getLowPrice24h()}" . PHP_EOL;
echo "Prev price 1 hour: {$tickerInfo->getPrevPrice1h()}" . PHP_EOL;
echo "Mark Price: {$tickerInfo->getMarkPrice()}" . PHP_EOL;
echo "Index Price: {$tickerInfo->getIndexPrice()}" . PHP_EOL;
echo "Open Interest: {$tickerInfo->getOpenInterests()}" . PHP_EOL;
echo "Open Interest Value: {$tickerInfo->getOpenInterestValue()}" . PHP_EOL;
echo "Turnover 24 hours: {$tickerInfo->getTurnover24h()}" . PHP_EOL;
echo "Volume 24 hours: {$tickerInfo->getVolume24h()}" . PHP_EOL;
echo "Funding Rate: {$tickerInfo->getFundingRate()}" . PHP_EOL;
echo "Next Funding Time: {$tickerInfo->getNextFundingTime()->format("Y-m-d H:i:s")}" . PHP_EOL;
echo "Predicted Delivery Price: {$tickerInfo->getPredictedDeliveryPrice()}" . PHP_EOL;
echo "Basis Rate: {$tickerInfo->getBasisRate()}" . PHP_EOL;
echo "Delivery Fee Rate: {$tickerInfo->getDeliveryFeeRate()}" . PHP_EOL;
echo "Delivery Time: {$tickerInfo->getDeliveryTime()->format("Y-m-d H:i:s")}" . PHP_EOL;

/**
 * Result: 
 * 
 * Symbol: APTUSDT
 * Bid Price: 8.285
 * Ask Price: 8.2855
 * Last Price: 8.2855
 * Last Tick Direction: ZeroMinusTick
 * Prev Price 24 hours: 8.667
 * Prev Price 24 hours(%): -0.044017
 * High Price 24 hours: 8.667
 * Low Price 24 hours: 7.505
 * Prev price 1 hour: 8.254
 * Mark Price: 8.2872
 * Index Price: 8.2919
 * Open Interest: 403884.9
 * Open Interest Value: 3347074.94
 * Turnover 24 hours: 12624160.9399
 * Volume 24 hours: 1535221.53
 * Funding Rate: 2.8E-5
 * Next Funding Time: 2023-05-10 00:00:00
 * Predicted Delivery Price: 0
 * Basis Rate: 0
 * Delivery Fee Rate: 0
 * Delivery Time: 1970-01-01 00:00:00
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest::class

$options = (new TickerInfoRequest())
    ->setSymbol("APTUSDT"); // Trading pair
```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ITickerInfoRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse::class;

interface ITickerInfoResponse
{    
    public function getSymbol(): string; // Trading pair
    public function getBidPrice(): float; // Best selling price
    public function getAskPrice(): float; // Best purchase price
    public function getLastPrice(): float; // Last transaction price
    public function getLastTickDirection(): string; // Direction of last price change
    public function getPrevPrice24h(): float; // Price 24 hours ago
    public function getPrice24hPcnt(): float; // Price change over the last 24 hours as a percentage
    public function getHighPrice24h(): float; // Maximum price for 24 hours
    public function getLowPrice24h(): float; // Minimum price for 24 hours
    public function getPrevPrice1h(): float; // Hourly market price an hour ago
    public function getMarkPrice(): float; // Marking price (liquidation occurs according to this indicator)
    public function getIndexPrice(): float; // Index price
    public function getOpenInterests(): float; // Open interest volume for a trading pair
    public function getTurnover24h(): float; // Turnover in 24 hours
    public function getVolume24h(): float; // Cumulative volume for 24 hours
    public function getFundingRate(): float; // Funding rate
    public function getNextFundingTime(): \DateTime; // Time of next funding rate debit
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Response\TickerInfoResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getBidPrice()</td>
    <td>float</td>
    <td>
      Best selling price
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getAskPrice()</td>
    <td>float</td>
    <td>
      Best purchase price
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getLastPrice()</td>
    <td>float</td>
    <td>
      Last transaction price
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getLastTickDirection()</td>
    <td>string</td>
    <td>
      Direction of last price change
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getPrevPrice24h()</td>
    <td>float</td>
    <td>
      Price 24 hours ago
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getPrice24hPcnt()</td>
    <td>float</td>
    <td>
      Price change over the last 24 hours as a percentage
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getHighPrice24h()</td>
    <td>float</td>
    <td>
      Maximum price for 24 hours
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getLowPrice24h()</td>
    <td>float</td>
    <td>
      Minimum price for 24 hours
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getPrevPrice1h()</td>
    <td>float</td>
    <td>
      Hourly market price an hour ago
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getMarkPrice()</td>
    <td>float</td>
    <td>
      Marking price (liquidation occurs according to this indicator)
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getIndexPrice()</td>
    <td>float</td>
    <td>
      Index price
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getOpenInterests()</td>
    <td>float</td>
    <td>
      Open interest volume for a trading pair
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getTurnover24h()</td>
    <td>float</td>
    <td>
      Turnover in 24 hours
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getVolume24h()</td>
    <td>float</td>
    <td>
      Cumulative volume for 24 hours
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getFundingRate()</td>
    <td>float</td>
    <td>
      Funding rate
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getNextFundingTime()</td>
    <td>DateTime</td>
    <td>
      Time of next funding rate debit
    </td>
  </tr>
</table>

---
<br />

### Contract - Account - Get Trading Fee Rate
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Endpoint returns data on the trading commission rate for ALL symbols</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse;

$bybit = new BybitAPI('https://api-testnet.bybit.com',"apiKey", "secret");

$feeRateData = $bybit->rest(GetTradingFeeRate::class, (new GetTradingFeeRateRequest()))->getBody()->all();
$feeRateData = array_slice($feeRateData, 0, 3);



/** @var GetTradingFeeRateResponse $feeRate */
foreach ($feeRateData as $feeRate) {
    echo "Symbol: {$feeRate->getSymbol()}" . PHP_EOL;
    echo "Taker Fee Rate: {$feeRate->getTakerFeeRate()}" . PHP_EOL;
    echo "Maker Fee Rate: {$feeRate->getMakerFeeRate()}" . PHP_EOL;
    echo "---" . PHP_EOL;
}

/**
 * Result:
 *
 * Symbol: CTKUSDT
 * Taker Fee Rate: 0.0006
 * Maker Fee Rate: 0.0001
 * ---
 * Symbol: FILUSDT
 * Taker Fee Rate: 0.0006
 * Maker Fee Rate: 0.0001
 * ---
 * Symbol: BLURUSDT
 * Taker Fee Rate: 0.0006
 * Maker Fee Rate: 0.0001
 * ---
 */
```

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateRequestInterface::setSymbol(string $symbol): self</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getTakerFeeRate(): float; // Taker (buyer) commission
    public function getMakerFeeRate(): float; // Maker (seller) commission
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Taker (buyer) commission
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Maker (seller) commission
    </td>
  </tr>
</table>

---

<br />

### Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Endpoint returns the derivatives wallet balance, information about assets in each currency, and information about the risk level of the account. <br />
By default, currency information with assets or liabilities equal to 0 is not returned.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class 
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Request\WalletBalanceRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse;

$bybit = new BybitAPI('https://api-testnet.bybit.com',"apiKey", "secret");

$walletBalance = $bybit->rest(WalletBalance::class, (new WalletBalanceRequest()))->getBody()->all();
$walletBalance = array_slice($walletBalance, 0, 2);



/** @var WalletBalanceResponse $feeRate */
foreach ($walletBalance as $feeRate) {
    echo "Coin: {$feeRate->getCoin()}" . PHP_EOL;
    echo "Equity: {$feeRate->getEquity()}" . PHP_EOL;
    echo "Wallet Balance: {$feeRate->getWalletBalance()}" . PHP_EOL;
    echo "Position Margin: {$feeRate->getPositionMargin()}" . PHP_EOL;
    echo "Available Balance: {$feeRate->getAvailableBalance()}" . PHP_EOL;
    echo "Order Margin: {$feeRate->getOrderMargin()}" . PHP_EOL;
    echo "Occ Closing Fee: {$feeRate->getOccClosingFee()}" . PHP_EOL;
    echo "Occ Funding Fee: {$feeRate->getOccFundingFee()}" . PHP_EOL;
    echo "Unrealised PnL: {$feeRate->getUnrealisedPnl()}" . PHP_EOL;
    echo "Cumulative Realised PnL: {$feeRate->getCumRealisedPnl()}" . PHP_EOL;
    echo "Given Cash: {$feeRate->getGivenCash()}" . PHP_EOL;
    echo "Service Cash: {$feeRate->getServiceCash()}" . PHP_EOL;
    echo "Account IM: {$feeRate->getAccountIM()}" . PHP_EOL;
    echo "Account MM: {$feeRate->getAccountMM()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 * 
 * Coin: BTC
 * Equity: 0.2
 * Wallet Balance: 0.2
 * Position Margin: 0
 * Available Balance: 0.2
 * Order Margin: 0
 * Occ Closing Fee: 0
 * Occ Funding Fee: 0
 * Unrealised PnL: 0
 * Cumulative Realised PnL: 0
 * Given Cash: 0
 * Service Cash: 0
 * Account IM:
 * Account MM:
 * -----
 * Coin: ETH
 * Equity: 0
 * Wallet Balance: 0
 * Position Margin: 0
 * Available Balance: 0
 * Order Margin: 0
 * Occ Closing Fee: 0
 * Occ Funding Fee: 0
 * Unrealised PnL: 0
 * Cumulative Realised PnL: 0
 * Given Cash: 0
 * Service Cash: 0
 * Account IM
 * Account MM
 * -----
 */
```
<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string; // Coin
    public function getEquity(): float; // Total capital
    public function getWalletBalance(): float; // Wallet balance
    public function getPositionMargin(): float; // Position Margin
    public function getAvailableBalance(): float; // Available balance
    public function getOrderMargin(): float; // Pre-occupied margin
    public function getOccClosingFee(): float; // The fee for closing a position has been charged.
    public function getOccFundingFee(): float; // Pre-financing fee
    public function getUnrealisedPnl(): float; // Unrealized PnL
    public function getCumRealisedPnl(): float; // Cumulative realized PnL (all time)
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string; // USDC Account Initial Margin
    public function getAccountMM(): string; // USDC Account Maintenance Margin
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Response\WalletBalanceResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCoin()</td>
    <td>string</td>
    <td>Coin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getEquity()</td>
    <td>float</td>
    <td>Total capital</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getWalletBalance()</td>
    <td>float</td>
    <td>Wallet balance</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getPositionMargin()</td>
    <td>float</td>
    <td>Position Margin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAvailableBalance()</td>
    <td>float</td>
    <td>Available balance</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOrderMargin()</td>
    <td>float</td>
    <td>Pre-occupied margin</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccClosingFee()</td>
    <td>float</td>
    <td>
      The fee for closing a position has been charged. <br />
      Formula: opening fee + expected maximum closing fee
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccFundingFee()</td>
    <td>float</td>
    <td>
      Pre-financing fee
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Unrealized PnL
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Cumulative realized PnL (all time)
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getGivenCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getServiceCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAccountIM()</td>
    <td>string</td>
    <td>
      USDC Account Initial Margin
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAccountMM()</td>
    <td>string</td>
    <td>
      USDC Account Maintenance Margin
    </td>
  </tr>
</table>

---

<br />

### Contract - Account - Order - Place Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequestRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse;

$bybit = new BybitAPI('https://api-testnet.bybit.com',"apiKey", "apiSecret");

$order = $bybit->rest(PlaceOrder::class,
    (new PlaceOrderRequestRequest())
        ->setSymbol("LTCUSDT")
        ->setSide("Buy")
        ->setOrderType("Market")
        ->setQty(1)
        ->setTimeInForce("GoodTillCancel")
        ->setOrderLinkId(uniqid())
)->getBody()->fetch();




/** @var PlaceOrderResponse $order */
echo "Order ID: " . $order->getOrderId() . PHP_EOL;
echo "Order Link ID: " . $order->getOrderLinkId() . PHP_EOL;

/**
 * Result:
 *
 * Order ID: b75cea8a-6373-4fbb-b82f-ab36e56dbe85
 * Order Link ID: 64728f00c100d
 */
```

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

interface IPlaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setSide(string $side): self; // Enum: 'Buy' or 'Sell'
    public function setOrderType(string $orderType): self; // Enum: 'Market' or 'Limit'
    public function setQty(float $quantity): self; // Quantity
    public function setTimeInForce(string $timeInForce): self; // Order execution mode. For possible values see official documentation
    public function setPrice(float $price): self; // Limit order price. Leave empty if orderType = Market
    public function setTriggerDirection(int $triggerDirection): self; // Conditional order parameter. Used to determine the expected direction of a conditional order.
    public function setTriggerPrice(string $triggerPrice): self; // Conditional order parameter.
    public function setTriggerBy(string $triggerBy): self; // Trigger price type. Default: LastPrice.
    public function setPositionIdx(int $positionIdx): self; // Position index. Required if hedging mode is enabled.
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID. Maximum 36 characters.
    public function setTakeProfit(float $takeProfit): self; // Take profit price
    public function setStopLoss(float $stopLoss): self; // Stop loss price
    public function setTpTriggerBy(string $tpTriggerBy): self; // The type of price at which the take profit is activated. Default: LastPrice
    public function setSlTriggerBy(string $slTriggerBy): self; // The type of price at which the stop loss is activated. Default: LastPrice
    public function setReduceOnly(bool $reduceOnly): self; // true - means that your position can only decrease in size if this order is triggered
    public function setSmpType(string $smpType): self; // Execution type SMP.
    public function setCloseOnTrigger(bool $closeOnTrigger): self; // Parameter for closing an order.
    public function setTpslMode(string $tpslMode): self; // TP/SL mode
    public function setTpLimitPrice(string $tpLimitPrice): self; // The limit order price when the take profit price is triggered. Only works when tpslMode=Partial or tpOrderType=Limit.
    public function setSlLimitPrice(string $slLimitPrice): self; // Limit order price when stop loss is triggered. Only works when tpslMode=Partial and slOrderType=Limit.
    public function setTpOrderType(string $tpOrderType): self; // The type of order that triggers the take profit.
    public function setSlOrderType(string $slOrderType): self; // The type of order that triggers the stop loss.
    
    // ... Getters
    
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSide(string $side)</td>
    <td><b>YES</b></td>
    <td>Enum: 'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderType(string $orderType)</td>
    <td><b>YES</b></td>
    <td>Enum: 'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setQty(float $quantity)</td>
    <td><b>YES</b></td>
    <td>Quantity</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTimeInForce(string $timeInForce)</td>
    <td><b>YES</b></td>
    <td>Order execution mode. For possible values see <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">official documentation</a></td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setPrice(float $price)</td>
    <td>NO</td>
    <td>Limit order price. Leave empty if orderType = Market</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerDirection(int $triggerDirection)</td>
    <td>NO</td>
    <td>
      Conditional order parameter. Used to determine the expected direction of a conditional order. <br />
      1: Triggered when the market price rises to the trigger price. <br />
      2: Triggered when the market price falls to the trigger price <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerPrice(string $triggerPrice)</td>
    <td>NO</td>
    <td>
      Conditional order parameter. <br /> 
      If you expect the price to rise and trigger your conditional order, make sure that: <br />
      triggerPrice > markPrice <br />
      Otherwise, triggerPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>
      Trigger price type. Default: LastPrice. <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setPositionIdx(int $positionIdx)</td>
    <td>NO</td>
    <td>
      Position index. Required if hedging mode is enabled. <br />
      Possible values: <br />
      - 0: Unidirectional mode (default) <br />
      - 1: Long <br />
      - 2: Short <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>
      Custom order ID. Maximum 36 characters. <br />
      Combinations of numbers, letters (uppercase and lowercase), dashes and underscores are supported. <br />
      The OrderLinkId can be reused after the original order is filled or cancelled.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Take profit price</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Stop loss price</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>
      The type of price at which the take profit is activated. Default: LastPrice <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>
      The type of price at which the stop loss is activated. Default: LastPrice <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setReduceOnly(bool $reduceOnly)</td>
    <td>NO</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Description of the parameter in the official documentation</a> <br />
      true means that your position can only decrease in size if this order is triggered. <br />
      If "reduce_only" is true, then take profit/stop loss cannot be set.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSmpType(string $smpType)</td>
    <td>NO</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Description of the parameter in the official documentation</a> <br />
      Execution type SMP.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>NO</td>
    <td>
        <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">What is closing with a trigger order?</a> <br />
        Parameter for closing an order. This can only reduce your position, but not increase it. <br />
        If there is not enough available balance in the account when the close order is triggered, <br />
        then other active orders of similar contracts will be canceled or reduced. <br />
        It can be used to ensure that your stop loss reduces your position regardless of your current available margin.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpslMode(string $tpslMode)</td>
    <td>NO</td>
    <td>
      TP/SL mode <br />
        - Full: entire position by TP/SL. Then tpOrderType or slOrderType should be Market. <br />
        - Partial: partial execution of tp/sl. TP/SL limit orders are supported. Note: When creating a tp/sl constraint, the tpslMode parameter is required.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpLimitPrice(string $tpLimitPrice)</td>
    <td>NO</td>
    <td>
        The limit order price when the take profit price is triggered. <br />
        Only works when <b>tpslMode=Partial</b> or <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlLimitPrice(string $slLimitPrice)</td>
    <td>NO</td>
    <td>
        Limit order price when stop loss is triggered. <br />
        Only works when <b>tpslMode=Partial</b> and <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpOrderType(string $tpOrderType)</td>
    <td>NO</td>
    <td>
        The type of order that triggers the take profit. <br />
        Possible values: Market (- default) or Limit. <br />
        For <b>tpslMode=Full</b> only <b>tpOrderType=Market</b> is supported.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlOrderType(string $slOrderType)</td>
    <td>NO</td>
    <td>
        The type of order that triggers the stop loss. <br />
        Possible values: Market (- default) or Limit. <br />
        For <b>tpslMode=Full</b> only <b>tpOrderType=Market</b> is supported.
    </td>
  </tr>
</table>



<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
    <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>

---

<br />

### Contract - Account - Order - Cancel All Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>This endpoint allows you to cancel all open orders.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setBaseCoin(string $baseCoin): self; // Cancel all open orders for the base coin
    public function setSettleCoin(string $settleCoin): self; // Cancel all open orders with settlement coin
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td>Cancel all open orders for the base coin</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Cancel all open orders with settlement coin</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> The result is a numbered array of objects that implement the ICancelAllOrder ResponseInterface interface

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>

---

<br />

### Contract - Account - Order - Cancel Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>This endpoint allows you to cancel the specified open order.</p>

> You can cancel the specified partially completed order.


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    
    // ... Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderRequestInterface::class</b>
    </td>
  </tr>
      <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>

---

<br />

### Contract - Account - Order - Get Open Orders
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Endpoint returns data on open or partially filled orders in real time.</p>

> If neither orderId nor orderLinkId is passed, no more than 500 open or partially filled orders will be returned.
> Entries are sorted by creation time from newest to oldest.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setBaseCoin(string $baseCoin): self; // Base token
    public function setSettleCoin(string $settleCoin): self; // Settle coin
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    public function setOrderFilter(string $orderFilter): self; // Possible values: Order: active order, StopOrder: conditional order
    public function setCursor(string $cursor): self; // Next page cursor
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td> Base token </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Settle coin</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
    public function getSide(): string; // Side. Buy,Sell
    public function getOrderType(): string; // Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    public function getPrice(): float; // Order price
    public function getQty(): float; // Order qty
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Order status
    public function getLastPriceOnCreated(): string; // Last price when create the order
    public function getCreatedTime(): \DateTime; // Created timestamp
    public function getUpdatedTime(): \DateTime; // Updated timestamp
    public function getCancelType(): string; // Cancel type
    public function getStopOrderType(): string; // Stop order type
    public function getTriggerDirection(): int; // 1: rise, 2: fall
    public function getTriggerBy(): string; // The trigger type of trigger price
    public function getTriggerPrice(): ?float; // Trigger price
    public function getCumExecValue(): float; //  Cumulative executed position value
    public function getCumExecFee(): float; // Cumulative trading fee
    public function getCumExecQty(): float; // Cumulative executed qty
    public function getLeavesValue(): float; // The remaining value waiting to be traded
    public function getLeavesQty(): float; // The remaining quantity waiting to be traded
    public function getTakeProfit(): float; // Take profit price
    public function getStopLoss(): float; // Stop loss price
    public function getTpslMode(): string; // TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    public function getTpLimitPrice(): float; // The limit order price when take profit price is triggered
    public function getSlLimitPrice(): float; // The limit order price when stop loss price is triggered
    public function getTpTriggerBy(): string; // Trigger type of take profit
    public function getSlTriggerBy(): string; // The limit order price when stop loss price is triggered
    public function isReduceOnly(): bool; // Reduce only. true means reduce position size
    public function isCloseOnTrigger(): bool; // Close on trigger. What is a close on trigger order?
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. If the uid has no group, it is 0 by default
    public function getSmpOrderId(): string; // The counterparty's orderID which triggers this SMP execution
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Side. Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Order qty
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when create the order
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed position value
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative trading fee
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed qty
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        The remaining value waiting to be traded
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining quantity waiting to be traded
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The limit order price when stop loss price is triggered
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger. What is a close on trigger order?
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>

---

<br />

### Contract - Account - Order - Get Order List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>List of orders</p>

> Since order creation/cancellation is asynchronous, the data returned from this endpoint may be delayed.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    public function setOrderStatus(string $orderStatus): self; // Order status. Return all status orders if not passed
    public function setOrderFilter(string $orderFilter): self; // Possible values: Order: active order, StopOrder: conditional order
    public function setLimit(int $limit): self; // Limit for data size per page. [1, 50]. Default: 20
    public function setCursor(string $cursor): self; // Next page cursor
    
    // .. getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td> Trading pair </td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderStatus(string $orderStatus)</td>
    <td>NO</td>
    <td>Order status. Return all status orders if not passed</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setLimit(int $limit)</td>
    <td>NO</td>
    <td>Limit for data size per page. [1, 50]. Default: 20</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
    public function getSide(): string; // Buy,Sell
    public function getOrderType(): string; // Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    public function getPrice(): float; // Order price
    public function getQty(): float; // Order quantity
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Order status
    public function getLastPriceOnCreated(): string; // Last price when place the order
    public function getCreatedTime(): \DateTime; // Order created timestamp
    public function getUpdatedTime(): \DateTime; // Order updated timestamp
    public function getCancelType(): string; // Cancel type
    public function getStopOrderType(): string; // Stop order type
    public function getTriggerDirection(): int; // Trigger direction. 1: rise, 2: fall
    public function getTriggerBy(): string; // The trigger type of trigger price
    public function getTriggerPrice(): ?float; // Trigger price
    public function getCumExecValue(): float; // Cumulative executed order value
    public function getCumExecFee(): float; // Cumulative executed trading fee
    public function getCumExecQty(): float; // Cumulative executed order qty
    public function getLeavesValue(): float; // The estimated value not executed
    public function getLeavesQty(): float; // The remaining qty not executed
    public function getTakeProfit(): float; // Take profit price
    public function getStopLoss(): float; // Stop loss price
    public function getTpslMode(): string; // TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    public function getTpLimitPrice(): float; // The limit order price when take profit price is triggered
    public function getSlLimitPrice(): float; // The limit order price when stop loss price is triggered
    public function getTpTriggerBy(): string; // The price type to trigger take profit
    public function getSlTriggerBy(): string; // The price type to trigger stop loss
    public function isReduceOnly(): bool; // Reduce only. true means reduce position size
    public function isCloseOnTrigger(): bool; // Close on trigger
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. If the uid has no group, it is 0 by default
    public function getSmpOrderId(): string; // The counterparty's orderID which triggers this SMP execution
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Order quantity
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when place the order
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Order created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Order updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        Trigger direction. 1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed order value
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative executed trading fee
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed order qty
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        The estimated value not executed
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining qty not executed
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The price type to trigger stop loss
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>

---

<br />

### Contract - Account - Order - Replace Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Order modification</p>

> You can change open or partially filled orders.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    public function setPrice(float $price): self; // New order price
    public function setQty(float $qty): self; // New order quantity
    public function setTriggerPrice(float $triggerPrice): self; // Setting/changing trigger price
    public function setTakeProfit(float $takeProfit): self; // Setting/changing take profit
    public function setStopLoss(float $stopLoss): self; // Setting/changing stop loss
    public function setTpTriggerBy(string $tpTriggerBy): self; // The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order
    public function setSlTriggerBy(string $slTriggerBy): self; // The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order
    public function setTriggerBy(string $triggerBy): self; // Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice
    public function setTpLimitPrice(float $tpLimitPrice): self; // Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setPrice(float $price)</td>
    <td>NO</td>
    <td>New order price </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setQty(float $qty)</td>
    <td>NO</td>
    <td>
      New order quantity
    </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerPrice(float $triggerPrice)</td>
    <td>NO</td>
    <td>Setting/changing trigger price</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Setting/changing take profit</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Setting/changing stop loss</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
    <td>NO</td>
    <td>Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```


<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Type</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderId()</td>
     <td>string</td>
     <td>Order ID</td>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>User customised order id</td>
   </tr>
</table>


---

<br />

### Contract - Position - Get Closed PnL
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Request information about closed positions with data on the user's profits and losses.</p>

> The result is sorted by createdAt in descending order.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setStartTime(int $startTime): self; // Lower limit of the date from which to take records
    public function setEndTime(int $endTime): self; // Upper limit of the date from which to take records
    public function setLimit(int $limit): self; // Record limit per request
    public function setCursor(string $cursor): self; // Next page cursor
    
    // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Request\GetClosedPnLRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setStartTime(int $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setEndTime(int $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getOrderId(): string; // order ID
    public function getSide(): string; // Order direction
    public function getQty(): float; // Order volume
    public function getLeverage(): float; // Leverage
    public function getOrderPrice(): float; // Order price
    public function getOrderType(): string; // Order type. Market,Limit
    public function getExecType(): string; // Execution type
    public function getClosedSize(): float; // Closed size
    public function getCumEntryValue(): float; // Cumulated entry position value
    public function getAvgEntryPrice(): float; // Average entry price
    public function getCumExitValue(): float; // Cumulated exit position value
    public function getAvgExitPrice(): float; // Average exit price
    public function getClosedPnl(): float; // Closed PnL
    public function getFillCount(): int; // The number of fills in a single order
    public function getCreatedAt(): \DateTime; // The created time
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Response\GetClosedPnLResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSide()</td>
     <td>string</td>
     <td>Order direction</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getQty()</td>
     <td>float</td>
     <td>Order volume</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Leverage</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getExecType()</td>
     <td>string</td>
     <td>Execution type </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td> Closed size </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Cumulated entry position value </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Average entry price </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Cumulated exit position value </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Average exit price </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Closed PnL </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> The number of fills in a single order </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td> The created time </td>
   </tr>
</table>

---

<br />

### Contract - Position - Get Execution List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/execution-list)</b>
<p>List of executed user orders, sorted by execution time in descending order. Supports USDT perpetual currency pairs</p>

> A user can have multiple executions in one order.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setStartTime(int $startTime): self; // Lower limit of the date from which to take records
     public function setEndTime(int $endTime): self; // Upper limit of the date from which to take records
     public function setLimit(int $limit): self; // Record limit per request
     public function setCursor(string $cursor): self; // Next page cursor
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Request\GetExecutionListRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setStartTime(int $startTime)</td>
     <td>NO</td>
     <td>Lower limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setEndTime(int $endTime)</td>
     <td>NO</td>
     <td>Upper limit of the date from which to take records</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setLimit(int $limit)</td>
     <td>NO</td>
     <td>Record limit per request</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setCursor(string $cursor)</td>
     <td>NO</td>
     <td>Next page cursor</td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
     public function getSymbol(): string; // Trading pair
     public function getOrderId(): string; // order ID
     public function getSide(): string; // Order direction
     public function getQty(): float; // Order volume
     public function getLeverage(): float; // Leverage
     public function getOrderPrice(): float; // Order price
     public function getOrderType(): string; // Market,Limit
     public function getExecType(): string; // Execution type
     public function getClosedSize(): float; // Close size
     public function getCumEntryValue(): float; //
     public function getAvgEntryPrice(): float; //
     public function getCumExitValue(): float; //
     public function getAvgExitPrice(): float; //
     public function getClosedPnl(): float; //
     public function getFillCount(): int; //
     public function getCreatedAt(): \DateTime; //
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Response\GetExecutionListResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSide()</td>
     <td>string</td>
     <td>Order direction</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getQty()</td>
     <td>float</td>
     <td>Order volume</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Leverage</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Order price</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getExecType()</td>
     <td>string</td>
     <td> Execution type </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td> Close size </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td> - </td>
   </tr>
</table>

---

<br />

### Contract - Position - My Position
<b>[Official documentation page](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Getting a list of the user's open positions</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setSettleCoin(string $symbol): self; // Calculation coin
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSymbol(string $symbol)</td>
     <td>NO</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSettleCoin(string $symbol)</td>
     <td>NO</td>
     <td>Calculation coin</td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
     public function getSymbol(): string; // Trading pair
     public function getSide(): string; // Side. Buy, Sell. Return None when zero position of one-way mode
     public function getSize(): float; // Position size
     public function getEntryPrice(): float; // Entry price
     public function getLeverage(): float; // leverage
     public function getPositionValue(): float; // Position value
     public function getPositionIdx(): int; // Position index
     public function getRiskId(): int; // Risk limit id
     public function getRiskLimitValue(): string; // Position limit value corresponding to the risk id
     public function getTradeMode(): int; // 0: cross margin mode. 1: isolated margin mode
     public function getAutoAddMargin(): int; // 0: false. 1: true
     public function getPositionBalance(): float; // Position margin
     public function getLiqPrice(): float; // Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice
     public function getBustPrice(): float; // Estimated bankruptcy price
     public function getTpSlMode(): string; // Depreciated, meaningless here, always "Full"
     public function getTakeProfit(): float; // Take profit price
     public function getStopLoss(): float; // Stop loss price
     public function getCreatedTime(): \DateTime; // Position created timestamp
     public function getUpdatedTime(): \DateTime; // Position data updated timestamp
     public function getTrailingStop(): string; // Trailing stop
     public function getActivePrice(): float; // Activate price of trailing stop
     public function getMarkPrice(): float; // Real-time mark price
     public function getUnrealizedPnl(): float; // unrealised PNL
     public function getCumRealisedPnl(): float; // cumulative realised PNL
     public function getPositionMM(): float; // Position maintenance margin
     public function getPositionIM(): float; // Position initial margin
     public function getPositionStatus(): string; // Position status
     public function getSessionAvgPrice(): float; // Settlement price
     public function getOccClosingFee(): float; // Pre-occupancy closing fee
     public function getAdlRankIndicator(): int; // Auto-deleverage rank indicator.
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSide()</td>
     <td>string</td>
     <td> Side. Buy, Sell. Return None when zero position of one-way mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSize()</td>
     <td>float</td>
     <td> Position size </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getEntryPrice()</td>
     <td>float</td>
     <td> Entry price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLeverage()</td>
     <td>float</td>
     <td> leverage </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionValue()</td>
     <td>float</td>
     <td> Position value </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIdx()</td>
     <td>int</td>
     <td> Position index </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskId()</td>
     <td>int</td>
     <td> Risk limit id </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskLimitValue()</td>
     <td>string</td>
     <td> Position limit value corresponding to the risk id </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTradeMode()</td>
     <td>int</td>
     <td> 0: cross margin mode. 1: isolated margin mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getAutoAddMargin()</td>
     <td>int</td>
     <td> 0: false. 1: true </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionBalance()</td>
     <td>float</td>
     <td> Position margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLiqPrice()</td>
     <td>float</td>
     <td> Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getBustPrice()</td>
     <td>float</td>
     <td> Estimated bankruptcy price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTpSlMode()</td>
     <td>string</td>
     <td> Depreciated, meaningless here, always "Full" </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTakeProfit()</td>
     <td>float</td>
     <td> Take profit price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getStopLoss()</td>
     <td>float</td>
     <td> Stop loss price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCreatedTime()</td>
     <td>DateTime</td>
     <td> Position created timestamp </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUpdatedTime()</td>
     <td>DateTime</td>
     <td> Position data updated timestamp </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTrailingStop()</td>
     <td>string</td>
     <td> Trailing stop </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getActivePrice()</td>
     <td>float</td>
     <td> Activate price of trailing stop </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getMarkPrice()</td>
     <td>float</td>
     <td> Real-time mark price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUnrealisedPnl()</td>
     <td>float</td>
     <td> unrealised PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCumRealisedPnl()</td>
     <td>float</td>
     <td> cumulative realised PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionMM()</td>
     <td>float</td>
     <td> Position maintenance margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIM()</td>
     <td>float</td>
     <td> Position initial margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionStatus()</td>
     <td>string</td>
     <td> Position status </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSessionAvgPrice()</td>
     <td>float</td>
     <td> Settlement price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getOccClosingFee()</td>
     <td>float</td>
     <td> Pre-occupancy closing fee </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getAdlRankIndicator()</td>
     <td>string</td>
     <td> Auto-deleverage rank indicator </td>
   </tr>
</table>

---

<br />

### Contract - Position - Set Auto Add Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Enable/disable automatic addition of position margin. To understand more, please read <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target= "_blank">here</a></p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setSide(string $side): self; // Side. Buy,Sell
     public function setAutoAddMargin(int $autoAddMargin): self; // Turn on/off auto add margin. 0: off. 1: on
     public function setPositionIdx(int $positionIdx): self; // Position index
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSide(string $side)</td>
     <td><b>YES</b></td>
     <td> Side. Buy,Sell </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setAutoAddMargin(int $autoAddMargin)</td>
     <td><b>YES</b></td>
     <td> Turn on/off auto add margin. 0: off. 1: on </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Position index </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---

<br />

### Contract - Position - Set Leverage
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Set position leverage</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setBuyLeverage(float $buyLeverage): self; // (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage
     public function setSellLeverage(float $sellLeverage): self; // (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage 
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---

<br />

### Contract - Position - Set Risk Limit
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit)</b>
<p>The risk limit will limit the maximum position amount you can hold under various margin requirements. <br />
If you want to hold a larger position, you will need more margin. <br />
This request can set the risk limit for a single position. If an order is placed above the current risk limit, it will be rejected.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setRiskId(int $riskId): self; // Risk limit id
     public function setPositionIdx(int $positionIdx): self; // Used to identify positions in different position modes

     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces\ISetRiskLimitRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Request\SetRiskLimitRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setRiskId(int $riskId)</td>
     <td><b>YES</b></td>
     <td> Risk limit id </td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Used to identify positions in different position modes. For hedge-mode, this param is required
            0: one-way mode
            1: hedge-mode Buy side
            2: hedge-mode Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---

<br />

### Contract - Position - Set Trading Stop
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop)</b>

<p>The request sets the value of take profit, stop loss or trailing</p>

> Passing these parameters will create conditional orders within the system.

> The system will cancel these orders if the position is closed and adjust the quantity according to the size of the open position.

> Supports USDT and USDC Perpetual. Note: USDC Perpetual does not support partial TP/SL mode.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTakeProfit(float $takeProfit): self; // Cannot be less than 0, 0 means cancel TP. Partial TP/SL cannot be cancelled by set it 0
     public function setStopLoss(float $stopLoss): self; // Cannot be less than 0, 0 means cancel SL. Partial TP/SL cannot be cancelled by set it 0
     public function setTpslMode(string $tpslMode): self; // TP/SL mode
     public function setTpSize(float $tpSize): self; // Take profit size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     public function setSlSize(float $slSize): self; // Stop loss size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     public function setTpTriggerBy(string $tpTriggerBy): self; // Take profit trigger price type. default: LastPrice
     public function setSlTriggerBy(string $slTriggerBy): self; // Stop loss trigger price type. default: LastPrice
     public function setTrailingStop(float $trailingStop): self; // Cannot be less than 0, 0 means cancel TS
     public function setActivePrice(float $activePrice): self; // Trailing stop trigger price. Trailing stop will be triggered when this price is reached only 
     public function setTpLimitPrice(float $tpLimitPrice): self; // The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit
     public function setSlLimitPrice(float $slLimitPrice): self; // The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit
     public function setTpOrderType(string $tpOrderType): self; // The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full, it only supports tpOrderType=Market
     public function setSlOrderType(string $slOrderType): self; // The order type when take profit is triggered
     public function setPositionIdx(int $positionIdx): self; // Used to identify positions in different position modes. For hedge-mode, this param is required

     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces\ISetTradingStopRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Request\SetTradingStopRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>:: setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>:: setTakeProfit(float $takeProfit)</td>
     <td>NO</td>
     <td> Cannot be less than 0, 0 means cancel TP. Partial TP/SL cannot be cancelled by set it 0 </td>
   </tr>
   <tr>
     <td>:: setStopLoss(float $stopLoss)</td>
     <td>NO</td>
     <td> Cannot be less than 0, 0 means cancel SL. Partial TP/SL cannot be cancelled by set it 0 </td>
   </tr>
   <tr>
     <td>:: setTpslMode(string $tpslMode)</td>
     <td>NO</td>
     <td> TP/SL mode. Full: entire position TP/SL, Partial: partial position TP/SL. As each contract has an initial full TP/SL mode, if it has been modified before, it may be partial. Therefore, if not provided, the system will automatically retrieve the current TP/SL mode configuration for the contract. </td>
   </tr>
   <tr>
     <td>:: setTpSize(float $tpSize)</td>
     <td>NO</td>
     <td> Take profit size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal </td>
   </tr>
   <tr>
     <td>:: setSlSize(float $slSize)</td>
     <td>NO</td>
     <td> Stop loss size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal </td>
   </tr>
   <tr>
     <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
     <td>NO</td>
     <td> Take profit trigger price type. default: LastPrice </td>
   </tr>
   <tr>
     <td>:: setSlTriggerBy(string $slTriggerBy)</td>
     <td>NO</td>
     <td> Stop loss trigger price type. default: LastPrice </td>
   </tr>
   <tr>
     <td>:: setTrailingStop(float $trailingStop)</td>
     <td>NO</td>
     <td> Cannot be less than 0, 0 means cancel TS </td>
   </tr>
   <tr>
     <td>::setActivePrice(float $activePrice)</td>
     <td>NO</td>
     <td> Trailing stop trigger price. Trailing stop will be triggered when this price is reached only </td>
   </tr>
   <tr>
     <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
     <td>NO</td>
     <td> The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit </td>
   </tr>
   <tr>
     <td>:: setSlLimitPrice(float $slLimitPrice)</td>
     <td>NO</td>
     <td> The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit </td>
   </tr>
   <tr>
     <td>:: setTpOrderType(string $tpOrderType)</td>
     <td>NO</td>
     <td> The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full, it only supports tpOrderType=Market </td>
   </tr>
   <tr>
     <td>:: setSlOrderType(string $slOrderType)</td>
     <td>NO</td>
     <td> The order type when stop loss is triggered. Market(default), Limit. For tpslMode=Full, it only supports slOrderType=Market </td>
   </tr>
   <tr>
     <td>::setPositionIdx(int $positionIdx)</td>
     <td>NO</td>
     <td> 
        Used to identify positions in different position modes. For hedge-mode, this param is required
        0: one-way mode
        1: hedge-mode Buy side
        2: hedge-mode Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---

<br />

### Contract - Position - Switch Cross Isolated Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>The request changes the margin mode (Cross or Isolated)</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTradeMode(int $tradeMode): self; // 0: cross margin. 1: isolated margin
     public function setBuyLeverage(float $buyLeverage): self; // Buy side leverage. Make sure buyLeverage equals to sellLeverage
     public function setSellLeverage(float $sellLeverage): self; // Sell side leverage. Make sure buyLeverage equals to sellLeverage
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setTradeMode(int $tradeMode)</td>
     <td><b>YES</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> Buy side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> Sell side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---

<br />

### Contract - Position - Switch Position Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>The request supports position mode switching for perpetual and inverse USDT futures. <br />
If you are in one-way mode, you can only open one position on the buy or sell side. <br />
If you are in hedging mode, you can open buy and sell positions simultaneously.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setCoin(string $coin): self; // Coin
     public function setPositionMode(int $positionMode): self; // Position mode. 0: Merged Single. 3: Both Side
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setSymbol(string $symbol)</td>
     <td>NO</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setCoin(string $coin)</td>
     <td>NO</td>
     <td> Coin </td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setPositionMode(int $positionMode)</td>
     <td><b>YES</b></td>
     <td> Position mode. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---

<br />

### Contract - Position - Switch TpSl Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>The request sets the implicit tpsl mode for a specific trading instrument.
It makes sense to use if you did not pass “tpslMode” in the order when placing or in a request to stop trading, because in this case the system will set tpslMode by default.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTpSlMode(string $tpSlMode): self; // Full: set TP/SL to full position. Partial: set TP/SL to partial mode
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interface\ISwitchTpSlModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Request\SwitchTpSlModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setTpSlMode(string $tpSlMode)</td>
     <td><b>YES</b></td>
     <td> Full: set TP/SL to full position. Partial: set TP/SL to partial mode </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---