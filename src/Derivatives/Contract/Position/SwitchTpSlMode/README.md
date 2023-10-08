### Contract - Position - Switch TpSl Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>The request sets the implicit tpsl mode for a specific trading instrument.
It makes sense to use if you did not pass “tpslMode” in the order when placing or in a request to stop trading, because in this case the system will set tpslMode by default.</p>

<p><b>Request parameters</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
     public function setSymbol(string $symbol): self;
     public function setTpSlMode(string $tpSlMode): self;
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interface\ISwitchTpSlModeRequestInterface</b>
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
     <td>:: setTpSlMode(string $tpSlMode)</td>
     <td><b>YES</b></td>
     <td> - </td>
   </tr>
</table>

<p><b>Response structure:</b></p>

> Endpoint returns an empty array as a successful response