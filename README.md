# ByBitAPI - derivatives-trading package

**Дисклэймер: это неофициальный SDK для подключения бирже ByBit.   
Поддержка функционала осуществляется только в пределах зоны отвественности кода и при возможности со стороны разработчика**

**Разработка интеграции еще не закончена, поэтому работоспособность (как полностью, так и отдельных компонентов) не гарантируется.**

## Установка

```sh 
composer require carpenstar/bybitapi-sdk-derivatives
```

## Поддерживаемые эндпоинты:

### Market Data - Funding Rate History
https://bybit-exchange.github.io/docs/derivatives/public/funding-rate

#### Эндпоинт:
```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory::class
```
<details><summary>Параметры запроса:</summary>

```php
    new \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Options\FundingRateHistoryOptions();
    
    $options = (new FundingRateHistoryOptions())
        ->setSymbol("BTCUSDT") // Обязательный параметр. Строка с тикером торговой пары.
        ->setStart("2023-05-10 10:00:00") // Необязательный параметр. Строка даты/времени ОТ которого берется срез данных 
        ->setEnd("2023-05-10 11:00:00"); // Необязательный параметр. Строка даты/времени ДО которого берется срез данных
        ->setLimit(200) // Необязательный параметр. Ограничение возвращаемых записей на запрос
```
> **Warning**
> По умолчанию, запрос на эндпоинт `FundingRateHistory::class` возвращает 200 последних записей до текущего момента по определенному символу

> **Warning**
> При установке временных ограничений на выборку, обязательно следует указывать верхнюю и нижнюю границу при помощи `setStart(string $start)` и `setEnd(string $end)`.
> Иначе будет возвращена ошибка

</details>  

<details><summary>Структура ответа:</summary>

```php
    \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse::class

    interface FundingRateHistoryDto 
    {
        public function getSymbol(): string; // Символ торговой пары
        public function getFundingRate(): float; // Ставка финансирования
        public function getFundingRateTimestamp(): \DateTime // Время удержания ставки финансирования
    }
```
</details> 

<details><summary>Пример:</summary>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Dto\FundingRateHistoryDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Options\FundingRateHistoryOptions;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new FundingRateHistoryOptions())->setSymbol("BTCUSDT")->setLimit(3);

/** @var FundingRateHistoryDto[] $result */
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
</details>

---

### Market Data - Index Price Kline
https://bybit-exchange.github.io/docs/derivatives/public/index-kline

#### Эндпоинт:
```php
    \Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline::class
```
<details><summary>Параметры запроса:</summary>

```php
    \Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Options\IndexPriceKlineOptions::class
    
    $options = (new IndexPriceKlineOptions())
        ->setSymbol("BTCUSDT") // Обязательный параметр. Строка с тикером торговой пары.
        ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
        ->setStart("2023-05-10 10:00:00") // Обязательный параметр. Строка даты/времени ОТ которого берется срез данных 
        ->setEnd("2023-05-10 11:00:00"); // Обязательный параметр. Строка даты/времени ДО которого берется срез данных
        ->setLimit(200) // Необязательный параметр. Ограничение возвращаемых записей на запрос. По умолчанию 200
```
</details>

<details><summary>Структура ответа:</summary>

```php
    Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse::class
    
    interface IIndexPriceKlineResponse {
        public function getStart(): \DateTime; // Время тика
        public function getOpen(): float; // Цена открытия тика
        public function getHigh(): float; // Максимальная цена тика
        public function getLow(): float; // Минимальная цена тика
        public function getClose(): float; // Цена закрытия тика
    }
```
</details>

<details><summary>Пример:</summary>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Dto\IndexPriceKlineDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Options\IndexPriceKlineOptions;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new IndexPriceKlineOptions())
    ->setSymbol("ETHUSDT")
    ->setInterval(1)
    ->setStart('2023-05-01 10:00:00')
    ->setEnd('2023-05-08 10:00:05')
    ->setLimit(5);

/** @var IndexPriceKlineDto[] $result */
$result = $bybit->rest(IndexPriceKline::class, $options)->getBody()->all();

foreach ($result as $indexPriceKlineItem) {
    echo "Start: {$indexPriceKlineItem->getStart()->format('Y-m-d H:i:s')}" . PHP_EOL;
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
</details>

---

### Market Data - Instrument Info
https://bybit-exchange.github.io/docs/derivatives/public/instrument-info
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\InstrumentInfo;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto\InstrumentInfoDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Options\InstrumentInfoOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto\LeverageFilterItemDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto\PriceFilterItemDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\InstrumentInfo\Dto\LotSizeFilterItemDto;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new InstrumentInfoOptions())->setSymbol('BTCUSDT');

