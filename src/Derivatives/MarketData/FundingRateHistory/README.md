# Market Data - Funding Rate History
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
