### Contract - Account - Order - Place Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
// Класс эндпоинта:
Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class
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
<p><b>Параметры запроса:</b></p>

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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Название торгового инструмента</td>
  </tr>
  <tr>
    <td>:: setSide(string $side)</td>
    <td><b>ДА</b></td>
    <td>Enum: 'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>:: setOrderType(string $orderType)</td>
    <td><b>ДА</b></td>
    <td>Enum: 'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>:: setQty(float $quantity)</td>
    <td><b>ДА</b></td>
    <td>Обьем ордера</td>
  </tr>
  <tr>
    <td>:: setTimeInForce(string $timeInForce)</td>
    <td><b>ДА</b></td>
    <td> Режим исполнения ордера. Возможные значения смотри в <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">официальной документации</a></td>
  </tr>
  <tr>
    <td>:: setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера. Оставить пустым если orderType = Market</td>
  </tr>
  <tr>
    <td>:: setTriggerDirection(int $triggerDirection)</td>
    <td>НЕТ</td>
    <td>
      Параметр условного заказа. Используется для определения ожидаемого направления условного ордера. <br />
      1: Срабатывает, когда рыночная цена поднимается до триггерной цены. <br />
      2: Срабатывает, когда рыночная цена падает до триггерной цены <br />
    </td>
  </tr>
  <tr>
    <td>:: setTriggerPrice(string $triggerPrice)</td>
    <td>НЕТ</td>
    <td>
      Параметр условного заказа. <br /> 
      Если вы ожидаете, что цена вырастет и сработает ваш условный ордер, убедитесь, что: <br />
      triggerPrice > markPrice <br />
      В противном случае, triggerPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>:: setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>
      Тип триггерной цены. По умолчанию: LastPrice. <br />
      Возможные значения: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setPositionIdx(int $positionIdx)</td>
    <td>НЕТ</td>
    <td>
      Индекс позиции. Обязательно если включен режим хеджирования. <br />
      Возможные значения: <br />
      - 0: Однонаправленный режим (по умолчанию) <br />
      - 1: Лонг <br />
      - 2: Шорт <br />
    </td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>
      Пользовательский идентификатор заказа. Максимум 36 символов. <br />
      Поддерживаются комбинации цифр, букв (заглавных и строчных), тире и подчеркиваний. <br />
      OrderLinkId можно использовать повторно после того, как исходный заказ будет исполнен или отменен.
    </td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Цена тейк-профита</td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Цена стоп-лоса</td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>
      Тип цены, по которой активируется тейк-профит. По умолчанию: LastPrice <br />
      Возможные значения: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>
      Тип цены, по которой активируется стоп-лос. По умолчанию: LastPrice <br />
      Возможные значения: <br />
      - LastPrice <br />
      - MarkPrice <br />
      - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>:: setReduceOnly(bool $reduceOnly)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Описание параметра в оф.документации</a> <br />
      true означает, что ваша позиция может уменьшиться в размере только в случае срабатывания этого ордера. <br />
      Если значение «reduce_only» равно true, то невозможно установить тейк-профит/стоп-лосс.
    </td>
  </tr>
  <tr>
    <td>:: setSmpType(string $smpType)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Описание параметра в оф.документации</a> <br />
      Тип исполнения SMP.
    </td>
  </tr>
  <tr>
    <td>:: setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">Что такое закрытие по триггерному ордеру?</a> <br />
      Параметр для закрытия заказа. Это может только уменьшить ваше положение, но не увеличить его. <br />
      Если на счету недостаточно доступного баланса при срабатывании ордера на закрытие, <br />
      то другие активные ордера аналогичных контрактов будут отменены или уменьшены. <br />
      Его можно использовать, чтобы гарантировать, что ваш стоп-лосс уменьшает вашу позицию независимо от текущей доступной маржи.
    </td>
  </tr>
  <tr>
    <td>:: setTpslMode(string $tpslMode)</td>
    <td>НЕТ</td>
    <td>
      TP/SL режим <br />
        - Full: вся позиция по TP/SL. Тогда tpOrderType или slOrderType должен быть Market. <br />
        - Partial: частичное исполнение tp/sl. Поддерживаются лимитные ордера TP/SL. Примечание: при создании ограничения tp/sl требуется параметр tpslMode.
    </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(string $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>
      Цена лимитного ордера при срабатывании цены тейк-профита. <br />
      Работает только тогда, когда <b>tpslMode=Partial</b> или <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>:: setSlLimitPrice(string $slLimitPrice)</td>
    <td>НЕТ</td>
    <td>
      Цена лимитного ордера при срабатывании стоп-лосса. <br />
      Работает только тогда, когда <b>tpslMode=Partial</b> и <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>:: setTpOrderType(string $tpOrderType)</td>
    <td>НЕТ</td>
    <td>
      Тип ордера, при котором срабатывает тейк-профит. <br />
      Возможные значения: Market (- по умолчанию) или Limit. <br />
      Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
  <tr>
    <td>:: setSlOrderType(string $slOrderType)</td>
    <td>НЕТ</td>
    <td>
      Тип ордера, при котором срабатывает стоп-лосс. <br />
      Возможные значения: Market (- по умолчанию) или Limit. <br />
      Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
</table>



<p><b>Структура ответа:</b></p>

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
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский Order ID</td>
  </tr>
</table>