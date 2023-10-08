### Contract - Contract - Order - Cancel All Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>This endpoint allows you to cancel all open orders.</p>

<p><b>Request parameters:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface</b>
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
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td>Cancel all open orders for the base coin</td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Cancel all open orders with settlement coin</td>
  </tr>
</table>

<p><b>Response structure:</b></p>

> The result is a numbered array of objects that implement the ICancelAllOrder ResponseInterface interface

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>
