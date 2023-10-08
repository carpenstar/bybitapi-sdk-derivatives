### Market Data - Mark Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Endpoint returns historical data at <b>MARKING price</b>.</p>
<p>Data is returned in groups depending on the requested interval. </p>
<p>Can be used to generate candlestick charts.</p>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new MarkPriceKlineRequest())
    ->setSymbol("APTUSDT")
    ->setInterval('1') // Kline interval. 1 3 5 15 30 60 120 240 360 720 D M W 
    ->setStart('2023-05-08 10:00:00')
    ->setEnd('2023-05-08 15:00:00')
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

<p><b>Request parameters:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest::class

$options = (new MarkPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Required parameter. Line with the ticker of the trading pair.
    ->setInterval(1) // Required parameter. Teak size. Possible values: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Required parameter. Timestamp from which the data slice is taken 
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()); // Required parameter. Timestamp BEFORE which the data slice is taken
    ->setLimit(200) // Optional parameter. Limit the records returned per query. Default 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>
      Tick size. <br />
      Possible values: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>
      Timestamp string from which the data slice is taken
    </td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td><b>YES</b></td>
    <td>
      Timestamp BEFORE which the data slice is taken
    </td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>NO</td>
    <td>
      Limit the records returned per query. Default: 200
    </td>
  </tr>
</table>


<p><b>Response structure:</b></p>

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
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: getStartTime()</td>
    <td>DateTime</td>
    <td>Tick start time</td>
  </tr>
  <tr>
    <td>:: getOpen()</td>
    <td>float</td>
    <td>Opening price</td>
  </tr>
  <tr>
    <td>:: getHigh()</td>
    <td>float</td>
    <td>Maximum price</td>
  </tr>
  <tr>
    <td>:: getLow()</td>
    <td>float</td>
    <td>Minimum price</td>
  </tr>
  <tr>
    <td>:: getClose()</td>
    <td>float</td>
    <td>Close price</td>
  </tr>
  <tr>
    <td>:: getVolume()</td>
    <td>float</td>
    <td>Volume</td>
  </tr>
</table>
