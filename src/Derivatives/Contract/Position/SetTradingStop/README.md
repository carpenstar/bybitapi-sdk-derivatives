# Contract - Position - Set Trading Stop
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/trading-stop)</b>

<p>The request sets the value of take profit, stop loss or trailing</p>

> Passing these parameters will create conditional orders within the system.

> The system will cancel these orders if the position is closed and adjust the quantity according to the size of the open position.

> Supports USDT and USDC Perpetual. Note: USDC Perpetual does not support partial TP/SL mode.

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces;

interface ISetTradingStopRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTakeProfit(float $takeProfit): self; // Cannot be less than 0, 0 means cancel TP. Partial TP/SL cannot be cancelled by set it 0
     public function setStopLoss(float $stopLoss): self; // Cannot be less than 0, 0 means cancel SL. Partial TP/SL cannot be cancelled by set it 0
     public function setTpslMode(string $tpslMode): self; // TP/SL mode
     public function setTpSize(float $tpSize): self; // Take profit size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     public function setSlSize(float $slSize): self; // Stop loss size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal
     public function setTpTriggerBy(string $tpTriggerBy): self; // Take profit trigger price type. default: LastPrice
     public function setSlTriggerBy(string $slTriggerBy): self; // Stop loss trigger price type. default: LastPrice
     public function setTrailingStop(float $trailingStop): self; // Cannot be less than 0, 0 means cancel TS
     public function setActivePrice(float $activePrice): self; // Trailing stop trigger price. Trailing stop will be triggered when this price is reached only 
     public function setTpLimitPrice(float $tpLimitPrice): self; // The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit
     public function setSlLimitPrice(float $slLimitPrice): self; // The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit
     public function setTpOrderType(string $tpOrderType): self; // The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full, it only supports tpOrderType=Market
     public function setSlOrderType(string $slOrderType): self; // The order type when take profit is triggered
     public function setPositionIdx(int $positionIdx): self; // Used to identify positions in different position modes. For hedge-mode, this param is required

     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Interfaces\ISetTradingStopRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetTradingStop\Request\SetTradingStopRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>:: setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>:: setTakeProfit(float $takeProfit)</td>
     <td>NO</td>
     <td> Cannot be less than 0, 0 means cancel TP. Partial TP/SL cannot be cancelled by set it 0 </td>
   </tr>
   <tr>
     <td>:: setStopLoss(float $stopLoss)</td>
     <td>NO</td>
     <td> Cannot be less than 0, 0 means cancel SL. Partial TP/SL cannot be cancelled by set it 0 </td>
   </tr>
   <tr>
     <td>:: setTpslMode(string $tpslMode)</td>
     <td>NO</td>
     <td> TP/SL mode. Full: entire position TP/SL, Partial: partial position TP/SL. As each contract has an initial full TP/SL mode, if it has been modified before, it may be partial. Therefore, if not provided, the system will automatically retrieve the current TP/SL mode configuration for the contract. </td>
   </tr>
   <tr>
     <td>:: setTpSize(float $tpSize)</td>
     <td>NO</td>
     <td> Take profit size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal </td>
   </tr>
   <tr>
     <td>:: setSlSize(float $slSize)</td>
     <td>NO</td>
     <td> Stop loss size. Valid in TP/SL partial mode only. Note: the value of tpSize and slSize must equal </td>
   </tr>
   <tr>
     <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
     <td>NO</td>
     <td> Take profit trigger price type. default: LastPrice </td>
   </tr>
   <tr>
     <td>:: setSlTriggerBy(string $slTriggerBy)</td>
     <td>NO</td>
     <td> Stop loss trigger price type. default: LastPrice </td>
   </tr>
   <tr>
     <td>:: setTrailingStop(float $trailingStop)</td>
     <td>NO</td>
     <td> Cannot be less than 0, 0 means cancel TS </td>
   </tr>
   <tr>
     <td>::setActivePrice(float $activePrice)</td>
     <td>NO</td>
     <td> Trailing stop trigger price. Trailing stop will be triggered when this price is reached only </td>
   </tr>
   <tr>
     <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
     <td>NO</td>
     <td> The limit order price when take profit price is triggered. Only works when tpslMode=Partial and tpOrderType=Limit </td>
   </tr>
   <tr>
     <td>:: setSlLimitPrice(float $slLimitPrice)</td>
     <td>NO</td>
     <td> The limit order price when stop loss price is triggered. Only works when tpslMode=Partial and slOrderType=Limit </td>
   </tr>
   <tr>
     <td>:: setTpOrderType(string $tpOrderType)</td>
     <td>NO</td>
     <td> The order type when take profit is triggered. Market(default), Limit. For tpslMode=Full, it only supports tpOrderType=Market </td>
   </tr>
   <tr>
     <td>:: setSlOrderType(string $slOrderType)</td>
     <td>NO</td>
     <td> The order type when stop loss is triggered. Market(default), Limit. For tpslMode=Full, it only supports slOrderType=Market </td>
   </tr>
   <tr>
     <td>::setPositionIdx(int $positionIdx)</td>
     <td>NO</td>
     <td> 
        Used to identify positions in different position modes. For hedge-mode, this param is required
        0: one-way mode
        1: hedge-mode Buy side
        2: hedge-mode Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response
