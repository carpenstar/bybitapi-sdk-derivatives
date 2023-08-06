### Market Data - Mark Price Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/mark-kline)</b>
<p>Эндпоинт возвращает исторические данные по <b>цене МАРКИРОВКИ</b>. <br />
Данные возвращаются группами в зависимости от запрошенного интервала. <br />
Можно использовать для формирования свечных графиков.</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKline::class
```
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
    echo "Start: {$markPrice->getStart()->format("Y-m-d H:i:s")}" . PHP_EOL;
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

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest::class

$options = (new MarkPriceKlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Строка с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStart("2023-05-10 10:00:00") // Обязательный параметр. Строка даты/времени ОТ которого берется срез данных 
    ->setEnd("2023-05-10 11:00:00"); // Обязательный параметр. Строка даты/времени ДО которого берется срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение возвращаемых записей на запрос. По умолчанию 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\MarkPriceKlineRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>
      Размер тика. <br />
      Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    </td>
  </tr>
  <tr>
    <td>:: setStart(string $start): self</td>
    <td><b>ДА</b></td>
    <td>
      Строка даты/времени ОТ которого берется срез данных
    </td>
  </tr>
  <tr>
    <td>:: setEnd(string $end): self</td>
    <td><b>ДА</b></td>
    <td>
      Строка даты/времени ДО которого берется срез данных
    </td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>
      Ограничение возвращаемых записей на запрос. По умолчанию: 200
    </td>
  </tr>
</table>


<p><b>Структура ответа:</b></p>

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\MarkPriceKline\Interfaces\IMarkPriceKline::class

interface IMarkPriceKline
{
    public function getStart(): \DateTime;
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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getStart()</td>
    <td>DateTime</td>
    <td>Время старта тика</td>
  </tr>
  <tr>
    <td>:: getOpen()</td>
    <td>float</td>
    <td>Цена открытия</td>
  </tr>
  <tr>
    <td>:: getHigh()</td>
    <td>float</td>
    <td>Наибольшая цена</td>
  </tr>
  <tr>
    <td>:: getLow()</td>
    <td>float</td>
    <td>Наименьшая цена</td>
  </tr>
  <tr>
    <td>:: getClose()</td>
    <td>float</td>
    <td>Цена закрытия</td>
  </tr>
  <tr>
    <td>:: getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
</table>
