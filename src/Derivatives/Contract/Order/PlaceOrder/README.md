### Contract - Account - Order - Place Order
<b>[Official documentation](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class // Endpoint classname
```
```php
use Carpenstar\ByBitAPI\BybitAPI;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequestRequest;
use Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse;

$bybit = new BybitAPI('https://api-testnet.bybit.com',"apiKey", "apiSecret");

$order = $bybit->rest(PlaceOrder::class,
    (new PlaceOrderRequestRequest())
        ->setSymbol("LTCUSDT")
        ->setSide("Buy")
        ->setOrderType("Market")
        ->setQty(1)
        ->setTimeInForce("GoodTillCancel")
        ->setOrderLinkId(uniqid())
)->getBody()->fetch();




/** @var PlaceOrderResponse $order */
echo "Order ID: " . $order->getOrderId() . PHP_EOL;
echo "Order Link ID: " . $order->getOrderLinkId() . PHP_EOL;

/**
 * Result:
 *
 * Order ID: b75cea8a-6373-4fbb-b82f-ab36e56dbe85
 * Order Link ID: 64728f00c100d
 */
```
<p><b>Request parameters:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

interface IPlaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setSide(string $side): self;
    public function setOrderType(string $orderType): self;
    public function setQty(float $quantity): self;
    public function setTimeInForce(string $timeInForce): self;
    public function setPrice(float $price): self;
    public function setTriggerDirection(int $triggerDirection): self;
    public function setTriggerPrice(string $triggerPrice): self;
    public function setTriggerBy(string $triggerBy): self;
    public function setPositionIdx(int $positionIdx): self;
    public function setOrderLinkId(string $orderLinkId): self;
    public function setTakeProfit(float $takeProfit): self;
    public function setStopLoss(float $stopLoss): self;
    public function setTpTriggerBy(string $tpTriggerBy): self;
    public function setSlTriggerBy(string $slTriggerBy): self;
    public function setReduceOnly(bool $reduceOnly): self;
    public function setSmpType(string $smpType): self;
    public function setCloseOnTrigger(bool $closeOnTrigger): self;
    public function setTpslMode(string $tpslMode): self;
    public function setTpLimitPrice(string $tpLimitPrice): self;
    public function setSlLimitPrice(string $slLimitPrice): self;
    public function setTpOrderType(string $tpOrderType): self;
    public function setSlOrderType(string $slOrderType): self;
    
    // ... Getters
    
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface</b>
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
    <td>:: setSide(string $side)</td>
    <td><b>YES</b></td>
    <td>Enum: 'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>:: setOrderType(string $orderType)</td>
    <td><b>YES</b></td>
    <td>Enum: 'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>:: setQty(float $quantity)</td>
    <td><b>YES</b></td>
    <td>Quantity</td>
  </tr>
  <tr>
    <td>:: setTimeInForce(string $timeInForce)</td>
    <td><b>YES</b></td>
    <td> Order execution mode. For possible values see <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">official documentation</a></td>
  </tr>
  <tr>
    <td>:: setPrice(float $price)</td>
    <td>NO</td>
    <td>Limit order price. Leave empty if orderType = Market</td>
  </tr>
  <tr>
    <td>:: setTriggerDirection(int $triggerDirection)</td>
    <td>NO</td>
    <td>
      Conditional order parameter. Used to determine the expected direction of a conditional order. <br />
      1: Triggered when the market price rises to the trigger price. <br />
      2: Triggered when the market price falls to the trigger price <br />
    </td>
  </tr>
  <tr>
    <td>:: setTriggerPrice(string $triggerPrice)</td>
    <td>NO</td>
    <td>
      Conditional order parameter. <br /> 
      If you expect the price to rise and trigger your conditional order, make sure that: <br />
      triggerPrice > markPrice <br />
      Otherwise, triggerPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>:: setTriggerBy(string $triggerBy)</td>
    <td>NO</td>
    <td>
      Trigger price type. Default: LastPrice. <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td>НЕТ</td>
    <td>
      Position index. Required if hedging mode is enabled. <br />
      Possible values: <br />
      - 0: Unidirectional mode (default) <br />
      - 1: Long <br />
      - 2: Short <br />
    </td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>NO</td>
    <td>
      Custom order ID. Maximum 36 characters. <br />
      Combinations of numbers, letters (uppercase and lowercase), dashes and underscores are supported. <br />
      The OrderLinkId can be reused after the original order is filled or cancelled.
    </td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>NO</td>
    <td>Take profit price</td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Stop loss price</td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>NO</td>
    <td>
      The type of price at which the take profit is activated. Default: LastPrice <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>NO</td>
    <td>
      The type of price at which the stop loss is activated. Default: LastPrice <br />
      Possible values: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setReduceOnly(bool $reduceOnly)</td>
    <td>NO</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Description of the parameter in the official documentation</a> <br />
      true means that your position can only decrease in size if this order is triggered. <br />
      If "reduce_only" is true, then take profit/stop loss cannot be set.
    </td>
  </tr>
  <tr>
    <td>:: setSmpType(string $smpType)</td>
    <td>NO</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Description of the parameter in the official documentation</a> <br />
      Execution type SMP.
    </td>
  </tr>
  <tr>
    <td>:: setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>NO</td>
    <td>
        <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">What is closing with a trigger order?</a> <br />
        Parameter for closing an order. This can only reduce your position, but not increase it. <br />
        If there is not enough available balance in the account when the close order is triggered, <br />
        then other active orders of similar contracts will be canceled or reduced. <br />
        It can be used to ensure that your stop loss reduces your position regardless of your current available margin.
    </td>
  </tr>
  <tr>
    <td>:: setTpslMode(string $tpslMode)</td>
    <td>NO</td>
    <td>
      TP/SL mode <br />
        - Full: entire position by TP/SL. Then tpOrderType or slOrderType should be Market. <br />
        - Partial: partial execution of tp/sl. TP/SL limit orders are supported. Note: When creating a tp/sl constraint, the tpslMode parameter is required.
    </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(string $tpLimitPrice)</td>
    <td>NO</td>
    <td>
        The limit order price when the take profit price is triggered. <br />
        Only works when <b>tpslMode=Partial</b> or <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>:: setSlLimitPrice(string $slLimitPrice)</td>
    <td>NO</td>
    <td>
        Limit order price when stop loss is triggered. <br />
        Only works when <b>tpslMode=Partial</b> and <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>:: setTpOrderType(string $tpOrderType)</td>
    <td>NO</td>
    <td>
        The type of order that triggers the take profit. <br />
        Possible values: Market (- default) or Limit. <br />
        For <b>tpslMode=Full</b> only <b>tpOrderType=Market</b> is supported.
    </td>
  </tr>
  <tr>
    <td>:: setSlOrderType(string $slOrderType)</td>
    <td>NO</td>
    <td>
        The type of order that triggers the stop loss. <br />
        Possible values: Market (- default) or Limit. <br />
        For <b>tpslMode=Full</b> only <b>tpOrderType=Market</b> is supported.
    </td>
  </tr>
</table>



<p><b>Response structure:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface</b>
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