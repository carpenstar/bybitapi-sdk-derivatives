### Market Data - Open Interest
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Endpoint returns data about open interest for the specified symbol. <br />
<b>Open Interest is the total number of perpetual contract positions currently held on the platform.</b></p>

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class // Endpoint classname
```
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

<p><b>Request parameters:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class   

$options = (new OpenInterestRequest())
    ->setSymbol("ETHUSDT")
    ->setInterval("1h") 
    ->setLimit(5);
    ->setStartTime((new DateTime('2023-05-01 10:00:00'))->getTimestamp())
    ->setEndTime((new DateTime('2023-05-01 20:00:00'))->getTimestamp()); 
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest</b>
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
    <td>Trding pair</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>YES</b></td>
    <td>
      Tick size. <br />
      Possible values: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>:: setStartTime(int $startTime): self</td>
    <td><b>Yes</b></td>
    <td>Timestamp FROM which the data slice is taken </td>
  </tr>
  <tr>
    <td>:: setEndTime(string $end): self</td>
    <td><b>YES</b></td>
    <td>Timestamp BEFORE which the data slice is taken</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit the records returned per query. Default 200</td>
  </tr>
</table>

<p><b>Response structure:</b></p>

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