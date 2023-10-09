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
    <th colspan="5" style="text-align: left; font-weight: bold">MARKET DATA</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
    <th style="text-align: center; font-weight: bold">Язык</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---funding-rate-history">Funding Rate History</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/FundingRateHistory">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/funding-rate" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/FundingRateHistory/README.md">EN</a>, <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/FundingRateHistory/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---index-price-kline">Index Price Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/IndexPriceKline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/index-kline" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/IndexPriceKline/README.md">EN</a>, 
<a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/IndexPriceKline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---instrument-info">Instrument Info</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/InstrumentInfo">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/instrument-info" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/InstrumentInfo/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/InstrumentInfo/README_ru.md">RU</a>
    </td>    

</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---kline">Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/Kline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/kline" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/Kline/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/Kline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---mark-price-kline">Mark Price Kline</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/MarkPriceKline">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/mark-kline" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/MarkPriceKline/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/MarkPriceKline/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---open-interest">Open Interest</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OpenInterest">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/open-interest" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OpenInterest/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OpenInterest/README_ru.md">RU</a>
    </td>  
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---order-book">Order Book</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/orderbook">перейти</a></td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/OrderBook" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OrderBook/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/OrderBook/README_ru.md">RU</a>
    </td>    
</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---public-trading-history">Public Trading History</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/PublicTradingHistory">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/trade" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/PublicTradingHistory/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/PublicTradingHistory/README_ru.md">RU</a>
    </td>   
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---risk-limit">Risk Limit</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/RiskLimit">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/risk-limit" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/RiskLimit/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/RiskLimit/README_ru.md">RU</a>
    </td>   
</tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#market-data---ticker-info">Ticker Info</a>
    </td>
    <td>Публичный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/MarketData/TickerInfo">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/public/ticker" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/TickerInfo/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/TickerInfo/README_ru.md">RU</a>
    </td>   
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - ACCOUNT</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---get-trading-fee-rate">Get Trading Fee Rate</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/GetTradingFeeRate">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/GetTradingFeeRate/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/GetTradingFeeRate/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---wallet-balance">Wallet Balance</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Account/WalletBalance">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/wallet" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/WalletBalance/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/MarketData/WalletBalance/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - ORDER</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---cancel-all-order">Cancel All Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelAllOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelAllOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelAllOrder/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---cancel-order">Cancel Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/CancelOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cancel" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/CancelOrder/README_ru.md">RU</a>
    </td> 
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---get-open-orders">Get Open Orders</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOpenOrders">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/open-order" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOpenOrders/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOpenOrders/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---get-order-list">Get Order List</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/GetOrderList">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/order-list" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOrderList/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/GetOrderList/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---place-order">Place Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/PlaceOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/place-order" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/PlaceOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/PlaceOrder/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---account---order---replace-order">Replace Order</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Order/ReplaceOrder">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/replace-order" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/ReplaceOrder/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Contract/ReplaceOrder/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <th colspan="5" style="text-align: left; font-weight: bold">CONTRACT - POSITION</th>
  </tr>
  <tr>
    <th style="text-align: center; font-weight: bold">Эндпоинт</th>
    <th style="text-align: center; font-weight: bold">Тип доступа</th>
    <th style="text-align: center; font-weight: bold">Смотреть в директории</th>
    <th style="text-align: center; font-weight: bold">Официальная документации</th>
    <th style="text-align: center; font-weight: bold">Язык</th>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---get-closed-pnl">Get Closed PnL</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetClosedPnL">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/closepnl" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetClosedPnL/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetClosedPnL/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---get-execution-list">Get Execution List</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/GetExecutionList">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/execution-list" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetExecutionList/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/GetExecutionList/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---my-position">My Position</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/MyPosition">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-list" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/MyPosition/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/MyPosition/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-auto-add-margin">Set Auto Add Margin</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetAutoAddMargin">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetAutoAddMargin/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetAutoAddMargin/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-leverage">Set Leverage</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetLeverage">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/leverage" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetLeverage/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetLeverage/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-risk-limit">Set Risk Limit</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetRiskLimit">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetRiskLimit/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetRiskLimit/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---set-trading-stop">Set Trading Stop</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SetTradingStop">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetTradingStop/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SetTradingStop/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---switch-cross-isolated-margin">Switch Cross Isolated Margin</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchCrossIsolatedMargin">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchCrossIsolatedMargin/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchCrossIsolatedMargin/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---switch-position-mode">Switch Position Mode</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchPositionMode">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/position-mode" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchPositionMode/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchPositionMode/README_ru.md">RU</a>
    </td>
  </tr>
  <tr>
    <td>
      <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master#contract---position---switch-tpsl-mode">Switch TpSl Mode</a>
    </td>
    <td>Приватный</td>
    <td style="text-align: center"><a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/tree/master/src/Derivatives/Contract/Position/SwitchTpSlMode">перейти</a></td>
    <td style="text-align: center"><a href="https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode" target="_blank">перейти</a></td>
    <td>
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchTpSlMode/README.md">EN</a>, 
        <a href="https://github.com/carpenstar/bybitapi-sdk-derivatives/blob/master/src/Derivatives/Position/SwitchTpSlMode/README_ru.md">RU</a>
    </td>
  </tr>
</table>

---

### Market Data - Funding Rate History
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/funding-rate)</b>
<p>История финансирования указанного символа за определенный период</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory::class 
```  

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
new \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest();
    
$options = (new FundingRateHistoryRequest())
    ->setSymbol("BTCUSDT") // Trading pair
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // Временная метка, ОТ которой будет взят срез данных
    ->setEndTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // Временная метка ДО того, как будет взят срез данных
    ->setLimit(200) // Ограничение количества записей, возвращаемых по запросу
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setSymbol(string $symbol): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setStartTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Временная метка, ОТ которой будет взят срез данных</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setEndTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Временная метка ДО того, как будет взят срез данных</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setLimit(int $limit): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Ограничение количества записей, возвращаемых по запросу</td>
  </tr>
</table>

> <sup>*</sup>**Warning:**
> При установке ограничений по времени выборки обязательно укажите верхнюю и нижнюю границы, используя `setStartTime(int $timestamp)` и `setEndTime(int $timestamp)`.
> В противном случае будет возвращена ошибка

> **Warning:**
> По умолчанию запрос к эндпоинту FundingRateHistory::class возвращает последние 200 записей до текущего момента для конкретного символа



<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

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
    <th style="width: 30%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getSymbol()</td>
    <td style="text-align: center">string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getFundingRate()</td>
    <td style="text-align: center">float</td>
    <td>Ставка финансирования</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getFundingRateTimestamp()</td>
    <td style="text-align: center">DateTime</td>
    <td>Время следующего списания ставки финансирования</td>
  </tr>
</table>

---
<br />

### Market Data - Index Price Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/index-kline)</b>
<p>Запрос истории цены <b>INDEX</b>, рассчитанной на основе цен крупнейших бирж.</p>
<p>Каждый элемент представляет собой группу цен в зависимости от запрошенного интервала.</p>
<p>Эти данные можно использовать для построения свечных и других диаграмм.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline::class 
```

<br />
<p align="center" width="100%"><b>ПРИМЕР</b></p>

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
<br />
<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА:</b></p>

---

