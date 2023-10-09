# Market Data - Kline
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/kline)</b>
<p>Эндпоинт возвращает исторические данные для построения графика. Свечи возвращаются группами в зависимости от запрошенного интервала.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Kline;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT")
    ->setInterval(5)
    ->setStartTime((new DateTime("2023-05-01 00:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-05 00:00:00"))->getTimestamp())
    ->setLimit(5);

$klineData = $bybit->rest(Kline::class, $options)->getBody()->all();



/** @var KlineResponse $klineItem */
foreach ($klineData as $klineItem) {
    echo "Start: {$klineItem->getStartTime()->format('Y-m-d H:i:s')}" . PHP_EOL;
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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class

$options = (new KlineRequest())
    ->setSymbol("BTCUSDT") // Обязательный параметр. Линия с тикером торговой пары.
    ->setInterval(1) // Обязательный параметр. Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W
    ->setStartTime((new DateTime("2023-05-10 10:00:00"))->getTimestamp()) // Обязательный параметр. Временная метка, ОТ которой будет взят срез данных
    ->setEndTime((new DateTime("2023-05-10 11:00:00"))->getTimestamp()) // Обязательный параметр. Временная метка ДО того, как будет взят срез данных
    ->setLimit(200) // Необязательный параметр. Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Request\KlineRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setInterval(int $interval): self</td>
    <td><b>ДА</b></td>
    <td>Размер тика. Возможные значения: 1 3 5 15 30 60 120 240 360 720 D M W</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которой берется срез данных </td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>IKlineRequestInterface::setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение количества записей, возвращаемых для каждого запроса. По умолчанию 200</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces;

interface IKlineResponseInterface
{
    public function getStartTime(): \DateTime; // Время начала тика
    public function getOpen(): float; // Цена открытия
    public function getHigh(): float; // Максимальная цена тика
    public function getLow(): float; // Минимальная цена тика
    public function getClose(): float; // Цена закрытия тика
    public function getVolume(): float; // Обьем
    public function getTurnover(): float; // Оборот
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Interfaces\IKlineResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\Kline\Response\KlineResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>

  <tr>
    <td>IKlineResponseInterface::getStartTime()</td>
    <td>DateTime</td>
    <td>Время открытия тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getVolume()</td>
    <td>float</td>
    <td>Обьем</td>
  </tr>
  <tr>
    <td>IKlineResponseInterface::getTurnover()</td>
    <td>float</td>
    <td>Оборот</td>
  </tr>
</table>

---