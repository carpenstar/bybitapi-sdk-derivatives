# Contract - Position - Set Risk Limit
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/set-risk-limit)</b>
<p>The risk limit will limit the maximum position amount you can hold under various margin requirements. <br />
If you want to hold a larger position, you will need more margin. <br />
This request can set the risk limit for a single position. If an order is placed above the current risk limit, it will be rejected.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces;

interface ISetRiskLimitRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setRiskId(int $riskId): self; // Risk limit id
     public function setPositionIdx(int $positionIdx): self; // Used to identify positions in different position modes

     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Interfaces\ISetRiskLimitRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetRiskLimit\Request\SetRiskLimitRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setRiskId(int $riskId)</td>
     <td><b>YES</b></td>
     <td> Risk limit id </td>
   </tr>
   <tr>
     <td>ISetRiskLimitRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Used to identify positions in different position modes. For hedge-mode, this param is required
            0: one-way mode
            1: hedge-mode Buy side
            2: hedge-mode Sell side 
     </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response

---