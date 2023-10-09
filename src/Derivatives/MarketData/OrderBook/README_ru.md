# Market Data - Order Book
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/orderbook)</b>
<p>Эндпоинт возвращает список ордеров на покупку и продажу бессрочных контрактов, организованный и отсортированный по уровню цен.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\OrderBook::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Request\OrderBookRequest::class

$options = (new OrderBookRequest())
    ->setSymbol("ETHUSDT") // Торговая пара
    ->setLimit(25); // Лимит на количество ордеров в одну сторону: лимит = 50 (25 - бид + 25 - аск)
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Лимит на количество ордеров в одну сторону: лимит = 50 (25 - бид + 25 - аск)</td>
  </tr>
</table>


<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OrderBook\Interfaces\IOrderBookResponse::class

interface IOrderBookResponse
{
    public function getSymbol(): string; // Торговая пара
    public function getTimestamp(): \DateTime; // Время исполнения запроса
    public function getUpdateId(): int; // ID обновления данных
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookResponse::getSymbol()</td>
    <td>float</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getUpdateId()</td>
    <td>float</td>
    <td>ID обновления данных</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getBid()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>Список ордеров на продажу</td>
  </tr>
  <tr>
    <td>IOrderBookResponse::getAsk()</td>
    <td>IOrderBookPriceResponse[]</td>
    <td>Список ордеров на покупку</td>
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getPrice()</td>
    <td>float</td>
    <td>Цена</td>
  </tr>
  <tr>
    <td>IOrderBookPriceItemResponse::getQuantity()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---