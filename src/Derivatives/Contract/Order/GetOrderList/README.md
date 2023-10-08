# Contract - Account - Order - Get Order List
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/order-list)</b>
<p>List of orders</p>

> Since order creation/cancellation is asynchronous, the data returned from this endpoint may be delayed.

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    public function setOrderStatus(string $orderStatus): self; // Order status. Return all status orders if not passed
    public function setOrderFilter(string $orderFilter): self; // Possible values: Order: active order, StopOrder: conditional order
    public function setLimit(int $limit): self; // Limit for data size per page. [1, 50]. Default: 20
    public function setCursor(string $cursor): self; // Next page cursor
    
    // .. getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Request\GetOrderListRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setSymbol(string $symbol)</td>
    <td>NO</td>
    <td> Trading pair </td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderStatus(string $orderStatus)</td>
    <td>NO</td>
    <td>Order status. Return all status orders if not passed</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setLimit(int $limit)</td>
    <td>NO</td>
    <td>Limit for data size per page. [1, 50]. Default: 20</td>
  </tr>
  <tr>
    <td>IGetOrderListRequestInterface::setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces;

interface IGetOrderListResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
    public function getSide(): string; // Buy,Sell
    public function getOrderType(): string; // Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    public function getPrice(): float; // Order price
    public function getQty(): float; // Order quantity
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Order status
    public function getLastPriceOnCreated(): string; // Last price when place the order
    public function getCreatedTime(): \DateTime; // Order created timestamp
    public function getUpdatedTime(): \DateTime; // Order updated timestamp
    public function getCancelType(): string; // Cancel type
    public function getStopOrderType(): string; // Stop order type
    public function getTriggerDirection(): int; // Trigger direction. 1: rise, 2: fall
    public function getTriggerBy(): string; // The trigger type of trigger price
    public function getTriggerPrice(): ?float; // Trigger price
    public function getCumExecValue(): float; // Cumulative executed order value
    public function getCumExecFee(): float; // Cumulative executed trading fee
    public function getCumExecQty(): float; // Cumulative executed order qty
    public function getLeavesValue(): float; // The estimated value not executed
    public function getLeavesQty(): float; // The remaining qty not executed
    public function getTakeProfit(): float; // Take profit price
    public function getStopLoss(): float; // Stop loss price
    public function getTpslMode(): string; // TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    public function getTpLimitPrice(): float; // The limit order price when take profit price is triggered
    public function getSlLimitPrice(): float; // The limit order price when stop loss price is triggered
    public function getTpTriggerBy(): string; // The price type to trigger take profit
    public function getSlTriggerBy(): string; // The price type to trigger stop loss
    public function isReduceOnly(): bool; // Reduce only. true means reduce position size
    public function isCloseOnTrigger(): bool; // Close on trigger
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. If the uid has no group, it is 0 by default
    public function getSmpOrderId(): string; // The counterparty's orderID which triggers this SMP execution
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Interfaces\IGetOrderListResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOrderList\Response\GetOrderListResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Order quantity
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when place the order
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Order created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Order updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        Trigger direction. 1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed order value
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative executed trading fee
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed order qty
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        The estimated value not executed
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining qty not executed
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The price type to trigger stop loss
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>IGetOrderListResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>