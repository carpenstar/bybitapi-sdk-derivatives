# Contract - Account - Order - Place Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/place-order)</b>
```php
// Endpoint classname
\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\PlaceOrder::class
```

<p align="center" width="100%"><b>ПРИМЕР</b></p>

---

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

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface;

interface IPlaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setSide(string $side): self; // 'Buy' or 'Sell'
    public function setOrderType(string $orderType): self; // 'Market' or 'Limit'
    public function setQty(float $quantity): self; // Количество
    public function setTimeInForce(string $timeInForce): self; // Режим исполнения заказа. Возможные значения см. в официальной документации.
    public function setPrice(float $price): self; // Цена лимитного ордера. Оставьте пустым, если orderType = Market.
    public function setTriggerDirection(int $triggerDirection): self; // Параметр условного ордера. Используется для определения ожидаемого направления условного ордера.
    public function setTriggerPrice(string $triggerPrice): self; // Параметр условного ордера - цена триггера.
    public function setTriggerBy(string $triggerBy): self; // Тип триггерной цены. По умолчанию: LastPrice.
    public function setPositionIdx(int $positionIdx): self; // Индекс позиции. Требуется, если включен режим хеджирования.
    public function setOrderLinkId(string $orderLinkId): self; // Custom order ID. Максимум 36 символов.
    public function setTakeProfit(float $takeProfit): self; // Цена тэйк профита
    public function setStopLoss(float $stopLoss): self; // Цена стоп-лосса 
    public function setTpTriggerBy(string $tpTriggerBy): self; //Тип цены, при которой активируется тейк-профит. По умолчанию: LastPrice
    public function setSlTriggerBy(string $slTriggerBy): self; // Тип цены, при которой активируется стоп-лосс. По умолчанию: LastPrice
    public function setReduceOnly(bool $reduceOnly): self; // true - означает, что ваша позиция может уменьшиться в размере только в случае срабатывания этого ордера
    public function setSmpType(string $smpType): self; // Тип исполнения SMP.
    public function setCloseOnTrigger(bool $closeOnTrigger): self; // Параметр закрытия ордера.
    public function setTpslMode(string $tpslMode): self; // TP/SL mode
    public function setTpLimitPrice(string $tpLimitPrice): self; // Цена лимитного ордера при срабатывании цены тейк-профита. Работает только тогда, когда tpslMode=Partial или tpOrderType=Limit.
    public function setSlLimitPrice(string $slLimitPrice): self; // Цена лимитного ордера при срабатывании стоп-лосса. Работает только тогда, когда tpslMode=Partial и slOrderType=Limit.
    public function setTpOrderType(string $tpOrderType): self; // Тип ордера, который вызывает тейк-профит.
    public function setSlOrderType(string $slOrderType): self; // Тип ордера, который запускает стоп-лосс.
    
    // ... Getters
    
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Request\PlaceOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td><b>ДА</b></td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSide(string $side)</td>
    <td><b>ДА</b></td>
    <td>'Buy' or 'Sell'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderType(string $orderType)</td>
    <td><b>ДА</b></td>
    <td>'Market' or 'Limit'</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setQty(float $quantity)</td>
    <td><b>ДА</b></td>
    <td>Количество</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTimeInForce(string $timeInForce)</td>
    <td><b>ДА</b></td>
    <td>Режим исполнения заказа. Возможные значения см. на странице <a href="https://www.bybit.com/en-US/help-center/s/article/What-Are-Time-In-Force-TIF-GTC-IOC-FOK" target="_blank">официальной документации</a></td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера. Оставьте пустым, если orderType = Market.</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerDirection(int $triggerDirection)</td>
    <td>NO</td>
    <td>
        Параметр условного ордера. Используется для определения ожидаемого направления условного ордера. <br />
        1: Срабатывает, когда рыночная цена поднимается до триггерной цены. <br />
        2: Срабатывает, когда рыночная цена падает до триггерной цены <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerPrice(string $triggerPrice)</td>
    <td>НЕТ</td>
    <td>
        Параметр условного ордера. <br />
        Если вы ожидаете, что цена вырастет и сработает ваш условный ордер, убедитесь, что: <br />
        триггерPrice > markPrice <br />
        В противном случае триггерPrice < markPrice
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
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
    <td>IPlaceOrderRequestInterface::setPositionIdx(int $positionIdx)</td>
    <td>NO</td>
    <td>
        Индекс позиции. Требуется, если включен режим хеджирования. <br />
        Возможные значения: <br />
        - 0: Unidirectional mode (default) <br />
        - 1: Long <br />
        - 2: Short <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>
       Пользовательский ID заказа. Максимум 36 символов. <br />
       Поддерживаются комбинации цифр, букв (прописных и строчных), тире и подчеркиваний. <br />
       OrderLinkId можно использовать повторно после исполнения или отмены исходного заказа.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Цена тэйк-профита</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>NO</td>
    <td>Цена стоп-лосса</td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>
        Тип цены, при которой активируется тейк-профит. По умолчанию: Последняя цена <br />
        Возможные значения: <br />
        - LastPrice <br />
        - MarkPrice <br />
        - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>
        Тип цены, при которой активируется стоп-лосс. По умолчанию: Последняя цена <br />
        Возможные значения: <br />
        - LastPrice <br />
        - MarkPrice <br />
        - IndexPrice <br />
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setReduceOnly(bool $reduceOnly)</td>
    <td>НЕТ</td>
    <td>
       <a href="https://www.bybit.com/en-US/help-center/s/article/What-is-a-Reduce-Only-Order" target="_blank">Описание параметра в официальной документации</a> <br />
       true означает, что ваша позиция может уменьшиться в размере только в случае срабатывания этого ордера. <br />
       Если «reduce_only» true, то тейк-профит/стоп-лосс установить невозможно.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSmpType(string $smpType)</td>
    <td>НЕТ</td>
    <td>
      <a href="https://bybit-exchange.github.io/docs/v3/smp" target="_blank">Описание параметра в официальной документации</a> <br />
      Тип исполнения SMP.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setCloseOnTrigger(bool $closeOnTrigger)</td>
    <td>НЕТ</td>
    <td>
        <a href="https://www.bybit.com/en-US/help-center/bybitHC_Article?language=en_US&id=000001050" target="_blank">Что такое закрытие триггерным ордером?</a> <br />
        Параметр закрытия ордера. Это может только уменьшить ваше положение, но не увеличить его. <br />
        Если на момент срабатывания ордера на закрытие счета недостаточно доступного баланса, <br />
        тогда другие активные ордера аналогичных контрактов будут отменены или сокращены. <br />
        Его можно использовать, чтобы гарантировать, что ваш стоп-лосс уменьшит вашу позицию независимо от вашей текущей доступной маржи.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpslMode(string $tpslMode)</td>
    <td>НЕТ</td>
    <td>
      Режим TP/SL <br />
         - Full: вся позиция по TP/SL. Тогда tpOrderType или slOrderType должен быть Market. <br />
         - Partial: частичное выполнение TP/SL. Поддерживаются лимитные ордера TP/SL. Примечание. При создании ограничения TP/SL требуется параметр tpslMode.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpLimitPrice(string $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>
        Цена лимитного ордера при срабатывании цены тейк-профита. <br />
        Работает только в том случае, если <b>tpslMode=Partial</b> или <b>tpOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlLimitPrice(string $slLimitPrice)</td>
    <td>НЕТ</td>
    <td>
        Цена лимитного ордера при срабатывании стоп-лосса. <br />
        Работает только тогда, когда <b>tpslMode=Partial</b> и <b>slOrderType=Limit</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setTpOrderType(string $tpOrderType)</td>
    <td>НЕТ</td>
    <td>
        Тип ордера, который вызывает тейк-профит. <br />
        Возможные значения: Market (- по умолчанию) или Limit. <br />
        Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
  <tr>
    <td>IPlaceOrderRequestInterface::setSlOrderType(string $slOrderType)</td>
    <td>НЕТ</td>
    <td>
        Тип ордера, который запускает стоп-лосс. <br />
        Возможные значения: Market (- по умолчанию) или Limit. <br />
        Для <b>tpslMode=Full</b> поддерживается только <b>tpOrderType=Market</b>.
    </td>
  </tr>
</table>



<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface;

interface IPlaceOrderResponseInterface
{
    public function getOrderId(): ?string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Interfaces\IPlaceOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
    <sup><b>DTO</b></sup> <br />
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\PlaceOrder\Response\PlaceOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IPlaceOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

---