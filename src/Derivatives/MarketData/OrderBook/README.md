# Market Data - Order Book
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/orderbook)</b>
<p>Endpoint returns a list of orders to buy and sell perpetual contracts, organized and sorted by price level.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookPriceResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OrderBookRequest())->setSymbol('APTUSDT')->setLimit(5);

/** @var OrderBookResponse $result */
$result = $bybit->rest(OrderBook::class, $options)->getBody()->fetch();



echo "Update ID: " . $result->getUpdateId() . PHP_EOL;
echo "Symbol: " . $result->getSymbol() . PHP_EOL;
echo "Timestamp: " . $result->getTimestamp()->format("Y-m-d H:i:s") . PHP_EOL;
echo "BIDs:" . PHP_EOL;
/** @var OrderBookPriceResponse $bid */
foreach ($result->getBid()->all() as $bid) {
    echo " - Price: {$bid->getPrice()} Quantity: {$bid->getQuantity()}" . PHP_EOL;
}
echo "ASKs:" . PHP_EOL;
/** @var OrderBookPriceResponse $ask */
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

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class

$options = (new OrderBookRequest())
    ->setSymbol("ETHUSDT") // Trading pair
    ->setLimit(25); // Limit on the number of orders in one direction: limit = 50 (25 - bid + 25 - ask)
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::setLimit(int $limit): self</td>
    <td>NO</td>
    <td>Limit on the number of orders in one direction: limit = 50 (25 - bid + 25 - ask)</td>
  </tr>
</table>


<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class

interface IOrderBookResponse
{
    public function getSymbol(): string; // Trading pair
    public function getTimestamp(): \DateTime; // Execution time
    public function getUpdateId(): int; // update ID
    public function getBid(): ICollectionInterface; // IOrderBookPriceResponse[]
    public function getAsk(): ICollectionInterface; // IOrderBookPriceResponse[]
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class</b>
        </td>
      </tr>
    <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Response\OrderBookResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::getSymbol()</td>
    <td>float</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getTimestamp()</td>
    <td>DateTime</td>
    <td>Execution time</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getUpdateId()</td>
    <td>float</td>
    <td>update ID</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getBid()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>List of sell orders</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getAsk()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>List of buy orders</td>
  </tr>
</table>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookPriceResponse::class

interface IOrderBookPriceResponse
{
    public function getPrice(): float;
    public function getQuantity(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup>
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookPriceItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup>
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\OrderBookPriceItemResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getPrice()</td>
    <td>float</td>
    <td>Price</td>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getQuantity()</td>
    <td>float</td>
    <td>Volume</td>
  </tr>
</table>
