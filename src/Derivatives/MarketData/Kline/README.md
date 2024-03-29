# Market Data - Kline
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
