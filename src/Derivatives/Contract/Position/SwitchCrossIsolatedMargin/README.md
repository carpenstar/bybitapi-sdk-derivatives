# Contract - Position - Switch Cross Isolated Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cross-isolated)</b>

<p>The request changes the margin mode (Cross or Isolated)</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces;

interface ISwitchCrossIsolatedMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setTradeMode(int $tradeMode): self; // 0: cross margin. 1: isolated margin
     public function setBuyLeverage(float $buyLeverage): self; // Buy side leverage. Make sure buyLeverage equals to sellLeverage
     public function setSellLeverage(float $sellLeverage): self; // Sell side leverage. Make sure buyLeverage equals to sellLeverage
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Interfaces\ISwitchCrossIsolatedMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SwitchCrossIsolatedMargin\Request\SwitchCrossIsolatedMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setTradeMode(int $tradeMode)</td>
     <td><b>YES</b></td>
     <td> 0: cross margin. 1: isolated margin </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setBuyLeverage(float $buyLeverage)</td>
     <td><b>YES</b></td>
     <td> Buy side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
   <tr>
     <td>ISwitchCrossIsolatedMarginRequestInterface::setSellLeverage(float $sellLeverage)</td>
     <td><b>YES</b></td>
     <td> Sell side leverage. Make sure buyLeverage equals to sellLeverage </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response
