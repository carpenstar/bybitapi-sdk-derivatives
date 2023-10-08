### Contract - Position - Set Leverage
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/leverage)</b>
<p>Set position leverage</p>

<p><b>Request parameters</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces;

interface ISetLeverageRequestInterface
{
     public function setSymbol(string $symbol): self;
     public function setBuyLeverage(float $buyLeverage): self;
     public function setSellLeverage(float $sellLeverage): self;
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetLeverage\Interfaces\ISetLeverageRequestInterface</b>
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
     <td>:: setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
   <tr>
     <td>:: setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> (0, max leverage of corresponding risk limit]. For one-way mode, make sure buyLeverage=sellLeverage </td>
   </tr>
</table>

<p><b>Response structure:</b></p>

> Endpoint returns an empty array as a successful response