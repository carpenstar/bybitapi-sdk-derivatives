# Contract - Account - Order - Cancel All Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>This endpoint allows you to cancel all open orders.</p>

<p align="center" width="100%"><b>EXAMPLE</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setBaseCoin(string $baseCoin): self; // Cancel all open orders for the base coin
    public function setSettleCoin(string $settleCoin): self; // Cancel all open orders with settlement coin
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td>Cancel all open orders for the base coin</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Cancel all open orders with settlement coin</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

> The result is a numbered array of objects that implement the ICancelAllOrder ResponseInterface interface

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>

---