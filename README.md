# ByBitAPI - derivatives-trading package

**Дисклэймер: это неофициальный SDK от биржи ByBit.   
Поддержка функционала осуществляется только в пределах зоны отвественности кода и при возможности со стороны разработчика**

**Разработка интеграции еще не закончена, поэтому работоспособность (как полностью, так и отдельных компонентов) не гарантируется.**

## Установка

```sh 
composer require carpenstar/bybitapi-sdk-derivatives
```

## Экземпляр приложения

```php
use Carpenstar\ByBitAPI\BybitAPI;

$bybit = new BybitAPI(
    string $host, 
    string $apiKey, 
    string $secret
);

```

Информация об актуальных хостах содержатся на странице https://bybit-exchange.github.io/docs/v3/intro

Генерация ключа api и secret производится на странице: https://www.bybit.com/app/user/api-management

Для того чтобы сделать запрос к REST-апи биржи существует единая точка входа в приложении BybitAPI

```php
public function rest(
        string $endpointClassName, 
        ?IRequestInterface $parameters = null, 
        ?int $outputMode = EnumOutputMode::DEFAULT_MODE
        ): IResponseInterface
```

## Пример использования

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Tickers\Tickers;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Tickers\Options\TickersOptions;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$result = $bybit->rest(
    Tickers::class, 
    (new TickersOptions())->setSymbol('APTUSDT')
) // IResponseInterface
->getBody() // ICollectionInterface    
->fetch(); // Carpenstar\ByBitAPI\Spot\MarketData\Tickers\Dto\TickersDto::class
```
<br/>  

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
<br/>  

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