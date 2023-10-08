[![phpunit](https://github.com/carpenstar/bybitapi-sdk-derivatives/actions/workflows/github-action.yml/badge.svg?branch=master)](https://github.com/carpenstar/bybitapi-sdk-derivatives/actions/workflows/github-action.yml/badge.svg?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/build.png?b=master)](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/carpenstar/bybitapi-sdk-derivatives/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)


# ByBitAPI - derivatives-trading package

**Дисклэймер: это неофициальный SDK для интеграции с биржей ByBit.   
Поддержка функционала осуществляется только в пределах зоны отвественности кода и при возможности со стороны разработчика**

**Разработка интеграции еще не закончена, поэтому работоспособность (как полностью, так и отдельных компонентов) не гарантируется.**

## Требования

- PHP >= 7.4

## Установка

```sh 
composer require carpenstar/bybitapi-sdk-derivatives
```

## Содержание:

<table>
  <tr>
    <th colspan="4" style="text-align: left; font-weight: bold">MARKET DATA</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---funding-rate-history">Funding Rate History</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/FundingRateHistory">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/funding-rate" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---index-price-kline">Index Price Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/IndexPriceKline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/index-kline" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---instrument-info">Instrument Info</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/InstrumentInfo">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/instrument-info" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---kline">Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/Kline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/kline" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---mark-price-kline">Mark Price Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/MarkPriceKline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/mark-kline" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---open-interest">Open Interest</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OpenInterest">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/open-interest" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---order-book">Order Book</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/orderbook">перейти</a></td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OrderBook" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---public-trading-history">Public Trading History</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/PublicTradingHistory">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/trade" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---risk-limit">Risk Limit</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/RiskLimit">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/risk-limit" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#market-data---ticker-info">Ticker Info</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/TickerInfo">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/ticker" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <th colspan="4" style="text-align: left; font-weight: bold">CONTRACT - ACCOUNT</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#contract---account---get-trading-fee-rate">Get Trading Fee Rate</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/GetTradingFeeRate">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#contract---account---wallet-balance">Wallet Balance</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/WalletBalance">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/wallet" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <th colspan="4" style="text-align: left; font-weight: bold">CONTRACT - ORDER</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="">Cancel All Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelAllOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Cancel Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Get Open Orders</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOpenOrders">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/open-order" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Get Order List</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOrderList">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/order-list" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives#contract---account---order---place-order">Place Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/PlaceOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/place-order" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Replace Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/ReplaceOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/replace-order" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <th colspan="4" style="text-align: left; font-weight: bold">CONTRACT - POSITION</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="">Get Closed PnL</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetClosedPnL">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/closepnl" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Get Execution List</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetExecutionList">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/execution-list" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">My Position</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/MyPosition">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-list" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Set Auto Add Margin</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetAutoAddMargin">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Set Leverage</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetLeverage">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/leverage" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Set Risk Limit</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetRiskLimit">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Set Trading Stop</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetTradingStop">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Switch Cross Isolated Margin</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchCrossIsolatedMargin">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Switch Position Mode</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchPositionMode">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-mode" target="_blank">перейти</a></td>
  </tr>
  <tr>
    <td>
      <a href="">Switch TpSl Mode</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchTpSlMode">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode" target="_blank">перейти</a></td>
  </tr>
</table>

---

### Market Data - Funding Rate History
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/funding-rate)</b>
<p>История фандинга по указаному символу за определенный период</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new FundingRateHistoryRequest())
    ->setStartTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp())
    ->setSymbol("BTCUSDT")->setLimit(3);

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
<p><b>Параметры запроса:</b></p>

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryRequest::class
```
```php
new \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest();
    
$options = (new FundingRateHistoryRequest())
    ->setSymbol("BTCUSDT")
    ->setStartTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp())
    ->setLimit(200)
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Таймштамп ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос</td>
  </tr>
</table>

> <sup>*</sup>**Warning:**
> При установке временных ограничений на выборку, обязательно следует указывать верхнюю и нижнюю границу при помощи `setStart(string $start)` и `setEnd(string $end)`.
> Иначе будет возвращена ошибка

> **Warning:**
> По умолчанию, запрос на эндпоинт `FundingRateHistory::class` возвращает 200 последних записей до текущего момента по определенному символу

<p><b>Структура ответа:</b></p>

```php
// Интерфейс:
\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse::class 
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 30%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td style="text-align: center">string</td>
    <td>Символ торговой пары</td>
  </tr>
  <tr>
    <td>:: getFundingRate()</td>
    <td style="text-align: center">float</td>
    <td>Ставка финансирования</td>
  </tr>
  <tr>
    <td>:: getFundingRateTimestamp()</td>
    <td style="text-align: center">DateTime</td>
    <td>Время удержания ставки финансирования</td>
  </tr>
</table>

---
<br />

### Market Data - Index Price Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/index-kline)</b>
<p>Запрос истории <b>ИНДЕКСНЫХ</b> цен. <br />
Тики возвращаются группами в зависимости от запрошенного интервала. <br />
Эти данные используются для построения свечных и других графиков.</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline::class
```
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
    ->setEndTime((new DateTime("2023-05-01 11:00:00"))->getTimestamp())
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
<br />
<p><b>Параметры запроса:</b></p>

```php
// Интерфейс: 
\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequest::class
```
```php
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
    
$options = (new IndexPriceKlineRequest())
    ->setSymbol("BTCUSDT") 
    ->setInterval(1) 
    ->setStartTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp()) 
    ->setEndTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp()) 
    ->setLimit(200) 
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию 200</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

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
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getStartTime()</td>
    <td>DateTime</td>
    <td>Время тика</td>
  </tr>
  <tr>
    <td>:: getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>:: getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>:: getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>:: getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
</table>

---
<br />

## Market Data - Instrument Info
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/instrument-info)</b>
<p>Эндпоинт предоставляет спецификации торгового инструмента.</p> 

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo::class
````
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

<p><b>Параметры запроса:</b></p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoRequest::class
```   
```php
use \Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;
    
$options = (new InstrumentInfoRequest())->setSymbol('BTCUSDT');
```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse::class
    
