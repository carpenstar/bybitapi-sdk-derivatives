# Contract - Contract - Order - Cancel All Order
<b>[Официальная страница документации](https://bybit-exchange.github.io/docs/derivatives/contract/cancel-all)</b>
<p>Этот эндпоинт позволяет отменить все открытые ордера.</p>

<p align="center" width="100%"><b>ПРИМЕР</b></p>

<p align="center" width="100%"><b> ... </b></p>

---

<p align="center" width="100%"><b>ПАРАМЕТРЫ ЗАПРОСА</b></p>

---

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderRequestInterface
{
    public function setSymbol(string $symbol): self; // Торговая пара
    public function setBaseCoin(string $baseCoin): self; // Закрыть все ордера по базовой монете 
    public function setSettleCoin(string $settleCoin): self; // Закрыть все ордера по расчетной монете
    
    // .. Getters
}
```

<table style="width: 100%">
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderRequestInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Request\CancelAllOrderRequest::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 45%; text-align: center">Метод</th>
    <th style="width: 5%; text-align: center">Обязтельно</th>
    <th style="width: 50%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSymbol(string $symbol)</td>
    <td>НЕТ</td>
    <td>Торговая пара</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setBaseCoin(string $baseCoin)</td>
    <td>НЕТ</td>
    <td>Закрыть все ордера по базовой монете</td>
  </tr>
  <tr>
    <td>ICancelAllOrderRequestInterface::setSettleCoin(string $settleCoin)</td>
    <td>НЕТ</td>
    <td>Закрыть все ордера по расчетной монете</td>
  </tr>
</table>

<p align="center" width="100%"><b>СТРУКТУРА ОТВЕТА</b></p>

---

> Результатом является пронумерованный массив объектов, реализующих интерфейс ICancelAllOrder ResponseInterface.

```php
namespace Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces;

interface ICancelAllOrderResponseInterface
{
    public function getOrderId(): string; // Order ID
    public function getOrderLinkId(): string; // Пользовательский ID ордера
}
```
<table style="width: 100%">
  <tr>
    <td colspan="3">
        <sup><b>INTERFACE</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Interfaces\ICancelAllOrderResponseInterface::class</b>
    </td>
  </tr>
  <tr>
    <td colspan="3">
        <sup><b>DTO</b></sup> <br />
        <b>\Carpenstar\ByBitAPI\Derivatives\Contract\Order\CancelAllOrder\Response\CancelAllOrderResponse::class</b>
    </td>
  </tr>
  <tr>
    <th style="width: 20%; text-align: center">Метод</th>
    <th style="width: 20%; text-align: center">Тип</th>
    <th style="width: 60%; text-align: center">Описание</th>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderId()</td>
    <td>string</td>
    <td>Order ID</td>
  </tr>
  <tr>
    <td>ICancelAllOrderResponseInterface::getOrderLinkId()</td>
    <td>string</td>
    <td>Пользовательский ID ордера</td>
  </tr>
</table>

---