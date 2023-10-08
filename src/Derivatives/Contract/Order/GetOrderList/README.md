### Contract - Account - Order - Get Order List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>List of orders</p>

> Since order creation/cancellation is asynchronous, the data returned from this endpoint may be delayed.

<p><b>Request parameters:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setOrderFilter(string $orderFilter): self;
    public function setCursor(string $cursor): self;
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td> Base coin </td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Settle coin</td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>:: setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>:: setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<p><b>Response cursor:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string;
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
    public function getSide(): string;
    public function getOrderType(): string;
    public function getPrice(): float;
    public function getQty(): float;
    public function getTimeInForce(): string;
    public function getOrderStatus(): string;
    public function getLastPriceOnCreated(): string;
    public function getCreatedTime(): \DateTime;
    public function getUpdatedTime(): \DateTime;
    public function getCancelType(): string;
    public function getStopOrderType(): string;
    public function getTriggerDirection(): int;
    public function getTriggerBy(): string;
    public function getTriggerPrice(): ?float;
    public function getCumExecValue(): float;
    public function getCumExecFee(): float;
    public function getCumExecQty(): float;
    public function getLeavesValue(): float;
    public function getLeavesQty(): float;
    public function getTakeProfit(): float;
    public function getStopLoss(): float;
    public function getTpslMode(): string;
    public function getTpLimitPrice(): float;
    public function getSlLimitPrice(): float;
    public function getTpTriggerBy(): string;
    public function getSlTriggerBy(): string;
    public function isReduceOnly(): bool;
    public function isCloseOnTrigger(): bool;
    public function getSmpType(): string;
    public function getSmpGroup(): int;
    public function getSmpOrderId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>:: getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
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
  <tr>
    <td>:: getSide()</td>
    <td>string</td>
    <td>
        Buy,Sell
    </td>
  </tr>
  <tr>
    <td>:: getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>:: getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>:: getQty()</td>
    <td>float</td>
    <td>
        Order quantity
    </td>
  </tr>
  <tr>
    <td>:: getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>:: getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when place the order
    </td>
  </tr>
  <tr>
    <td>:: getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Order created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>:: getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Order updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>:: getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>:: getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>:: getTriggerDirection()</td>
    <td>int</td>
    <td>
        Trigger direction. 1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>:: getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>:: getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>:: getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed order value
    </td>
  </tr>
  <tr>
    <td>:: getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative executed trading fee
    </td>
  </tr>
  <tr>
    <td>:: getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed order qty
    </td>
  </tr>
  <tr>
    <td>:: getLeavesValue()</td>
    <td>float</td>
    <td>
        The estimated value not executed
    </td>
  </tr>
  <tr>
    <td>:: getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining qty not executed
    </td>
  </tr>
  <tr>
    <td>:: getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>:: getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>:: getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>:: getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The price type to trigger stop loss
    </td>
  </tr>
  <tr>
    <td>:: isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>:: isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger
    </td>
  </tr>
  <tr>
    <td>:: getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>:: getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>:: getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>

