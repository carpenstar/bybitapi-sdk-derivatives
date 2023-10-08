### Contract - Position - Switch Cross Isolated Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>The request changes the margin mode (Cross or Isolated)</p>

<p><b>Request parameters</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
     public function setSymbol(string $symbol): self;
     public function setTradeMode(int $tradeMode): self;
     public function setBuyLeverage(float $buyLeverage): self;
     public function setSellLeverage(float $sellLeverage): self;
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface</b>
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
     <td>:: setTradeMode(int $tradeMode)</td>
     <td><b>YES</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>:: setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> Buy side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
   <tr>
     <td>:: setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> Sell side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
</table>

<p><b>Response structure:</b></p>

> Endpoint returns an empty array as a successful response