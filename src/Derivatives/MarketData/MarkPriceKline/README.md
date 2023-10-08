# Market Data - Mark Price Kline
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
