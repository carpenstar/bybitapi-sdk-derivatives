### Market Data - Funding Rate History
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/public/funding-rate)</b>
<p>История фандинга по указаному символу за определенный период</p>

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse;
use Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new FundingRateHistoryRequest())->setSymbol("BTCUSDT")->setLimit(3);

/** @var FundingRateHistoryResponse[] $result */
$result = $bybit->rest(FundingRateHistory::class, $options)->getBody()->all();



foreach ($result as $rateItem) {
    echo "Symbol: {$rateItem->getSymbol()}" . PHP_EOL;
    echo "Funding Rate: {$rateItem->getFundingRate()}" . PHP_EOL;
    echo "Funding Rate Timestamp: {$rateItem->getFundingRateTimestamp()->format("Y-m-d H:i:s")}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Symbol: BTCUSDT
 * Funding Rate: 0.0001
 * Funding Rate Timestamp: 2023-05-09 08:00:00
 * -----
 * Symbol: BTCUSDT
 * Funding Rate: 0.00121833
 * Funding Rate Timestamp: 2023-05-09 00:00:00
 * -----
 * Symbol: BTCUSDT
 * Funding Rate: 0.00375
 * Funding Rate Timestamp: 2023-05-08 16:00:00
 * -----
 */
```
<p><b>Параметры запроса:</b></p>

```php
new \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest();
    
$options = (new FundingRateHistoryRequest())
    ->setSymbol("BTCUSDT")
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp())
    ->setEndTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp())
    ->setLimit(200)
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryRequest</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Строка с тикером торговой пары</td>
  </tr>
  <tr>
    <td>:: setStartTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Строка даты/времени ОТ которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setEndTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Строка даты/времени ДО которого берется срез данных</td>
  </tr>
  <tr>
    <td>:: setLimit(int $limit): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Ограничение возвращаемых записей на запрос</td>
  </tr>
</table>

> <sup>*</sup>**Warning:**
> При установке временных ограничений на выборку, обязательно следует указывать верхнюю и нижнюю границу при помощи `setStartTime(string $start)` и `setEndTime(string $end)`.
> Иначе будет возвращена ошибка

> **Warning:**
> По умолчанию, запрос на эндпоинт `FundingRateHistory::class` возвращает 200 последних записей до текущего момента по определенному символу

<p><b>Структура ответа:</b></p>

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse</b>
    </td>
  </tr>
  <tr>
    <th style="width: 30%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td style="text-align: center">string</td>
    <td>Символ торговой пары</td>
  </tr>
  <tr>
    <td>:: getFundingRate()</td>
    <td style="text-align: center">float</td>
    <td>Ставка финансирования</td>
  </tr>
  <tr>
    <td>:: getFundingRateTimestamp()</td>
    <td style="text-align: center">DateTime</td>
    <td>Время удержания ставки финансирования</td>
  </tr>
</table>
