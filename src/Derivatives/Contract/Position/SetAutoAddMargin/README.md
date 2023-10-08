# Contract - Position - Set Auto Add Margin
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/auto-margin)</b>
<p>Enable/disable automatic addition of position margin. To understand more, please read <a href="https://www.bybit.com/en-US/help-center/s/article/Introduction-to-Auto-Margin-Replenishment-USDT-Contract" target= "_blank">here</a></p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> --- </b></p>


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces;

interface ISetAutoAddMarginRequestInterface
{
     public function setSymbol(string $symbol): self; // Trading pair
     public function setSide(string $side): self; // Side. Buy,Sell
     public function setAutoAddMargin(int $autoAddMargin): self; // Turn on/off auto add margin. 0: off. 1: on
     public function setPositionIdx(int $positionIdx): self; // Position index
    
     // .. Getters
}
```

<table style="width: 100%">
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Interfaces\ISetAutoAddMarginRequestInterface::class</b>
     </td>
   </tr>
   <tr>
     <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
       <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Position\SetAutoAddMargin\Request\SetAutoAddMarginRequest::class</b>
     </td>
   </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Required</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSymbol(string $symbol)</td>
     <td><b>YES</b></td>
     <td>Trading pair</td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setSide(string $side)</td>
     <td><b>YES</b></td>
     <td> Side. Buy,Sell </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setAutoAddMargin(int $autoAddMargin)</td>
     <td><b>YES</b></td>
     <td> Turn on/off auto add margin. 0: off. 1: on </td>
   </tr>
   <tr>
     <td>ISetAutoAddMarginRequestInterface::setPositionIdx(int $positionIdx)</td>
     <td><b>YES</b></td>
     <td> Position index </td>
   </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> Endpoint returns an empty array as a successful response