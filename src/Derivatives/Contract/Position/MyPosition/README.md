# Contract - Position - My Position
<b>[Official documentation page](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Getting a list of the user's open positions</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setSettleCoin(string $symbol): self; // Calculation coin
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Request\MyPositionRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSymbol(string $symbol)</td>
     <td>NO</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IMyPositionRequestInterface::setSettleCoin(string $symbol)</td>
     <td>NO</td>
     <td>Calculation coin</td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
     public function getSymbol(): string; // Trading pair
     public function getSide(): string; // Side. Buy, Sell. Return None when zero position of one-way mode
     public function getSize(): float; // Position size
     public function getEntryPrice(): float; // Entry price
     public function getLeverage(): float; // leverage
     public function getPositionValue(): float; // Position value
     public function getPositionIdx(): int; // Position index
     public function getRiskId(): int; // Risk limit id
     public function getRiskLimitValue(): string; // Position limit value corresponding to the risk id
     public function getTradeMode(): int; // 0: cross margin mode. 1: isolated margin mode
     public function getAutoAddMargin(): int; // 0: false. 1: true
     public function getPositionBalance(): float; // Position margin
     public function getLiqPrice(): float; // Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice
     public function getBustPrice(): float; // Estimated bankruptcy price
     public function getTpSlMode(): string; // Depreciated, meaningless here, always "Full"
     public function getTakeProfit(): float; // Take profit price
     public function getStopLoss(): float; // Stop loss price
     public function getCreatedTime(): \DateTime; // Position created timestamp
     public function getUpdatedTime(): \DateTime; // Position data updated timestamp
     public function getTrailingStop(): string; // Trailing stop
     public function getActivePrice(): float; // Activate price of trailing stop
     public function getMarkPrice(): float; // Real-time mark price
     public function getUnrealizedPnl(): float; // unrealised PNL
     public function getCumRealisedPnl(): float; // cumulative realised PNL
     public function getPositionMM(): float; // Position maintenance margin
     public function getPositionIM(): float; // Position initial margin
     public function getPositionStatus(): string; // Position status
     public function getSessionAvgPrice(): float; // Settlement price
     public function getOccClosingFee(): float; // Pre-occupancy closing fee
     public function getAdlRankIndicator(): int; // Auto-deleverage rank indicator.
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Response\MyPositionResponse::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSide()</td>
     <td>string</td>
     <td> Side. Buy, Sell. Return None when zero position of one-way mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSize()</td>
     <td>float</td>
     <td> Position size </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getEntryPrice()</td>
     <td>float</td>
     <td> Entry price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLeverage()</td>
     <td>float</td>
     <td> leverage </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionValue()</td>
     <td>float</td>
     <td> Position value </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIdx()</td>
     <td>int</td>
     <td> Position index </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskId()</td>
     <td>int</td>
     <td> Risk limit id </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getRiskLimitValue()</td>
     <td>string</td>
     <td> Position limit value corresponding to the risk id </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTradeMode()</td>
     <td>int</td>
     <td> 0: cross margin mode. 1: isolated margin mode </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getAutoAddMargin()</td>
     <td>int</td>
     <td> 0: false. 1: true </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionBalance()</td>
     <td>float</td>
     <td> Position margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getLiqPrice()</td>
     <td>float</td>
     <td> Estimated liquidation price. It returns value only when minPrice < liqPrice < maxPrice </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getBustPrice()</td>
     <td>float</td>
     <td> Estimated bankruptcy price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTpSlMode()</td>
     <td>string</td>
     <td> Depreciated, meaningless here, always "Full" </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTakeProfit()</td>
     <td>float</td>
     <td> Take profit price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getStopLoss()</td>
     <td>float</td>
     <td> Stop loss price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCreatedTime()</td>
     <td>DateTime</td>
     <td> Position created timestamp </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUpdatedTime()</td>
     <td>DateTime</td>
     <td> Position data updated timestamp </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getTrailingStop()</td>
     <td>string</td>
     <td> Trailing stop </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getActivePrice()</td>
     <td>float</td>
     <td> Activate price of trailing stop </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getMarkPrice()</td>
     <td>float</td>
     <td> Real-time mark price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getUnrealisedPnl()</td>
     <td>float</td>
     <td> unrealised PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getCumRealisedPnl()</td>
     <td>float</td>
     <td> cumulative realised PNL </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionMM()</td>
     <td>float</td>
     <td> Position maintenance margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionIM()</td>
     <td>float</td>
     <td> Position initial margin </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getPositionStatus()</td>
     <td>string</td>
     <td> Position status </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getSessionAvgPrice()</td>
     <td>float</td>
     <td> Settlement price </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getOccClosingFee()</td>
     <td>float</td>
     <td> Pre-occupancy closing fee </td>
   </tr>
   <tr>
     <td>IMyPositionResponseInterface::getAdlRankIndicator()</td>
     <td>string</td>
     <td> Auto-deleverage rank indicator </td>
   </tr>
</table>
