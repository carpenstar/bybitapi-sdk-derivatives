# Contract - Account - Order - Replace Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Order modification</p>

> You can change open or partially filled orders.

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    public function setPrice(float $price): self; // New order price
    public function setQty(float $qty): self; // New order quantity
    public function setTriggerPrice(float $triggerPrice): self; // Setting/changing trigger price
    public function setTakeProfit(float $takeProfit): self; // Setting/changing take profit
    public function setStopLoss(float $stopLoss): self; // Setting/changing stop loss
    public function setTpTriggerBy(string $tpTriggerBy): self; // The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order
    public function setSlTriggerBy(string $slTriggerBy): self; // The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order
    public function setTriggerBy(string $triggerBy): self; // Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice
    public function setTpLimitPrice(float $tpLimitPrice): self; // Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td>Trading pair </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setPrice(float $price)</td>
    <td>NO</td>
    <td>New order price </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setQty(float $qty)</td>
    <td>NO</td>
    <td>
      New order quantity
    </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerPrice(float $triggerPrice)</td>
    <td>NO</td>
    <td>Setting/changing trigger price</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Setting/changing take profit</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Setting/changing stop loss</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
    <td>NO</td>
    <td>Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```


<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Request\ReplaceOrderRequest::class</b>
    </td>
  </tr>
   <tr>
     <th style="width: 45%; text-align: center">Method</th>
     <th style="width: 5%; text-align: center">Type</th>
     <th style="width: 50%; text-align: center">Description</th>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderId()</td>
     <td>string</td>
     <td>Order ID</td>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>User customised order id</td>
   </tr>
</table>
