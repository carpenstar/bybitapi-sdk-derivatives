### Contract - Contract - Order - Cancel All Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>Этот эндпоинт позволяет отменить все открытые ордера.</p>

<p><b>Параметры запроса:</b></p>

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self;
    public function setBaseCoin(string $baseCoin): self;
    public function setSettleCoin(string $settleCoin): self;
    
    // .. Getters
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
    <td>:: setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Отменить все открытые ордера по базовой монете</td>
  </tr>
  <tr>
    <td>:: setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Отменить все открытые ордера расчетной монетой</td>
  </tr>
</table>

<p><b>Структура ответа:</b></p>

> Результат представляет из себя нумерованный массив обьектов реализующих интерфейс ICancelAllOrderResponseInterface

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string;
    public function getOrderLinkId(): string;
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
      <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface</b>
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
