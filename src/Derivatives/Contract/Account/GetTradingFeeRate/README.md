# Contract - Account - Get Trading Fee Rate
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/fee-rate)</b>
<p>Endpoint returns data on the trading commission rate for ALL symbols</p>

```php
// Endpoint classname
Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\GetTradingFeeRate::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

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

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface;

interface IGetTradingFeeRateRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Request\GetTradingFeeRateRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateRequestInterface::setSymbol(string $symbol): self</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface;

interface IGetTradingFeeRateResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getTakerFeeRate(): float; // Taker (buyer) commission
    public function getMakerFeeRate(): float; // Maker (seller) commission
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces\IGetTradingFeeRateResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Response\GetTradingFeeRateResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getTakerFeeRate()</td>
    <td>float</td>
    <td>
      Taker (buyer) commission
    </td>
  </tr>
  <tr>
    <td>IGetTradingFeeRateResponseInterface::getMakerFeeRate()</td>
    <td>float</td>
    <td>
      Maker (seller) commission
    </td>
  </tr>
</table>