interface IInstrumentInfoResponse
{
     public function getSymbol(): ?string;
     public function getContractType(): ?string;
     public function getBaseCoin(): ?string;
     public function getQuoteCoin(): ?string;
     public function getSettleCoin(): ?string;
     public function getFundingInterval(): int;
     public function getUnifiedMarginTrade(): bool;
     public function getPriceScale(): float;
     public function getDeliveryFeeRate(): float;
     public function getDeliveryTime(): ?\DateTime;
     public function getLaunchTime(): ?\DateTime;
     public function getStatus(): ?string;
     public function getLotSizeFilter(): EntityCollection; // ILotSizeFilterItem[]
     public function getPriceFilter(): EntityCollection; // IPriceFilterItem[]
     public function getLeverageFilter(): EntityCollection // ILeverageFilterItem[]; 
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getContractType()</td>
    <td>string</td>
    <td>Тип контракта. <b>Примечание: на текущий момент поддержка только Linear</b></td>
  </tr>
  <tr>
    <td>:: getBaseCoin()</td>
    <td>string</td>
    <td>Базовый токен. Например: BTC</td>
  </tr>
  <tr>
    <td>:: getQuoteCoin()</td>
    <td>string</td>
    <td> Относительный токен. Например: USDT</td>
  </tr>
  <tr>
    <td>:: getSettleCoin()</td>
    <td>string</td>
    <td>Расчетный токен. Например: USDT</td>
  </tr>
  <tr>
    <td>:: getFundingInterval()</td>
    <td>int</td>
    <td>Интервал списания ставки финансирования в милисекундах</td>
  </tr>
  <tr>
    <td>:: getUnifiedMarginTrade()</td>
    <td>bool</td>
    <td>Поддержка единого счета маржинальной торговли</td>
  </tr>
  <tr>
    <td>:: getPriceScale()</td>
    <td>float</td>
    <td>Шкала цены</td>
  </tr>
  <tr>
    <td>:: getDeliveryFeeRate()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getDeliveryTime()</td>
    <td>DateTime</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getLaunchTime()</td>
    <td>DateTime</td>
    <td>
      Время старта торгов по инструменту
    </td>
  </tr>
  <tr>
    <td>:: getStatus()</td>
    <td>string</td>
    <td>
      Статус торговли по инструменты
    </td>
  </tr>
  <tr>
    <td>:: getLotSizeFilter()</td>
    <td>ILotSizeFilterItem[]</td>
    <td></td>
  </tr>
  <tr>
    <td>:: getPriceFilter()</td>
    <td>IPriceFilterItem[]</td>
    <td></td>
  </tr>
  <tr>
    <td>:: getLeverageFilter()</td>
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
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILotSizeFilterItem</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getMaxOrderQty()</td>
    <td>float</td>
    <td>Максимальный размер ордера</td>
  </tr>
  <tr>
    <td>:: getMinOrderQty()</td>
    <td>float</td>
    <td>Минимальный размер ордера</td>
  </tr>
  <tr>
    <td>:: getQtyStep()</td>
    <td>float</td>
    <td>Шаг для изменения размера ордера</td>
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
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\ILeverageFilterItem</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getMinLeverage()</td>
    <td>int</td>
    <td>Минимальное кредитное плечо</td>
  </tr>
  <tr>
    <td>:: getMaxLeverage()</td>
    <td>float</td>
    <td>Максимальное кредитное плечо</td>
  </tr>
  <tr>
    <td>:: getLeverageStep()</td>
    <td>float</td>
    <td>Шаг кредитного плеча</td>
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
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IPriceFilterItem</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getMinPrice()</td>
    <td>int</td>
    <td>Минимальная цена</td>
  </tr>
  <tr>
    <td>:: getMaxPrice()</td>
    <td>float</td>
    <td>Максимальная цена</td>
  </tr>
  <tr>
    <td>:: getTickSize()</td>
    <td>float</td>
    <td>Размер тика</td>
  </tr>
</table>

---
<br />

### Market Data - Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/kline)</b>
<p>Эндпоинт возвращает исторические данные для построения графиков. Свечи возвращаются группами в зависимости от запрошенного интервала.</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline::class
```
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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Строка с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp()) // Обязательный параметр. Строка даты/времени ОТ которого берется срез данных 
    ->setEndTime((new DateTime("2023-05-09 15:00:00"))->getTimestamp()) // Обязательный параметр. Строка даты/времени ДО которого берется срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение возвращаемых записей на запрос. По умолчанию 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Строка даты/времени ОТ которого берется срез данных </td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Строка даты/времени ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию 200</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface
{
    public function getStartTime(): \DateTime;
    public function getOpen(): float;
    public function getHigh(): float;
    public function getLow(): float;
    public function getClose(): float;
    public function getVolume(): float;
    public function getTurnover(): float;
}
```
<table style="width: 100%">
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseInterface</b>
    </td>
  </tr>
  <tr>
    <td>:: getStartTime()</td>
    <td>DateTime</td>
    <td>Время начала тика</td>
  </tr>
  <tr>
    <td>:: getOpen()</td>
    <td>float</td>
    <td>Цена открытия</td>
  </tr>
  <tr>
    <td>:: getHigh()</td>
    <td>float</td>
    <td>Наибольшая цена</td>
  </tr>
  <tr>
    <td>:: getLow()</td>
    <td>float</td>
    <td>Наименьшая цена</td>
  </tr>
  <tr>
    <td>:: getClose()</td>
    <td>float</td>
    <td>Цена закрытия</td>
  </tr>
  <tr>
    <td>:: getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
  <tr>
    <td>:: getTurnover()</td>
    <td>float</td>
    <td>Оборот</td>
  </tr>
</table>

---
<br />

### Market Data - Mark Price Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Эндпоинт возвращает исторические данные по <b>цене МАРКИРОВКИ</b>. <br />
Данные возвращаются группами в зависимости от запрошенного интервала. <br />
Можно использовать для формирования свечных графиков.</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new MarkPriceKlineRequest())
    ->setSymbol("APTUSDT")
    ->setInterval('1') // Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W 
    ->setStartTime((new DateTime("2023-05-08 10:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp())
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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest::class

$options = (new MarkPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Строка с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp()) // Обязательный параметр. Строка даты/времени ОТ которого берется срез данных 
    ->setEndTime((new DateTime("2023-05-09 15:00:00"))->getTimestamp()); // Обязательный параметр. Строка даты/времени ДО которого берется срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение возвращаемых записей на запрос. По умолчанию 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>:: setStart(string $start): self</td>
    <td><b>ДА</b></td>
    <td>
      Строка даты/времени ОТ которого берется срез данных
    </td>
  </tr>
  <tr>
    <td>:: setEnd(string $end): self</td>
    <td><b>ДА</b></td>
    <td>
      Строка даты/времени ДО которого берется срез данных
    </td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>
      Ограничение возвращаемых записей на запрос. По умолчанию: 200
    </td>
  </tr>
</table>


<p><b>Структура ответа:</b></p>

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class

interface IMarkPriceKline
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
      <b>Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getStartTime()</td>
    <td>DateTime</td>
    <td>Время старта тика</td>
  </tr>
  <tr>
    <td>:: getOpen()</td>
    <td>float</td>
    <td>Цена открытия</td>
  </tr>
  <tr>
    <td>:: getHigh()</td>
    <td>float</td>
    <td>Наибольшая цена</td>
  </tr>
  <tr>
    <td>:: getLow()</td>
    <td>float</td>
    <td>Наименьшая цена</td>
  </tr>
  <tr>
    <td>:: getClose()</td>
    <td>float</td>
    <td>Цена закрытия</td>
  </tr>
  <tr>
    <td>:: getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---
<br />

### Market Data - Open Interest
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Эндпоинт возвращает данные об открытом интересе по указанному символу. <br />
<b>Открытый интерес — это общее количество позиций бессрочных контрактов, которые в настоящее время хранятся на платформе.</b></p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OpenInterestRequest())
    ->setStartTime((new DateTime("2023-05-08 00:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-09 15:00:00"))->getTimestamp())
    ->setSymbol("ETHUSDT")
    ->setInterval("1h")
    ->setLimit(5);

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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class   

$options = (new OpenInterestRequest())
    ->setSymbol("ETHUSDT")
    ->setInterval("1h") 
    ->setLimit(5);
    ->setStartTime((new DateTime("2023-05-08 15:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-09 15:00:00"))->getTimestamp()); 
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которого берется срез данных </td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию 200</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse::class

interface IOpenInterestResponse
{
    public function getTimestamp(): \DateTime;
    public function getOpenInterest(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>:: getOpenInterest()</td>
    <td>float</td>
    <td>Обьем интереса</td>
  </tr>
</table>

---
<br />

### Market Data - Order Book
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/orderbook)</b>
<p>Эндпоинт возвращает электронный список ордеров на покупку и продажу бессрочных контрактов, организованный и отсортированный по уровню цен.</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook::class
```
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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class

$options = (new OrderBookRequest())
    ->setSymbol("ETHUSDT")
    ->setLimit(25);
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение на количество ордеров по одному направлению: limit = 50 (25 - bid + 25 - ask)</td>
  </tr>
</table>


<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class

interface IOrderBookResponse
{
    public function getSymbol(): string;
    public function getTimestamp(): \DateTime;
    public function getUpdateId(): int;
    public function getBid(): ICollectionInterface; // IOrderBookPriceResponse[]
    public function getAsk(): ICollectionInterface; // IOrderBookPriceResponse[]
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>float</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>:: getUpdateId()</td>
    <td>float</td>
    <td>ID обновления</td>
  </tr>
  <tr>
    <td>:: getBid()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>Список ордеров на продажу</td>
  </tr>
  <tr>
    <td>:: getAsk()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>Список ордеров на покупку</td>
  </tr>
</table>
<p>&nbsp;</p>

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
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookPriceResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>Цена</td>
  </tr>
  <tr>
    <td>:: getQuantity()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---
<br />

### Market Data - Public Trading History
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/trade)</b>
<p>Эндпоинт возвращает данные об исполнении торговых ордеров</p>  

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Response\PublicTradingHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new PublicTradingHistoryRequest())
    ->setSymbol("BTCUSDT")
    ->setLimit(3);

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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class

$options = (new PublicTradingHistoryRequest())
    ->setSymbol("ETHUSDT")
    ->setLimit(25);
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение количества на результирующий набор</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class;

interface IPublicTradingHistoryResponse
{
    public function getExecId(): string;
    public function getSymbol(): string;
    public function getPrice(): float;
    public function getSize(): float;
    public function getSide(): string;
    public function getTime(): \DateTime;
    public function isBlockTrade(): bool;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getExecId()</td>
    <td>string</td>
    <td>
      ID исполнения
    </td>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Торговый инструмент
    </td>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>
      Цена исполнения
    </td>
  </tr>
  <tr>
    <td>:: getSize()</td>
    <td>float</td>
    <td>
      Обьем исполнения
    </td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>
      Направление
    </td>
  </tr>
  <tr>
    <td>:: getTime()</td>
    <td>DateTime</td>
    <td>
      Время исполнения
    </td>
  </tr>
  <tr>
    <td>:: isBlockTrade()</td>
    <td>bool</td>
    <td>
      -
    </td>
  </tr>
</table>


---
<br />

### Market Data - Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/risk-limit)</b>
<p>Эндпоинт возвращает данные по лимиту рисков для указанного символа. <br />
Лимит риска — это мера управления рисками, позволяющая ограничить подверженность трейдеров риску.</p>

```php
// Класс эндпоинта
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new RiskLimitsRequest())
    ->setSymbol("BTCUSDT");

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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class

$options = (new RiskLimitsRequest())
    ->setSymbol("BTCUSDT");
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse::class;

interface IRiskLimitsResponse
{
    public function getId(): string;
    public function getSymbol(): string;
    public function getLimit(): int;
    public function getMaintainMargin(): float;
    public function getInitialMargin(): float;
    public function getIsLowerRisk(): int;
    public function getMaxLeverage(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getId()</td>
    <td>string</td>
    <td>
      ID риска
    </td>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Торговый инструмент
    </td>
  </tr>
  <tr>
    <td>:: getLimit()</td>
    <td>int</td>
    <td>
      Ограничение по позиции
    </td>
  </tr>
  <tr>
    <td>:: getMaintainMargin()</td>
    <td>float</td>
    <td>
      Поддержка маржи
    </td>
  </tr>
  <tr>
    <td>:: getInitialMargin()</td>
    <td>float</td>
    <td>
      Начальная маржа
    </td>
  </tr>
  <tr>
    <td>:: getIsLowerRisk()</td>
    <td>int</td>
    <td>
      Торговый инструмент имеет низкий риск
    </td>
  </tr>
  <tr>
    <td>:: getMaxLeverage()</td>
    <td>float</td>
    <td>
      Максимальное кредитное плечо
    </td>
  </tr>
</table>


---
<br />

### Market Data - Ticker Info
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/ticker)</b>
<p>Эндпоинт возвращает данные по символу (последний снимок цены, лучшую цену покупки/продажи и объем торгов) за последние 24 часа.</p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfo::class
```
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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest::class

$options = (new TickerInfoRequest())
    ->setSymbol("APTUSDT");
```  

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse::class;

interface ITickerInfoResponse
{    
    public function getSymbol(): string;
    public function getBidPrice(): float;
    public function getAskPrice(): float;
    public function getLastPrice(): float;
    public function getLastTickDirection(): string;
    public function getPrevPrice24h(): float;
    public function getPrice24hPcnt(): float;
    public function getHighPrice24h(): float;
    public function getLowPrice24h(): float;
    public function getPrevPrice1h(): float;
    public function getMarkPrice(): float;
    public function getIndexPrice(): float;
    public function getOpenInterests(): float;
    public function getTurnover24h(): float;
    public function getVolume24h(): float;
    public function getFundingRate(): float;
    public function getNextFundingTime(): \DateTime;
    public function getPredictedDeliveryPrice(): float;
    public function getBasisRate(): float;
    public function getDeliveryFeeRate(): float;
    public function getDeliveryTime(): \DateTime;
    public function getOpenInterestValue(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Торговый инструмент
    </td>
  </tr>
  <tr>
    <td>:: getBidPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена продажи
    </td>
  </tr>
  <tr>
    <td>:: getAskPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена покупки
    </td>
  </tr>
  <tr>
    <td>:: getLastPrice()</td>
    <td>float</td>
    <td>
      Цена последней тразакции
    </td>
  </tr>
  <tr>
    <td>:: getLastTickDirection()</td>
    <td>string</td>
    <td>
      Направление последнего изменения цены
    </td>
  </tr>
  <tr>
    <td>:: getPrevPrice24h()</td>
    <td>float</td>
    <td>
      Цена 24 часа назад
    </td>
  </tr>
  <tr>
    <td>:: getPrice24hPcnt()</td>
    <td>float</td>
    <td>
      Изменение цены за последние 24 часа в процентах
    </td>
  </tr>
  <tr>
    <td>:: getHighPrice24h()</td>
    <td>float</td>
    <td>
      Максимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getLowPrice24h()</td>
    <td>float</td>
    <td>
      Минимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getPrevPrice1h()</td>
    <td>float</td>
    <td>
      Почасовая рыночная цена час назад
    </td>
  </tr>
  <tr>
    <td>:: getMarkPrice()</td>
    <td>float</td>
    <td>
      Цена маркировки (ликвидация происходит по этому показателю)
    </td>
  </tr>
  <tr>
    <td>:: getIndexPrice()</td>
    <td>float</td>
    <td>
      Цена индекса
    </td>
  </tr>
  <tr>
    <td>:: getOpenInterests()</td>
    <td>float</td>
    <td>
      Обьем открытого интереса по торговому интсрументу
    </td>
  </tr>
  <tr>
    <td>:: getTurnover24h()</td>
    <td>float</td>
    <td>
      Оборот за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getVolume24h()</td>
    <td>float</td>
    <td>
      Совокупный обьем за 24 часа
    </td>
  </tr>
  <tr>
    <td>:: getFundingRate()</td>
    <td>float</td>
    <td>
      Ставка финансирования
    </td>
  </tr>
  <tr>
    <td>:: getNextFundingTime()</td>
    <td>DateTime</td>
    <td>
      Время следующего списания ставки финансирования
    </td>
  </tr>
  <tr>
    <td>:: getPredictedDeliveryPrice()</td>
    <td>float</td>
    <td> 
      -
    </td>
  </tr>
  <tr>
    <td>:: getBasisRate()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getDeliveryFeeRate()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getDeliveryTime()</td>
    <td>DateTime</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getOpenInterestValue()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
</table>

---
<br />

### Contract - Account - Get Trading Fee Rate
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Эндпоинт возвращает данные по ставке торговой комиссии для ВСЕХ символов</p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class
```
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
<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td>НЕТ</td>
    <td>Торговый инструмент</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseInterface
{
    public function getSymbol(): string;
    public function getTakerFeeRate(): float;
    public function getMakerFeeRate(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Торговый инструмент
    </td>
  </tr>
  <tr>
    <td>:: getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия тэйкера (покупателя)
    </td>
  </tr>
  <tr>
    <td>:: getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия мэйкера (продавца)
    </td>
  </tr>
</table>

<br />

### Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Эндпоинт возвращает баланс деривативного кошелька, информацию об активах в каждой валюте и информацию о уровне риска счета. <br />
По умолчанию информация о валюте с активами или обязательствами, равными 0, не возвращается.</p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class
```
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
<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string;
    public function getEquity(): float;
    public function getWalletBalance(): float;
    public function getPositionMargin(): float;
    public function getAvailableBalance(): float;
    public function getOrderMargin(): float;
    public function getOccClosingFee(): float;
    public function getOccFundingFee(): float;
    public function getUnrealisedPnl(): float;
    public function getCumRealisedPnl(): float;
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string;
    public function getAccountMM(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getCoin()</td>
    <td>string</td>
    <td>Токен</td>
  </tr>
  <tr>
    <td>:: getEquity()</td>
    <td>float</td>
    <td>Общий капитал</td>
  </tr>
  <tr>
    <td>:: getWalletBalance()</td>
    <td>float</td>
    <td>Баланс кошелька</td>
  </tr>
  <tr>
    <td>:: getPositionMargin()</td>
    <td>float</td>
    <td>Маржа позиции</td>
  </tr>
  <tr>
    <td>:: getAvailableBalance()</td>
    <td>float</td>
    <td>Доступный баланс</td>
  </tr>
  <tr>
    <td>:: getOrderMargin()</td>
    <td>float</td>
    <td>Предварительно занятая маржа</td>
  </tr>
  <tr>
    <td>:: getOccClosingFee()</td>
    <td>float</td>
    <td>
      Занята плата за закрытие позиции. <br />
      Формула: плата за открытие + ожидаемая максимальная плата за закрытие
    </td>
  </tr>
  <tr>
    <td>:: getOccFundingFee()</td>
    <td>float</td>
    <td>
      Плата за предварительное финансирование
    </td>
  </tr>
  <tr>
    <td>:: getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Нереализованный PnL
    </td>
  </tr>
  <tr>
    <td>:: getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Совокупный реализованный PnL (за все время)
    </td>
  </tr>
  <tr>
    <td>:: getGivenCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getServiceCash()</td>
    <td>float</td>
    <td>
      -
    </td>
  </tr>
  <tr>
    <td>:: getAccountIM()</td>
    <td>string</td>
    <td>
      Начальная маржа счета USDC
    </td>
  </tr>
  <tr>
    <td>:: getAccountMM()</td>
    <td>string</td>
    <td>
      Маржа обслуживания счета USDC
    </td>
  </tr>
</table>

<br />

### Contract - Account - Order - Place Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class
```
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
<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

interface IPlaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSide(string $side): self;
    public function setOrderType(string $orderType): self;
    public function setQty(float $quantity): self;
    public function setTimeInForce(string $timeInForce): self;
    public function setPrice(float $price): self;
    public function setTriggerDirection(int $triggerDirection): self;
    public function setTriggerPrice(string $triggerPrice): self;
    public function setTriggerBy(string $triggerBy): self;
    public function setPositionIdx(int $positionIdx): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setReduceOnly(bool $reduceOnly): self;
    public function setSmpType(string $smpType): self;
    public function setCloseOnTrigger(bool $closeOnTrigger): self;
    public function setTpslMode(string $tpslMode): self;
    public function setTpLimitPrice(string $tpLimitPrice): self;
    public function setSlLimitPrice(string $slLimitPrice): self;
    public function setTpOrderType(string $tpOrderType): self;
    public function setSlOrderType(string $slOrderType): self;
    
    // ... Getters
    
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Название торгового инструмента</td>
  </tr>
  <tr>
    <td>:: setSide(string $side)</td>
    <td><b>ДА</b></td>
    <td>Enum: 'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>:: setOrderType(string $orderType)</td>
    <td><b>ДА</b></td>
    <td>Enum: 'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>:: setQty(float $quantity)</td>
    <td><b>ДА</b></td>
    <td>Обьем ордера</td>
  </tr>
  <tr>
    <td>:: setTimeInForce(string $timeInForce)</td>
    <td><b>ДА</b></td>
    <td> Режим исполнения ордера. Возможные значения смотри в <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">официальной документации</a></td>
  </tr>
  <tr>
    <td>:: setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера. Оставить пустым если orderType = Market</td>
  </tr>
  <tr>
    <td>:: setTriggerDirection(int $triggerDirection)</td>
    <td>НЕТ</td>
    <td>
      Параметр условного заказа. Используется для определения ожидаемого направления условного ордера. <br />
      1: Срабатывает, когда рыночная цена поднимается до триггерной цены. <br />
      2: Срабатывает, когда рыночная цена падает до триггерной цены <br />
    </td>
  </tr>
  <tr>
    <td>:: setTriggerPrice(string $triggerPrice)</td>
    <td>НЕТ</td>
    <td>
      Параметр условного заказа. <br /> 
      Если вы ожидаете, что цена вырастет и сработает ваш условный ордер, убедитесь, что: <br />
      triggerPrice > markPrice <br />
      В противном случае, triggerPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>:: setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>
      Тип триггерной цены. По умолчанию: LastPrice. <br />
      Возможные значения: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td>НЕТ</td>
    <td>
      Индекс позиции. Обязательно если включен режим хеджирования. <br />
      Возможные значения: <br />
      - 0: Однонаправленный режим (по умолчанию) <br />
      - 1: Лонг <br />
      - 2: Шорт <br />
    </td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>
      Пользовательский идентификатор заказа. Максимум 36 символов. <br />
      Поддерживаются комбинации цифр, букв (заглавных и строчных), тире и подчеркиваний. <br />
      OrderLinkId можно использовать повторно после того, как исходный заказ будет исполнен или отменен.
    </td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Цена тейк-профита</td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Цена стоп-лоса</td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>
      Тип цены, по которой активируется тейк-профит. По умолчанию: LastPrice <br />
      Возможные значения: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>
      Тип цены, по которой активируется стоп-лос. По умолчанию: LastPrice <br />
      Возможные значения: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setReduceOnly(bool $reduceOnly)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Описание параметра в оф.документации</a> <br />
      true означает, что ваша позиция может уменьшиться в размере только в случае срабатывания этого ордера. <br />
      Если значение «reduce_only» равно true, то невозможно установить тейк-профит/стоп-лосс.
    </td>
  </tr>
  <tr>
    <td>:: setSmpType(string $smpType)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Описание параметра в оф.документации</a> <br />
      Тип исполнения SMP.
    </td>
  </tr>
  <tr>
    <td>:: setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">Что такое закрытие по триггерному ордеру?</a> <br />
      Параметр для закрытия заказа. Это может только уменьшить ваше положение, но не увеличить его. <br />
      Если на счету недостаточно доступного баланса при срабатывании ордера на закрытие, <br />
      то другие активные ордера аналогичных контрактов будут отменены или уменьшены. <br />
      Его можно использовать, чтобы гарантировать, что ваш стоп-лосс уменьшает вашу позицию независимо от текущей доступной маржи.
    </td>
  </tr>
  <tr>
    <td>:: setTpslMode(string $tpslMode)</td>
    <td>НЕТ</td>
    <td>
      TP/SL режим <br />
        - Full: вся позиция по TP/SL. Тогда tpOrderType или slOrderType должен быть Market. <br />
        - Partial: частичное исполнение tp/sl. Поддерживаются лимитные ордера TP/SL. Примечание: при создании ограничения tp/sl требуется параметр tpslMode.
    </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(string $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>
      Цена лимитного ордера при срабатывании цены тейк-профита. <br />
      Работает только тогда, когда <b>tpslMode=Partial</b> или <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>:: setSlLimitPrice(string $slLimitPrice)</td>
    <td>НЕТ</td>
    <td>
      Цена лимитного ордера при срабатывании стоп-лосса. <br />
      Работает только тогда, когда <b>tpslMode=Partial</b> и <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>:: setTpOrderType(string $tpOrderType)</td>
    <td>НЕТ</td>
    <td>
      Тип ордера, при котором срабатывает тейк-профит. <br />
      Возможные значения: Market (- по умолчанию) или Limit. <br />
      Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
  <tr>
    <td>:: setSlOrderType(string $slOrderType)</td>
    <td>НЕТ</td>
    <td>
      Тип ордера, при котором срабатывает стоп-лосс. <br />
      Возможные значения: Market (- по умолчанию) или Limit. <br />
      Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
</table>



<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
</table>

---

### Contract - Contract - Order - Cancel All Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>Этот эндпоинт позволяет отменить все открытые ордера.</p>

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Название торгового инструмента</td>
  </tr>
  <tr>
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Отменить все открытые ордера по базовой монете</td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Отменить все открытые ордера расчетной монетой</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Результат представляет из себя нумерованный массив обьектов реализующих интерфейс ICancelAllOrderResponseInterface

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
</table>


---

### Contract - Contract - Order - Cancel Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>Этот эндпоинт позволяет отменить указанный открытый ордер.</p>

> Вы можете отменить указанный частично исполненный заказ.


<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    
    // ... Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Название торгового инструмента</td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский order ID</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
</table>

---

### Contract - Contract - Order - Get Open Orders
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Эндпоинт возвращает данные об открытых или частично исполненных заказов в режиме реального времени.</p>

> Если не переданы ни orderId, ни orderLinkId, будет возвращено не более 500 открытых или частично исполненных ордеров.
> Записи сортируются по времени создания от самых новых к самым старым.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderFilter(string $orderFilter): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td> Базовый токен </td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Расчетный токен</td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский order ID</td>
  </tr>
  <tr>
    <td>:: setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: <b>Order</b>: активный ордер, <b>StopOrder</b>: условный ордер</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getSide(): string;
    public function getOrderType(): string;
    public function getPrice(): float;
    public function getQty(): float;
    public function getTimeInForce(): string;
    public function getOrderStatus(): string;
    public function getLastPriceOnCreated(): string;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getCancelType(): string;
    public function getStopOrderType(): string;
    public function getTriggerDirection(): int;
    public function getTriggerBy(): string;
    public function getTriggerPrice(): ?float;
    public function getCumExecValue(): float;
    public function getCumExecFee(): float;
    public function getCumExecQty(): float;
    public function getLeavesValue(): float;
    public function getLeavesQty(): float;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpslMode(): string;
    public function getTpLimitPrice(): float;
    public function getSlLimitPrice(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function isReduceOnly(): bool;
    public function isCloseOnTrigger(): bool;
    public function getSmpType(): string;
    public function getSmpGroup(): int;
    public function getSmpOrderId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getOrderType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTimeInForce()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCreatedTime()</td>
    <td>DateTime</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCancelType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getStopOrderType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerDirection()</td>
    <td>int</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerBy()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerPrice()</td>
    <td>null|float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecValue()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecFee()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLeavesValue()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLeavesQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTakeProfit()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getStopLoss()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTpslMode()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSlTriggerBy()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: isReduceOnly()</td>
    <td>bool</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: isCloseOnTrigger()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSmpType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSmpGroup()</td>
    <td>string</td>
    <td>
    -
    </td>
  </tr>
  <tr>
    <td>:: getSmpOrderId()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
</table>

---

### Contract - Contract - Order - Get Order List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>Список ордеров</p>

> Поскольку создание/отмена заказа является асинхронным, данные, возвращаемые из этого эндпоинта, могут задерживаться.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderFilter(string $orderFilter): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td> Базовый токен </td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Расчетный токен</td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский order ID</td>
  </tr>
  <tr>
    <td>:: setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: <b>Order</b>: активный ордер, <b>StopOrder</b>: условный ордер</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getSide(): string;
    public function getOrderType(): string;
    public function getPrice(): float;
    public function getQty(): float;
    public function getTimeInForce(): string;
    public function getOrderStatus(): string;
    public function getLastPriceOnCreated(): string;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getCancelType(): string;
    public function getStopOrderType(): string;
    public function getTriggerDirection(): int;
    public function getTriggerBy(): string;
    public function getTriggerPrice(): ?float;
    public function getCumExecValue(): float;
    public function getCumExecFee(): float;
    public function getCumExecQty(): float;
    public function getLeavesValue(): float;
    public function getLeavesQty(): float;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpslMode(): string;
    public function getTpLimitPrice(): float;
    public function getSlLimitPrice(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function isReduceOnly(): bool;
    public function isCloseOnTrigger(): bool;
    public function getSmpType(): string;
    public function getSmpGroup(): int;
    public function getSmpOrderId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getOrderType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTimeInForce()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCreatedTime()</td>
    <td>DateTime</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCancelType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getStopOrderType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerDirection()</td>
    <td>int</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerBy()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTriggerPrice()</td>
    <td>null|float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecValue()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecFee()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getCumExecQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLeavesValue()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getLeavesQty()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTakeProfit()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getStopLoss()</td>
    <td>float</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getTpslMode()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSlTriggerBy()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: isReduceOnly()</td>
    <td>bool</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: isCloseOnTrigger()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSmpType()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
  <tr>
    <td>:: getSmpGroup()</td>
    <td>string</td>
    <td>
    -
    </td>
  </tr>
  <tr>
    <td>:: getSmpOrderId()</td>
    <td>string</td>
    <td>
-
    </td>
  </tr>
</table>


---

### Contract - Contract - Order - Replace Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Модификация ордера</p>

> Вы можете изменить открытые или частично исполненные ордера.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setPrice(float $price): self;
    public function setQty(float $qty): self;
    public function setTriggerPrice(float $triggerPrice): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setTriggerBy(string $triggerBy): self;
    public function setTpLimitPrice(float $tpLimitPrice): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td> Торговый инструмент </td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский order ID</td>
  </tr>
  <tr>
    <td>:: setPrice(float $price)</td>
    <td>НЕТ</td>
    <td> Новая цена ордера </td>
  </tr>
  <tr>
    <td>:: setQty(float $qty)</td>
    <td>НЕТ</td>
    <td>
      Новый обьем ордера
    </td>
  </tr>
  <tr>
    <td>:: setTriggerPrice(float $triggerPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменения цены триггера</td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Установка/изменения тейк-профита</td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Установка/изменения стоп-лоса</td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>Установка/изменения - </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>Установка/изменения - </td>
  </tr>
  <tr>
    <td>:: setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>Установка/изменения - </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменения цены триггера</td>
  </tr>
</table>


---

### Contract - Contract - Position - Get Closed PnL
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Запрос информации о закрытых позициях с данными о прибылях и убытках пользователя.</p>

> Результат сортируется по createdAt в порядке убывания.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setStartTime(int $timestamp): self;
    public function setEndTime(int $timestamp): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp)</td>
    <td>НЕТ</td>
    <td>Нижняя граница даты от которой брать записи</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp)</td>
    <td>НЕТ</td>
    <td>Верхняя граница даты от которой брать записи</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit)</td>
    <td>НЕТ</td>
    <td>Лимит записей на запрос</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getSide(): string;
    public function getQty(): float;
    public function getLeverage(): float;
    public function getOrderPrice(): float;
    public function getOrderType(): string;
    public function getExecType(): string;
    public function getClosedSize(): float;
    public function getCumEntryValue(): float;
    public function getAvgEntryPrice(): float;
    public function getCumExitValue(): float;
    public function getAvgExitPrice(): float;
    public function getClosedPnl(): float;
    public function getFillCount(): int;
    public function getCreatedAt(): \DateTime;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces\IGetClosedPnLResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>Направление ордера</td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>Обьем ордера</td>
  </tr>
  <tr>
    <td>:: getLeverage()</td>
    <td>float</td>
    <td>Кредитное плечо</td>
  </tr>
  <tr>
    <td>:: getOrderPrice()</td>
    <td>float</td>
    <td>Цена ордера</td>
  </tr>
  <tr>
    <td>:: getExecType()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getClosedSize()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumEntryValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAvgEntryPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumExitValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAvgExitPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getClosedPnl()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getFillCount()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCreatedAt()</td>
    <td>DateTime</td>
    <td> - </td>
  </tr>
</table>

---

### Contract - Contract - Position - Get Execution List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/execution-list)</b>
<p>Список исполненных ордеров пользователя, отсортированный по времени исполнения в порядке убывания. Поддерживает бессрочные валютные пары USDT</p>

> У пользователя может быть несколько исполнений в одном ордере.

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setStartTime(int $timestamp): self;
    public function setEndTime(int $timestamp): self;
    public function setLimit(int $limit): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp)</td>
    <td>НЕТ</td>
    <td>Нижняя граница даты от которой брать записи</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp)</td>
    <td>НЕТ</td>
    <td>Верхняя граница даты от которой брать записи</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit)</td>
    <td>НЕТ</td>
    <td>Лимит записей на запрос</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getSide(): string;
    public function getQty(): float;
    public function getLeverage(): float;
    public function getOrderPrice(): float;
    public function getOrderType(): string;
    public function getExecType(): string;
    public function getClosedSize(): float;
    public function getCumEntryValue(): float;
    public function getAvgEntryPrice(): float;
    public function getCumExitValue(): float;
    public function getAvgExitPrice(): float;
    public function getClosedPnl(): float;
    public function getFillCount(): int;
    public function getCreatedAt(): \DateTime;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces\IGetExecutionListResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>Направление ордера</td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>Обьем ордера</td>
  </tr>
  <tr>
    <td>:: getLeverage()</td>
    <td>float</td>
    <td>Кредитное плечо</td>
  </tr>
  <tr>
    <td>:: getOrderPrice()</td>
    <td>float</td>
    <td>Цена ордера</td>
  </tr>
  <tr>
    <td>:: getExecType()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getClosedSize()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumEntryValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAvgEntryPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumExitValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAvgExitPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getClosedPnl()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getFillCount()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCreatedAt()</td>
    <td>DateTime</td>
    <td> - </td>
  </tr>
</table>

---

### Contract - Contract - Position - My Position
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Получение списка открытых позиций пользователя</p>

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSettleCoin(string $symbol): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $symbol)</td>
    <td>НЕТ</td>
    <td>Расчетная монета</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
    public function getSymbol(): string;
    public function getSide(): string;
    public function getSize(): float;
    public function getEntryPrice(): float;
    public function getLeverage(): float;
    public function getPositionValue(): float;
    public function getPositionIdx(): int;
    public function getRiskId(): int;
    public function getRiskLimitValue(): string;
    public function getTradeMode(): int;
    public function getAutoAddMargin(): int;
    public function getPositionBalance(): float;
    public function getLiqPrice(): float;
    public function getBustPrice(): float;
    public function getTpSlMode(): string;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getTrailingStop(): string;
    public function getActivePrice(): float;
    public function getMarkPrice(): float;
    public function getUnrealisedPnl(): float;
    public function getCumRealisedPnl(): float;
    public function getPositionMM(): float;
    public function getPositionIM(): float;
    public function getPositionStatus(): string;
    public function getSessionAvgPrice(): float;
    public function getOccClosingFee(): float;
    public function getAdlRankIndicator(): int;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getSize()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getEntryPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getLeverage()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getPositionValue()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getPositionIdx()</td>
    <td>int</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getRiskId()</td>
    <td>int</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getRiskLimitValue()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getTradeMode()</td>
    <td>int</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAutoAddMargin()</td>
    <td>int</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getPositionBalance()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getLiqPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getBustPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getTpSlMode()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getTakeProfit()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getStopLoss()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCreatedTime()</td>
    <td>DateTime</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getUpdatedTime()</td>
    <td>DateTime</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getTrailingStop()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getActivePrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getMarkPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getUnrealisedPnl()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getCumRealisedPnl()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getPositionMM()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getPositionIM()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getPositionStatus()</td>
    <td>string</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getSessionAvgPrice()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getOccClosingFee()</td>
    <td>float</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: getAdlRankIndicator()</td>
    <td>string</td>
    <td> - </td>
  </tr>
</table>

---

### Contract - Contract - Position - Set Auto Add Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Включить/выключить автоматическое добавление маржи позиции. Чтобы понять больше, пожалуйста, прочитайте <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target="_blank">здесь</a></p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSide(string $side): self;
    public function setAutoAddMargin(int $autoAddMargin): self;
    public function setPositionIdx(int $positionIdx): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setSide(string $side)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setAutoAddMargin(int $autoAddMargin)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив

---

### Contract - Contract - Position - Set Leverage
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Установить кредитное плечо позции</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBuyLeverage(float $buyLeverage): self;
    public function setSellLeverage(float $sellLeverage): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setBuyLeverage(float $buyLeverage)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSellLeverage(float $sellLeverage)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив

---

### Contract - Contract - Position - Set Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit)</b>
<p>Лимит риска будет ограничивать максимальную сумму позиции, которую вы можете удерживать при различных маржинальных требованиях. <br />
Если вы хотите удерживать позицию большего размера, вам потребуется больше маржи. <br />
Этот запрос может установить лимит риска для одной позиции. Если при размещении ордера превышен текущий лимит риска, он будет отклонен.</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setRiskId(int $riskId): self;
    public function setPositionIdx(int $positionIdx): self;

    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces\ISetRiskLimitRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setRiskId(int $riskId)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив


---

### Contract - Contract - Position - Set Trading Stop
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop)</b>

<p>Запрос устанавливает значение тейк-профита, стоп-лоса или трейлинга</p>

> Передача этих параметров создаст внутри системы условные ордера.

> Система отменит эти ордера, если позиция будет закрыта, и скорректирует количество в соответствии с размером открытой позиции.

> Поддержка бессрочных USDT и USDC Perpetual. Примечание: USDC Perpetual не поддерживает частичный режим TP/SL.

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpslMode(string $tpslMode): self;
    public function setTpSize(float $tpSize): self;
    public function setSlSize(float $slSize): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setTrailingStop(float $trailingStop): self;
    public function setActivePrice(float $activePrice): self;
    public function setTpLimitPrice(float $tpLimitPrice): self;
    public function setSlLimitPrice(float $slLimitPrice): self;
    public function setTpOrderType(string $tpOrderType): self;
    public function setSlOrderType(string $slOrderType): self;
    public function setPositionIdx(int $positionIdx): self;

    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces\ISetTradingStopRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpslMode(string $tpslMode)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpSize(float $tpSize)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlSize(float $slSize)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTrailingStop(float $trailingStop)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setActivePrice(float $activePrice)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlLimitPrice(float $slLimitPrice)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setTpOrderType(string $tpOrderType)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSlOrderType(string $slOrderType)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив

---

### Contract - Contract - Position - Switch Cross Isolated Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>Запрос изменяет режим маржи (Кросс или Изолированная)</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTradeMode(int $tradeMode): self;
    public function setBuyLeverage(float $buyLeverage): self;
    public function setSellLeverage(float $sellLeverage): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setTradeMode(int $tradeMode)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setBuyLeverage(float $buyLeverage)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setSellLeverage(float $sellLeverage)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив


---

### Contract - Contract - Position - Switch Position Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>Запрос поддерживает переключение режима позиции для бессрочных и обратных фьючерсов USDT. <br />
Если вы находитесь в одностороннем режиме, вы можете открыть только одну позицию на стороне покупки или продажи. <br />
Если вы находитесь в режиме хеджирования, вы можете одновременно открывать позиции на покупку и продажу.</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setCoin(string $coin): self;
    public function setPositionMode(int $positionMode): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setCoin(string $coin)</td>
    <td>НЕТ</td>
    <td> - </td>
  </tr>
  <tr>
    <td>:: setPositionMode(int $positionMode)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив


---

### Contract - Contract - Position - Switch TpSl Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>Запрос устанавливает неявный режим tpsl для определенного торгового инструмента. 
Имеет смысл использовать если вы не передали «tpslMode» в ордере при размещении или в запросе на остановку торговли т.к в таком случае система установит tpslMode по умолчанию.</p>

<p><b>Параметры запроса</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setTpSlMode(string $tpSlMode): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interface\ISwitchTpSlModeRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговый инструмент</td>
  </tr>
  <tr>
    <td>:: setTpSlMode(string $tpSlMode)</td>
    <td><b>ДА</b></td>
    <td> - </td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Эндпоинт в качестве успешного ответа возвращает пустой массив


---