# Contract - Contract - Order - Replace Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Модификация ордера</p>

> Вы можете изменить открытые или частично исполненные ордера.

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setOrderId(string $orderId): self; // Order ID
    public function setOrderLinkId(string $orderLinkId): self; // Пользовательский ID ордера
    public function setPrice(float $price): self; // Новая цена оредра
    public function setQty(float $qty): self; // Новое количество ордера
    public function setTriggerPrice(float $triggerPrice): self; // Установка/изменение триггерной цены
    public function setTakeProfit(float $takeProfit): self; // Установка/изменение тейк-профита
    public function setStopLoss(float $stopLoss): self; // Установка/изменение стоп-лосса
    public function setTpTriggerBy(string $tpTriggerBy): self; // Тип цены, по которой активируется тейк-профит. При установке тейк-профита этот параметр обязателен, если для ордера нет начального значения.
    public function setSlTriggerBy(string $slTriggerBy): self; // Тип цены, по которому активируется стоп-лосс. При установке стоп-лосса этот параметр обязателен, если для ордера нет начального значения.
    public function setTriggerBy(string $triggerBy): self; // Тип триггерной цены. LastPrice, IndexPrice, MarkPrice, LastPrice
    public function setTpLimitPrice(float $tpLimitPrice): self; // Цена лимитного ордера при срабатывании тейк-профита. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl
    
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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский ID ордера</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setPrice(float $price)</td>
    <td>НЕТ</td>
    <td>Новая цена ордера </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setQty(float $qty)</td>
    <td>НЕТ</td>
    <td>
      Новое количество ордера
    </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerPrice(float $triggerPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменение триггерной цены</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Установка/изменение тейк-профита</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Установка/изменение стоп-лосса</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>Тип цены, по которой активируется тейк-профит. При установке тейк-профита этот параметр обязателен, если для ордера нет начального значения. </td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>Тип цены, по которому активируется стоп-лосс. При установке стоп-лосса этот параметр обязателен, если для ордера нет начального значения.</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>Тип триггерной цены. LastPrice, IndexPrice, MarkPrice, LastPrice</td>
  </tr>
  <tr>
    <td>IReplaceOrderRequestInterface::setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>Цена лимитного ордера при срабатывании тейк-профита. Работает только тогда, когда исходный ордер устанавливает частичный лимит tp/sl</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\ReplaceOrder\Interfaces;

interface IReplaceOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string; // Пользовательский ID ордера
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
     <th style="width: 45%; text-align: center">Метод</th>
     <th style="width: 5%; text-align: center">Тип</th>
     <th style="width: 50%; text-align: center">Описание</th>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderId()</td>
     <td>string</td>
     <td>Order ID</td>
   </tr>
   <tr>
     <td>IReplaceOrderRequestInterface::getOrderLinkId()</td>
     <td>string</td>
     <td>Пользовательский идентификатор ордера</td>
   </tr>
</table>

---