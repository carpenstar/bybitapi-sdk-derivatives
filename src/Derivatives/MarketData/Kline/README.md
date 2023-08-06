### Market Data - Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/kline)</b>
<p>Эндпоинт возвращает исторические данные для построения графиков. Свечи возвращаются группами в зависимости от запрошенного интервала.</p>

```php
// Класс эндпоинта:
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT")
    ->setInterval(5)
    ->setStart("2023-05-01 00:00:00")
    ->setEnd("2023-05-05 00:00:00")
    ->setLimit(5);

$klineData = $bybit->rest(Kline::class, $options)->getBody()->all();



/** @var KlineResponse $klineItem */
foreach ($klineData as $klineItem) {
    echo "Start: {$klineItem->getStart()->format('Y-m-d H:i:s')}" . PHP_EOL;
    echo "Open: {$klineItem->getOpen()}" . PHP_EOL;
    echo "High: {$klineItem->getHigh()}" . PHP_EOL;
    echo "Low: {$klineItem->getLow()}" . PHP_EOL;
    echo "Close: {$klineItem->getClose()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 * 
 * Start: 2023-05-01 00:20:00
 * Open: 29269.9
 * High: 29297.4
 * Low: 29263.3
 * Close: 29283
 * -----
 * Start: 2023-05-01 00:15:00
 * Open: 29277.8
 * High: 29316.3
 * Low: 29269.9
 * Close: 29269.9
 * -----
 * Start: 2023-05-01 00:10:00
 * Open: 29301
 * High: 29320.1
 * Low: 29264.7
 * Close: 29277.8
 * -----
 * Start: 2023-05-01 00:05:00
 * Open: 29286
 * High: 29348.1
 * Low: 29269.9
 * Close: 29301
 * -----
 * Start: 2023-05-01 00:00:00
 * Open: 29221.2
 * High: 29300.4
 * Low: 29206.2
 * Close: 29286
 * -----
 */
```  

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Строка с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStart("2023-05-10 10:00:00") // Обязательный параметр. Строка даты/времени ОТ которого берется срез данных 
    ->setEnd("2023-05-10 11:00:00") // Обязательный параметр. Строка даты/времени ДО которого берется срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение возвращаемых записей на запрос. По умолчанию 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface</b>
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
    <td>Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>:: setStart(string $start): self</td>
    <td><b>ДА</b></td>
    <td>Строка даты/времени ОТ которого берется срез данных </td>
  </tr>
  <tr>
    <td>:: setEnd(string $end): self</td>
    <td><b>ДА</b></td>
    <td>Строка даты/времени ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию 200</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface
{
    public function getStart(): \DateTime;
    public function getOpen(): float;
    public function getHigh(): float;
    public function getLow(): float;
    public function getClose(): float;
    public function getVolume(): float;
    public function getTurnover(): float;
}
```
<table style="width: 100%">
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseInterface</b>
    </td>
  </tr>
  <tr>
    <td>:: getStart()</td>
    <td>DateTime</td>
    <td>Время начала тика</td>
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
  <tr>
    <td>:: getTurnover()</td>
    <td>float</td>
    <td>Оборот</td>
  </tr>
</table>
