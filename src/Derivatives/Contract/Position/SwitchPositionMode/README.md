### Contract - Position - Switch Position Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/position-mode)</b>
<p>The request supports position mode switching for perpetual and inverse USDT futures. <br />
If you are in one-way mode, you can only open one position on the buy or sell side. <br />
If you are in hedging mode, you can open buy and sell positions simultaneously.</p>

<p><b>Request parameters</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces;

interface ISwitchPositionModeRequestInterface
{
     public function setSymbol(string $symbol): self;
     public function setCoin(string $coin): self;
     public function setPositionMode(int $positionMode): self;
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchPositionMode\Interfaces\ISwitchPositionModeRequestInterface</b>
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
     <td>:: setCoin(string $coin)</td>
     <td>NO</td>
     <td> Coin </td>
   </tr>
   <tr>
     <td>:: setPositionMode(int $positionMode)</td>
     <td><b>YES</b></td>
     <td> Position mode. 0: Merged Single. 3: Both Side </td>
   </tr>
</table>

<p><b>Response structure:</b></p>

> Endpoint returns an empty array as a successful response