```php
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
    
$options = (new IndexPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Торговая пара
    ->setInterval(1) // Интервал тика. 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // Таймштам ОТ которого берется срез данных
    ->setEndTime((new DateTime("2023-05-09 11:00:00"))->getTimestamp()) // Таймштам ДО которого берется срез данных
    ->setLimit(200) // Ограничение данных на страницу, по умолчанию: 200
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>Интервал тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштам ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштам ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineRequest::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение данных на страницу, по умолчанию: 200</td>
  </tr>
</table>

<br />
<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА:</b></p>

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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IIndexPriceKlineResponse::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
</table>

---
<br />

### Market Data - Instrument Info
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/instrument-info)</b>
<p>Эндпоинт предоставляет характеристики торгового инструмента.</p> 

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
use \Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Request\InstrumentInfoRequest;
    
$options = (new InstrumentInfoRequest())
    ->setSymbol('BTCUSDT'); // Торговая пара
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IInstrumentInfoRequest::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Interfaces\IInstrumentInfoResponse::class
    
interface IInstrumentInfoResponse
{
     public function getSymbol(): ?string; // Торговая пара
     public function getContractType(): ?string; // Тип контракта
     public function getBaseCoin(): ?string; // Базовый токена. Например: BTC
     public function getQuoteCoin(): ?string; // Относительный токен. Например: USDT
     public function getSettleCoin(): ?string; // Расчетный токена. Например: USDT
     public function getFundingInterval(): int; // Интервал списания ставки финансирования
     public function getUnifiedMarginTrade(): bool; // Поддержка единого маржинального счета
     public function getPriceScale(): float; // Шкала цены
     public function getStatus(): ?string; // Статус торговли по инструменту
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getContractType()</td>
    <td>string</td>
    <td>Тип контракта. <b>Примечание: в настоящее время поддерживается только linear</b></td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getBaseCoin()</td>
    <td>string</td>
    <td>Базовый токен. Например: BTC</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getQuoteCoin()</td>
    <td>string</td>
    <td>Относительный токен. Например: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getSettleCoin()</td>
    <td>string</td>
    <td>Расчетный токен. Например: USDT</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getFundingInterval()</td>
    <td>int</td>
    <td>Интервал списания ставки финансирования</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getUnifiedMarginTrade()</td>
    <td>bool</td>
    <td>Поддержка единого маржинального счета</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getPriceScale()</td>
    <td>float</td>
    <td>Шкала цены</td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getLaunchTime()</td>
    <td>DateTime</td>
    <td>
      Время начала торгов по инструменту
    </td>
  </tr>
  <tr>
    <td>IInstrumentInfoResponse::getStatus()</td>
    <td>string</td>
    <td>
      Статус торговли по инструменту
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ILotSizeFilterItem::getMaxOrderQty()</td>
    <td>float</td>
    <td>Максимальный размер ордера</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItem::getMinOrderQty()</td>
    <td>float</td>
    <td>Минимальный размер ордера</td>
  </tr>
  <tr>
    <td>ILotSizeFilterItem::getQtyStep()</td>
    <td>float</td>
    <td>Шаг изменения размера ордера</td>
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ILeverageFilterItem::getMinLeverage()</td>
    <td>int</td>
    <td>Минимальное кредитное плеча</td>
  </tr>
  <tr>
    <td>ILeverageFilterItem::getMaxLeverage()</td>
    <td>float</td>
    <td>Максимальное кредитное плечо</td>
  </tr>
  <tr>
    <td>ILeverageFilterItem::getLeverageStep()</td>
    <td>float</td>
    <td>Шаг изменения кредитного плеча</td>
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPriceFilterItem::getMinPrice()</td>
    <td>int</td>
    <td>Минимальная цена</td>
  </tr>
  <tr>
    <td>IPriceFilterItem::getMaxPrice()</td>
    <td>float</td>
    <td>Максимальная цена</td>
  </tr>
  <tr>
    <td>IPriceFilterItem::getTickSize()</td>
    <td>float</td>
    <td>Размер тика</td>
  </tr>
</table>

---
<br />

### Market Data - Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/kline)</b>
<p>Эндпоинт возвращает исторические данные для построения графика. Свечи возвращаются группами в зависимости от запрошенного интервала.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Линия с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Обязательный параметр. Временная метка, ОТ которой будет взят срез данных
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()) // Обязательный параметр. Временная метка ДО того, как будет взят срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которой берется срез данных </td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface
{
    public function getStartTime(): \DateTime; // Время начала тика
    public function getOpen(): float; // Цена открытия
    public function getHigh(): float; // Максимальная цена тика
    public function getLow(): float; // Минимальная цена тика
    public function getClose(): float; // Цена закрытия тика
    public function getVolume(): float; // Обьем
    public function getTurnover(): float; // Оборот
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>

  <tr>
    <td>IKlineResponseInterface::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getTurnover()</td>
    <td>float</td>
    <td>Оборот</td>
  </tr>
</table>

---
<br />

### Market Data - Mark Price Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Эндпоинт возвращает исторические данные о цене <b>МАРКИРОВКИ</b>.</p>
<p>Данные возвращаются группами в зависимости от запрошенного интервала. </p>
<p>Может использоваться для создания свечных диаграмм.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new MarkPriceKlineRequest())
    ->setSymbol("APTUSDT")
    ->setInterval('1') // Интервал тика. 1 3 5 15 30 60 120 240 360 720 D M W 
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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest::class

$options = (new MarkPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Линия с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Обязательный параметр. Таймштамп ОТ которого будет взят срез данных
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()) // Обязательный параметр. Таймштамп ДО которого будет взят срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>
      Таймштамп ОТ которого будет взят срез данных
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>
      Таймштамп ДО которого будет взят срез данных
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>
      Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
    </td>
  </tr>
</table>


<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class

interface IMarkPriceKline
{
    public function getStartTime(): \DateTime; // Время открытия тика
    public function getOpen(): float; // Цена открытия тика
    public function getHigh(): float; // Максимальная цена тика
    public function getLow(): float; // Минимальная цена тика
    public function getClose(): float; // Цена закрытия тика
    public function getVolume(): float; // Обьем
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---
<br />

### Market Data - Open Interest
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Эндпоинт возвращает данные об открытом интересе по указанному символу. <br />
<b>Открытый интерес - это общее количество позиций по бессрочным контрактам, которые в настоящее время имеются на платформе.</b></p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class   

$options = (new OpenInterestRequest())
    ->setSymbol("ETHUSDT") // Торговая пара
    ->setInterval("1h") // Размер тика. Возможные значение: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    ->setStartTime((new DateTime('2023-05-01 10:00:00'))->getTimestamp()) // Таймштамп ОТ которого берется срез данных
    ->setEndTime((new DateTime('2023-05-01 20:00:00'))->getTimestamp()) // Таймштамп ДО которого берется срез данных
    ->setLimit(5); // Ограничение возвращаемых записей на запрос. По умолчанию: 200
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setStartTime(int $startTime): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setEndTime(string $end): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>IOpenInterestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию: 200</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse::class

interface IOpenInterestResponse
{
    public function getTimestamp(): \DateTime; // Время исполнения запроса
    public function getOpenInterest(): float; // Обьем интереса
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOpenInterestResponse::getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>IOpenInterestResponse::getOpenInterest()</td>
    <td>float</td>
    <td>Обьем интереса</td>
  </tr>
</table>

---
<br />

### Market Data - Order Book
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/orderbook)</b>
<p>Эндпоинт возвращает список ордеров на покупку и продажу бессрочных контрактов, организованный и отсортированный по уровню цен.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class

$options = (new OrderBookRequest())
    ->setSymbol("ETHUSDT") // Торговая пара
    ->setLimit(25); // Лимит на количество ордеров в одну сторону: лимит = 50 (25 - бид + 25 - аск)
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Лимит на количество ордеров в одну сторону: лимит = 50 (25 - бид + 25 - аск)</td>
  </tr>
</table>


<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class

interface IOrderBookResponse
{
    public function getSymbol(): string; // Торговая пара
    public function getTimestamp(): \DateTime; // Время исполнения запроса
    public function getUpdateId(): int; // ID обновления данных
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::getSymbol()</td>
    <td>float</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getUpdateId()</td>
    <td>float</td>
    <td>ID обновления данных</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getBid()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>Список ордеров на продажу</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getAsk()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>Список ордеров на покупку</td>
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getPrice()</td>
    <td>float</td>
    <td>Цена</td>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getQuantity()</td>
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
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class

$options = (new PublicTradingHistoryRequest())
    ->setSymbol("ETHUSDT") // Торговая пара
    ->setLimit(25); // Ограничение возвращаемых строк на один запрос
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых строк на один запрос</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class;

interface IPublicTradingHistoryResponse
{
    public function getExecId(): string; // ID исполнения
    public function getSymbol(): string; // Торговая пра
    public function getPrice(): float; // Цена исполнения
    public function getSize(): float; // Обьем исполнения
    public function getSide(): string; // Направление ордера (buy, sell)
    public function getTime(): \DateTime; // Время исполнения
    public function isBlockTrade(): bool; // Является-ли сделка внебиржевой?
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getExecId()</td>
    <td>string</td>
    <td>
      ID исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getPrice()</td>
    <td>float</td>
    <td>
      Цена исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSize()</td>
    <td>float</td>
    <td>
      Обьем исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSide()</td>
    <td>string</td>
    <td>
      Направление ордера (buy, sell)
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getTime()</td>
    <td>DateTime</td>
    <td>
      Время исполнения
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::isBlockTrade()</td>
    <td>bool</td>
    <td>
      Является-ли сделка внебиржевой?
    </td>
  </tr>
</table>

<br />

### Market Data - Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/risk-limit)</b>
<p>Эндпоинт возвращает данные по лимиту рисков для указанного символа. <br />
Лимит риска — это мера управления рисками, позволяющая ограничить подверженность трейдеров риску.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class

$options = (new RiskLimitsRequest())
    ->setSymbol("BTCUSDT"); // Торговая пара
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse::class;

interface IRiskLimitsResponse
{
    public function getId(): string; // ID риска
    public function getSymbol(): string; // Торговая пара
    public function getLimit(): int; // Лимит на позицию
    public function getMaintainMargin(): float; // Маржа поддержки
    public function getInitialMargin(): float; // Начальная маржа
    public function getIsLowerRisk(): int; // Торговый инструмент имеет низкий риск?
    public function getMaxLeverage(): float; // Максимальное кредитное плечо
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getId()</td>
    <td>string</td>
    <td>
      ID риска
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getLimit()</td>
    <td>int</td>
    <td>
      Ограничение на позицию
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getMaintainMargin()</td>
    <td>float</td>
    <td>
      Поддерживающая маржа
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getInitialMargin()</td>
    <td>float</td>
    <td>
      Начальная маржа
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getIsLowerRisk()</td>
    <td>int</td>
    <td>
     Торговый инструмент имеет низкий риск?
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getMaxLeverage()</td>
    <td>float</td>
    <td>
      Максимальное кредитное плечо
    </td>
  </tr>
</table>

---
<br />

# Market Data - Ticker Info
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/ticker)</b>
<p>Эндпоинт возвращает данные по символу (последний снимок цены, лучшую цену покупки/продажи и объем торгов) за последние 24 часа.</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfo::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfoRequest::class

$options = (new TickerInfoRequest())
    ->setSymbol("APTUSDT"); // Торговая пара
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ITickerInfoRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Interfaces\ITickerInfoResponse::class;

interface ITickerInfoResponse
{    
    public function getSymbol(): string; // Торговая пара
    public function getBidPrice(): float; // Лучшая цена покупки
    public function getAskPrice(): float; // Лучшая цена продажи
    public function getLastPrice(): float; // Цена последней транзакции
    public function getLastTickDirection(): string; // Направление последнего изменения цены
    public function getPrevPrice24h(): float; // Цена 24 часа назад
    public function getPrice24hPcnt(): float; // Изменение цены за 24 часа, в процентах
    public function getHighPrice24h(): float; // Максимальная цена за 24 часа
    public function getLowPrice24h(): float; // Минимальная цена за 24 часа
    public function getPrevPrice1h(): float; // Рыночная цена инструмента час назад
    public function getMarkPrice(): float; // Цена маркировки (ликвидация происходит по этому показателю)
    public function getIndexPrice(): float; // Цена межбиржевого индекса
    public function getOpenInterests(): float; // Открытий интерес по торговому инструменту
    public function getTurnover24h(): float; // Оборот за 24 часа
    public function getVolume24h(): float; // Совокупный обьем за 24 часа
    public function getFundingRate(): float; // Ставка финансирования
    public function getNextFundingTime(): \DateTime; // Время следующего списания ставки финансирования
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getBidPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена покупки
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getAskPrice()</td>
    <td>float</td>
    <td>
      Лучшая цена покупки
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getLastPrice()</td>
    <td>float</td>
    <td>
      Цена последней транзакции
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getLastTickDirection()</td>
    <td>string</td>
    <td>
      Направление последнего изменения цены
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getPrevPrice24h()</td>
    <td>float</td>
    <td>
       Цена 24 часа назад
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getPrice24hPcnt()</td>
    <td>float</td>
    <td>
      Изменение цены за 24 часа, в процентах
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getHighPrice24h()</td>
    <td>float</td>
    <td>
       Максимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getLowPrice24h()</td>
    <td>float</td>
    <td>
      Минимальная цена за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getPrevPrice1h()</td>
    <td>float</td>
    <td>
      Рыночная цена инструмента час назад
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getMarkPrice()</td>
    <td>float</td>
    <td>
      Цена маркировки (ликвидация происходит по этому показателю)
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getIndexPrice()</td>
    <td>float</td>
    <td>
      Цена межбиржевого индекса
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getOpenInterests()</td>
    <td>float</td>
    <td>
      Открытий интерес по торговому инструменту
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getTurnover24h()</td>
    <td>float</td>
    <td>
      Оборот за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getVolume24h()</td>
    <td>float</td>
    <td>
      Совокупный обьем за 24 часа
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getFundingRate()</td>
    <td>float</td>
    <td>
      Ставка финансирования
    </td>
  </tr>
  <tr>
    <td>ITickerInfoResponse::getNextFundingTime()</td>
    <td>DateTime</td>
    <td>
     Время следующего списания ставки финансирования
    </td>
  </tr>
</table>

---

<br />

### Contract - Account - Get Trading Fee Rate
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Эндпоинт возвращает данные по ставке торговой комиссии для ВСЕХ символов</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateRequestInterface::setSymbol(string $symbol): self</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getTakerFeeRate(): float; // Комиссия тэйкера (покупателя)
    public function getMakerFeeRate(): float; // Комиссия мэйкера (продавца)
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Торговая пара
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия тэйкера (покупателя)
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия мэйкера (продавца)
    </td>
  </tr>
</table>

---

<br />

# Contract - Account - Wallet Balance
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/wallet)</b>
<p>Эндпоинт возвращает баланс деривативного кошелька, информацию об активах в каждой валюте и информацию о уровне риска счета. <br />
По умолчанию информация о валюте с активами или обязательствами, равными 0, не возвращается.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\WalletBalance::class 
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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
<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\WalletBalance\Interfaces\IWalletBalanceResponseInterface;

interface IWalletBalanceResponseInterface
{
    public function getCoin(): string; // Токен
    public function getEquity(): float; // Общий капитал
    public function getWalletBalance(): float; // Баланс кошелька
    public function getPositionMargin(): float; // Маржа позиции
    public function getAvailableBalance(): float; // Доступный баланс
    public function getOrderMargin(): float; // Предварительно занятая маржа
    public function getOccClosingFee(): float; // Комиссия за закрытие позиции.
    public function getOccFundingFee(): float; // Комиссия за предварительное финансирование
    public function getUnrealisedPnl(): float; // Нереализованный прибыль и убыток
    public function getCumRealisedPnl(): float; // Совокупный реализованный PnL (за все время)
    public function getGivenCash(): float;
    public function getServiceCash(): float;
    public function getAccountIM(): string; // USDC начальная маржа
    public function getAccountMM(): string; // USDC поддерживающая маржа
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCoin()</td>
    <td>string</td>
    <td>Токен</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getEquity()</td>
    <td>float</td>
    <td> Общий капитал</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getWalletBalance()</td>
    <td>float</td>
    <td>Баланс кошелька</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getPositionMargin()</td>
    <td>float</td>
    <td>Маржа позиции</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAvailableBalance()</td>
    <td>float</td>
    <td>Доступный баланс</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOrderMargin()</td>
    <td>float</td>
    <td>Предварительно занятая маржа</td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccClosingFee()</td>
    <td>float</td>
    <td>
        Комиссия за закрытие позиции. <br />
        Формула: комиссия за открытие + ожидаемая максимальная комиссия за закрытие.
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getOccFundingFee()</td>
    <td>float</td>
    <td>
      Комиссия за предварительное финансирование
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getUnrealisedPnl()</td>
    <td>float</td>
    <td>
      Нереализованный прибыль и убыток
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getCumRealisedPnl()</td>
    <td>float</td>
    <td>
      Совокупный реализованный PnL (за все время)
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
      USDC начальная маржа
    </td>
  </tr>
  <tr>
    <td>IWalletBalanceResponseInterface::getAccountMM()</td>
    <td>string</td>
    <td>
      USDC поддерживающая маржа
    </td>
  </tr>
</table>

---

<br />

# Contract - Account - Order - Place Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

interface IPlaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setSide(string $side): self; // 'Buy' or 'Sell'
    public function setOrderType(string $orderType): self; // 'Market' or 'Limit'
    public function setQty(float $quantity): self; // Количество
    public function setTimeInForce(string $timeInForce): self; // Режим исполнения заказа. Возможные значения см. в официальной документации.
    public function setPrice(float $price): self; // Цена лимитного ордера. Оставьте пустым, если orderType = Market.
    public function setTriggerDirection(int $triggerDirection): self; // Параметр условного ордера. Используется для определения ожидаемого направления условного ордера.
    public function setTriggerPrice(string $triggerPrice): self; // Параметр условного ордера - цена триггера.
    public function setTriggerBy(string $triggerBy): self; // Тип триггерной цены. По умолчанию: LastPrice.
    public function setPositionIdx(int $positionIdx): self; // Индекс позиции. Требуется, если включен режим хеджирования.
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID. Максимум 36 символов.
    public function setTakeProfit(float $takeProfit): self; // Цена тэйк профита
    public function setStopLoss(float $stopLoss): self; // Цена стоп-лосса 
    public function setTpTriggerBy(string $tpTriggerBy): self; //Тип цены, при которой активируется тейк-профит. По умолчанию: LastPrice
    public function setSlTriggerBy(string $slTriggerBy): self; // Тип цены, при которой активируется стоп-лосс. По умолчанию: LastPrice
    public function setReduceOnly(bool $reduceOnly): self; // true - означает, что ваша позиция может уменьшиться в размере только в случае срабатывания этого ордера
    public function setSmpType(string $smpType): self; // Тип исполнения SMP.
    public function setCloseOnTrigger(bool $closeOnTrigger): self; // Параметр закрытия ордера.
    public function setTpslMode(string $tpslMode): self; // TP/SL mode
    public function setTpLimitPrice(string $tpLimitPrice): self; // Цена лимитного ордера при срабатывании цены тейк-профита. Работает только тогда, когда tpslMode=Partial или tpOrderType=Limit.
    public function setSlLimitPrice(string $slLimitPrice): self; // Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда tpslMode=Partial и slOrderType=Limit.
    public function setTpOrderType(string $tpOrderType): self; // Тип ордера, который вызывает тейк-профит.
    public function setSlOrderType(string $slOrderType): self; // Тип ордера, который запускает стоп-лосс.
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSide(string $side)</td>
    <td><b>ДА</b></td>
    <td>'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderType(string $orderType)</td>
    <td><b>ДА</b></td>
    <td>'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setQty(float $quantity)</td>
    <td><b>ДА</b></td>
    <td>Количество</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTimeInForce(string $timeInForce)</td>
    <td><b>ДА</b></td>
    <td>Режим исполнения заказа. Возможные значения см. на странице <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">официальной документации</a></td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера. Оставьте пустым, если orderType = Market.</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerDirection(int $triggerDirection)</td>
    <td>NO</td>
    <td>
        Параметр условного ордера. Используется для определения ожидаемого направления условного ордера. <br />
        1: Срабатывает, когда рыночная цена поднимается до триггерной цены. <br />
        2: Срабатывает, когда рыночная цена падает до триггерной цены <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerPrice(string $triggerPrice)</td>
    <td>НЕТ</td>
    <td>
        Параметр условного ордера. <br />
        Если вы ожидаете, что цена вырастет и сработает ваш условный ордер, убедитесь, что: <br />
        триггерPrice > markPrice <br />
        В противном случае триггерPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
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
    <td>IPlaceOrderRequestInterface::setPositionIdx(int $positionIdx)</td>
    <td>НЕТ</td>
    <td>
        Индекс позиции. Требуется, если включен режим хеджирования. <br />
        Возможные значения: <br />
        - 0: Unidirectional mode (default) <br />
        - 1: Long <br />
        - 2: Short <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>
       Пользовательский ID заказа. Максимум 36 символов. <br />
       Поддерживаются комбинации цифр, букв (прописных и строчных), тире и подчеркиваний. <br />
       OrderLinkId можно использовать повторно после исполнения или отмены исходного заказа.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Цена тэйк-профита</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Цена стоп-лосса</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>
        Тип цены, при которой активируется тейк-профит. По умолчанию: Последняя цена <br />
        Возможные значения: <br />
        - LastPrice <br />
        - MarkPrice <br />
        - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>
        Тип цены, при которой активируется стоп-лосс. По умолчанию: Последняя цена <br />
        Возможные значения: <br />
        - LastPrice <br />
        - MarkPrice <br />
        - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setReduceOnly(bool $reduceOnly)</td>
    <td>НЕТ</td>
    <td>
       <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Описание параметра в официальной документации</a> <br />
       true означает, что ваша позиция может уменьшиться в размере только в случае срабатывания этого ордера. <br />
       Если «reduce_only» true, то тейк-профит/стоп-лосс установить невозможно.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSmpType(string $smpType)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Описание параметра в официальной документации</a> <br />
      Тип исполнения SMP.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>НЕТ</td>
    <td>
        <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">Что такое закрытие триггерным ордером?</a> <br />
        Параметр закрытия ордера. Это может только уменьшить ваше положение, но не увеличить его. <br />
        Если на момент срабатывания ордера на закрытие счета недостаточно доступного баланса, <br />
        тогда другие активные ордера аналогичных контрактов будут отменены или сокращены. <br />
        Его можно использовать, чтобы гарантировать, что ваш стоп-лосс уменьшит вашу позицию независимо от вашей текущей доступной маржи.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpslMode(string $tpslMode)</td>
    <td>НЕТ</td>
    <td>
      Режим TP/SL <br />
         - Full: вся позиция по TP/SL. Тогда tpOrderType или slOrderType должен быть Market. <br />
         - Partial: частичное выполнение TP/SL. Поддерживаются лимитные ордера TP/SL. Примечание. При создании ограничения TP/SL требуется параметр tpslMode.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpLimitPrice(string $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>
        Цена лимитного ордера при срабатывании цены тейк-профита. <br />
        Работает только в том случае, если <b>tpslMode=Partial</b> или <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlLimitPrice(string $slLimitPrice)</td>
    <td>НЕТ</td>
    <td>
        Цена лимитного ордера при срабатывании стоп-лосса. <br />
        Работает только тогда, когда <b>tpslMode=Partial</b> и <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpOrderType(string $tpOrderType)</td>
    <td>НЕТ</td>
    <td>
        Тип ордера, который вызывает тейк-профит. <br />
        Возможные значения: Market (- по умолчанию) или Limit. <br />
        Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlOrderType(string $slOrderType)</td>
    <td>НЕТ</td>
    <td>
        Тип ордера, который запускает стоп-лосс. <br />
        Возможные значения: Market (- по умолчанию) или Limit. <br />
        Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
</table>



<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

---

<br />

# Contract - Contract - Order - Cancel All Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>Этот эндпоинт позволяет отменить все открытые ордера.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setBaseCoin(string $baseCoin): self; // Закрыть все ордера по базовой монете 
    public function setSettleCoin(string $settleCoin): self; // Закрыть все ордера по расчетной монете
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязтельно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Закрыть все ордера по базовой монете</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Закрыть все ордера по расчетной монете</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Результатом является пронумерованный массив объектов, реализующих интерфейс ICancelAllOrder ResponseInterface.

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

---

<br />

### Contract - Contract - Order - Cancel Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>Этот эндпоинт позволяет отменить указанный открытый ордер.</p>

> Вы можете отменить указанный частично выполненный заказ.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торгова пара
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

---

<br />

### Contract - Contract - Order - Get Open Orders
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Эндпоинт возвращает данные об открытых или частично исполненных заказов в режиме реального времени.</p>

> Если не переданы ни orderId, ни orderLinkId, будет возвращено не более 500 открытых или частично исполненных ордеров.
> Записи сортируются по времени создания от самых новых к самым старым.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setBaseCoin(string $baseCoin): self; // Базовый токен
    public function setSettleCoin(string $settleCoin): self; // Расчетный токен
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    public function setOrderFilter(string $orderFilter): self; // Возможные значения: Order: активный ордер, StopOrder: условный ордер.
    public function setCursor(string $cursor): self; // Курсор следующей страницы
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Базовый токен</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Расчетный токен</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: Order: активный ордер, StopOrder: условный ордер.</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
    public function getSide(): string; // Направление. Buy,Sell
    public function getOrderType(): string; // Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    public function getPrice(): float; // Цена оредра
    public function getQty(): float; // Количество ордера
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Статус ордера
    public function getLastPriceOnCreated(): string; // Последняя цена когда был создан ордер
    public function getCreatedTime(): \DateTime; // Время создания ордера
    public function getUpdatedTime(): \DateTime; // Время обновления ордера
    public function getCancelType(): string; // Тип отмены
    public function getStopOrderType(): string; // Тип завершения ордера
    public function getTriggerDirection(): int; // 1: Рост, 2: Снижение
    public function getTriggerBy(): string; // Тип триггерной цены
    public function getTriggerPrice(): ?float; // Цена триггера
    public function getCumExecValue(): float; //  Суммарное значение исполненной позиции
    public function getCumExecFee(): float; // Совокупная торговая комиссия
    public function getCumExecQty(): float; // Совокупное выполненное количество
    public function getLeavesValue(): float; // Оставшаяся стоимость ожидает обмена
    public function getLeavesQty(): float; // Оставшееся количество ожидает продажи
    public function getTakeProfit(): float; // Цена тейк-профита
    public function getStopLoss(): float; // Цена стоп-лосса
    public function getTpslMode(): string; // TP/SL mode, Полный: вся позиция по TP/SL. Частичное: частичное положение TP/SL
    public function getTpLimitPrice(): float; // Цена лимитного ордера при срабатывании цены тейк-профита
    public function getSlLimitPrice(): float; // Цена лимитного ордера при срабатывании стоп-лосса
    public function getTpTriggerBy(): string; // Триггерный тип тейк-профита
    public function getSlTriggerBy(): string; // Цена лимитного ордера при срабатывании стоп-лосса
    public function isReduceOnly(): bool; // Только уменьшить. true означает уменьшение размера позиции
    public function isCloseOnTrigger(): bool; 
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Направление. Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Тип ордера. Market,Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Цена ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Количество ордера
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
        Последняя цена при создании заказа
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Время создания ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Время обновления ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Тип отмены ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
       Тип завершения ордера
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        1: рост, 2: снижение
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        Тип триггерной цены
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Триггерная цена
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Суммарное значение исполненной позиции
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Совокупная торговая комиссия
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Совокупное выполненное количество
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        Оставшаяся стоимость ожидает обмена
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        Оставшееся количество ожидает продажи
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Цена тейк-профита
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Цена стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL режим, Full: вся позиция по TP/SL. Partial: частичная позиция TP/SL
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        Цена лимитного ордера при срабатывании стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        true означает уменьшение размера позиции
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Закрытие по триггеру
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
        Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        Идентификатор заказа контрагента, который инициирует выполнение этого SMP.
    </td>
  </tr>
</table>

---

<br />

# Contract - Contract - Order - Get Order List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>Список ордеров</p>

> Since order creation/cancellation is asynchronous, the data returned from this endpoint may be delayed.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    public function setOrderStatus(string $orderStatus): self; // Статус заказа. Возращает все ордера по определенному статусу
    public function setOrderFilter(string $orderFilter): self; // Возможные значения: Order: активный ордер, StopOrder: условный ордер.
    public function setLimit(int $limit): self; // Ограничение размера данных на странице. [1, 50]. По умолчанию: 20
    public function setCursor(string $cursor): self; // Курсор следующей страницы
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td> Торговая пара </td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderStatus(string $orderStatus)</td>
    <td>НЕТ</td>
    <td>Статус заказа. Вернуть все заказы, если параметр не был передан</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>НЕТ</td>
    <td>Возможные значения: <b>Order</b>: активный ордер, <b>StopOrder</b>: условный ордер.</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setLimit(int $limit)</td>
    <td>НЕТ</td>
    <td>Ограничение размера данных на странице. [1, 50]. По умолчанию: 20</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setCursor(string $cursor)</td>
    <td>НЕТ</td>
    <td>Курсор следующей страницы</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
    public function getSide(): string; // Buy,Sell
    public function getOrderType(): string; // Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    public function getPrice(): float; // Цена ордера
    public function getQty(): float; // Количество ордера
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Статус ордера
    public function getLastPriceOnCreated(): string; // Цена последней сделки при размещении ордера
    public function getCreatedTime(): \DateTime; // Время создания оредра
    public function getUpdatedTime(): \DateTime; // Время обновления ордера
    public function getCancelType(): string; // Тип отмены
    public function getStopOrderType(): string; // Тип завершения ордера
    public function getTriggerDirection(): int; // Направление триггера. 1: подъем, 2: падение
    public function getTriggerBy(): string; // Тип триггерной цены
    public function getTriggerPrice(): ?float; // Триггерная цена
    public function getCumExecValue(): float; // Совокупная стоимость исполненного ордера
    public function getCumExecFee(): float; // Совокупная комиссия за исполненную торговлю
    public function getCumExecQty(): float; // Совокупное количество выполненных заказов
    public function getLeavesValue(): float; // Не исполненная оценочная стоимость
    public function getLeavesQty(): float; // Не исполненное количество
    public function getTakeProfit(): float; // Цена тэйк-профита
    public function getStopLoss(): float; // Цена стоп-лосса
    public function getTpslMode(): string; // Режим TP/SL, Full: вся позиция по TP/SL. Partial: частичное положение TP/SL
    public function getTpLimitPrice(): float; // Цена лимитного ордера при срабатывании цены тейк-профита
    public function getSlLimitPrice(): float; // Цена лимитного ордера при срабатывании стоп-лосса
    public function getTpTriggerBy(): string; // Тип цены для активации тейк-профита
    public function getSlTriggerBy(): string; // Тип цены для срабатывания стоп-лосса
    public function isReduceOnly(): bool; // Reduce only.true означает уменьшение размера позиции
    public function isCloseOnTrigger(): bool; //Закрытие по триггеру
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    public function getSmpOrderId(): string; // Идентификатор заказа контрагента, который запускает выполнение этого SMP. Идентификатор заказа контрагента, который запускает выполнение этого SMP.
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
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
       Тип ордера. Market, Limit. Для ордера TP/SL это означает тип ордера после его срабатывания.
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Цена ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Количество ордера
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
       Последняя цена при размещении ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Время создания ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Время обновления ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Тип отмены
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
       Тип завершения ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        Направление триггера. 1: подъем, 2: падение
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
       Тип триггерной цены
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Триггерная цена
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Совокупная стоимость исполненного ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Совокупная комиссия за исполненную торговлю
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Совокупное количество выполненных заказов
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        Неисполненная стоимость ордера
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        Не исполненное оставшееся количество
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Цена тейк-профита
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
       Цена стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        Режим TP/SL, Full: вся позиция по TP/SL. Частичное: частичное положение TP/SL
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        Тип цены для срабатывания стоп-лосса
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true означает уменьшение размера позиции
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Закрытие по триггеру
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
        Smp group ID. Если у uid нет группы, по умолчанию он равен 0.
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        Идентификатор заказа контрагента, который инициирует выполнение этого SMP.
    </td>
  </tr>
</table>

---

<br />

### Contract - Contract - Order - Replace Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Модификация ордера</p>

> Вы можете изменить открытые или частично исполненные ордера.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    public function setPrice(float $price): self; // Новая цена оредра
    public function setQty(float $qty): self; // Новое количество ордера
    public function setTriggerPrice(float $triggerPrice): self; // Установка/изменение триггерной цены
    public function setTakeProfit(float $takeProfit): self; // Установка/изменение тейк-профита
    public function setStopLoss(float $stopLoss): self; // Установка/изменение стоп-лосса
    public function setTpTriggerBy(string $tpTriggerBy): self; // Тип цены, по которой активируется тейк-профит. При установке тейк-профита этот параметр обязателен, если для ордера нет начального значения.
    public function setSlTriggerBy(string $slTriggerBy): self; // Тип цены, по которому активируется стоп-лосс. При установке стоп-лосса этот параметр обязателен, если для ордера нет начального значения.
    public function setTriggerBy(string $triggerBy): self; // Тип триггерной цены. LastPrice, IndexPrice, MarkPrice, LastPrice
    public function setTpLimitPrice(float $tpLimitPrice): self; // Цена лимитного ордера при срабатывании тейк-профита. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Новая цена ордера </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setQty(float $qty)</td>
    <td>НЕТ</td>
    <td>
      Новое количество ордера
    </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerPrice(float $triggerPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменение триггерной цены</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Установка/изменение тейк-профита</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Установка/изменение стоп-лосса</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>Тип цены, по которой активируется тейк-профит. При установке тейк-профита этот параметр обязателен, если для ордера нет начального значения. </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>Тип цены, по которому активируется стоп-лосс. При установке стоп-лосса этот параметр обязателен, если для ордера нет начального значения.</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>Тип триггерной цены. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера при срабатывании тейк-профита. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string; // Пользовательский ID ордера
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Тип</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderId()</td>
     <td>string</td>
     <td>Order ID</td>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>Пользовательский идентификатор ордера</td>
   </tr>
</table>

---

<br />

### Contract - Position - Get Closed PnL
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/closepnl)</b>

<p>Запрос информации о закрытых позициях с данными о прибылях и убытках пользователя.</p>

> Результат сортируется по createdAt в порядке убывания.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setStartTime(int $timestamp): self; // Таймштамп начиная с которого следует получить записи
    public function setEndTime(int $timestamp): self; // Таймштамп до которого следует получить записи
    public function setLimit(int $limit): self; // Лимит записей на запрос
    public function setCursor(string $cursor): self; // Курсор следующей страницы
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setStartTime(int $timestamp)</td>
     <td>НЕТ</td>
     <td>Нижний предел даты, начиная с которой следует вести записи</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setEndTime(int $timestamp)</td>
     <td>НЕТ</td>
     <td>Верхний предел даты, начиная с которой следует вести учет</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setLimit(int $limit)</td>
     <td>НЕТ</td>
     <td>Лимит записей на запрос</td>
   </tr>
   <tr>
     <td>IGetClosedPnLRequestInterface::setCursor(string $cursor)</td>
     <td>НЕТ</td>
     <td>Курсор следующей страницы</td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetClosedPnL\Interfaces;

interface IGetClosedPnLResponseInterface
{
    public function getSymbol(): string; // Торговая пара
    public function getOrderId(): string; // order ID
    public function getSide(): string; // Направление ордера
    public function getQty(): float; // Обьем ордера
    public function getLeverage(): float; // Кредитное плечо
    public function getOrderPrice(): float; // Цена ордера
    public function getOrderType(): string; // Тип оредра. Market,Limit
    public function getExecType(): string; // Тип исполнения
    public function getClosedSize(): float; // Закрытый размер
    public function getCumEntryValue(): float; // Накопленное значение позиции входа
    public function getAvgEntryPrice(): float; // Средняя цена входа
    public function getCumExitValue(): float; // Накопленное значение позиции выхода
    public function getAvgExitPrice(): float; // Средняя цена выхода
    public function getClosedPnl(): float; // Закрытый PnL
    public function getFillCount(): int; // Количество исполнений в одном ордере
    public function getCreatedAt(): \DateTime; // Время создания
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
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getSide()</td>
     <td>string</td>
     <td>Направление ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getQty()</td>
     <td>float</td>
     <td>Обьем ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Кредитное плечо</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Цена ордера</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getExecType()</td>
     <td>string</td>
     <td>Тип исполнения</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td>Закрытый размер</td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции входа </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Средняя цена входа </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции выхода </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Средняя цена выхода </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Закрытый PnL </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> Количество исполнений в одном ордере </td>
   </tr>
   <tr>
     <td>IGetClosedPnLResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td>Время создания ордера</td>
   </tr>
</table>

---

<br />

### Contract - Position - Get Execution List
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/execution-list)</b>
<p>Список исполненных ордеров пользователя, отсортированный по времени исполнения в порядке убывания. Поддерживает бессрочные валютные пары USDT</p>

> У пользователя может быть несколько исполнений в одном ордере.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setStartTime(int $timestamp): self; // Таймштамп, начиная с которого следует получить записи
     public function setEndTime(int $timestamp): self; // Таймштамп, до которого следует получить записи
     public function setLimit(int $limit): self; // Лимит записей на запрос
     public function setCursor(string $cursor): self; // Курсор следующей страницы
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setStartTime(int $startTime)</td>
     <td>НЕТ</td>
     <td> Таймштамп, начиная с которого следует получить записи</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setEndTime(int $endTime)</td>
     <td>НЕТ</td>
     <td>Таймштамп, до которого следует получить записи</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setLimit(int $limit)</td>
     <td>НЕТ</td>
     <td>Лимит записей на запрос</td>
   </tr>
   <tr>
     <td>IGetExecutionListRequestInterface::setCursor(string $cursor)</td>
     <td>НЕТ</td>
     <td>Курсор следующей страницы</td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\GetExecutionList\Interfaces;

interface IGetExecutionListResponseInterface
{
     public function getSymbol(): string; // Торговая пара
     public function getOrderId(): string; // order ID
     public function getSide(): string; // Направление ордера
     public function getQty(): float; // Обьем ордера
     public function getLeverage(): float; // Кредитное плечо
     public function getOrderPrice(): float; // Цена ордера
     public function getOrderType(): string; // Market,Limit
     public function getExecType(): string; // Тип исполнения
     public function getClosedSize(): float; // Закрытый размер
     public function getCumEntryValue(): float; // Накопленное значение позиции входа
     public function getAvgEntryPrice(): float; // Средняя цена входа
     public function getCumExitValue(): float; // Накопленное значение позиции выхода
     public function getAvgExitPrice(): float; // Средняя цена выхода
     public function getClosedPnl(): float; // Закрытый PnL
     public function getFillCount(): int; // Количество исполнений в одном ордере
     public function getCreatedAt(): \DateTime; // Время создания
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
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getOrderId()</td>
     <td>string</td>
     <td>order ID</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getSide()</td>
     <td>string</td>
     <td>Направление ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getQty()</td>
     <td>float</td>
     <td>Обьем ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getLeverage()</td>
     <td>float</td>
     <td>Кредитное плечо</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getOrderPrice()</td>
     <td>float</td>
     <td>Цена ордера</td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getExecType()</td>
     <td>string</td>
     <td> Тип исполнения </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getClosedSize()</td>
     <td>float</td>
     <td> Закрытый размер </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCumEntryValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции входа </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getAvgEntryPrice()</td>
     <td>float</td>
     <td> Средняя цена входа </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCumExitValue()</td>
     <td>float</td>
     <td> Накопленное значение позиции выхода </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getAvgExitPrice()</td>
     <td>float</td>
     <td> Средняя цена выхода </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getClosedPnl()</td>
     <td>float</td>
     <td> Закрытый PnL </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getFillCount()</td>
     <td>float</td>
     <td> Количество исполнений в одном ордере </td>
   </tr>
   <tr>
     <td>IGetExecutionListResponseInterface::getCreatedAt()</td>
     <td>DateTime</td>
     <td> Время создания </td>
   </tr>
</table>

---

<br />

### Contract - Position - My Position
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Получение списка открытых позиций пользователя</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setSettleCoin(string $symbol): self; // Расчетная монета
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSymbol(string $symbol)</td>
     <td>НЕТ</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSettleCoin(string $symbol)</td>
     <td>НЕТ</td>
     <td>Расчетный токен</td>
   </tr>
</table>

<p align="center" width="100%"><b>Структура ответа</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
     public function getSymbol(): string; // Торговая пара
     public function getSide(): string; // Направление. Buy, Sell. Возврат None, когда нулевое положение одностороннего режима
     public function getSize(): float; // Размер позиции
     public function getEntryPrice(): float; // Цена входа
     public function getLeverage(): float; // Кредитное плечо
     public function getPositionValue(): float; // Значение позиции
     public function getPositionIdx(): int; // Индекс позиции
     public function getRiskId(): int; // ID лимита риска
     public function getRiskLimitValue(): string; // Значение лимита позиции, соответствующее идентификатору риска
     public function getTradeMode(): int; // 0: cross margin mode. 1: isolated margin mode
     public function getAutoAddMargin(): int; // 0: false. 1: true
     public function getPositionBalance(): float; // Маржа позиции
     public function getLiqPrice(): float; // Ориентировочная цена ликвидации. Он возвращает значение только тогда, когда minPrice < liqPrice < maxPrice
     public function getBustPrice(): float; // Ориентировочная цена ликвидации
     public function getTpSlMode(): string; // Depreciated, всегда "Full"
     public function getTakeProfit(): float; // Цена тейк-профита
     public function getStopLoss(): float; // Цена стоп-лосса
     public function getCreatedTime(): \DateTime; // Время создания позиции
     public function getUpdatedTime(): \DateTime; // Время обновления позиции
     public function getTrailingStop(): string; // Трейлинг-стоп
     public function getActivePrice(): float; // Активация цены трейлинг-стопа
     public function getMarkPrice(): float; // Маркировочная цена в реальном времени
     public function getUnrealizedPnl(): float; // нереализованный PNL
     public function getCumRealisedPnl(): float; //совокупный реализованный PNL
     public function getPositionMM(): float; // Маржа поддержания позиции
     public function getPositionIM(): float; // Начальная маржа позиции
     public function getPositionStatus(): string; // Статус позиции
     public function getSessionAvgPrice(): float; // Расчетная цена
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
     <th style="width: 20%; text-align: center">Метод</th>
     <th style="width: 20%; text-align: center">Тип</th>
     <th style="width: 60%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSide()</td>
     <td>string</td>
     <td> Side. Buy, Sell. Возврат None, когда нулевое положение одностороннего режима</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSize()</td>
     <td>float</td>
     <td> Размер позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getEntryPrice()</td>
     <td>float</td>
     <td> Цена входа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLeverage()</td>
     <td>float</td>
     <td> Кредитое плечо </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionValue()</td>
     <td>float</td>
     <td> Значение позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIdx()</td>
     <td>int</td>
     <td> Индекс позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskId()</td>
     <td>int</td>
     <td> ID риска </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskLimitValue()</td>
     <td>string</td>
     <td> Значение лимита позиции, соответствующее идентификатору риска </td>
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
     <td> Маржа позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLiqPrice()</td>
     <td>float</td>
     <td>Ориентировочная цена ликвидации. Он возвращает значение только тогда, когда minPrice < liqPrice < maxPrice</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getBustPrice()</td>
     <td>float</td>
     <td>Ориентировочная цена ликвидации</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTpSlMode()</td>
     <td>string</td>
     <td>всегда "Full" </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTakeProfit()</td>
     <td>float</td>
     <td>Цена тейк-профита</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getStopLoss()</td>
     <td>float</td>
     <td>Цена стоп-лоса</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCreatedTime()</td>
     <td>DateTime</td>
     <td>Время создания позиции</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUpdatedTime()</td>
     <td>DateTime</td>
     <td>Время обновления позиции</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTrailingStop()</td>
     <td>string</td>
     <td>Трейлинг стоп</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getActivePrice()</td>
     <td>float</td>
     <td>Активация цены трейлинг-стопа</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getMarkPrice()</td>
     <td>float</td>
     <td>Маркировочная цена в реальном времени</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUnrealisedPnl()</td>
     <td>float</td>
     <td> нереализованный PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCumRealisedPnl()</td>
     <td>float</td>
     <td> совокупный реализованный PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionMM()</td>
     <td>float</td>
     <td> Поддерживающая маржа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIM()</td>
     <td>float</td>
     <td> Начальная маржа </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionStatus()</td>
     <td>string</td>
     <td> Статус позиции </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSessionAvgPrice()</td>
     <td>float</td>
     <td> Расчетная цена </td>
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

##### Contract - Position - Set Auto Add Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Включить/выключить автоматическое добавление маржи позиции. Чтобы понять больше, пожалуйста, прочитайте <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target="_blank">здесь</a></p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setSide(string $side): self; // Side. Buy,Sell
     public function setAutoAddMargin(int $autoAddMargin): self; // Включить/выключить автоматическое добавление маржи. 0: off. 1: on
     public function setPositionIdx(int $positionIdx): self; // Индекс позиции
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSide(string $side)</td>
     <td><b>ДА</b></td>
     <td> Side. Buy,Sell </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setAutoAddMargin(int $autoAddMargin)</td>
     <td><b>ДА</b></td>
     <td> Включить/выключить автоматическое добавление маржи. 0: off. 1: on </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>ДА</b></td>
     <td> Индекс позиции </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа.

---

<br />

### Contract - Position - Set Leverage
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Установить кредитное плечо позции</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setBuyLeverage(float $buyLeverage): self; // (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage
     public function setSellLeverage(float $sellLeverage): self; // (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>ДА</b></td>
     <td> (0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>ДА</b></td>
     <td>(0, максимальное кредитное плечо соответствующего лимита риска]. Для одностороннего режима убедитесь, что buyLeverage=sellLeverage</td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

<br />

### Contract - Position - Set Risk Limit
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit)</b>
<p>Лимит риска будет ограничивать максимальную сумму позиции, которую вы можете удерживать при различных маржинальных требованиях. <br />
Если вы хотите удерживать позицию большего размера, вам потребуется больше маржи. <br />
Этот запрос может установить лимит риска для одной позиции. Если при размещении ордера превышен текущий лимит риска, он будет отклонен.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setRiskId(int $riskId): self; // ID риска
     public function setPositionIdx(int $positionIdx): self; // Используется для идентификации позиций в различных режимах позиционирования.

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
     <th style="width: 45%; text-align: center">Метож</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setRiskId(int $riskId)</td>
     <td><b>YES</b></td>
     <td> ID риска </td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Используется для идентификации позиций в различных режимах позиционирования. Для режима хеджирования этот параметр является обязательным.
            0: односторонний режим
            1: Режим хеджирования Buy side
            2: Режим хеджирования Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

<br />

### Contract - Position - Set Trading Stop
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop)</b>

<p>Запрос устанавливает значение тейк-профита, стоп-лоса или трейлинга</p>

> Передача этих параметров создаст внутри системы условные ордера.

> Система отменит эти ордера, если позиция будет закрыта, и скорректирует количество в соответствии с размером открытой позиции.

> Поддержка бессрочных USDT и USDC Perpetual. Примечание: USDC Perpetual не поддерживает частичный режим TP/SL.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setTakeProfit(float $takeProfit): self; // Не может быть меньше 0, 0 означает отмену Take Profit. Частичный TP/SL не может быть отменен установкой 0
     public function setStopLoss(float $stopLoss): self; // Не может быть меньше 0, 0 означает отмену Stop Loss. Частичный TP/SL не может быть отменен установкой 0
     public function setTpslMode(string $tpslMode): self; // TP/SL mode
     public function setTpSize(float $tpSize): self; // Размер тейк-профита. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны
     public function setSlSize(float $slSize): self; // Размер стоп-лосса. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны
     public function setTpTriggerBy(string $tpTriggerBy): self; // Тип триггерной цены тейк-профита. по умолчанию: LastPrice
     public function setSlTriggerBy(string $slTriggerBy): self; // Тип цены срабатывания стоп-лосса. по умолчанию: LastPrice
     public function setTrailingStop(float $trailingStop): self; // Не может быть меньше 0, 0 означает отмену Trailing Stop
     public function setActivePrice(float $activePrice): self; // Цена триггера трейлинг-стопа. Трейлинг-стоп сработает только при достижении этой цены.
     public function setTpLimitPrice(float $tpLimitPrice): self; // Цена лимитного ордера при срабатывании цены тейк-профита. Работает только тогда, когда tpslMode=Partial и tpOrderType=Limit.
     public function setSlLimitPrice(float $slLimitPrice): self; // Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда tpslMode=Partial и slOrderType=Limit.
     public function setTpOrderType(string $tpOrderType): self; // Тип ордера, при котором срабатывает тейк-профит. Рынок (по умолчанию), Лимит. Для tpslMode=Full поддерживается только tpOrderType=Market.
     public function setSlOrderType(string $slOrderType): self; // Тип ордера при срабатывании тейк-профита
     public function setPositionIdx(int $positionIdx): self; // Используется для идентификации позиций в различных режимах позиции. Для режима хеджирования этот параметр является обязательным.

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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTakeProfit(float $takeProfit)</td>
     <td>НЕТ</td>
     <td>Не может быть меньше 0, 0 означает отмену Take Profit. Частичный TP/SL не может быть отменен установкой 0</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setStopLoss(float $stopLoss)</td>
     <td>НЕТ</td>
     <td> Не может быть меньше 0, 0 означает отмену Stop Loss. Частичный TP/SL не может быть отменен установкой 0 </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpslMode(string $tpslMode)</td>
     <td>НЕТ</td>
     <td>TP/SL mode</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpSize(float $tpSize)</td>
     <td>НЕТ</td>
     <td>Размер тейк-профита. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlSize(float $slSize)</td>
     <td>НЕТ</td>
     <td>Размер стоп-лосса. Действует только в частичном режиме TP/SL. Примечание: значения tpSize и slSize должны быть равны</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
     <td>НЕТ</td>
     <td>Тип триггерной цены тейк-профита. по умолчанию: LastPrice</td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
     <td>НЕТ</td>
     <td> Тип цены срабатывания стоп-лосса. по умолчанию: LastPrice </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTrailingStop(float $trailingStop)</td>
     <td>НЕТ</td>
     <td> Не может быть меньше 0, 0 означает отмену Trailing Stop </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setActivePrice(float $activePrice)</td>
     <td>НЕТ</td>
     <td> Цена триггера трейлинг-стопа. Трейлинг-стоп сработает только при достижении этой цены. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
     <td>НЕТ</td>
     <td> Цена лимитного ордера при срабатывании цены тейк-профита. Работает только тогда, когда tpslMode=Partial и tpOrderType=Limit. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlLimitPrice(float $slLimitPrice)</td>
     <td>НЕТ</td>
     <td> Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда tpslMode=Partial и slOrderType=Limit. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setTpOrderType(string $tpOrderType)</td>
     <td>НЕТ</td>
     <td> Тип ордера, при котором срабатывает тейк-профит. Рынок (по умолчанию), Лимит. Для tpslMode=Full поддерживается только tpOrderType=Market. </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setSlOrderType(string $slOrderType)</td>
     <td>НЕТ</td>
     <td> Тип ордера при срабатывании тейк-профита </td>
   </tr>
   <tr>
     <td>ISetTradingStopRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td>НЕТ</td>
     <td> 
        Используется для идентификации позиций в различных режимах позиции. Для режима хеджирования этот параметр является обязательным.
        0: односторонний режим
        1: Режим хеджирования Buy side
        2: Режим хеджирования Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

<br />

### Contract - Position - Switch Cross Isolated Margin
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>Запрос изменяет режим маржи (Кросс или Изолированная)</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setTradeMode(int $tradeMode): self; // 0: cross margin. 1: isolated margin
     public function setBuyLeverage(float $buyLeverage): self; // Установка кредитного плеча направления покупки. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи.
     public function setSellLeverage(float $sellLeverage): self; // Установка кредитного плеча направления продажи. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи.
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setTradeMode(int $tradeMode)</td>
     <td><b>ДА</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>ДА</b></td>
     <td> Установка кредитного плеча направления покупки. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи. </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>ДА</b></td>
     <td> Установка кредитного плеча направления продажи. Убедитесь, что кредитное плечо покупки равно кредитному плечу продажи </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

<br />

### Contract - Position - Switch Position Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>Запрос поддерживает переключение режима позиции для бессрочных и обратных фьючерсов USDT. <br />
Если вы находитесь в одностороннем режиме, вы можете открыть только одну позицию на стороне покупки или продажи. <br />
Если вы находитесь в режиме хеджирования, вы можете одновременно открывать позиции на покупку и продажу.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Торговая пара
     public function setCoin(string $coin): self; // Токен
     public function setPositionMode(int $positionMode): self; // Режим позиции. 0: Merged Single. 3: Both Side
    
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setSymbol(string $symbol)</td>
     <td>НЕТ</td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setCoin(string $coin)</td>
     <td>НЕТ</td>
     <td> Токен </td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setPositionMode(int $positionMode)</td>
     <td><b>ДА</b></td>
     <td> Редим позиции. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<p align="center" width="100%"><b>Структура ответа</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---

<br />

##### Contract - Contract - Position - Switch TpSl Mode
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>Запрос устанавливает неявный режим tpsl для определенного торгового инструмента. 
Имеет смысл использовать если вы не передали «tpslMode» в ордере при размещении или в запросе на остановку торговли т.к в таком случае система установит tpslMode по умолчанию.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Обязательно</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setSymbol(string $symbol)</td>
     <td><b>ДА</b></td>
     <td>Торговая пара</td>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setTpSlMode(string $tpSlMode)</td>
     <td><b>ДА</b></td>
     <td> Full: установка TP/SL для полной позиции. Partial: установить TP/SL для части позиции </td>
   </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Эндпоинт возвращает пустой массив в качестве успешного ответа

---