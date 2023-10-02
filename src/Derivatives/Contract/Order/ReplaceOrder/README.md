### Contract - Contract - Order - Replace Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/replace-order)</b>
<p>Модификация ордера</p>

> Вы можете изменить открытые или частично исполненные ордера.

<p><b>Параметры запроса:</b></p>

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
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязательно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>:: setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td> Торговый инструмент </td>
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
  <tr>
    <td>:: setPrice(float $price)</td>
    <td>НЕТ</td>
    <td> Новая цена ордера </td>
  </tr>
  <tr>
    <td>:: setQty(float $qty)</td>
    <td>НЕТ</td>
    <td>
      Новый обьем ордера
    </td>
  </tr>
  <tr>
    <td>:: setTriggerPrice(float $triggerPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменения цены триггера</td>
  </tr>
  <tr>
    <td>:: setTakeProfit(float $takeProfit)</td>
    <td>НЕТ</td>
    <td>Установка/изменения тейк-профита</td>
  </tr>
  <tr>
    <td>:: setStopLoss(float $stopLoss)</td>
    <td>НЕТ</td>
    <td>Установка/изменения стоп-лоса</td>
  </tr>
  <tr>
    <td>:: setTpTriggerBy(string $tpTriggerBy)</td>
    <td>НЕТ</td>
    <td>Установка/изменения - </td>
  </tr>
  <tr>
    <td>:: setSlTriggerBy(string $slTriggerBy)</td>
    <td>НЕТ</td>
    <td>Установка/изменения - </td>
  </tr>
  <tr>
    <td>:: setTriggerBy(string $triggerBy)</td>
    <td>НЕТ</td>
    <td>Установка/изменения - </td>
  </tr>
  <tr>
    <td>:: setTpLimitPrice(float $tpLimitPrice)</td>
    <td>НЕТ</td>
    <td>Установка/изменения цены триггера</td>
  </tr>
</table>