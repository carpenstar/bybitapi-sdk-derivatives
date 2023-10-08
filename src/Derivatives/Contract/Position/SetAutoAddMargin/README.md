### Contract - Position - Set Auto Add Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Enable/disable automatic addition of position margin. To understand more, please read <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target= "_blank">here</a></p>

<p><b>Request parameters</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
     public function setSymbol(string $symbol): self;
     public function setSide(string $side): self;
     public function setAutoAddMargin(int $autoAddMargin): self;
     public function setPositionIdx(int $positionIdx): self;
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface</b>
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
     <td>::setSide(string $side)</td>
     <td><b>YES</b></td>
     <td> - </td>
   </tr>
   <tr>
     <td>:: setAutoAddMargin(int $autoAddMargin)</td>
     <td><b>YES</b></td>
     <td> - </td>
   </tr>
   <tr>
     <td>::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> - </td>
   </tr>
</table>

<p><b>Response structure:</b></p>

> Endpoint returns an empty array as a successful response