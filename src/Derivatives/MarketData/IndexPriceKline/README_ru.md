### Market Data - Index Price Kline
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/index-kline)</b>
<p>Запрос истории <b>ИНДЕКСНОЙ</b> цены расчитанной на основе цен крупнейших бирж.</p>
<p>Каждый элемент представляет собой группу цен в зависимости от запрошенного интервала.</p>
<p>Эти данные возможно использовать для построения свечных и других графиков.</p>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\IndexPriceKline;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Response\IndexPriceKlineResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new IndexPriceKlineRequest())
    ->setSymbol("ETHUSDT")
    ->setInterval(1)
    ->setStartTime((new DateTime("2023-05-01 10:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-01 20:00:00"))->getTimestamp())
    ->setLimit(5);

/** @var IndexPriceKlineResponse[] $result */
$result = $bybit->rest(IndexPriceKline::class, $options)->getBody()->all();



foreach ($result as $indexPriceKlineItem) {
    echo "Start: {$indexPriceKlineItem->getStartTime()->format('Y-m-d H:i:s')}" . PHP_EOL;
    echo "Open: {$indexPriceKlineItem->getOpen()}" . PHP_EOL;
    echo "High: {$indexPriceKlineItem->getHigh()}" . PHP_EOL;
    echo "Low: {$indexPriceKlineItem->getLow()}" . PHP_EOL;
    echo "Close: {$indexPriceKlineItem->getClose()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Start: 2023-05-01 10:04:00
 * Open: 1847.37
 * High: 1847.65
 * Low: 1847.37
 * Close: 1847.4
 * -----
 * Start: 2023-05-01 10:03:00
 * Open: 1847.45
 * High: 1847.57
 * Low: 1847.36
 * Close: 1847.37
 * -----
 * Start: 2023-05-01 10:02:00
 * Open: 1847.65
 * High: 1847.79
 * Low: 1847.41
 * Close: 1847.45
 * -----
 * Start: 2023-05-01 10:01:00
 * Open: 1847.63
 * High: 1847.66
 * Low: 1847.27
 * Close: 1847.65
 * -----
 * Start: 2023-05-01 10:00:00
 * Open: 1847.25
 * High: 1847.68
 * Low: 1847.25
 * Close: 1847.63
 * -----
 */
```
<br />
<p><b>Параметры запроса:</b></p>

```php
use Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Request\IndexPriceKlineRequest;
    
$options = (new IndexPriceKlineRequest())
    ->setSymbol("BTCUSDT") 
    ->setInterval(1) 
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) 
    ->setEndTime((new DateTime("2023-05-09 11:00:00"))->getTimestamp()) 
    ->setLimit(200) 
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineRequest</b>
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
    <td>:: setStartTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию 200</td>
  </tr>
</table>
<br />
<p><b>Структура ответа:</b></p>

```php
Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse::class

interface IIndexPriceKlineResponse
{
public function getStartTime(): \DateTime;
public function getOpen(): float;
public function getHigh(): float;
public function getLow(): float;
public function getClose(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\IndexPriceKline\Interfaces\IIndexPriceKlineResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getStartTime()</td>
    <td>DateTime</td>
    <td>Время тика</td>
  </tr>
  <tr>
    <td>:: getOpen()</td>
    <td>float</td>
    <td>Цена открытия тика</td>
  </tr>
  <tr>
    <td>:: getHigh()</td>
    <td>float</td>
    <td>Максимальная цена тика</td>
  </tr>
  <tr>
    <td>:: getLow()</td>
    <td>float</td>
    <td>Минимальная цена тика</td>
  </tr>
  <tr>
    <td>:: getClose()</td>
    <td>float</td>
    <td>Цена закрытия тика</td>
  </tr>
</table>
