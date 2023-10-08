### Contract - Position - My Position
<b>[Official documentation page](https://bybit-exchange.github.io/docs/derivatives/contract/position-list)</b>
<p>Getting a list of the user's open positions</p>

<p><b>Request parameters:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionRequestInterface
{
     public function setSymbol(string $symbol): self;
     public function setSettleCoin(string $symbol): self;
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionRequestInterface</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>:: setSymbol(string $symbol)</td>
     <td>NO</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>:: setSettleCoin(string $symbol)</td>
     <td>NO</td>
     <td>Calculation coin</td>
   </tr>
</table>

<p><b>Response structure:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces;

interface IMyPositionResponseInterface
{
     public function getSymbol(): string;
     public function getSide(): string;
     public function getSize(): float;
     public function getEntryPrice(): float;
     public function getLeverage(): float;
     public function getPositionValue(): float;
     public function getPositionIdx(): int;
     public function getRiskId(): int;
     public function getRiskLimitValue(): string;
     public function getTradeMode(): int;
     public function getAutoAddMargin(): int;
     public function getPositionBalance(): float;
     public function getLiqPrice(): float;
     public function getBustPrice(): float;
     public function getTpSlMode(): string;
     public function getTakeProfit(): float;
     public function getStopLoss(): float;
     public function getCreatedTime(): \DateTime;
     public function getUpdatedTime(): \DateTime;
     public function getTrailingStop(): string;
     public function getActivePrice(): float;
     public function getMarkPrice(): float;
     public function getUnrealizedPnl(): float;
     public function getCumRealisedPnl(): float;
     public function getPositionMM(): float;
     public function getPositionIM(): float;
     public function getPositionStatus(): string;
     public function getSessionAvgPrice(): float;
     public function getOccClosingFee(): float;
     public function getAdlRankIndicator(): int;
}
```
<table style="width: 100%">
   <tr>
     <td colspan="3">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\MyPosition\Interfaces\IMyPositionResponseInterface</b>
     </td>
   </tr>
   <tr>
     <th style="width: 20%; text-align: center">Method</th>
     <th style="width: 20%; text-align: center">Type</th>
     <th style="width: 60%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>::getSymbol()</td>
     <td>string</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>::getSide()</td>
     <td>string</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getSize()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getEntryPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getLeverage()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getPositionValue()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getPositionIdx()</td>
     <td>int</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getRiskId()</td>
     <td>int</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getRiskLimitValue()</td>
     <td>string</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getTradeMode()</td>
     <td>int</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getAutoAddMargin()</td>
     <td>int</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getPositionBalance()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getLiqPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getBustPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getTpSlMode()</td>
     <td>string</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getTakeProfit()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getStopLoss()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getCreatedTime()</td>
     <td>DateTime</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getUpdatedTime()</td>
     <td>DateTime</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getTrailingStop()</td>
     <td>string</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getActivePrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getMarkPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getUnrealisedPnl()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getCumRealisedPnl()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getPositionMM()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getPositionIM()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getPositionStatus()</td>
     <td>string</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getSessionAvgPrice()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getOccClosingFee()</td>
     <td>float</td>
     <td> - </td>
   </tr>
   <tr>
     <td>::getAdlRankIndicator()</td>
     <td>string</td>
     <td> - </td>
   </tr>
</table>