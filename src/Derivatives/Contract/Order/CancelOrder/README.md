# Contract - Account - Order - Cancel Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>This endpoint allows you to cancel the specified open order.</p>

> You can cancel the specified partially completed order.


<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    
    // ... Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderRequestInterface::class</b>
    </td>
  </tr>
      <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Request\CancelOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Response\CancelOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
</table>
