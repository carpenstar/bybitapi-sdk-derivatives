# Contract - Position - Set Leverage
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Set position leverage</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setBuyLeverage(float $buyLeverage): self; // (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage
     public function setSellLeverage(float $sellLeverage): self; // (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage 
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Request\SetLeverageRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>ISetLeverageRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response
