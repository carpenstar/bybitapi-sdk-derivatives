# Contract - Account - Order - Get Open Orders
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/open-order)</b>
<p>Endpoint returns data on open or partially filled orders in real time.</p>

> If neither orderId nor orderLinkId is passed, no more than 500 open or partially filled orders will be returned.
> Entries are sorted by creation time from newest to oldest.

<p align="center" width="100%"><b>REQUEST PARAMETERS</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersRequestInterface
{
    public function setSymbol(string $symbol): self; // Trading pair
    public function setBaseCoin(string $baseCoin): self; // Base token
    public function setSettleCoin(string $settleCoin): self; // Settle coin
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID
    public function setOrderFilter(string $orderFilter): self; // Possible values: Order: active order, StopOrder: conditional order
    public function setCursor(string $cursor): self; // Next page cursor
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Method</th>
    <th style="width: 5%; text-align: center">Required</th>
    <th style="width: 50%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>NO</td>
    <td> Base token </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>NO</td>
    <td>Settle coin</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderId(string $orderId)</td>
    <td>NO</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>Custom order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setOrderFilter(string $orderFilter)</td>
    <td>NO</td>
    <td>Possible values: <b>Order</b>: active order, <b>StopOrder</b>: conditional order</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersRequestInterface::setCursor(string $cursor)</td>
    <td>NO</td>
    <td>Next page cursor</td>
  </tr>
</table>

<p align="center" width="100%"><b>RESPONSE STRUCTURE</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces;

interface IGetOpenOrdersResponseInterface
{
    public function getSymbol(): string; // Trading pair
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Custom Order ID
    public function getSide(): string; // Side. Buy,Sell
    public function getOrderType(): string; // Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    public function getPrice(): float; // Order price
    public function getQty(): float; // Order qty
    public function getTimeInForce(): string; // Time in force
    public function getOrderStatus(): string; // Order status
    public function getLastPriceOnCreated(): string; // Last price when create the order
    public function getCreatedTime(): \DateTime; // Created timestamp
    public function getUpdatedTime(): \DateTime; // Updated timestamp
    public function getCancelType(): string; // Cancel type
    public function getStopOrderType(): string; // Stop order type
    public function getTriggerDirection(): int; // 1: rise, 2: fall
    public function getTriggerBy(): string; // The trigger type of trigger price
    public function getTriggerPrice(): ?float; // Trigger price
    public function getCumExecValue(): float; //  Cumulative executed position value
    public function getCumExecFee(): float; // Cumulative trading fee
    public function getCumExecQty(): float; // Cumulative executed qty
    public function getLeavesValue(): float; // The remaining value waiting to be traded
    public function getLeavesQty(): float; // The remaining quantity waiting to be traded
    public function getTakeProfit(): float; // Take profit price
    public function getStopLoss(): float; // Stop loss price
    public function getTpslMode(): string; // TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    public function getTpLimitPrice(): float; // The limit order price when take profit price is triggered
    public function getSlLimitPrice(): float; // The limit order price when stop loss price is triggered
    public function getTpTriggerBy(): string; // Trigger type of take profit
    public function getSlTriggerBy(): string; // The limit order price when stop loss price is triggered
    public function isReduceOnly(): bool; // Reduce only. true means reduce position size
    public function isCloseOnTrigger(): bool; // Close on trigger. What is a close on trigger order?
    public function getSmpType(): string; // SMP execution type
    public function getSmpGroup(): int; // Smp group ID. If the uid has no group, it is 0 by default
    public function getSmpOrderId(): string; // The counterparty's orderID which triggers this SMP execution
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Interfaces\IGetOpenOrdersResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\GetOpenOrders\Request\GetOpenOrdersRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Method</th>
    <th style="width: 20%; text-align: center">Type</th>
    <th style="width: 60%; text-align: center">Description</th>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSymbol()</td>
    <td>string</td>
    <td>Trading pair</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Custom Order ID</td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSide()</td>
    <td>string</td>
    <td>
        Side. Buy,Sell
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getOrderType()</td>
    <td>string</td>
    <td>
        Order type. Market,Limit. For TP/SL order, it means the order type after triggered
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getPrice()</td>
    <td>float</td>
    <td>
        Order price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getQty()</td>
    <td>float</td>
    <td>
        Order qty
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTimeInForce()</td>
    <td>string</td>
    <td>
        Time in force
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLastPriceOnCreated()</td>
    <td>string</td>
    <td>
        Last price when create the order
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCreatedTime()</td>
    <td>DateTime</td>
    <td>
        Created timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getUpdatedTime()</td>
    <td>DateTime</td>
    <td>
        Updated timestamp (ms)
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCancelType()</td>
    <td>string</td>
    <td>
        Cancel type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopOrderType()</td>
    <td>string</td>
    <td>
        Stop order type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerDirection()</td>
    <td>int</td>
    <td>
        1: rise, 2: fall
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerBy()</td>
    <td>string</td>
    <td>
        The trigger type of trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTriggerPrice()</td>
    <td>null|float</td>
    <td>
        Trigger price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecValue()</td>
    <td>float</td>
    <td>
        Cumulative executed position value
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecFee()</td>
    <td>float</td>
    <td>
        Cumulative trading fee
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getCumExecQty()</td>
    <td>float</td>
    <td>
        Cumulative executed qty
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesValue()</td>
    <td>float</td>
    <td>
        The remaining value waiting to be traded
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getLeavesQty()</td>
    <td>float</td>
    <td>
        The remaining quantity waiting to be traded
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTakeProfit()</td>
    <td>float</td>
    <td>
        Take profit price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getStopLoss()</td>
    <td>float</td>
    <td>
        Stop loss price
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getTpslMode()</td>
    <td>string</td>
    <td>
        TP/SL mode, Full: entire position for TP/SL. Partial: partial position tp/sl
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSlTriggerBy()</td>
    <td>string</td>
    <td>
        The limit order price when stop loss price is triggered
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isReduceOnly()</td>
    <td>bool</td>
    <td>
        Reduce only. true means reduce position size
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::isCloseOnTrigger()</td>
    <td>string</td>
    <td>
        Close on trigger. What is a close on trigger order?
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpType()</td>
    <td>string</td>
    <td>
        SMP execution type
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpGroup()</td>
    <td>string</td>
    <td>
        Smp group ID. If the uid has no group, it is 0 by default
    </td>
  </tr>
  <tr>
    <td>IGetOpenOrdersResponseInterface::getSmpOrderId()</td>
    <td>string</td>
    <td>
        The counterparty's orderID which triggers this SMP execution
    </td>
  </tr>
</table>