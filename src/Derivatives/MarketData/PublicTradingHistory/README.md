# Market Data - Public Trading History
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/trade)</b>
<p>Endpoint returns data on the execution of trading orders</p>  

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

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

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class

$options = (new PublicTradingHistoryRequest())
    ->setSymbol("ETHUSDT") // Trading pair
    ->setLimit(25); // Quantity limit per result set
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
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryRequestInterface::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Quantity limit per result set</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class;

interface IPublicTradingHistoryResponse
{
    public function getExecId(): string; // Execution ID
    public function getSymbol(): string; // Trading pair
    public function getPrice(): float; // Execution price
    public function getSize(): float; // Execution volume
    public function getSide(): string; // Direction (buy, sell)
    public function getTime(): \DateTime; // Execution time
    public function isBlockTrade(): bool; // is OTC trade
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
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Тype</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getExecId()</td>
    <td>string</td>
    <td>
      Execution ID
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getPrice()</td>
    <td>float</td>
    <td>
      Execution price
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSize()</td>
    <td>float</td>
    <td>
      Execution volume
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getSide()</td>
    <td>string</td>
    <td>
      Direction (buy, sell)
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::getTime()</td>
    <td>DateTime</td>
    <td>
      Execution time
    </td>
  </tr>
  <tr>
    <td>IPublicTradingHistoryResponse::isBlockTrade()</td>
    <td>bool</td>
    <td>
      -
    </td>
  </tr>
</table>
