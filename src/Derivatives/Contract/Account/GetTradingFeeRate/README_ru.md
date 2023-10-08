### Contract - Account - Get Trading Fee Rate
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Эндпоинт возвращает данные по ставке торговой комиссии для ВСЕХ символов</p>

```php
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class // Класс эндпоинта:
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse;

$bybit = new BybitAPI('https://api-testnet.bybit.com',"apiKey", "secret");

$feeRateData = $bybit->rest(GetTradingFeeRate::class, (new GetTradingFeeRateRequest()))->getBody()->all();
$feeRateData = array_slice($feeRateData, 0, 3);



/** @var GetTradingFeeRateResponse $feeRate */
foreach ($feeRateData as $feeRate) {
    echo "Symbol: {$feeRate->getSymbol()}" . PHP_EOL;
    echo "Taker Fee Rate: {$feeRate->getTakerFeeRate()}" . PHP_EOL;
    echo "Maker Fee Rate: {$feeRate->getMakerFeeRate()}" . PHP_EOL;
    echo "---" . PHP_EOL;
}

/**
 * Result:
 *
 * Symbol: CTKUSDT
 * Taker Fee Rate: 0.0006
 * Maker Fee Rate: 0.0001
 * ---
 * Symbol: FILUSDT
 * Taker Fee Rate: 0.0006
 * Maker Fee Rate: 0.0001
 * ---
 * Symbol: BLURUSDT
 * Taker Fee Rate: 0.0006
 * Maker Fee Rate: 0.0001
 * ---
 */
```
<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self;
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Метод</th>
    <th style="width: 10%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol): self</td>
    <td>НЕТ</td>
    <td>Торговый инструмент</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseInterface
{
    public function getSymbol(): string;
    public function getTakerFeeRate(): float;
    public function getMakerFeeRate(): float;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>
      Торговый инструмент
    </td>
  </tr>
  <tr>
    <td>:: getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия тэйкера (покупателя)
    </td>
  </tr>
  <tr>
    <td>:: getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Комиссия мэйкера (продавца)
    </td>
  </tr>
</table>