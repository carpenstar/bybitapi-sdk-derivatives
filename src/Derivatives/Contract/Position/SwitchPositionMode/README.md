# Contract - Position - Switch Position Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>The request supports position mode switching for perpetual and inverse USDT futures. <br />
If you are in one-way mode, you can only open one position on the buy or sell side. <br />
If you are in hedging mode, you can open buy and sell positions simultaneously.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setCoin(string $coin): self; // Coin
     public function setPositionMode(int $positionMode): self; // Position mode. 0: Merged Single. 3: Both Side
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Request\SwitchPositionModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setSymbol(string $symbol)</td>
     <td>NO</td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setCoin(string $coin)</td>
     <td>NO</td>
     <td> Coin </td>
   </tr>
   <tr>
     <td>ISwitchPositionModeRequestInterface::setPositionMode(int $positionMode)</td>
     <td><b>YES</b></td>
     <td> Position mode. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response
