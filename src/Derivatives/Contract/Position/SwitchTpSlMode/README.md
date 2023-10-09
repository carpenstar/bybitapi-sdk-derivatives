# Contract - Position - Switch TpSl Mode
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/tpsl-mode)</b>

<p>The request sets the implicit tpsl mode for a specific trading instrument.
It makes sense to use if you did not pass “tpslMode” in the order when placing or in a request to stop trading, because in this case the system will set tpslMode by default.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interfaces;

interface ISwitchTpSlModeRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTpSlMode(string $tpSlMode): self; // Full: set TP/SL to full position. Partial: set TP/SL to partial mode
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Interface\ISwitchTpSlModeRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchTpSlMode\Request\SwitchTpSlModeRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchTpSlModeRequestInterface::setTpSlMode(string $tpSlMode)</td>
     <td><b>YES</b></td>
     <td> Full: set TP/SL to full position. Partial: set TP/SL to partial mode </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---