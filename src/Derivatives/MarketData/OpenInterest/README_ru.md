### Market Data - Open Interest
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/open-interest)</b>
<p>Эндпоинт возвращает данные об открытом интересе по указанному символу. <br />
<b>Открытый интерес — это общее количество позиций бессрочных контрактов, которые в настоящее время хранятся на платформе.</b></p>

```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest::class
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\OpenInterest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Response\OpenInterestResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new OpenInterestRequest())->setSymbol("ETHUSDT")->setInterval("1h")->setLimit(5);

/** @var OpenInterestResponse[] $result */
$result = $bybit->rest(OpenInterest::class, $options)->getBody()->all();



foreach ($result as $interestItem) {
    echo "Funding Rate: {$interestItem->getOpenInterest()}" . PHP_EOL;
    echo "Funding Rate Timestamp: {$interestItem->getTimestamp()->format("Y-m-d H:i:s")}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Funding Rate: 1128313.46000000
 * Funding Rate Timestamp: 2023-05-09 11:00:00
 * -----
 * Funding Rate: 1127687.94000000
 * Funding Rate Timestamp: 2023-05-09 10:00:00
 * -----
 * Funding Rate: 1127713.76000000
 * Funding Rate Timestamp: 2023-05-09 09:00:00
 * -----
 * Funding Rate: 1127747.17000000
 * Funding Rate Timestamp: 2023-05-09 08:00:00
 * -----
 * Funding Rate: 1127889.81000000
 * Funding Rate Timestamp: 2023-05-09 07:00:00
 * -----
*/
```  

<p><b>Параметры запроса:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest::class   

$options = (new OpenInterestRequest())
    ->setSymbol("ETHUSDT")
    ->setInterval("1h") 
    ->setLimit(5);
    ->setStartTime((new DateTime('2023-05-01 10:00:00'))->getTimestamp())
    ->setEndTime((new DateTime('2023-05-01 20:00:00'))->getTimestamp()); 
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Request\OpenInterestRequest</b>
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
      Возможные значения: 1h 3h 5h 15h 30h 60h 120h 240h 360h 720h D M W
    </td>
  </tr>
  <tr>
    <td>:: setStartTime(int $startTime): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ОТ которого берется срез данных </td>
  </tr>
  <tr>
    <td>:: setEndTime(int $endTime): self</td>
    <td><b>ДА</b></td>
    <td>Таймштамп ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td>НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос. По умолчанию 200</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse::class

interface IOpenInterestResponse
{
    public function getTimestamp(): \DateTime;
    public function getOpenInterest(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\OpenInterest\Interfaces\IOpenInterestResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getTimestamp()</td>
    <td>DateTime</td>
    <td>Время исполнения запроса</td>
  </tr>
  <tr>
    <td>:: getOpenInterest()</td>
    <td>float</td>
    <td>Обьем интереса</td>
  </tr>
</table>