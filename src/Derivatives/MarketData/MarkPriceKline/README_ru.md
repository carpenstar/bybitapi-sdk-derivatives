# Market Data - Mark Price Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Эндпоинт возвращает исторические данные о цене <b>МАРКИРОВКИ</b>.</p>
<p>Данные возвращаются группами в зависимости от запрошенного интервала. </p>
<p>Может использоваться для создания свечных диаграмм.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Request\MarkPriceKlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Response\MarkPriceKlineResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new MarkPriceKlineRequest())
    ->setSymbol("APTUSDT")
    ->setInterval('1') // Интервал тика. 1 3 5 15 30 60 120 240 360 720 D M W 
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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest::class

$options = (new MarkPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Линия с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Обязательный параметр. Таймштамп ОТ которого будет взят срез данных
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()) // Обязательный параметр. Таймштамп ДО которого будет взят срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
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
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>
      Таймштамп ОТ которого будет взят срез данных
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>
      Таймштамп ДО которого будет взят срез данных
    </td>
  </tr>
  <tr>
    <td>IMarkPriceKline::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>
      Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
    </td>
  </tr>
</table>


<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class

interface IMarkPriceKline
{
    public function getStartTime(): \DateTime; // Время открытия тика
    public function getOpen(): float; // Цена открытия тика
    public function getHigh(): float; // Максимальная цена тика
    public function getLow(): float; // Минимальная цена тика
    public function getClose(): float; // Цена закрытия тика
    public function getVolume(): float; // Обьем
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IMarkPriceKline::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
  <tr>
    <td>IMarkPriceKline::getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>

---