/** @var InstrumentInfoDto $instrumentInfo */
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
/** @var LeverageFilterItemDto $filterItem */
foreach ($instrumentInfo->getLeverageFilter()->all() as $filterItem)
{
    echo " - Minimal Leverage: {$filterItem->getMinLeverage()}" . PHP_EOL;
    echo " - Maximum Leverage: {$filterItem->getMaxLeverage()}" . PHP_EOL;
    echo " - Leverage Step: {$filterItem->getLeverageStep()}" . PHP_EOL;
}
echo "Price Filter Options:" . PHP_EOL;
/** @var PriceFilterItemDto $filterItem */
foreach ($instrumentInfo->getPriceFilter()->all() as $filterItem)
{
    echo " - Minimal Price: {$filterItem->getMinPrice()}" . PHP_EOL;
    echo " - Maximum Price: {$filterItem->getMinPrice()}" . PHP_EOL;
    echo " - Tick Size: {$filterItem->getTickSize()}" . PHP_EOL;
}
echo "Lot Size Filter Options:" . PHP_EOL;
/** @var LotSizeFilterItemDto $filterItem */
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

---

### Market Data - Kline
https://bybit-exchange.github.io/docs/derivatives/public/kline

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Options\KlineOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Dto\KlineDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new KlineOptions())
    ->setSymbol("BTCUSDT")
    ->setInterval(5)
    ->setStart("2023-05-01 00:00:00")
    ->setEnd("2023-05-05 00:00:00")
    ->setLimit(5);

$klineData = $bybit->rest(Kline::class, $options)->getBody()->all();

/** @var KlineDto $klineItem */
foreach ($klineData as $klineItem) {
    echo "Start: {$klineItem->getStart()->format('Y-m-d H:i:s')}" . PHP_EOL;
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

---

### Market Data - Mark Price Kline
https://bybit-exchange.github.io/docs/derivatives/public/mark-kline

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Options\MarkPriceKlineOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Dto\MarkPriceKlineDto;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new MarkPriceKlineOptions())
    ->setSymbol("APTUSDT")
    ->setInterval('1') // Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W 
    ->setStart('2023-05-08 10:00:00')
    ->setEnd('2023-05-08 15:00:00')
    ->setLimit(5);

$result = $bybit->rest(MarkPriceKline::class, $options)->getBody();

/**
 * @var MarkPriceKlineDto $markPrice
 */
foreach ($result->all() as $markPrice) {
    echo "Start: {$markPrice->getStart()->format("Y-m-d H:i:s")}" . PHP_EOL;
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

---

### Market Data - Open Interest
https://bybit-exchange.github.io/docs/derivatives/public/open-interest

```php 
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Dto\OpenInterestDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Options\OpenInterestOptions;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OpenInterestOptions())->setSymbol("ETHUSDT")->setInterval("1h")->setLimit(5);

/** @var OpenInterestDto[] $result */
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

---

### Market Data - Order Book
https://bybit-exchange.github.io/docs/derivatives/public/orderbook

```php 
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Options\OrderBookOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Dto\OrderBookDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Dto\OrderBookPriceDto;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OrderBookOptions())->setSymbol('APTUSDT')->setLimit(5);

/** @var OrderBookDto $result */
$result = $bybit->rest(OrderBook::class, $options)->getBody()->fetch();

echo "Update ID: " . $result->getUpdateId() . PHP_EOL;
echo "Symbol: " . $result->getSymbol() . PHP_EOL;
echo "Timestamp: " . $result->getTimestamp()->format("Y-m-d H:i:s") . PHP_EOL;
echo "BIDs:" . PHP_EOL;
/** @var OrderBookPriceDto $bid */
foreach ($result->getBid()->all() as $bid) {
    echo " - Price: {$bid->getPrice()} Quantity: {$bid->getQuantity()}" . PHP_EOL;
}
echo "ASKs:" . PHP_EOL;
/** @var OrderBookPriceDto $ask */
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

---

### Market Data - Public Trading History
https://bybit-exchange.github.io/docs/derivatives/public/trade
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Dto\PublicTradingHistoryDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Options\PublicTradingHistoryOptions;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new PublicTradingHistoryOptions())->setSymbol("BTCUSDT")->setLimit(3);

/** @var PublicTradingHistoryDto[] $result */
$result = $bybit->rest(PublicTradingHistory::class, $options)->getBody()->all();

foreach ($result as $historyItem) {
    echo "Exec ID: {$historyItem->getExecId()}" . PHP_EOL;
    echo "Symbol: {$historyItem->getSymbol()}" . PHP_EOL;
    echo "Price: {$historyItem->getPrice()}" . PHP_EOL;
    echo "Size: {$historyItem->getSize()}". PHP_EOL;
    echo "Side: {$historyItem->getSide()}" . PHP_EOL;
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

---

### Market Data - Risk Limit
https://bybit-exchange.github.io/docs/derivatives/public/risk-limit
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Options\RiskLimitsOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Dto\RiskLimitsDto;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new RiskLimitsOptions())->setSymbol("BTCUSDT");

/** @var RiskLimitsDto[] $result */
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

---

### Market Data - Ticker Info
https://bybit-exchange.github.io/docs/derivatives/public/ticker
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Options\TickerInfoOptions;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Dto\TickerInfoDto;
use Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\TickerInfo;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new TickerInfoOptions())
    ->setSymbol("APTUSDT");

$tickerInfo = $bybit->rest(TickerInfo::class, $options)->getBody()->fetch();

/** @var TickerInfoDto $tickerInfo */
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