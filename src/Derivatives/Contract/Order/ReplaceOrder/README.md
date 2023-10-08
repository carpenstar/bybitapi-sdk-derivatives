### Contract - Account - Order - Replace Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Order modification</p>

> You can change open or partially filled orders.

<p><b>Request parameters:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setPrice(float $price): self;
    public function setQty(float $qty): self;
    public function setTriggerPrice(float $triggerPrice): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setTriggerBy(string $triggerBy): self;
    public function setTpLimitPrice(float $tpLimitPrice): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces\IReplaceOrderRequestInterface</b>
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
    <td> Trading pair </td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>:: setPrice(float $price)</td>
    <td>NO</td>
    <td> New order price </td>
  </tr>
  <tr>
    <td>:: setQty(float $qty)</td>
    <td>NO</td>
    <td>
      New order quantity
    </td>
  </tr>
  <tr>
    <td>:: setTriggerPrice(float $triggerPrice)</td>
    <td>NO</td>
    <td>Setting/changing trigger price</td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Setting/changing take profit</td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Setting/changing stop loss</td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger take profit. When set a take profit, this param is required if no initial value for the order </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>The price type to trigger stop loss. When set a stop loss, this param is required if no initial value for the order</td>
  </tr>
  <tr>
    <td>:: setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>Trigger price type. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>Limit order price when take profit is triggered. Only working when original order sets partial limit tp/sl</td>
  </tr>
</table>