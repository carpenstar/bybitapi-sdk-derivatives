### Market Data - Public Trading History
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/trade)</b>
<p>Endpoint returns data on the execution of trading orders</p>  

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\PublicTradingHistory::class // Endpoint classname
```
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

<p><b>Request parameters:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest::class

$options = (new PublicTradingHistoryRequest())
    ->setSymbol("ETHUSDT")
    ->setLimit(25);
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Request\PublicTradingHistoryRequest</b>
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
    <td>:: setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Quantity limit per result set</td>
  </tr>
</table>

<p><b>Response structure:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse::class;

interface IPublicTradingHistoryResponse
{
    public function getExecId(): string;
    public function getSymbol(): string;
    public function getPrice(): float;
    public function getSize(): float;
    public function getSide(): string;
    public function getTime(): \DateTime;
    public function isBlockTrade(): bool;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\PublicTradingHistory\Interfaces\IPublicTradingHistoryResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Тype</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: getExecId()</td>
    <td>string</td>
    <td>
      Execution ID
    </td>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>
      Execution price
    </td>
  </tr>
  <tr>
    <td>:: getSize()</td>
    <td>float</td>
    <td>
      Execution volume
    </td>
  </tr>
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>
      Direction (buy, sell)
    </td>
  </tr>
  <tr>
    <td>:: getTime()</td>
    <td>DateTime</td>
    <td>
      Execution time
    </td>
  </tr>
  <tr>
    <td>:: isBlockTrade()</td>
    <td>bool</td>
    <td>
      -
    </td>
  </tr>
</table>