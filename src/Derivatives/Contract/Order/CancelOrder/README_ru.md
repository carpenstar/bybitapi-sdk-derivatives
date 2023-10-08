### Contract - Contract - Order - Cancel Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel)</b>
<p>Этот эндпоинт позволяет отменить указанный открытый ордер.</p>

> Вы можете отменить указанный частично исполненный заказ.


<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setOrderId(string $orderId): self;
    public function setOrderLinkId(string $orderLinkId): self;
    
    // ... Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Название торгового инструмента</td>
  </tr>
  <tr>
    <td>:: setOrderId(string $orderId)</td>
    <td>НЕТ</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>:: setOrderLinkId(string $orderLinkId)</td>
    <td>НЕТ</td>
    <td>Пользовательский order ID</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces;

interface ICancelOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelOrder\Interfaces\ICancelOrderResponseInterface</b>
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