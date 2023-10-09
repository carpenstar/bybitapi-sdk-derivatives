# Market Data - Risk Limit
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/public/risk-limit)</b>
<p>Endpoint returns data on the risk limit for the specified symbol. </p>
<p>Risk limit is a risk management measure to limit traders' exposure to risk.</p>

```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit::class
```

<p align="center" width="100%"><b>EXAMPLE</b></p>

---

```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\RiskLimit;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest;
use Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse;

$bybit = new BybitAPI("https://api-testnet.bybit.com", "apiKey", "secret");

$options = (new RiskLimitsRequest())->setSymbol("BTCUSDT");

/** @var RiskLimitsResponse[] $result */
$result = $bybit->rest(RiskLimit::class, $options)->getBody()->all();



foreach ($result as $riskItem) {
    echo "Risk ID: {$riskItem->getId()}" . PHP_EOL;
    echo "Symbol: {$riskItem->getSymbol()}" . PHP_EOL;
    echo "Limit: {$riskItem->getLimit()}" . PHP_EOL;
    echo "Maintain Margin: {$riskItem->getMaintainMargin()}". PHP_EOL;
    echo "Initial Margin: {$riskItem->getInitialMargin()}" . PHP_EOL;
    echo "isLowerRisk: {$riskItem->getIsLowerRisk()}" . PHP_EOL;
    echo "maxLeverage: {$riskItem->getMaxLeverage()}" . PHP_EOL;
    echo "-----" . PHP_EOL;
}

/**
 * Result:
 *
 * Risk ID: 1
 * Symbol: BTCUSDT
 * Limit: 2000000
 * Maintain Margin: 0.005
 * Initial Margin: 0.01
 * isLowerRisk: 0
 * maxLeverage: 100
 * -----
 * Risk ID: 2
 * Symbol: BTCUSDT
 * Limit: 4000000
 * Maintain Margin: 0.01
 * Initial Margin: 0.0175
 * isLowerRisk: 0
 * maxLeverage: 57.14
 * -----
 * Risk ID: 3
 * Symbol: BTCUSDT
 * Limit: 6000000
 * Maintain Margin: 0.015
 * Initial Margin: 0.025
 * isLowerRisk: 0
 * maxLeverage: 40
 * -----
 * ...
 */
```  

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class

$options = (new RiskLimitsRequest())
    ->setSymbol("BTCUSDT"); // Trading pair
```  
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Request\RiskLimitsRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 40%; text-align: center">Method</th>
    <th style="width: 10%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsRequestInterface::setSymbol(string $symbol): self</td>
    <td><b>YES</b></td>
    <td>Trading pair</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse::class;

interface IRiskLimitsResponse
{
    public function getId(): string; // Risk ID
    public function getSymbol(): string; // Trading pair
    public function getLimit(): int; // Position limit
    public function getMaintainMargin(): float; // Margin maintenance
    public function getInitialMargin(): float; // Initial margin
    public function getIsLowerRisk(): int; // Is the trading instrument low risk?
    public function getMaxLeverage(): float; // Maximum leverage
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Interfaces\IRiskLimitsResponse:class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\MarketData\RiskLimit\Response\RiskLimitsResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getId()</td>
    <td>string</td>
    <td>
      Risk ID
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getSymbol()</td>
    <td>string</td>
    <td>
      Trading pair
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getLimit()</td>
    <td>int</td>
    <td>
      Position limit
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getMaintainMargin()</td>
    <td>float</td>
    <td>
      Margin maintenance
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getInitialMargin()</td>
    <td>float</td>
    <td>
      Initial margin
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getIsLowerRisk()</td>
    <td>int</td>
    <td>
      Is the trading instrument low risk?
    </td>
  </tr>
  <tr>
    <td>IRiskLimitsResponse::getMaxLeverage()</td>
    <td>float</td>
    <td>
      Maximum leverage
    </td>
  </tr>
</table>
