### Market Data - Ticker Info
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/ticker)</b>
<p>Endpoint returns symbol data (last price snapshot, best bid/ask price and trading volume) for the last 24 hours.</p>

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\TickerInfo\Request\TickerInfo::class // Endpoint classname
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

<p><b>Request parameters:</b></p>

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
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
</table>

<p><b>Response structure:</b></p>

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
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>:: getBidPrice()</td>
    <td>float</td>
    <td>
      Best selling price
    </td>
  </tr>
  <tr>
    <td>:: getAskPrice()</td>
    <td>float</td>
    <td>
      Best purchase price
    </td>
  </tr>
  <tr>
    <td>:: getLastPrice()</td>
    <td>float</td>
    <td>
      Last transaction price
    </td>
  </tr>
  <tr>
    <td>:: getLastTickDirection()</td>
    <td>string</td>
    <td>
      Direction of last price change
    </td>
  </tr>
  <tr>
    <td>:: getPrevPrice24h()</td>
    <td>float</td>
    <td>
      Price 24 hours ago
    </td>
  </tr>
  <tr>
    <td>:: getPrice24hPcnt()</td>
    <td>float</td>
    <td>
      Price change over the last 24 hours as a percentage
    </td>
  </tr>
  <tr>
    <td>:: getHighPrice24h()</td>
    <td>float</td>
    <td>
      Maximum price for 24 hours
    </td>
  </tr>
  <tr>
    <td>:: getLowPrice24h()</td>
    <td>float</td>
    <td>
      Minimum price for 24 hours
    </td>
  </tr>
  <tr>
    <td>:: getPrevPrice1h()</td>
    <td>float</td>
    <td>
      Hourly market price an hour ago
    </td>
  </tr>
  <tr>
    <td>:: getMarkPrice()</td>
    <td>float</td>
    <td>
      Marking price (liquidation occurs according to this indicator)
    </td>
  </tr>
  <tr>
    <td>:: getIndexPrice()</td>
    <td>float</td>
    <td>
      Index price
    </td>
  </tr>
  <tr>
    <td>:: getOpenInterests()</td>
    <td>float</td>
    <td>
      Open interest volume for a trading pair
    </td>
  </tr>
  <tr>
    <td>:: getTurnover24h()</td>
    <td>float</td>
    <td>
      Turnover in 24 hours
    </td>
  </tr>
  <tr>
    <td>:: getVolume24h()</td>
    <td>float</td>
    <td>
      Cumulative volume for 24 hours
    </td>
  </tr>
  <tr>
    <td>:: getFundingRate()</td>
    <td>float</td>
    <td>
      Funding rate
    </td>
  </tr>
  <tr>
    <td>:: getNextFundingTime()</td>
    <td>DateTime</td>
    <td>
      Time of next funding rate debit
    </td>
  </tr>
</table>