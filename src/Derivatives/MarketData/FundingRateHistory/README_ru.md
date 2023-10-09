# Market Data - Funding Rate History
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/funding-rate)</b>
<p>История финансирования указанного символа за определенный период</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\FundingRateHistory::class 
```  

<p align="center" width="100%"><b>ПРИМЕР</b></p>

---

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
  

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
new \Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest();
    
$options = (new FundingRateHistoryRequest())
    ->setSymbol("BTCUSDT") // Trading pair
    ->setStartTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // Временная метка, ОТ которой будет взят срез данных
    ->setEndTime((new DateTime("2023-05-09 10:00:00"))->getTimestamp()) // Временная метка ДО того, как будет взят срез данных
    ->setLimit(200) // Ограничение количества записей, возвращаемых по запросу
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Request\FundingRateHistoryRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setSymbol(string $symbol): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setStartTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Временная метка, ОТ которой будет взят срез данных</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setEndTime(int $timestamp): self</td>
    <td style="text-align: center"><b>НЕТ<sup>*</sup></b></td>
    <td>Временная метка ДО того, как будет взят срез данных</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryRequest::setLimit(int $limit): self</td>
    <td style="text-align: center">НЕТ</td>
    <td>Ограничение количества записей, возвращаемых по запросу</td>
  </tr>
</table>

> <sup>*</sup>**Warning:**
> При установке ограничений по времени выборки обязательно укажите верхнюю и нижнюю границы, используя `setStartTime(int $timestamp)` и `setEndTime(int $timestamp)`.
> В противном случае будет возвращена ошибка

> **Warning:**
> По умолчанию запрос к эндпоинту FundingRateHistory::class возвращает последние 200 записей до текущего момента для конкретного символа

  

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE:</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Interfaces\IFundingRateHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO:</b></sup> <br /> 
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\FundingRateHistory\Response\FundingRateHistoryResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 30%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getSymbol()</td>
    <td style="text-align: center">string</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getFundingRate()</td>
    <td style="text-align: center">float</td>
    <td>Ставка финансирования</td>
  </tr>
  <tr>
    <td>IFundingRateHistoryResponse::getFundingRateTimestamp()</td>
    <td style="text-align: center">DateTime</td>
    <td>Время следующего списания ставки финансирования</td>
  </tr>
</table>
